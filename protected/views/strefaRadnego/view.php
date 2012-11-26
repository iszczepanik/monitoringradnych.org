<a class="btn" href="<? echo $this->createUrl('/strefaRadnego/update'); ?>" ><i class="icon-pencil"></i> Edytuj</a>
<div>
	<p><h4>Komentarz do obietnicy</h4></p>
	<p>
	<?
		echo $model->RDN_PROMISE_CMT;
	?>
	</p>
</div>
<div>
	<p><h4>Komentarz do wywiadu</h4></p>
	<p>
	<?
		echo $model->RDN_INTERVIEW_CMT;
	?>
	</p>
</div>



