<?php
$this->breadcrumbs=array(
	'Dzielnicas'=>array('index'),
	$model->DZL_ID,
);

$this->menu=array(
	array('label'=>'Nowy', 'url'=>array('create')),
	array('label'=>'Lista', 'url'=>array('admin')),
);
?>

<h2>Dzielnica - Widok</h2>

<?php $this->widget('bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'DZL_ID',
		'DZL_NAME',
		'DZL_OKR_ID',
		'DZL_CITIZEN_COUNT',
		'DZL_AREA',
	),
)); ?>
