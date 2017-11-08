-- MySQL dump 10.13  Distrib 5.7.19, for Linux (i686)
--
-- Host: localhost    Database: custom83
-- ------------------------------------------------------
-- Server version	5.7.19-0ubuntu0.16.04.1

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
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(200) DEFAULT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `permissao` varchar(25) NOT NULL,
  `status` int(1) DEFAULT '0',
  `perfil` varchar(100) DEFAULT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `plano` varchar(100) DEFAULT NULL,
  `site` varchar(150) DEFAULT NULL,
  `logomarca` varchar(100) DEFAULT NULL,
  `identificador` varchar(45) DEFAULT NULL,
  `assinante` int(1) DEFAULT '0',
  `cep` varchar(9) DEFAULT NULL,
  `estado` varchar(60) DEFAULT NULL,
  `cidade` varchar(60) DEFAULT NULL,
  `bairro` varchar(60) DEFAULT NULL,
  `rua` varchar(255) DEFAULT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `data_register` datetime DEFAULT CURRENT_TIMESTAMP,
  `data_update` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `identificador_UNIQUE` (`identificador`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 DELAY_KEY_WRITE=1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,NULL,'Admin','admin@custom83.com','$2a$08$MzA5NjkwMDc2NWEwMTg4NuTahKr9ghMSmcO3/CxrlHySZGKuL1Bhi','admin',0,NULL,NULL,NULL,NULL,NULL,NULL,3,NULL,NULL,NULL,NULL,NULL,'','2017-11-07 07:18:27','2017-11-07 07:35:41'),(2,NULL,'user 1','user1@user.com','$2a$08$OTQ5OTAwMzI2NWEwMThlM.aNkz.Wg1AP0vyl8VZM5CtdUvvGQs8US','simples',0,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'','2017-11-07 07:42:16','2017-11-07 07:45:11'),(3,NULL,'user 2','user2@user.com','$2a$08$NjgwMDQ4MDYzNWEwMThlMet1EFyrDJStHrCUD1/B/2QjhuiiX9BsS','simples',0,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'','2017-11-07 07:42:46','2017-11-07 07:45:52'),(4,NULL,'user 3','user3@user.com','$2a$08$MTQ2NTk1MjQzODVhMDE4ZOMYMrVm2vk8DGD7NEpvNhX3vUWQhRVGq','simples',0,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'','2017-11-07 07:43:08','2017-11-07 07:45:59'),(5,NULL,'user 4','user4@user.com','$2a$08$MTAxOTE1Njk2NjVhMDE4ZOHr5hfXKhEobTATwgqip9u/fSgku1USO','simples',0,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'','2017-11-07 07:43:30','2017-11-07 07:46:04'),(6,NULL,'user 5','user5@user.com','$2a$08$MTc0MzI2NjA3NjVhMDE4ZesOZ/wL8Ai7Y/WKpp5Te5354xNxBEptC','simples',0,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'','2017-11-07 07:46:48','2017-11-07 07:47:11'),(7,NULL,'user 6','user6@user.com','$2a$08$MTMyOTEwMDQzMDVhMDE4Zeeq/0J6OjQstbHuudh0pZkdBUXbEnmo.','simples',0,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'','2017-11-07 07:48:45','2017-11-07 07:48:45'),(8,'user_pf_1','user pessoa fisica 1','pf1@pf.com','$2a$08$MTg0MDE2NTIwNTVhMDFhNu/LwLo6w7UgIm4i0reMaGRJFmLb6aHpm','cpf',0,NULL,'Pintor',NULL,'','','12321234543',1,'58093762','Paraiba','João_Pessoa','Torre','r: minha rua','','2017-11-07 09:31:45','2017-11-07 09:40:17'),(9,'user_pf_2','user pessoa fisica 2','pf2@pf.com','$2a$08$MTMyMzU4OTU3OTVhMDFhO.HEQZX9JUGmnO3RC1yLnaBZqV94L04uW','cpf',0,NULL,'Funileiro',NULL,'blablabla.com','','12321222222',1,'58093762','Paraiba','João_Pessoa','Torre','r: minha rua','','2017-11-07 09:35:51','2017-11-07 09:40:17'),(10,'user_pf_3','user pessoa fisica 3','pf3@pf.com','$2a$08$MTgwMDQ1NTg5ODVhMDFhO.lYuq.a3vOJdllab/ktXkza4cZo2LW8y','cpf',0,NULL,'Mecânico',NULL,'','','33333234543',1,'58093762','Paraiba','João_Pessoa','Torre','r: minha rua','','2017-11-07 09:36:48','2017-11-07 09:40:17'),(11,'user_pj_1','user pessoa juridica 1','pj1@pj.com','$2a$08$MTEwODc2NjU4MTVhMDFhOOs3DMlc3kOvAEIofqMJAep2QrAUmGbIW','cnpj',0,'Lojista','Pintor','Basico','','','999999999999999999',1,'58093762','Paraí­ba','João_Pessoa','Torre','r: minha rua','','2017-11-07 09:37:44','2017-11-07 09:40:17'),(12,'user_pj_2','user pessoa juridica 2','pj2@pj.com','$2a$08$Mjc3NDAzNjk5NWEwMWFhM.wZXltI4mlv/bWP6qOv0kqKWR5B5tZoC','cnpj',0,'Mao de Obra','Mecânico','Intermediario','','','674364736473',1,'58093762','ParaÃ­ba','JoÃ£o Pessoa','Torre','r: minha rua','','2017-11-07 09:41:48','2017-11-07 10:33:54');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-08  8:14:54
