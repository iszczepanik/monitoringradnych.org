<?php
$this->breadcrumbs=array(
	'Okregs',
);

$this->menu=array(
	array('label'=>'Create Okreg','url'=>array('create')),
	array('label'=>'Manage Okreg','url'=>array('admin')),
);
?>

<h1>Okregs</h1>

<?php $this->widget('bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
