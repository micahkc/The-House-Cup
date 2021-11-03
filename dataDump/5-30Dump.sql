-- MySQL dump 10.13  Distrib 8.0.23, for Win64 (x86_64)
--
-- Host: localhost    Database: thehousecup
-- ------------------------------------------------------
-- Server version	8.0.23

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `amount`
--

DROP TABLE IF EXISTS `amount`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `amount` (
  `amountID` int NOT NULL AUTO_INCREMENT,
  `amount` decimal(2,2) NOT NULL,
  `units` varchar(10) NOT NULL,
  PRIMARY KEY (`amountID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `amount`
--

LOCK TABLES `amount` WRITE;
/*!40000 ALTER TABLE `amount` DISABLE KEYS */;
/*!40000 ALTER TABLE `amount` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `caffine`
--

DROP TABLE IF EXISTS `caffine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `caffine` (
  `itemID` int NOT NULL,
  `caffinated` tinyint(1) NOT NULL,
  PRIMARY KEY (`itemID`),
  CONSTRAINT `caffine_ibfk_1` FOREIGN KEY (`itemID`) REFERENCES `ingredients` (`itemID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `caffine`
--

LOCK TABLES `caffine` WRITE;
/*!40000 ALTER TABLE `caffine` DISABLE KEYS */;
INSERT INTO `caffine` VALUES (6,1),(22,1),(38,1),(39,1),(53,1);
/*!40000 ALTER TABLE `caffine` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `favorites`
--

DROP TABLE IF EXISTS `favorites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `favorites` (
  `email` varchar(30) NOT NULL,
  `drinkID` int NOT NULL,
  PRIMARY KEY (`email`,`drinkID`),
  KEY `drinkID` (`drinkID`),
  CONSTRAINT `favorites_ibfk_1` FOREIGN KEY (`email`) REFERENCES `person` (`email`),
  CONSTRAINT `favorites_ibfk_2` FOREIGN KEY (`drinkID`) REFERENCES `menu` (`drinkID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favorites`
--

LOCK TABLES `favorites` WRITE;
/*!40000 ALTER TABLE `favorites` DISABLE KEYS */;
/*!40000 ALTER TABLE `favorites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ingredients`
--

DROP TABLE IF EXISTS `ingredients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ingredients` (
  `itemID` int NOT NULL AUTO_INCREMENT,
  `description` varchar(30) NOT NULL,
  `available` tinyint(1) NOT NULL,
  `category` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`itemID`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ingredients`
--

LOCK TABLES `ingredients` WRITE;
/*!40000 ALTER TABLE `ingredients` DISABLE KEYS */;
INSERT INTO `ingredients` VALUES (2,'Whipped Cream',0,'topping'),(3,'Whole Milk',1,'milk'),(4,'Sparkling Water',1,'other'),(5,'Medium Roast',0,'coffee'),(6,'Light Roast',0,'coffee'),(7,'Salted Caramel (SF)',1,'flavoring'),(8,'Half and Half',1,'coffee'),(11,'shortbread',0,'flavoring'),(12,'smores (sf)',1,'flavoring'),(13,'strawberry',0,'flavoring'),(14,'tangerine',1,'flavoring'),(15,'toasted marshmallow',0,'flavoring'),(16,'watermelon',1,'flavoring'),(17,'Chocolate Sauce',0,'flavoring'),(18,'Caramel Sauce',1,'flavoring'),(20,'Chocolate Shavings',1,'topping'),(21,'Chocolate Whipped Cream',1,'topping'),(22,'Espresso Roast',0,'coffee'),(23,'amaretto',1,'flavoring'),(24,'balsamic fig',1,'flavoring'),(25,'blueberry',0,'flavoring'),(26,'butter pecan ',0,'flavoring'),(27,'butterscotch',0,'flavoring'),(28,'chai tea spice',1,'flavoring'),(29,'cheesecake',0,'flavoring'),(30,'cherry',1,'flavoring'),(31,'chocolate chipp cookie dough',1,'flavoring'),(32,'classic carmel',1,'flavoring'),(33,'coconut',0,'flavoring'),(34,'french vanilla',1,'flavoring'),(35,'huckleberry',1,'flavoring'),(36,'itallian eggnog',1,'flavoring'),(37,'lavender',1,'flavoring'),(38,'Herbal',0,'tea'),(39,'Mint',1,'tea'),(40,'lime',0,'flavoring'),(41,'orange ',1,'flavoring'),(42,'peach',1,'flavoring'),(44,'peanut butter',1,'flavoring'),(45,'peppermint',1,'flavoring'),(46,'pomegranate',1,'flavoring'),(47,'pumpkin spice',1,'flavoring'),(48,'raspberry',1,'flavoring'),(50,'Soy Milk',1,'milk'),(51,'Almond Milk',1,'milk'),(52,'Chocolate Syrup',1,'flavoring'),(53,'Espresso',1,'coffee'),(54,'Caramel Syrup',1,'flavoring'),(55,'Cocoa Powder',1,'topping'),(56,'Chocolate Coffee Bean',1,'topping');
/*!40000 ALTER TABLE `ingredients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `instruction`
--

DROP TABLE IF EXISTS `instruction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `instruction` (
  `instructionID` int NOT NULL AUTO_INCREMENT,
  `instructions` varchar(50) NOT NULL,
  PRIMARY KEY (`instructionID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `instruction`
--

LOCK TABLES `instruction` WRITE;
/*!40000 ALTER TABLE `instruction` DISABLE KEYS */;
/*!40000 ALTER TABLE `instruction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lactose`
--

DROP TABLE IF EXISTS `lactose`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lactose` (
  `itemID` int NOT NULL,
  `lactose` tinyint(1) NOT NULL,
  PRIMARY KEY (`itemID`),
  CONSTRAINT `lactose_ibfk_1` FOREIGN KEY (`itemID`) REFERENCES `ingredients` (`itemID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lactose`
--

LOCK TABLES `lactose` WRITE;
/*!40000 ALTER TABLE `lactose` DISABLE KEYS */;
INSERT INTO `lactose` VALUES (2,1),(8,1),(21,1),(56,1);
/*!40000 ALTER TABLE `lactose` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `makedrink`
--

DROP TABLE IF EXISTS `makedrink`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `makedrink` (
  `drinkID` int NOT NULL,
  `instructionID` int NOT NULL,
  PRIMARY KEY (`drinkID`,`instructionID`),
  KEY `instructionID` (`instructionID`),
  CONSTRAINT `makedrink_ibfk_1` FOREIGN KEY (`drinkID`) REFERENCES `menu` (`drinkID`),
  CONSTRAINT `makedrink_ibfk_2` FOREIGN KEY (`instructionID`) REFERENCES `instruction` (`instructionID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `makedrink`
--

LOCK TABLES `makedrink` WRITE;
/*!40000 ALTER TABLE `makedrink` DISABLE KEYS */;
/*!40000 ALTER TABLE `makedrink` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menu` (
  `drinkID` int NOT NULL AUTO_INCREMENT,
  `drinkName` varchar(30) NOT NULL,
  `available` tinyint(1) NOT NULL,
  `season` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`drinkID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` VALUES (1,'Iced Dark Mocha',1,'summer'),(2,'Iced Dark Mocha',1,'summer'),(3,'Vanilla Steamer',1,'winter'),(4,'Lavender Latte',1,'fall'),(5,'Iced Caramel Macchiato',1,'summer'),(6,'Peanut Butter Cup Mocha',1,'fall'),(7,'Iced Dirty Chai Latte',1,'spring'),(8,'Huckleberry Itallian Soda',1,'spring'),(9,'Peppermint Mocha',1,'winter'),(10,'Snickerdoodle Latte',1,'winter'),(11,'Iced Coconut',1,'summer'),(12,'S\'mores Mocha',1,'summer');
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `merch`
--

DROP TABLE IF EXISTS `merch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `merch` (
  `itemID` int NOT NULL AUTO_INCREMENT,
  `description` varchar(200) NOT NULL,
  `price` decimal(3,2) DEFAULT NULL,
  `qty` int NOT NULL,
  PRIMARY KEY (`itemID`),
  CONSTRAINT `merch_chk_1` CHECK ((`price` >= 0)),
  CONSTRAINT `merch_chk_2` CHECK ((`qty` >= 0))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `merch`
--

LOCK TABLES `merch` WRITE;
/*!40000 ALTER TABLE `merch` DISABLE KEYS */;
/*!40000 ALTER TABLE `merch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ordertransaction`
--

DROP TABLE IF EXISTS `ordertransaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ordertransaction` (
  `orderNum` int NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `completed` tinyint(1) NOT NULL,
  `location` char(4) DEFAULT NULL,
  `drinkID` int DEFAULT NULL,
  PRIMARY KEY (`orderNum`),
  KEY `drinkID` (`drinkID`),
  KEY `email` (`email`),
  CONSTRAINT `ordertransaction_ibfk_1` FOREIGN KEY (`drinkID`) REFERENCES `menu` (`drinkID`),
  CONSTRAINT `ordertransaction_ibfk_2` FOREIGN KEY (`email`) REFERENCES `person` (`email`),
  CONSTRAINT `ordertransaction_chk_1` CHECK ((`location` in (_utf8mb4'here',_utf8mb4'togo')))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ordertransaction`
--

LOCK TABLES `ordertransaction` WRITE;
/*!40000 ALTER TABLE `ordertransaction` DISABLE KEYS */;
/*!40000 ALTER TABLE `ordertransaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `person`
--

DROP TABLE IF EXISTS `person`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `person` (
  `email` varchar(30) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `title` char(8) DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`email`),
  CONSTRAINT `person_chk_1` CHECK ((`title` in (_utf8mb4'customer',_utf8mb4'barista',_utf8mb4'manager')))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `person`
--

LOCK TABLES `person` WRITE;
/*!40000 ALTER TABLE `person` DISABLE KEYS */;
INSERT INTO `person` VALUES ('kjcondie@gmail.com','Kedrick','Condie','customer','$2y$10$R1RSqVAsOsEtygZuCZKvueZ/bEEnSIru0bKiNE5gAZQIRdOgMIcPu'),('kkcondie@gmail.com','Kurt','Condie','manager','$2y$10$.e.GLa37r8QgqRk4QIoPDe4vt7rixySina56Ax/SLoZlUSABHfJDm'),('marissakc98@gmail.com','Marissa','Condie','barista','$2y$10$bA/nGUwKZHQHgJFQw7GaUe4ZAIoeBS3/RiIE3rZfU3Xl.k6s72A16'),('mkcondie01@gmail.com','Micah','Condie','manager','$2y$10$AlfWXoCd1OcuQGsCbrtTzuLZjyVbz4KHFe9c.6uiQwD9VUQLbpmfK');
/*!40000 ALTER TABLE `person` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recipe`
--

DROP TABLE IF EXISTS `recipe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `recipe` (
  `drinkID` int NOT NULL,
  `itemID` int NOT NULL,
  `amountID` int DEFAULT NULL,
  PRIMARY KEY (`drinkID`,`itemID`),
  KEY `itemID` (`itemID`),
  KEY `amountID` (`amountID`),
  CONSTRAINT `recipe_ibfk_1` FOREIGN KEY (`drinkID`) REFERENCES `menu` (`drinkID`),
  CONSTRAINT `recipe_ibfk_2` FOREIGN KEY (`itemID`) REFERENCES `ingredients` (`itemID`),
  CONSTRAINT `recipe_ibfk_3` FOREIGN KEY (`amountID`) REFERENCES `amount` (`amountID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recipe`
--

LOCK TABLES `recipe` WRITE;
/*!40000 ALTER TABLE `recipe` DISABLE KEYS */;
/*!40000 ALTER TABLE `recipe` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `seasonalorders`
--

DROP TABLE IF EXISTS `seasonalorders`;
/*!50001 DROP VIEW IF EXISTS `seasonalorders`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `seasonalorders` AS SELECT 
 1 AS `orderNum`,
 1 AS `season`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `sugarfree`
--

DROP TABLE IF EXISTS `sugarfree`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sugarfree` (
  `itemID` int NOT NULL,
  `sugarFree` tinyint(1) NOT NULL,
  PRIMARY KEY (`itemID`),
  CONSTRAINT `sugarfree_ibfk_1` FOREIGN KEY (`itemID`) REFERENCES `ingredients` (`itemID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sugarfree`
--

LOCK TABLES `sugarfree` WRITE;
/*!40000 ALTER TABLE `sugarfree` DISABLE KEYS */;
INSERT INTO `sugarfree` VALUES (7,1),(12,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1);
/*!40000 ALTER TABLE `sugarfree` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `seasonalorders`
--

/*!50001 DROP VIEW IF EXISTS `seasonalorders`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`Condie`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `seasonalorders` AS select `ordertransaction`.`orderNum` AS `orderNum`,`menu`.`season` AS `season` from (`ordertransaction` join `menu` on((`ordertransaction`.`drinkID` = `menu`.`drinkID`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-30  1:17:26
