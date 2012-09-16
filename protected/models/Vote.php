<?php

/**
 * This is the model class for table "vot".
 *
 * The followings are the available columns in table 'vot':
 * @property integer $VOT_ID
 * @property integer $VOT_RDN_ID
 * @property integer $VOT_UCH_ID
 * @property integer $VOT_VOTE
 * @property string $VOT_REASON
 *
 * The followings are the available model relations:
 * @property Uch $vOTUCH
 * @property Rdn $vOTRDN
 */
class Vote extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Vote the static model class
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
		return 'vot';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('VOT_RDN_ID, VOT_UCH_ID, VOT_VOTE', 'required'),
			array('VOT_RDN_ID, VOT_UCH_ID, VOT_VOTE', 'numerical', 'integerOnly'=>true),
			array('VOT_REASON', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('VOT_ID, VOT_RDN_ID, VOT_UCH_ID, VOT_VOTE, VOT_REASON', 'safe', 'on'=>'search'),
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
			'Uchwala' => array(self::BELONGS_TO, 'Uchwala', 'VOT_UCH_ID'),
			'Radny' => array(self::BELONGS_TO, 'Radny', 'VOT_RDN_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'VOT_ID' => 'Vot',
			'VOT_RDN_ID' => 'Vot Rdn',
			'VOT_UCH_ID' => 'Vot Uch',
			'VOT_VOTE' => 'Vot Vote',
			'VOT_REASON' => 'Vot Reason',
			'glosowanie' => 'Glosowanie',
		);
	}

	public function VoteLabel()
	{
		return Vote::VoteLabelStatic($this->VOT_VOTE);
		/*switch($this->VOT_VOTE)
		{
			case -1: return "przeciw"; break;
			case 0: return "wstrzymał się"; break;
			case 1: return "za"; break;
			case 2: return "nieobecny za głosowaniu"; break;
		}*/
	}
	
	public function VoteIcon()
	{
		return Vote::VoteIconStatic($this->VOT_VOTE);
	/*
		switch($this->VOT_VOTE)
		{
			case -1: return "<span class='badge badge-important'><i class='icon-thumbs-down icon-white'></i></span>"; break;
			case 0: return "<span class='badge'><i class='icon-minus icon-white'></i></span> "; break;
			case 1: return "<span class='badge badge-success'><i class='icon-thumbs-up icon-white'></i></span>"; break;
			case 2: return "<span class='badge badge-inverse'><i class='icon-remove icon-white'></i></span> "; break;
		}
		*/
	}
	
	public static function VoteIconStatic($vote)
	{
		switch($vote)
		{
			case -1: return "<span class='badge badge-important'><i class='icon-thumbs-down icon-white'></i></span>"; break;
			case 0: return "<span class='badge'><i class='icon-minus icon-white'></i></span> "; break;
			case 1: return "<span class='badge badge-success'><i class='icon-thumbs-up icon-white'></i></span>"; break;
			case 2: return "<span class='badge badge-inverse'><i class='icon-remove icon-white'></i></span> "; break;
		}
	}
	
	public static function VoteLabelStatic($vote)
	{
		switch($vote)
		{
			case -1: return "przeciw"; break;
			case 0: return "wstrzymał się"; break;
			case 1: return "za"; break;
			case 2: return "nieobecny za głosowaniu"; break;
		}
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

		$criteria->compare('VOT_ID',$this->VOT_ID);
		$criteria->compare('VOT_RDN_ID',$this->VOT_RDN_ID);
		$criteria->compare('VOT_UCH_ID',$this->VOT_UCH_ID);
		$criteria->compare('VOT_VOTE',$this->VOT_VOTE);
		$criteria->compare('VOT_REASON',$this->VOT_REASON,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}