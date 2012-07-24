<?php
$this->breadcrumbs=array(
	'Projekts'=>array('index'),
	$model->UCH_ID,
);

$this->menu=array(
	array('label'=>'Nowy', 'url'=>array('create')),
	array('label'=>'Lista', 'url'=>array('admin')),
);
?>

<h2>Projekt - Widok</h2>

<?php $this->widget('bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'UCH_ID',
		'UCH_FILE',
		'UCH_NAME',
		array(
			'name'=>'UCH_KMS_ID',
			'value'=>$model->Komisja->KMS_NAME,
		),
		'dzielniceUchwalIDs'=> array(
            'name'  => 'dzielniceUchwalIDs',
            'value' => implode(', ', CHtml::listData($model->DzielniceUchwal, 'DZL_ID', 'DZL_NAME')),
		),
		'kategorieUchwalIDs'=> array(
            'name'  => 'kategorieUchwalIDs',
            'value' => implode(', ', CHtml::listData($model->KategorieUchwal, 'CAT_ID', 'CAT_NAME')),
		),
	),
)); ?>
