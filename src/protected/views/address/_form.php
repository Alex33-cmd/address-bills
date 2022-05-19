<?php
/* @var $this AddressController */
/* @var $model Address */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'address-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'gorod'); ?>
		<?php echo $form->textField($model,'gorod',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'gorod'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adres'); ?>
		<?php echo $form->textField($model,'adres',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'adres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dom'); ?>
		<?php echo $form->textField($model,'dom'); ?>
		<?php echo $form->error($model,'dom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'korpus'); ?>
		<?php echo $form->textField($model,'korpus',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'korpus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kvartira'); ?>
		<?php echo $form->textField($model,'kvartira'); ?>
		<?php echo $form->error($model,'kvartira'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->