<?php

class UchwalaController extends Controller
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
		$model = $this->loadModel($id);
		
		$criteria = new CDbCriteria;
		$criteria->condition='VOT_UCH_ID=:VOT_UCH_ID';
		$criteria->params=array(':VOT_UCH_ID'=>$id);
		
		$votesFull = Vote::model()->findAll($criteria);
		
		foreach($votesFull as $i=>$item)
		{
			$votes[] = $item->Radny->ImieNazwisko()." - ".$item->VoteLabel();
		}
	
		$this->render('view',array(
			'model'=>$model,
			'votes'=>$votes,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Uchwala;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Uchwala']))
		{
			$model->attributes=$_POST['Uchwala'];
			$model->DzielniceUchwal = $_POST['Uchwala']['dzielniceUchwalIDs'] != '' ?
				$_POST['Uchwala']['dzielniceUchwalIDs'] : null;
			$model->KategorieUchwal = $_POST['Uchwala']['kategorieUchwalIDs'] != '' ?
				$_POST['Uchwala']['kategorieUchwalIDs'] : null;
			if($model->save())
			{
				$i = 0;
				while (isset($_POST['Vote'.$i.'RDN_ID']))
				{
					$vot = new Vote;
					$vot->VOT_RDN_ID = $_POST['Vote'.$i.'RDN_ID'];
					$vot->VOT_UCH_ID = $model->UCH_ID;
					$vot->VOT_VOTE = $_POST['Vote'.$i];
					
					$vot->save();
					
					$i++;
				}
				//
				$this->redirect(array('view','id'=>$model->UCH_ID));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Uchwala']))
		{
			$model->attributes=$_POST['Uchwala'];
			$model->DzielniceUchwal = $_POST['Uchwala']['dzielniceUchwalIDs'] != '' ?
				$_POST['Uchwala']['dzielniceUchwalIDs'] : null;
			$model->KategorieUchwal = $_POST['Uchwala']['kategorieUchwalIDs'] != '' ?
				$_POST['Uchwala']['kategorieUchwalIDs'] : null;
			if($model->save())
			{
				$i = 0;
				while (isset($_POST['Vote'.$i]))
				{
					$vot_id = $_POST['Vote'.$i];
					$vot = Vote::model()->findByPk($vot_id);
					//$vot->VOT_RDN_ID = $_POST['Vote'.$i.'RDN_ID'];
					//$vot->VOT_UCH_ID = $model->UCH_ID;
					$vot->VOT_VOTE = $_POST['Vote'.$vot_id];
					
					$vot->save();
					
					$i++;
				}
				//
				$this->redirect(array('view','id'=>$model->UCH_ID));
			}
		}
		
		$criteria = new CDbCriteria;
		$criteria->condition='VOT_UCH_ID=:VOT_UCH_ID';
		$criteria->params=array(':VOT_UCH_ID'=>$id);
		
		$votesFull = Vote::model()->findAll($criteria);
		
		foreach($votesFull as $i=>$item)
		{
			$votes[$item->VOT_ID] = array($item->Radny->ImieNazwisko(), $item->VOT_VOTE);
		}
		
		$this->render('update',array(
			'model'=>$model,
			'votes'=>$votes,
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
		$model=new Uchwala('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Uchwala']))
			$model->attributes=$_GET['Uchwala'];

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
