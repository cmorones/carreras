<?php
/* @var $this RegistrosController */
/* @var $model Registros */

$this->breadcrumbs=array(
	'Registroses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Registros', 'url'=>array('index')),
	array('label'=>'Create Registros', 'url'=>array('create')),
	array('label'=>'Update Registros', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Registros', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Registros', 'url'=>array('admin')),
);
?>

<h1>View Registros #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'carrera',
		'distancia',
		'tipo_usuario',
		'id_empleado',
		'id_invitado',
		'nombre',
		'apellido_paterno',
		'apellido_materno',
		'email',
		'edad',
		'sexo',
		'ciudad',
		'telefono',
		'talla',
		'status',
		'paypal',
		'sindicalizado',
		'dorsal',
		'fecha',
	),
)); ?>
