<?php
$this->pageTitle=Yii::app()->name . ' - Login';
?>

<h1>Login</h1>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
<div style="height: 70px;">
<?php echo $form->error($model,'username'); ?>
<?php echo $form->error($model,'password'); ?>
<?php echo $form->error($model,'rememberMe'); ?>
</div>
<div class="row" style="text-align: center;">

		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		

		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		
		
		<?php echo CHtml::submitButton('Login'); ?>

		<br /><br />
				<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		
</div>






<?php $this->endWidget(); ?>
</div><!-- form -->
