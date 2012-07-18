<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->USR_ID,
);

$this->menu=array(
	array('label'=>'TKI Profile', 'url'=>array('TkiProfile')),
	array('label'=>'Negotiator Profile', 'url'=>array('NegotiatorProfile')),
);
?>

<h1>TKI Profile</h1>
<br />
<table id="tki_table" cellpadding="0" cellspacing="0" >
<tr>
<th>MODE</th>
<th>LOW</th>
<th colspan="2">MEDIUM</th>
<th>HIGH</th>
</tr>
<?php 
$characteristics = $model->chrs;
foreach($characteristics as $key=>$characteristic): ?>

<tr class="scale_row" > 
<td style="border-left: 0" ><div class="scale_div_mode">&nbsp;</div></td>
<td><div class="scale_div"><? if ($key == 0) echo "0%"; else "&nbsp;"; ?></div></td>
<td><div class="scale_div"><? if ($key == 0) echo "25%"; else "&nbsp;"; ?></div></td>
<td><div class="scale_div"><? if ($key == 0) echo "50%"; else "&nbsp;"; ?></div></td>
<td><div class="scale_div"></div>
<div class="scale_div" style="width: 100%; float:left;" ><? if ($key == 0) echo "75%"; else "&nbsp;"; ?>
<div style="float: right; " class="scale_100"><? if ($key == 0) echo "100%"; else "&nbsp;"; ?></div></div></td>
</tr>

<?
$fullName = $characteristic->preference->PRF_VALUE;
$pieces = explode(" ", $fullName);
$name = $pieces[0]; 
$value = $characteristic->CHR_VALUE;
?>
<tr>
<td class="name_<? echo $name; ?>">
<div class="header_div_mode"><? echo $name; ?></div>
</td>
<td class="value_" colspan="4" >
<div style="width:<? echo ($value/12)*100; ?>%" class="name_<? echo $name; ?>" >&nbsp;<? //echo $value; ?></div>
</td>
</tr>

<?php endforeach; ?>

</table>

<? foreach($characteristics as $key=>$characteristic): ?>

<?
$fullName = $characteristic->preference->PRF_VALUE;
$pieces = explode(" ", $fullName);
$name = $pieces[0]; 
$desc = $characteristic->preference->PRF_DESC;
$value = $characteristic->CHR_VALUE;
$score = "{{SCORE}}";
$desc = str_replace($score, $value, $desc);

echo "<p><h3 class='h3_".$name ."'>".$name."</h3>".$desc."</p>";
?>

<?php endforeach; ?>

