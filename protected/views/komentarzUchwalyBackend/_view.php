<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CMT_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CMT_ID),array('view','id'=>$data->CMT_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CMT_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->CMT_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CMT_AUTHOR')); ?>:</b>
	<?php echo CHtml::encode($data->CMT_AUTHOR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CMT_TYPE')); ?>:</b>
	<?php echo CHtml::encode($data->CMT_TYPE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CMT_CONTENT')); ?>:</b>
	<?php echo CHtml::encode($data->CMT_CONTENT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CMT_RDN_ID')); ?>:</b>
	<?php echo CHtml::encode($data->CMT_RDN_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CMT_UCH_ID')); ?>:</b>
	<?php echo CHtml::encode($data->CMT_UCH_ID); ?>
	<br />


</div>