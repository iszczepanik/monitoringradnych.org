<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'htmlOptions' => array('style' => 'margin-top: 15px;'),
	'method'=>'get',
)); ?>

	<div class="control-group">
		<?php echo $form->label($model,'TNR_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'TNR_ID'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'TNR_NAME',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'TNR_NAME',array('size'=>60,'maxlength'=>64)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'TNR_BEGINS',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'TNR_BEGINS'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'TNR_ENDS',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'TNR_ENDS'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'TNR_PRESENT',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'TNR_PRESENT'); ?>
		</div>
	</div>

	<div class="form-actions">
		<?php echo CHtml::submitButton('Szukaj',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>
