<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'radny-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model,null,null,array('class'=>'alert alert-error')); ?>

	<?php echo $form->hiddenField($model,'RDN_ID'); ?>
	
	<div class='control-group<?php echo (CHtml::error($model,'RDN_PROMISE_CMT') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'RDN_PROMISE_CMT',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php $this->widget('application.extensions.tinymce.ETinyMce', array('model'=>$model, 'attribute'=>'RDN_PROMISE_CMT', 'id'=>'RDN_PROMISE_CMT', )); ?>
		<?php echo $form->error($model,'RDN_PROMISE_CMT',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'RDN_INTERVIEW_CMT') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'RDN_INTERVIEW_CMT',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php $this->widget('application.extensions.tinymce.ETinyMce', array('model'=>$model, 'attribute'=>'RDN_INTERVIEW_CMT', 'id'=>'RDN_INTERVIEW_CMT', )); ?>
		<?php echo $form->error($model,'RDN_INTERVIEW_CMT',array('class'=>'help-inline')); ?>
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
