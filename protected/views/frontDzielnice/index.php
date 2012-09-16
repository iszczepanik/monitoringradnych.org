<h2>Dzielnice</h2>
<div class="main-menu">
<ul class="nav nav-pills ">
	<? foreach($model as $i=>$item) : ?>
	<li <? if (isset($viewed) && $viewed->DZL_ID == $item->DZL_ID) echo "class='active'" ?> >
		<a href="<? echo  $this->createUrl('/frontDzielnice/view&id='.$item->DZL_ID); ?>" ><? echo $item->DZL_NAME ?></a>
	</li>
	<? endforeach; ?>
</ul>
</div>

<!--
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
</div>-->