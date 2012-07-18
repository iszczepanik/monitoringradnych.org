<?php
$this->breadcrumbs=array(
	'Radnys'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Radny','url'=>array('index')),
	array('label'=>'Manage Radny','url'=>array('admin')),
);
?>

<h1>Create Radny</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>