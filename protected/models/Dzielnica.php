<?php

/**
 * This is the model class for table "dzl".
 *
 * The followings are the available columns in table 'dzl':
 * @property integer $DZL_ID
 * @property string $DZL_NAME
 * @property integer $DZL_OKR_ID
 * @property integer $DZL_CITIZEN_COUNT
 * @property integer $DZL_AREA
 *
 * The followings are the available model relations:
 * @property Okr $dZLOKR
 * @property UchInDzl[] $uchInDzls
 */
class Dzielnica extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Dzielnica the static model class
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
		return 'dzl';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('DZL_NAME, DZL_OKR_ID', 'required'),
			array('DZL_OKR_ID, DZL_CITIZEN_COUNT, DZL_AREA', 'numerical', 'integerOnly'=>true),
			array('DZL_NAME', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('DZL_ID, DZL_NAME, DZL_OKR_ID, DZL_CITIZEN_COUNT, DZL_AREA', 'safe', 'on'=>'search'),
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
			'Okreg' => array(self::BELONGS_TO, 'Okreg', 'DZL_OKR_ID'),
			'uchInDzls' => array(self::HAS_MANY, 'UchInDzl', 'UCH_IN_DZL_DZL_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'DZL_ID' => '#',
			'DZL_NAME' => 'Nazwa',
			'DZL_OKR_ID' => 'Okręg',
			'DZL_CITIZEN_COUNT' => 'Liczba mieszkańców',
			'DZL_AREA' => 'Powierzchnia',
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

		$criteria->compare('DZL_ID',$this->DZL_ID);
		$criteria->compare('DZL_NAME',$this->DZL_NAME,true);
		$criteria->compare('DZL_OKR_ID',$this->DZL_OKR_ID);
		$criteria->compare('DZL_CITIZEN_COUNT',$this->DZL_CITIZEN_COUNT);
		$criteria->compare('DZL_AREA',$this->DZL_AREA);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}