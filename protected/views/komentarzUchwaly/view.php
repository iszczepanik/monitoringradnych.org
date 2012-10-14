<ul class="nav nav-tabs">
	<li class="active"><a href="#" >
	<h2><?php echo $model->typeDescription; ?> do uchwały nr <? echo $model->Uchwala->UCH_NUMBER; ?></h2></a>
	</li>
	<li></li>
</ul>
<div><small class="muted photo-title" ><? echo $model->CMT_DATE; ?> Autor: <? echo $model->author; ?></small></div>
<div><a href="<?php echo $this->createUrl('/FrontUchwala/view&id='.$model->Uchwala->UCH_ID); ?>" >przejdź do uchwały nr <? echo $model->Uchwala->UCH_NUMBER; ?></a></div>
<? echo $model->CMT_CONTENT; ?>
