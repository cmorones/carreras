<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Circuito Sindicato Telcel</title>
	

	   <?php
        error_reporting(0);

		$baseUrl = Yii::app()->request->baseUrl; 
		$cs = Yii::app()->getClientScript();
		Yii::app()->clientScript->registerCoreScript('jquery');
        $cs->registerCssFile($baseUrl.'/css/bootstrap.min.css');
        $cs->registerCssFile($baseUrl.'/css/telcel-styles.css');
        $cs->registerCssFile($baseUrl.'/css/easy-slider.css');
        $cs->registerCssFile($baseUrl.'/css/default.css');
       // $cs->registerCssFile($baseUrl.'/css/main.css');
        $cs->registerCssFile($baseUrl.'/css/colorbox.css');
        $cs->registerCssFile($baseUrl.'/css/jquery-confirm.css');
        $cs->registerCssFile($baseUrl.'/css/themes/alertify.core.css');
        $cs->registerCssFile($baseUrl.'/css/themes/alertify.default.css');
        
       ?>
</head>


<body id="top">


<?php echo $content; ?>
<div id="footer">
		
</div><!-- footer -->

</body>


	<!-- Javascript -->


            <?php

        //$cs->registerScriptFile($baseUrl.'/js/jquery-1.10.2.min.js');
        //$cs->registerScriptFile($baseUrl.'/js/jspdf/jquery-1.7.1.min.js');
        $cs->registerScriptFile($baseUrl.'js/jquery-1.11.1.min.js');
        $cs->registerScriptFile($baseUrl.'/js/jquery.validate.js');
        $cs->registerScriptFile($baseUrl.'/js/jquery.downcount.js');
        $cs->registerScriptFile($baseUrl.'/js/jquery.easytabs.js');
        $cs->registerScriptFile($baseUrl.'/js/jquery.colorbox.js');
        $cs->registerScriptFile($baseUrl.'/js/easy-slider.js');
        $cs->registerScriptFile($baseUrl.'/js/functions.js');
        
  ?>


</html>
