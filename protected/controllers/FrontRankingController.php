<?php

class FrontRankingController extends Controller
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
	public function actionIndex($id)
	{
		/*
		$dataProvider=new CActiveDataProvider('Radny');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
		*/
		$model=Ranking::model()->findAll(array('order'=>'RNK_LP'));;
		
		
		$this->render('index',array(
			'model'=>$model,
			'id'=>$id,
		));
	}
}
