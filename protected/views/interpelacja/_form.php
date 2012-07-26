<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'interpelacja-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class="alert alert-warning">Pola oznaczone <span class="required">*</span> są wymagane</div>

	<?php echo $form->errorSummary($model,null,null,array('class'=>'alert alert-error')); ?>
	
	<div class='control-group<?php echo (CHtml::error($model,'INT_RDN_ID') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'INT_RDN_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->dropDownList($model, 'INT_RDN_ID', Radny::model()->GetList());?>
		<?php echo $form->error($model,'INT_RDN_ID',array('class'=>'help-inline')); ?>
		</div>
	</div>
	
	<div class='control-group<?php echo (CHtml::error($model,'INT_NAME') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'INT_NAME',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'INT_NAME',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'INT_NAME',array('class'=>'help-inline')); ?>
		</div>
	</div>
	
	<div class='control-group<?php echo (CHtml::error($model,'INT_FILE') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'INT_FILE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'INT_FILE',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'INT_FILE',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'INT_ANSWER_FILE') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'INT_ANSWER_FILE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'INT_ANSWER_FILE',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'INT_ANSWER_FILE',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'INT_RDN_COMMENT') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'INT_RDN_COMMENT',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textArea($model,'INT_RDN_COMMENT',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'INT_RDN_COMMENT',array('class'=>'help-inline')); ?>
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
