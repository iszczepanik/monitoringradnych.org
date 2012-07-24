<?php

/**
 * This is the model class for table "rnk".
 *
 * The followings are the available columns in table 'rnk':
 * @property integer $RNK_RDN_ID
 * @property integer $RNK_KMS
 * @property integer $RNK_RADY
 * @property integer $RNK_DUTY
 * @property integer $RNK_MAIL
 * @property integer $RNK_INTERNET
 *
 * The followings are the available model relations:
 * @property Rdn $rNKRDN
 */
class Ranking extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Ranking the static model class
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
		return 'rnk';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RNK_RDN_ID, RNK_KMS, RNK_RADY, RNK_DUTY, RNK_MAIL, RNK_INTERNET', 'required'),
			array('RNK_RDN_ID, RNK_KMS, RNK_RADY, RNK_DUTY, RNK_MAIL, RNK_INTERNET', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('RNK_RDN_ID, RNK_KMS, RNK_RADY, RNK_DUTY, RNK_MAIL, RNK_INTERNET', 'safe', 'on'=>'search'),
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
			'Radny' => array(self::BELONGS_TO, 'Radny', 'RNK_RDN_ID'),
		);
	}
	
	public $RNK_SUM = "";
	
	public function Suma()
	{
		return $this->RNK_KMS + $this->RNK_RADY + $this->RNK_DUTY + $this->RNK_MAIL + $this->RNK_INTERNET;
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'RNK_RDN_ID' => 'Radny',
			'RNK_KMS' => 'Komisje',
			'RNK_RADY' => 'Rady',
			'RNK_DUTY' => 'Dyżury',
			'RNK_MAIL' => 'Emaile',
			'RNK_INTERNET' => 'Internet',
			'RNK_SUM' => 'Suma',
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

		$criteria->compare('RNK_RDN_ID',$this->RNK_RDN_ID);
		$criteria->compare('RNK_KMS',$this->RNK_KMS);
		$criteria->compare('RNK_RADY',$this->RNK_RADY);
		$criteria->compare('RNK_DUTY',$this->RNK_DUTY);
		$criteria->compare('RNK_MAIL',$this->RNK_MAIL);
		$criteria->compare('RNK_INTERNET',$this->RNK_INTERNET);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}