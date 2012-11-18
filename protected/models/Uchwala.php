<?php

/**
 * This is the model class for table "uch".
 *
 * The followings are the available columns in table 'uch':
 * @property integer $UCH_ID
 * @property string $UCH_FILE
 * @property string $UCH_NAME
 * @property integer $UCH_TYPE
 * @property integer $UCH_KMS_ID
 * @property string $UCH_DATE
 * @property integer $UCH_NUMBER
 *
 * The followings are the available model relations:
 * @property CmtUch[] $cmtUches
 * @property Exp[] $exps
 * @property UchInCat[] $uchInCats
 * @property UchInDzl[] $uchInDzls
 * @property Vot[] $vots
 */
class Uchwala extends CActiveRecord
{
	public function behaviors(){
		return array( 'CAdvancedArBehavior' => array(
			            'class' => 'application.extensions.CAdvancedArBehavior'));
	}
	
	public $dzielniceUchwalIDs = array();
	public $kategorieUchwalIDs = array();
	public $votes = array();
	
	public function find3LastByRadny($radnyID)
	{
		return Yii::app()->db->createCommand('SELECT * 
			FROM  `uch` u,  `vot` v
			WHERE u.UCH_ID = v.VOT_UCH_ID
			AND v.VOT_RDN_ID = '.$radnyID.'
			AND u.UCH_TYPE = '.UchwalaType::Uchwala.'
			order by u.UCH_DATE desc
			LIMIT 0 , 3')->queryAll();
	}
	
	public function find3LastByDzielnica($dzielnicaID)
	{
		return Yii::app()->db->createCommand('select * 
			from uch u , uch_in_dzl d
			where u.UCH_ID = d.UCH_IN_DZL_UCH_ID
			and d.UCH_IN_DZL_DZL_ID = '.$dzielnicaID.'
			and u.UCH_TYPE = '.UchwalaType::Uchwala.'
			and u.UCH_ID in 
			( 
			select UCH_IN_DZL_UCH_ID from uch_in_dzl
			group by UCH_IN_DZL_UCH_ID
			having count(UCH_IN_DZL_UCH_ID) < (select count(*) from dzl)
			)
			order by u.UCH_DATE desc
			LIMIT 0 , 3')->queryAll();
	}
	
	public function userFind($searchParams)
	{
		$condition = "1=1";
		
		if (count($searchParams['Kategorie']) > 0)
		{
			$query = "select distinct UCH_IN_CAT_UCH_ID from uch_in_cat where UCH_IN_CAT_CAT_ID in ( ".implode(', ', $searchParams['Kategorie']).")";
			$list = Yii::app()->db->createCommand($query)->queryAll();
			foreach ($list as $id)
				$uchwaly_w_kategoriach[] = $id['UCH_IN_CAT_UCH_ID'];
			
			if (count($uchwaly_w_kategoriach) > 0)
				$condition .= " and UCH_ID in (".implode(', ', $uchwaly_w_kategoriach).")";
			else 
				$condition .= " and 1=0";
		}

		if ($searchParams['DzielniceAll'] == 'on')
		{
			$query = 'SELECT distinct UCH_IN_DZL_UCH_ID
			FROM uch_in_dzl
			WHERE UCH_IN_DZL_DZL_ID in 
			( 
			select UCH_IN_DZL_UCH_ID from uch_in_dzl
			group by UCH_IN_DZL_UCH_ID
			having count(UCH_IN_DZL_UCH_ID) >= (select count(*) from dzl)
			)';
			
			$list = Yii::app()->db->createCommand($query)->queryAll();
			foreach ($list as $id)
				$uchwaly_w_dzielnicach[] = $id['UCH_IN_DZL_UCH_ID'];
				
			if (count($uchwaly_w_dzielnicach) > 0)
				$condition .= " and UCH_ID in (".implode(', ', $uchwaly_w_dzielnicach).")";
			else 
				$condition .= " and 1=0";
		}
		else if (count($searchParams['Dzielnice']) > 0)
		{
			$query = 'select distinct UCH_IN_DZL_UCH_ID
			from uch_in_dzl
			WHERE UCH_IN_DZL_DZL_ID in ( '.implode(', ', $searchParams['Dzielnice']).' )
			and UCH_IN_DZL_UCH_ID in 
			( 
			select UCH_IN_DZL_UCH_ID from uch_in_dzl
			group by UCH_IN_DZL_UCH_ID
			having count(UCH_IN_DZL_UCH_ID) < (select count(*) from dzl)
			)';
			
			//"select distinct UCH_IN_DZL_UCH_ID from uch_in_dzl where UCH_IN_DZL_DZL_ID in ( ".implode(', ', $searchParams['Dzielnice']).")";
			
			$list = Yii::app()->db->createCommand($query)->queryAll();
			foreach ($list as $id)
				$uchwaly_w_dzielnicach[] = $id['UCH_IN_DZL_UCH_ID'];
				
			if (count($uchwaly_w_dzielnicach) > 0)
				$condition .= " and UCH_ID in (".implode(', ', $uchwaly_w_dzielnicach).")";
			else 
				$condition .= " and 1=0";
		}
		
		if (isset($searchParams['Radny']) && isset($searchParams['Glosowanie']))
		{
			$query = "select distinct VOT_UCH_ID from vot where VOT_RDN_ID = ".$searchParams['Radny']." and VOT_VOTE = ".$searchParams['Glosowanie'];
			$list = Yii::app()->db->createCommand($query)->queryAll();
			foreach ($list as $id)
				$uchwaly_glosowanie[] = $id['VOT_UCH_ID'];
				
				if (count($uchwaly_glosowanie) > 0)
			$condition .= " and UCH_ID in (".implode(', ', $uchwaly_glosowanie).")";
			else 
				$condition .= " and 1=0";
		}
		
		$params = array();
		
		if (isset($searchParams['DataOd']) && $searchParams['DataOd'] != "")
		{
			$condition .= " and UCH_DATE >= :UCH_DATE_OD ";
			$params[':UCH_DATE_OD'] = $searchParams['DataOd'];
		}
		
		if (isset($searchParams['DataDo']) && $searchParams['DataDo'] != "")
		{
			$condition .= " and UCH_DATE <= :UCH_DATE_DO ";
			$params[':UCH_DATE_DO'] = $searchParams['DataDo'];
		}
		
		if (isset($searchParams['Name']) && $searchParams['Name'] != "")
		{
			$condition .= " and UCH_NAME like :UCH_NAME ";
			$params[':UCH_NAME'] = '%'.$searchParams['Name'].'%';
		}
		
		$condition .= " and UCH_TYPE = ".UchwalaType::Uchwala;
		
		$criteria = new CDbCriteria(array(
				'condition'=>$condition,
				'params'=>$params
			));

		$dataProvider = new CActiveDataProvider('Uchwala', array(
				'criteria'=>$criteria,
			));
			
		return $dataProvider;
	}
	
	public function afterFind()
	{
		if(!empty($this->DzielniceUchwal))
		{
			foreach($this->DzielniceUchwal as $n=>$dzielnica)
			$this->dzielniceUchwalIDs[] = $dzielnica->DZL_ID;
		}
		if(!empty($this->KategorieUchwal))
		{
			foreach($this->KategorieUchwal as $n=>$kategoria)
			$this->kategorieUchwalIDs[] = $kategoria->CAT_ID;
		}
		
		$criteria = new CDbCriteria;
		$criteria->condition='VOT_UCH_ID=:VOT_UCH_ID and VOT_VOTE=:VOT_VOTE';
		$criteria->params=array(':VOT_UCH_ID'=>$this->UCH_ID, ':VOT_VOTE'=>'1');
		$votesZa = Vote::model()->findAll($criteria);
		
		$this->votes['count_za'] = count($votesZa);
		foreach($votesZa as $i=>$item)
			$this->votes['za'] .= "<li>".$item->Radny->ImieNazwisko()."</li>";
			
		$criteria = new CDbCriteria;
		$criteria->condition='VOT_UCH_ID=:VOT_UCH_ID and VOT_VOTE=:VOT_VOTE';
		$criteria->params=array(':VOT_UCH_ID'=>$this->UCH_ID, ':VOT_VOTE'=>'-1');
		$votesPrzeciw = Vote::model()->findAll($criteria);
		
		$this->votes['count_przeciw'] = count($votesPrzeciw);
		foreach($votesPrzeciw as $i=>$item)
			$this->votes['przeciw'] .= "<li>".$item->Radny->ImieNazwisko()."</li>";
			
		$criteria = new CDbCriteria;
		$criteria->condition='VOT_UCH_ID=:VOT_UCH_ID and VOT_VOTE=:VOT_VOTE';
		$criteria->params=array(':VOT_UCH_ID'=>$this->UCH_ID, ':VOT_VOTE'=>'0');
		$votesWstrzymal = Vote::model()->findAll($criteria);
		
		$this->votes['count_wstrzymal'] = count($votesWstrzymal);
		foreach($votesWstrzymal as $i=>$item)
			$this->votes['wstrzymal'] .= "<li>".$item->Radny->ImieNazwisko()."</li>";
			
		$criteria = new CDbCriteria;
		$criteria->condition='VOT_UCH_ID=:VOT_UCH_ID and VOT_VOTE=:VOT_VOTE';
		$criteria->params=array(':VOT_UCH_ID'=>$this->UCH_ID, ':VOT_VOTE'=>'2');
		$votesNieob = Vote::model()->findAll($criteria);
		
		$this->votes['count_nieobecny'] = count($votesNieob);
		foreach($votesNieob as $i=>$item)
			$this->votes['nieobecny'] .= "<li>".$item->Radny->ImieNazwisko()."</li>";

		//	var_dump($this->votes);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Uchwala the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'uch';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('UCH_FILE, UCH_TYPE, UCH_KMS_ID', 'required'),
			array('UCH_TYPE, UCH_KMS_ID, UCH_NUMBER', 'numerical', 'integerOnly'=>true),
			array('UCH_FILE', 'length', 'max'=>256),
			array('UCH_NAME, UCH_INVITATION', 'length', 'max'=>512),
			array('UCH_DATE', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('UCH_ID, UCH_FILE, UCH_NAME, UCH_TYPE, UCH_KMS_ID, UCH_DATE, UCH_NUMBER, UCH_INVITATION', 'safe', 'on'=>'search'),
		);
	}
	
	public function GetComments()
	{
		$criteria = new CDbCriteria();
		$criteria->condition = 'CMT_UCH_ID = '.$this->UCH_ID.' and CMT_TYPE in ('.KomentarzUchwalyType::Dziennikarski.','.KomentarzUchwalyType::Ekspercki.','.KomentarzUchwalyType::Radnego.')';

		$dataProvider = new CActiveDataProvider('KomentarzUchwaly', array(
			'criteria'=>$criteria,
		));
		
		
		return $dataProvider;
	}
	
	public function GetAllComented()
	{
		$query = 'select distinct CMT_UCH_ID from cmt_uch where CMT_TYPE in ('.KomentarzUchwalyType::Dziennikarski.','.KomentarzUchwalyType::Ekspercki.','.KomentarzUchwalyType::Radnego.')';
		$list = Yii::app()->db->createCommand($query)->queryAll();
		foreach ($list as $id)
			$ids[] = $id['CMT_UCH_ID'];
		//$ids = implode(", ", $ids);
		
		//$query = 'select * from uch where UCH_ID in ('.implode(", ", $ids).')';
		
		//var_dump($query);
		
		//$dataProvider = Yii::app()->db->createCommand($query)->queryAll();
		$criteria = new CDbCriteria();
		$criteria->condition='UCH_ID in ('.implode(", ", $ids).')';

		$dataProvider = new CActiveDataProvider('Uchwala', array(
			'criteria'=>$criteria,
		));
		
		
		return $dataProvider;
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'Komentarze' => array(self::HAS_MANY, 'KomentarzUchwaly', 'CMT_UCH_ID'),
			'exps' => array(self::HAS_MANY, 'Exp', 'EXP_UCH_ID'),
			'Komisja' => array(self::BELONGS_TO, 'Komisja', 'UCH_KMS_ID'),
			'DzielniceUchwal' => array(self::MANY_MANY, 'Dzielnica', 'uch_in_dzl(UCH_IN_DZL_UCH_ID, UCH_IN_DZL_DZL_ID)'),
			'KategorieUchwal' => array(self::MANY_MANY, 'Kategoria', 'uch_in_cat(UCH_IN_CAT_UCH_ID, UCH_IN_CAT_CAT_ID)'),
		);
	}
	
	public function GetBrief()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return substr($this->UCH_NAME, 0, 70)."(...)";
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'UCH_ID' => '#',
			'UCH_FILE' => 'Plik',
			'UCH_NAME' => 'Nazwa',
			'UCH_TYPE' => 'Typ',
			'UCH_KMS_ID' => 'Komisja',
			'dzielniceUchwalIDs' => 'Dzielnice',
			'kategorieUchwalIDs' => 'Kategorie',
			'glosowanie' => 'Głosowanie',
			'UCH_DATE' => 'Data',
			'UCH_NUMBER' => 'Numer',
			'UCH_INVITATION' => 'Dodatkowy opis',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('UCH_ID',$this->UCH_ID);
		$criteria->compare('UCH_FILE',$this->UCH_FILE,true);
		$criteria->compare('UCH_NAME',$this->UCH_NAME,true);
		$criteria->compare('UCH_TYPE',UchwalaType::Uchwala);
		$criteria->compare('UCH_KMS_ID',$this->UCH_KMS_ID);
		$criteria->compare('UCH_DATE',$this->UCH_DATE,true);
		$criteria->compare('UCH_NUMBER',$this->UCH_NUMBER);
		$criteria->compare('UCH_INVITATION',$this->UCH_INVITATION);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}