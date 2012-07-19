<?php
$this->breadcrumbs=array(
	'Kategorie Komisjis'=>array('index'),
	$model->KMS_IN_CAT_ID,
);

$this->menu=array(
	array('label'=>'Nowy', 'url'=>array('create')),
	array('label'=>'Lista', 'url'=>array('admin')),
);
?>

<h2>KategorieKomisji - Widok</h2>

<?php $this->widget('bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'KMS_IN_CAT_ID',
		'KMS_IN_CAT_KMS_ID',
		'KMS_IN_CAT_CAT_ID',
	),
)); ?>
