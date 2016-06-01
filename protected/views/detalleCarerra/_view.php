<?php
/* @var $this DetalleCarerraController */
/* @var $data DetalleCarerra */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_carrera')); ?>:</b>
	<?php echo CHtml::encode($data->id_carrera); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subtitulo')); ?>:</b>
	<?php echo CHtml::encode($data->subtitulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('distancia')); ?>:</b>
	<?php echo CHtml::encode($data->distancia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horario')); ?>:</b>
	<?php echo CHtml::encode($data->horario); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('cupo')); ?>:</b>
	<?php echo CHtml::encode($data->cupo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rutaImg')); ?>:</b>
	<?php echo CHtml::encode($data->rutaImg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rutaKit')); ?>:</b>
	<?php echo CHtml::encode($data->rutaKit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rutaFile')); ?>:</b>
	<?php echo CHtml::encode($data->rutaFile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_evento')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_evento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('img_paisaje')); ?>:</b>
	<?php echo CHtml::encode($data->img_paisaje); ?>
	<br />

	*/ ?>

</div>