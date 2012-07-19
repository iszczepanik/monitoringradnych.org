<?php

/**
 * This is the model class for table "kms".
 *
 * The followings are the available columns in table 'kms':
 * @property integer $KMS_ID
 * @property string $KMS_NAME
 * @property string $KMS_DESC
 *
 * The followings are the available model relations:
 * @property KmsInCat[] $kmsInCats
 * @property RdnInKms[] $rdnInKms
 * @property Uch[] $uches
 */
class Komisja extends CActiveRecord
{
	public function behaviors(){
		return array( 'CAdvancedArBehavior' => array(
	            'class' => 'application.extensions.CAdvancedArBehavior'));
	}
	
	public $kategorieKomisjiIDs = array();
	
	/**
	* To sync the two "twins": the relation called 'sucursales'
	* and the public variable 'sucursalesIDs'. If you don't do that
	* you will not see checkbox checked for the departments-sucursales
	* that are currently assigned to the Employee
	*/
	public function afterFind()
	{
		if(!empty($this->KategorieKomisji))
		{
			foreach($this->KategorieKomisji as $n=>$kategoriaKomisji)
			$this->kategorieKomisjiIDs[] = $kategoriaKomisji->CAT_ID;
		}
	}
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Komisja the static model class
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
		return 'kms';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('KMS_NAME', 'required'),
			array('KMS_NAME', 'length', 'max'=>256),
			array('KMS_DESC', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('KMS_ID, KMS_NAME, KMS_DESC', 'safe', 'on'=>'search'),
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
			'KategorieKomisji' => array(self::MANY_MANY, 'Kategoria', 'kms_in_cat(KMS_IN_CAT_KMS_ID, KMS_IN_CAT_CAT_ID)'),
			'rdnInKms' => array(self::HAS_MANY, 'RdnInKms', 'RDN_IN_KMS_KMS_ID'),
			'uches' => array(self::HAS_MANY, 'Uch', 'UCH_KMS_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'KMS_ID' => '#',
			'KMS_NAME' => 'Komisja',
			'KMS_DESC' => 'Opis',
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

		$criteria->compare('KMS_ID',$this->KMS_ID);
		$criteria->compare('KMS_NAME',$this->KMS_NAME,true);
		$criteria->compare('KMS_DESC',$this->KMS_DESC,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}