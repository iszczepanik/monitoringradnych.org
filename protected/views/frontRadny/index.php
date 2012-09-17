<ul class="nav nav-tabs">
	<li class="active"><a href="#" >
	<h2>Radni</h2></a>
	</li>
	<li></li>
</ul>
<div class="main-menu">
<ul class="nav nav-pills ">
	<? foreach($model as $i=>$item) : ?>
	<li <? if (isset($viewed) && $viewed->RDN_ID == $item->RDN_ID) echo "class='active'" ?> >
		<a href="<? echo  $this->createUrl('frontRadny/view&id='.$item->RDN_ID); ?>" ><? echo $item->ImieNazwisko(); ?></a>
	</li>
	<? endforeach; ?>
</ul>
</div>