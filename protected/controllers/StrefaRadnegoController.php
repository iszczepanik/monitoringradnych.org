<?php

class StrefaRadnegoController extends Controller
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
			array('allow',
				'actions'=>array('admin','delete','view','create','update'),
				'roles'=>array('radny'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionView($id)
	{
		$user = $this->loadModel($id);

		if(isset($_POST['Radny']) && $user->USR_RDN_ID == $_POST['Radny']['RDN_ID'])
		{
			$model = $this->loadRadnyModel($_POST['Radny']['RDN_ID']);
			$model->RDN_PROMISE_CMT = $_POST['Radny']['RDN_PROMISE_CMT'];
			$model->RDN_INTERVIEW_CMT = $_POST['Radny']['RDN_INTERVIEW_CMT'];
			//$model->attributes = $_POST['Radny'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->RDN_ID));
		}
		
		if (!isset($model))
		{
			$model = $this->loadRadnyModel($user->USR_RDN_ID);
		}
		
		$this->render('update',array(
			'model'=>$model,
		));
	}
	
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionUpdate($id)
	{
		$user = $this->loadModel($id);

		if(isset($_POST['Radny']) && $user->USR_RDN_ID == $_POST['Radny']['RDN_ID'])
		{
			$model = $this->loadRadnyModel($_POST['Radny']['RDN_ID']);
			$model->RDN_PROMISE_CMT = $_POST['Radny']['RDN_PROMISE_CMT'];
			$model->RDN_INTERVIEW_CMT = $_POST['Radny']['RDN_INTERVIEW_CMT'];
			//$model->attributes = $_POST['Radny'];
			if($model->save())
				$this->render('view',array(
					'model'=>$model,
				));
		}
		
		if (!isset($model))
		{
			$model = $this->loadRadnyModel($user->USR_RDN_ID);
		}
		
		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=User::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	
	public function loadRadnyModel($id)
	{
		$model=Radny::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
}
