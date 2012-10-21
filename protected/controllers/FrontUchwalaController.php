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
				'actions'=>array('index','view','search'),
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id, $orig)
	{
		$model = $this->loadModel($id);

		$this->render('view',array(
			'model'=>$model,
			'votes'=>$model->votes,
			'orig'=>$orig,
		));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$session = Yii::app()->getComponent('session');
	
		if (isset($_POST['showall']))
		{
			$session->remove('searchParams', '');
			
			$dataProvider=new CActiveDataProvider('Uchwala');
			$this->render('index',array(
				'dataProvider'=>$dataProvider,
			));
			
			return;
		}
	
		
		
		if (isset($_POST['search']))
		{
			$session->add('searchParams', $_POST['Uchwala']);
			//var_dump($_POST['Uchwala']); return;
		
			$dataProvider = Uchwala::model()->userFind($_POST['Uchwala']);
			
			$this->render('index',array(
				'dataProvider'=>$dataProvider,
				'searchParams'=>$_POST['Uchwala'],
			));
				
		}
		else if ($session->get('searchParams','') != null)
		{
			$dataProvider = Uchwala::model()->userFind($session->get('searchParams',''));
			
			$this->render('index',array(
				'dataProvider'=>$dataProvider,
				'searchParams'=>$session->get('searchParams',''),
			));
		}
		else
		{
			$dataProvider=new CActiveDataProvider('Uchwala');
			$this->render('index',array(
				'dataProvider'=>$dataProvider,
			));
		}
	}
	
	public function actionSearch()
	{
		if (isset($_POST['search']))
		{
			//var_dump($_POST['Uchwala']); return;
		
			$dataProvider = Uchwala::model()->userFind($_POST['Uchwala']);
			
			$this->render('index',array(
				'dataProvider'=>$dataProvider,
				'searchParams'=>$_POST['Uchwala'],
			));
				
		}
		else
		{
			$this->redirect(array('FrontUchwala/index'));
		}
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
