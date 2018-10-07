-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: localhost    Database: mentalhealth
-- ------------------------------------------------------
-- Server version	5.7.23-0ubuntu0.18.04.1

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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `Admin_no` int(50) NOT NULL AUTO_INCREMENT,
  `User_no` int(50) NOT NULL,
  `Position` varchar(50) NOT NULL,
  PRIMARY KEY (`Admin_no`),
  KEY `User No` (`User_no`),
  CONSTRAINT `admins_ibfk_1` FOREIGN KEY (`User_no`) REFERENCES `users` (`User_no`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chat` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `to` varchar(255) NOT NULL,
  `color` varchar(6) NOT NULL,
  `chattext` text NOT NULL,
  `chattime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat`
--

LOCK TABLES `chat` WRITE;
/*!40000 ALTER TABLE `chat` DISABLE KEYS */;
/*!40000 ALTER TABLE `chat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctors` (
  `Doctor_no` int(50) NOT NULL AUTO_INCREMENT,
  `User_no` int(50) NOT NULL,
  `Specialization` varchar(30) NOT NULL,
  `Clinic_name` varchar(20) NOT NULL,
  `Clinic_location` varchar(40) NOT NULL,
  PRIMARY KEY (`Doctor_no`),
  KEY `User No` (`User_no`),
  CONSTRAINT `doctors_ibfk_1` FOREIGN KEY (`User_no`) REFERENCES `users` (`User_no`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctors`
--

LOCK TABLES `doctors` WRITE;
/*!40000 ALTER TABLE `doctors` DISABLE KEYS */;
/*!40000 ALTER TABLE `doctors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event registration`
--

DROP TABLE IF EXISTS `event registration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event registration` (
  `Event_no` int(50) NOT NULL,
  `User_no` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event registration`
--

LOCK TABLES `event registration` WRITE;
/*!40000 ALTER TABLE `event registration` DISABLE KEYS */;
/*!40000 ALTER TABLE `event registration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `Event_no` int(50) NOT NULL AUTO_INCREMENT,
  `Event_name` int(30) NOT NULL,
  `Description` int(200) NOT NULL,
  `Type` int(30) NOT NULL,
  `Datetime` int(40) NOT NULL,
  `Hosts` varchar(50) NOT NULL,
  `Admin_no` int(50) NOT NULL,
  PRIMARY KEY (`Event_no`),
  KEY `Admin No` (`Admin_no`),
  CONSTRAINT `events_ibfk_1` FOREIGN KEY (`Admin_no`) REFERENCES `admins` (`Admin_no`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media` (
  `Media_no` int(50) NOT NULL AUTO_INCREMENT,
  `Media_name` varchar(30) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Link` varchar(100) NOT NULL,
  `Admin_no` int(50) NOT NULL,
  PRIMARY KEY (`Media_no`),
  KEY `Admin No` (`Admin_no`),
  CONSTRAINT `media_ibfk_1` FOREIGN KEY (`Admin_no`) REFERENCES `admins` (`Admin_no`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patients`
--

DROP TABLE IF EXISTS `patients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patients` (
  `Patient_no` int(50) NOT NULL AUTO_INCREMENT,
  `User_no` int(50) NOT NULL,
  `Country` varchar(20) DEFAULT NULL,
  `City` varchar(30) DEFAULT NULL,
  `Conditions` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Patient_no`),
  KEY `User No` (`User_no`),
  CONSTRAINT `patients_ibfk_1` FOREIGN KEY (`User_no`) REFERENCES `users` (`User_no`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patients`
--

LOCK TABLES `patients` WRITE;
/*!40000 ALTER TABLE `patients` DISABLE KEYS */;
INSERT INTO `patients` VALUES (1,1,NULL,NULL,NULL);
/*!40000 ALTER TABLE `patients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `professional_help`
--

DROP TABLE IF EXISTS `professional_help`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `professional_help` (
  `Application_no` int(50) NOT NULL AUTO_INCREMENT,
  `Doctor_no` int(50) DEFAULT NULL,
  `Patient_no` int(50) NOT NULL,
  `Date_of_approval` varchar(30) DEFAULT NULL,
  `Condition_description` varchar(200) NOT NULL,
  `Patient_progress` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Application_no`),
  KEY `Doctor No` (`Doctor_no`),
  KEY `Patient No` (`Patient_no`),
  CONSTRAINT `professional_help_ibfk_1` FOREIGN KEY (`Doctor_no`) REFERENCES `doctors` (`Doctor_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `professional_help_ibfk_2` FOREIGN KEY (`Patient_no`) REFERENCES `patients` (`Patient_no`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `professional_help`
--

LOCK TABLES `professional_help` WRITE;
/*!40000 ALTER TABLE `professional_help` DISABLE KEYS */;
/*!40000 ALTER TABLE `professional_help` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `User_no` int(10) NOT NULL AUTO_INCREMENT,
  `Username` varchar(30) NOT NULL,
  `User_type` varchar(20) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Full_name` varchar(50) DEFAULT NULL,
  `Email_address` varchar(30) NOT NULL,
  `Description` varchar(200) DEFAULT NULL,
  `Phone_number` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`User_no`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Mathenge','patients','math1234',NULL,'',NULL,NULL),(2,'John','doctors','john1234',NULL,'',NULL,NULL),(5,'Waweru','patients','math1234',NULL,'matheshman@gmail.com',NULL,NULL);
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

-- Dump completed on 2018-10-06 21:32:31
