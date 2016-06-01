<?




$sql ="SELECT
cat_carreras.ciudad,
cat_carreras.id,
detalle_carrera.titulo,
detalle_carrera.subtitulo,
detalle_carrera.fecha,
detalle_carrera.distancia,
detalle_carrera.horario,
detalle_carrera.cupo,
detalle_carrera.rutaImg,
detalle_carrera.rutaKit,
detalle_carrera.rutaFile,
detalle_carrera.img_paisaje,
detalle_carrera.fecha_evento
FROM
cat_carreras
INNER JOIN detalle_carrera ON cat_carreras.id = detalle_carrera.id_carrera
WHERE
cat_carreras.mostrar = 1";

$info = Yii::app()->db->createCommand($sql)->queryRow();

if (Yii::app()->getSession()->get('valido1')!="OK") {

    if (isset($_REQUEST['validado'])){
    $validado = $_REQUEST['validado'];
    $emp = $_REQUEST['emp'];

    $AES =new AesCtr();
    $descifra1 = base64_decode($validado);
    $descifra2 = base64_decode($emp);

    $descifravalidacion =$AES->decrypt($descifra1, 'Llave128r4Fv$B%t', 256);
    $decifraemp=$AES->decrypt($descifra2, 'Llave128r4Fv$B%t', 256);

     //echo $descifravalidacion. '<br>';
     //echo $emp. '<br>';


    }else {
        $descifravalidacion=false;
    }
   
}



?>














<div class="telcel-menu">
 <?php
                if (Yii::app()->getSession()->get('valido1')=="OK") {

?>
  <div class="session">
            <img src="<?php echo Yii::app()->request->baseUrl;?>/images/user-icon.png" />
            <div class="session-info">
                <p>Empleado: <? echo Yii::app()->getSession()->get('emp'); ?></p>
                <a href="<?php echo CController::createUrl('site/logout'); ?>">Cerrar Sesión</a>                
            </div>
   </div>

   <?php
}

?>

	<div class="telcel-menu-cont">

        <ul class="scroll-menu">
            <li><a href="#top">Inicio</a></li>
            <li><a href="#what">¿Qué es el Circuito Sindicato Telcel?</a></li>
            <li><a href="#run">Carreras</a>
            	<ul class="sub-menu">
                	
                    <li><a href="#" >Querétaro</a></li>
                	<li><a href="#" >Tijuana</a></li>
                    <li><a href="#">Hermosillo</a></li>
					<li><a>D.F.</a></li>
                    <li><a href="#" >Mérida</a></li>
					<li><a href="#" >Monterrey</a></li>
                    <li><a href="#">Chihuahua</a></li>
                     <li><a href="#" >Puebla</a></li>
                    
                </ul>
            </li>
            <li><a href="#consejos">Consejos</a></li>
            <!--<li><a href="#run">Inscríbete a la Carrera</a></li>-->
            <!--<li><a href="http://www.marcate.com.mx/evento/SPTMCAR1442011544" target="_blank">Inscríbete a la Carrera</a></li>-->
            
            <?php
                if (Yii::app()->getSession()->get('valido1')!="OK" and $descifravalidacion=="OK") {
                    Yii::app()->getSession()->add('valido1', $descifravalidacion);
                    //Yii::app()->getSession()->add('empencrypt', $emp);
                    Yii::app()->getSession()->add('emp', $decifraemp);
                    ?>
                    
                    <li><a href="<?php echo CController::createUrl('registros/create'); ?>">Inscríbete</a></li>
                    
                    <?php
                }elseif (Yii::app()->getSession()->get('valido1')=="OK") {
                   ?>
                    <li><a href="<?php echo CController::createUrl('registros/create'); ?>">Inscríbete</a></li>
                   <?php
                }
            ?>

            <li><a href="#fut">Futbol</a>
            	<ul class="sub-menu">
                	  
                        <li><a href="fut-df-corporativo.php" class="fut-link" rel="futbol-2">D.F. Corporativo</a></li>
                        <li><a href="fut-df-metropolitano.php" class="fut-link" rel="futbol-2">D.F. Metropolitano</a></li>
                        <li><a href="fut-merida.php" class="fut-link" rel="futbol-2">Mérida</a></li>
                        <li><a href="fut-guadalajara.php" class="fut-link" rel="futbol-2">Guadalajara</a></li>
                        <li><a href="fut-queretaro.php" class="fut-link" rel="futbol-2">Queretaro</a></li>
                        <li><a href="fut-chihuahua.php?section=sind" class="fut-link" rel="futbol-2">Chihuahua</a></li>
                        <li><a href="fut-tijuana.php" class="fut-link" rel="futbol-2">Tijuana</a></li>
                        <li><a href="fut-puebla.php" class="fut-link" rel="futbol-2">Puebla</a></li>
                        <li><a href="fut-monterrey.php" class="fut-link" rel="futbol-2">Monterrey</a></li>
                  
                </ul>
            </li>
            <li><a href="#gal">Galerías</a>
            <li><a href="#contacto">Contacto</a></li>

        </ul>

    </div>
