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
-- Table structure for table `Clientes`
--

DROP TABLE IF EXISTS `Clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Clientes` (
  `ID_CLIENTE` int(11) NOT NULL AUTO_INCREMENT,
  `NM_CLIENTE` varchar(100) NOT NULL,
  `DS_ENDEREÇO` varchar(150) NOT NULL,
  `NR_TELEFONE` varchar(25) NOT NULL,
  `DS_EMAIL` varchar(50) NOT NULL,
  `DS_CPF_CNPJ` varchar(45) NOT NULL,
  PRIMARY KEY (`ID_CLIENTE`)
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Clientes`
--

LOCK TABLES `Clientes` WRITE;
/*!40000 ALTER TABLE `Clientes` DISABLE KEYS */;
INSERT INTO `Clientes` VALUES (39,'Mateus','ttgatam@gmail.com','(52) 55464-5456','ttgatam@gmail.com','cpf'),(63,'mateus','rua da palha','34343434','tt@gmail.com','23.323.232/3232-23'),(65,'isac','rua da palha','9988988989','tt@gmail.com','12.211.221/1221-12'),(66,'Ivia','Rua da palha','98491644','tt@gmail.com','22.121.212/1212-12'),(68,'josue','crasto','(79) 99648-1886','josuepereira_cruz@hotmail.com','cpf'),(69,'mirelly2','byhvfghd','(00) 0 0000-0000','mirelly2@gmail.com','01.000.000/0000-00'),(71,'josueD','EHEWHESH','(52) 3 2521-5151','njoojno@GMAIL.COM','52.452.452/5552-51'),(72,'admin','rua B','(00) 0 0000-0000','admin@gmail.com',''),(73,'gff','tthyt@gmail.com','(58) 55678-5865','tthyt@gmail.com','cpf'),(74,'ivia','rua da palha','(79) 9 9628-2051','ivia3@gmail.com','67.868.790/9787-65'),(80,'mirelly lynn','b12','(24) 1 5654-8696','mosgtra@gmail.com','55.585.524/1566-65'),(112,'sdxzfzasdf','fdsg43q','(12) 4 3758-4732','tt@gmail.com','56.544.645/5454-66'),(113,'fgdfg','sfy24','(64) 3 1161-3136','fdsajfdj@gmail.com','cpf'),(114,'cxhhgh','dhr','(54) 2 3523-5235','kjxzk@gmail.com','cnpj'),(115,'jhbsadhjh','fsdsfsd','(54) 6 4565-4654','tt@gmail.com','cpf'),(116,'mateus','rua da palha','(43) 4 6663-2737','tt@gmail.com','cpf'),(117,'mateus','rua da palha','(63) 5 2421-3413','tt@gmail.com','74.221.415/1341-45'),(118,'mateus','Rua da palha','(25) 5 5252-5252','tt@gmail.com','cpf');
/*!40000 ALTER TABLE `Clientes` ENABLE KEYS */;
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
