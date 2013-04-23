<ul class="nav nav-tabs">
	<li class="active"><a href="#" >
	<h2>Interpelacje <small><? echo $radny->ImieNazwisko(); ?></small></h2></a>
	</li>
	<li></li>
</ul>

<a href="<?php echo $this->createUrl('/FrontRadny/view', array('id'=>$radny->RDN_ID, 'tab'=>'clubs')); ?>" >Powrót na stronę radnego</a>

<? $list = $dataProvider->getData(); 
if (count($list) > 0) : ?>
<p style="margin-bottom: 5px; text-align: right;" >Znaleziono: <? echo count($list); ?></p>
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
