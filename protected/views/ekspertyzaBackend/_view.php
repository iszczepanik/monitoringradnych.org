<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('EXP_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->EXP_ID),array('view','id'=>$data->EXP_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EXP_AUTHOR')); ?>:</b>
	<?php echo CHtml::encode($data->EXP_AUTHOR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EXP_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->EXP_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EXP_CONTENT')); ?>:</b>
	<?php echo CHtml::encode($data->EXP_CONTENT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EXP_UCH_ID')); ?>:</b>
	<?php echo CHtml::encode($data->EXP_UCH_ID); ?>
	<br />


</div>