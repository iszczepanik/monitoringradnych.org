<?php
$this->breadcrumbs=array(
	'Interpelacjas'=>array('index'),
	$model->INT_ID,
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
?><h2>Interpelacja - Widok</h2>
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
		'INT_ID',
		array(
			'name'=>'INT_RDN_ID',
			'value'=>$model->Radny->ImieNazwisko(),
		),
		'INT_NAME',
		'INT_FILE',
		'INT_ANSWER_FILE',
		'INT_RDN_COMMENT',
	),
)); ?>