</div>
<div class="telcel-wrapper">
    <div class="telcel-container">
    	<div class="telcel-slider telcel-section">
        	<div id="slider">
                <ul>
                	<li><img src="<?php echo Yii::app()->request->baseUrl;?>/images/slidequeretaro.jpg" alt="Carreras Sindicato Telcel" /></li>
                    <li><img src="<?php echo Yii::app()->request->baseUrl;?>/images/slide-logo-futbol.jpg" alt="Circuito Sindicato Telcel" /></li>			
                    <li><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/df/df_2014_04.jpg" alt="Carreras Sindicato Telcel" /></li>
                    <li><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/df/df_2014_14.jpg" alt="Carreras Sindicato Telcel" /></li>
                    <li><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_13.jpg" alt="Carreras Sindicato Telcel" /></li>
                    <li><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_19.jpg" alt="Carreras Sindicato Telcel" /></li>
                    <li><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/chihuahua/chihuahua_2015_06.jpg" alt="Carreras Sindicato Telcel" /></li>
                    <li><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/chihuahua/chihuahua_2015_09.jpg" alt="Carreras Sindicato Telcel" /></li>
                    <li><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_14.jpg" alt="Carreras Sindicato Telcel" /></li>
                    <li><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_07.jpg" alt="Carreras Sindicato Telcel" /></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="telcel-wrapper">
    <div class="telcel-container">        
        <div id="what" class="telcel-what telcel-section">
        	<div class="telcel-what-cont">
            	<h2 class="header">¿QUÉ ES EL CIRCUITO SINDICATO TELCEL?</h2>
                <p>El <strong>SINDICATO TELCEL</strong>, siempre preocupado por el bienestar de sus trabajadores y de la	sociedad mexicana en general, organiza eventos deportivos con la intención de incrementar la actividad física y contrarrestar el sedentarismo. El circuito del <strong>SINDICATO TELCEL</strong>, incluye carreras atléticas y torneos de fútbol 7. Quédate pendiente, que muy pronto estaremos en tu ciudad.</p>
            </div>
        </div>
        <div id="run" class="telcel-run telcel-section">
        	<div class="telcel-run-cont">
				<h2 class="header">CARRERA</h2>
                <h3><strong><?=$info['titulo']?></strong></h3>
                <div class="countdown-cont">
                	<h4 class="header3-blue"><?=$info['ciudad']?></h4>
                    <ul class="countdown3">
                        <li> <span class="days">00</span>
                        <p class="days_ref">días</p>
                        </li>
                        <li class="seperator">.</li>
                        <li> <span class="hours">00</span>
                        <p class="hours_ref">horas</p>
                        </li>
                        <li class="seperator">:</li>
                        <li> <span class="minutes">00</span>
                        <p class="minutes_ref">minutos</p>
                        </li>
                        <li class="seperator">:</li>
                        <li> <span class="seconds">00</span>
                        <p class="seconds_ref">segundos</p>
                        </li>
                    </ul>
                </div>
                <div class="telcel-challenge">
                    <div class="telcel-challenge-item center-challenge">
                    	<img src="<?php echo Yii::app()->request->baseUrl;?>/images/<?=$info['img_paisaje']?>" alt="Carrera Sindicato Telcel D.F." />
                        <div class="challenge-text">
                       	  <h4><?=$info['subtitulo']?><br /><strong> Sindicato Telcel Querétaro</strong></h4>
                          	<p><strong>Fecha:</strong><?=$info['fecha']?><br />
                           <!-- <strong>Lugar:</strong><br /> -->
                            <strong>Distancias:</strong><?=$info['distancia']?><br />
                            
                            <ul>
                              <li><a class="rutas" href="<?php echo Yii::app()->request->baseUrl;?>/images/<?=$info['rutaImg']?>" rel="rutas" title="<?=$info['rutaImg']?>">Ver Rutas</a></li>
                              <!--<li><a class="rutas" href="images/estacionamientos-df.jpg" rel="rutas" title="Estacionamientos">Ver Estacionamientos</a></li>-->
                              <li><a class="rutas" href="images/<?=$info['rutaKit']?>" >Entrega de Kits</a></li>
                              <li><a href="<?php echo Yii::app()->request->baseUrl;?>/files/<?=$info['rutaFile']?>" target="_blank">Ver convocatoria</a></li>
                              <!--<li><a href="http://marcate.com.mx/evento/SPTMCAR1445440668" target="_blank">Inscríbete aquí</a></li>-->
                          </ul>
                        </div>
                    </div>
                </div>
				<div class="telcel-challenge">
                    <div class="telcel-challenge-item center-challenge">
						<ul>
							<li><a href="https://www.facebook.com/Carrera-Sindicato-Telcel-2016-1962062104019018/?ref=ts&fref=ts" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/iconofacebook.png" alt="Carrera Sindicato Telcel D.F." /></a></li>
							<li><a href="https://twitter.com/carrerastelcel" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/iconotwitter.png" alt="Carrera Sindicato Telcel D.F." /></a></li>
						</ul>                    	                       
                    </div>					
                </div>
            </div>
        </div>
	</div>
