<?php
/* @var $this RegistrosController */
/* @var $model Registros */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'registros-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'carrera'); ?>
		<?php echo $form->textField($model,'carrera',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'carrera'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'distancia'); ?>
		<?php echo $form->textField($model,'distancia',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'distancia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_usuario'); ?>
		<?php echo $form->textField($model,'tipo_usuario',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'tipo_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_empleado'); ?>
		<?php echo $form->textField($model,'id_empleado',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'id_empleado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_invitado'); ?>
		<?php echo $form->textField($model,'id_invitado',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'id_invitado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido_paterno'); ?>
		<?php echo $form->textField($model,'apellido_paterno',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'apellido_paterno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido_materno'); ?>
		<?php echo $form->textField($model,'apellido_materno',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'apellido_materno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'edad'); ?>
		<?php echo $form->textField($model,'edad'); ?>
		<?php echo $form->error($model,'edad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sexo'); ?>
		<?php echo $form->textField($model,'sexo',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'sexo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciudad'); ?>
		<?php echo $form->textField($model,'ciudad',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ciudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'talla'); ?>
		<?php echo $form->textField($model,'talla',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'talla'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paypal'); ?>
		<?php echo $form->textField($model,'paypal',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'paypal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sindicalizado'); ?>
		<?php echo $form->textField($model,'sindicalizado',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'sindicalizado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dorsal'); ?>
		<?php echo $form->textField($model,'dorsal',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'dorsal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->