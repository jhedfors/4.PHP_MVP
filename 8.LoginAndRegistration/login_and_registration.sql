-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: login_and_registration
-- ------------------------------------------------------
-- Server version	5.5.41-log

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (4,'Kazu','Hedfors','kazu@hedfors.net','a9993e364706816aba3e25717850c26c9cd0d89d','2016-04-10 16:47:59','2016-04-10 16:47:59'),(5,'Jeff','Hedfors','jeff@hedfors.net','a9993e364706816aba3e25717850c26c9cd0d89d','2016-04-10 17:09:59','2016-04-10 17:09:59'),(6,'Jayden','Hedfors','jayden@hedfors.net','abc','2016-04-16 00:00:00','2016-04-16 00:00:00'),(7,'Keefer','Hedfors','keefer@hedfors.net','9ef2bdeea2b1bae79b9ddb930427d0b2c880bdac','2016-04-17 08:44:44','2016-04-17 08:44:44'),(8,'Jim','Hedford','jim@hedford.com','9ef2bdeea2b1bae79b9ddb930427d0b2c880bdac','2016-04-17 09:02:17','2016-04-17 09:02:17'),(9,'Linda','Goebel','lindajane38@hotmail.com','9ef2bdeea2b1bae79b9ddb930427d0b2c880bdac','2016-04-17 09:04:12','2016-04-17 09:04:12'),(10,'adam','ant','adam@ant.com','9ef2bdeea2b1bae79b9ddb930427d0b2c880bdac','2016-04-17 20:47:14','2016-04-17 20:47:14'),(11,'new','person','new@person.com','9ef2bdeea2b1bae79b9ddb930427d0b2c880bdac','2016-04-17 20:51:10','2016-04-17 20:51:10'),(12,'asdf','asdf','email@email.com','9ef2bdeea2b1bae79b9ddb930427d0b2c880bdac','2016-04-17 21:24:35','2016-04-17 21:24:35'),(13,'asdf','asdf','asdf@asdf.com','9ef2bdeea2b1bae79b9ddb930427d0b2c880bdac','2016-04-17 21:31:12','2016-04-17 21:31:12'),(14,'asldjk','asdlkjf','alsdj@alsdkjf.com','30a518b67dcd7af15b369ccb1518ab3cad8e8b2c','2016-04-17 21:33:35','2016-04-17 21:33:35'),(15,'asdjlj','saljljl','ppipoipo@ljljlj.com','3f9ff36f4a734e662a67f87ac963f23277f755f9','2016-04-17 22:09:23','2016-04-17 22:09:23'),(16,'Long','Password','long@password.com','3f9ff36f4a734e662a67f87ac963f23277f755f9','2016-04-17 22:22:01','2016-04-17 22:22:01');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-18  7:14:43
