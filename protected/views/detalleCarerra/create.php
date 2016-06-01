<?php
/* @var $this DetalleCarerraController */
/* @var $model DetalleCarerra */

$this->breadcrumbs=array(
	'Detalle Carerras'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DetalleCarerra', 'url'=>array('index')),
	array('label'=>'Manage DetalleCarerra', 'url'=>array('admin')),
);
?>

<h1>Create DetalleCarerra</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>