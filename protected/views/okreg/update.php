<?php
$this->breadcrumbs=array(
	'Okregs'=>array('index'),
	$model->OKR_ID=>array('view','id'=>$model->OKR_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'Nowy', 'url'=>array('create')),
	array('label'=>'Lista', 'url'=>array('admin')),
);
?>

<h2>Okreg - Edycja</h2>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>