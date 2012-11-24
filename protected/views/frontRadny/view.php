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
			<br />
			<p><h4>Informacje kontaktowe</h4>
			E-mail: <a href="mailto:<?php echo $viewed->RDN_EMAIL; ?>" ><?php echo $viewed->RDN_EMAIL; ?></a><br />
			Tel: <?php echo $viewed->RDN_PHONE; ?><br />
			Strona internetowa: <a href="<?php echo $viewed->RDN_WEBSITE; ?>" target="_blank" ><?php echo $viewed->RDN_WEBSITE; ?></a></p>
			<p><h4>Okręg</h4><?php echo $viewed->Okreg->OKR_NAME; ?></p>
			<p><h4>Klub</h4><?php echo $viewed->Klub->CLB_NAME; ?></p>
			<p><h4>Dyżur</h4>
			<?php echo $viewed->RDN_DUTY; ?>
			</p>
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
			<? if ($viewed->RDN_INFO_RNK != null && $viewed->RDN_INFO_RNK != "")
					echo "<p>".$viewed->ImieNazwisko()." ".$viewed->RDN_INFO_RNK."</p>";
			?>
			<? if ($viewed->Ranking != null): ?>
			<p>Ogółem: <span style="font-size: 24pt;"><? echo $viewed->Ranking->RNK_LP; ?>.</span> miejsce 
			<a href="<? echo  $this->createUrl('/frontRanking/index&id=ranking'); ?>" >zobacz cały ranking</a></p>
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
			<? endif; ?>
			</div>
			<div>
			<p><h4>Interpelacje</h4></p>
			
			<? $list = $viewed->Get3LastInterpelacje(); 
			if (count($list) > 0) : ?>
			
			<table class="detail-view table table-striped table-condensed" >
				<?
					foreach($list as $item){
						//process each item here
						?>
						<tr>
						<td>
							<? echo $item['INT_NAME']; ?><br />
							<a href="<? echo Yii::app()->request->baseUrl; ?>materialy/interpelacje/<? echo $item['INT_FILE']; ?>" 
								target="_blank" style="font-weight: normal;" ><img src="img/pdf.png" /> zobacz dokument</a>
							<? if ($item['INT_ANSWER_FILE'] != null ) : ?>
								<br /><a href="<? echo Yii::app()->request->baseUrl; ?>materialy/interpelacje/<? echo $item['INT_ANSWER_FILE']; ?>" 
								target="_blank" style="font-weight: normal;" ><img src="img/pdf.png" /> zobacz dokument odpowiedzi</a>
							<? endif; ?>
						</td>
						</tr>
						<?
					}
				?>
			</table>
			<? else: ?>
			<p style="font-style:italic " >Nie znaleziono</p>
			<? endif; ?>
			
			
			</div>
			
			<div>
				<p><h4>Uchwały</h4></p>
				<p>Głosowanie radnego nad trzema ostatnimi uchwałami. <br /><a href="<?php echo $this->createUrl('/FrontUchwala/index'); ?>" >zobacz wszystkie</a></p>
				<table class="detail-view table table-striped table-condensed" >
				<?
					$list= $viewed->Get3Last();

					foreach($list as $item){
						//process each item here
						?>
						<tr>
						<!--<th><? echo Vote::VoteIconStatic($item['VOT_VOTE'])." ".Vote::VoteLabelStatic($item['VOT_VOTE']); ?></th>
						<td>
							<a href="<? echo  $this->createUrl('/frontUchwala/view&id='.$item['UCH_ID']."&orig=rdn"); ?>" ><?php echo $item['UCH_NAME']; ?></a>
						</td>-->
						<td><strong><? echo Vote::VoteIconStatic($item['VOT_VOTE'])." ".Vote::VoteLabelStatic($item['VOT_VOTE']); ?></strong>
						<br />
						<a href="<? echo  $this->createUrl('/frontUchwala/view&id='.$item['UCH_ID']."&orig=rdn"); ?>" ><?php echo $item['UCH_NAME']; ?></a>
						</td>
						</tr>
						<?
					}
				?>
				</table>
			</div>
			
			<? if ($viewed->RDN_PROMISE != null) : ?>
			<div>
				<p><h4>Obietnice</h4></p>
				<p>
				<?
					$brief = $viewed->GetBrief($viewed->RDN_PROMISE);
					if ($brief === false)
						echo $viewed->RDN_PROMISE;
					else
					{
						echo "<div id='ObietniceBrief' >".$brief."</div>";
						echo "<div id='ObietniceAll' style='display: none;' >".$viewed->RDN_PROMISE."</div>";
						?>
						<div style="clear:both;" ></div>
						<a id="ObietniceReadAll" href="javascript:ReadAll('Obietnice');" 
						style="padding-left: 10px;" class="pull-right" >czytaj całość...</a>
						<a id="ObietniceCollapse" href="javascript:ReadAll('Obietnice');" 
						style="padding-left: 10px; display: none;" class="pull-right" >zwiń...</a>
						<div style="clear:both;" ></div>
						<?
					}
				?>
				</p>
			</div>
			<? endif; ?>
			
			<? if ($viewed->RDN_PROMISE_CMT != null) : ?>
			<div>
				<p><h4>Komentarz do obietnicy</h4></p>
				<p>
				<?
					$brief = $viewed->GetBrief($viewed->RDN_PROMISE_CMT);
					if ($brief === false)
						echo $viewed->RDN_PROMISE_CMT;
					else
					{
						echo "<div id='ObietniceKomBrief' >".$brief."</div>";
						echo "<div id='ObietniceKomAll' style='display: none;' >".$viewed->RDN_PROMISE_CMT."</div>";
						?>
						<div style="clear:both;" ></div>
						<a id="ObietniceKomReadAll" href="javascript:ReadAll('ObietniceKom');" 
						style="padding-left: 10px;" class="pull-right" >czytaj całość...</a>
						<a id="ObietniceKomCollapse" href="javascript:ReadAll('ObietniceKom');" 
						style="padding-left: 10px; display: none;" class="pull-right" >zwiń...</a>
						<div style="clear:both;" ></div>
						<?
					}
				?>
				</p>
			</div>
			<? endif; ?>
			
			<? if ($viewed->RDN_INTERVIEW != null) : ?>
			<div>
				<p><h4>Wywiad</h4></p>
				<p>
				<?
					$brief = $viewed->GetBrief($viewed->RDN_INTERVIEW);
					if ($brief === false)
						echo $viewed->RDN_INTERVIEW;
					else
					{
						echo "<div id='InterviewBrief' >".$brief."</div>";
						echo "<div id='InterviewAll' style='display: none;' >".$viewed->RDN_INTERVIEW."</div>";
						?>
						<div style="clear:both;" ></div>
						<a id="InterviewReadAll" href="javascript:ReadAll('Interview');" 
						style="padding-left: 10px;" class="pull-right" >czytaj całość...</a>
						<a id="InterviewCollapse" href="javascript:ReadAll('Interview');" 
						style="padding-left: 10px; display: none;" class="pull-right" >zwiń...</a>
						<div style="clear:both;" ></div>
						<?
					}
				?>
				</p>
			</div>
			<? endif; ?>
			
			<? if ($viewed->RDN_INTERVIEW_CMT != null) : ?>
			<div>
				<p><h4>Komentarz do wywiadu</h4></p>
				<p>
				<?
					$brief = $viewed->GetBrief($viewed->RDN_INTERVIEW_CMT);
					if ($brief === false)
						echo $viewed->RDN_INTERVIEW_CMT;
					else
					{
						echo "<div id='InterviewKomBrief' >".$brief."</div>";
						echo "<div id='InterviewKomAll' style='display: none;' >".$viewed->RDN_INTERVIEW_CMT."</div>";
						?>
						<div style="clear:both;" ></div>
						<a id="InterviewKomReadAll" href="javascript:ReadAll('InterviewKom');" 
						style="padding-left: 10px;" class="pull-right" >czytaj całość...</a>
						<a id="InterviewKomCollapse" href="javascript:ReadAll('InterviewKom');" 
						style="padding-left: 10px; display: none;" class="pull-right" >zwiń...</a>
						<div style="clear:both;" ></div>
						<?
					}
				?>
				</p>
			</div>
			<? endif; ?>
			
			<div>
				<p><h4>Oświadczenie majątkowe</h4></p>
			<? if ($viewed->RDN_STATEMENT_FILE != null) : ?>
			<p><a href="materialy/oswiadczenia_majatkowe/<?php echo $viewed->RDN_STATEMENT_FILE; ?>" target="_blank" ><img src="img/pdf.png" /> zobacz oświadczenie</a></p>
			<? else: ?>
			<p style="font-style:italic " >Nie znaleziono</p>
			<? endif; ?>
			</div>
			
		</div>
	</div>
	
	</div>
	
	</div>
		<?php 
	
}


?>
</div>