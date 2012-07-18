<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'dzielnica-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class="alert alert-warning">Pola oznaczone <span class="required">*</span> są wymagane</div>

	<?php echo $form->errorSummary($model,null,null,array('class'=>'alert alert-error')); ?>
	
	<div class='control-group<?php echo (CHtml::error($model,'DZL_NAME') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'DZL_NAME',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'DZL_NAME',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'DZL_NAME',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'DZL_OKR_ID') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'DZL_OKR_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->dropDownList($model, 'DZL_OKR_ID', CHtml::listData(
			Okreg::model()->findAll(), 'OKR_ID', 'OKR_NAME')
			//array('prompt' => '')
			);?>
		
		<?php echo $form->error($model,'DZL_OKR_ID',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'DZL_CITIZEN_COUNT') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'DZL_CITIZEN_COUNT',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'DZL_CITIZEN_COUNT'); ?>
		<?php echo $form->error($model,'DZL_CITIZEN_COUNT',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'DZL_AREA') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'DZL_AREA',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'DZL_AREA'); ?>
		<?php echo $form->error($model,'DZL_AREA',array('class'=>'help-inline')); ?>
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
