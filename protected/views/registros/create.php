<?php 



if (Yii::app()->getSession()->get('valido1')=="OK") {

?>
<div class="telcel-menu">
	<div class="telcel-menu-cont">
        <ul>
            <li><a href="<?php echo CController::createUrl('site/index'); ?>">Volver</a></li>
        </ul>
        <div class="session">
        	<img src="<?php echo Yii::app()->request->baseUrl;?>/images/user-icon.png" />
            <div class="session-info">
            	<p>Empleado: <? echo Yii::app()->getSession()->get('emp'); ?></p>
                <a href="<?php echo CController::createUrl('site/logout'); ?>">Cerrar Sesión</a>                
            </div>
        </div>
    </div>
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); 

}
?>


 