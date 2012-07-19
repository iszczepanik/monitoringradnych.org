<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('UCH_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->UCH_ID),array('view','id'=>$data->UCH_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UCH_FILE')); ?>:</b>
	<?php echo CHtml::encode($data->UCH_FILE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UCH_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->UCH_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UCH_CAT_ID')); ?>:</b>
	<?php echo CHtml::encode($data->UCH_CAT_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UCH_KMS_ID')); ?>:</b>
	<?php echo CHtml::encode($data->UCH_KMS_ID); ?>
	<br />


</div>