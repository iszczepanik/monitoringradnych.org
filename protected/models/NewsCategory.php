<?php

/**
 * This is the model class for table "nws_cat".
 *
 * The followings are the available columns in table 'nws_cat':
 * @property integer $NWS_CAT_ID
 * @property string $NWS_CAT_NAME
 *
 * The followings are the available model relations:
 * @property Nws[] $nws
 */
class NewsCategory extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return NewsCategory the static model class
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
		return 'nws_cat';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NWS_CAT_NAME', 'required'),
			array('NWS_CAT_NAME', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('NWS_CAT_ID, NWS_CAT_NAME', 'safe', 'on'=>'search'),
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
			'News' => array(self::HAS_MANY, 'News', 'NWS_NWS_CAT_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'NWS_CAT_ID' => '#',
			'NWS_CAT_NAME' => 'Nazwa',
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

		$criteria->compare('NWS_CAT_ID',$this->NWS_CAT_ID);
		$criteria->compare('NWS_CAT_NAME',$this->NWS_CAT_NAME,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}