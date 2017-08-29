-- MySQL dump 10.16  Distrib 10.2.8-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: cim
-- ------------------------------------------------------
-- Server version	10.2.8-MariaDB-10.2.8+maria~xenial

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
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `summary` varchar(500) NOT NULL,
  `content` text NOT NULL,
  `date_posted` datetime NOT NULL DEFAULT current_timestamp(),
  `author` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog`
--

LOCK TABLES `blog` WRITE;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` VALUES (1,'title of the blog','the summary information of the blog','the content and detail of the blog post','2017-08-08 12:35:58','the name of the author',1),(2,'jkjkj','kjkjkjk','kjkjkjk','2017-08-15 16:21:46','jkjkjkj',1),(3,'dfd','efdf','df','2017-08-19 13:49:03','qfdf',1),(4,'erere','ere','erer','2017-08-19 13:49:12','erer',1),(5,'rere','erer','erer','2017-08-19 13:49:23','erer',1),(6,'erer','erer','ererer','2017-08-19 13:49:32','erer',1),(7,'sfsds','ddqd','cdfdf','2017-08-19 13:49:46','ssfdf',1),(8,'wewe','wd`','dffdff','2017-08-19 13:49:57','eefdff',1),(9,'sdsd','sdsd','sdsd','2017-08-19 13:50:07','sdsds',1),(10,'dfsdsd','sdsd','sdsd','2017-08-19 13:50:28','sdsds',1);
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `church`
--

DROP TABLE IF EXISTS `church`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `church` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `church_name` varchar(500) NOT NULL,
  `slogan` varchar(500) DEFAULT NULL,
  `brief_description` text NOT NULL,
  `full_description` text NOT NULL,
  `location` varchar(500) NOT NULL,
  `pastor` varchar(500) NOT NULL,
  `church_verse` varchar(500) DEFAULT NULL,
  `verse_location` varchar(50) DEFAULT NULL,
  `about_pastor` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `church`
--

