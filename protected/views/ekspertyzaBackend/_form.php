<div class="modal hide" id="Modal_Ekspertyza" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	<h3 id="myModalLabel">Wybierz uchwałę</h3>
	</div>
	<div class="modal-body">
	<?php $this->widget('bootstrap.widgets.BootGridView',array(
		'type'=>'striped bordered condensed',
		'id'=>'uchwala-grid',
		'dataProvider'=>$uchwala->search(),
		'filter'=>$uchwala,
		'columns'=>array(
			'UCH_ID',
			//'UCH_NUMBER',
			array(
				'name'=>'UCH_NAME',
				'value'=>'$data->brief',
			),
		),
	)); ?>
	</div>
	<div class="modal-footer">
	<button class="btn" data-dismiss="modal" aria-hidden="true" >Anuluj</button>
	<button class="btn btn-primary" data-dismiss="modal" aria-hidden="true" onclick="SetChosen('uchwala-grid','Expertyza_EXP_UCH_ID','Expertyza_Uchwala'); return false; "  >Ok</button>
	</div>
</div>

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
	
	<!--<div class='control-group<?php echo (CHtml::error($model,'EXP_UCH_ID') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'EXP_UCH_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->error($model,'EXP_UCH_ID',array('class'=>'help-inline')); ?>
		</div>
	</div>-->
	<div class='control-group<?php echo (CHtml::error($model,'EXP_UCH_ID') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'EXP_UCH_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->hiddenField($model,'EXP_UCH_ID'); ?>
		<?php //echo $form->textField($model,'EXP_UCH_ID',array('size'=>60,'maxlength'=>8)); ?>
		<a href="#Modal_Ekspertyza" role="button" class="btn" data-toggle="modal"><i class="icon-list-alt"></i> Wybierz uchwałę</a> 
		<div id="Expertyza_Uchwala" ><? echo $model->Uchwala->brief; ?></div>
		
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
