
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
				echo "<td><a href='".$this->createUrl("frontRadny/view&id=".$item->RNK_RDN_ID)."&tab=clubs' >".$item->Radny->ImieNazwisko()."</a></td>";
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
				echo "<a href='".$this->createUrl("frontRadny/view&id=".$item->RNK_RDN_ID)."&tab=clubs' >".$item->Radny->ImieNazwisko()."</a>";
				?></li><?
			}
		?>
		</ol>
	<? endif; ?>
	<? if (isset($id) && $id == 'metodologia') : ?>
		
	<p>Sposób gromadzenia danych i punktacji w pięciu badanych obszarach:</p>
	<ol>
	<h3><li>Uczestnictwo w sesjach rady miasta.</li></h3>

Frekwencja radnych sprawdzana jest na podstawie list obecności udostępnionych w BIP UM Katowice począwszy od pierwszej sesji, która odbyła się we wrześniu 2012 roku. 
Za obecność radny otrzymuje <strong>1 pkt</strong>. ( również jeżeli radny jest na delegacji w tym czasie)
Za nieobecność otrzymuje <strong>0 pkt</strong>.


<h3><li>Uczestnictwo w komisjach rady miasta.</li></h3>

Frekwencja radnych sprawdzana jest na podstawie list obecności udostępnianych w BIP UM Katowice, począwszy od pierwszej sesji, która odbyła się we wrześniu 2012 roku.
Radny może być w więcej niż jednej komisji, dlatego tutaj musieliśmy zastosować nieco inny sposób punktowania ich obecności.
Jeżeli radny uczestniczył we wszystkich posiedzeniach różnych komisji, których jest członkiem, otrzymuje <strong>1 pkt</strong>. (również jeżeli radny jest na delegacji w tym czasie)
Jeżeli radny opuścił chociaż jedno posiedzenie otrzyma <strong>0,5 pkt</strong>.
Jeżeli opuścił wszystkie posiedzenia otrzyma <strong>0 pkt</strong>.


<h3><li>Prowadzenie dyżurów z mieszkańcami.</li></h3>

Frekwencja radnych podczas dyżurów z mieszkańcami sprawdzana jest w okresie od września 2012 r. do czerwca 2013 r..
Dyżury sprawdzane są przez uczestników Akademii Monitoringu i pracowników stowarzyszenia.
Każdy z radnych sprawdzany jest jeden raz w miesiącu (niezależnie od ilości zaplanowanych dyżurów). Jeżeli radny jest nieobecny na dyżurze w ciągu pierwszych 15 min. i nie zawiadomi o swoim spóźnieniu, to przyjmuje się, że radny był nieobecny.
Każdy radny za obecność na dyżurze otrzymuje <strong>1 pkt</strong>.
Za brak, zastępstwo bądź odwołanie dyżuru (z wcześniejszym poinformowaniem mieszkańców) w danym miesiącu radny otrzymuje <strong>0 pkt</strong>.
Jeśli radny jest nieobecny na dyżurze, ale nie poinformował o tym wcześniej mieszkańców, to otrzymuje <strong>-1 pkt</strong>.
</li>

<h3><li>Prowadzenie strony internetowej i/lub konta w serwisie społecznościowym.</li></h3>

Monitoring stron/kont ruszył we wrześniu 2012roku.
Podczas monitoringu sprawdzane są strony internetowe/konta w serwisach społecznościowych, których adresy radni podali w BIP UM Katowice.
Za umieszczenie w Internecie przynajmniej jednej informacji w miesiącu dotyczącej aktualnej pracy w Radzie Miasta radny otrzymuje <strong>0,5 pkt</strong>.
Dodatkowe <strong>0,5 pkt</strong> otrzymuje radny, który umieszcza informacje nie tylko o odbytych spotkaniach (bądź złożonych interpelacjach), ale także o tematach poruszanych na nadchodzących sesjach i komisjach oraz o tym, jak zamierza głosować nad ważnymi dla społeczności projektami uchwał.
Radni, którzy nie posiadają bądź nie dokonali w danym miesiącu aktualizacji strony internetowej/konta w serwisie społecznościowym otrzymują <strong>0 pkt</strong>.
</li>

<h3><li>Poczta elektroniczna.</li></h3>

Podczas monitoringu sprawdzane jest, czy radni odpowiadają mieszkańcom na pytania i uwagi wysyłane za pomocą poczty elektronicznej.
Od września 2012 roku raz na kwartał do każdego radnego, który podaje w BIP UM Katowice adres e-mail kierowane jest pytanie/uwaga wysłane przez tajemniczego klienta.
Radny, który udzieli rzetelnej odpowiedzi na wysłany e-mail w ciągu 7 dni otrzymuje <strong>1 pkt</strong>.
Radny, który udzieli odpowiedzi w ciągu 8-14 dni otrzymuje <strong>0,5 pkt</strong>.
Radni, którzy nie udostępniają adresu e-mail bądź udzielą odpowiedzi w terminie dłuższym niż 14 otrzymują <strong>0 pkt</strong>.
Ci radni, którzy w ogóle nie odpowiedzą na pytanie, otrzymują <strong>-1 pkt</strong>.
</li>
</ol>
		
	<? endif; ?>
</div>
</div>




