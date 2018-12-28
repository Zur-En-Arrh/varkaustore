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
-- Table structure for table `plataformas_jogos`
--

DROP TABLE IF EXISTS `plataformas_jogos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plataformas_jogos` (
  `plataforma` varchar(20) NOT NULL,
  `jogo` int(11) NOT NULL,
  PRIMARY KEY (`plataforma`,`jogo`),
  KEY `jogo` (`jogo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plataformas_jogos`
--

LOCK TABLES `plataformas_jogos` WRITE;
/*!40000 ALTER TABLE `plataformas_jogos` DISABLE KEYS */;
INSERT INTO `plataformas_jogos` VALUES ('PC',1),('PC',2),('PC',4),('PC',5),('PC',6),('PC',8),('PC',9),('PC',10),('PC',14),('PC',15),('PC',16),('PC',17),('PC',18),('PC',19),('PC',21),('PC',22),('PC',23),('PC',24),('PC',25),('PC',26),('PC',27),('PC',28),('PC',29),('PC',33),('PC',34),('PC',46),('PS3',2),('PS3',5),('PS3',6),('PS3',7),('PS3',9),('PS3',14),('PS3',15),('PS3',18),('PS3',19),('PS3',20),('PS3',22),('PS3',23),('PS3',26),('PS3',27),('PS3',28),('PS3',29),('PS3',43),('PS3',44),('PS4',1),('PS4',4),('PS4',5),('PS4',8),('PS4',10),('PS4',12),('PS4',14),('PS4',15),('PS4',17),('PS4',19),('PS4',23),('PS4',24),('PS4',25),('PS4',26),('PS4',29),('PS4',41),('PS4',45),('Switch',11),('Switch',15),('Switch',30),('Switch',31),('Switch',42),('WiiU',11),('WiiU',30),('WiiU',31),('WiiU',32),('WiiU',34),('WiiU',35),('Xbox360',2),('Xbox360',5),('Xbox360',6),('Xbox360',7),('Xbox360',9),('Xbox360',14),('Xbox360',15),('Xbox360',18),('Xbox360',19),('Xbox360',20),('Xbox360',23),('Xbox360',26),('Xbox360',27),('Xbox360',28),('Xbox360',29),('Xbox360',33),('XboxOne',1),('XboxOne',3),('XboxOne',4),('XboxOne',5),('XboxOne',8),('XboxOne',12),('XboxOne',13),('XboxOne',14),('XboxOne',15),('XboxOne',16),('XboxOne',17),('XboxOne',19),('XboxOne',21),('XboxOne',22),('XboxOne',25),('XboxOne',26),('XboxOne',29),('XboxOne',37),('XboxOne',46);
/*!40000 ALTER TABLE `plataformas_jogos` ENABLE KEYS */;
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
