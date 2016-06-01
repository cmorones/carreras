<?php
/* @var $this CatCarrerasController */
/* @var $model CatCarreras */

$this->breadcrumbs=array(
	'Cat Carrerases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatCarreras', 'url'=>array('index')),
	array('label'=>'Manage CatCarreras', 'url'=>array('admin')),
);
?>

<h1>Create CatCarreras</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>