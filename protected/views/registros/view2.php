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

 <script>

   function alerta(){
                //un alert
                alertify.alert("<h1><b>Aviso importante!!!</b></h1> <h2>Se han habilitado los informes, se generán por criterios de busqueda y se pueden exportar a excel.</h2>", function () {
                    //aqui introducimos lo que haremos tras cerrar la alerta.
                    //por ejemplo -->  location.href = 'http://www.google.es/';  <-- Redireccionamos a GOOGLE.
                    ok();
                });
            }

    function ok(){
                alertify.success("Consulta el manual de  <a href=\"<? echo Yii::app()->request->baseUrl;?>/docto/Manual_UsuarioSigedo_2016.pdf\" style=\"color:white;\" target=\"_blank\"><b>Usuario.</b></a>"); 
                return false;
            }

    alerta();
   </script>

?>