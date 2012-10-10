<?php
$this->breadcrumbs=array(
	'Expertyzas',
);

$this->menu=array(
	array('label'=>'Create Expertyza','url'=>array('create')),
	array('label'=>'Manage Expertyza','url'=>array('admin')),
);
?>

<h1>Expertyzas</h1>

<?php $this->widget('bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
