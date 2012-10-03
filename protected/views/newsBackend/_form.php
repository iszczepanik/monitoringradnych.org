<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'news-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class="alert alert-warning">Pola oznaczone <span class="required">*</span> są wymagane</div>

	<?php echo $form->errorSummary($model,null,null,array('class'=>'alert alert-error')); ?>
	
	<!--<div class='control-group<?php echo (CHtml::error($model,'NWS_DATE') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'NWS_DATE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'NWS_DATE'); ?>
		<?php echo $form->error($model,'NWS_DATE',array('class'=>'help-inline')); ?>
		</div>
	</div>-->

	<div class='control-group<?php echo (CHtml::error($model,'NWS_TITLE') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'NWS_TITLE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'NWS_TITLE',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'NWS_TITLE',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'NWS_CONTENT') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'NWS_CONTENT',array('class'=>'control-label')); ?>
		
		<div class="controls">
		<?php //echo $form->textArea($model,'NWS_CONTENT',array('rows'=>6, 'cols'=>50)); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', array('model'=>$model, 'attribute'=>'NWS_CONTENT', 'id'=>'NWS_CONTENT', )); ?>
		<?php echo $form->error($model,'NWS_CONTENT',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'NWS_NWS_CAT_ID') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'NWS_NWS_CAT_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php //echo $form->textField($model,'NWS_NWS_CAT_ID'); ?>
		<?php echo $form->dropDownList($model, 'NWS_NWS_CAT_ID', CHtml::listData(
			NewsCategory::model()->findAll(), 'NWS_CAT_ID', 'NWS_CAT_NAME')
			//array('prompt' => '')
			);?>
		<?php echo $form->error($model,'NWS_NWS_CAT_ID',array('class'=>'help-inline')); ?>
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
