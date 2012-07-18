<?php
$this->breadcrumbs=array(
	'Tenures',
);

$this->menu=array(
	array('label'=>'Create Tenure','url'=>array('create')),
	array('label'=>'Manage Tenure','url'=>array('admin')),
);
?>

<h1>Tenures</h1>

<?php $this->widget('bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
