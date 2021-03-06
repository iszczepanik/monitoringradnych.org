<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'htmlOptions' => array('style' => 'margin-top: 15px;'),
	'method'=>'get',
)); ?>

	<div class="control-group">
		<?php echo $form->label($model,'OKR_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'OKR_ID'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'OKR_NAME',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'OKR_NAME',array('size'=>60,'maxlength'=>128)); ?>
		</div>
	</div>

	<div class="form-actions">
		<?php echo CHtml::submitButton('Szukaj',array('class'=>'btn btn-primary')); 
		echo CHtml::link('Zamknij','#',array('class'=>'btn search-button'));?>
	</div>

<?php $this->endWidget(); ?>
