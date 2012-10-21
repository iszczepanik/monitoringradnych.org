<tr><td>
	<div><small class="muted photo-title" >Uchwała</small></div>
	<div><a href="<? echo  $this->createUrl('/frontUchwala/view&id='.$data->UCH_ID).'&orig=uch' ?>" ><?php echo $data->UCH_NAME; ?></a></div>
	<div style="clear: both;"></div>
	<div class="pull-left" style="padding-right: 40px;" > 
	<strong><? echo $data->getAttributeLabel('UCH_DATE'); ?>:</strong> <? echo $data->UCH_DATE; ?>
	</div>
	<div class="pull-left">
	<strong><? echo $data->getAttributeLabel('kategorieUchwalIDs'); ?>:</strong> 
	<? 
	echo implode(', ', CHtml::listData($data->KategorieUchwal, 'CAT_ID', 'CAT_NAME'));
	?>
	</div>
	<div style="clear: both;"></div>
	<div class="pull-left" style="padding-right: 65px;" > 
	<strong><? echo $data->getAttributeLabel('glosowanie'); ?>:</strong> 
	</div>
	<div class="pull-left" style="padding-right: 20px;" > 
	<?
	echo Vote::VoteIconStatic(1)." ".Vote::VoteLabelPluralStatic(1)." (".$data->votes['count_za'].")";
	?>
	</div>
	<div class="pull-left" style="padding-right: 20px;" > 
	<?
	echo Vote::VoteIconStatic(-1)." ".Vote::VoteLabelPluralStatic(-1)." (".$data->votes['count_przeciw'].")";
	?>
	</div>
		<div class="pull-left" style="padding-right: 20px;" > 
	<?
	echo Vote::VoteIconStatic(0)." ".Vote::VoteLabelPluralStatic(0)." (".$data->votes['count_wstrzymal'].")";
	?>
	</div>
	<div class="pull-left" style="padding-right: 20px;" > 
	<?
	echo Vote::VoteIconStatic(2)." ".Vote::VoteLabelPluralStatic(2)." (".$data->votes['count_nieobecny'].")";
	?>
	</div>
	<div style="clear: both;"></div>
</td>
</tr>