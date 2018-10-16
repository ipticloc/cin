-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: CIN_DB
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

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
-- Table structure for table `ItensPedido`
--

DROP TABLE IF EXISTS `ItensPedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ItensPedido` (
  `ID_ITENSPEDIDO` bigint(20) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`ID_ITENSPEDIDO`,`ID_PEDIDO`,`SQ_PEDIDO`),
  KEY `fk_ItensPedido_Pedidos1_idx` (`ID_PEDIDO`),
  KEY `fk_ItensPedido_TiposMateriais1_idx` (`ID_TIPOMATERIAL`),
  CONSTRAINT `fk_ItensPedido_Pedidos1` FOREIGN KEY (`ID_PEDIDO`) REFERENCES `Pedidos` (`ID_PEDIDO`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_ItensPedido_TiposMateriais1` FOREIGN KEY (`ID_TIPOMATERIAL`) REFERENCES `TiposMateriais` (`ID_TIPOMATERIAL`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ItensPedido`
--

LOCK TABLES `ItensPedido` WRITE;
/*!40000 ALTER TABLE `ItensPedido` DISABLE KEYS */;
INSERT INTO `ItensPedido` VALUES (8,22,223,32,'ddd','dd','2017-09-21 00:00:00','1','2','2','2',35,'3'),(11,22,45,542,'MOSTRA','AZUL','2018-02-07 00:00:00','1','1','1','1',41,'1'),(12,25,334,5,'gwgbswn','va','2018-03-21 00:00:00','1','1','1','1',35,'1'),(13,35,422,43,'reww','sfds','2018-04-05 00:00:00','1','1','1','1',35,'1');
/*!40000 ALTER TABLE `ItensPedido` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-06  8:41:53
