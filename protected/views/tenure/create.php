<?php
$this->breadcrumbs=array(
	'Tenures'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Nowy', 'url'=>array('create')),
	array('label'=>'Lista', 'url'=>array('admin')),
);
?>

<h2>Nowy Tenure</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>