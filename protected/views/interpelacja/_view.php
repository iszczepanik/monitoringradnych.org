<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('INT_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->INT_ID),array('view','id'=>$data->INT_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INT_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->INT_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INT_FILE')); ?>:</b>
	<?php echo CHtml::encode($data->INT_FILE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INT_ANSWER_FILE')); ?>:</b>
	<?php echo CHtml::encode($data->INT_ANSWER_FILE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INT_RDN_ID')); ?>:</b>
	<?php echo CHtml::encode($data->INT_RDN_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INT_RDN_COMMENT')); ?>:</b>
	<?php echo CHtml::encode($data->INT_RDN_COMMENT); ?>
	<br />


</div>