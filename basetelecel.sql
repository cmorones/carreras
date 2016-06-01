-- MySQL dump 10.13  Distrib 5.6.28, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: correyjuegadb
-- ------------------------------------------------------
-- Server version	5.6.28-0ubuntu0.15.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cat_carreras`
--

DROP TABLE IF EXISTS `cat_carreras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cat_carreras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ciudad` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `fecha_reg` datetime DEFAULT NULL,
  `mostrar` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_carreras`
--

LOCK TABLES `cat_carreras` WRITE;
/*!40000 ALTER TABLE `cat_carreras` DISABLE KEYS */;
INSERT INTO `cat_carreras` VALUES (1,'Puebla',1,'2016-05-31 00:00:00',0),(2,'QUERÉTARO',1,'0000-00-00 00:00:00',1),(3,'CDMX',2,'0000-00-00 00:00:00',0);
/*!40000 ALTER TABLE `cat_carreras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_distancias`
--

DROP TABLE IF EXISTS `cat_distancias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cat_distancias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_distancias`
--

LOCK TABLES `cat_distancias` WRITE;
/*!40000 ALTER TABLE `cat_distancias` DISABLE KEYS */;
INSERT INTO `cat_distancias` VALUES (1,'5 KM',1),(2,'10 KM',1);
/*!40000 ALTER TABLE `cat_distancias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalle_carrera`
--

DROP TABLE IF EXISTS `detalle_carrera`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detalle_carrera` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_carrera` varchar(255) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `subtitulo` varchar(255) DEFAULT NULL,
  `fecha` varchar(255) DEFAULT NULL,
  `distancia` varchar(255) DEFAULT NULL,
  `horario` varchar(255) DEFAULT NULL,
  `cupo` int(11) DEFAULT NULL,
  `rutaImg` varchar(255) DEFAULT NULL,
  `rutaKit` varchar(255) DEFAULT NULL,
  `rutaFile` varchar(255) DEFAULT NULL,
  `img_paisaje` varchar(255) DEFAULT NULL,
  `fecha_evento` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `carrerar_fk` (`id_carrera`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalle_carrera`
--

LOCK TABLES `detalle_carrera` WRITE;
/*!40000 ALTER TABLE `detalle_carrera` DISABLE KEYS */;
INSERT INTO `detalle_carrera` VALUES (1,'2','2a. Carrera Sindicato Telcel Querétaro 5 y 10 Km 5 de Junio de 2016','2a Carrera','Domingo 5 de Junio de 2016','5K y 10K','',NULL,'ruta_qro.jpg','kit_qro.jpg','convocatoria_qro.pdf','imagen-queretaro.jpg','07/11/2016 08:00:00');
/*!40000 ALTER TABLE `detalle_carrera` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ninos`
--

DROP TABLE IF EXISTS `ninos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ninos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `carrera` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido_paterno` varchar(100) NOT NULL,
  `apellido_materno` varchar(100) NOT NULL,
  `edad` varchar(10) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `talla` varchar(100) NOT NULL,
  `id_empleado` varchar(100) DEFAULT NULL,
  `distancia` varchar(10) DEFAULT NULL,
  `nacimiento` varchar(15) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1106 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ninos`
--

LOCK TABLES `ninos` WRITE;
/*!40000 ALTER TABLE `ninos` DISABLE KEYS */;
INSERT INTO `ninos` VALUES (1099,'PUEBLA','cesar2','dasd','asdasd','edad_10_a_','M','Grande','1234','',NULL,'2016-04-28 14:48:02');
/*!40000 ALTER TABLE `ninos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registro2s`
--

DROP TABLE IF EXISTS `registro2s`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registro2s` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `carrera` varchar(100) NOT NULL,
  `distancia` varchar(10) NOT NULL,
  `tipo_usuario` varchar(100) NOT NULL,
  `id_empleado` varchar(100) NOT NULL,
  `id_invitado` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido_paterno` varchar(100) NOT NULL,
  `apellido_materno` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `edad` int(10) NOT NULL,
  `sexo` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `talla` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `paypal` varchar(100) NOT NULL,
  `sindicalizado` varchar(5) DEFAULT NULL,
  `dorsal` varchar(6) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6643 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registro2s`
--

LOCK TABLES `registro2s` WRITE;
/*!40000 ALTER TABLE `registro2s` DISABLE KEYS */;
INSERT INTO `registro2s` VALUES (6637,'PUEBLA','10K','empleado','1234','','cesar','morones','cesar','cesar.morones1@gmail.com',11071978,'M','PUEBLA','54217344','Chica','NA','','SI','001','2016-04-28 14:28:17'),(6640,'PUEBLA','5K','invitado','','1234','Cesar','Morones','Sanchez','ms_ces@hotmail.com',11,'M','puebla','5563196614','Grande','NA','',NULL,'002','2016-04-28 15:14:03'),(6641,'2','1','','','','Cesar','Morones','Sanchez','cesar.morones1@gmail.com',23,'Masculino','Mexico','5563196614','1','','','0',NULL,'2016-01-01 06:00:00'),(6642,'2','2','','1234','','Cesar ','Morones','Sanchez','ms_ces@hotmail.com',23,'Masculino','prueba','23345678','1','','','1',NULL,'2016-01-01 06:00:00');
/*!40000 ALTER TABLE `registro2s` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registros`
--

DROP TABLE IF EXISTS `registros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registros` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `carrera` int(10) NOT NULL,
  `distancia` int(10) NOT NULL,
  `tipo_usuario` int(10) NOT NULL,
  `id_empleado` varchar(100) NOT NULL,
  `id_invitado` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido_paterno` varchar(100) NOT NULL,
  `apellido_materno` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `edad` int(10) NOT NULL,
  `sexo` int(10) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `talla` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `paypal` varchar(100) NOT NULL,
  `sindicalizado` int(10) NOT NULL,
  `dorsal` int(10) NOT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6646 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registros`
--

LOCK TABLES `registros` WRITE;
/*!40000 ALTER TABLE `registros` DISABLE KEYS */;
INSERT INTO `registros` VALUES (6643,0,0,1,'1234','','Cesar','Morones','Sanchez','cesar.morones1@gmail.com',0,0,'Mexico','5563196614',0,0,'',0,0,'2016-05-31'),(6644,0,0,1,'1234','','Cesar','Morones','Sanchez','cesar.morones1@gmail.com',0,0,'MÉXICO','5563196614',0,0,'',0,0,'2016-05-31'),(6645,0,0,1,'1234','','Cesar','Morones','Sanchez','cesar.morones1@gmail.com',0,0,'MEXICO','4444444',0,0,'',0,0,'2016-05-03');
/*!40000 ALTER TABLE `registros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sliders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(255) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sliders`
--

LOCK TABLES `sliders` WRITE;
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_empleado`
--

DROP TABLE IF EXISTS `tipo_empleado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_empleado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_empleado`
--

LOCK TABLES `tipo_empleado` WRITE;
/*!40000 ALTER TABLE `tipo_empleado` DISABLE KEYS */;
INSERT INTO `tipo_empleado` VALUES (1,'Empleado'),(2,'Invitado'),(3,'Niño');
/*!40000 ALTER TABLE `tipo_empleado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `perfil` int(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `session` varchar(255) DEFAULT NULL,
  `status` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Cesar Morones','cesar.morones1@gmail.com',1,'cesar.morones','8aeaeda38003325ceb949376c7a83ab2','536ac621d3e2e5.03477494',1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-31 20:01:52
