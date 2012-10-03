<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'news-category-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class="alert alert-warning">Pola oznaczone <span class="required">*</span> są wymagane</div>

	<?php echo $form->errorSummary($model,null,null,array('class'=>'alert alert-error')); ?>
	
	<div class='control-group<?php echo (CHtml::error($model,'NWS_CAT_NAME') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'NWS_CAT_NAME',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'NWS_CAT_NAME',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'NWS_CAT_NAME',array('class'=>'help-inline')); ?>
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
