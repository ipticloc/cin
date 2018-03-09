-- MySQL dump 10.13  Distrib 5.7.17, for Linux (x86_64)
--
-- Host: localhost    Database: CIN_DB
-- ------------------------------------------------------
-- Server version	5.7.17-0ubuntu0.16.04.1

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
-- Table structure for table `Clientes`
--

DROP TABLE IF EXISTS `Clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Clientes` (
  `ID_CLIENTE` int(11) NOT NULL AUTO_INCREMENT,
  `NM_CLIENTE` varchar(100) NOT NULL,
  `DS_ENDEREÇO` varchar(150) DEFAULT NULL,
  `NR_TELEFONE` varchar(10) NOT NULL,
  `DS_EMAIL` varchar(50) DEFAULT NULL,
  `DS_CPF_CNPJ` varchar(45) NOT NULL,
  PRIMARY KEY (`ID_CLIENTE`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Clientes`
--

LOCK TABLES `Clientes` WRITE;
/*!40000 ALTER TABLE `Clientes` DISABLE KEYS */;
INSERT INTO `Clientes` VALUES (2,'Fabsoft','Rua D','8988588','fabsoft@gmail.com','02365478298'),(3,'Mysoft','rua x','88888888','mysoft@gmail.com','02365478298'),(5,'Multiserv','multiserv@gmail.com','32452000','multiserv@gmail.com','15824987985');
/*!40000 ALTER TABLE `Clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ItensPedido`
--

DROP TABLE IF EXISTS `ItensPedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ItensPedido` (
  `ID_PEDIDO` int(11) NOT NULL,
  `SQ_PEDIDO` smallint(6) NOT NULL,
  `VL_QUANTIDADE` smallint(6) NOT NULL,
  `DS_ITEM` varchar(150) NOT NULL,
  `DS_COR` varchar(50) NOT NULL,
  `DT_CADASTRO` datetime NOT NULL,
  `SL_CORTE` char(1) NOT NULL COMMENT 'Posiveis Valores\nA = Anguardando\nE = Enxegução\nF = Finalizado',
  `ST_ETIQUETA` char(1) NOT NULL COMMENT 'Posiveis Valores\nA = Anguardando\nE = Enxegução\nF = Finalizado',
  `ST_SILK` char(1) NOT NULL COMMENT 'Posiveis Valores\nA = Anguardando\nE = Enxegução\nF = Finalizado',
  `ST_BORDADO` char(1) NOT NULL COMMENT 'Posiveis Valores\nA = Anguardando\nE = Enxegução\nF = Finalizado',
  `ID_TIPOMATERIAL` int(11) NOT NULL,
  `DS_PREPARACAO` char(1) DEFAULT NULL,
  PRIMARY KEY (`SQ_PEDIDO`,`ID_PEDIDO`),
  KEY `fk_ItensPedido_Pedidos1_idx` (`ID_PEDIDO`),
  KEY `fk_ItensPedido_TiposMateriais1_idx` (`ID_TIPOMATERIAL`),
  CONSTRAINT `fk_ItensPedido_Pedidos1` FOREIGN KEY (`ID_PEDIDO`) REFERENCES `Pedidos` (`ID_PEDIDO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ItensPedido_TiposMateriais1` FOREIGN KEY (`ID_TIPOMATERIAL`) REFERENCES `TiposMateriais` (`ID_TIPOMATERIAL`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ItensPedido`
--

LOCK TABLES `ItensPedido` WRITE;
/*!40000 ALTER TABLE `ItensPedido` DISABLE KEYS */;
INSERT INTO `ItensPedido` VALUES (1,1,12,'Camisa','Cinza','2017-03-14 00:00:00','1','1','2','1',1,'1'),(2,6,65,'blusa','lilaz','2017-03-14 00:00:00','1','2','1','1',1,'3');
/*!40000 ALTER TABLE `ItensPedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Pedidos`
--

DROP TABLE IF EXISTS `Pedidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Pedidos` (
  `ID_PEDIDO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_CLIENTE` int(11) DEFAULT NULL,
  `DT_PEDIDO` datetime NOT NULL,
  PRIMARY KEY (`ID_PEDIDO`),
  KEY `FK_CLIENTE_idx` (`ID_CLIENTE`),
  CONSTRAINT `FK_CLIENTE` FOREIGN KEY (`ID_CLIENTE`) REFERENCES `Clientes` (`ID_CLIENTE`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Pedidos`
--

LOCK TABLES `Pedidos` WRITE;
/*!40000 ALTER TABLE `Pedidos` DISABLE KEYS */;
INSERT INTO `Pedidos` VALUES (1,3,'2017-03-14 00:00:00'),(2,2,'2017-03-14 00:00:00'),(3,5,'2017-03-21 00:00:00');
/*!40000 ALTER TABLE `Pedidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TiposMateriais`
--

DROP TABLE IF EXISTS `TiposMateriais`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TiposMateriais` (
  `ID_TIPOMATERIAL` int(11) NOT NULL AUTO_INCREMENT,
  `DS_TIPOMATERIAL` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_TIPOMATERIAL`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TiposMateriais`
--

LOCK TABLES `TiposMateriais` WRITE;
/*!40000 ALTER TABLE `TiposMateriais` DISABLE KEYS */;
INSERT INTO `TiposMateriais` VALUES (1,'Teste'),(5,'ccc');
/*!40000 ALTER TABLE `TiposMateriais` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Usuario`
--

DROP TABLE IF EXISTS `Usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Usuario` (
  `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT,
  `DS_USUARIO` varchar(85) NOT NULL,
  `DS_SENHA` varchar(20) NOT NULL,
  `DS_EMAIL` varchar(45) NOT NULL,
  PRIMARY KEY (`ID_USUARIO`),
  UNIQUE KEY `DS_USUARIO_UNIQUE` (`DS_USUARIO`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Usuario`
--

LOCK TABLES `Usuario` WRITE;
/*!40000 ALTER TABLE `Usuario` DISABLE KEYS */;
INSERT INTO `Usuario` VALUES (1,'fabio','fabio','fabio@gmail.com'),(2,'josue','1234','josue@gmail.com'),(4,'my','1234','my@gmail.com'),(5,'Carla','1234','fabio@gmail.com'),(6,'Mateus','mateus123','mateus@gmail.com');
/*!40000 ALTER TABLE `Usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-12 10:07:39
