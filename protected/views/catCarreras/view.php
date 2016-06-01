<?php
/* @var $this CatCarrerasController */
/* @var $model CatCarreras */

$this->breadcrumbs=array(
	'Cat Carrerases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CatCarreras', 'url'=>array('index')),
	array('label'=>'Create CatCarreras', 'url'=>array('create')),
	array('label'=>'Update CatCarreras', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CatCarreras', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatCarreras', 'url'=>array('admin')),
);
?>

<h1>View CatCarreras #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'ciudad',
		'status',
		'fecha_reg',
	),
)); ?>
