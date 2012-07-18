<?php
$this->breadcrumbs=array(
	'Okregs'=>array('index'),
	$model->OKR_ID,
);

$this->menu=array(
	array('label'=>'Nowy', 'url'=>array('create')),
	array('label'=>'Lista', 'url'=>array('admin')),
);
?>

<h2>Okreg - Widok</h2>

<?php $this->widget('bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'OKR_ID',
		'OKR_NAME',
	),
)); ?>
