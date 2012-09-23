<ul class="nav nav-tabs">
	<li class="active"><a href="#" >
	<h2>Dzielnice</h2></a>
	</li>
	<li></li>
</ul>

<div class="row" >
<div class="span3" >

<div style="padding: 8px 0px; max-width: 340px;" class="well">
  <ul class="nav nav-list">
	<li class="nav-header">Dzielnice alfabetycznie</li>
	<? foreach($model as $i=>$item) : ?>
	<li <? if (isset($viewed) && $viewed->DZL_ID == $item->DZL_ID) echo "class='active'" ?> >
		<a href="<? echo  $this->createUrl('/frontDzielnice/view&id='.$item->DZL_ID); ?>" ><? echo $item->DZL_NAME ?></a>
	</li>
	<? endforeach; ?>
	
  </ul>
</div>

</div>
<div class="span9">
</div>
</div>

