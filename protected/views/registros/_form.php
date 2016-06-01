<?php
	$empleado = Yii::app()->getSession()->get('emp');
?>
<div class="telcel-wrapper">
    <div class="telcel-container"> 
        <div id="sus" class="telcel-sus telcel-section">
            <div class="telcel-sus-cont">
                <h2 class="header">INSCRÍBETE AQUÍ</h2>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'registros-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal',
     'role'=>'form'),

)); ?>

	

	<div class="row">

		<div class="col-sm-6">


			
			<?php echo $form->labelEx($model,'carrera'); ?>
			<?php 

			$resultCarreras = CatCarreras::model()->findAll('status=1');
	        $carreras = array();
	        $carreras['falso'] = 'Seleccionar';
	        foreach ($resultCarreras as $key => $value) {
	            $carreras[$value->id] = "$value->ciudad";
	        }
			echo $form->dropDownList($model, 'carrera', $carreras);


			?>
			<?php echo $form->error($model,'carrera'); ?>
		</div>

		<div class="col-sm-6">

		<?php echo $form->labelEx($model,'distancia'); ?>
		<?php 

		$resultDistancia = CatDistancia::model()->findAll('tipo=1');
        $carrerasdistancia = array();
        $distancia['falso'] = 'Seleccionar';
        foreach ($resultDistancia as $key => $value) {
            $distancia[$value->id] = "$value->nombre";
        }
		
		echo $form->dropDownList($model, 'distancia', $distancia);
		?>
		<?php echo $form->error($model,'distancia'); ?>
		</div>
	</div>

	<!--<div class="row">

		<div class="col-sm-6">
		</div>
		<div class="col-sm-6">
		</div>

	</div>

	-->

	<div class="row">

		<div class="col-sm-6">
		<?php echo $form->labelEx($model,'id_empleado'); ?>
		<?php echo $form->textField($model,'id_empleado',array('value'=>$empleado,'size'=>10,'maxlength'=>100, 'readonly'=>'readonly')); ?>
		<?php echo $form->error($model,'id_empleado'); ?>
		</div>
		<div class="col-sm-6">
		<?php echo $form->labelEx($model,'sindicalizado'); ?>
		<?php 

		$sindicalizado['falso']="Seleccionar";
		$sindicalizado[0]="NO";
		$sindicalizado[1]="SI";

		
		echo $form->dropDownList($model, 'sindicalizado', $sindicalizado);
		 ?>
		<?php echo $form->error($model,'sindicalizado'); ?>
		</div>

	</div>

	<div class="row">

		<div class="col-sm-6">
		<?php echo $form->hiddenField($model,'tipo_usuario',array('value'=>1)); ?>
		</div>
		<div class="col-sm-6">
		<?php echo $form->hiddenField($model,'id_invitado',array('value'=>0)); ?>
		</div>

	</div>

	<div class="row">

		<div class="col-sm-6">
			<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>25,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nombre'); ?>
		</div>
		<div class="col-sm-6">
			<?php echo $form->labelEx($model,'apellido_paterno'); ?>
		<?php echo $form->textField($model,'apellido_paterno',array('size'=>25,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'apellido_paterno'); ?>
		</div>

	</div>

	<div class="row">

		<div class="col-sm-6">
		<?php echo $form->labelEx($model,'apellido_materno'); ?>
		<?php echo $form->textField($model,'apellido_materno',array('size'=>25,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'apellido_materno'); ?>
		</div>
		<div class="col-sm-6">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>30,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email'); ?>
		</div>

	</div>

	<div class="row">

		<div class="col-sm-6">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php
                        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                            'model'=>$model,
                            'attribute'=>'fecha',


                            // additional javascript options for the date picker plugin
                            'options' => array(
                                'dateFormat'=>'yy-mm-dd',
                                'showAnim' => 'fold',
                                'changeMonth' => true,
                                'changeYear' => true,
                                'monthNames' => array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'),
                                'monthNamesShort' => array('Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'),
                                'dayNames' => array('Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'),
                                'dayNamesShort' => array('Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'),
                                'dayNamesMin' => array('Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'),
                                'yearRange' => '1970:2016'
                            ),
                            'htmlOptions' => array(
                                'style' => 'height:30px;width:100px;',
                                'id'=>'fecha',
                                //'class'=>'span12'
                               
                            ),
                        ));
                      
 ?>
		<?php echo $form->error($model,'fecha'); ?>
		</div>
		<div class="col-sm-6">
		<?php echo $form->labelEx($model,'sexo'); ?>
		<?php 

		$sexo['falso']="Seleccionar";
		$sexo[1]="MASCULINO";
		$sexo[2]="FEMENINO";
		
		echo $form->dropDownList($model, 'sexo', $sexo);


		?>
		<?php echo $form->error($model,'sexo'); ?>
		</div>

	</div>

	<div class="row">

		<div class="col-sm-6">
		<?php echo $form->labelEx($model,'ciudad'); ?>
		<?php echo $form->textField($model,'ciudad',array('size'=>30,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ciudad'); ?>
		</div>
		<div class="col-sm-6">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>30,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'telefono'); ?>
		</div>

	</div>

	<div class="row">

		<div class="col-sm-6">
			<?php echo $form->hiddenField($model,'edad',array('value'=>0)); ?>
		</div>
		<div class="col-sm-6">
		<?php echo $form->hiddenField($model,'status',array('value'=>1)); ?>
		<?php echo $form->hiddenField($model,'paypal',array('value'=>0)); ?>
		</div>

	</div>


	<div class="row">

		<div class="col-sm-6">
		<?php echo $form->labelEx($model,'talla'); ?>
		<?php 
		$talla['falso']="Seleccionar";
		$talla[1]="CHICA";
		$talla[2]="MEDIANA";
		$talla[3]="GRANDE";
		echo $form->dropDownList($model, 'talla', $talla);

		?>
		<?php echo $form->error($model,'talla'); ?>
		</div>
		<div class="col-sm-6">
		<?php echo $form->labelEx($model,'dorsal'); ?>
		<?php echo $form->textField($model,'dorsal'); ?>
		<?php echo $form->error($model,'dorsal'); ?>
		</div>

	</div>
	

  <div class="col-lg-2">
  </div>
  <div class="col-lg-2">
  </div> 
  <div class="col-lg-2">
     <?php echo CHtml::submitButton($model->isNewRecord ? 'Generar' : 'Guardar',array('id'=>"btn",'class'=>"agregar btn-sm btn btn-info pull-left")); ?>
                                                                                                                  
     
  </div> 
  <div class="col-lg-2">
  </div> 
  <div class="col-lg-2">
  </div> 
  <div class="col-lg-2">
  </div>                                                            
                                          
    

                                                         

	
<?php $this->endWidget(); ?>

</div><!-- form -->

</div>
        </div>
    </div>  
</div>
<div class="col-lg-4">
</div>
<div class="col-lg-4">
 <div class="links-otros">
	  
      <a href="<?php echo CController::createUrl('catCarreras/create'); ?>" class="btn-sm btn btn-info pull-left"><i class="glyphicon glypicon-plus"></i>Inscribir a un Invitado</a>
      
      <a href="<?php echo CController::createUrl('catCarreras/create'); ?>" class="btn-sm btn btn-info pull-left"><i class="glyphicon glypicon-plus"></i>Inscribir a un Niño</a>
</div>
                        
</div>