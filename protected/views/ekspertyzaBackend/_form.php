<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'expertyza-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class="alert alert-warning">Pola oznaczone <span class="required">*</span> są wymagane</div>

	<?php echo $form->errorSummary($model,null,null,array('class'=>'alert alert-error')); ?>
	
	<div class='control-group<?php echo (CHtml::error($model,'EXP_AUTHOR') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'EXP_AUTHOR',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'EXP_AUTHOR',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'EXP_AUTHOR',array('class'=>'help-inline')); ?>
		</div>
	</div>
	
	<div class='control-group<?php echo (CHtml::error($model,'EXP_UCH_ID') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'EXP_UCH_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->dropDownList($model, 'EXP_UCH_ID', CHtml::listData(
			Uchwala::model()->findAll('UCH_TYPE = '.UchwalaType::Uchwala.' order by UCH_NUMBER'), 'UCH_ID', 'UCH_NUMBER')
			//array('prompt' => '')
			);?>
		<?php echo $form->error($model,'EXP_UCH_ID',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<!--<div class='control-group<?php echo (CHtml::error($model,'EXP_DATE') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'EXP_DATE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'EXP_DATE'); ?>
		<?php echo $form->error($model,'EXP_DATE',array('class'=>'help-inline')); ?>
		</div>
	</div>-->

	<div class='control-group<?php echo (CHtml::error($model,'EXP_CONTENT') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'EXP_CONTENT',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php $this->widget('application.extensions.tinymce.ETinyMce', array('model'=>$model, 'attribute'=>'EXP_CONTENT', 'id'=>'EXP_CONTENT', )); ?>
		<?php echo $form->error($model,'EXP_CONTENT',array('class'=>'help-inline')); ?>
		</div>
	</div>



	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.BootButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Zapisz' : 'Zapisz Zmiany',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
