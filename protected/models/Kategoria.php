<?php

/**
 * This is the model class for table "cat".
 *
 * The followings are the available columns in table 'cat':
 * @property integer $CAT_ID
 * @property string $CAT_NAME
 * @property string $CAT_DESC
 *
 * The followings are the available model relations:
 * @property KmsInCat[] $kmsInCats
 * @property Uch[] $uches
 */
class Kategoria extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Kategoria the static model class
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
		return 'cat';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CAT_NAME', 'required'),
			array('CAT_NAME', 'length', 'max'=>128),
			array('CAT_DESC', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('CAT_ID, CAT_NAME, CAT_DESC', 'safe', 'on'=>'search'),
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
			'kmsInCats' => array(self::HAS_MANY, 'KmsInCat', 'KMS_IN_CAT_CAT_ID'),
			'uches' => array(self::HAS_MANY, 'Uch', 'UCH_CAT_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CAT_ID' => '#',
			'CAT_NAME' => 'Kategoria',
			'CAT_DESC' => 'Opis',
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

		$criteria->compare('CAT_ID',$this->CAT_ID);
		$criteria->compare('CAT_NAME',$this->CAT_NAME,true);
		$criteria->compare('CAT_DESC',$this->CAT_DESC,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}