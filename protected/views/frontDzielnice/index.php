<h2>Dzielnice</h2>
<div class="well well-small">
<?php 

foreach($model as $i=>$item)
{
	$items[$i] = array('label'=>$item->DZL_NAME , 
	'url'=>array('/frontDzielnice/view&id='.$item->DZL_ID));
}

$this->widget('bootstrap.widgets.BootMenu', array(
		    'type'=>'pills', // '', 'tabs', 'pills' (or 'list')
		    'stacked'=>false, // whether this is a stacked menu
		    'items'=>$items,
		)); 
?>
</div>