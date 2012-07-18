<?php

/**
 * This is the model class for table "rdn".
 *
 * The followings are the available columns in table 'rdn':
 * @property integer $RDN_ID
 * @property string $RDN_FIRSTNAME
 * @property string $RDN_LASTNAME
 * @property string $RDN_EMAIL
 * @property string $RDN_PHONE
 * @property string $RDN_DUTY
 * @property string $RDN_WEBSITE
 * @property string $RDN_PHOTO
 * @property string $RDN_PROMISE
 * @property string $RDN_INTERVIEW
 * @property string $RDN_PROMISE_CMT
 * @property string $RDN_INTERVIEW_CMT
 * @property integer $RDN_TNR_ID
 * @property integer $RDN_OKR_ID
 *
 * The followings are the available model relations:
 * @property CmtUch[] $cmtUches
 * @property Int[] $ints
 * @property Tnr $rDNTNR
 * @property Okr $rDNOKR
 * @property RdnInKms[] $rdnInKms
 * @property Rnk $rnk
 */
class Radny extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Radny the static model class
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
		return 'rdn';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RDN_FIRSTNAME, RDN_LASTNAME, RDN_EMAIL, RDN_PHONE, RDN_WEBSITE, RDN_PHOTO, RDN_PROMISE, RDN_INTERVIEW, RDN_TNR_ID, RDN_OKR_ID', 'required'),
			array('RDN_TNR_ID, RDN_OKR_ID', 'numerical', 'integerOnly'=>true),
			array('RDN_FIRSTNAME, RDN_LASTNAME', 'length', 'max'=>64),
			array('RDN_EMAIL, RDN_WEBSITE', 'length', 'max'=>128),
			array('RDN_PHONE', 'length', 'max'=>32),
			array('RDN_PHOTO', 'length', 'max'=>256),
			array('RDN_DUTY, RDN_PROMISE_CMT, RDN_INTERVIEW_CMT', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('RDN_ID, RDN_FIRSTNAME, RDN_LASTNAME, RDN_EMAIL, RDN_PHONE, RDN_DUTY, RDN_WEBSITE, RDN_PHOTO, RDN_PROMISE, RDN_INTERVIEW, RDN_PROMISE_CMT, RDN_INTERVIEW_CMT, RDN_TNR_ID, RDN_OKR_ID', 'safe', 'on'=>'search'),
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
			'cmtUches' => array(self::HAS_MANY, 'CmtUch', 'CMT_RDN_ID'),
			'ints' => array(self::HAS_MANY, 'Int', 'INT_RDN_ID'),
			'rDNTNR' => array(self::BELONGS_TO, 'Tnr', 'RDN_TNR_ID'),
			'rDNOKR' => array(self::BELONGS_TO, 'Okr', 'RDN_OKR_ID'),
			'rdnInKms' => array(self::HAS_MANY, 'RdnInKms', 'RDN_IN_KMS_RND_ID'),
			'rnk' => array(self::HAS_ONE, 'Rnk', 'RNK_RDN_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'RDN_ID' => 'Rdn',
			'RDN_FIRSTNAME' => 'Rdn Firstname',
			'RDN_LASTNAME' => 'Rdn Lastname',
			'RDN_EMAIL' => 'Rdn Email',
			'RDN_PHONE' => 'Rdn Phone',
			'RDN_DUTY' => 'Rdn Duty',
			'RDN_WEBSITE' => 'Rdn Website',
			'RDN_PHOTO' => 'Rdn Photo',
			'RDN_PROMISE' => 'Rdn Promise',
			'RDN_INTERVIEW' => 'Rdn Interview',
			'RDN_PROMISE_CMT' => 'Rdn Promise Cmt',
			'RDN_INTERVIEW_CMT' => 'Rdn Interview Cmt',
			'RDN_TNR_ID' => 'Rdn Tnr',
			'RDN_OKR_ID' => 'Rdn Okr',
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

		$criteria->compare('RDN_ID',$this->RDN_ID);
		$criteria->compare('RDN_FIRSTNAME',$this->RDN_FIRSTNAME,true);
		$criteria->compare('RDN_LASTNAME',$this->RDN_LASTNAME,true);
		$criteria->compare('RDN_EMAIL',$this->RDN_EMAIL,true);
		$criteria->compare('RDN_PHONE',$this->RDN_PHONE,true);
		$criteria->compare('RDN_DUTY',$this->RDN_DUTY,true);
		$criteria->compare('RDN_WEBSITE',$this->RDN_WEBSITE,true);
		$criteria->compare('RDN_PHOTO',$this->RDN_PHOTO,true);
		$criteria->compare('RDN_PROMISE',$this->RDN_PROMISE,true);
		$criteria->compare('RDN_INTERVIEW',$this->RDN_INTERVIEW,true);
		$criteria->compare('RDN_PROMISE_CMT',$this->RDN_PROMISE_CMT,true);
		$criteria->compare('RDN_INTERVIEW_CMT',$this->RDN_INTERVIEW_CMT,true);
		$criteria->compare('RDN_TNR_ID',$this->RDN_TNR_ID);
		$criteria->compare('RDN_OKR_ID',$this->RDN_OKR_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}