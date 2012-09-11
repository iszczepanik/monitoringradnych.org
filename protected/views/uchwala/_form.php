<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'uchwala-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class="alert alert-warning">Pola oznaczone <span class="required">*</span> są wymagane</div>

	<?php echo $form->errorSummary($model,null,null,array('class'=>'alert alert-error')); ?>
	
	<div class='control-group<?php echo (CHtml::error($model,'UCH_FILE') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'UCH_FILE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'UCH_FILE',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'UCH_FILE',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'UCH_NAME') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'UCH_NAME',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'UCH_NAME',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'UCH_NAME',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<?php echo $form->hiddenField($model,'UCH_TYPE',array('value'=>'1')); ?>

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

	<div class='control-group' >
		<label class="control-label" for="Vote">Głosowanie</label>
		<div class="controls">
			<table class="glosowanie">
			<?php
			$Radni = Radny::model()->findAll();
			foreach($Radni as $i=>$item)
			{
				$vote = isset($votes) ? $votes[$item->RDN_ID] : 2;
				?>
				<tr><td>
				<?
				echo $item->ImieNazwisko();
				?>
				<input type="hidden" name="Vote<? echo $i;?>RDN_ID" value="<? echo $item->RDN_ID; ?>" />
				</td>
				<td><input type="radio" name="Vote<? echo $i;?>" value="-1" <? if ($vote == -1) echo "checked=checked"; ?> /> przeciw</td>
				<td><input type="radio" name="Vote<? echo $i;?>" value="0" <? if ($vote == 0) echo "checked=checked"; ?> /> wstrzymał się</td>
				<td><input type="radio" name="Vote<? echo $i;?>" value="1" <? if ($vote == 1) echo "checked=checked"; ?> /> za</td>
				<td><input type="radio" name="Vote<? echo $i;?>" value="2" <? if ($vote == 2) echo "checked=checked"; ?> /> nieobecny na głosowaniu</td>
				</tr>
				<?
			}
			?>
			</table>
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
