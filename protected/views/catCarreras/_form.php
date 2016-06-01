<?php
/* @var $this CatCarrerasController */
/* @var $model CatCarreras */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cat-carreras-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ciudad'); ?>
		<?php echo $form->textField($model,'ciudad',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ciudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_reg'); ?>
		<?php echo $form->textField($model,'fecha_reg'); ?>
		<?php echo $form->error($model,'fecha_reg'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->