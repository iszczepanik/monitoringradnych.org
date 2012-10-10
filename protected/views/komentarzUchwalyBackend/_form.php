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
			KomentarzUchwalyType::Radnego=>KomentarzUchwalyType::RadnegoLabel), array( "onchange" => "DisplayAuthor(this)")
			); ?>
		<?php echo $form->error($model,'CMT_TYPE',array('class'=>'help-inline')); ?>
		</div>
	</div>
	
	<div class='control-group<?php echo (CHtml::error($model,'CMT_AUTHOR') == '' ? '' : ' error'); ?>' id="CMT_AUTHOR" 
		<? if ($model->CMT_TYPE == null || !($model->CMT_TYPE == KomentarzUchwalyType::Dziennikarski || $model->CMT_TYPE == KomentarzUchwalyType::Ekspercki)) echo "style='display: none;'" ?> >
		<?php echo $form->labelEx($model,'CMT_AUTHOR',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'CMT_AUTHOR',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'CMT_AUTHOR',array('class'=>'help-inline')); ?>
		</div>
	</div>
	
	<div class='control-group<?php echo (CHtml::error($model,'CMT_RDN_ID') == '' ? '' : ' error'); ?>' id="CMT_RDN_ID" 
	<? if ($model->CMT_TYPE != null && $model->CMT_TYPE != KomentarzUchwalyType::Radnego) echo "style='display: none;'" ?> >
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
		<?php echo $form->dropDownList($model, 'CMT_UCH_ID', CHtml::listData(
			Uchwala::model()->findAll('UCH_TYPE = '.UchwalaType::Uchwala.' order by UCH_NUMBER'), 'UCH_ID', 'UCH_NUMBER')
			//array('prompt' => '')
			);?>
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
