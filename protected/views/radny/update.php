<?php
$this->breadcrumbs=array(
	'Radnys'=>array('index'),
	$model->RDN_ID=>array('view','id'=>$model->RDN_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Radny','url'=>array('index')),
	array('label'=>'Create Radny','url'=>array('create')),
	array('label'=>'View Radny','url'=>array('view','id'=>$model->RDN_ID)),
	array('label'=>'Manage Radny','url'=>array('admin')),
);
?>

<h1>Update Radny <?php echo $model->RDN_ID; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>