<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'htmlOptions' => array('style' => 'margin-top: 15px;'),
	'method'=>'get',
)); ?>

	<div class="control-group">
		<?php echo $form->label($model,'CLB_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'CLB_ID'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'CLB_NAME',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'CLB_NAME',array('size'=>60,'maxlength'=>128)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'CLB_LOGO',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'CLB_LOGO',array('size'=>60,'maxlength'=>128)); ?>
		</div>
	</div>

	<div class="form-actions">
		<?php echo CHtml::submitButton('Szukaj',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>
