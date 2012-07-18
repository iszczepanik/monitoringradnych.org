<?php
$this->breadcrumbs=array(
	'Dzielnicas'=>array('index'),
	$model->DZL_ID=>array('view','id'=>$model->DZL_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'Nowy', 'url'=>array('create')),
	array('label'=>'Lista', 'url'=>array('admin')),
);
?>

<h2>Dzielnica - Edycja</h2>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>