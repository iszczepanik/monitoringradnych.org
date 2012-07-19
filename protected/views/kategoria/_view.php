<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CAT_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CAT_ID),array('view','id'=>$data->CAT_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CAT_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->CAT_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CAT_DESC')); ?>:</b>
	<?php echo CHtml::encode($data->CAT_DESC); ?>
	<br />


</div>