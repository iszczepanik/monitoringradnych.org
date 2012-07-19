<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'htmlOptions' => array('style' => 'margin-top: 15px;'),
	'method'=>'get',
)); ?>

	<div class="control-group">
		<?php echo $form->label($model,'KMS_IN_CAT_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'KMS_IN_CAT_ID'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'KMS_IN_CAT_KMS_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'KMS_IN_CAT_KMS_ID'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'KMS_IN_CAT_CAT_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'KMS_IN_CAT_CAT_ID'); ?>
		</div>
	</div>

	<div class="form-actions">
		<?php echo CHtml::submitButton('Szukaj',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>
