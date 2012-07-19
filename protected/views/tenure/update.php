<?php
$this->breadcrumbs=array(
	'Tenures'=>array('index'),
	$model->TNR_ID=>array('view','id'=>$model->TNR_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'Nowy', 'url'=>array('create')),
	array('label'=>'Lista', 'url'=>array('admin')),
);
?>

<h2>Kadencja - Edycja</h2>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>