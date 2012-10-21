<ul class="nav nav-tabs">
	<li class="active"><a href="#" >
	<h2>Mieszkańcy konsultują</h2></a>
	</li>
	<li></li>
</ul>
<p>
Urząd Miasta Katowice prowadzi na internetowej Platformie Konsultacji Społecznych systematyczne konsultacje wszystkich uchwalanych w mieście aktów prawa miejscowego. Konsultacje skierowane są jednak jedynie do organizacji pozarządowych. Nie mogą w nich wziąć udziału osoby prywatne.
Uważamy, że warto w ten proces włączyć także mieszkańców, stąd w tej zakładce umieszczane są wszystkie obecnie organizowane przez urząd konsultacje. Osoby, które chciałyby zgłosić swoje opinie i uwagi do projektów uchwał, mogą to zrobić za pośrednictwem naszego stowarzyszenia, wysyłając e-mail na adres: <a href="mailto:anna.zetelman@bonafides.pl" >anna.zetelman@bonafides.pl</a>
</p>

<? if ($dataProvider->totalItemCount > 0) : ?>

<table class="detail-view table table-striped table-condensed" >
<?php $this->widget('bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</table>

<? else : ?>
Obecnie urząd nie prowadzi żadnych konsultacji społecznych z mieszkańcami.
<? endif; ?>