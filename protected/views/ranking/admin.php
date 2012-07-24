<?php
$this->breadcrumbs=array(
	'Rankings'=>array('index'),
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
	$.fn.yiiGridView.update('ranking-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Rankings - Lista</h2>

<?php echo CHtml::link('Wyszukiwanie zaawansowane','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.BootGridView',array(
	'type'=>'striped bordered condensed',
	'id'=>'ranking-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'name'=>'RNK_RDN_ID',
			'value'=>'$data->Radny->ImieNazwisko()',
		),
		'RNK_KMS',
		'RNK_RADY',
		'RNK_DUTY',
		'RNK_MAIL',
		'RNK_INTERNET',
		array(
			'name'=>'RNK_SUM',
			'value'=>'$data->Suma()',
		),
		array(
			'class'=>'bootstrap.widgets.BootButtonColumn',
		),

	),
)); ?>
