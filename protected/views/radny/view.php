<?php
$this->breadcrumbs=array(
	'Radnys'=>array('index'),
	$model->RDN_ID,
);

$this->menu=array(
	array('label'=>'List Radny','url'=>array('index')),
	array('label'=>'Create Radny','url'=>array('create')),
	array('label'=>'Update Radny','url'=>array('update','id'=>$model->RDN_ID)),
	array('label'=>'Delete Radny','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->RDN_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Radny','url'=>array('admin')),
);
?>

<h1>View Radny #<?php echo $model->RDN_ID; ?></h1>

<?php $this->widget('bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'RDN_ID',
		'RDN_FIRSTNAME',
		'RDN_LASTNAME',
		'RDN_EMAIL',
		'RDN_PHONE',
		'RDN_DUTY',
		'RDN_WEBSITE',
		'RDN_PHOTO',
		'RDN_PROMISE',
		'RDN_INTERVIEW',
		'RDN_PROMISE_CMT',
		'RDN_INTERVIEW_CMT',
		'RDN_TNR_ID',
		'RDN_OKR_ID',
	),
)); ?>
