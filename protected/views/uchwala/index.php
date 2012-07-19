<?php
$this->breadcrumbs=array(
	'Uchwalas',
);

$this->menu=array(
	array('label'=>'Create Uchwala','url'=>array('create')),
	array('label'=>'Manage Uchwala','url'=>array('admin')),
);
?>

<h1>Uchwalas</h1>

<?php $this->widget('bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
