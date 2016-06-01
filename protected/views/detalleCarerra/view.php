<?php
/* @var $this DetalleCarerraController */
/* @var $model DetalleCarerra */

$this->breadcrumbs=array(
	'Detalle Carerras'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DetalleCarerra', 'url'=>array('index')),
	array('label'=>'Create DetalleCarerra', 'url'=>array('create')),
	array('label'=>'Update DetalleCarerra', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DetalleCarerra', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DetalleCarerra', 'url'=>array('admin')),
);
?>

<h1>View DetalleCarerra #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_carrera',
		'titulo',
		'subtitulo',
		'fecha',
		'distancia',
		'horario',
		'cupo',
		'rutaImg',
		'rutaKit',
		'rutaFile',
		'fecha_evento',
		'img_paisaje',
	),
)); ?>
