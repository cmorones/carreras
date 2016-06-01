<?php
/* @var $this DetalleCarerraController */
/* @var $model DetalleCarerra */

$this->breadcrumbs=array(
	'Detalle Carerras'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DetalleCarerra', 'url'=>array('index')),
	array('label'=>'Create DetalleCarerra', 'url'=>array('create')),
	array('label'=>'View DetalleCarerra', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DetalleCarerra', 'url'=>array('admin')),
);
?>

<h1>Update DetalleCarerra <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>