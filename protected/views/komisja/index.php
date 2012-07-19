<?php
$this->breadcrumbs=array(
	'Komisjas',
);

$this->menu=array(
	array('label'=>'Create Komisja','url'=>array('create')),
	array('label'=>'Manage Komisja','url'=>array('admin')),
);
?>

<h1>Komisjas</h1>

<?php $this->widget('bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
