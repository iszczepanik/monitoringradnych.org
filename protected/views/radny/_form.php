<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'radny-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'RDN_FIRSTNAME',array('class'=>'span5','maxlength'=>64)); ?>

	<?php echo $form->textFieldRow($model,'RDN_LASTNAME',array('class'=>'span5','maxlength'=>64)); ?>

	<?php echo $form->textFieldRow($model,'RDN_EMAIL',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldRow($model,'RDN_PHONE',array('class'=>'span5','maxlength'=>32)); ?>

	<?php echo $form->textAreaRow($model,'RDN_DUTY',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'RDN_WEBSITE',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldRow($model,'RDN_PHOTO',array('class'=>'span5','maxlength'=>256)); ?>

	<?php echo $form->textAreaRow($model,'RDN_PROMISE',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textAreaRow($model,'RDN_INTERVIEW',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textAreaRow($model,'RDN_PROMISE_CMT',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textAreaRow($model,'RDN_INTERVIEW_CMT',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'RDN_TNR_ID',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'RDN_OKR_ID',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.BootButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
