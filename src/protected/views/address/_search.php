<?php
/* @var $this AddressController */
/* @var $model Address */
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
		<?php echo $form->label($model,'gorod'); ?>
		<?php echo $form->textField($model,'gorod',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adres'); ?>
		<?php echo $form->textField($model,'adres',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dom'); ?>
		<?php echo $form->textField($model,'dom'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'korpus'); ?>
		<?php echo $form->textField($model,'korpus',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kvartira'); ?>
		<?php echo $form->textField($model,'kvartira'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->