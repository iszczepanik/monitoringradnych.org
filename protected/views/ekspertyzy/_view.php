<tr><td>
	<div><small class="muted photo-title" ><? echo $data->EXP_DATE; ?> Autor: <? echo $data->EXP_AUTHOR; ?></small></div>
	<h3>Ekspertyza do uchwały nr <? echo $data->Uchwala->UCH_NUMBER; ?></h3>
	<div><?php echo $data->brief; ?></div>
	<a href="<? echo  $this->createUrl('/Ekspertyzy/view&id='.$data->EXP_ID); ?>">czytaj więcej...</a>
</td>
</tr>