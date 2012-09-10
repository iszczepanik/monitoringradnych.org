<h2>Radni</h2>
<?php 

foreach($model as $i=>$item)
{
	$items[$i] = array('label'=>$item->ImieNazwisko() , 
	'url'=>array('/frontRadny/view&id='.$item->RDN_ID), 
	'visible'=>Yii::app()->user->isGuest);
}

$this->widget('bootstrap.widgets.BootMenu', array(
		    'type'=>'pills', // '', 'tabs', 'pills' (or 'list')
		    'stacked'=>false, // whether this is a stacked menu
		    'items'=>$items,
		)); 



?>