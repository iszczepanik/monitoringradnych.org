<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'htmlOptions' => array('style' => 'margin-top: 15px;'),
	'method'=>'get',
)); ?>

	<div class="control-group">
		<?php echo $form->label($model,'CMT_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'CMT_ID'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'CMT_DATE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'CMT_DATE'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'CMT_AUTHOR',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'CMT_AUTHOR',array('size'=>60,'maxlength'=>256)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'CMT_TYPE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'CMT_TYPE'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'CMT_CONTENT',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textArea($model,'CMT_CONTENT',array('rows'=>6, 'cols'=>50)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'CMT_RDN_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'CMT_RDN_ID'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'CMT_UCH_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'CMT_UCH_ID'); ?>
		</div>
	</div>

	<div class="form-actions">
		<?php echo CHtml::submitButton('Szukaj',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>
