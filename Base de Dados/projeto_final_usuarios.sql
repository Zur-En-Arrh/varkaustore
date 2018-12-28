-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: projeto_final
-- ------------------------------------------------------
-- Server version	5.7.14

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
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (37,'Diana Prince','Mulher Maravilha','princesa@themyscira.com','c7efdebdb53a654eea336cb0f0d8520d',0),(33,'Jack White','Clown Prince of Crime','joker@arkham.com','858d37138aeeb37dbde191bdb32401ad',0),(34,'Barbara','abcds','email@generico.com','eb341820cd3a3485461a61b1e97d31b1',0),(31,'LuÃ­s Carlos Araujo Motta','cpfm','caiopfmota@gmail.com','66c9c83b62f17f7b652d6cbee21ce1c9',0),(30,'JoÃ£o Paulo Costa Rua','ParanauerjCV VPP','jptinirjbrlate@gmail.com','24500fa6ecaeb8300905727802af3081',0),(29,'Paozinu Doce','PararÃ¡','ricardumartell@gmail.com','af55fdf96a69ef09d1c806ebb3ad0d40',0),(28,'Lucas Vale da Silva','Eu','lucasbrls12@gmail.com','5d703c921df9518d8b60226f01a82b95',0),(27,'Fabricio','Frabissu Frabulosa','fabricioxd34@gmail.com','7c4927d9efd64ea7f2be8fb6c8c133af',0),(26,'Ana','ana','jjjjjj@gmail.com','1bd0c1893cb7bcb3ffd191412030ab11',0),(25,'joao Guilherme','JGzincvvpp','joaoguilhermealberto@gmail.com','d4fbb87bd0f9d434817799c1caf58ad7',0),(24,'Matheus ZachÃ© GonÃ§alves','BatmanIncRJ','matheuszache2@gmail.com','8dd71093af69cffa73a6ab9a7970f069',0),(38,'Matheus','admin_matheus','matheus-zache@live.com','9bfc74ff9e20013b89b6bdef2b365c5b',1),(39,'Wally West','The Flash III','wally@central.com','517b1bca2e94a44ad531c40960fcc9f4',0);
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

-- Dump completed on 2017-11-28 19:05:28
