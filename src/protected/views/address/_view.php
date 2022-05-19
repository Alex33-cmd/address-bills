<?php
/* @var $this AddressController */
/* @var $data Address */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gorod')); ?>:</b>
	<?php echo CHtml::encode($data->gorod); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adres')); ?>:</b>
	<?php echo CHtml::encode($data->adres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dom')); ?>:</b>
	<?php echo CHtml::encode($data->dom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('korpus')); ?>:</b>
	<?php echo CHtml::encode($data->korpus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kvartira')); ?>:</b>
	<?php echo CHtml::encode($data->kvartira); ?>
	<br />


</div>