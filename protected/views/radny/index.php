<?php
$this->breadcrumbs=array(
	'Radnies',
);

$this->menu=array(
	array('label'=>'Create Radny','url'=>array('create')),
	array('label'=>'Manage Radny','url'=>array('admin')),
);
?>

<h1>Radnies</h1>

<?php $this->widget('bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
