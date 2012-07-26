<?php
$this->breadcrumbs=array(
	'Interpelacjas',
);

$this->menu=array(
	array('label'=>'Create Interpelacja','url'=>array('create')),
	array('label'=>'Manage Interpelacja','url'=>array('admin')),
);
?>

<h1>Interpelacjas</h1>

<?php $this->widget('bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
