-- MySQL dump 10.17  Distrib 10.3.25-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: beerDB
-- ------------------------------------------------------
-- Server version	10.3.25-MariaDB-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Biere`
--

DROP TABLE IF EXISTS `Biere`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Biere` (
  `Id_Biere` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Biere` varchar(50) DEFAULT NULL,
  `Prix_Biere` double DEFAULT NULL,
  `Contenance_Biere` int(11) DEFAULT NULL,
  `Degre_alccol_Biere` double DEFAULT NULL,
  `Description` varchar(300) DEFAULT NULL,
  `Id_Producteur` int(11) NOT NULL,
  `Id_Style` int(11) NOT NULL,
  `Image_Biere` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`Id_Biere`),
  KEY `Id_Style` (`Id_Style`),
  KEY `Id_Producteur` (`Id_Producteur`),
  CONSTRAINT `Biere_ibfk_1` FOREIGN KEY (`Id_Style`) REFERENCES `Style` (`Id_Style`),
  CONSTRAINT `Biere_ibfk_2` FOREIGN KEY (`Id_Producteur`) REFERENCES `Producteur` (`Id_Producteur`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Biere`
--

LOCK TABLES `Biere` WRITE;
/*!40000 ALTER TABLE `Biere` DISABLE KEYS */;
INSERT INTO `Biere` VALUES (1,'Heineken',1.69,65,5,'la biere la',1,1,'https://www.heineken.com/media-eu/01pfxdqq/heineken-original-bottle.png?quality=85',NULL,NULL),(4,'Pelforth',0.5,25,5.8,'notre choix de bière entrée de gamme!',1,1,'https://pelforth.fr/sites/default/files/2021-03/blonde%20caroussel_0.png','2021-06-14 21:26:27','2021-06-14 21:26:27'),(7,'Karmeliet',2.1,25,8.4,'Mélange de trois grains différents créé une bière très riche en goût',3,2,'https://ab-inbev.be/storage/app/media//our-beers/tripel-karmeliet/tripel-card.png','2021-06-15 08:20:36','2021-06-15 08:20:36'),(8,'Goose Island',2.3,35,5.9,'Une IPA accompagnée de la célèbre oie de la brasserie américaine Goose Island !',3,3,'https://img.saveur-biere.com/img/p/3561-22078.jpg','2021-06-15 08:45:05','2021-06-15 08:45:05'),(9,'Hoegaarden',1.5,25,4.9,'Goût fruité, douce présence de la coriandre et belle amertume',3,5,'https://ab-inbev.be/storage/app/media//our-beers/hoegaarden/hoegaarden-card.png','2021-06-15 08:49:00','2021-06-15 08:49:00'),(10,'Desperados',1.9,33,5.9,'Née en 1995 dans notre brasserie de Schiltigheim en Alsace, Desperados® est la première bière aromatisée tequila commercialisée en France.',1,4,'https://www.heinekenfrance.fr/heineken-content/uploads/2020/03/desperados-415-330-20205169.png','2021-06-15 08:51:57','2021-06-15 08:51:57'),(11,'Leffe',1.4,33,6.6,'Saveurs de fruits, de malt, d\'épices et de levure.',3,1,'https://ab-inbev.be/storage/app/media//our-beers/leffe/leffe-card.png','2021-06-15 08:53:58','2021-06-15 08:53:58'),(12,'Grimbergen',1.6,33,6.7,'La bière du Phénix est une bière d\'abbaye authentique et savoureuse, réputée pour son contraste unique et équilibré entre les notes épicées et fruitées.',2,6,'https://www.bodecall.com/images/stories/virtuemart/product/grimbergen-blonde-blond.png','2021-06-15 09:12:17','2021-06-15 09:12:17'),(13,'Carlsberg',1.5,33,5,'La bière premium 100 % malt du fournisseur officiel de la cour royale danoise depuis 1904!',2,1,'https://www.gourmetencasa-tcm.com/5163/carlsberg-33cl-caisse-24-unites.jpg','2021-06-15 09:16:06','2021-06-15 09:16:06');
/*!40000 ALTER TABLE `Biere` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Biere_Nominee`
--

DROP TABLE IF EXISTS `Biere_Nominee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Biere_Nominee` (
  `Id_Biere` int(11) NOT NULL,
  `Classement` int(11) DEFAULT NULL,
  `Id_Concours` int(11) NOT NULL,
  `Année` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_Biere`),
  KEY `Id_Concours` (`Id_Concours`,`Année`),
  CONSTRAINT `Biere_Nominee_ibfk_1` FOREIGN KEY (`Id_Biere`) REFERENCES `Biere` (`Id_Biere`),
  CONSTRAINT `Biere_Nominee_ibfk_2` FOREIGN KEY (`Id_Concours`, `Année`) REFERENCES `Concours` (`Id_Concours`, `Année`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Biere_Nominee`
--

LOCK TABLES `Biere_Nominee` WRITE;
/*!40000 ALTER TABLE `Biere_Nominee` DISABLE KEYS */;
INSERT INTO `Biere_Nominee` VALUES (1,4,1,'2021'),(4,1,1,'2021'),(7,3,1,'2021'),(11,2,1,'2021');
/*!40000 ALTER TABLE `Biere_Nominee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Concours`
--

DROP TABLE IF EXISTS `Concours`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Concours` (
  `Id_Concours` int(11) NOT NULL,
  `Année` varchar(50) NOT NULL,
  `Nom_Concours` varchar(50) DEFAULT NULL,
  `Pays_Concours` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_Concours`,`Année`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Concours`
--

LOCK TABLES `Concours` WRITE;
/*!40000 ALTER TABLE `Concours` DISABLE KEYS */;
INSERT INTO `Concours` VALUES (1,'2021','Dégustation à Polytech','France');
/*!40000 ALTER TABLE `Concours` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Producteur`
--

DROP TABLE IF EXISTS `Producteur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Producteur` (
  `Id_Producteur` int(11) NOT NULL,
  `Nom_Producteur` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_Producteur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Producteur`
--

LOCK TABLES `Producteur` WRITE;
/*!40000 ALTER TABLE `Producteur` DISABLE KEYS */;
INSERT INTO `Producteur` VALUES (1,'Heineken'),(2,'Carlsberg'),(3,'AB InBev');
/*!40000 ALTER TABLE `Producteur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Style`
--

DROP TABLE IF EXISTS `Style`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Style` (
  `Id_Style` int(11) NOT NULL,
  `Nom_Style` varchar(50) DEFAULT NULL,
  `Couleur` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_Style`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Style`
--

LOCK TABLES `Style` WRITE;
/*!40000 ALTER TABLE `Style` DISABLE KEYS */;
INSERT INTO `Style` VALUES (1,'Lager','blonde'),(2,'Triple','blonde'),(3,'IPA','blonde'),(4,'Aromatisée','blonde'),(5,'witbier','blanche'),(6,'d\'Abbaye','blonde');
/*!40000 ALTER TABLE `Style` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2021_06_07_202701_create_beer_d_b_s_table',1),(5,'2021_06_08_142116_create_beers_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'gagoulefripou','gagou@gagou.fr',NULL,'$2y$10$KdPjKb93.HLKRjQwKdjbMegsffiML5E/4TAZzVk9cuHlDjo2GkTvm','lsevwHgQZ2ZyAKs04GzU313GDm6IgGo8PJbEPDK1dwxqgA3wmozJspcyjQC7','2021-06-14 12:45:39','2021-06-14 12:45:39'),(2,'user1','user1@web.fr',NULL,'$2y$10$.DLK74IDfLfz9/dT6z7Fs.XK0KwyqfEiiFbhHxDUNM.HyHtALPkxK',NULL,'2021-06-14 14:32:43','2021-06-14 14:32:43');
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

-- Dump completed on 2021-06-15 13:25:27
