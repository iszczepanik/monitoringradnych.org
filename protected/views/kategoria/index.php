<?php
$this->breadcrumbs=array(
	'Kategorias',
);

$this->menu=array(
	array('label'=>'Create Kategoria','url'=>array('create')),
	array('label'=>'Manage Kategoria','url'=>array('admin')),
);
?>

<h1>Kategorias</h1>

<?php $this->widget('bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
