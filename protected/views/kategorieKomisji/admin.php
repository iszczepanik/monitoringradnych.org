<?php
$this->breadcrumbs=array(
	'Kategorie Komisjis'=>array('index'),
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
	$.fn.yiiGridView.update('kategorie-komisji-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Kategorie Komisjis - Lista</h2>

<?php echo CHtml::link('Wyszukiwanie zaawansowane','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.BootGridView',array(
	'id'=>'kategorie-komisji-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'KMS_IN_CAT_ID',
		'KMS_IN_CAT_KMS_ID',
		'KMS_IN_CAT_CAT_ID',
		array(
			'class'=>'bootstrap.widgets.BootButtonColumn',
		),
	),
)); ?>
