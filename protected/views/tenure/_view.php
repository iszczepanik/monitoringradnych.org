<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('TNR_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->TNR_ID),array('view','id'=>$data->TNR_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TNR_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->TNR_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TNR_BEGINS')); ?>:</b>
	<?php echo CHtml::encode($data->TNR_BEGINS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TNR_ENDS')); ?>:</b>
	<?php echo CHtml::encode($data->TNR_ENDS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TNR_PRESENT')); ?>:</b>
	<?php echo CHtml::encode($data->TNR_PRESENT); ?>
	<br />


</div>