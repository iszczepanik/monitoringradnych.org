<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->USR_ID,
);

$this->menu=array(
	//array('label'=>'List User', 'url'=>array('index')),
	//array('label'=>'Create User', 'url'=>array('create')),
	//array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->USR_ID)),
	//array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->USR_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

<h1>View User #<?php echo $model->USR_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'USR_ID',
		'USR_NAME',
		/*'USR_PASS',*/
		'USR_FIRSTNAME',
		'USR_LASTNAME',
		'USR_EMAIL',
	),
)); ?>
