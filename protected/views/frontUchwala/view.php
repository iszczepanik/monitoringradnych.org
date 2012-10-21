<ul class="nav nav-tabs">
	<li class="active"><a href="#" >
	<h2>Uchwała nr <? echo $model->UCH_NUMBER; ?></h2></a>
	</li>
	<li></li>
</ul>

<? if ($orig == 'uch') : ?>
<a href="<?php echo $this->createUrl('/FrontUchwala/index'); ?>" >wróc do wyszukiwarki</a>
<? endif; ?>

<?
//var_dump($votes);
?>

<?php $this->widget('bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'UCH_NAME',
		'UCH_DATE',
		array(
			'name'=>'UCH_KMS_ID',
			'value'=>$model->Komisja->KMS_NAME,
		),
		'dzielniceUchwalIDs'=> array(
            'name'  => 'dzielniceUchwalIDs',
            'value' => implode(', ', CHtml::listData($model->DzielniceUchwal, 'DZL_ID', 'DZL_NAME')),
		),
		'kategorieUchwalIDs'=> array(
            'name'  => 'kategorieUchwalIDs',
            'value' => implode(', ', CHtml::listData($model->KategorieUchwal, 'CAT_ID', 'CAT_NAME')),
		),
		// 'glosowanie'=> array(
            // 'name'  => 'glosowanie',
            // 'value' => implode(', ', $votes),
		// ),
	),
)); 

?>

<table class="detail-view table table-striped table-condensed" >
<tr>
<th>Dokument<br />

</th>
<td>
	<!--<iframe class="pdf_document" src="<? echo Yii::app()->request->baseUrl; ?>materialy/uchwaly/<? echo $model->UCH_FILE?>" ></iframe>-->
	<a href="<? echo Yii::app()->request->baseUrl; ?>materialy/uchwaly/<? echo $model->UCH_FILE; ?>" 
	target="_blank" style="font-weight: normal;" ><img src="img/pdf.png" /> zobacz dokument</a>
</td>
</tr>

<?
if(isset($votes))
{
	?><tr><th>Głosowanie</th><td>
	
	<div style="clear: both;"></div>
	<div class="pull-left" style="width: 24%" > 
	<?
	echo Vote::VoteIconStatic(1)." <strong>".Vote::VoteLabelPluralStatic(1)." (".$votes['count_za'].")</strong><br />";
	echo "<ul class='unstyled'>".$votes['za']."</ul>";
	?>
	</div>
	<div class="pull-left" style="width: 24%" > 
	<?
	echo Vote::VoteIconStatic(-1)." <strong>".Vote::VoteLabelPluralStatic(-1)." (".$votes['count_przeciw'].")</strong><br />";
	echo "<ul class='unstyled'>".$votes['przeciw']."</ul>";
	?>
	</div>
		<div class="pull-left" style="width: 24%" > 
	<?
	echo Vote::VoteIconStatic(0)." <strong>".Vote::VoteLabelPluralStatic(0)." (".$votes['count_wstrzymal'].")</strong><br />";
	echo "<ul class='unstyled'>".$votes['wstrzymal']."</ul>";
	?>
	</div>
	<div class="pull-left" style="width: 28%" > 
	<?
	echo Vote::VoteIconStatic(2)." <strong>".Vote::VoteLabelPluralStatic(2)." (".$votes['count_nieobecny'].")</strong><br />";
	echo "<ul class='unstyled'>".$votes['nieobecny']."</ul>";
	?>
	</div>
	<div style="clear: both;"></div>
		
	</td></tr><?
}

?>
</table>
