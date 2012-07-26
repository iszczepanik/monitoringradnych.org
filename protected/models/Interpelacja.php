<?php

/**
 * This is the model class for table "int".
 *
 * The followings are the available columns in table 'int':
 * @property integer $INT_ID
 * @property string $INT_NAME
 * @property string $INT_FILE
 * @property string $INT_ANSWER_FILE
 * @property integer $INT_RDN_ID
 * @property string $INT_RDN_COMMENT
 *
 * The followings are the available model relations:
 * @property Rdn $iNTRDN
 */
class Interpelacja extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Interpelacja the static model class
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
		return 'int';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('INT_FILE, INT_RDN_ID', 'required'),
			array('INT_RDN_ID', 'numerical', 'integerOnly'=>true),
			array('INT_NAME', 'length', 'max'=>512),
			array('INT_FILE, INT_ANSWER_FILE', 'length', 'max'=>256),
			array('INT_RDN_COMMENT', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('INT_ID, INT_NAME, INT_FILE, INT_ANSWER_FILE, INT_RDN_ID, INT_RDN_COMMENT', 'safe', 'on'=>'search'),
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
			'Radny' => array(self::BELONGS_TO, 'Radny', 'INT_RDN_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'INT_ID' => '#',
			'INT_NAME' => 'Nazwa',
			'INT_FILE' => 'Plik',
			'INT_ANSWER_FILE' => 'Plik - odpowiedź',
			'INT_RDN_ID' => 'Radny',
			'INT_RDN_COMMENT' => 'Komentarz radnego',
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

		$criteria->compare('INT_ID',$this->INT_ID);
		$criteria->compare('INT_NAME',$this->INT_NAME,true);
		$criteria->compare('INT_FILE',$this->INT_FILE,true);
		$criteria->compare('INT_ANSWER_FILE',$this->INT_ANSWER_FILE,true);
		$criteria->compare('INT_RDN_ID',$this->INT_RDN_ID);
		$criteria->compare('INT_RDN_COMMENT',$this->INT_RDN_COMMENT,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}