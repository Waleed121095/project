-- MySQL dump 10.13  Distrib 5.7.11, for osx10.9 (x86_64)
--
-- Host: localhost    Database: projectJournal3
-- ------------------------------------------------------
-- Server version	5.7.11

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
-- Table structure for table `Ads`
--

DROP TABLE IF EXISTS `Ads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Ads` (
  `advID` int(11) NOT NULL AUTO_INCREMENT,
  `content` text,
  `attachment` text,
  `category` text,
  `state` text,
  `expirationDate` text,
  `renewsNumber` int(11) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  PRIMARY KEY (`advID`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Ads`
--

LOCK TABLES `Ads` WRITE;
/*!40000 ALTER TABLE `Ads` DISABLE KEYS */;
INSERT INTO `Ads` VALUES (100,'dddd',NULL,NULL,NULL,NULL,NULL,NULL),(101,'hdgaskjdskjadjsa;lkd;lsakd;lsd;ock',NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `Ads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Article`
--

DROP TABLE IF EXISTS `Article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Article` (
  `acticleID` int(11) NOT NULL AUTO_INCREMENT,
  `subject` text,
  `title` text,
  `content` mediumtext,
  `date` text,
  `linkID` int(11) DEFAULT NULL,
  PRIMARY KEY (`acticleID`),
  KEY `linkID` (`linkID`),
  CONSTRAINT `article_ibfk_1` FOREIGN KEY (`linkID`) REFERENCES `Links` (`linksID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Article`
--

LOCK TABLES `Article` WRITE;
/*!40000 ALTER TABLE `Article` DISABLE KEYS */;
/*!40000 ALTER TABLE `Article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `DiskRetouchedNews`
--

DROP TABLE IF EXISTS `DiskRetouchedNews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `DiskRetouchedNews` (
  `diskID` int(11) DEFAULT NULL,
  `retouchedNewsID` int(11) DEFAULT NULL,
  KEY `diskID` (`diskID`),
  KEY `retouchedNewsID` (`retouchedNewsID`),
  CONSTRAINT `diskretouchednews_ibfk_1` FOREIGN KEY (`diskID`) REFERENCES `Person` (`ID`),
  CONSTRAINT `diskretouchednews_ibfk_2` FOREIGN KEY (`retouchedNewsID`) REFERENCES `News` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `DiskRetouchedNews`
--

LOCK TABLES `DiskRetouchedNews` WRITE;
/*!40000 ALTER TABLE `DiskRetouchedNews` DISABLE KEYS */;
/*!40000 ALTER TABLE `DiskRetouchedNews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `EditorWriteArticle`
--

DROP TABLE IF EXISTS `EditorWriteArticle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `EditorWriteArticle` (
  `editorID` int(11) DEFAULT NULL,
  `articleID` int(11) DEFAULT NULL,
  `writingDate` text,
  KEY `editorID` (`editorID`),
  KEY `articleID` (`articleID`),
  CONSTRAINT `editorwritearticle_ibfk_1` FOREIGN KEY (`editorID`) REFERENCES `PublishedNews` (`editorID`),
  CONSTRAINT `editorwritearticle_ibfk_2` FOREIGN KEY (`articleID`) REFERENCES `Article` (`acticleID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `EditorWriteArticle`
--

LOCK TABLES `EditorWriteArticle` WRITE;
/*!40000 ALTER TABLE `EditorWriteArticle` DISABLE KEYS */;
/*!40000 ALTER TABLE `EditorWriteArticle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Links`
--

DROP TABLE IF EXISTS `Links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Links` (
  `linksID` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `path` text,
  `permission` text,
  PRIMARY KEY (`linksID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Links`
--

LOCK TABLES `Links` WRITE;
/*!40000 ALTER TABLE `Links` DISABLE KEYS */;
/*!40000 ALTER TABLE `Links` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MappingPersonTypeIDString`
--

DROP TABLE IF EXISTS `MappingPersonTypeIDString`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MappingPersonTypeIDString` (
  `personTypeID` int(11) NOT NULL,
  `personTypeString` text NOT NULL,
  PRIMARY KEY (`personTypeID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MappingPersonTypeIDString`
--

LOCK TABLES `MappingPersonTypeIDString` WRITE;
/*!40000 ALTER TABLE `MappingPersonTypeIDString` DISABLE KEYS */;
/*!40000 ALTER TABLE `MappingPersonTypeIDString` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `NewsAttachment`
--

DROP TABLE IF EXISTS `NewsAttachment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `NewsAttachment` (
  `id` int(11) NOT NULL,
  `attachmentID` int(11) NOT NULL,
  `attachmentName` text NOT NULL,
  `attachmentType` tinytext NOT NULL,
  `attachmentSize` int(11) NOT NULL,
  `content` mediumblob NOT NULL,
  KEY `id` (`id`),
  CONSTRAINT `newsattachment_ibfk_1` FOREIGN KEY (`id`) REFERENCES `news` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `NewsAttachment`
--

LOCK TABLES `NewsAttachment` WRITE;
/*!40000 ALTER TABLE `NewsAttachment` DISABLE KEYS */;
/*!40000 ALTER TABLE `NewsAttachment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Person`
--

DROP TABLE IF EXISTS `Person`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Person` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `secondName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `SSN` int(11) NOT NULL,
  `birthDay` int(11) NOT NULL,
  `birthMonth` int(11) NOT NULL,
  `birthYear` int(11) NOT NULL,
  `joinDate` text NOT NULL,
  `personTypeID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `personTypeID` (`personTypeID`),
  CONSTRAINT `person_ibfk_1` FOREIGN KEY (`personTypeID`) REFERENCES `MappingPersonTypeIDString` (`personTypeID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Person`
--

LOCK TABLES `Person` WRITE;
/*!40000 ALTER TABLE `Person` DISABLE KEYS */;
/*!40000 ALTER TABLE `Person` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PersonAddress`
--

DROP TABLE IF EXISTS `PersonAddress`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PersonAddress` (
  `personID` int(11) DEFAULT NULL,
  `addressID` int(11) DEFAULT NULL,
  `street` varchar(20) DEFAULT NULL,
  KEY `personID` (`personID`),
  KEY `addressID` (`addressID`),
  CONSTRAINT `PersonAddress_ibfk_1` FOREIGN KEY (`personID`) REFERENCES `Person` (`ID`),
  CONSTRAINT `PersonAddress_ibfk_2` FOREIGN KEY (`addressID`) REFERENCES `Address` (`addressChildID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PersonAddress`
--

LOCK TABLES `PersonAddress` WRITE;
/*!40000 ALTER TABLE `PersonAddress` DISABLE KEYS */;
/*!40000 ALTER TABLE `PersonAddress` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PersonPhone`
--

DROP TABLE IF EXISTS `PersonPhone`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PersonPhone` (
  `personID` int(11) DEFAULT NULL,
  `phone` int(11) NOT NULL,
  KEY `personID` (`personID`),
  CONSTRAINT `personphone_ibfk_1` FOREIGN KEY (`personID`) REFERENCES `Person` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PersonPhone`
--

LOCK TABLES `PersonPhone` WRITE;
/*!40000 ALTER TABLE `PersonPhone` DISABLE KEYS */;
/*!40000 ALTER TABLE `PersonPhone` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Personlinks`
--

DROP TABLE IF EXISTS `Personlinks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Personlinks` (
  `personTypeID` int(11) DEFAULT NULL,
  `linkID` int(11) DEFAULT NULL,
  KEY `linkID` (`linkID`),
  KEY `personTypeID` (`personTypeID`),
  CONSTRAINT `personlinks_ibfk_1` FOREIGN KEY (`linkID`) REFERENCES `Links` (`linksID`),
  CONSTRAINT `personlinks_ibfk_2` FOREIGN KEY (`personTypeID`) REFERENCES `MappingPersonTypeIDString` (`personTypeID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Personlinks`
--

LOCK TABLES `Personlinks` WRITE;
/*!40000 ALTER TABLE `Personlinks` DISABLE KEYS */;
/*!40000 ALTER TABLE `Personlinks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PublishedNews`
--

DROP TABLE IF EXISTS `PublishedNews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PublishedNews` (
  `editorID` int(11) DEFAULT NULL,
  `publishedNewsID` int(11) DEFAULT NULL,
  KEY `editorID` (`editorID`),
  KEY `publishedNewsID` (`publishedNewsID`),
  CONSTRAINT `publishednews_ibfk_1` FOREIGN KEY (`editorID`) REFERENCES `person` (`ID`),
  CONSTRAINT `publishednews_ibfk_2` FOREIGN KEY (`publishedNewsID`) REFERENCES `News` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PublishedNews`
--

LOCK TABLES `PublishedNews` WRITE;
/*!40000 ALTER TABLE `PublishedNews` DISABLE KEYS */;
/*!40000 ALTER TABLE `PublishedNews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Stuff`
--

DROP TABLE IF EXISTS `Stuff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Stuff` (
  `stuffID` int(11) NOT NULL,
  `basicSalary` int(11) NOT NULL,
  `cutOFF` int(11) DEFAULT NULL,
  `bounce` int(11) DEFAULT NULL,
  PRIMARY KEY (`stuffID`),
  CONSTRAINT `stuff_ibfk_1` FOREIGN KEY (`stuffID`) REFERENCES `Person` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Stuff`
--

LOCK TABLES `Stuff` WRITE;
/*!40000 ALTER TABLE `Stuff` DISABLE KEYS */;
/*!40000 ALTER TABLE `Stuff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `SupervisedNews`
--

DROP TABLE IF EXISTS `SupervisedNews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `SupervisedNews` (
  `supervisorID` int(11) DEFAULT NULL,
  `supervisedNewsID` int(11) DEFAULT NULL,
  KEY `supervisorID` (`supervisorID`),
  KEY `supervisedNewsID` (`supervisedNewsID`),
  CONSTRAINT `supervisednews_ibfk_1` FOREIGN KEY (`supervisorID`) REFERENCES `Person` (`ID`),
  CONSTRAINT `supervisednews_ibfk_2` FOREIGN KEY (`supervisedNewsID`) REFERENCES `News` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SupervisedNews`
--

LOCK TABLES `SupervisedNews` WRITE;
/*!40000 ALTER TABLE `SupervisedNews` DISABLE KEYS */;
/*!40000 ALTER TABLE `SupervisedNews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `USER`
--

DROP TABLE IF EXISTS `USER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `USER` (
  `userID` int(11) NOT NULL,
  PRIMARY KEY (`userID`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `Person` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `USER`
--

LOCK TABLES `USER` WRITE;
/*!40000 ALTER TABLE `USER` DISABLE KEYS */;
/*!40000 ALTER TABLE `USER` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `UploaderPublishNews`
--

DROP TABLE IF EXISTS `UploaderPublishNews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `UploaderPublishNews` (
  `uploaderID` int(11) DEFAULT NULL,
  `uploadedNewsID` int(11) DEFAULT NULL,
  KEY `uploaderID` (`uploaderID`),
  KEY `uploadedNewsID` (`uploadedNewsID`),
  CONSTRAINT `uploaderpublishnews_ibfk_1` FOREIGN KEY (`uploaderID`) REFERENCES `Person` (`ID`),
  CONSTRAINT `uploaderpublishnews_ibfk_2` FOREIGN KEY (`uploadedNewsID`) REFERENCES `News` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `UploaderPublishNews`
--

LOCK TABLES `UploaderPublishNews` WRITE;
/*!40000 ALTER TABLE `UploaderPublishNews` DISABLE KEYS */;
/*!40000 ALTER TABLE `UploaderPublishNews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `UserAdvertiseAds`
--

DROP TABLE IF EXISTS `UserAdvertiseAds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `UserAdvertiseAds` (
  `advID` int(11) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  KEY `advID` (`advID`),
  KEY `userID` (`userID`),
  CONSTRAINT `useradvertiseads_ibfk_1` FOREIGN KEY (`advID`) REFERENCES `Ads` (`advID`),
  CONSTRAINT `useradvertiseads_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `User` (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `UserAdvertiseAds`
--

LOCK TABLES `UserAdvertiseAds` WRITE;
/*!40000 ALTER TABLE `UserAdvertiseAds` DISABLE KEYS */;
/*!40000 ALTER TABLE `UserAdvertiseAds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `UserCommentArticle`
--

DROP TABLE IF EXISTS `UserCommentArticle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `UserCommentArticle` (
  `userID` int(11) DEFAULT NULL,
  `commnetDate` text,
  `content` mediumtext,
  `state` text,
  `articleID` int(11) DEFAULT NULL,
  KEY `userID` (`userID`),
  KEY `articleID` (`articleID`),
  CONSTRAINT `usercommentarticle_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `User` (`userID`),
  CONSTRAINT `usercommentarticle_ibfk_2` FOREIGN KEY (`articleID`) REFERENCES `Article` (`acticleID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `UserCommentArticle`
--

LOCK TABLES `UserCommentArticle` WRITE;
/*!40000 ALTER TABLE `UserCommentArticle` DISABLE KEYS */;
/*!40000 ALTER TABLE `UserCommentArticle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `UserDownloadArticle`
--

DROP TABLE IF EXISTS `UserDownloadArticle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `UserDownloadArticle` (
  `userID` int(11) DEFAULT NULL,
  `articleID` int(11) DEFAULT NULL,
  `downloadDate` text,
  KEY `userID` (`userID`),
  KEY `articleID` (`articleID`),
  CONSTRAINT `userdownloadarticle_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `User` (`userID`),
  CONSTRAINT `userdownloadarticle_ibfk_2` FOREIGN KEY (`articleID`) REFERENCES `Article` (`acticleID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `UserDownloadArticle`
--

LOCK TABLES `UserDownloadArticle` WRITE;
/*!40000 ALTER TABLE `UserDownloadArticle` DISABLE KEYS */;
/*!40000 ALTER TABLE `UserDownloadArticle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `address` (
  `addressChildID` int(11) NOT NULL AUTO_INCREMENT,
  `addressName` varchar(20) NOT NULL,
  `addressParentID` int(11) DEFAULT NULL,
  PRIMARY KEY (`addressChildID`),
  UNIQUE KEY `adressName` (`addressName`),
  KEY `addressParentID` (`addressParentID`),
  CONSTRAINT `address_ibfk_1` FOREIGN KEY (`addressParentID`) REFERENCES `Address` (`addressChildID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `address`
--

LOCK TABLES `address` WRITE;
/*!40000 ALTER TABLE `address` DISABLE KEYS */;
INSERT INTO `address` VALUES (1,'lalla',NULL),(2,'lalla2',NULL),(3,'lalla3',NULL);
/*!40000 ALTER TABLE `address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `attachmentID` int(11) DEFAULT '0',
  `firstComingDate` text NOT NULL,
  `reomveDate` text,
  `publishDate` text NOT NULL,
  `category` text NOT NULL,
  `state` tinyint(4) NOT NULL,
  `retouchState` tinyint(4) DEFAULT NULL,
  `linkID` int(11) DEFAULT NULL,
  `viewsNumber` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `linkID` (`linkID`),
  CONSTRAINT `news_ibfk_1` FOREIGN KEY (`linkID`) REFERENCES `links` (`linksID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-30 23:00:29
