-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: QTEA
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
-- Table structure for table `boba`
--

DROP TABLE IF EXISTS `boba`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `boba` (
  `bobaID` int(11) NOT NULL AUTO_INCREMENT,
  `flavor` varchar(30) NOT NULL,
  `size` varchar(25) NOT NULL,
  `tapioca` varchar(20) NOT NULL,
  `price` decimal(15,2) NOT NULL,
  PRIMARY KEY (`bobaID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `boba`
--

LOCK TABLES `boba` WRITE;
/*!40000 ALTER TABLE `boba` DISABLE KEYS */;
INSERT INTO `boba` VALUES (1,'bananna','XLLL','choco',99.99),(2,'mango','m','black pearl',3.50),(3,'mango','l','black pearl',4.50),(4,'taro','s','black pearl',2.50),(5,'taro','m','black pearl',3.50),(6,'taro','l','black pearl',4.50),(7,'chan\\\'s fav','XXXS','lots',6.99),(8,'honeydew','m','black pearl',3.50),(9,'honeydew','l','black pearl',4.50);
/*!40000 ALTER TABLE `boba` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cart` (
  `cartID` int(11) NOT NULL,
  `total` decimal(15,2) NOT NULL,
  PRIMARY KEY (`cartID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chicken`
--

DROP TABLE IF EXISTS `chicken`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chicken` (
  `chickenID` int(11) NOT NULL,
  `sauce` varchar(30) NOT NULL,
  `size` varchar(30) NOT NULL,
  `price` decimal(15,2) NOT NULL,
  PRIMARY KEY (`chickenID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chicken`
--

LOCK TABLES `chicken` WRITE;
/*!40000 ALTER TABLE `chicken` DISABLE KEYS */;
INSERT INTO `chicken` VALUES (0,'sesame garlic','5pc',4.72),(1,'sesame garlic','8pc',6.12),(2,'sesame garlic','12pc',8.42),(3,'sesame garlic','28pc',18.22),(4,'honey garlic','5pc',4.72),(5,'honey garlic','8pc',6.12),(6,'honey garlic','12pc',8.42),(7,'honey garlic','24pc',18.22),(8,'classic spicy','5pc',4.72),(9,'classic spicy','8pc',6.12),(10,'classic spicy','12pc',8.42),(11,'classic spicy','24pc',18.22);
/*!40000 ALTER TABLE `chicken` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL AUTO_INCREMENT,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`orderID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (5,5),(6,2),(7,2);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment` (
  `cardID` int(11) NOT NULL,
  `cc_number` varchar(25) NOT NULL,
  `cvc` varchar(3) NOT NULL,
  `exp_date` date NOT NULL,
  `cc_type` varchar(25) NOT NULL,
  PRIMARY KEY (`cardID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment`
--

LOCK TABLES `payment` WRITE;
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `person`
--

DROP TABLE IF EXISTS `person`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `person` (
  `personID` int(11) NOT NULL AUTO_INCREMENT,
  `fName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `phonenumber` varchar(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `loggedIn` int(1) DEFAULT '0',
  `roleID` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`personID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `person`
--

LOCK TABLES `person` WRITE;
/*!40000 ALTER TABLE `person` DISABLE KEYS */;
INSERT INTO `person` VALUES (1,'Jae','Yu','8013333333','225 whoville','jaezo@gmail.com','8cb2237d0679ca88db6464eac60da96345513964',1,2),(2,'Test','Customer','2222222222','2 vile','g@mail.com','8cb2237d0679ca88db6464eac60da96345513964',0,0),(3,'test','me ','1231231234','d@gmail.com','@@gmailcom','8cb2237d0679ca88db6464eac60da96345513964',0,0),(4,'plz','work','12','12','121','8cb2237d0679ca88db6464eac60da96345513964',0,0),(5,'grade','me','1231231234','123vile','grade@me.com','7738c57d8922fd00ed60ff8b3a30f2b77b817835',1,2),(6,'add','me','123123456','give me an a','ddd@ggg.com','d3f1b7c2676e53f55de8ef046ac6a478eda06377',0,0),(7,'Chandler','Taylor','8012258112','4335 Imcool Way','chandler.nottaylor@gmail.com','5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8',0,0),(8,'customer','is cool','111111','1','bob@gmail.com','8cb2237d0679ca88db6464eac60da96345513964',1,0),(9,'Jae','Yu','1234567890','123','123@123.com','8308651804facb7b9af8ffc53a33a22d6a1c8ac2',0,0),(10,'Jae','Yu','Jae Number','Jae Address','jae@jae.com','7288edd0fc3ffcbe93a0cf06e3568e28521687bc',1,0);
/*!40000 ALTER TABLE `person` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role` (
  `roleID` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL,
  `can_edit_self` int(11) NOT NULL,
  `can_edit_cust` int(11) NOT NULL,
  `can_edit_emp` int(11) NOT NULL,
  `discount` decimal(10,0) NOT NULL,
  PRIMARY KEY (`roleID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` VALUES (0,'customer',1,0,0,0),(1,'employee',1,1,0,0),(2,'manager',1,1,1,1);
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_products`
--

DROP TABLE IF EXISTS `tbl_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_products`
--

LOCK TABLES `tbl_products` WRITE;
/*!40000 ALTER TABLE `tbl_products` DISABLE KEYS */;
INSERT INTO `tbl_products` VALUES (1,'Spicy Chicken','/spicy.png',5),(2,'Honey Garlic Chicken','/honey.png',5),(3,'Sesame Chicken','sesame.png',25),(4,'Taro Boba','taro.png',20),(5,'Honeydew Boba','honeydew.png',10),(6,'Mango Boba','/mango.png',1);
/*!40000 ALTER TABLE `tbl_products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-18 15:04:57