</div>
<div class="telcel-wrapper">
    <div class="telcel-container"> 
        <div id="sus" class="telcel-sus telcel-section">
            <div class="telcel-sus-cont">
                <h2 class="header">INSCRÍBETE AQUÍ</h2>
           
            </div>
        </div>
    </div>  
</div>
<div class="telcel-wrapper">
    <div class="telcel-container-full bg-run">
    	<div id="consejos" class="telcel-consejos telcel-section">
        	<div class="telcel-consejos-cont">
    			<h2 class="header2">CONSEJOS PARA LA CARRERA</h2>
                <div class="telcel-consejos-tabs">
                	<div id="tab-container" class="tab-container">
                        <ul class='etabs'>
                            <li class='tab'><a href="#tabs1-antes"><span>Antes de la Carrera</span></a></li>
                            <li class='tab' style="margin-right: 0;"><a href="#tabs1-despues"><span>Después de la Carrera</span></a></li>
                        </ul>
                        <div class="panel-container">
                            <div id="tabs1-antes">
                                <h3>ANTES DE LA CARRERA</h3>
                                <ul>
                                    <li>Come máximo una hora antes alimentos ricos en carbohidratos para que tengas mayor energía durante la carrera, no te esperes media hora antes ya que esto te podría ocasionar calambres. El peor error que puedes cometer es ir en ayunas.</li>
                                    <li>Lleva contigo vestimenta adecuada, ropa con la que te sientas cómodo y zapatos con los que ya hayas entrenado antes para evitar molestias o sentirte incomodo durante la carrera. Evita llevar ropa en exceso.</li>
                                    <li>Prepara un día antes todo lo que vas a necesitar en la carrera, por ejemplo audífonos para que al otro día no se te olviden por andar con prisas, haz una “playlist” que sabes que te va motivar todo el tiempo.</li>
                                    <li>Recuerda mantenerte hidratado, sobre todo si es una carrera larga, siempre hay stands donde puedes consumir líquidos, pero no tomes agua de más antes de la carrera ya que te podrías sentirte mal.</li>
                                    <li>Descansa bien un día antes, no hay nada peor que estar desvelado ya que vas estar cansado y no vas a rendir igual durante la carrera.</li>
                                    <li>Calienta un poquito antes de la carrera para no comenzar frio, por lo menos diez minutos antes es más que suficiente.</li>
                                </ul>
                            </div>
                            <div id="tabs1-despues">
                                <h3>DESPUES DE LA CARRERA</h3>
                                <ul>
                                    <li>Al momento de llegar a la meta recuerda no parar en seco, para evitar lesiones y una recuperación difícil, comienza con un trote y termina caminando.</li>
                                    <li>Recuerda que es muy importante mantenerte hidratado, aunque no tengas sed al final de la carrera es importante tomar agua a sorbos pequeños para compensar la deshidratación que el cuerpo acaba de pasar.</li>
                                    <li>Si realizas estiramientos al terminar la carrera recuerda hacerlos con precaución para evitar lesiones, no debemos forzar mucho al cuerpo. Intenta realizarlos de manera suave y relajada.</li>
                                    <li>Consume algún tipo de alimento como plátano o barritas con menos de 100 calorías para poder compensar el glucógeno perdido y no tener nuestras reservas en ceros.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
    </div>
