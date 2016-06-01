<?php
/* @var $this DetalleCarerraController */
/* @var $model DetalleCarerra */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'detalle-carerra-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_carrera'); ?>
		<?php echo $form->textField($model,'id_carrera',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'id_carrera'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subtitulo'); ?>
		<?php echo $form->textField($model,'subtitulo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'subtitulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'distancia'); ?>
		<?php echo $form->textField($model,'distancia',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'distancia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horario'); ?>
		<?php echo $form->textField($model,'horario',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'horario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cupo'); ?>
		<?php echo $form->textField($model,'cupo'); ?>
		<?php echo $form->error($model,'cupo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rutaImg'); ?>
		<?php echo $form->textField($model,'rutaImg',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'rutaImg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rutaKit'); ?>
		<?php echo $form->textField($model,'rutaKit',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'rutaKit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rutaFile'); ?>
		<?php echo $form->textField($model,'rutaFile',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'rutaFile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_evento'); ?>
		<?php echo $form->textField($model,'fecha_evento'); ?>
		<?php echo $form->error($model,'fecha_evento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'img_paisaje'); ?>
		<?php echo $form->textField($model,'img_paisaje',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'img_paisaje'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->