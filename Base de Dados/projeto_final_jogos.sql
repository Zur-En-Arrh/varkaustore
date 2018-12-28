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
-- Table structure for table `jogos`
--

DROP TABLE IF EXISTS `jogos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jogos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `publicadora` varchar(40) NOT NULL,
  `preco` decimal(8,0) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `foto` varchar(40) NOT NULL,
  `vendedor` varchar(50) NOT NULL DEFAULT 'loja',
  `quantidade` int(11) NOT NULL DEFAULT '1000',
  `descricao` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jogos`
--

LOCK TABLES `jogos` WRITE;
/*!40000 ALTER TABLE `jogos` DISABLE KEYS */;
INSERT INTO `jogos` VALUES (1,'Batman Arkham Knight','Warner Bros.',200,'Aventura','8ff0cb98bf8c4cf707d0f595134f5b35.jpg','loja',97,''),(2,'Assassin\'s Creed 3','Ubisoft',26,'Aventura','09e1fd156898cfb2f5e96071aa49f6f3.jpg','loja',998,''),(3,'Halo Wars 2','Microsoft',150,'RTS','aa06060c3ab8108e41f3f7aadaa4968d.jpg','loja',95,''),(4,'Fallout 4','Bethesda',100,'RPG','7796ec65c806d3d318f273362cae70b8.jpg','loja',994,''),(5,'Bioshock','Irrational Games',30,'Tiro','a27828fb2cd90db21ad03fb2dae6980b.jpg','loja',100,''),(6,'Portal','Valve',10,'Puzzle','3fc7852b1bf6f3ff493ac754bec9ec3d.jpg','loja',100,''),(7,'Fight Night Round 4','EA ',56,'Esporte','0f63fbb177bcb18c5ec9a55f1e571457.jpg','loja',3,''),(8,'Hitman','Square Enix',47,'Aventura','47a32cb61495ae898cc09474b76109ab.jpg','loja',4,''),(9,'Mass Effect 2','EA',66,'RPG','7671a09865625bce093e00017cd9e153.png','loja',62,'Cada personagem merecia um jogo prÃ³prio. Um mundo aberto pequeno, mas com muita coisa para contar. Jogabilidade divertida e sistema de evoluÃ§Ã£o enxuto, mas cumpre seu papel.'),(10,'Guilty Gear ','Arc System Works',190,'Luta','353daae0aafff756a4c90e19453815d3.jpg','loja',76,''),(11,'The Legend of Zelda Breath of the Wild','Nintendo',250,'Aventura','8a4794c2977a558f466ca7450d97d798.jpg','loja',1000,''),(12,'Injustice 2','Warner Bros.',187,'Luta','c47e07482526daeb30f5e079c53c6a8e.jpg','loja',9,''),(13,'Cuphead','Microsoft',70,'Aventura','b0c8650a1a0537f5ce9c656bcd9bd345.png','loja',998,''),(14,'Assassin\'s Creed 4: Black Flag','Ubisoft',81,'Aventura','ca5f6ca2db83acdb19f5af2ae11ee40a.jpg','loja',100,''),(15,'Skyrim','Bethesda',25,'RPG','1fccec91d2070303125a4fe0cebca3a8.png','loja',21,''),(16,'Gears of War 4','Microsoft',174,'Tiro','afab65a651db133e51ef17676e142c1a.jpg','loja',100,''),(17,'The Witcher 3','CD Projekt RED',190,'RPG','63fc9f47f46bfa4f86312bcf28c1faa1.jpg','loja',38,'The Witcher 3: Wild Hunt Ã© um RPG de mundo aberto, ambientado em um mundo fantÃ¡stico cheio de escolhas importantes e consequÃªncias de impacto.'),(18,'Bioshock Infinite','Irrational Games',38,'Tiro','7957d0bc55fb5d82cb6d099d8545ea00.jpg','loja',100,''),(19,'Grand Theft Auto V','Rockstar',90,'Aventura','9f93450321330b024227ad9e1ed68a5b.jpg','loja',100,''),(20,'Red Dead Redemption','Rockstar',28,'Aventura','1f97ec981e3001eb9adb4978edc6a8d4.jpg','loja',30,''),(21,'Forza Horizon 3','Microsoft',167,'Esporte','251831e6393f5bc794a4e0f09fa733d9.jpg','loja',5,''),(22,'Max Payne 3','Rockstar',17,'Tiro','e3ea6dd4c4c3031a9df00d23335d42e3.jpg','loja',4,''),(23,'Skullgirls','Lab Zero',15,'Luta','04c080fe7f373d7f9f27245f37cda0db.png','loja',16,'Skullgirls Ã© o jogo de luta perfeito: animaÃ§Ãµes perfeitas, balanÃ§o perfeito, personagens perfeitas, online perfeito. Pena que poucos conhecem essa obra-prima.'),(24,'Street Fighter V','Capcom',100,'Luta','4ea54ac45f9e1a6f98535a1439987e59.png','loja',2,''),(25,'Resident Evil 7','Capcom',230,'Aventura','78ad3317d266cf861426c254c4ab4dcd.jpg','loja',2,''),(26,'Watch Dogs','Ubisoft',36,'Aventura','0fb4f8023a1d93a55455eb99a9075d80.jpg','BatmanIncRJ',10,'Watch Dogs traz uma aventura cyberpunk em um mundo aberto com enredo que envolve hackers e cibercriminosos. O game parte da premissa de que toda a informaÃ§Ã£o conectada Ã© vulnerÃ¡vel.'),(27,'Bioshock 2','Irrational Games',19,'Tiro','18c66096e9a69c89db1d1eb02a552a7d.jpg','BatmanIncRJ',0,''),(28,'L.A. Noire','Rockstar',16,'Aventura','9d5adb741916d0815a628118117be6c8.jpg','BatmanIncRJ',3,''),(29,'Tomb Raider','Square Enix',77,'Aventura','cf6d80ecca0d775f6df7e40f5adfcd08.jpg','BatmanIncRJ',8,''),(32,'Bayonetta 2','Nintendo',69,'Aventura','b37f58d9bb8ffa066cf12e5d1b58d8f1.png','loja',11,''),(33,'Alan Wake','Microsoft',200,'Aventura','ab1d442fa15e9af72b314948ce76879a.jpg','loja',10,''),(34,'Tetris','Nintendo',100,'Puzzle','8475327e34efa367dd43fdcadb6b9186.jpg','Frabissu Frabulosa',1,''),(35,'Captain Toad: Treasure Tracker','Nintendo',123,'Puzzle','ca5fb2fd645f6032d9ed73eec5c542d8.jpg','loja',11,''),(37,'Watch Dogs 2','Ubisoft',150,'Aventura','803018d518c3370b3d10f6f5f8bd7fa6.jpg','loja',2,''),(39,'Uncharted 4','Naughty Dog',200,'Aventura','a9dd0c218920e062b0a5aee09b8ff689.jpg','loja',3,''),(42,'Super Mario Odyssey','Nintendo',250,'Aventura','97d2209aea2c89977b128e41fa3feb9b.jpg','BatmanIncRJ',0,''),(44,'God of War 3','Sony',87,'Aventura','d814d5560be421b395822b86f6795820.jpg','loja',12,''),(45,'The Last Guardian (Usado)','Sony',134,'Puzzle','fc13702543745349e55aca6fbd0af392.jpg','Mulher Maravilha',0,''),(46,'Ori and The Blind Forest','Microsoft',40,'Aventura','8360fc13c2a7d8ebfdcbd79d72e0173d.jpg','The Flash III',3,'Ori and the Blind Forest conta a histÃ³ria de um jovem Ã³rfÃ£o destinado a feitos herÃ³icos atravÃ©s de um jogo de plataforma com um visual impressionante, criado pela Moon Studios para PC e Xbox One.');
/*!40000 ALTER TABLE `jogos` ENABLE KEYS */;
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
