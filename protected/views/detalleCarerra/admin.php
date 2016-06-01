<h4 class="page-header">Detalle de Carreras</h4>
<p><a href="<?php echo CController::createUrl('catCarreras/create'); ?>" class="btn-sm btn btn-warning pull-left"><i class="glyphicon glypicon-plus"></i>Agregar Detalle a Carrera</a></p>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'detalle-carerra-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'id_carrera',
		'titulo',
		'subtitulo',
		'fecha',
		'distancia',
		
		'horario',
		'cupo',
		'rutaImg',
		'rutaKit',
		'rutaFile',
		'fecha_evento',
		'img_paisaje',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
