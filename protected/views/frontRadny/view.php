<h2>Radni</h2>
<div class="well well-small">
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
</div>
<?

if (isset($viewed))
{
	
	?>
	<div class="radny">
	<div class="well well-small image" ><img src="<?php echo $viewed->RDN_PHOTO; ?>" alt="<?php echo $viewed->ImieNazwisko(); ?>" /></div>	

	<h3><?php echo $viewed->ImieNazwisko(); ?></h3>
	<p><a href="mailto:<?php echo $viewed->RDN_EMAIL; ?>" ><?php echo $viewed->RDN_EMAIL; ?></a></p>
	<p>tel: <?php echo $viewed->RDN_PHONE; ?></p>
	<p>strona internetowa: <?php echo $viewed->RDN_WEBSITE; ?></p>
	<p>dyżur: <?php echo $viewed->RDN_DUTY; ?></p>
	<p>okręg: <a href="#" ><?php echo $viewed->Okreg->OKR_NAME; ?></a></p>
	
	<div class="row" style="margin-top: 15px;"> 
	    <div class="span3" >
			<h4>Uchwały</h4>
			<div class="radny_info" ></div>
	    </div>
		<div class="span3" >
			<h4>Ranking</h4>
			<div class="radny_info" ><div style="border-bottom: 1px solid #9aca3c; margin-bottom: 5px;"><span style="font-size: 24pt;"><? echo $viewed->Ranking->RNK_LP; ?></span> miejsce</div>
			dyżur: <? echo $viewed->Ranking->RNK_LP_DUTY; ?> miejsce<br />
			mail: <? echo $viewed->Ranking->RNK_LP_MAIL; ?> miejsce<br />
			sesja: <? echo $viewed->Ranking->RNK_LP_RADY; ?> miejsce<br />
			komisja: <? echo $viewed->Ranking->RNK_LP_KMS; ?> miejsce<br />
			strona: <? echo $viewed->Ranking->RNK_LP_INTERNET; ?> miejsce<br />
			<a href="#" >zobacz ranking</a>
			</div>
		</div>
		<div class="span3" >
			<h4>Komisje</h4>
			<div class="radny_info" >
			<ul>
			<?php 
			foreach($viewed->KomisjeRadnych as $n=>$komisja)
				echo "<li>".$komisja->KMS_NAME."</li>";
			?>
			</ul>
			</div>
		</div>
		<div class="span3" >
			<h4>Obietnice</h4>
			<div class="radny_info" ><?php echo $viewed->RDN_PROMISE; ?></div>
		</div>
	</div>
	</div>
		<?php 
	
}


?>