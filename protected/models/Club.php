<?php

/**
 * This is the model class for table "clb".
 *
 * The followings are the available columns in table 'clb':
 * @property integer $CLB_ID
 * @property string $CLB_NAME
 * @property string $CLB_LOGO
 *
 * The followings are the available model relations:
 * @property Rdn[] $rdns
 */
class Club extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Club the static model class
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
		return 'clb';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CLB_NAME', 'required'),
			array('CLB_NAME, CLB_LOGO', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('CLB_ID, CLB_NAME, CLB_LOGO', 'safe', 'on'=>'search'),
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
			'rdns' => array(self::HAS_MANY, 'Rdn', 'RDN_CLB_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CLB_ID' => '#',
			'CLB_NAME' => 'Nazwa',
			'CLB_LOGO' => 'Logo',
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

		$criteria->compare('CLB_ID',$this->CLB_ID);
		$criteria->compare('CLB_NAME',$this->CLB_NAME,true);
		$criteria->compare('CLB_LOGO',$this->CLB_LOGO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}