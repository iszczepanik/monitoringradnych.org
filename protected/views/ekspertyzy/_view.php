<tr><td>
	<h3><? echo $data->EXP_AUTHOR; ?></h3>
	<div><?php echo $data->EXP_NAME; ?></div>
	<div><?php echo $data->EXP_CONTENT; ?></div>
	<? foreach ($data->files as $file): ?>
	
	<a href="<? echo Yii::app()->request->baseUrl; ?>materialy/ekspertyzy/<? echo trim($file); ?>" 
	target="_blank" style="font-weight: normal; display: block;" ><img src="img/pdf.png" /> <?php echo trim($file); ?></a>
	
	<? endforeach; ?>
</td>
</tr>