LOCK TABLES `church` WRITE;
/*!40000 ALTER TABLE `church` DISABLE KEYS */;
INSERT INTO `church` VALUES (2,'the name of the church','we lives are blessed','the church for the description ','This chruch was grow up from a goo standingpoin og fatin','Oyo State','Pastor Akinwunmi','ask and it shall be given unto you seek and you shall find, know at it shasl be open','mathew 7:7','',1);
/*!40000 ALTER TABLE `church` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime DEFAULT NULL,
  `description` text DEFAULT NULL,
  `host` varchar(500) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `unit` int(11) DEFAULT NULL,
  `image_location` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event`
--

LOCK TABLES `event` WRITE;
/*!40000 ALTER TABLE `event` DISABLE KEYS */;
INSERT INTO `event` VALUES (2,'klk','2018-08-04 00:00:00',NULL,'jkjkjk','jkjkjk','jkjkkjk',0,'upload/images/events/17-08-20_06-08-36.png',0);
/*!40000 ALTER TABLE `event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallery` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `image_path` varchar(200) NOT NULL,
  `uploaded_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery`
--

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` VALUES (1,'upload/images/17-08-15_04-08-44.jpg','2017-08-15 15:19:44',1),(2,'upload/images/17-08-15_04-08-30.png','2017-08-15 15:21:30',1);
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guest`
--

DROP TABLE IF EXISTS `guest`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guest` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `eventID` int(11) NOT NULL,
  `guest_name` varchar(500) NOT NULL,
  `guest_location` text NOT NULL,
  `guest_title` varchar(20) NOT NULL,
  `about_guest` text DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guest`
--

LOCK TABLES `guest` WRITE;
/*!40000 ALTER TABLE `guest` DISABLE KEYS */;
/*!40000 ALTER TABLE `guest` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `headline` varchar(500) NOT NULL,
  `news_content` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `author` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'a test news for the site','just testing','In the beginning God created the heavsn and the earth','2017-08-15 10:01:43','bamobravo',0);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `payer` varchar(200) NOT NULL,
  `purpose` int(11) NOT NULL,
  `amount` double NOT NULL,
  `comment` text DEFAULT NULL,
  `date_paid` timestamp NOT NULL DEFAULT current_timestamp(),
  `payment_gateway` text NOT NULL,
  `currency` varchar(20) NOT NULL DEFAULT 'naira',
  `payer_phonenumber` varchar(20) DEFAULT NULL,
  `payer_email_address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment`
--

LOCK TABLES `payment` WRITE;
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment_purpose`
--

DROP TABLE IF EXISTS `payment_purpose`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment_purpose` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `purpose` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `purpose` (`purpose`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_purpose`
--

LOCK TABLES `payment_purpose` WRITE;
/*!40000 ALTER TABLE `payment_purpose` DISABLE KEYS */;
INSERT INTO `payment_purpose` VALUES (1,'building project','the donation towards our building project'),(2,'test','testing testing\r\n');
/*!40000 ALTER TABLE `payment_purpose` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sermon`
--

DROP TABLE IF EXISTS `sermon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sermon` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `main_text` text NOT NULL,
  `brief_description` varchar(200) NOT NULL,
  `image_location` varchar(200) DEFAULT NULL,
  `date_posted` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `bible_passages` text DEFAULT NULL,
  `author` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sermon`
--

LOCK TABLES `sermon` WRITE;
/*!40000 ALTER TABLE `sermon` DISABLE KEYS */;
INSERT INTO `sermon` VALUES (6,'jkjkj','kjkjkjk','jkjkjkjkj','kjkjkjkj','2017-08-20 16:25:25',1,'kjkjkjkj','kjkjkjkj'),(7,'gg','ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn kkkkkkkkkkl kkkkkkkkkkkkkkk       kkl        k kk ','uhygb gygg g uhhy  gygyg  gyg   ','','2017-08-20 16:52:33',1,'nnnn','yggyuh');
/*!40000 ALTER TABLE `sermon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unit`
--

DROP TABLE IF EXISTS `unit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unit` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `unit_name` varchar(150) NOT NULL,
  `brief_description` varchar(300) NOT NULL,
  `full_description` text NOT NULL,
  `joining_instruction` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `unit_name` (`unit_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unit`
--

LOCK TABLES `unit` WRITE;
/*!40000 ALTER TABLE `unit` DISABLE KEYS */;
INSERT INTO `unit` VALUES (1,'uiui','uiuiu','iuiuiuiu','iuiuiu',1),(2,'Drama','the unit for drama minstration','hdkkjk','jdkjdk',1),(3,'another unit','testing unit','what up','go to the pastor',1),(4,'kjkjk','jkjkjkjk','jkjkjkjkj','kjkjkjkj',1);
/*!40000 ALTER TABLE `unit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unit_activity`
--

DROP TABLE IF EXISTS `unit_activity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unit_activity` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `activity` varchar(200) NOT NULL,
  `week_day` varchar(50) NOT NULL,
  `unit` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unit_activity`
--

LOCK TABLES `unit_activity` WRITE;
/*!40000 ALTER TABLE `unit_activity` DISABLE KEYS */;
INSERT INTO `unit_activity` VALUES (1,'activity','the day of activity',1,1),(2,'evangelism','Tues',3,1);
/*!40000 ALTER TABLE `unit_activity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `last_login` datetime DEFAULT current_timestamp(),
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`ID`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','21232f297a57a5a743894a0e4a801fc3','2017-07-27 08:30:38','2017-07-27 07:30:38'),(2,'tempuser','$1$IujkgRpy$/9ecohbxu2/PH2IO88VCg1','2017-08-15 18:49:47','2017-08-15 17:49:47'),(4,'djdj','$1$GiAHBsIC$3JBY81.1y.Owu9s4LyVz21','2017-08-15 18:50:38','2017-08-15 17:50:38');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-29  1:00:19
