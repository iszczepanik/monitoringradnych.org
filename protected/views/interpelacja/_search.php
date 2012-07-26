<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'htmlOptions' => array('style' => 'margin-top: 15px;'),
	'method'=>'get',
)); ?>

	<div class="control-group">
		<?php echo $form->label($model,'INT_NAME',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'INT_NAME',array('size'=>60,'maxlength'=>512)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'INT_FILE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'INT_FILE',array('size'=>60,'maxlength'=>256)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'INT_ANSWER_FILE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'INT_ANSWER_FILE',array('size'=>60,'maxlength'=>256)); ?>
		</div>
	</div>

	<div class='control-group'>
		<?php echo $form->label($model,'INT_RDN_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->dropDownList($model, 'INT_RDN_ID', Radny::model()->GetList());?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'INT_RDN_COMMENT',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textArea($model,'INT_RDN_COMMENT',array('rows'=>6, 'cols'=>50)); ?>
		</div>
	</div>

	<div class="form-actions">
		<?php echo CHtml::submitButton('Szukaj',array('class'=>'btn btn-primary')); 
		echo CHtml::link('Zamknij','#',array('class'=>'btn search-button'));?>
	</div>

<?php $this->endWidget(); ?>
