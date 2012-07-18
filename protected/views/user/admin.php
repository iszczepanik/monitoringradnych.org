<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
);

$this->menu=array(
	//array('label'=>'List User', 'url'=>array('index')),
	//array('label'=>'Create User', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('user-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Users</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<style>
.grid-view table.items tr:hover
{
	cursor: pointer;
	background-color: #BCE774;
}
</style>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'selectableRows'=>1,
	'selectionChanged'=>"function(id){ location.href = '".$this->createUrl('user/view')."&id='+$.fn.yiiGridView.getSelection(id); }",
	'filter'=>$model,
	'columns'=>array(
		'USR_ID',
		'USR_NAME',
		//'USR_PASS',
		'USR_FIRSTNAME',
		'USR_LASTNAME',
		'USR_EMAIL',
		// array(
			// 'class'=>'CButtonColumn',
		// ),
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}{delete}',
			'buttons'=>array
				(
					'view' , 'delete'                
				),

		),
	),
)); ?>
