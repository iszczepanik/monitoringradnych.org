
<ul class="nav nav-tabs">
	<li class="active"><a href="#" >
	<h2>Wyszukiwarka uchwał</h2></a>
	</li>
	<li></li>
</ul>

<div class="row">
	<div class="span3">
		<h3>Kategorie:</h3>
		<div style="border: 1px solid #ddd; height: 100px; overflow: auto; padding: 4px;">
		<?
			$kategorie = Kategoria::model()->findAll();
			foreach($kategorie as $kategoria)
			{
				echo "<input type='checkbox' /> ".$kategoria->CAT_NAME."<br />";
			}
		?>
		</div>
	</div>
	<div class="span3">
		<h3>Dzielnice:</h3>
		<div style="border: 1px solid #ddd; height: 100px; overflow: auto; padding: 4px;">
		<?
			$dzielnice = Dzielnica::model()->findAll();
			foreach($dzielnice as $dzielnica)
			{
				echo "<input type='checkbox' /> ".$dzielnica->DZL_NAME."<br />";
			}
		?>
		</div>
	</div>
	<div class="span3">
		<h3>Radny:</h3>
		<select>
			<option value="-1"></option>
		<?
			$radni = Radny::model()->findAll();
			foreach($radni as $radny)
			{
				echo "<option value='".$radny->RDN_ID."'>".$radny->ImieNazwisko()."</option>";
			}
		?>
			<input type="radio" /> za <br />
			<input type="radio" /> przeciw <br />
			<input type="radio" /> wstrzymał się <br />
		</select>
	</div>
	<div class="span3">
		<h3>Data:</h3>
		od:
		<div class="input-append date" id="dp_od" data-date="2012-01-01" data-date-format="yyyy-mm-dd">
		  <input class="span2" size="16" type="text" value="2012-01-01">
		  <span class="add-on"><i class="icon-calendar"></i></span>
		</div>
		do:
		<div class="input-append date" id="dp_do" data-date="2012-12-31" data-date-format="yyyy-mm-dd">
		  <input class="span2" size="16" type="text" value="2012-12-31">
		  <span class="add-on"><i class="icon-calendar"></i></span>
		</div>
	</div>
</div>
<div style="height: 15px;"></div>
<button class="btn btn-primary" type="button"><i class="icon-search icon-white"></i> Szukaj</button>
<button class="btn" type="button"><i class="icon-ok"></i> Pokaż Wszystkie</button>


<table class="detail-view table table-striped table-condensed" >
<?php $this->widget('bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</table>