<?php $this->renderPartial('//site/page', array('content'=>$content))?>

<br />

<? foreach ($dataProvider->getData() as $uchwala) : ?>
	
	<? //var_dump($uchwala); ?>
	
	<h3><? echo $uchwala->UCH_NAME; ?></h3>
	<a href="<? echo Yii::app()->request->baseUrl; ?>materialy/uchwaly/<? echo $model->UCH_FILE; ?>" 
	target="_blank" style="font-weight: normal; display: block;" ><img src="img/pdf.png" /> zobacz dokument</a>
	<? echo $uchwala->UCH_INVITATION; ?>

	<? 
	$komentarze = $uchwala->GetComments(); 
	foreach ($komentarze->getData() as $komentarz) 
		$this->renderPartial('_view', array('data'=>$komentarz)); 
	?>

<? endforeach; ?>

<!--
<? //if ($dataProvider->totalItemCount > 0) : ?>

<table class="detail-view table table-striped table-condensed" >
<?php //$this->widget('bootstrap.widgets.BootListView',array(
	//'dataProvider'=>$dataProvider,
	//'itemView'=>'_view',
//)); ?>
</table>

<? //endif; ?>
-->