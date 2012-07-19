<?php
$this->breadcrumbs=array(
	'Komisjas'=>array('index'),
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
	$.fn.yiiGridView.update('komisja-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Komisjas - Lista</h2>

<?php echo CHtml::link('Wyszukiwanie zaawansowane','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.BootGridView',array(
	'id'=>'komisja-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'KMS_ID',
		'KMS_NAME',
		'KMS_DESC',
		array(
			'class'=>'bootstrap.widgets.BootButtonColumn',
		),
	),
)); ?>
