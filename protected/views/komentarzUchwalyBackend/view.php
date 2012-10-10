<?php
$this->breadcrumbs=array(
	'Komentarz Uchwalies'=>array('index'),
	$model->CMT_ID,
);
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
?><h2>Komentarz do uchwały - Widok</h2>
</div>
<div class='span6'>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?></div><!-- search-form -->
</div>
</div>

<?php $this->widget('bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'CMT_ID',
		'CMT_DATE',
		array(
			'name'=>'CMT_AUTHOR',
			'value'=>$model->author,
		),
		array(
			'name'=>'CMT_TYPE',
			'value'=>$model->typeDescription,
		),
		array(
			'name'=>'CMT_UCH_ID',
			'value'=>$model->Uchwala->UCH_NAME,
		),
		'CMT_CONTENT',
		//'CMT_RDN_ID',
		
		//'CMT_UCH_ID',
	),
)); ?>
