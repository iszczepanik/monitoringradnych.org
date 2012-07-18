<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'USR_NAME'); ?>
		<?php echo $form->textField($model,'USR_NAME',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'USR_NAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USR_PASS'); ?>
		<?php echo $form->textField($model,'USR_PASS',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'USR_PASS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USR_FIRSTNAME'); ?>
		<?php echo $form->textField($model,'USR_FIRSTNAME',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'USR_FIRSTNAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USR_LASTNAME'); ?>
		<?php echo $form->textField($model,'USR_LASTNAME',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'USR_LASTNAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USR_EMAIL'); ?>
		<?php echo $form->textField($model,'USR_EMAIL',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'USR_EMAIL'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->