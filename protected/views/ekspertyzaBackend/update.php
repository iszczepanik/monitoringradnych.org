<?php
$this->breadcrumbs=array(
	'Expertyzas'=>array('index'),
	$model->EXP_ID=>array('view','id'=>$model->EXP_ID),
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
//array('label'=>'Wyszukiwanie zaawansowane', 'icon'=>'search', 'url'=>'#', 'linkOptions'=>array('class'=>'search-button')),
),
));
?><h2>Ekspertyza - Edycja</h2>
</div>
<div class='span6'>
</div>
</div>

<?php echo $this->renderPartial('_form',array('model'=>$model,'uchwala'=>$uchwala,)); ?>