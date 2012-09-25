<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CLB_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CLB_ID),array('view','id'=>$data->CLB_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CLB_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->CLB_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CLB_LOGO')); ?>:</b>
	<?php echo CHtml::encode($data->CLB_LOGO); ?>
	<br />


</div>