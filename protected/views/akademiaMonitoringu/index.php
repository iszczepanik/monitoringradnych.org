<ul class="nav nav-tabs">
	<li class="active"><a href="#" >
	<h2>Akademia Monitoringu</h2></a>
	</li>
	<li></li>
</ul>

<p>
Akademia Monitoringu jest częścią projektu Monitoring Radnych, która poświęcona jest współpracy z wolontariuszami. Dzięki ich pomocy zbieramy informacje, które możecie znaleźć w zakładce: Radni (m.in. rozliczenia z obietnic wyborczych, plany radnych na najbliższe miesiące). Wolontariusze Bona Fides prowadzą także monitoring obowiązków radnych: raz w miesiącu sprawdzają, czy chodzą na dyżury, co znajduje swoje odzwierciedlenie w Rankingu Radnych. Ponadto nasi wolontariusze uczestniczą także w comiesięcznych szkoleniach, gdzie poszerzają swoją wiedzę w zakresie tematów takich jak: praca Rady Miasta, monitoring polityczny, community organizing, wolontariat europejski.</p>
<p>Naszym celem jest zachęcenie jak największej ilości osób do aktywnego uczestnictwa w życiu politycznym miasta, dlatego prowadzimy stały nabór wolontariuszy. Jeśli jesteś zainteresowany uczestnictwem w Akademii Monitoringu skontaktuj się z nami mailowo: <a href="mailto:karolina@bonafides.pl" >karolina@bonafides.pl</a> lub telefonicznie: (32)203-12-18.</p>

<? if ($dataProvider->totalItemCount > 0) : ?>

<table class="detail-view table table-striped table-condensed" >
<?php $this->widget('bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</table>

<? endif; ?>