<?php
$this->breadcrumbs=array(
	'Uchwalas'=>array('index'),
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
	$.fn.yiiGridView.update('uchwala-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Uchwały - Lista</h2>

<?php echo CHtml::link('Wyszukiwanie zaawansowane','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.BootGridView',array(
	'type'=>'striped bordered condensed',
	'id'=>'uchwala-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'UCH_ID',
		'UCH_FILE',
		'UCH_NAME',
		/*array(
			'name'=>'UCH_TYPE',
			'value'=>'$data->getUchwalaTypeName()',
		),*/
		array(
			'name'=>'UCH_CAT_ID',
			'value'=>'$data->Kategoria->CAT_NAME',
		),
		array(
			'name'=>'UCH_KMS_ID',
			'value'=>'$data->Komisja->KMS_NAME',
		),
		array(
			'class'=>'bootstrap.widgets.BootButtonColumn',
		),
	),
)); ?>
