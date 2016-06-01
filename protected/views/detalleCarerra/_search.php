<?php
/* @var $this DetalleCarerraController */
/* @var $model DetalleCarerra */
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
		<?php echo $form->label($model,'id_carrera'); ?>
		<?php echo $form->textField($model,'id_carrera',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subtitulo'); ?>
		<?php echo $form->textField($model,'subtitulo',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'distancia'); ?>
		<?php echo $form->textField($model,'distancia',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'horario'); ?>
		<?php echo $form->textField($model,'horario',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cupo'); ?>
		<?php echo $form->textField($model,'cupo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rutaImg'); ?>
		<?php echo $form->textField($model,'rutaImg',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rutaKit'); ?>
		<?php echo $form->textField($model,'rutaKit',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rutaFile'); ?>
		<?php echo $form->textField($model,'rutaFile',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_evento'); ?>
		<?php echo $form->textField($model,'fecha_evento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'img_paisaje'); ?>
		<?php echo $form->textField($model,'img_paisaje',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->