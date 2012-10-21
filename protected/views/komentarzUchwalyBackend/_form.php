<div class="modal hide" id="Modal_KomentarzUchwaly" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	<h3 id="myModalLabel">Wybierz uchwałę</h3>
	</div>
	<div class="modal-body">
	<?php $this->widget('bootstrap.widgets.BootGridView',array(
		'type'=>'striped bordered condensed',
		'id'=>'uchwala-grid',
		'dataProvider'=>$uchwala->search(),
		'filter'=>$uchwala,
		'columns'=>array(
			'UCH_ID',
			//'UCH_NUMBER',
			array(
				'name'=>'UCH_NAME',
				'value'=>'$data->brief',
			),
		),
	)); ?>
	</div>
	<div class="modal-footer">
	<button class="btn" data-dismiss="modal" aria-hidden="true" >Anuluj</button>
	<button class="btn btn-primary" data-dismiss="modal" aria-hidden="true" onclick="SetChosen('uchwala-grid','KomentarzUchwaly_CMT_UCH_ID','KomentarzUchwaly_Uchwala'); return false; "  >Ok</button>
	</div>
</div>

<div class="modal hide" id="Modal_KomentarzUchwalyProjekt" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	<h3 id="myModalLabel">Wybierz projekt</h3>
	</div>
	<div class="modal-body">
	<?php $this->widget('bootstrap.widgets.BootGridView',array(
		'type'=>'striped bordered condensed',
		'id'=>'projekt-grid',
		'dataProvider'=>$projekt->search(),
		'filter'=>$projekt,
		'columns'=>array(
			'UCH_ID',
			array(
				'name'=>'UCH_NAME',
				'value'=>'$data->brief',
			),
		),
	)); ?>
	</div>
	<div class="modal-footer">
	<button class="btn" data-dismiss="modal" aria-hidden="true" >Anuluj</button>
	<button class="btn btn-primary" data-dismiss="modal" aria-hidden="true" onclick="SetChosen('projekt-grid','KomentarzUchwaly_CMT_UCH_ID','KomentarzUchwaly_Uchwala'); return false; "  >Ok</button>
	</div>
</div>

<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'komentarz-uchwaly-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class="alert alert-warning">Pola oznaczone <span class="required">*</span> są wymagane</div>

	<?php echo $form->errorSummary($model,null,null,array('class'=>'alert alert-error')); ?>
	
	<!--<div class='control-group<?php echo (CHtml::error($model,'CMT_DATE') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'CMT_DATE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'CMT_DATE'); ?>
		<?php echo $form->error($model,'CMT_DATE',array('class'=>'help-inline')); ?>
		</div>
	</div>-->

	<div class='control-group<?php echo (CHtml::error($model,'CMT_TYPE') == '' ? '' : ' error'); ?>' >
		<?php echo $form->labelEx($model,'CMT_TYPE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->dropDownList($model, 'CMT_TYPE', 
			array(KomentarzUchwalyType::Dziennikarski=>KomentarzUchwalyType::DziennikarskiLabel,
			KomentarzUchwalyType::Ekspercki=>KomentarzUchwalyType::EksperckiLabel,
			KomentarzUchwalyType::Radnego=>KomentarzUchwalyType::RadnegoLabel,
			KomentarzUchwalyType::Mieszkanca=>KomentarzUchwalyType::MieszkancaLabel), array( "onchange" => "DisplayAuthor(this)")
			); ?>
		<?php echo $form->error($model,'CMT_TYPE',array('class'=>'help-inline')); ?>
		</div>
	</div>
	
	<div class='control-group<?php echo (CHtml::error($model,'CMT_AUTHOR') == '' ? '' : ' error'); ?>' id="CMT_AUTHOR" 
		<? if ($model->CMT_TYPE == KomentarzUchwalyType::Radnego) echo "style='display: none;'" ?> >
		<?php echo $form->labelEx($model,'CMT_AUTHOR',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'CMT_AUTHOR',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'CMT_AUTHOR',array('class'=>'help-inline')); ?>
		</div>
	</div>
	
	<div class='control-group<?php echo (CHtml::error($model,'CMT_RDN_ID') == '' ? '' : ' error'); ?>' id="CMT_RDN_ID" 
	<? if ($model->CMT_TYPE != KomentarzUchwalyType::Radnego) echo "style='display: none;'" ?> >
		<?php echo $form->labelEx($model,'CMT_RDN_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->dropDownList($model, 'CMT_RDN_ID', CHtml::listData(
			Radny::model()->findAll(), 'RDN_ID', 'imieNazwisko')
			,array('prompt' => '')
			);?>
		<?php echo $form->error($model,'CMT_RDN_ID',array('class'=>'help-inline')); ?>
		</div>
	</div>
	
	<div class='control-group<?php echo (CHtml::error($model,'CMT_UCH_ID') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'CMT_UCH_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->hiddenField($model,'CMT_UCH_ID'); ?>
		<?php //echo $form->textField($model,'CMT_UCH_ID',array('size'=>60,'maxlength'=>8)); ?>
		<a href="#Modal_KomentarzUchwaly" role="button" class="btn" data-toggle="modal"><i class="icon-list-alt"></i> Wybierz uchwałę</a> 
		<a href="#Modal_KomentarzUchwalyProjekt" role="button" class="btn" data-toggle="modal"><i class="icon-list-alt"></i> Wybierz projekt</a> 
		<div id="KomentarzUchwaly_Uchwala" ><? echo $model->Uchwala->brief; ?></div>
		
		<?php echo $form->error($model,'CMT_UCH_ID',array('class'=>'help-inline')); ?>
		</div>
	</div>
	

	<div class='control-group<?php echo (CHtml::error($model,'CMT_CONTENT') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'CMT_CONTENT',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php $this->widget('application.extensions.tinymce.ETinyMce', array('model'=>$model, 'attribute'=>'CMT_CONTENT', 'id'=>'CMT_CONTENT', )); ?>
		<?php echo $form->error($model,'CMT_CONTENT',array('class'=>'help-inline')); ?>
		</div>
	</div>





	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.BootButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Zapisz' : 'Zapisz Zmiany',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
