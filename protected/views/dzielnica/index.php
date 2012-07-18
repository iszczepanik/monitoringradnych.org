<?php
$this->breadcrumbs=array(
	'Dzielnicas',
);

$this->menu=array(
	array('label'=>'Create Dzielnica','url'=>array('create')),
	array('label'=>'Manage Dzielnica','url'=>array('admin')),
);
?>

<h1>Dzielnicas</h1>

<?php $this->widget('bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
