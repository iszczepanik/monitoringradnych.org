<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'htmlOptions' => array('style' => 'margin-top: 15px;'),
	'method'=>'get',
)); ?>

	<div class="control-group">
		<?php echo $form->label($model,'RDN_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'RDN_ID'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'RDN_FIRSTNAME',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'RDN_FIRSTNAME',array('size'=>60,'maxlength'=>64)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'RDN_LASTNAME',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'RDN_LASTNAME',array('size'=>60,'maxlength'=>64)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'RDN_EMAIL',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'RDN_EMAIL',array('size'=>60,'maxlength'=>128)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'RDN_PHONE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'RDN_PHONE',array('size'=>32,'maxlength'=>32)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'RDN_DUTY',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textArea($model,'RDN_DUTY',array('rows'=>6, 'cols'=>50)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'RDN_WEBSITE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'RDN_WEBSITE',array('size'=>60,'maxlength'=>128)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'RDN_PROMISE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textArea($model,'RDN_PROMISE',array('rows'=>6, 'cols'=>50)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'RDN_INTERVIEW',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textArea($model,'RDN_INTERVIEW',array('rows'=>6, 'cols'=>50)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'RDN_PROMISE_CMT',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textArea($model,'RDN_PROMISE_CMT',array('rows'=>6, 'cols'=>50)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'RDN_INTERVIEW_CMT',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textArea($model,'RDN_INTERVIEW_CMT',array('rows'=>6, 'cols'=>50)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'RDN_TNR_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->dropDownList($model, 'RDN_TNR_ID', CHtml::listData(
			Tenure::model()->findAll(), 'TNR_ID', 'TNR_NAME'),
			array('prompt' => '')
			);?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'RDN_OKR_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->dropDownList($model, 'RDN_OKR_ID', CHtml::listData(
			Okreg::model()->findAll(), 'OKR_ID', 'OKR_NAME'),
			array('prompt' => '')
			);?>
		</div>
	</div>

	<div class="form-actions">
		<?php echo CHtml::submitButton('Szukaj',array('class'=>'btn btn-primary'));
		echo CHtml::link('Zamknij','#',array('class'=>'btn search-button')); ?>
	</div>

<?php $this->endWidget(); ?>
