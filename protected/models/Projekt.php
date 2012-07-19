<?php

/**
 * This is the model class for table "uch".
 *
 * The followings are the available columns in table 'uch':
 * @property integer $UCH_ID
 * @property string $UCH_FILE
 * @property string $UCH_NAME
 * @property integer $UCH_TYPE
 * @property integer $UCH_CAT_ID
 * @property integer $UCH_KMS_ID
 *
 * The followings are the available model relations:
 * @property CmtUch[] $cmtUches
 * @property Exp[] $exps
 * @property Cat $uCHCAT
 * @property Kms $uCHKMS
 * @property UchInDzl[] $uchInDzls
 */
class Projekt extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Projekt the static model class
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
			array('UCH_FILE, UCH_TYPE, UCH_CAT_ID, UCH_KMS_ID', 'required'),
			array('UCH_TYPE, UCH_CAT_ID, UCH_KMS_ID', 'numerical', 'integerOnly'=>true),
			array('UCH_FILE', 'length', 'max'=>256),
			array('UCH_NAME', 'length', 'max'=>512),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('UCH_ID, UCH_FILE, UCH_NAME, UCH_TYPE, UCH_CAT_ID, UCH_KMS_ID', 'safe', 'on'=>'search'),
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
			'cmtUches' => array(self::HAS_MANY, 'CmtUch', 'CMT_UCH_ID'),
			'exps' => array(self::HAS_MANY, 'Exp', 'EXP_UCH_ID'),
			'Kategoria' => array(self::BELONGS_TO, 'Kategoria', 'UCH_CAT_ID'),
			'Komisja' => array(self::BELONGS_TO, 'Komisja', 'UCH_KMS_ID'),
			'uchInDzls' => array(self::HAS_MANY, 'UchInDzl', 'UCH_IN_DZL_UCH_ID'),
		);
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
			'UCH_CAT_ID' => 'Kategoria',
			'UCH_KMS_ID' => 'Komisja',
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
		$criteria->compare('UCH_TYPE',2);
		$criteria->compare('UCH_CAT_ID',$this->UCH_CAT_ID);
		$criteria->compare('UCH_KMS_ID',$this->UCH_KMS_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}