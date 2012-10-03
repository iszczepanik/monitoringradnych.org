<ul class="nav nav-tabs">
	<li class="active"><a href="#" >
	<h2>Uchwała nr <? echo $model->UCH_NUMBER; ?></h2></a>
	</li>
	<li></li>
</ul>




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


<?
if(isset($votes))
{
	?><tr><th>Głosowanie</th><td>
	
	<div style="clear: both;"></div>
	<div class="pull-left" style="width: 25%" > 
	<?
	echo Vote::VoteIconStatic(1)." <strong>".Vote::VoteLabelStatic(1)." (".$votes['count_za'].")</strong><br />";
	echo "<ul class='unstyled'>".$votes['za']."</ul>";
	?>
	</div>
	<div class="pull-left" style="width: 25%" > 
	<?
	echo Vote::VoteIconStatic(-1)." <strong>".Vote::VoteLabelStatic(-1)." (".$votes['count_przeciw'].")</strong><br />";
	echo "<ul class='unstyled'>".$votes['przeciw']."</ul>";
	?>
	</div>
		<div class="pull-left" style="width: 25%" > 
	<?
	echo Vote::VoteIconStatic(0)." <strong>".Vote::VoteLabelStatic(0)." (".$votes['count_wstrzymal'].")</strong><br />";
	echo "<ul class='unstyled'>".$votes['wstrzymal']."</ul>";
	?>
	</div>
	<div class="pull-left" style="width: 25%" > 
	<?
	echo Vote::VoteIconStatic(2)." <strong>".Vote::VoteLabelStatic(2)." (".$votes['count_nieobecny'].")</strong><br />";
	echo "<ul class='unstyled'>".$votes['nieobecny']."</ul>";
	?>
	</div>
	<div style="clear: both;"></div>
		
	</td></tr><?
}

?>
<tr>
<th>Dokument<br />
<a href="<? echo Yii::app()->request->baseUrl; ?>materialy/uchwaly/<? echo $model->UCH_FILE?>" target="_blank" style="font-weight: normal;" >zobacz w nowym oknie</a>
</th>
<td>
	<iframe class="pdf_document" src="<? echo Yii::app()->request->baseUrl; ?>materialy/uchwaly/<? echo $model->UCH_FILE?>" ></iframe>
</td>
</tr>
</table>