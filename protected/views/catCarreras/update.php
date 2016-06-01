<?php
/* @var $this CatCarrerasController */
/* @var $model CatCarreras */

$this->breadcrumbs=array(
	'Cat Carrerases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatCarreras', 'url'=>array('index')),
	array('label'=>'Create CatCarreras', 'url'=>array('create')),
	array('label'=>'View CatCarreras', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CatCarreras', 'url'=>array('admin')),
);
?>

<h1>Update CatCarreras <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>