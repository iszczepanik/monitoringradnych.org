<tr>
<td>
	<div><? echo $data->UCH_INVITATION; ?></div>
	<div><small class="muted photo-title" >Projekt</small></div>
	<div><a href="<? echo  $this->createUrl('/MieszkancyKonsultuja/view&id='.$data->UCH_ID); ?>" ><?php echo $data->UCH_NAME; ?></a></div>
</td>
</tr>