<ul class="nav nav-tabs">
	<li class="active"><a href="#" >
	<h2>Ekspertyza do uchwały nr <? echo $model->Uchwala->UCH_NUMBER; ?></h2></a>
	</li>
	<li></li>
</ul>
<div><small class="muted photo-title" ><? echo $model->EXP_DATE; ?> Autor: <? echo $model->EXP_AUTHOR; ?></small></div>
<div><a href="<?php echo $this->createUrl('/FrontUchwala/view&id='.$model->Uchwala->UCH_ID."&orig=exp"); ?>" >przejdź do uchwały nr <? echo $model->Uchwala->UCH_NUMBER; ?></a></div>
<? echo $model->EXP_CONTENT; ?>
