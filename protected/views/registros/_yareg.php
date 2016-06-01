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



<div class="telcel-wrapper">
    <div class="telcel-container">        
        <div id="contacto" class="telcel-fut telcel-section">
            <div class="telcel-contacto-cont">
                <h2 class="header">REGISTRO</h2>
                <div class="telcel-fut-logo">
                    <img src="images/logo-futbol.png" />
                </div>
                <div class="telcel-fut-text">

                  <p><h3 style="text-align:left;color:red;">Usted ya se ha  sido registrado en esta carrera</h3 ></p>

                    <p>Cualquier pregunta o duda escríbenos un correo a:<bR><br /><a href="mailto:correyjuega@mail.telcel.com">correyjuega@mail.telcel.com</a></p>
                      <br />
                      <p><strong>TELÉFONO DE CONTACTO</strong></p>
                         <p>+52 1 55 6166 2855</p>

                        <div class="links-otros">
	  
      <a href="<?php echo CController::createUrl('site/index'); ?>" class="btn-sm btn btn-info pull-left"><i class="glyphicon glypicon-plus"></i>Aceptar</a>
      
     
</div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
?>
