<?php

/**
 * This is the model class for table "cmt_uch".
 *
 * The followings are the available columns in table 'cmt_uch':
 * @property integer $CMT_ID
 * @property string $CMT_DATE
 * @property string $CMT_AUTHOR
 * @property integer $CMT_TYPE
 * @property string $CMT_CONTENT
 * @property integer $CMT_RDN_ID
 * @property integer $CMT_UCH_ID
 *
 * The followings are the available model relations:
 * @property Rdn $cMTRDN
 * @property Uch $cMTUCH
 */
class KomentarzUchwaly extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return KomentarzUchwaly the static model class
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
		return 'cmt_uch';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CMT_DATE, CMT_TYPE, CMT_CONTENT, CMT_UCH_ID', 'required'),
			array('CMT_TYPE, CMT_RDN_ID, CMT_UCH_ID', 'numerical', 'integerOnly'=>true),
			array('CMT_AUTHOR', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('CMT_ID, CMT_DATE, CMT_AUTHOR, CMT_TYPE, CMT_CONTENT, CMT_RDN_ID, CMT_UCH_ID', 'safe', 'on'=>'search'),
			array('CMT_AUTHOR', 'requiredAuthor'),
			array('CMT_RDN_ID', 'requiredRadny'),
		);
	}
	
	public function requiredAuthor($attribute)
	{
		if ($this->CMT_TYPE == KomentarzUchwalyType::Dziennikarski || $this->CMT_TYPE == KomentarzUchwalyType::Ekspercki)
			if ($this->$attribute == "" || $this->$attribute == null)
				$this->addError($attribute, 'Pole Autor nie może być puste.');
	}
	
	public function requiredRadny($attribute)
	{
		if ($this->CMT_TYPE == KomentarzUchwalyType::Radnego)
			if ($this->$attribute == null)
				$this->addError($attribute, 'Pole Radny nie może być puste.');
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'Radny' => array(self::BELONGS_TO, 'Radny', 'CMT_RDN_ID'),
			'Uchwala' => array(self::BELONGS_TO, 'Uchwala', 'CMT_UCH_ID'),
		);
	}
	
	public function GetAuthor()
	{
		return $this->CMT_TYPE == KomentarzUchwalyType::Radnego ? $this->Radny->ImieNazwisko() : $this->CMT_AUTHOR;
	}
	
	public function GetTypeDescription()
	{
		return KomentarzUchwalyType::GetDescription($this->CMT_TYPE);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CMT_ID' => '#',
			'CMT_DATE' => 'Data',
			'CMT_AUTHOR' => 'Autor',
			'CMT_TYPE' => 'Typ',
			'CMT_CONTENT' => 'Treść',
			'CMT_RDN_ID' => 'Autor',
			'CMT_UCH_ID' => 'Uchwała',
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

		$criteria->compare('CMT_ID',$this->CMT_ID);
		$criteria->compare('CMT_DATE',$this->CMT_DATE,true);
		$criteria->compare('CMT_AUTHOR',$this->CMT_AUTHOR,true);
		$criteria->compare('CMT_TYPE',$this->CMT_TYPE);
		$criteria->compare('CMT_CONTENT',$this->CMT_CONTENT,true);
		$criteria->compare('CMT_RDN_ID',$this->CMT_RDN_ID);
		$criteria->compare('CMT_UCH_ID',$this->CMT_UCH_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}