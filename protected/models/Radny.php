<?php

/**
 * This is the model class for table "rdn".
 *
 * The followings are the available columns in table 'rdn':
 * @property integer $RDN_ID
 * @property string $RDN_FIRSTNAME
 * @property string $RDN_LASTNAME
 * @property string $RDN_EMAIL
 * @property string $RDN_PHONE
 * @property string $RDN_DUTY
 * @property string $RDN_WEBSITE
 * @property string $RDN_PHOTO
 * @property string $RDN_PROMISE
 * @property string $RDN_INTERVIEW
 * @property string $RDN_PROMISE_CMT
 * @property string $RDN_INTERVIEW_CMT
 * @property integer $RDN_TNR_ID
 * @property integer $RDN_OKR_ID
 *
 * The followings are the available model relations:
 * @property CmtUch[] $cmtUches
 * @property Int[] $ints
 * @property Tnr $rDNTNR
 * @property Okr $rDNOKR
 * @property RdnInKms[] $rdnInKms
 * @property Rnk $rnk
 */
class Radny extends CActiveRecord
{
	public function behaviors(){
		return array( 'CAdvancedArBehavior' => array(
		            'class' => 'application.extensions.CAdvancedArBehavior'));
	}
	
	public $komisjeRadnychIDs = array();
	public $dzielniceDyzurowIDs = array();
	
	public function afterFind()
	{
		if(!empty($this->KomisjeRadnych))
		{
			foreach($this->KomisjeRadnych as $n=>$komisja)
			$this->komisjeRadnychIDs[] = $komisja->KMS_ID;
		}
		if(!empty($this->DzielniceDyzurow))
		{
			foreach($this->DzielniceDyzurow as $n=>$dzielnica)
			$this->dzielniceDyzurowIDs[] = $dzielnica->DZL_ID;
		}
	}
	
