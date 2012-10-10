<?php
$this->breadcrumbs=array(
	'Komentarz Uchwalies',
);

$this->menu=array(
	array('label'=>'Create KomentarzUchwaly','url'=>array('create')),
	array('label'=>'Manage KomentarzUchwaly','url'=>array('admin')),
);
?>

<h1>Komentarz Uchwalies</h1>

<?php $this->widget('bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
