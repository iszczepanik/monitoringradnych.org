<tr><td>
	<div><small class="muted photo-title" ><? echo $data->NWS_DATE; ?></small></div>
	<h3><?php echo $data->NWS_TITLE; ?></h3>
	<div><?php echo $data->GetBrief(); ?></div>
	<a href="<? echo  $this->createUrl('/Aktualnosci/view&id='.$data->NWS_ID); ?>">czytaj więcej...</a>
</td>
</tr>