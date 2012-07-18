<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->USR_ID,
);

$this->menu=array(
	array('label'=>'TKI Profile', 'url'=>array('TkiProfile')),
	array('label'=>'Negotiator Profile', 'url'=>array('NegotiatorProfile')),
);

function calculate_view_perccentage($value)
{
	switch($value)
	{
		case -1: $view_percentage = 0; break;
		case 0: $view_percentage = 50; break;	
		case 1: $view_percentage = 100; break;
		default:
		{
			//echo "default"."<br />";
			if ($value < 0)
			{
				//echo "neg"."<br />";
				$view_percentage = 1 + $value;
				//echo "po odjeciu od 1: ".$view_percentage ."<br />";
				$view_percentage = $view_percentage / 2;
				//echo "po podzieleniu przez 2: ".$view_percentage ."<br />";
			}
			else
			{
				//echo "pos"."<br />";
				$view_percentage = $value / 2;
				$view_percentage += 0.5;
			}
			$view_percentage *= 100;
			
		}break;
	}
	return $view_percentage;
}

?>

<? 
$assertivness = round(($model->USR_ASSERT_COUNT == 0 ? 0 : $model->USR_ASSERT / $model->USR_ASSERT_COUNT),6); 
$cooperativness = round(($model->USR_COOPER_COUNT == 0 ? 0 : $model->USR_COOPER / $model->USR_COOPER_COUNT),6);

?>

<h1>Negotiator Profile</h1>
<br />
<table id="tki_table" cellpadding="0" cellspacing="0" >
<tr>
<th>MODE</th>
<th>LOW</th>
<th colspan="2">MEDIUM</th>
<th>HIGH</th>
</tr>

<tr class="scale_row" > 
<td style="border-left: 0" ><div class="scale_div_mode">&nbsp;</div></td>
<td><div class="scale_div">&ndash;1</div></td>
<td><div class="scale_div">&ndash;0.5</div></td>
<td><div class="scale_div">0</div></td>
<td><div class="scale_div"></div>
<div class="scale_div" style="width: 100%; float:left;" >0.5
<div style="float: right; " class="scale_100">1</div></div></td>
</tr>

<tr>
<td class="name_assertivness">
<div class="header_div_mode">Assertivness</div>
</td>
<td class="value_" colspan="4" >
<div style="width:<? echo calculate_view_perccentage($assertivness); ?>%" class="name_assertivness" >&nbsp;<? //echo $value; ?></div>
</td>
</tr>

<tr class="scale_row" > 
<td style="border-left: 0" ><div class="scale_div_mode">&nbsp;</div></td>
<td><div class="scale_div">&nbsp;</div></td>
<td><div class="scale_div">&nbsp;</div></td>
<td><div class="scale_div">&nbsp;</div></td>
<td><div class="scale_div"></div>
<div class="scale_div" style="width: 100%; float:left;" >&nbsp;
<div style="float: right; " class="scale_100">&nbsp;</div></div></td>
</tr>

<tr>
<td class="name_cooperativness">
<div class="header_div_mode">Cooperativness</div>
</td>
<td class="value_" colspan="4" >
<div style="width:<? echo calculate_view_perccentage($cooperativness); ?>%" class="name_cooperativness" >&nbsp;<? //echo $value; ?></div>
</td>
</tr>

</table>

<div>
<p>
<h3 class='h3_Assertivness'>Assertivness</h3>
Description of assertivness. Description of assertivness. Description of assertivness. Description of assertivness. Description of assertivness. Description of assertivness. Description of assertivness. Description of assertivness. Description of assertivness. Description of assertivness. Description of assertivness. Description of assertivness. Description of assertivness. Description of assertivness. Description of assertivness. Description of assertivness. Description of assertivness. Description of assertivness. Your assertivness is <span class="b" ><? echo $assertivness; ?></span>.
</p>
<p>
<h3 class='h3_Cooperativness'>Cooperativness</h3>
Description of cooperativness. Description of cooperativness. Description of cooperativness. Description of cooperativness. Description of cooperativness. Description of cooperativness. Description of cooperativness. Description of cooperativness. Description of cooperativness. Description of cooperativness. Description of cooperativness. Your cooperativness is <span class="b" ><? echo $cooperativness; ?></span>.
</p>

<!--
Assertivness: <? echo $assertivness; //if ($model->USR_ASSERT_COUNT == 0) echo "0"; else echo $model->USR_ASSERT / $model->USR_ASSERT_COUNT; ?> <br />
Cooperativness: <? echo $cooperativness; //if ($model->USR_COOPER_COUNT == 0) echo "0"; else echo $model->USR_COOPER / $model->USR_COOPER_COUNT; ?> <br />
-->
</div>
<?php 




?>
