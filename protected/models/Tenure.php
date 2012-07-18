<?php

/**
 * This is the model class for table "tnr".
 *
 * The followings are the available columns in table 'tnr':
 * @property integer $TNR_ID
 * @property string $TNR_NAME
 * @property string $TNR_BEGINS
 * @property string $TNR_ENDS
 * @property integer $TNR_PRESENT
 *
 * The followings are the available model relations:
 * @property Rdn[] $rdns
 */
class Tenure extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Tenure the static model class
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
		return 'tnr';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TNR_BEGINS, TNR_ENDS, TNR_PRESENT', 'required'),
			array('TNR_PRESENT', 'numerical', 'integerOnly'=>true),
			array('TNR_NAME', 'length', 'max'=>64),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('TNR_ID, TNR_NAME, TNR_BEGINS, TNR_ENDS, TNR_PRESENT', 'safe', 'on'=>'search'),
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
			'rdns' => array(self::HAS_MANY, 'Rdn', 'RDN_TNR_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'TNR_ID' => '#',
			'TRN_NAME' => 'Kadencja',
			'TRN_BEGINS' => 'Początek',
			'TNR_ENDS' => 'Koniec',
			'TNR_PRESENT' => 'Trwająca',
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

		$criteria->compare('TNR_ID',$this->TNR_ID);
		$criteria->compare('TNR_NAME',$this->TNR_NAME,true);
		$criteria->compare('TNR_BEGINS',$this->TNR_BEGINS,true);
		$criteria->compare('TNR_ENDS',$this->TNR_ENDS,true);
		$criteria->compare('TNR_PRESENT',$this->TNR_PRESENT);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}