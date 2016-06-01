<h4 class="page-header">Listado de Carreras</h4>
<p><a href="<?php echo CController::createUrl('catCarreras/create'); ?>" class="btn-sm btn btn-warning pull-left"><i class="glyphicon glypicon-plus"></i>Agregar Carrera</a></p>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cat-carreras-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'id',
		'ciudad',
		'status',
		'fecha_reg',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
