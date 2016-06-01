<?php
/* @var $this RegistrosController */
/* @var $model Registros */

$this->breadcrumbs=array(
	'Registroses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Registros', 'url'=>array('index')),
	array('label'=>'Create Registros', 'url'=>array('create')),
	array('label'=>'View Registros', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Registros', 'url'=>array('admin')),
);
?>

<h1>Update Registros <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>