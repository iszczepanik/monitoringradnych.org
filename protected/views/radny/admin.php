<?php
$this->breadcrumbs=array(
	'Radnies'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('radny-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
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
<h2>Radni - Lista</h2>
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

<?php $this->widget('bootstrap.widgets.BootGridView',array(
	'type'=>'striped bordered condensed',
	'id'=>'radny-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'RDN_ID',
		'RDN_FIRSTNAME',
		'RDN_LASTNAME',
		'RDN_EMAIL',
		array(
			'name'=>'RDN_OKR_ID',
			'value'=>'$data->Okreg->OKR_NAME',
		),
		/*array(
			'name'=>'RDN_TNR_ID',
			'value'=>'$data->Tenure->TNR_NAME',
		),*/
		array(
			'name'=>'RDN_CLB_ID',
			'value'=>'$data->Klub->CLB_NAME',
		),
		/*
		'RDN_PHONE',
		'RDN_DUTY',
		'RDN_WEBSITE',
		'RDN_PHOTO',
		'RDN_PROMISE',
		'RDN_INTERVIEW',
		'RDN_PROMISE_CMT',
		'RDN_INTERVIEW_CMT',
		'RDN_TNR_ID',
		'RDN_OKR_ID',
		*/
		array(
			'class'=>'bootstrap.widgets.BootButtonColumn',
		),
	),
)); ?>
