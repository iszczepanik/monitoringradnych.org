<?php
$this->breadcrumbs=array(
	'Dzielnicas'=>array('index'),
	'Manage',
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
<h2>Dzielnice - Lista</h2>
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