	/**
	 * Returns the static model of the specified AR class.
	 * @return Radny the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public static function GetAllGroupedByClubs()
	{
		$list = array();
		$clubs = Club::model()->findAll();

		foreach($clubs as $club)
		{
			$criteria = new CDbCriteria;
			$criteria->condition='RDN_CLB_ID=:RDN_CLB_ID';
			$criteria->params=array(':RDN_CLB_ID'=>$club->CLB_ID);
			$list[$club->CLB_NAME] = Radny::model()->findAll($criteria);
		}
		
		return $list;
	}
	
	public function Get3Last()
	{
		return Uchwala::model()->find3LastByRadny($this->RDN_ID);
	}
	
	public function GetLastInterpelacje()
	{
		return Interpelacja::model()->findLastByRadny($this->RDN_ID);
	}
	
	public function GetCountInterpelacje()
	{
		return Interpelacja::countByRadny($this->RDN_ID);
	}
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'rdn';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RDN_FIRSTNAME, RDN_LASTNAME, RDN_EMAIL, RDN_PHONE, RDN_WEBSITE, RDN_PHOTO, RDN_PROMISE, RDN_INTERVIEW, RDN_TNR_ID, RDN_OKR_ID', 'required'),
			array('RDN_TNR_ID, RDN_OKR_ID, RDN_CLB_ID,', 'numerical', 'integerOnly'=>true),
			array('RDN_FIRSTNAME, RDN_LASTNAME', 'length', 'max'=>64),
			array('RDN_EMAIL, RDN_WEBSITE', 'length', 'max'=>128),
			array('RDN_PHONE', 'length', 'max'=>32),
			array('RDN_PHOTO, RDN_STATEMENT_FILE', 'length', 'max'=>256),
			array('RDN_INFO_RNK', 'length', 'max'=>512),
			array('RDN_DUTY, RDN_PROMISE_CMT, RDN_INTERVIEW_CMT, RDN_INFO_RNK', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('RDN_ID, RDN_FIRSTNAME, RDN_LASTNAME, RDN_EMAIL, RDN_PHONE, RDN_DUTY, RDN_WEBSITE, RDN_PHOTO, RDN_PROMISE, RDN_INTERVIEW, RDN_PROMISE_CMT, RDN_INTERVIEW_CMT, RDN_TNR_ID, RDN_CLB_ID, RDN_OKR_ID, RDN_STATEMENT_FILE, RDN_INFO_RNK', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'cmtUches' => array(self::HAS_MANY, 'CmtUch', 'CMT_RDN_ID'),
			'Interpelacje' => array(self::HAS_MANY, 'Interpelacja', 'INT_RDN_ID'),
			'Tenure' => array(self::BELONGS_TO, 'Tenure', 'RDN_TNR_ID'),
			'Okreg' => array(self::BELONGS_TO, 'Okreg', 'RDN_OKR_ID'),
			'Klub' => array(self::BELONGS_TO, 'Club', 'RDN_CLB_ID'),
			'KomisjeRadnych' => array(self::MANY_MANY, 'Komisja', 'rdn_in_kms(RDN_IN_KMS_RND_ID, RDN_IN_KMS_KMS_ID)'),
			'Ranking' => array(self::HAS_ONE, 'Ranking', 'RNK_RDN_ID'),
			'DzielniceDyzurow' => array(self::MANY_MANY, 'Dzielnica', 'rdn_in_dzl(RDN_IN_DZL_RDN_ID, RDN_IN_DZL_DZL_ID)'),
		);
	}
	
	public function ImieNazwisko()
	{
		return $this->RDN_FIRSTNAME . " " . $this->RDN_LASTNAME;
	}
	
	public function GetImieNazwisko()
	{
		return $this->ImieNazwisko();
	}
	
	public static function GetList()
	{
		$listData=array();
		$models = Radny::model()->findAll();
		
		foreach($models as $model)
		{
			$value=$model->RDN_ID;
			$text=$model->ImieNazwisko();
			$listData[$value]=$text;
		}
		
		return $listData;
	}
	
	public function GetBrief($text)
	{
		$pagebreak = "<!-- pagebreak -->";
		$pos = strpos($text, $pagebreak);
		if ($pos === false) 
			return false;
	
		$pieces = explode($pagebreak, $text);
		return strip_tags($pieces[0]);
	}
	
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'RDN_ID' => '#',
			'RDN_FIRSTNAME' => 'Imię',
			'RDN_LASTNAME' => 'Nazwisko',
			'RDN_EMAIL' => 'Email',
			'RDN_PHONE' => 'Telefon',
			'RDN_DUTY' => 'Dyżur',
			'RDN_WEBSITE' => 'Strona internetowa',
			'RDN_PHOTO' => 'Zdjęcie',
			'RDN_PROMISE' => 'Obietnice',
			'RDN_INTERVIEW' => 'Wywiad',
			'RDN_PROMISE_CMT' => 'Komentarz do obietnicy',
			'RDN_INTERVIEW_CMT' => 'Komentarz do wywiadu',
			'RDN_TNR_ID' => 'Kadencja',
			'RDN_OKR_ID' => 'Okręg',
			'RDN_CLB_ID' => 'Klub',
			'RDN_STATEMENT_FILE' => 'Oświadczenie majątkowe',
			'RDN_INFO_RNK' => 'Dodatkowa informacja dot. rankingu',
			'komisjeRadnychIDs' => 'Komisje',
			'dzielniceDyzurowIDs' => 'Dyżury na dzielnicach',
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

		$criteria->compare('RDN_ID',$this->RDN_ID);
		$criteria->compare('RDN_FIRSTNAME',$this->RDN_FIRSTNAME,true);
		$criteria->compare('RDN_LASTNAME',$this->RDN_LASTNAME,true);
		$criteria->compare('RDN_EMAIL',$this->RDN_EMAIL,true);
		$criteria->compare('RDN_PHONE',$this->RDN_PHONE,true);
		$criteria->compare('RDN_DUTY',$this->RDN_DUTY,true);
		$criteria->compare('RDN_WEBSITE',$this->RDN_WEBSITE,true);
		$criteria->compare('RDN_PHOTO',$this->RDN_PHOTO,true);
		$criteria->compare('RDN_PROMISE',$this->RDN_PROMISE,true);
		$criteria->compare('RDN_INTERVIEW',$this->RDN_INTERVIEW,true);
		$criteria->compare('RDN_PROMISE_CMT',$this->RDN_PROMISE_CMT,true);
		$criteria->compare('RDN_INTERVIEW_CMT',$this->RDN_INTERVIEW_CMT,true);
		$criteria->compare('RDN_TNR_ID',$this->RDN_TNR_ID);
		$criteria->compare('RDN_CLB_ID',$this->RDN_CLB_ID);
		$criteria->compare('RDN_OKR_ID',$this->RDN_OKR_ID);
		$criteria->compare('RDN_STATEMENT_FILE',$this->RDN_STATEMENT_FILE, true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}