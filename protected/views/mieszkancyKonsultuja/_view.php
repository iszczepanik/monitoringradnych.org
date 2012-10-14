<tr><td>
	<div><small class="muted photo-title" ><? echo $data->CMT_DATE; ?> Autor: <? echo $data->author; ?></small></div>
	<h3><?php echo $data->typeDescription; ?> do uchwały nr <? echo $data->Uchwala->UCH_NUMBER; ?></h3>
	<div><?php echo $data->brief; ?></div>
	<a href="<? echo  $this->createUrl('/KomentarzUchwaly/view&id='.$data->CMT_ID); ?>">czytaj więcej...</a>
</td>
</tr>