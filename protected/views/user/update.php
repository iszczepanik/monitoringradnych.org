<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->USR_ID=>array('view','id'=>$model->USR_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'Nowy', 'url'=>array('create')),
	array('label'=>'Lista', 'url'=>array('admin')),
);
?>

<h2>Użytkownik - Edycja</h2>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>