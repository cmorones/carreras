<?php
/* @var $this CatCarrerasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cat Carrerases',
);

$this->menu=array(
	array('label'=>'Create CatCarreras', 'url'=>array('create')),
	array('label'=>'Manage CatCarreras', 'url'=>array('admin')),
);
?>

<h1>Cat Carrerases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
