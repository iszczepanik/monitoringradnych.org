<?php
$this->breadcrumbs=array(
	'Komentarz Uchwalies'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('komentarz-uchwaly-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="row-fluid">
<div class="span6">
<?php $this->widget('bootstrap.widgets.BootMenu', array(
    'type'=>'tabs',
    'items'=>array(
//array('label'=>'LIST HEADER'),
array('label'=>'Lista', 'icon'=>'th-list', 'url'=>array('admin')),
array('label'=>'Nowy', 'icon'=>'plus-sign', 'url'=>array('create')),
array('label'=>'Wyszukiwanie zaawansowane', 'icon'=>'search', 'url'=>'#', 'linkOptions'=>array('class'=>'search-button')),
),
));
?><h2>Komentarze do uchwał / projektów - Lista</h2>
</div>
<div class='span6'>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?></div><!-- search-form -->
</div>
</div>

<?php $this->widget('bootstrap.widgets.BootGridView',array(
	'type'=>'striped bordered condensed',
	'id'=>'komentarz-uchwaly-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'CMT_ID',
		'CMT_DATE',
		array(
			'name'=>'CMT_AUTHOR',
			'value'=>'$data->author',
		),
		//'CMT_TYPE',
		array(
			'name'=>'CMT_TYPE',
			'value'=>'$data->typeDescription',
		),
		//'CMT_CONTENT',
		//'CMT_RDN_ID',
		array(
			'name'=>'CMT_UCH_ID',
			'value'=>'$data->Uchwala->brief',
		),
		/*
		'CMT_UCH_ID',
		*/
		array(
			'class'=>'bootstrap.widgets.BootButtonColumn',
		),
	),
)); ?>
