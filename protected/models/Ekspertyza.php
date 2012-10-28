<?php

/**
 * This is the model class for table "exp".
 *
 * The followings are the available columns in table 'exp':
 * @property integer $EXP_ID
 * @property string $EXP_AUTHOR
 * @property string $EXP_DATE
 * @property string $EXP_CONTENT
 * @property string $EXP_FILE
 * @property string $EXP_NAME
 */
class Ekspertyza extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Exp the static model class
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
			array('EXP_AUTHOR, EXP_DATE, EXP_FILE', 'required'),
			array('EXP_AUTHOR, EXP_NAME', 'length', 'max'=>512),
			array('EXP_FILE', 'length', 'max'=>256),
			array('EXP_CONTENT', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('EXP_ID, EXP_AUTHOR, EXP_DATE, EXP_CONTENT, EXP_FILE, EXP_NAME', 'safe', 'on'=>'search'),
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
		);
	}
	
		public function GetBriefPageBreak()
	{
		$pagebreak = "<!-- pagebreak -->";
		$pieces = explode($pagebreak, $this->EXP_CONTENT);
		
		return strip_tags($pieces[0]);
	}
	
	public function GetBrief()
	{
		if (strlen($this->EXP_CONTENT) < 50)
			return strip_tags($this->EXP_CONTENT);
		else
			return strip_tags(substr($this->EXP_CONTENT, 0, 50))."(...)";
	}
	
	public function GetFiles()
	{
		return explode(";", $this->EXP_FILE);
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
			'EXP_FILE' => 'Plik',
			'EXP_NAME' => 'Nazwa',
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
		$criteria->compare('EXP_FILE',$this->EXP_FILE,true);
		$criteria->compare('EXP_NAME',$this->EXP_NAME,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}