<?php
$this->breadcrumbs=array(
	'Clubs',
);

$this->menu=array(
	array('label'=>'Create Club','url'=>array('create')),
	array('label'=>'Manage Club','url'=>array('admin')),
);
?>

<h1>Kluby</h1>

<?php $this->widget('bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
