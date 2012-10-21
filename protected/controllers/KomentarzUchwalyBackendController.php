<?php

class KomentarzUchwalyBackendController extends Controller
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
				'roles'=>array('admin'),
			),
			array('deny',  // deny all users
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
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$uchwala = new Uchwala('search');
		if (isset($_GET['Uchwala'])) {
			$uchwala->attributes = $_GET['Uchwala'];
		}
		
		$projekt = new Projekt('search');
		if (isset($_GET['Projekt'])) {
			$projekt->attributes = $_GET['Projekt'];
		}
	
	
		$model=new KomentarzUchwaly;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['KomentarzUchwaly']))
		{
			$model->attributes=$_POST['KomentarzUchwaly'];
			$date = new DateTime(); 
			$model->CMT_DATE = $date->format('Y-m-d H:i:s');
			if($model->save())
				$this->redirect(array('view','id'=>$model->CMT_ID));
		}

		$this->render('create',array(
			'model'=>$model,
			'uchwala'=>$uchwala,
			'projekt'=>$projekt,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$uchwala = new Uchwala('search');
		if (isset($_GET['Uchwala'])) {
			$uchwala->attributes = $_GET['Uchwala'];
		}
		
		$projekt = new Projekt('search');
		if (isset($_GET['Projekt'])) {
			$projekt->attributes = $_GET['Projekt'];
		}
	
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['KomentarzUchwaly']))
		{
			$model->attributes=$_POST['KomentarzUchwaly'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->CMT_ID));
		}

		$this->render('update',array(
			'model'=>$model,
			'uchwala'=>$uchwala,
			'projekt'=>$projekt,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new KomentarzUchwaly('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['KomentarzUchwaly']))
			$model->attributes=$_GET['KomentarzUchwaly'];

		$this->render('admin',array(
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
		$model=KomentarzUchwaly::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='komentarz-uchwaly-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
