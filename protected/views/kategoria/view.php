<?php
$this->breadcrumbs=array(
	'Kategorias'=>array('index'),
	$model->CAT_ID,
);

$this->menu=array(
	array('label'=>'Nowy', 'url'=>array('create')),
	array('label'=>'Lista', 'url'=>array('admin')),
);
?>

<h2>Kategoria - Widok</h2>

<?php $this->widget('bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'CAT_ID',
		'CAT_NAME',
		'CAT_DESC',
	),
)); ?>
