<?php
$this->breadcrumbs=array(
	'Radnys'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Radny','url'=>array('index')),
	array('label'=>'Create Radny','url'=>array('create')),
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

<h1>Manage Radnys</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.BootGridView',array(
	'id'=>'radny-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'RDN_ID',
		'RDN_FIRSTNAME',
		'RDN_LASTNAME',
		'RDN_EMAIL',
		'RDN_PHONE',
		'RDN_DUTY',
		/*
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
