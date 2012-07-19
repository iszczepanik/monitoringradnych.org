<?php
$this->breadcrumbs=array(
	'Uchwalas'=>array('index'),
	$model->UCH_ID=>array('view','id'=>$model->UCH_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'Nowy', 'url'=>array('create')),
	array('label'=>'Lista', 'url'=>array('admin')),
);
?>

<h2>Uchwała - Edycja</h2>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>