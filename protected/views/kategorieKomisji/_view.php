<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('KMS_IN_CAT_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->KMS_IN_CAT_ID),array('view','id'=>$data->KMS_IN_CAT_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KMS_IN_CAT_KMS_ID')); ?>:</b>
	<?php echo CHtml::encode($data->KMS_IN_CAT_KMS_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KMS_IN_CAT_CAT_ID')); ?>:</b>
	<?php echo CHtml::encode($data->KMS_IN_CAT_CAT_ID); ?>
	<br />


</div>