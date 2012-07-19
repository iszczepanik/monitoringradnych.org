<?php
$this->breadcrumbs=array(
	'Komisjas'=>array('index'),
	$model->KMS_ID=>array('view','id'=>$model->KMS_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'Nowy', 'url'=>array('create')),
	array('label'=>'Lista', 'url'=>array('admin')),
);
?>

<h2>Komisja - Edycja</h2>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>