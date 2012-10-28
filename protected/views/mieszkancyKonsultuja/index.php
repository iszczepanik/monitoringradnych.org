<?php $this->renderPartial('//site/page', array('content'=>$content))?>

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