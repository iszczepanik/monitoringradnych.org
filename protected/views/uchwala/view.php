<?php
$this->breadcrumbs=array(
	'Uchwalas'=>array('index'),
	$model->UCH_ID,
);
?>

<div class="row-fluid">
<div class="span6">
<?php
$this->widget('bootstrap.widgets.BootMenu', array(
    'type'=>'tabs',
    'items'=>array(
//array('label'=>'LIST HEADER'),
array('label'=>'Lista', 'icon'=>'th-list', 'url'=>array('admin')),
array('label'=>'Nowy', 'icon'=>'plus-sign', 'url'=>array('create')),
array('label'=>'Wyszukiwanie zaawansowane', 'icon'=>'search', 'url'=>'#', 'linkOptions'=>array('class'=>'search-button')),
),
));
?>
<h2>Uchwała - Widok</h2>
</div>
<div class="span6">
<?php //echo CHtml::link('Wyszukiwanie zaawansowane','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
</div>
</div>

<?
//var_dump($votes);
?>

<?php $this->widget('bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'UCH_ID',
		'UCH_FILE',
		'UCH_NAME',
		'UCH_NUMBER',
		'UCH_DATE',
		array(
			'name'=>'UCH_KMS_ID',
			'value'=>$model->Komisja->KMS_NAME,
		),
		'dzielniceUchwalIDs'=> array(
            'name'  => 'dzielniceUchwalIDs',
            'value' => implode(', ', CHtml::listData($model->DzielniceUchwal, 'DZL_ID', 'DZL_NAME')),
		),
		'kategorieUchwalIDs'=> array(
            'name'  => 'kategorieUchwalIDs',
            'value' => implode(', ', CHtml::listData($model->KategorieUchwal, 'CAT_ID', 'CAT_NAME')),
		),
		// 'glosowanie'=> array(
            // 'name'  => 'glosowanie',
            // 'value' => implode(', ', $votes),
		// ),
	),
)); 

if(isset($votes))
{
	?><table class="detail-view table table-striped table-condensed" ><tr class="odd"><th>Głosowanie</th><td><?
		foreach($votes as $i=>$item)
		{
			echo $item."<br />";
		}
	?></td></tr></table><?
}

?>
