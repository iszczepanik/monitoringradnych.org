<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('DZL_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->DZL_ID),array('view','id'=>$data->DZL_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DZL_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->DZL_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DZL_OKR_ID')); ?>:</b>
	<?php echo CHtml::encode($data->DZL_OKR_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DZL_CITIZEN_COUNT')); ?>:</b>
	<?php echo CHtml::encode($data->DZL_CITIZEN_COUNT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DZL_AREA')); ?>:</b>
	<?php echo CHtml::encode($data->DZL_AREA); ?>
	<br />


</div>