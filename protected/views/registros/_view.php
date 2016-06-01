<?php
/* @var $this RegistrosController */
/* @var $data Registros */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('carrera')); ?>:</b>
	<?php echo CHtml::encode($data->carrera); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('distancia')); ?>:</b>
	<?php echo CHtml::encode($data->distancia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_empleado')); ?>:</b>
	<?php echo CHtml::encode($data->id_empleado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_invitado')); ?>:</b>
	<?php echo CHtml::encode($data->id_invitado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido_paterno')); ?>:</b>
	<?php echo CHtml::encode($data->apellido_paterno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido_materno')); ?>:</b>
	<?php echo CHtml::encode($data->apellido_materno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('edad')); ?>:</b>
	<?php echo CHtml::encode($data->edad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sexo')); ?>:</b>
	<?php echo CHtml::encode($data->sexo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ciudad')); ?>:</b>
	<?php echo CHtml::encode($data->ciudad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('talla')); ?>:</b>
	<?php echo CHtml::encode($data->talla); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paypal')); ?>:</b>
	<?php echo CHtml::encode($data->paypal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sindicalizado')); ?>:</b>
	<?php echo CHtml::encode($data->sindicalizado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dorsal')); ?>:</b>
	<?php echo CHtml::encode($data->dorsal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	*/ ?>

</div>