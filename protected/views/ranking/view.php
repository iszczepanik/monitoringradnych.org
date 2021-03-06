<?php
$this->breadcrumbs=array(
	'Rankings'=>array('index'),
	$model->RNK_RDN_ID,
);
?>

<div class="row-fluid">
<div class="span6">
<?php
$this->widget('bootstrap.widgets.BootMenu', array(
    'type'=>'tabs',
    'items'=>array(
//array('label'=>'LIST HEADER'),
array('label'=>'Lista', 'icon'=>'th-list', 'url'=>array('admin')),
//array('label'=>'Nowy', 'icon'=>'plus-sign', 'url'=>array('create')),
array('label'=>'Wyszukiwanie zaawansowane', 'icon'=>'search', 'url'=>'#', 'linkOptions'=>array('class'=>'search-button')),
),
));
?>
<h2>Ranking - Widok</h2>
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

<?php $this->widget('bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		array(
			'name'=>'RNK_RDN_ID',
			'value'=>$model->Radny->ImieNazwisko(),
		),
		'RNK_KMS',
		'RNK_RADY',
		'RNK_DUTY',
		'RNK_MAIL',
		'RNK_INTERNET',
	),
)); ?>
