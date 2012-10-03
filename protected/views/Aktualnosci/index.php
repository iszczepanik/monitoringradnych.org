<ul class="nav nav-tabs">
	<li class="active"><a href="#" >
	<h2>Aktualności</h2></a>
	</li>
	<li></li>
</ul>

<table class="detail-view table table-striped table-condensed" >
<?php $this->widget('bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</table>