
<ul class="nav nav-tabs">
	<li class="active"><a href="#" >
	<h2>Wyszukiwarka uchwał</h2></a>
	</li>
	<li></li>
</ul>
<form action="<? echo $this->createUrl('/frontUchwala/index'); ?>" name="uchwala-search" method="POST" >
<div class="row">
	<div class="span3">
		<h3>Kategorie:</h3>
		<? //var_dump($searchParams['Kategorie']); ?>
		<div style="border: 1px solid #ddd; height: 100px; overflow: auto; padding: 4px;">
		<?
			$kategorie = Kategoria::model()->findAll();
			$i = 0;
			foreach($kategorie as $kategoria)
			{
				//var_dump(array_search($kategoria->CAT_ID, $searchParams['Kategorie']));
				//var_dump(gettype(array_search($kategoria->CAT_ID, $searchParams['Kategorie'])));
				echo "<input type='checkbox' name='Uchwala[Kategorie][]' id='Uchwala_Kategorie_".$i."' value='".$kategoria->CAT_ID."' ";
				if (isset($searchParams) && $searchParams['Kategorie'] != null && 
				gettype(array_search($kategoria->CAT_ID, $searchParams['Kategorie'])) == "integer" ) echo "checked='checked'";
				echo " /> ".$kategoria->CAT_NAME."<br />";
				$i++;
			}
		?>
		</div>
	</div>
	<div class="span3">
		<h3>Dzielnice:</h3>
		<div style="border: 1px solid #ddd; height: 100px; overflow: auto; padding: 4px;">
		<?
			$dzielnice = Dzielnica::model()->findAll();
			$i = 0;
			foreach($dzielnice as $dzielnica)
			{
				echo "<input type='checkbox' name='Uchwala[Dzielnice][]' id='Uchwala_Dzielnice_".$i."' value='".$dzielnica->DZL_ID."' ";
				if (isset($searchParams) && $searchParams['Dzielnice'] != null && gettype(array_search($dzielnica->DZL_ID, $searchParams['Dzielnice'])) == "integer" ) echo " checked='checked' ";
				if (isset($searchParams) && $searchParams['DzielniceAll'] == 'on') echo " disabled='disabled' ";
				echo "/> ".$dzielnica->DZL_NAME."<br />";
				$i++;
			}
		?>
		</div>
		<div style="padding: 5px;">
		<input type="checkbox" name="Uchwala[DzielniceAll]" id="Uchwala_DzielniceAll" onclick="jqEnableAll(this.Id, 'Uchwala_Dzielnice_', this.checked )"
		<? if (isset($searchParams) && $searchParams['DzielniceAll'] == 'on') echo "checked='checked'"; ?>
		/> <strong>Dotyczące całego miasta</strong>
		</div>
	</div>
	<div class="span3">
		<h3>Radny:</h3>
		<select name="Uchwala[Radny]" >
			<option value="-1"></option>
		<?
			$radni = Radny::model()->findAll();
			foreach($radni as $radny)
			{
				echo "<option value='".$radny->RDN_ID."' ";
				if (isset($searchParams) && $searchParams['Radny'] == $radny->RDN_ID ) echo "selected='selected'";
				echo ">".$radny->ImieNazwisko()."</option>";
			}
		?>
		</select>
		<input type="radio" name="Uchwala[Glosowanie]" value="1" 
		<? if (isset($searchParams) && $searchParams['Glosowanie'] === '1' ) echo "checked='checked'"; ?> />
		<? echo Vote::VoteLabelStatic(1); ?> <br />
		<input type="radio" name="Uchwala[Glosowanie]" value="-1" 
		<? if (isset($searchParams) && $searchParams['Glosowanie'] === '-1' ) echo "checked='checked'"; ?> />
		<? echo Vote::VoteLabelStatic(-1); ?><br />
		<input type="radio" name="Uchwala[Glosowanie]" value="0" 
		<? if (isset($searchParams) && $searchParams['Glosowanie'] === '0' ) echo "checked='checked'"; ?> />
		<? echo Vote::VoteLabelStatic(0); ?><br />
	</div>
	<div class="span3">
		<h3>Data:</h3>
		od:
		<div class="input-append date" id="dp_od" data-date="2012-01-01" data-date-format="yyyy-mm-dd">
		  <input class="span2" name="Uchwala[DataOd]" size="16" type="text" value="<? echo $searchParams['DataOd']; ?>">
		  <span class="add-on"><i class="icon-calendar"></i></span>
		</div>
		do:
		<div class="input-append date" id="dp_do" data-date="2012-12-31" data-date-format="yyyy-mm-dd">
		  <input class="span2" name="Uchwala[DataDo]" size="16" type="text" value="<? echo $searchParams['DataDo']; ?>">
		  <span class="add-on"><i class="icon-calendar"></i></span>
		</div>
	</div>
</div>
<div style="height: 15px;"></div>
<button class="btn" type="submit" name="search" ><i class="icon-search"></i> Szukaj</button>
<button class="btn" type="submit" name="showall"><i class="icon-ok"></i> Pokaż Wszystkie</button>
</form>


<? if(Yii::app()->params['debug']) : ?>
<div class="alert alert-info">
<? echo $condition; ?>
</div>
<? endif; ?>

<table class="detail-view table table-striped table-condensed" >
<?php $this->widget('bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</table>