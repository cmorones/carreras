<?php
/* @var $this RegistrosController */
/* @var $model Registros */

$this->breadcrumbs=array(
	'Registroses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Registros', 'url'=>array('index')),
	array('label'=>'Create Registros', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#registros-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Registroses</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'registros-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'carrera',
		'distancia',
		'tipo_usuario',
		'id_empleado',
		'id_invitado',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
