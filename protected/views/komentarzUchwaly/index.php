<ul class="nav nav-tabs">
	<li class="active"><a href="#" >
	<h2>Analiza wybranych uchwał</h2></a>
	</li>
	<li></li>
</ul>
<p>
W zakładce prezentowane jest omówienie najważniejszych, naszym zdaniem, uchwał powstających w mieście. 
Poza tekstem uchwały można się tu zapoznać z opiniami ekspertów, radnych i dziennikarzy dotyczących danego zagadnienia.
</p>

<table class="detail-view table table-striped table-condensed" >
<?php $this->widget('bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</table>