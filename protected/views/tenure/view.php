<?php
$this->breadcrumbs=array(
	'Tenures'=>array('index'),
	$model->TNR_ID,
);

$this->menu=array(
	array('label'=>'Nowy', 'url'=>array('create')),
	array('label'=>'Lista', 'url'=>array('admin')),
);
?>

<h2>Tenure - Widok</h2>

<?php $this->widget('bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'TNR_ID',
		'TNR_NAME',
		'TNR_BEGINS',
		'TNR_ENDS',
		'TNR_PRESENT',
	),
)); ?>
