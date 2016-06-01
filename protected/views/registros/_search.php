<?php
/* @var $this RegistrosController */
/* @var $model Registros */
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
		<?php echo $form->label($model,'carrera'); ?>
		<?php echo $form->textField($model,'carrera'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'distancia'); ?>
		<?php echo $form->textField($model,'distancia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_usuario'); ?>
		<?php echo $form->textField($model,'tipo_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_empleado'); ?>
		<?php echo $form->textField($model,'id_empleado',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_invitado'); ?>
		<?php echo $form->textField($model,'id_invitado',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellido_paterno'); ?>
		<?php echo $form->textField($model,'apellido_paterno',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellido_materno'); ?>
		<?php echo $form->textField($model,'apellido_materno',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'edad'); ?>
		<?php echo $form->textField($model,'edad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sexo'); ?>
		<?php echo $form->textField($model,'sexo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ciudad'); ?>
		<?php echo $form->textField($model,'ciudad',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'talla'); ?>
		<?php echo $form->textField($model,'talla'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'paypal'); ?>
		<?php echo $form->textField($model,'paypal',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sindicalizado'); ?>
		<?php echo $form->textField($model,'sindicalizado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dorsal'); ?>
		<?php echo $form->textField($model,'dorsal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->