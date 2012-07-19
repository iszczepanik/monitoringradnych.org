<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'kategorie-komisji-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class="alert alert-warning">Pola oznaczone <span class="required">*</span> są wymagane</div>

	<?php echo $form->errorSummary($model,null,null,array('class'=>'alert alert-error')); ?>
	
	<div class='control-group<?php echo (CHtml::error($model,'KMS_IN_CAT_KMS_ID') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'KMS_IN_CAT_KMS_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'KMS_IN_CAT_KMS_ID'); ?>
		<?php echo $form->error($model,'KMS_IN_CAT_KMS_ID',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'KMS_IN_CAT_CAT_ID') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'KMS_IN_CAT_CAT_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'KMS_IN_CAT_CAT_ID'); ?>
		<?php echo $form->error($model,'KMS_IN_CAT_CAT_ID',array('class'=>'help-inline')); ?>
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
