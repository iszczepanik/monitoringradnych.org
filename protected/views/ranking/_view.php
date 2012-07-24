<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('RNK_RDN_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RNK_RDN_ID),array('view','id'=>$data->RNK_RDN_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RNK_KMS')); ?>:</b>
	<?php echo CHtml::encode($data->RNK_KMS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RNK_RADY')); ?>:</b>
	<?php echo CHtml::encode($data->RNK_RADY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RNK_DUTY')); ?>:</b>
	<?php echo CHtml::encode($data->RNK_DUTY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RNK_MAIL')); ?>:</b>
	<?php echo CHtml::encode($data->RNK_MAIL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RNK_INTERNET')); ?>:</b>
	<?php echo CHtml::encode($data->RNK_INTERNET); ?>
	<br />


</div>