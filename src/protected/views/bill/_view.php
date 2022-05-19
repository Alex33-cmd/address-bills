<?php
/* @var $this BillController */
/* @var $data Bill */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dom')); ?>:</b>
	<?php echo CHtml::encode($data->dom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomer')); ?>:</b>
	<?php echo CHtml::encode($data->nomer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usluga')); ?>:</b>
	<?php echo CHtml::encode($data->usluga); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
	<?php echo CHtml::encode($data->data); ?>
	<br />


</div>