<?php
$this->breadcrumbs=array(
	'News Categories'=>array('index'),
	$model->NWS_CAT_ID=>array('view','id'=>$model->NWS_CAT_ID),
	'Update',
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
?><h2>Artykuły - kategoria - Edycja</h2>
</div>
<div class='span6'>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?></div><!-- search-form -->
</div>
</div>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>