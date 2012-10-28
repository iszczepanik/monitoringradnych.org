<ul class="nav nav-tabs">
	<li class="active"><a href="#" >
	<h2>Dzielnice</h2></a>
	</li>
	<li></li>
</ul>

<div class="row" >
<div class="span3" >

<div style="padding: 8px 0px; max-width: 340px;" class="well">
  <ul class="nav nav-list">
	<li class="nav-header">Dzielnice alfabetycznie</li>
	<? foreach($model as $i=>$item) : ?>
	<li <? if (isset($viewed) && $viewed->DZL_ID == $item->DZL_ID) echo "class='active'" ?> >
		<a href="<? echo  $this->createUrl('/frontDzielnice/view&id='.$item->DZL_ID); ?>" ><? echo $item->DZL_NAME ?></a>
	</li>
	<? endforeach; ?>
	
  </ul>
</div>

</div>

<?

if (isset($viewed))
{
	
	?>
	<div class="span9" >
	<div class="tabbable tabs-left">
	<ul class="nav nav-tabs" >
		<li class="active" >
			<a href="#lA" data-toggle="tab" >
				<img src="img/dzielnice/<?php echo $viewed->DZL_ID; ?>.png" alt="<?php echo $viewed->DZL_NAME; ?>" /><br />
				
			</a>
			<p class="muted photo-title" >Wszystkie grafiki oparte<br />na zasobie wikipedii<br /><a href="http://pl.wikipedia.org/wiki/Dzielnice_Katowic" target="_blank" >pl.wikipedia.org/wiki/Dzielnice_Katowic</a></p>
		</li>
	</ul>
	
	<div class="tab-content" >
		<div class="tab-pane active" id="lA" >
			<h3><?php echo $viewed->DZL_NAME; ?></h3>
			<p><?php echo $viewed->Okreg->OKR_NAME; ?></p>
			<p>Liczba mieszkańców: <?php echo $viewed->DZL_CITIZEN_COUNT; ?></p>
			<p>Powierzchnia: <?php echo $viewed->DZL_AREA; ?> km<sup>2</sup></p>
			<div><h4>Radni na dyżurach w dzielncy</h4>
			<ul>
			<? 
			$radni = $viewed->RadniNaDyzurze(); 
			foreach ($radni as $radny)
				echo "<li><a href='".$this->createUrl('frontRadny/view&id='.$radny['RDN_ID'])."&tab=clubs' >".$radny['RDN_FIRSTNAME']." ".$radny['RDN_LASTNAME']."</a></li>";
			?>
			</ul>
			</div>
			<div><h4>Radni wybrani z okręgu</h4>
			<ul>
			<?
			$radni = $viewed->RadniWybraniZOkregu();
			foreach($radni as $i=>$item)
			{
				?><li><a href="<? echo $this->createUrl('frontRadny/view&id='.$item->RDN_ID)."&tab=clubs";?>" ><? echo $item->ImieNazwisko(); ?></a></li><?
			}
			?>
			</ul>
			</div>
			<div><h4>Uchwały dotyczące dzielnicy</h4>
			<p>Trzy ostatnie uchwały dotyczące dzielnicy, bez uwzględnienia uchwał ogólnych - dotyczących całego miasta. 
			<br /><a href="<?php echo $this->createUrl('/FrontUchwala/definedSearch&attrName=dzl&value='.$viewed->DZL_ID); ?>" >zobacz wszystkie</a></p>
			<table class="detail-view table table-striped table-condensed" >
							<?
					$uchwaly = $viewed->Get3Last();

					foreach($uchwaly as $uchwala){
						?>
						<tr>
						<td><a href="<? echo $this->createUrl('frontUchwala/view&id='.$uchwala['UCH_ID'].'&orig=dzl')."&tab=clubs";?>" ><? echo $uchwala['UCH_NAME']; ?></td>
						</tr>
						<?
					}
				?>
				</table>
			</div>
		</div>
	</div>
	
	</div>
	</div>
	
	

		<?php 
	
}


?>
</div>