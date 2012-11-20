<ul class="nav nav-tabs">
	<li class="active"><a href="#" >
	<h2>Mieszkańcy konsultują</h2></a>
	</li>
	<li></li>
</ul>

<?php $this->widget('bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		//'UCH_NAME',
		//'UCH_DATE',
		array(
			'name'=>'Projekt',
			'value'=>$model->UCH_NAME,
		),
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
	<a href="<? echo Yii::app()->request->baseUrl; ?>materialy/projekty/<? echo $model->UCH_FILE; ?>" 
	target="_blank" style="font-weight: normal;" ><img src="img/pdf.png" /> zobacz dokument</a>
</td>
</tr>

</table>

<h3>Komentarze</h3>
<? if (count($model->Komentarze) > 0 ) : ?>

<? foreach ($model->Komentarze as $komentarz) : ?>
	
	<h4><? echo $komentarz->TypeDescription; ?></h4>
	<div><span class="muted" ><? echo $komentarz->CMT_DATE; ?> Autor: <? echo $komentarz->AuthorLink; ?></span></div>
	<div><?php echo $komentarz['CMT_CONTENT']; ?></div>
	
<? endforeach; ?>

<? else : ?>
<p>Ten projekt nie ma jeszcze żadnych komentarzy.</p>
<? endif; ?>





