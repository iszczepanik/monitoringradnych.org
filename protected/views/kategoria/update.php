<?php
$this->breadcrumbs=array(
	'Kategorias'=>array('index'),
	$model->CAT_ID=>array('view','id'=>$model->CAT_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'Nowy', 'url'=>array('create')),
	array('label'=>'Lista', 'url'=>array('admin')),
);
?>

<h2>Kategoria - Edycja</h2>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>