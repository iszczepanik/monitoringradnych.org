<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'projekt-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class="alert alert-warning">Pola oznaczone <span class="required">*</span> są wymagane</div>

	<?php echo $form->errorSummary($model,null,null,array('class'=>'alert alert-error')); ?>
	
	<div class='control-group<?php echo (CHtml::error($model,'UCH_NAME') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'UCH_NAME',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'UCH_NAME',array('size'=>60,'maxlength'=>512,'class'=>'input-xxlarge')); ?>
		<?php echo $form->error($model,'UCH_NAME',array('class'=>'help-inline')); ?>
		</div>
	</div>
	
	<div class='control-group<?php echo (CHtml::error($model,'UCH_FILE') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'UCH_FILE',array('class'=>'control-label')); ?>
		<div class="controls">
		<div class="alert alert-info">Plik umieść na serwerze w folderze <strong>materialy/projekty</strong>. W tym polu wpisz nazwę pliku.
		</div>
		<?php echo $form->textField($model,'UCH_FILE',array('size'=>60,'maxlength'=>256,'class'=>'input-xxlarge')); ?>
		<?php echo $form->error($model,'UCH_FILE',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<?php echo $form->hiddenField($model,'UCH_TYPE',array('value'=>'2')); ?>

	<div class='control-group<?php echo (CHtml::error($model,'UCH_INVITATION') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'UCH_INVITATION',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php //echo $form->textArea($model,'UCH_INVITATION',array('rows'=>6, 'cols'=>50)); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', array('model'=>$model, 'attribute'=>'UCH_INVITATION', 'id'=>'UCH_INVITATION', )); ?>
		<?php echo $form->error($model,'UCH_INVITATION',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'UCH_KMS_ID') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'UCH_KMS_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->dropDownList($model, 'UCH_KMS_ID', CHtml::listData(
			Komisja::model()->findAll(), 'KMS_ID', 'KMS_NAME')
			//array('prompt' => '')
			);?>
		<?php echo $form->error($model,'UCH_KMS_ID',array('class'=>'help-inline')); ?>
		</div>
	</div>
	
	<div class='control-group' >
    <?php echo $form->checkBoxListRow($model, 'dzielniceUchwalIDs', 
            CHtml::listData(
                Dzielnica::model()->findAll(), 
                'DZL_ID', 
                'DZL_NAME'
            )); ?>
    </div>
    
    <div class='control-group' >
    <?php echo $form->checkBoxListRow($model, 'kategorieUchwalIDs', 
            CHtml::listData(
                Kategoria::model()->findAll(), 
                'CAT_ID', 
                'CAT_NAME'
            )); ?>
    </div>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.BootButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Zapisz' : 'Zapisz Zmiany',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
