<?php
$this->breadcrumbs=array(
	'Komentarz Uchwalies'=>array('index'),
	$model->CMT_ID=>array('view','id'=>$model->CMT_ID),
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
),
));
?><h2>Komentarz do uchwały / projektu - Edycja</h2>
</div>
<div class='span6'>

</div>
</div>

<?php echo $this->renderPartial('_form',array('model'=>$model,'uchwala'=>$uchwala,'projekt'=>$projekt,)); ?>