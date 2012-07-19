<?php
$this->breadcrumbs=array(
	'Uchwalas'=>array('index'),
	$model->UCH_ID,
);

$this->menu=array(
	array('label'=>'Nowy', 'url'=>array('create')),
	array('label'=>'Lista', 'url'=>array('admin')),
);
?>

<h2>Uchwała - Widok</h2>

<?php $this->widget('bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'UCH_ID',
		'UCH_FILE',
		'UCH_NAME',
		array(
			'name'=>'UCH_CAT_ID',
			'value'=>$model->Kategoria->CAT_NAME,
		),
		array(
			'name'=>'UCH_KMS_ID',
			'value'=>$model->Komisja->KMS_NAME,
		),
	),
)); ?>
