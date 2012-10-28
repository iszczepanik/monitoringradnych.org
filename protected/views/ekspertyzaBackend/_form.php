<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'ekspertyza-form',
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
	
	<div class='control-group<?php echo (CHtml::error($model,'EXP_NAME') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'EXP_NAME',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'EXP_NAME',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'EXP_NAME',array('class'=>'help-inline')); ?>
		
		</div>
		
	</div>
	
	<div class='control-group<?php echo (CHtml::error($model,'EXP_FILE') == '' ? '' : ' error'); ?>'>
		
		<?php echo $form->labelEx($model,'EXP_FILE',array('class'=>'control-label')); ?>
		
		<div class="controls">
		<div class="alert alert-info">Plik umieść na serwerze w folderze <strong>materialy/ekspertyzy</strong>. W tym polu wpisz nazwę pliku. Nazwy plików (jeśli więcej niż jeden) rozdziel znakiem średnika, na przykład: <br />
		ekspertyza_1.pdf;ekspertyza_2.pdf;ekspertyza_3.pdf
		</div>
		<?php echo $form->textField($model,'EXP_FILE',array('size'=>60,'maxlength'=>512,'class'=>'input-xxlarge')); ?>
		<?php echo $form->error($model,'EXP_FILE',array('class'=>'help-inline')); ?>
		
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
