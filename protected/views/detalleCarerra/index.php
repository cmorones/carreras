<?php
/* @var $this DetalleCarerraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Detalle Carerras',
);

$this->menu=array(
	array('label'=>'Create DetalleCarerra', 'url'=>array('create')),
	array('label'=>'Manage DetalleCarerra', 'url'=>array('admin')),
);
?>

<h1>Detalle Carerras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
