<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->USR_ID=>array('view','id'=>$model->USR_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'View User', 'url'=>array('view', 'id'=>$model->USR_ID)),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>Update User <?php echo $model->USR_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>