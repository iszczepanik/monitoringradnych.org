<?php
$this->breadcrumbs=array(
	'Uchwalas'=>array('index'),
	'Manage',
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
<h2>Uchwały - Lista</h2>
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
	'id'=>'uchwala-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'UCH_ID',
		'UCH_FILE',
		'UCH_NAME',
		'UCH_NUMBER',
		'UCH_DATE',
		/*array(
			'name'=>'UCH_TYPE',
			'value'=>'$data->getUchwalaTypeName()',
		),*/
		array(
			'name'=>'UCH_KMS_ID',
			'value'=>'$data->Komisja->KMS_NAME',
		),
		array(
			'class'=>'bootstrap.widgets.BootButtonColumn',
		),
	),
)); ?>
