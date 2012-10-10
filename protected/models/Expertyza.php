<?php

/**
 * This is the model class for table "exp".
 *
 * The followings are the available columns in table 'exp':
 * @property integer $EXP_ID
 * @property string $EXP_AUTHOR
 * @property string $EXP_DATE
 * @property string $EXP_CONTENT
 * @property integer $EXP_UCH_ID
 *
 * The followings are the available model relations:
 * @property Uch $eXPUCH
 */
class Expertyza extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Expertyza the static model class
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
		return 'exp';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('EXP_AUTHOR, EXP_DATE, EXP_CONTENT, EXP_UCH_ID', 'required'),
			array('EXP_UCH_ID', 'numerical', 'integerOnly'=>true),
			array('EXP_AUTHOR', 'length', 'max'=>512),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('EXP_ID, EXP_AUTHOR, EXP_DATE, EXP_CONTENT, EXP_UCH_ID', 'safe', 'on'=>'search'),
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
			'Uchwala' => array(self::BELONGS_TO, 'Uchwala', 'EXP_UCH_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'EXP_ID' => '#',
			'EXP_AUTHOR' => 'Autor',
			'EXP_DATE' => 'Data',
			'EXP_CONTENT' => 'Treść',
			'EXP_UCH_ID' => 'Uchwała',
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

		$criteria->compare('EXP_ID',$this->EXP_ID);
		$criteria->compare('EXP_AUTHOR',$this->EXP_AUTHOR,true);
		$criteria->compare('EXP_DATE',$this->EXP_DATE,true);
		$criteria->compare('EXP_CONTENT',$this->EXP_CONTENT,true);
		$criteria->compare('EXP_UCH_ID',$this->EXP_UCH_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}