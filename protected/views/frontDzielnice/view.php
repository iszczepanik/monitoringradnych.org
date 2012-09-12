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
<?

if (isset($viewed))
{
	
	?>
	<div class="radny">
	<div class="well well-small image" ><img src="" alt="<?php echo $viewed->DZL_NAME; ?>" /></div>	

	<h3><?php echo $viewed->DZL_NAME; ?></h3>
	<p>l. miszkańców: <?php echo $viewed->DZL_CITIZEN_COUNT; ?></p>
	<p>powierzchnia: <?php echo $viewed->DZL_AREA; ?></p>
		<div style="clear: both;" ></div>
	<div class="row" style="margin-top: 15px;"> 
	    <div class="span4" >
			<h4>Radni na dyżurach w dzielncy</h4>
			<div class="radny_info" ></div>
	    </div>
		<div class="span4" >
			<h4>Radni wybrani z okręgu</h4>
			<div class="radny_info" >
			</div>
		</div>
		<div class="span4" >
			<h4>Uchwały dotyczące dzielnicy</h4>
			<div class="radny_info" >
			
			</div>
		</div>
	</div>
	</div>
		<?php 
	
}


?>