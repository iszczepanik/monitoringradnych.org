<?php $this->renderPartial('//site/page', array('content'=>$content))?>

<br />

<? 
if ($dataProvider != null)
foreach ($dataProvider->getData() as $uchwala) : ?>
	
	<h3><? echo $uchwala->UCH_NAME; ?></h3>
	<a href="<? echo Yii::app()->request->baseUrl; ?>materialy/uchwaly/<? echo $uchwala->UCH_FILE; ?>" 
	target="_blank" style="font-weight: normal; display: block;" ><img src="img/pdf.png" /> zobacz dokument</a>
	<br />
	<? echo $uchwala->UCH_INVITATION; ?>
	<br />

	<? 
	$komentarze = $uchwala->GetComments(); 
	foreach ($komentarze->getData() as $komentarz) 
		$this->renderPartial('_view', array('data'=>$komentarz)); 
	?>

<? endforeach; ?>
