<?php
$this->breadcrumbs=array(
	'Dzielnicas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Lista','url'=>array('admin')),
	array('label'=>'Nowy','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('dzielnica-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Dzielnicas - Lista</h2>

<?php echo CHtml::link('Wyszukiwanie zaawansowane','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.BootGridView',array(
	'id'=>'dzielnica-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'DZL_ID',
		'DZL_NAME',
		//'DZL_OKR_ID',
		array(
			'name'=>'DZL_OKR_ID',
			'value'=>'$data->Okreg->OKR_NAME',
		),
		'DZL_CITIZEN_COUNT',
		'DZL_AREA',
		array(
			'class'=>'bootstrap.widgets.BootButtonColumn',
		),
	),
)); ?>
