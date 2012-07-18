<?php
$this->breadcrumbs=array(
	'Radnies'=>array('index'),
	$model->RDN_ID=>array('view','id'=>$model->RDN_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'Nowy', 'url'=>array('create')),
	array('label'=>'Lista', 'url'=>array('admin')),
);
?>

<h2>Radny - Edycja</h2>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>