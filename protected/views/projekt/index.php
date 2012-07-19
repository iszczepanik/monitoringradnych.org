<?php
$this->breadcrumbs=array(
	'Projekts',
);

$this->menu=array(
	array('label'=>'Create Projekt','url'=>array('create')),
	array('label'=>'Manage Projekt','url'=>array('admin')),
);
?>

<h1>Projekts</h1>

<?php $this->widget('bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
