<?php
$this->breadcrumbs=array(
	'Radnies'=>array('index'),
	$model->RDN_ID,
);

$this->menu=array(
	array('label'=>'Nowy', 'url'=>array('create')),
	array('label'=>'Lista', 'url'=>array('admin')),
);
?>

<h2>Radny - Widok</h2>

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
		'RDN_STATEMENT_FILE',
		array(
			'name'=>'RDN_OKR_ID',
			'value'=>$model->Okreg->OKR_NAME,
		),
		array(
			'name'=>'RDN_TNR_ID',
			'value'=>$model->Tenure->TNR_NAME,
		),
		'komisjeRadnychIDs'=> array(
		            'name'  => 'komisjeRadnychIDs',
		            'value' => implode(', ', CHtml::listData($model->KomisjeRadnych, 'KMS_ID', 'KMS_NAME')),
		),
	),
)); ?>
