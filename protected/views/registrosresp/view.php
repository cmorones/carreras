<?php 

$validado = Yii::app()->getSession()->get('valido1');

if ($validado) {
    


?>
<div class="telcel-menu">
	<div class="telcel-menu-cont">
        <ul>
            <li><a href="<?php echo CController::createUrl('site/index',array('valido'=>$validado)); ?>">Volver</a></li>
        </ul>
        <div class="session">
        	<img src="../images/user-icon.png" />
            <div class="session-info">
            	<p>Empleado: <? echo Yii::app()->getSession()->get('emp'); ?></p>
                <a href="<?php echo CController::createUrl('site/logout'); ?>">Cerrar Sesión</a>                
            </div>
        </div>
    </div>
</div>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'carrera',
		'distancia',
		'tipo_usuario',
		'id_empleado',
		'id_invitado',
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
	),
)); ?>

<h1>Se registro correctamente!!!!</h1>

