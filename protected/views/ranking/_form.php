<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'ranking-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class="alert alert-warning">Pola oznaczone <span class="required">*</span> są wymagane</div>

	<?php echo $form->errorSummary($model,null,null,array('class'=>'alert alert-error')); ?>
	
	<div class='control-group<?php echo (CHtml::error($model,'RNK_RDN_ID') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'RNK_RDN_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'RNK_RDN_ID'); ?>
		<?php echo $form->error($model,'RNK_RDN_ID',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'RNK_KMS') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'RNK_KMS',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'RNK_KMS'); ?>
		<?php echo $form->error($model,'RNK_KMS',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'RNK_RADY') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'RNK_RADY',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'RNK_RADY'); ?>
		<?php echo $form->error($model,'RNK_RADY',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'RNK_DUTY') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'RNK_DUTY',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'RNK_DUTY'); ?>
		<?php echo $form->error($model,'RNK_DUTY',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'RNK_MAIL') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'RNK_MAIL',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'RNK_MAIL'); ?>
		<?php echo $form->error($model,'RNK_MAIL',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'RNK_INTERNET') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'RNK_INTERNET',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'RNK_INTERNET'); ?>
		<?php echo $form->error($model,'RNK_INTERNET',array('class'=>'help-inline')); ?>
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
