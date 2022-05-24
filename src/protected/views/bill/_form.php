<?php
/* @var $this BillController */
/* @var $model Bill */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bill-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'foreignID'); ?>
		<?php echo $form->textField($model,'foreignID'); ?>
		<?php echo $form->error($model,'foreignID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nomer'); ?>
		<?php echo $form->textField($model,'nomer'); ?>
		<?php echo $form->error($model,'nomer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usluga'); ?>
		<?php echo $form->textField($model,'usluga',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'usluga'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data'); ?>
		<?php echo $form->textField($model,'data'); ?>
		<?php echo $form->error($model,'data'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->