<?php
$this->breadcrumbs=array(
	'Radnies'=>array('index'),
	$model->RDN_ID,
);
?>

<div class="row-fluid">
<div class="span6">
<?php
$this->widget('bootstrap.widgets.BootMenu', array(
    'type'=>'tabs',
    'items'=>array(
//array('label'=>'LIST HEADER'),
array('label'=>'Lista', 'icon'=>'th-list', 'url'=>array('admin')),
array('label'=>'Nowy', 'icon'=>'plus-sign', 'url'=>array('create')),
array('label'=>'Wyszukiwanie zaawansowane', 'icon'=>'search', 'url'=>'#', 'linkOptions'=>array('class'=>'search-button')),
),
));
?>
<h2>Radny - Widok</h2>
</div>
<div class="span6">
<?php //echo CHtml::link('Wyszukiwanie zaawansowane','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
</div>
</div>


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
			'name'=>'RDN_CLB_ID',
			'value'=>$model->Klub->CLB_NAME,
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
