<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('NWS_CAT_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->NWS_CAT_ID),array('view','id'=>$data->NWS_CAT_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NWS_CAT_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->NWS_CAT_NAME); ?>
	<br />


</div>