<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('OKR_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->OKR_ID),array('view','id'=>$data->OKR_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OKR_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->OKR_NAME); ?>
	<br />


</div>