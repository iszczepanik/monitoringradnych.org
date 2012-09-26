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
	
	public function actionSearch()
	{
		if (isset($_POST['search']))
		{
			$condition = "1=1";
			
			if (count($_POST['Uchwala']['Kategorie']) > 0)
			{
				$query = "select distinct UCH_IN_CAT_UCH_ID from uch_in_cat where UCH_IN_CAT_CAT_ID in ( ".implode(', ', $_POST['Uchwala']['Kategorie']).")";
				$list = Yii::app()->db->createCommand($query)->queryAll();
				foreach ($list as $id)
					$uchwaly_w_kategoriach[] = $id['UCH_IN_CAT_UCH_ID'];
				
				$condition .= " and UCH_ID in (".implode(', ', $uchwaly_w_kategoriach).")";
			}

			if (count($_POST['Uchwala']['Dzielnice']) > 0)
			{
				$query = "select distinct UCH_IN_DZL_UCH_ID from uch_in_dzl where UCH_IN_DZL_DZL_ID in ( ".implode(', ', $_POST['Uchwala']['Dzielnice']).")";
				$list = Yii::app()->db->createCommand($query)->queryAll();
				foreach ($list as $id)
					$uchwaly_w_dzielnicach[] = $id['UCH_IN_DZL_UCH_ID'];
					
				$condition .= " and UCH_ID in (".implode(', ', $uchwaly_w_dzielnicach).")";
			}
			
			if (isset($_POST['Uchwala']['Radny']) && isset($_POST['Uchwala']['Glosowanie']))
			{
				$query = "select distinct VOT_UCH_ID from vot where VOT_RDN_ID = ".$_POST['Uchwala']['Radny']." and VOT_VOTE = ".$_POST['Uchwala']['Glosowanie'];
				$list = Yii::app()->db->createCommand($query)->queryAll();
				foreach ($list as $id)
					$uchwaly_glosowanie[] = $id['VOT_UCH_ID'];
					
				$condition .= " and UCH_ID in (".implode(', ', $uchwaly_glosowanie).")";
			}
			
			if (isset($_POST['Uchwala']['DataOd']) && $_POST['Uchwala']['DataOd'] != "")
			{
				$condition .= " and UCH_DATE >= '".$_POST['Uchwala']['DataOd']."'";
			}
			
			if (isset($_POST['Uchwala']['DataDo']) && $_POST['Uchwala']['DataDo'] != "")
			{
				$condition .= " and UCH_DATE <= '".$_POST['Uchwala']['DataDo']."'";
			}
			
			$criteria=new CDbCriteria(array(
					'condition'=>$condition,
				));

			$dataProvider=new CActiveDataProvider('Uchwala', array(
					'criteria'=>$criteria,
				));
			$this->render('index',array(
						'dataProvider'=>$dataProvider,
						'condition'=>$condition,
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
