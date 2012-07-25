<?php
$this->breadcrumbs=array(
	'Rankings'=>array('index'),
	$model->RNK_RDN_ID,
);

$this->menu=array(
	//array('label'=>'Nowy', 'url'=>array('create')),
	array('label'=>'Lista', 'url'=>array('admin')),
);
?>

<h2>Ranking - Widok</h2>

<?php $this->widget('bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		array(
			'name'=>'RNK_RDN_ID',
			'value'=>$model->Radny->ImieNazwisko(),
		),
		'RNK_KMS',
		'RNK_RADY',
		'RNK_DUTY',
		'RNK_MAIL',
		'RNK_INTERNET',
	),
)); ?>
