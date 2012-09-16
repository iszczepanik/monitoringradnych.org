<?php

class FrontUchwalaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$model = $this->loadModel($id);
		/*
		$criteria = new CDbCriteria;
		$criteria->condition='VOT_UCH_ID=:VOT_UCH_ID';
		$criteria->params=array(':VOT_UCH_ID'=>$id);
		
		$votesFull = Vote::model()->findAll($criteria);
		
		foreach($votesFull as $i=>$item)
		{
			$votes[] = $item->VoteIcon()." ".$item->Radny->ImieNazwisko()." - ".$item->VoteLabel();
		}*/
	/*
		$criteria = new CDbCriteria;
		$criteria->condition='VOT_UCH_ID=:VOT_UCH_ID and VOT_VOTE=:VOT_VOTE';
		$criteria->params=array(':VOT_UCH_ID'=>$id, ':VOT_VOTE'=>'1');
		$votesZa = Vote::model()->findAll($criteria);
		
		foreach($votesZa as $i=>$item)
			$votes['za'] .= $item->Radny->ImieNazwisko()."<br />";
			
		$criteria = new CDbCriteria;
		$criteria->condition='VOT_UCH_ID=:VOT_UCH_ID and VOT_VOTE=:VOT_VOTE';
		$criteria->params=array(':VOT_UCH_ID'=>$id, ':VOT_VOTE'=>'-1');
		$votesPrzeciw = Vote::model()->findAll($criteria);
		
		foreach($votesPrzeciw as $i=>$item)
			$votes['przeciw'] .= $item->Radny->ImieNazwisko()."<br />";
			
		$criteria = new CDbCriteria;
		$criteria->condition='VOT_UCH_ID=:VOT_UCH_ID and VOT_VOTE=:VOT_VOTE';
		$criteria->params=array(':VOT_UCH_ID'=>$id, ':VOT_VOTE'=>'0');
		$votesWstrzymal = Vote::model()->findAll($criteria);
		
		foreach($votesWstrzymal as $i=>$item)
			$votes['wstrzymal'] .= $item->Radny->ImieNazwisko()."<br />";
			
		$criteria = new CDbCriteria;
		$criteria->condition='VOT_UCH_ID=:VOT_UCH_ID and VOT_VOTE=:VOT_VOTE';
		$criteria->params=array(':VOT_UCH_ID'=>$id, ':VOT_VOTE'=>'2');
		$votesNieob = Vote::model()->findAll($criteria);
		
		foreach($votesNieob as $i=>$item)
			$votes['nieobecny'] .= $item->Radny->ImieNazwisko()."<br />";
	*/
		$this->render('view',array(
			'model'=>$model,
			'votes'=>$model->votes,
		));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Uchwala');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Uchwala::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='uchwala-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
