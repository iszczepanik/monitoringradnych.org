<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('KMS_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->KMS_ID),array('view','id'=>$data->KMS_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KMS_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->KMS_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KMS_DESC')); ?>:</b>
	<?php echo CHtml::encode($data->KMS_DESC); ?>
	<br />


</div>