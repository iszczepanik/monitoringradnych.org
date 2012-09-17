<ul class="nav nav-tabs">
	<li class="active"><a href="#" >
	<h2>Dzielnice</h2></a>
	</li>
	<li></li>
</ul>

<div class="main-menu">
<ul class="nav nav-pills ">
	<? foreach($model as $i=>$item) : ?>
	<li <? if (isset($viewed) && $viewed->DZL_ID == $item->DZL_ID) echo "class='active'" ?> >
		<a href="<? echo  $this->createUrl('/frontDzielnice/view&id='.$item->DZL_ID); ?>" ><? echo $item->DZL_NAME ?></a>
	</li>
	<? endforeach; ?>
</ul>
</div>
<?

if (isset($viewed))
{
	
	?>
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
			<p><a href="#"><?php echo $viewed->Okreg->OKR_NAME; ?></a></p>
			<p>Liczba miszkańców: <?php echo $viewed->DZL_CITIZEN_COUNT; ?></p>
			<p>Powierzchnia: <?php echo $viewed->DZL_AREA; ?></p>
			<div><h4>Radni na dyżurach w dzielncy</h4>
			</div>
			<div><h4>Radni wybrani z okręgu</h4>
			<ul>
			<?
				$criteria = new CDbCriteria;
				$criteria->condition='RDN_OKR_ID=:RDN_OKR_ID';
				$criteria->params=array(':RDN_OKR_ID'=>$viewed->Okreg->OKR_ID);
				
				$radni = Radny::model()->findAll($criteria);
				
				foreach($radni as $i=>$item)
				{
					?><li><a href="<? echo $this->createUrl('frontRadny/view&id='.$item->RDN_ID);?>" ><? echo $item->ImieNazwisko(); ?></a></li><?
				}
			?>
			</ul>
			</div>
			<div><h4>Uchwały dotyczące dzielnicy</h4>
			<p>Trzy ostatnie uchwały dotyczące dzielnicy, bez uwzględnienia uchwał ogólnych - dotyczących całego miasta. <a href="#" >zobacz wszystkie</a></p>
			<table class="detail-view table table-striped table-condensed" >
							<?
					$uchwaly = Yii::app()->db->createCommand('select * from uch u , uch_in_dzl d
						where u.UCH_ID = d.UCH_IN_DZL_UCH_ID
						and d.UCH_IN_DZL_DZL_ID = '.$viewed->DZL_ID.'
						and u.UCH_ID in ( 
						select UCH_IN_DZL_UCH_ID from uch_in_dzl
						group by UCH_IN_DZL_UCH_ID
						having count(UCH_IN_DZL_UCH_ID) < (select count(*) from dzl)
						)
						order by u.UCH_DATE desc
						LIMIT 0 , 3')->queryAll();

					foreach($uchwaly as $uchwala){
						//process each item here
						//echo $item->UCH_ID;
						//$uchwala = Uchwala::model()->findByPk($item['UCH_ID']);
						//var_dump( $item);
						$dzielnice = Yii::app()->db->createCommand('select * from dzl d , uch_in_dzl u
							where d.DZL_ID = u.UCH_IN_DZL_DZL_ID
							and u.UCH_IN_DZL_UCH_ID = '.$uchwala['UCH_ID'])->queryAll();
						//var_dump( $uchwala);
						?>
						<tr>
						<th>
						<?  
						foreach ($dzielnice as $dzielnica)
						{
							echo $dzielnica['DZL_NAME']."<br />";
						}
						?>
						</th>
						<td><? echo $uchwala['UCH_NAME']; ?></td>
						</tr>
						<?
					}
				?>
				</table>
			</div>
		</div>
	</div>
	
	</div>
	
	
	

		<?php 
	
}


?>