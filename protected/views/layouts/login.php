<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
	<title>Acceso | Sistema Institucional de Gestión Documental</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="KingAdmin Dashboard">
	<meta name="author" content="The Develovers">

	<!-- CSS -->
	

	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/kingadmin-favicon144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/kingadmin-favicon114x114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/kingadmin-favicon72x72.png">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="assets/ico/kingadmin-favicon57x57.png">
	<link rel="shortcut icon" href="assets/ico/favicon.png">


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  
     <?php
        error_reporting(0);
        $baseUrl = Yii::app()->request->baseUrl; 
        $cs = Yii::app()->getClientScript();
        //Yii::app()->clientScript->registerCoreScript('jquery');
        $cs->registerCssFile($baseUrl.'/css/bootstrap.min.css');
        $cs->registerCssFile($baseUrl.'/css/font-awesome.min.css');
        $cs->registerCssFile($baseUrl.'/css/animate.css');
        $cs->registerCssFile($baseUrl.'/css/style.css');
       
       ?>
</head>

<body class="gray-bg">

    

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

    
    <?php echo $content; ?>  
 </body>

</html>