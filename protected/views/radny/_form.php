<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'radny-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class="alert alert-warning">Pola oznaczone <span class="required">*</span> są wymagane</div>

	<?php echo $form->errorSummary($model,null,null,array('class'=>'alert alert-error')); ?>
	
	<div class='control-group<?php echo (CHtml::error($model,'RDN_FIRSTNAME') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'RDN_FIRSTNAME',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'RDN_FIRSTNAME',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'RDN_FIRSTNAME',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'RDN_LASTNAME') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'RDN_LASTNAME',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'RDN_LASTNAME',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'RDN_LASTNAME',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'RDN_EMAIL') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'RDN_EMAIL',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'RDN_EMAIL',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'RDN_EMAIL',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'RDN_PHONE') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'RDN_PHONE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'RDN_PHONE',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'RDN_PHONE',array('class'=>'help-inline')); ?>
		</div>
	</div>
	
	<div class='control-group<?php echo (CHtml::error($model,'RDN_INFO_RNK') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'RDN_INFO_RNK',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'RDN_INFO_RNK',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'RDN_INFO_RNK',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group' >
    <?php echo $form->checkBoxListRow($model, 'dzielniceDyzurowIDs', 
            CHtml::listData(
                Dzielnica::model()->findAll(), 
                'DZL_ID', 
                'DZL_NAME'
            )); ?>
    </div>
	
	<div class='control-group<?php echo (CHtml::error($model,'RDN_DUTY') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'RDN_DUTY',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php $this->widget('application.extensions.tinymce.ETinyMce', array('model'=>$model, 'attribute'=>'RDN_DUTY', 'id'=>'RDN_DUTY', )); ?>
		<?php echo $form->error($model,'RDN_DUTY',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'RDN_WEBSITE') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'RDN_WEBSITE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'RDN_WEBSITE',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'RDN_WEBSITE',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'RDN_PHOTO') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'RDN_PHOTO',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'RDN_PHOTO',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'RDN_PHOTO',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'RDN_PROMISE') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'RDN_PROMISE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php //echo $form->textArea($model,'RDN_PROMISE',array('rows'=>6, 'cols'=>50)); ?>
		<?php //$this->widget('application.extensions.tinymce.ETinyMce', array('name'=>'RDN_PROMISE', 'value'=>$model->RDN_PROMISE,'model'=>$model, 'attribute'=>'RDN_PROMISE', 'useSwitch' => false, 'editorTemplate'=>'full')); ?>
		<?php //$this->widget('application.extensions.tinymce.ETinyMce', array('editorTemplate'=>'full', 'name'=>'Radny[RDN_PROMISE]', 'id'=>'kkkkkk', 'useSwitch' => false, )); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', array('model'=>$model, 'attribute'=>'RDN_PROMISE', 'id'=>'RDN_PROMISE', )); ?>
		<?php echo $form->error($model,'RDN_PROMISE',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'RDN_INTERVIEW') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'RDN_INTERVIEW',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php //echo $form->textArea($model,'RDN_INTERVIEW',array('rows'=>6, 'cols'=>50)); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', array('model'=>$model, 'attribute'=>'RDN_INTERVIEW', 'id'=>'RDN_INTERVIEW', )); ?>
		<?php echo $form->error($model,'RDN_INTERVIEW',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'RDN_PROMISE_CMT') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'RDN_PROMISE_CMT',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php $this->widget('application.extensions.tinymce.ETinyMce', array('model'=>$model, 'attribute'=>'RDN_PROMISE_CMT', 'id'=>'RDN_PROMISE_CMT', )); ?>
		<?php echo $form->error($model,'RDN_PROMISE_CMT',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'RDN_INTERVIEW_CMT') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'RDN_INTERVIEW_CMT',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php $this->widget('application.extensions.tinymce.ETinyMce', array('model'=>$model, 'attribute'=>'RDN_INTERVIEW_CMT', 'id'=>'RDN_INTERVIEW_CMT', )); ?>
		<?php echo $form->error($model,'RDN_INTERVIEW_CMT',array('class'=>'help-inline')); ?>
		</div>
	</div>
	
	<div class='control-group<?php echo (CHtml::error($model,'RDN_STATEMENT_FILE') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'RDN_STATEMENT_FILE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'RDN_STATEMENT_FILE',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'RDN_STATEMENT_FILE',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'RDN_TNR_ID') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'RDN_TNR_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->dropDownList($model, 'RDN_TNR_ID', CHtml::listData(
			Tenure::model()->findAll(), 'TNR_ID', 'TNR_NAME')
			//array('prompt' => '')
			);?>
		<?php echo $form->error($model,'RDN_TNR_ID',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'RDN_OKR_ID') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'RDN_OKR_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->dropDownList($model, 'RDN_OKR_ID', CHtml::listData(
			Okreg::model()->findAll(), 'OKR_ID', 'OKR_NAME')
			//array('prompt' => '')
			);?>
		<?php echo $form->error($model,'RDN_OKR_ID',array('class'=>'help-inline')); ?>
		</div>
	</div>
	
	<div class='control-group<?php echo (CHtml::error($model,'RDN_CLB_ID') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'RDN_CLB_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->dropDownList($model, 'RDN_CLB_ID', CHtml::listData(
			Club::model()->findAll(), 'CLB_ID', 'CLB_NAME')
			//array('prompt' => '')
			);?>
		<?php echo $form->error($model,'RDN_CLB_ID',array('class'=>'help-inline')); ?>
		</div>
	</div>
	
	<div class='control-group' >
    <?php echo $form->checkBoxListRow($model, 'komisjeRadnychIDs', 
            CHtml::listData(
                Komisja::model()->findAll(), 
                'KMS_ID', 
                'KMS_NAME'
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
