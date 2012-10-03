<?php
$this->breadcrumbs=array(
	'News'=>array('index'),
	$model->NWS_ID,
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
?><h2>Aktualności - Widok</h2>
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
		'NWS_ID',
		array(
			'name'=>'NWS_NWS_CAT_ID',
			'value'=>$model->Kategoria->NWS_CAT_NAME,
		),
		'NWS_DATE',
		//'NWS_TITLE',
		//'NWS_CONTENT',
		//'NWS_NWS_CAT_ID',
		// array(
			// 'name'=>'NWS_CONTENT',
			// 'value'=>$model->GetBrief(),
		// ),

	),
)); ?>

<ul class="nav nav-tabs">
	<li class="active"><a href="#" >
	<h2><? echo $model->NWS_TITLE; ?></h2></a>
	</li>
	<li></li>
</ul>

<? echo $model->NWS_CONTENT; ?>

