<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'htmlOptions' => array('style' => 'margin-top: 15px;'),
	'method'=>'get',
)); ?>

	<div class="control-group">
		<?php echo $form->label($model,'EXP_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'EXP_ID'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'EXP_AUTHOR',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'EXP_AUTHOR',array('size'=>60,'maxlength'=>512)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'EXP_DATE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'EXP_DATE'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'EXP_CONTENT',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textArea($model,'EXP_CONTENT',array('rows'=>6, 'cols'=>50)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'EXP_UCH_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'EXP_UCH_ID'); ?>
		</div>
	</div>

	<div class="form-actions">
		<?php echo CHtml::submitButton('Szukaj',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>
