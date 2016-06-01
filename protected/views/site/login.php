
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">TELCEL</h1>

            </div>
            <h3>Circuito Sindicato Telcel</h3>
           
            <p>Acceso</p>
               <?php $form=$this->beginWidget('CActiveForm', array(
                    'id'=>'login-form',
                    'enableClientValidation'=>true,
                    'clientOptions'=>array(
                        'validateOnSubmit'=>true,
                    ),
                    'htmlOptions' => array('class' => 'form-horizontal', 'role'=>'form'),
                )); ?>
                <div class="form-group">
                   
                    <?php echo $form->textField($model,'username',array('type'=>'email','class'=>'form-control','placeholder'=>'usuario')); ?>
                     <?php echo $form->error($model,'username'); ?>
                </div>
                <div class="form-group">
                    <?php echo $form->passwordField($model,'password',array('class'=>'form-control','placeholder'=>'password')); ?>
                                <?php echo $form->error($model,'password'); ?>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Ingresar</button>

               
           <?php $this->endWidget(); ?>
            <p class="m-t"> <small>csdsoporte 2016</small> </p>
        </div>
    </div>