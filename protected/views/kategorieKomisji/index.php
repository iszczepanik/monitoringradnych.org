<?php
$this->breadcrumbs=array(
	'Kategorie Komisjis',
);

$this->menu=array(
	array('label'=>'Create KategorieKomisji','url'=>array('create')),
	array('label'=>'Manage KategorieKomisji','url'=>array('admin')),
);
?>

<h1>Kategorie Komisjis</h1>

<?php $this->widget('bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
