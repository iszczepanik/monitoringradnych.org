<?php

/**
 * This is the model class for table "okr".
 *
 * The followings are the available columns in table 'okr':
 * @property integer $OKR_ID
 * @property string $OKR_NAME
 *
 * The followings are the available model relations:
 * @property Dzl[] $dzls
 * @property Rdn[] $rdns
 */
class Okreg extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Okreg the static model class
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
		return 'okr';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('OKR_NAME', 'required'),
			array('OKR_NAME', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('OKR_ID, OKR_NAME', 'safe', 'on'=>'search'),
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
			'dzls' => array(self::HAS_MANY, 'Dzl', 'DZL_OKR_ID'),
			'rdns' => array(self::HAS_MANY, 'Rdn', 'RDN_OKR_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'OKR_ID' => '#',
			'OKR_NAME' => 'Nazwa',
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

		$criteria->compare('OKR_ID',$this->OKR_ID);
		$criteria->compare('OKR_NAME',$this->OKR_NAME,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}