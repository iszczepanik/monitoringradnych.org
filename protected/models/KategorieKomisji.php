<?php

/**
 * This is the model class for table "kms_in_cat".
 *
 * The followings are the available columns in table 'kms_in_cat':
 * @property integer $KMS_IN_CAT_ID
 * @property integer $KMS_IN_CAT_KMS_ID
 * @property integer $KMS_IN_CAT_CAT_ID
 *
 * The followings are the available model relations:
 * @property Kms $kMSINCATKMS
 * @property Cat $kMSINCATCAT
 */
class KategorieKomisji extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return KategorieKomisji the static model class
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
		return 'kms_in_cat';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('KMS_IN_CAT_KMS_ID, KMS_IN_CAT_CAT_ID', 'required'),
			array('KMS_IN_CAT_KMS_ID, KMS_IN_CAT_CAT_ID', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('KMS_IN_CAT_ID, KMS_IN_CAT_KMS_ID, KMS_IN_CAT_CAT_ID', 'safe', 'on'=>'search'),
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
			'kMSINCATKMS' => array(self::BELONGS_TO, 'Kms', 'KMS_IN_CAT_KMS_ID'),
			'kMSINCATCAT' => array(self::BELONGS_TO, 'Cat', 'KMS_IN_CAT_CAT_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'KMS_IN_CAT_ID' => 'Kms In Cat',
			'KMS_IN_CAT_KMS_ID' => 'Kms In Cat Kms',
			'KMS_IN_CAT_CAT_ID' => 'Kms In Cat Cat',
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

		$criteria->compare('KMS_IN_CAT_ID',$this->KMS_IN_CAT_ID);
		$criteria->compare('KMS_IN_CAT_KMS_ID',$this->KMS_IN_CAT_KMS_ID);
		$criteria->compare('KMS_IN_CAT_CAT_ID',$this->KMS_IN_CAT_CAT_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}