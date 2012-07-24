<?php
$this->breadcrumbs=array(
	'Rankings'=>array('index'),
	$model->RNK_RDN_ID=>array('view','id'=>$model->RNK_RDN_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'Nowy', 'url'=>array('create')),
	array('label'=>'Lista', 'url'=>array('admin')),
);
?>

<h2>Ranking - Edycja</h2>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>