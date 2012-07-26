<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'htmlOptions' => array('style' => 'margin-top: 15px;'),
	'method'=>'get',
)); ?>

	<div class="control-group">
		<?php echo $form->label($model,'RNK_RDN_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'RNK_RDN_ID'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'RNK_KMS',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'RNK_KMS'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'RNK_RADY',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'RNK_RADY'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'RNK_DUTY',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'RNK_DUTY'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'RNK_MAIL',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'RNK_MAIL'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'RNK_INTERNET',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'RNK_INTERNET'); ?>
		</div>
	</div>

	<div class="form-actions">
		<?php echo CHtml::submitButton('Szukaj',array('class'=>'btn btn-primary')); 
		echo CHtml::link('Zamknij','#',array('class'=>'btn search-button'));?>
	</div>

<?php $this->endWidget(); ?>
