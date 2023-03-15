-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: acme
-- ------------------------------------------------------
-- Server version	5.7.17-log

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
-- Table structure for table `tbl_conductores`
--

DROP TABLE IF EXISTS `tbl_conductores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_conductores` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `num_cedula` bigint(10) NOT NULL,
  `primer_nombre` varchar(50) NOT NULL,
  `segundo_nombre` varchar(50) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `direccion` varchar(300) NOT NULL,
  `telefono` bigint(15) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_conductores`
--

LOCK TABLES `tbl_conductores` WRITE;
/*!40000 ALTER TABLE `tbl_conductores` DISABLE KEYS */;
INSERT INTO `tbl_conductores` VALUES (1,1031643818,'Jesus','Mateo','Sanchez Diaz','Manzana 14 Casa 11',3243321141,'Girardot'),(5,1927362842,'Carlos','Antonio','Velez Velez','Manzana 30 Casa 10',302917382,'Bogota'),(6,1009372832,'Jose','Manuel','Alvarado Dominguez','Manzana 5 Casa 40',3098221147,'Medellin'),(7,1000384305,'Maria','Camila','Sanchez Diaz','Manzana 11 Casa 20',3246121151,'Barranquilla'),(8,79057182,'Jesus','Antonio','Sanchez Sanchez','Manzana 30 Casa 45',3908221175,'Bucaramanga'),(9,52560022,'Mary','Yolima','Diaz Cortes','Manzana 72 Casa 28',3143204180,'Cali');
/*!40000 ALTER TABLE `tbl_conductores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_propietarios`
--

DROP TABLE IF EXISTS `tbl_propietarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_propietarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `num_cedula` bigint(10) NOT NULL,
  `primer_nombre` varchar(50) NOT NULL,
  `segundo_nombre` varchar(50) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `direccion` varchar(300) NOT NULL,
  `telefono` bigint(15) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_propietarios`
--

LOCK TABLES `tbl_propietarios` WRITE;
/*!40000 ALTER TABLE `tbl_propietarios` DISABLE KEYS */;
INSERT INTO `tbl_propietarios` VALUES (2,1982631975,'Angel','Andres','Sanchez Diaz','Manzana 25 Casa 11',324762019,'Casanare'),(3,1009372752,'Victor','Manuel','Ramirez Yate','Manzana 15 Casa 41',3887291024,'Anapoima'),(4,1729372912,'Elian','Alberto','Torres Mendez','Manzana 58 Casa 23',3826490871,'Agua de Dios');
/*!40000 ALTER TABLE `tbl_propietarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_vehiculos`
--

DROP TABLE IF EXISTS `tbl_vehiculos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_vehiculos` (
  `id_vehiculo` int(11) NOT NULL AUTO_INCREMENT,
  `placa` varchar(10) NOT NULL,
  `color` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `tipo_vehiculo` varchar(30) NOT NULL,
  `id_conductor_vehiculo` int(11) NOT NULL,
  `id_propietario_vehiculo` int(11) NOT NULL,
  PRIMARY KEY (`id_vehiculo`),
  KEY `id_conductor_vehiculo_idx` (`id_conductor_vehiculo`),
  KEY `id_propietario_vehiculo_idx` (`id_propietario_vehiculo`),
  CONSTRAINT `id_conductor_vehiculo` FOREIGN KEY (`id_conductor_vehiculo`) REFERENCES `tbl_conductores` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id_propietario_vehiculo` FOREIGN KEY (`id_propietario_vehiculo`) REFERENCES `tbl_propietarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_vehiculos`
--

LOCK TABLES `tbl_vehiculos` WRITE;
/*!40000 ALTER TABLE `tbl_vehiculos` DISABLE KEYS */;
INSERT INTO `tbl_vehiculos` VALUES (1,'SMS-123','Blanco Perla','Toyota','Particular',6,2),(2,'GGG-555','Rojo Macizo','Kia','Publico',7,3);
/*!40000 ALTER TABLE `tbl_vehiculos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'acme'
--

--
-- Dumping routines for database 'acme'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-14 20:21:38
