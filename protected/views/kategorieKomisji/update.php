<?php
$this->breadcrumbs=array(
	'Kategorie Komisjis'=>array('index'),
	$model->KMS_IN_CAT_ID=>array('view','id'=>$model->KMS_IN_CAT_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'Nowy', 'url'=>array('create')),
	array('label'=>'Lista', 'url'=>array('admin')),
);
?>

<h2>KategorieKomisji - Edycja</h2>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>