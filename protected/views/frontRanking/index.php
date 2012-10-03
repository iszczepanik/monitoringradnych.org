
<ul class="nav nav-tabs">
	<li class="active"><a href="#" >
	<h2>Ranking Radnych</h2></a>
	</li>
	<li></li>
</ul>


<div class="row" >
<div class="span3" >

<div style="padding: 8px 0px; max-width: 340px;" class="well">
  <ul class="nav nav-list">
	<li class="nav-header">Ranking</li>
	<li <? if (isset($id) && $id == 'najlepsi') echo "class='active'" ?> >
		<a href="<? echo  $this->createUrl('/frontRanking/index&id=najlepsi'); ?>" >Najlepsi</a>
	</li>
	<li <? if (isset($id) && $id == 'ranking') echo "class='active'" ?> >
		<a href="<? echo  $this->createUrl('/frontRanking/index&id=ranking'); ?>" >Ranking - tabela</a>
	</li>
	<li <? if (isset($id) && $id == 'metodologia') echo "class='active'" ?> >
		<a href="<? echo  $this->createUrl('/frontRanking/index&id=metodologia'); ?>" >Metodologia</a>
	</li>
  </ul>
</div>

</div>
<div class="span9" >
	<? if (isset($id) && $id == 'ranking') : ?>
		<table class="items table table-striped table-bordered table-condensed">
			<tr>
				<th>lp.</th>
				<th>Radny</th>
				<th>Komisje</th>
				<th>Sesje</th>
				<th>Dyżury</th>
				<th>E-maile</th>
				<th>Strona internetowa</th>
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
	<? endif; ?>
	<? if (isset($id) && $id == 'najlepsi') : ?>
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
	<? endif; ?>
	<? if (isset($id) && $id == 'metodologia') : ?>
		Metodologia
	<? endif; ?>
</div>
</div>




