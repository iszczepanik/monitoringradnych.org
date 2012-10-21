<ul class="nav nav-tabs">
	<li class="active"><a href="#" >
	<h2>Wypowiedzi ekspertów</h2></a>
	</li>
	<li></li>
</ul>
<p>
W tym miejscu przedstawiane są analizy ekspertów dotyczące różnych obszarów funkcjonowania samorządu oraz porównanie uchwał i programów funkcjonujących w Katowicach z ich odpowiednikami z innych miast. Liczymy, że część dobrych praktyk i rekomendacji przedstawionych przez ekspertów uda się zaimplementować w Katowicach.
</p>

<? if ($dataProvider->totalItemCount > 0) : ?>

<table class="detail-view table table-striped table-condensed" >
<?php $this->widget('bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</table>

<? endif; ?>