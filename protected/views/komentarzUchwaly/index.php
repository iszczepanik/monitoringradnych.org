<?php $this->renderPartial('//site/page', array('content'=>$content))?>



<? 
if ($dataProvider != null) :
foreach ($dataProvider->getData() as $uchwala) : 
?>
	<div class="pagination" >
	<ul id="yw1">
		<li class="previous <? if ($index == 0) echo "disabled"; ?>">
			<a href="<?php echo $this->createUrl('/KomentarzUchwaly/indexed', array('i' => $index-1)); ?>">← Poprzednia</a>
		</li>
		<li class="active" ><a>Oglądasz <? echo ($index+1)." z ".$total; ?></a></li>
		<li class="next <? if ($index == $total-1) echo "disabled"; ?>">
			<a href="<?php echo $this->createUrl('/KomentarzUchwaly/indexed', array('i' => $index+1)); ?>">Następna →</a>
		</li>
	</ul>
	</div>
	<br />
	<h3><? echo $uchwala->UCH_NAME; ?></h3>
	<a href="<? echo Yii::app()->request->baseUrl; ?>materialy/uchwaly/<? echo $uchwala->UCH_FILE; ?>" 
	target="_blank" style="font-weight: normal; display: block;" ><img src="img/pdf.png" /> zobacz dokument</a>
	<br />
	<? echo $uchwala->UCH_INVITATION; ?>

	<? 
	$komentarze = $uchwala->GetComments(); 
	foreach ($komentarze->getData() as $komentarz) 
		$this->renderPartial('_view', array('data'=>$komentarz)); 
	?>

<? 
endforeach; 
endif;
?>
