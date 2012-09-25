<ul class="nav nav-tabs">
	<li class="active"><a href="#" >
	<h2>Radni</h2></a>
	</li>
	<li></li>
</ul>

<div class="row" >
<div class="span3" >

<div class="tabbable"> <!-- Only required for left/right tabs -->
	<ul class="nav nav-tabs">
		<li <? if ($tab == 'clubs') echo "class='active'"; ?> ><a href="#tab1" data-toggle="tab">Kluby</a></li>
		<li <? if ($tab == 'alfa') echo "class='active'"; ?> ><a href="#tab2" data-toggle="tab">Alfabetycznie</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane <? if ($tab == 'clubs') echo "active"; ?>" id="tab1">
			<div style="padding: 8px 0px; max-width: 340px;" class="well">
				<ul class="nav nav-list">
				<?
				$lista = Radny::GetAllGroupedByClubs();
				foreach ($lista as $key=>$club) : ?>
				<li class="nav-header"><? echo $key; echo " (".count($club).")" ?></li>
					<? foreach ($club as $key=>$radny) : ?>
					<li <? if (isset($viewed) && $viewed->RDN_ID == $radny->RDN_ID) echo "class='active'" ?> >
						<a href="<? echo  $this->createUrl('frontRadny/view&id='.$radny->RDN_ID.'&tab=clubs'); ?>" ><? echo $radny->ImieNazwisko(); ?></a>
					</li>
					<? endforeach; ?>
				<? endforeach; ?>
				</ul>
			</div>
		</div>
		<div class="tab-pane <? if ($tab == 'alfa') echo "active"; ?>" id="tab2">
			<div style="padding: 8px 0px; max-width: 340px;" class="well">
				<ul class="nav nav-list">
					<li class="nav-header">Radni alfabetycznie</li>
					<? foreach($model as $i=>$item) : ?>
					<li <? if (isset($viewed) && $viewed->RDN_ID == $item->RDN_ID) echo "class='active'" ?> >
					<a href="<? echo  $this->createUrl('frontRadny/view&id='.$item->RDN_ID.'&tab=alfa'); ?>" ><? echo $item->ImieNazwisko(); ?></a>
					</li>
					<? endforeach; ?>
				</ul>
			</div>
		</div>
	</div>
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
				<img src="materialy/radni/<?php echo $viewed->RDN_PHOTO; ?>" alt="<?php echo $viewed->ImieNazwisko(); ?>" /><br />
				
			</a>
			<p class="muted photo-title" >Wszystkie zdjęcia radnych<br />pochodzą ze strony<br /><a href="http://bip.um.katowice.pl" target="_blank" >bip.um.katowice.pl</a></p>
		</li>
	</ul>
	
	<div class="tab-content" >
		<div class="tab-pane active" id="lA" >
			<img src="materialy/kluby/<?php echo $viewed->Klub->CLB_LOGO; ?>" alt="<?php echo $viewed->Klub->CLB_NAME; ?>" class="pull-right" />
			<h3><?php echo $viewed->ImieNazwisko(); ?></h3>
			<p><a href="mailto:<?php echo $viewed->RDN_EMAIL; ?>" ><?php echo $viewed->RDN_EMAIL; ?></a></p>
			<p>Tel: <?php echo $viewed->RDN_PHONE; ?></p>
			<p>Strona internetowa: <?php echo $viewed->RDN_WEBSITE; ?></p>
			<p>Okręg: <a href="#" ><?php echo $viewed->Okreg->OKR_NAME; ?></a></p>
			<p>Klub: <?php echo $viewed->Klub->CLB_NAME; ?></p>
			<p><h4>Komisje</h4>
			<ul><!-- class="unstyled"-->
			<?php 
			foreach($viewed->KomisjeRadnych as $n=>$komisja)
				echo "<li>".$komisja->KMS_NAME."</li>";
			?>
			</ul>
			</p>
			<div>
			<p><h4>Ranking</h4></p>
			<p>Ogółem: <span style="font-size: 24pt;"><? echo $viewed->Ranking->RNK_LP; ?>.</span> miejsce 
			<a href="<? echo  $this->createUrl('/frontRanking/index'); ?>" >zobacz cały ranking</a></p>
			<table class="detail-view table table-striped table-condensed" >
				<tr>
					<th>Dyżur</th>
					<td><? echo $viewed->Ranking->RNK_LP_DUTY; ?>. miejsce</td>
				</tr>
				<tr>
					<th>E-mail</th>
					<td><? echo $viewed->Ranking->RNK_LP_MAIL; ?>. miejsce</td>
				</tr>
				<tr>
					<th>Sesja</th>
					<td><? echo $viewed->Ranking->RNK_LP_RADY; ?>. miejsce</td>
				</tr>
				<tr>
					<th>Komisja</th>
					<td><? echo $viewed->Ranking->RNK_LP_KMS; ?>. miejsce</td>
				</tr>
				<tr>
					<th>Strona</th>
					<td><? echo $viewed->Ranking->RNK_LP_INTERNET; ?>. miejsce</td>
				</tr>
			</table>
			</div>
			<div>
				<p><h4>Uchwały</h4></p>
				<p>Głosowanie radnego nad trzema ostatnimi uchwałami <a href="#" >zobacz wszystkie</a></p>
				<table class="detail-view table table-striped table-condensed" >
				<?
					$list= Yii::app()->db->createCommand('SELECT * 
						FROM  `uch` u,  `vot` v
						WHERE u.UCH_ID = v.VOT_UCH_ID
						AND v.VOT_RDN_ID = '.$viewed->RDN_ID.'
						AND u.UCH_TYPE = 1
						order by u.UCH_DATE desc
						LIMIT 0 , 3')->queryAll();

					$rs=array();
					foreach($list as $item){
						//process each item here
						?>
						<tr>
						<th><? echo Vote::VoteLabelStatic($item['VOT_VOTE']); ?></th>
						<td>
							<a href="<? echo  $this->createUrl('/frontUchwala/view&id='.$item['UCH_ID']); ?>" ><?php echo $item['UCH_NAME']; ?></a>
						</td>
						</tr>
						<?
					}
				?>
				</table>
			</div>
			<div>
				<p><h4>Obietnice</h4></p>
			<p><?php echo $viewed->RDN_PROMISE; ?></p>
			</div>
			<div>
				<p><h4>Komentarz do obietnicy</h4></p>
			<p><?php echo $viewed->RDN_PROMISE_CMT; ?></p>
			</div>
			<div>
				<p><h4>Oświadczenie majątkowe</h4></p>
			<p><a href="materialy/oswiadczenia_majatkowe/<?php echo $viewed->RDN_STATEMENT_FILE; ?>" target="_blank" ><img src="img/pdf.png" /> zobacz oświadczenie</a></p>
			</div>
			<div>
				<p><h4>Wywiad</h4></p>
			<p><?php echo $viewed->RDN_INTERVIEW; ?></p>
			</div>
			<div>
				<p><h4>Komentarz do wywiadu</h4></p>
			<p><?php echo $viewed->RDN_INTERVIEW_CMT; ?></p>
			</div>
		</div>
	</div>
	
	</div>
	
	</div>
		<?php 
	
}


?>
</div>