<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'tenure-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class="alert alert-warning">Pola oznaczone <span class="required">*</span> są wymagane</div>

	<?php echo $form->errorSummary($model,null,null,array('class'=>'alert alert-error')); ?>
	
	<div class='control-group<?php echo (CHtml::error($model,'TNR_NAME') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'TNR_NAME',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'TNR_NAME',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'TNR_NAME',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'TNR_BEGINS') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'TNR_BEGINS',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'TNR_BEGINS'); ?>
		<?php echo $form->error($model,'TNR_BEGINS',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'TNR_ENDS') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'TNR_ENDS',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'TNR_ENDS'); ?>
		<?php echo $form->error($model,'TNR_ENDS',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'TNR_PRESENT') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'TNR_PRESENT',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'TNR_PRESENT'); ?>
		<?php echo $form->error($model,'TNR_PRESENT',array('class'=>'help-inline')); ?>
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
