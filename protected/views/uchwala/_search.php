<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'htmlOptions' => array('style' => 'margin-top: 15px;'),
	'method'=>'get',
)); ?>

	<div class="control-group">
		<?php echo $form->label($model,'UCH_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'UCH_ID'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'UCH_FILE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'UCH_FILE',array('size'=>60,'maxlength'=>256)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'UCH_NAME',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'UCH_NAME',array('size'=>60,'maxlength'=>512)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'UCH_KMS_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->dropDownList($model, 'UCH_KMS_ID', CHtml::listData(
			Komisja::model()->findAll(), 'KMS_ID', 'KMS_NAME'),
			array('prompt' => '')
			);?>
		</div>
	</div>

	<div class="form-actions">
		<?php echo CHtml::submitButton('Szukaj',array('class'=>'btn btn-primary'));
		echo CHtml::link('Zamknij','#',array('class'=>'btn search-button')); ?>
	</div>

<?php $this->endWidget(); ?>
