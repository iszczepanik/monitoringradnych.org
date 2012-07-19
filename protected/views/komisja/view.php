<?php
$this->breadcrumbs=array(
	'Komisjas'=>array('index'),
	$model->KMS_ID,
);

$this->menu=array(
	array('label'=>'Nowy', 'url'=>array('create')),
	array('label'=>'Lista', 'url'=>array('admin')),
);
?>

<h2>Komisja - Widok</h2>

<?php $this->widget('bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'KMS_ID',
		'KMS_NAME',
		'KMS_DESC',
		'kategorieKomisjiIDs'=> array(
            'name'  => 'kategorieKomisjiIDs',
            'value' => implode(', ', CHtml::listData($model->KategorieKomisji, 'CAT_ID', 'CAT_NAME')),
        ),
	),
)); ?>
