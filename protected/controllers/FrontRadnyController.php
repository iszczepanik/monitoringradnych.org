<?php

class FrontRadnyController extends Controller
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
	 * Lists all models.
	 */
	public function actionIndex()
	{
		/*
		$dataProvider=new CActiveDataProvider('Radny');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
		*/
		$model=Radny::model()->findAll();
		
		
		$this->render('index',array(
			'model'=>$model,
		));
	}
	
	public function actionView($id, $tab)
	{
		/*
			$dataProvider=new CActiveDataProvider('Radny');
		$this->render('index',array(
		'dataProvider'=>$dataProvider,
		));
		*/
		$model=Radny::model()->findAll();
	
	
		$this->render('view',array(
				'model'=>$model,
				'viewed'=> Radny::model()->findByPk($id),
				'tab'=>$tab,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Radny::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
}
