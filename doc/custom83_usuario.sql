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
  `nome` varchar(255) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `type` varchar(25) DEFAULT 'cnpj',
  `data_register` datetime DEFAULT CURRENT_TIMESTAMP,
  `data_update` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=1000000012 DEFAULT CHARSET=utf8 DELAY_KEY_WRITE=1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1000000001,'Fabio','teste@custom83.com','$2a$08$MTY2NzI3OTY3MTU5MzZiZ.zHbu/nhpbO.Lckf/Ay/vueZQP3HxKmK','admin','2017-10-31 23:07:43','2017-10-31 23:08:03',1),(1000000003,'fabio 1','fb1@fb.com','$2a$08$Mjg5MzUwODk1OWY5MjllNe8GE9kTRVFExwKStNrhoSbL3jgwAr.pK','cnpj','2017-10-31 23:07:43','2017-11-01 00:00:50',1),(1000000007,'fabio 2','fb2@fb.com','$2a$08$MjA2NDYwMjk1NzU5ZjkyYe14QF5aW2eG.9.iTBLMS/ZhVc9mlhEF.','cnpj','2017-10-31 23:07:43','2017-11-01 00:50:18',0),(1000000008,'fabio 3','fb3@fb.com','$2a$08$NTMwNTYyNDg1NTlmOTJiYOFNUddAQOZnoGrYETOGb4wBgUSREJVg2','cnpj','2017-10-31 23:07:43','2017-11-01 00:00:50',1),(1000000009,'fabio 4','fb4@fb.com','$2a$08$MTE3MjQ2MzU0MDU5ZjkyYeBglq5X/IWNxlSahPHmWCBzkgxDmVh..','cnpj','2017-10-31 23:07:43','2017-11-01 00:00:50',1),(1000000010,'teste2','teste1@custom83.com','$2a$08$MTk2Njk2MTIwMjU5ZjkzZ.L0oHQAJdXYwvHuc9RZsNVEmAGb7w1Ze','cpf','2017-11-01 00:19:53','2017-11-01 00:20:57',1),(1000000011,'teste2','teste2@custom83.com','$2a$08$OTM2ODM4ODEwNTlmOTNkNe1crm0/a2ljsBBYX4GqcIMuw1ZDP7m7q','cpf','2017-11-01 00:20:11','2017-11-01 00:49:05',0);
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

-- Dump completed on 2017-11-01  1:48:23