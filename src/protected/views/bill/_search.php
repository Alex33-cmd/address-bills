<?php
/* @var $this BillController */
/* @var $model Bill */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'foreignID'); ?>
		<?php echo $form->textField($model,'foreignID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nomer'); ?>
		<?php echo $form->textField($model,'nomer'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usluga'); ?>
		<?php echo $form->textField($model,'usluga',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data'); ?>
		<?php echo $form->textField($model,'data'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->