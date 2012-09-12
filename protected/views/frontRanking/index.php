<h2>Ranking</h2>
<div class="row">
	<div class="span6">
		<table class="items table table-striped table-bordered table-condensed">
			<tr>
				<th>lp.</th>
				<th>Radny</th>
				<th>K</th>
				<th>R</th>
				<th>D</th>
				<th>M</th>
				<th>I</th>
				<th>Suma</th>
			</tr>
			<? 
			foreach($model as $i=>$item)
			{
				?><tr><?
				echo "<td>".$item->RNK_LP."</td>";
				echo "<td><a href='".$this->createUrl("frontRadny/view&id=".$item->RNK_RDN_ID)."' >".$item->Radny->ImieNazwisko()."</a></td>";
				echo "<td>".$item->RNK_KMS."</td>";
				echo "<td>".$item->RNK_RADY."</td>";
				echo "<td>".$item->RNK_DUTY."</td>";
				echo "<td>".$item->RNK_MAIL."</td>";
				echo "<td>".$item->RNK_INTERNET."</td>";
				echo "<th>".$item->RNK_SUM."</th>";
				?></tr><?
			}
			?>
		</table>
	</div>
<div class="span6">
<h3>Najlepsi</h3>
<ol>
<? 
	for($i = 0; $i < 3; $i++)
	{
		$item = $model[$i];
		?><li><?
		echo "<a href='".$this->createUrl("frontRadny/view&id=".$item->RNK_RDN_ID)."' >".$item->Radny->ImieNazwisko()."</a>";
		?></li><?
	}
?>
</ol>
</div>
</div>
<?php 





?>