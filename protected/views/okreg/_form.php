<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'okreg-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class="alert alert-warning">Pola oznaczone <span class="required">*</span> są wymagane</div>

	<?php echo $form->errorSummary($model,null,null,array('class'=>'alert alert-error')); ?>
	
	<div class='control-group<?php echo (CHtml::error($model,'OKR_NAME') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'OKR_NAME',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'OKR_NAME',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'OKR_NAME',array('class'=>'help-inline')); ?>
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