</div>


<div class="telcel-wrapper">
    <div class="telcel-container">        
        <div id="fut" class="telcel-fut telcel-section">
            <div class="telcel-fut-cont">
                <h2 class="header">FUTBOL</h2>
                <div class="telcel-fut-logo">
                    <img src="<?php echo Yii::app()->request->baseUrl;?>/images/logo-futbol.png" />
                </div>
                <div class="telcel-fut-text">
                    <p><strong>Estimado compañero Telcel:</strong></p>
                    <p>Es importante que recuerdes lo siguiente:</p>
                    <ul>
                        <li>El capitán será el responsable de recibir información, boletines y representara al equipo ante la liga. </li>
                        <li>Es obligatorio para cada jugador acreditar su identidad con la credencial de empleado.</li>
                        <li><strong><i>Importante llegar 15 minutos antes de la hora de partido.</i></strong></li>
                    </ul>
                    <p>Para más información <a href="mailto:jmillan@playmarketing.mx">jmillan@playmarketing.mx</a>, <a href="mailto:pgutierrez@playmarketing.mx">pgutierrez@playmarketing.mx</a> o con la persona de contacto de tu localidad (RRHH).</p>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="telcel-wrapper">
    <div class="telcel-container">        
        <div id="contacto" class="telcel-fut telcel-section">
            <div class="telcel-contacto-cont">
                <h2 class="header">CONTACTO</h2>
                <div class="telcel-fut-logo">
                    <img src="images/logo-futbol.png" />
                </div>
                <div class="telcel-fut-text">

                  
                    <p>Cualquier pregunta o duda escríbenos un correo a:<bR><br /><a href="mailto:correyjuega@mail.telcel.com">correyjuega@mail.telcel.com</a></p>
                      <br />
                      <p><strong>TELÉFONO DE CONTACTO</strong></p>
                         <p>+52 1 55 6166 2855</p>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="telcel-wrapper">
    <div class="telcel-container">        
        <div id="gal" class="telcel-gal telcel-section">
        	<h2 class="header">Galerías</h2>
			
			<h3>Carreras 2016</h3>
            <div class="gal-wrapper">   
			 <div class="gal-column">
                    <div class="gal-column-innner">
                        <h4 class="gal-inner-header">Monterrey</h4>
                        <ul>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_01.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_01.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_02.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_02.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_03.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_03.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_04.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_04.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_05.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_05.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_06.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_06.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_07.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_07.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_08.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_08.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_09.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_09.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_10.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_10.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_11.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_11.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_12.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_12.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_13.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_13.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_14.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_14.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_15.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_15.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_16.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_16.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_17.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_17.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_18.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_18.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_19.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_19.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016-20.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_20.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_21.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_21.jpg" alt="" /></a></li>
							<li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_22.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_22.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_23.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_23.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_24.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_24.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_25.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_25.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_26.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_26.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_27.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_27.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_28.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_28.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_29.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_29.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_30.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_30.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_31.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_31.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_32.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_32.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_33.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_33.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_34.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_34.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_35.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_35.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_36.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_36.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_37.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_37.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_38.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_38.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_39.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_39.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_40.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_40.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_41.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_41.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_42.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_42.jpg" alt="" /></a></li>
							<li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_43.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_43.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_44.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_44.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_45.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_45.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_46.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_46.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_47.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_47.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_48.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_48.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_49.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_49.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_50.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/monterrey/monterrey_2016_50.jpg" alt="" /></a></li>
							
                        </ul>
                    </div>
                </div>             
                <div class="gal-column">
                    <div class="gal-column-innner">
                        <h4 class="gal-inner-header">Merida</h4>
                        <ul>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_01.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_01.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_02.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_02.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_03.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_03.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_04.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_04.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_05.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_05.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_06.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_06.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_07.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_07.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_08.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_08.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_09.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_09.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_10.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_10.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_11.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_11.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_12.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_12.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_13.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_13.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_14.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_14.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_15.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_15.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_16.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_16.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_17.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_17.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_18.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_18.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_19.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_19.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_20.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_20.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_21.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_21.jpg" alt="" /></a></li>
							<li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_22.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_22.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_23.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_23.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_24.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_24.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_25.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_25.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_26.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_26.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_27.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_27.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_28.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_28.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_29.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_29.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_30.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_30.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_31.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_31.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_32.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_32.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_33.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_33.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_34.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_34.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_35.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_35.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_36.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_36.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_37.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_37.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_38.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_38.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_39.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_39.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_40.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_40.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_41.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_41.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_42.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_42.jpg" alt="" /></a></li>
							<li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_43.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_43.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_44.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_44.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_45.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_45.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_46.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_46.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_47.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_47.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_48.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_48.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_49.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_49.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_50.jpg" rel="gal-merida-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/merida/merida_2016_50.jpg" alt="" /></a></li>
                        </ul>
                    </div>
                </div>

                  <div class="gal-column">
                    <div class="gal-column-innner">
                        <h4 class="gal-inner-header">Chihuahua</h4>
                        <ul>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/1.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/1.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/2.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/2.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/3.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/3.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/4.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/4.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/5.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/5.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/6.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/6.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/7.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/7.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/8.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/8.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/9.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/9.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/10.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/10.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/11.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/11.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/12.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/12.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/13.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/13.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/14.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/14.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/15.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/15.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/16.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/16.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/17.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/17.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/18.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/18.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/19.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/19.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/20.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/20.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/21.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/21.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/22.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/22.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/23.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/23.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/24.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/24.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/25.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/25.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/26.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/26.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/27.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/27.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/28.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/28.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/29.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/29.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/30.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/30.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/31.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/31.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/32.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/32.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/33.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/33.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/34.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/34.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/35.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/35.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/36.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/36.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/37.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/37.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/38.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/38.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/39.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/39.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/40.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/40.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/41.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/41.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/42.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/42.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/43.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/43.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/44.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/44.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/45.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/45.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/46.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/46.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/47.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/47.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/48.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/48.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/49.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/49.JPG" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/50.JPG" rel="gal-chihuahua-2016" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2016/chihuahua/50.JPG" alt="" /></a></li>
                        </ul>
                    </div>
                </div>  
				              
            </div>
			
          
            <h3>Carreras 2015</h3>
            <div class="gal-wrapper">
              <?php require_once('galeria1.php')?>
                <div class="gal-column">
                    <div class="gal-column-innner">
                        <h4 class="gal-inner-header">Merida</h4>
                        <ul>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_01.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_01.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_02.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_02.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_03.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_03.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_04.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_04.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_05.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_05.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_06.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_06.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_07.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_07.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_08.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_08.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_09.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_09.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_10.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_10.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_11.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_11.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_12.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_12.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_13.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_13.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_14.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_14.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_15.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_15.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_16.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_16.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_17.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_17.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_18.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_18.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_19.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_19.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_20.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_20.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_21.jpg" rel="gal-merida-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/merida/merida_2015_21.jpg" alt="" /></a></li>
                        </ul>
                    </div>
                </div>
                <div class="gal-column">
                    <div class="gal-column-innner">
                        <h4 class="gal-inner-header">Tijuana</h4>
                        <ul>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_01.jpg" rel="gal-tijuana-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_01.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_02.jpg" rel="gal-tijuana-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_02.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_03.jpg" rel="gal-tijuana-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_03.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_04.jpg" rel="gal-tijuana-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_04.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_05.jpg" rel="gal-tijuana-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_05.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_06.jpg" rel="gal-tijuana-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_06.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_07.jpg" rel="gal-tijuana-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_07.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_08.jpg" rel="gal-tijuana-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_08.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_09.jpg" rel="gal-tijuana-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_09.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_10.jpg" rel="gal-tijuana-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_10.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_11.jpg" rel="gal-tijuana-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_11.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_12.jpg" rel="gal-tijuana-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_12.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_13.jpg" rel="gal-tijuana-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_13.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_14.jpg" rel="gal-tijuana-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_14.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_15.jpg" rel="gal-tijuana-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_15.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_16.jpg" rel="gal-tijuana-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_16.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_17.jpg" rel="gal-tijuana-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_17.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_18.jpg" rel="gal-tijuana-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_18.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_19.jpg" rel="gal-tijuana-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_19.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_20.jpg" rel="gal-tijuana-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_20.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_21.jpg" rel="gal-tijuana-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_21.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_22.jpg" rel="gal-tijuana-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_22.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_23.jpg" rel="gal-tijuana-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_23.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_24.jpg" rel="gal-tijuana-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_24.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_25.jpg" rel="gal-tijuana-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_25.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_26.jpg" rel="gal-tijuana-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_26.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_27.jpg" rel="gal-tijuana-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_27.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_28.jpg" rel="gal-tijuana-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_28.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_29.jpg" rel="gal-tijuana-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_29.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_30.jpg" rel="gal-tijuana-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_30.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_31.jpg" rel="gal-tijuana-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_31.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_32.jpg" rel="gal-tijuana-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_32.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_33.jpg" rel="gal-tijuana-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_33.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_34.jpg" rel="gal-tijuana-2015" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2015/tijuana/tijuana_2015_34.jpg" alt="" /></a></li>
                        </ul>
                    </div>
                </div>
            </div>
			  <h3>Carreras 2014</h3>
            <div class="gal-wrapper">
                <div class="gal-column">
                    <div class="gal-column-innner">
                        <h4 class="gal-inner-header">D.F.</h4>
                        <ul>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/df/df_2014_01.jpg" rel="gal-df-2014" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/df/df_2014_01.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/df/df_2014_02.jpg" rel="gal-df-2014" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/df/df_2014_02.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/df/df_2014_03.jpg" rel="gal-df-2014" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/df/df_2014_03.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/df/df_2014_04.jpg" rel="gal-df-2014" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/df/df_2014_04.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/df/df_2014_05.jpg" rel="gal-df-2014" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/df/df_2014_05.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/df/df_2014_06.jpg" rel="gal-df-2014" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/df/df_2014_06.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/df/df_2014_07.jpg" rel="gal-df-2014" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/df/df_2014_07.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/df/df_2014_08.jpg" rel="gal-df-2014" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/df/df_2014_08.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/df/df_2014_09.jpg" rel="gal-df-2014" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/df/df_2014_09.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/df/df_2014_10.jpg" rel="gal-df-2014" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/df/df_2014_10.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/df/df_2014_11.jpg" rel="gal-df-2014" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/df/df_2014_11.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/df/df_2014_12.jpg" rel="gal-df-2014" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/df/df_2014_12.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/df/df_2014_13.jpg" rel="gal-df-2014" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/df/df_2014_13.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/df/df_2014_14.jpg" rel="gal-df-2014" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/df/df_2014_14.jpg" alt="" /></a></li>
                        </ul>
                    </div>
                </div>
                <div class="gal-column">
                    <div class="gal-column-innner">
                        <h4 class="gal-inner-header">Guadalajara</h4>
                        <ul>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_01.jpg" rel="gal-gdl-2014" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_01.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_02.jpg" rel="gal-gdl-2014" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_02.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_03.jpg" rel="gal-gdl-2014" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_03.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_04.jpg" rel="gal-gdl-2014" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_04.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_05.jpg" rel="gal-gdl-2014" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_05.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_06.jpg" rel="gal-gdl-2014" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_06.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_07.jpg" rel="gal-gdl-2014" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_07.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_08.jpg" rel="gal-gdl-2014" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_08.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_09.jpg" rel="gal-gdl-2014" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_09.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_10.jpg" rel="gal-gdl-2014" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_10.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_11.jpg" rel="gal-gdl-2014" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_11.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_12.jpg" rel="gal-gdl-2014" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_12.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_13.jpg" rel="gal-gdl-2014" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_13.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_14.jpg" rel="gal-gdl-2014" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_14.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_15.jpg" rel="gal-gdl-2014" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_15.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_16.jpg" rel="gal-gdl-2014" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_16.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_17.jpg" rel="gal-gdl-2014" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_17.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_18.jpg" rel="gal-gdl-2014" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_18.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_19.jpg" rel="gal-gdl-2014" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_19.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_20.jpg" rel="gal-gdl-2014" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_20.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_21.jpg" rel="gal-gdl-2014" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_21.jpg" alt="" /></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_22.jpg" rel="gal-gdl-2014" class="galerias-link"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/carreras/2014/gdl/gdl_2014_22.jpg" alt="" /></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
	(function($) {
		$('.countdown').downCount({
			date: '10/25/2015 07:00:00',
			offset: -5
		});
		$('.countdown2').downCount({
			date: '11/08/2015 07:00:00',
			offset: -5
		});
		$('.countdown3').downCount({
			date: '<?=$info['fecha_evento']?>',
			offset: -5
		});
		/*$('#slider').nivoSlider({
			controlNav: false,
			pauseOnHover: false,
			pauseTime: 3000
		});
		$('#slidergym').nivoSlider({
			pauseOnHover: false,
			pauseTime: 4000
		});*/
		$('#tab-container').easytabs();
		$(".rutas").colorbox({
			rel:'rutas',
			width:'80%',
			height:'80%'
		});
		$(".generales-link").colorbox({
			iframe:true,
			width:"50%",
			height:"80%"
		});
		$(".fut-link").colorbox({
			iframe:true,
			width:"70%",
			height:"80%"
		});
		$(".galerias-link").colorbox({});
		$("#slider").easySlider({
			auto: true, 
			continuous: true
		});
	})(jQuery);
</script>