<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'htmlOptions' => array('style' => 'margin-top: 15px;'),
	'method'=>'get',
)); ?>

	<div class="control-group">
		<?php echo $form->label($model,'DZL_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'DZL_ID'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'DZL_NAME',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'DZL_NAME',array('size'=>60,'maxlength'=>128)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'DZL_OKR_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->dropDownList($model, 'DZL_OKR_ID', CHtml::listData(
			Okreg::model()->findAll(), 'OKR_ID', 'OKR_NAME'),
			array('prompt' => '')
			);?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'DZL_CITIZEN_COUNT',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'DZL_CITIZEN_COUNT'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'DZL_AREA',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'DZL_AREA'); ?>
		</div>
	</div>

	<div class="form-actions">
		<?php echo CHtml::submitButton('Szukaj',array('class'=>'btn btn-primary')); 
		echo CHtml::link('Zamknij','#',array('class'=>'btn search-button'));
		?>
	</div>

<?php $this->endWidget(); ?>
