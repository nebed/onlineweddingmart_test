-- MySQL dump 10.16  Distrib 10.1.21-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: localhost
-- ------------------------------------------------------
-- Server version	10.1.21-MariaDB

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`),
  KEY `categories_parent_id_foreign` (`parent_id`),
  KEY `slug` (`slug`),
  KEY `id` (`id`),
  CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,NULL,1,'Real Wedding','real-wedding','2018-09-14 19:27:34','2018-09-14 19:27:34'),(2,NULL,1,'Wedding Advice','wedding-advice','2018-09-14 19:27:34','2018-09-14 19:27:34'),(3,NULL,1,'Wedding Favours','wedding-favours','2018-09-30 23:00:00','2018-09-30 23:00:00'),(4,NULL,1,'Wedding Ideas','wedding-ideas','2018-09-30 23:00:00','2018-09-30 23:00:00'),(5,NULL,1,'Dress Guide','dress-guide','2018-09-30 23:00:00','2018-09-30 23:00:00'),(6,NULL,1,'Destination Wedding','destination-wedding','2018-09-30 23:00:00','2018-09-30 23:00:00');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `customers_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_rows`
--

DROP TABLE IF EXISTS `data_rows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_rows` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_type_id` int(10) unsigned NOT NULL,
  `field` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`),
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_rows`
--

LOCK TABLES `data_rows` WRITE;
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;
INSERT INTO `data_rows` VALUES (1,1,'id','number','ID',1,0,0,0,0,0,'',1),(2,1,'name','text','Name',1,1,1,1,1,1,'',2),(3,1,'email','text','Email',1,1,1,1,1,1,'',3),(4,1,'password','password','Password',1,0,0,1,1,0,'',4),(5,1,'remember_token','text','Remember Token',0,0,0,0,0,0,'',5),(6,1,'created_at','timestamp','Created At',0,1,1,0,0,0,'',6),(7,1,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'',7),(8,1,'avatar','image','Avatar',0,1,1,1,1,1,'',8),(9,1,'user_belongsto_role_relationship','relationship','Role',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":\"0\"}',10),(10,1,'user_belongstomany_role_relationship','relationship','Roles',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}',11),(11,1,'locale','text','Locale',0,1,1,1,1,0,'',12),(12,1,'settings','hidden','Settings',0,0,0,0,0,0,'',12),(13,2,'id','number','ID',1,0,0,0,0,0,'',1),(14,2,'name','text','Name',1,1,1,1,1,1,'',2),(15,2,'created_at','timestamp','Created At',0,0,0,0,0,0,'',3),(16,2,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'',4),(17,3,'id','number','ID',1,0,0,0,0,0,'',1),(18,3,'name','text','Name',1,1,1,1,1,1,'',2),(19,3,'created_at','timestamp','Created At',0,0,0,0,0,0,'',3),(20,3,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'',4),(21,3,'display_name','text','Display Name',1,1,1,1,1,1,'',5),(22,1,'role_id','text','Role',1,1,1,1,1,1,'',9),(23,4,'id','number','ID',1,0,0,0,0,0,'',1),(24,4,'parent_id','select_dropdown','Parent',0,0,1,1,1,1,'{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}',2),(25,4,'order','text','Order',1,1,1,1,1,1,'{\"default\":1}',3),(26,4,'name','text','Name',1,1,1,1,1,1,'',4),(27,4,'slug','text','Slug',1,1,1,1,1,1,'{\"slugify\":{\"origin\":\"name\"}}',5),(28,4,'created_at','timestamp','Created At',0,0,1,0,0,0,'',6),(29,4,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'',7),(30,5,'id','number','ID',1,0,0,0,0,0,'',1),(31,5,'author_id','text','Author',1,0,1,1,0,1,'',2),(32,5,'category_id','text','Category',1,0,1,1,1,0,'',3),(33,5,'title','text','Title',1,1,1,1,1,1,'',4),(34,5,'excerpt','text_area','Excerpt',1,0,1,1,1,1,'',5),(35,5,'body','rich_text_box','Body',1,0,1,1,1,1,'',6),(36,5,'image','image','Post Image',0,1,1,1,1,1,'{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}',7),(37,5,'slug','text','Slug',1,0,1,1,1,1,'{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}',8),(38,5,'meta_description','text_area','Meta Description',1,0,1,1,1,1,'',9),(39,5,'meta_keywords','text_area','Meta Keywords',1,0,1,1,1,1,'',10),(40,5,'status','select_dropdown','Status',1,1,1,1,1,1,'{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}',11),(41,5,'created_at','timestamp','Created At',0,1,1,0,0,0,'',12),(42,5,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'',13),(43,5,'seo_title','text','SEO Title',0,1,1,1,1,1,'',14),(44,5,'featured','checkbox','Featured',1,1,1,1,1,1,'',15),(45,6,'id','number','ID',1,0,0,0,0,0,'',1),(46,6,'author_id','text','Author',1,0,0,0,0,0,'',2),(47,6,'title','text','Title',1,1,1,1,1,1,'',3),(48,6,'excerpt','text_area','Excerpt',1,0,1,1,1,1,'',4),(49,6,'body','rich_text_box','Body',1,0,1,1,1,1,'',5),(50,6,'slug','text','Slug',1,0,1,1,1,1,'{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}',6),(51,6,'meta_description','text','Meta Description',1,0,1,1,1,1,'',7),(52,6,'meta_keywords','text','Meta Keywords',1,0,1,1,1,1,'',8),(53,6,'status','select_dropdown','Status',1,1,1,1,1,1,'{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}',9),(54,6,'created_at','timestamp','Created At',1,1,1,0,0,0,'',10),(55,6,'updated_at','timestamp','Updated At',1,0,0,0,0,0,'',11),(56,6,'image','image','Page Image',0,1,1,1,1,1,'',12),(57,7,'id','text','Id',1,0,0,0,0,0,'',1),(58,7,'name','text','Name',1,1,1,1,1,1,'',2),(59,7,'created_at','timestamp','Created At',0,1,1,1,0,1,'',3),(60,7,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'',4);
/*!40000 ALTER TABLE `data_rows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_types`
--

DROP TABLE IF EXISTS `data_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_types`
--

LOCK TABLES `data_types` WRITE;
/*!40000 ALTER TABLE `data_types` DISABLE KEYS */;
INSERT INTO `data_types` VALUES (1,'users','users','User','Users','voyager-person','TCG\\Voyager\\Models\\User','TCG\\Voyager\\Policies\\UserPolicy','','',1,0,NULL,'2018-09-14 19:27:26','2018-09-14 19:27:26'),(2,'menus','menus','Menu','Menus','voyager-list','TCG\\Voyager\\Models\\Menu',NULL,'','',1,0,NULL,'2018-09-14 19:27:26','2018-09-14 19:27:26'),(3,'roles','roles','Role','Roles','voyager-lock','TCG\\Voyager\\Models\\Role',NULL,'','',1,0,NULL,'2018-09-14 19:27:26','2018-09-14 19:27:26'),(4,'categories','categories','Category','Categories','voyager-categories','TCG\\Voyager\\Models\\Category',NULL,'','',1,0,NULL,'2018-09-14 19:27:33','2018-09-14 19:27:33'),(5,'posts','posts','Post','Posts','voyager-news','TCG\\Voyager\\Models\\Post','TCG\\Voyager\\Policies\\PostPolicy','','',1,0,NULL,'2018-09-14 19:27:34','2018-09-14 19:27:34'),(6,'pages','pages','Page','Pages','voyager-file-text','TCG\\Voyager\\Models\\Page',NULL,'','',1,0,NULL,'2018-09-14 19:27:36','2018-09-14 19:27:36'),(7,'locations','locations','Location','Locations','','App\\Location','','LocationController','',1,0,'{\"order_column\":\"id\",\"order_display_column\":\"\"}','2018-09-14 21:57:06','2018-09-14 21:57:06');
/*!40000 ALTER TABLE `data_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `locations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `locations_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locations`
--

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;
INSERT INTO `locations` VALUES (1,'Lagos','2018-09-14 23:00:00','2018-09-14 23:00:00','lagos'),(2,'Abuja','2018-09-14 23:00:00','2018-09-14 23:00:00','abuja'),(3,'Port Hacourt','2018-09-26 23:00:00','2018-09-26 23:00:00','port-hacourt'),(4,'Ibadan','2018-09-26 23:00:00','2018-09-26 23:00:00','ibadan'),(5,'Calabar','2018-09-26 23:00:00','2018-09-26 23:00:00','calabar'),(6,'Enugu','2018-09-26 23:00:00','2018-09-26 23:00:00','enugu'),(7,'Owerri','2018-09-26 23:00:00','2018-09-26 23:00:00','owerri'),(8,'Ikeja','2018-09-26 23:00:00','2018-09-26 23:00:00','ikeja'),(9,'Lokoja','2018-09-26 23:00:00','2018-09-26 23:00:00','lokoja'),(10,'Jos','2018-09-26 23:00:00','2018-09-26 23:00:00','jos'),(11,'Asaba','2018-09-26 23:00:00','2018-09-26 23:00:00','asaba'),(12,'Kaduna','2018-09-26 23:00:00','2018-09-26 23:00:00','kaduna'),(13,'Warri','2018-09-26 23:00:00','2018-09-26 23:00:00','warri');
/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `model_id` int(10) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `collection_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `size` int(10) unsigned NOT NULL,
  `manipulations` text COLLATE utf8_unicode_ci NOT NULL,
  `custom_properties` text COLLATE utf8_unicode_ci NOT NULL,
  `order_column` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `media_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_items`
--

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` VALUES (1,1,'Dashboard','','_self','voyager-boat',NULL,NULL,1,'2018-09-14 19:27:28','2018-09-14 19:27:28','voyager.dashboard',NULL),(2,1,'Media','','_self','voyager-images',NULL,NULL,5,'2018-09-14 19:27:29','2018-09-14 19:27:29','voyager.media.index',NULL),(3,1,'Users','','_self','voyager-person',NULL,NULL,3,'2018-09-14 19:27:29','2018-09-14 19:27:29','voyager.users.index',NULL),(4,1,'Roles','','_self','voyager-lock',NULL,NULL,2,'2018-09-14 19:27:29','2018-09-14 19:27:29','voyager.roles.index',NULL),(5,1,'Tools','','_self','voyager-tools',NULL,NULL,9,'2018-09-14 19:27:29','2018-09-14 19:27:29',NULL,NULL),(6,1,'Menu Builder','','_self','voyager-list',NULL,5,10,'2018-09-14 19:27:29','2018-09-14 19:27:29','voyager.menus.index',NULL),(7,1,'Database','','_self','voyager-data',NULL,5,11,'2018-09-14 19:27:29','2018-09-14 19:27:29','voyager.database.index',NULL),(8,1,'Compass','','_self','voyager-compass',NULL,5,12,'2018-09-14 19:27:29','2018-09-14 19:27:29','voyager.compass.index',NULL),(9,1,'BREAD','','_self','voyager-bread',NULL,5,13,'2018-09-14 19:27:29','2018-09-14 19:27:29','voyager.bread.index',NULL),(10,1,'Settings','','_self','voyager-settings',NULL,NULL,14,'2018-09-14 19:27:29','2018-09-14 19:27:29','voyager.settings.index',NULL),(11,1,'Categories','','_self','voyager-categories',NULL,NULL,8,'2018-09-14 19:27:33','2018-09-14 19:27:33','voyager.categories.index',NULL),(12,1,'Posts','','_self','voyager-news',NULL,NULL,6,'2018-09-14 19:27:35','2018-09-14 19:27:35','voyager.posts.index',NULL),(13,1,'Pages','','_self','voyager-file-text',NULL,NULL,7,'2018-09-14 19:27:37','2018-09-14 19:27:37','voyager.pages.index',NULL),(14,1,'Hooks','','_self','voyager-hook',NULL,5,13,'2018-09-14 19:27:40','2018-09-14 19:27:40','voyager.hooks',NULL),(15,1,'Locations','','_self','',NULL,NULL,15,'2018-09-14 21:57:06','2018-09-14 21:57:06','voyager.locations.index',NULL);
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'admin','2018-09-14 19:27:28','2018-09-14 19:27:28');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2016_01_01_000000_add_voyager_user_fields',1),(4,'2016_01_01_000000_create_data_types_table',1),(5,'2016_01_01_000000_create_pages_table',1),(6,'2016_01_01_000000_create_posts_table',1),(7,'2016_02_15_204651_create_categories_table',1),(8,'2016_05_19_173453_create_menu_table',1),(9,'2016_10_21_190000_create_roles_table',1),(10,'2016_10_21_190000_create_settings_table',1),(11,'2016_11_30_135954_create_permission_table',1),(12,'2016_11_30_141208_create_permission_role_table',1),(13,'2016_12_26_201236_data_types__add__server_side',1),(14,'2017_01_13_000000_add_route_to_menu_items_table',1),(15,'2017_01_14_005015_create_translations_table',1),(16,'2017_01_15_000000_make_table_name_nullable_in_permissions_table',1),(17,'2017_03_06_000000_add_controller_to_data_types_table',1),(18,'2017_04_11_000000_alter_post_nullable_fields_table',1),(19,'2017_04_21_000000_add_order_to_data_rows_table',1),(20,'2017_07_05_210000_add_policyname_to_data_types_table',1),(21,'2017_08_05_000000_add_group_to_settings_table',1),(22,'2017_11_26_013050_add_user_role_relationship',1),(23,'2017_11_26_015000_create_user_roles_table',1),(24,'2018_03_11_000000_add_user_settings',1),(25,'2018_03_14_000000_add_details_to_data_types_table',1),(26,'2018_03_16_000000_make_settings_value_nullable',1),(27,'2018_09_14_200824_create_vendors_table',1),(28,'2018_09_14_201212_create_services_table',1),(29,'2018_09_14_201316_create_locations_table',1),(30,'2018_09_20_124811_create_media_table',2),(31,'2018_09_22_203730_create_projects_table',3),(32,'2018_09_24_221226_add_slug_to_projects',3),(33,'2018_09_26_215906_create_photos_table',4),(34,'2018_09_27_145003_add_slug_to_services',5),(35,'2018_09_27_154025_add_slug_to_locations',6),(36,'2018_09_30_161710_create_customers_table',7);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1),(32,1),(33,1),(34,1),(35,1),(36,1),(37,1),(38,1),(39,1),(40,1),(42,1),(43,1),(44,1),(45,1),(46,1);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'browse_admin',NULL,'2018-09-14 19:27:29','2018-09-14 19:27:29'),(2,'browse_bread',NULL,'2018-09-14 19:27:29','2018-09-14 19:27:29'),(3,'browse_database',NULL,'2018-09-14 19:27:29','2018-09-14 19:27:29'),(4,'browse_media',NULL,'2018-09-14 19:27:29','2018-09-14 19:27:29'),(5,'browse_compass',NULL,'2018-09-14 19:27:29','2018-09-14 19:27:29'),(6,'browse_menus','menus','2018-09-14 19:27:29','2018-09-14 19:27:29'),(7,'read_menus','menus','2018-09-14 19:27:29','2018-09-14 19:27:29'),(8,'edit_menus','menus','2018-09-14 19:27:30','2018-09-14 19:27:30'),(9,'add_menus','menus','2018-09-14 19:27:30','2018-09-14 19:27:30'),(10,'delete_menus','menus','2018-09-14 19:27:30','2018-09-14 19:27:30'),(11,'browse_roles','roles','2018-09-14 19:27:30','2018-09-14 19:27:30'),(12,'read_roles','roles','2018-09-14 19:27:30','2018-09-14 19:27:30'),(13,'edit_roles','roles','2018-09-14 19:27:30','2018-09-14 19:27:30'),(14,'add_roles','roles','2018-09-14 19:27:30','2018-09-14 19:27:30'),(15,'delete_roles','roles','2018-09-14 19:27:30','2018-09-14 19:27:30'),(16,'browse_users','users','2018-09-14 19:27:30','2018-09-14 19:27:30'),(17,'read_users','users','2018-09-14 19:27:30','2018-09-14 19:27:30'),(18,'edit_users','users','2018-09-14 19:27:30','2018-09-14 19:27:30'),(19,'add_users','users','2018-09-14 19:27:30','2018-09-14 19:27:30'),(20,'delete_users','users','2018-09-14 19:27:30','2018-09-14 19:27:30'),(21,'browse_settings','settings','2018-09-14 19:27:30','2018-09-14 19:27:30'),(22,'read_settings','settings','2018-09-14 19:27:30','2018-09-14 19:27:30'),(23,'edit_settings','settings','2018-09-14 19:27:30','2018-09-14 19:27:30'),(24,'add_settings','settings','2018-09-14 19:27:30','2018-09-14 19:27:30'),(25,'delete_settings','settings','2018-09-14 19:27:30','2018-09-14 19:27:30'),(26,'browse_categories','categories','2018-09-14 19:27:33','2018-09-14 19:27:33'),(27,'read_categories','categories','2018-09-14 19:27:33','2018-09-14 19:27:33'),(28,'edit_categories','categories','2018-09-14 19:27:33','2018-09-14 19:27:33'),(29,'add_categories','categories','2018-09-14 19:27:33','2018-09-14 19:27:33'),(30,'delete_categories','categories','2018-09-14 19:27:33','2018-09-14 19:27:33'),(31,'browse_posts','posts','2018-09-14 19:27:35','2018-09-14 19:27:35'),(32,'read_posts','posts','2018-09-14 19:27:35','2018-09-14 19:27:35'),(33,'edit_posts','posts','2018-09-14 19:27:35','2018-09-14 19:27:35'),(34,'add_posts','posts','2018-09-14 19:27:35','2018-09-14 19:27:35'),(35,'delete_posts','posts','2018-09-14 19:27:35','2018-09-14 19:27:35'),(36,'browse_pages','pages','2018-09-14 19:27:37','2018-09-14 19:27:37'),(37,'read_pages','pages','2018-09-14 19:27:38','2018-09-14 19:27:38'),(38,'edit_pages','pages','2018-09-14 19:27:38','2018-09-14 19:27:38'),(39,'add_pages','pages','2018-09-14 19:27:38','2018-09-14 19:27:38'),(40,'delete_pages','pages','2018-09-14 19:27:38','2018-09-14 19:27:38'),(41,'browse_hooks',NULL,'2018-09-14 19:27:40','2018-09-14 19:27:40'),(42,'browse_locations','locations','2018-09-14 21:57:06','2018-09-14 21:57:06'),(43,'read_locations','locations','2018-09-14 21:57:06','2018-09-14 21:57:06'),(44,'edit_locations','locations','2018-09-14 21:57:06','2018-09-14 21:57:06'),(45,'add_locations','locations','2018-09-14 21:57:06','2018-09-14 21:57:06'),(46,'delete_locations','locations','2018-09-14 21:57:06','2018-09-14 21:57:06');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(10) unsigned NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photos`
--

LOCK TABLES `photos` WRITE;
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
INSERT INTO `photos` VALUES (1,11,'http://localhost:8000/storage/files/2/Perfume-Logo-rect.jpg','2018-09-27 07:48:29','2018-09-27 07:48:29'),(2,11,'http://localhost:8000/storage/files/2/Perfume-Logo.png','2018-09-27 07:48:29','2018-09-27 07:48:29'),(3,11,'http://localhost:8000/storage/files/2/WedMeGood   India s Best Wedding Planning Site   Online Wedding Planner.png','2018-09-27 07:48:29','2018-09-27 07:48:29'),(4,11,'http://localhost:8000/storage/files/2/Perfume-Logo.jpg','2018-09-27 07:48:29','2018-09-27 07:48:29'),(5,12,'http://localhost:8000/storage/files/2/Monoo-Trad.jpg','2018-09-27 11:26:02','2018-09-27 11:26:02'),(6,12,'http://localhost:8000/storage/files/2/Perfume-Logo.jpg','2018-09-27 11:26:02','2018-09-27 11:26:02'),(7,12,'http://localhost:8000/storage/files/2/Capture.PNG','2018-09-27 11:26:02','2018-09-27 11:26:02'),(8,13,'http://localhost:8000/storage/files/2/WedMeGood   India s Best Wedding Planning Site   Online Wedding Planner.png','2018-09-27 11:27:44','2018-09-27 11:27:44'),(9,13,'http://localhost:8000/storage/files/2/Perfume-Logo.png','2018-09-27 11:27:44','2018-09-27 11:27:44'),(10,13,'http://localhost:8000/storage/files/2/Perfume-Logo-rect.jpg','2018-09-27 11:27:44','2018-09-27 11:27:44'),(11,14,'http://localhost:8000/storage/files/2/Capture.PNG','2018-09-27 11:28:49','2018-09-27 11:28:49'),(12,14,'http://localhost:8000/storage/files/2/Perfume-Logo-rect.jpg','2018-09-27 11:28:49','2018-09-27 11:28:49'),(13,14,'http://localhost:8000/storage/files/2/Perfume-Logo-rect.png','2018-09-27 11:28:49','2018-09-27 11:28:49'),(14,16,'http://localhost:8000/storage/files/2/Monoo-Trad.jpg','2018-09-27 11:33:57','2018-09-27 11:33:57'),(15,16,'http://localhost:8000/storage/files/2/Perfume-Logo-rect.jpg','2018-09-27 11:33:57','2018-09-27 11:33:57'),(16,16,'http://localhost:8000/storage/files/2/WedMeGood   India s Best Wedding Planning Site   Online Wedding Planner.png','2018-09-27 11:33:57','2018-09-27 11:33:57'),(17,17,'http://localhost:8000/storage/files/2/Capture.PNG','2018-09-27 11:34:55','2018-09-27 11:34:55'),(18,17,'http://localhost:8000/storage/files/2/Perfume-Logo.jpg','2018-09-27 11:34:55','2018-09-27 11:34:55'),(19,17,'http://localhost:8000/storage/files/2/Perfume-Logo.png','2018-09-27 11:34:55','2018-09-27 11:34:55');
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8_unicode_ci,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8_unicode_ci,
  `meta_keywords` text COLLATE utf8_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,0,1,'Lorem Ipsum Post',NULL,'This is the excerpt for the Lorem Ipsum Post','<p>This is the body of the lorem ipsum post</p>','posts/post1.jpg','lorem-ipsum-post','This is the meta description','keyword1, keyword2, keyword3','PUBLISHED',0,'2018-09-14 19:27:36','2018-09-14 19:27:36'),(2,0,2,'My Sample Post',NULL,'This is the excerpt for the sample Post','<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>','posts/post2.jpg','my-sample-post','Meta Description for sample post','keyword1, keyword2, keyword3','PUBLISHED',0,'2018-09-14 19:27:36','2018-09-14 19:27:36'),(3,0,1,'Latest Post',NULL,'This is the excerpt for the latest post','<p>This is the body for the latest post</p>','posts/post3.jpg','latest-post','This is the meta description','keyword1, keyword2, keyword3','PUBLISHED',0,'2018-09-14 19:27:36','2018-09-14 19:27:36'),(4,0,2,'Yarr Post',NULL,'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.','<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>','posts/post4.jpg','yarr-post','this be a meta descript','keyword1, keyword2, keyword3','PUBLISHED',0,'2018-09-14 19:27:36','2018-09-14 19:27:36'),(5,0,1,'New Post',NULL,NULL,'<p>Hello This is a New Post ubnto theosnckwsnlwenciowenc cw jkcniowemn we weocn ji  ciqwec oweb wn</p>','new_post.jpg','new_post',NULL,NULL,'PENDING',0,'2018-10-02 16:19:40','2018-10-03 08:24:06'),(6,0,1,'New Post',NULL,NULL,'<p>Hello This is a New Post ubnto theosnckwsnlwenciowenc cw jkcniowemn we weocn ji  ciqwec oweb wn</p>','new_post_1.jpg','new_post_1',NULL,NULL,'PUBLISHED',0,'2018-10-02 16:20:05','2018-10-03 08:20:21'),(7,0,1,'New Post',NULL,NULL,'<p>Hello This is a New Post ubnto theosnckwsnlwenciowenc cw jkcniowemn we weocn ji  ciqwec oweb wn</p>','new_post_2.jpg','new_post_2',NULL,NULL,'PENDING',0,'2018-10-02 16:20:25','2018-10-03 08:21:41');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `vendor_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `projects_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (11,2,'project 10','2018-09-27 07:48:29','2018-09-27 07:48:29','project_10'),(12,2,'Ola, wedding 1','2018-09-27 11:26:02','2018-09-27 11:26:02','ola_wedding_1'),(13,2,'New One','2018-09-27 11:27:44','2018-09-27 11:27:44','new_one'),(14,2,'Another one','2018-09-27 11:28:49','2018-09-27 11:28:49','another_one'),(16,2,'new one','2018-09-27 11:33:56','2018-09-27 11:33:56','new_one_1'),(17,2,'new one','2018-09-27 11:34:55','2018-09-27 11:34:55','new_one_2');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','Administrator','2018-09-14 19:27:29','2018-09-14 19:27:29'),(2,'user','Normal User','2018-09-14 19:27:29','2018-09-14 19:27:29');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `services_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'Wedding Photography','2018-09-14 23:00:00','2018-09-14 23:00:00','wedding-photography'),(2,'Bridal Makeup','2018-09-14 23:00:00','2018-09-14 23:00:00','bridal-makeup'),(3,'Wedding Venues','2018-09-26 23:00:00','2018-09-26 23:00:00','wedding-venues'),(4,'Groom Wear','2018-09-26 23:00:00','2018-09-26 23:00:00','groom-wear'),(5,'Wedding Cards','2018-09-26 23:00:00','2018-09-26 23:00:00','wedding-cards'),(6,'Wedding Cakes','2018-09-26 23:00:00','2018-09-26 23:00:00','wedding-cakes'),(7,'Traditional Wears','2018-09-26 23:00:00','2018-09-26 23:00:00','traditional-wears'),(8,'Wedding Decorators','2018-09-26 23:00:00','2018-09-26 23:00:00','wedding-decorators'),(9,'Wedding Catering','2018-09-26 23:00:00','2018-09-26 23:00:00','wedding-catering');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci,
  `details` text COLLATE utf8_unicode_ci,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'site.title','Site Title','Site Title','','text',1,'Site'),(2,'site.description','Site Description','Site Description','','text',2,'Site'),(3,'site.logo','Site Logo','','','image',3,'Site'),(4,'site.google_analytics_tracking_id','Google Analytics Tracking ID','','','text',4,'Site'),(5,'admin.bg_image','Admin Background Image','','','image',5,'Admin'),(6,'admin.title','Admin Title','Voyager','','text',1,'Admin'),(7,'admin.description','Admin Description','Welcome to Voyager. The Missing Admin for Laravel','','text',2,'Admin'),(8,'admin.loader','Admin Loader','','','image',3,'Admin'),(9,'admin.icon_image','Admin Icon Image','','','image',4,'Admin'),(10,'admin.google_analytics_client_id','Google Analytics Client ID (used for admin dashboard)','','','text',1,'Admin');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `translations`
--

DROP TABLE IF EXISTS `translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `foreign_key` int(10) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `translations`
--

LOCK TABLES `translations` WRITE;
/*!40000 ALTER TABLE `translations` DISABLE KEYS */;
INSERT INTO `translations` VALUES (1,'data_types','display_name_singular',5,'pt','Post','2018-09-14 19:27:38','2018-09-14 19:27:38'),(2,'data_types','display_name_singular',6,'pt','Página','2018-09-14 19:27:38','2018-09-14 19:27:38'),(3,'data_types','display_name_singular',1,'pt','Utilizador','2018-09-14 19:27:38','2018-09-14 19:27:38'),(4,'data_types','display_name_singular',4,'pt','Categoria','2018-09-14 19:27:38','2018-09-14 19:27:38'),(5,'data_types','display_name_singular',2,'pt','Menu','2018-09-14 19:27:38','2018-09-14 19:27:38'),(6,'data_types','display_name_singular',3,'pt','Função','2018-09-14 19:27:38','2018-09-14 19:27:38'),(7,'data_types','display_name_plural',5,'pt','Posts','2018-09-14 19:27:38','2018-09-14 19:27:38'),(8,'data_types','display_name_plural',6,'pt','Páginas','2018-09-14 19:27:38','2018-09-14 19:27:38'),(9,'data_types','display_name_plural',1,'pt','Utilizadores','2018-09-14 19:27:38','2018-09-14 19:27:38'),(10,'data_types','display_name_plural',4,'pt','Categorias','2018-09-14 19:27:39','2018-09-14 19:27:39'),(11,'data_types','display_name_plural',2,'pt','Menus','2018-09-14 19:27:39','2018-09-14 19:27:39'),(12,'data_types','display_name_plural',3,'pt','Funções','2018-09-14 19:27:39','2018-09-14 19:27:39'),(13,'categories','slug',1,'pt','categoria-1','2018-09-14 19:27:39','2018-09-14 19:27:39'),(14,'categories','name',1,'pt','Categoria 1','2018-09-14 19:27:39','2018-09-14 19:27:39'),(15,'categories','slug',2,'pt','categoria-2','2018-09-14 19:27:39','2018-09-14 19:27:39'),(16,'categories','name',2,'pt','Categoria 2','2018-09-14 19:27:39','2018-09-14 19:27:39'),(17,'pages','title',1,'pt','Olá Mundo','2018-09-14 19:27:39','2018-09-14 19:27:39'),(18,'pages','slug',1,'pt','ola-mundo','2018-09-14 19:27:39','2018-09-14 19:27:39'),(19,'pages','body',1,'pt','<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>','2018-09-14 19:27:39','2018-09-14 19:27:39'),(20,'menu_items','title',1,'pt','Painel de Controle','2018-09-14 19:27:39','2018-09-14 19:27:39'),(21,'menu_items','title',2,'pt','Media','2018-09-14 19:27:39','2018-09-14 19:27:39'),(22,'menu_items','title',12,'pt','Publicações','2018-09-14 19:27:39','2018-09-14 19:27:39'),(23,'menu_items','title',3,'pt','Utilizadores','2018-09-14 19:27:39','2018-09-14 19:27:39'),(24,'menu_items','title',11,'pt','Categorias','2018-09-14 19:27:39','2018-09-14 19:27:39'),(25,'menu_items','title',13,'pt','Páginas','2018-09-14 19:27:39','2018-09-14 19:27:39'),(26,'menu_items','title',4,'pt','Funções','2018-09-14 19:27:39','2018-09-14 19:27:39'),(27,'menu_items','title',5,'pt','Ferramentas','2018-09-14 19:27:39','2018-09-14 19:27:39'),(28,'menu_items','title',6,'pt','Menus','2018-09-14 19:27:40','2018-09-14 19:27:40'),(29,'menu_items','title',7,'pt','Base de dados','2018-09-14 19:27:40','2018-09-14 19:27:40'),(30,'menu_items','title',10,'pt','Configurações','2018-09-14 19:27:40','2018-09-14 19:27:40');
/*!40000 ALTER TABLE `translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_roles` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `user_roles_user_id_index` (`user_id`),
  KEY `user_roles_role_id_index` (`role_id`),
  CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_roles`
--

LOCK TABLES `user_roles` WRITE;
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'users/default.png',
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'Admin','admin@admin.com','users/default.png','$2y$10$olp73RJd5aYMO64G3.xsFO5QlO9W05ghP7175XzNHzJ7EQc6oj1IC','I4x4iLW78WFX6ZT5YOYV6WblnkHqJP3CuiRJFGh6DlgyDnokzGyK6N4zJ2L7',NULL,'2018-09-14 19:27:34','2018-09-14 19:27:34'),(2,2,'nebed','nebedinc@yahoo.com','users/default.png','$2y$10$aah6H9yx/aO1OJNOKEie.uBe5RYCK723OSWa79G1S.Q0IsRy1YLZ2','XTY0NvbszzSYXHprTMSWdd0XG3slnnjW4B9oRT8hzu3tfuvHM5uQgcPwyhIP',NULL,'2018-09-18 19:53:48','2018-09-18 19:53:48'),(3,NULL,'Somto','somto@onlineweddingmart.com','users/default.png','$2y$10$aVNXek7m1LyTt0EkexBlkeXrYD0NGFS6qCgTdzaBZenH1FDQFaVbq',NULL,NULL,'2018-10-02 20:38:16','2018-10-02 20:38:16');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendors`
--

DROP TABLE IF EXISTS `vendors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vendors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `service_id` int(10) unsigned NOT NULL,
  `location_id` int(10) unsigned NOT NULL,
  `contact_person` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `brand_name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_number` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `additional_info` text COLLATE utf8_unicode_ci,
  `approved` tinyint(1) DEFAULT NULL,
  `youtube_url` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instagram_url` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_url` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(10) unsigned DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `vendors_email_unique` (`email`),
  UNIQUE KEY `vendors_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendors`
--

LOCK TABLES `vendors` WRITE;
/*!40000 ALTER TABLE `vendors` DISABLE KEYS */;
INSERT INTO `vendors` VALUES (2,'Uchenna Nebedum','hello@onlineweddingmart.com','$2y$10$PXcMhxL3iA4Ik8AeJn0rvOarrI8U5cB2KhPpRsVJKCSGmKKKXJch6','uche_nebed',1,1,'Uchenna Nebedum','Uche Nebed','08103197446','http://www.website.com','hello',1,'http://www.youtube.com','http://www.instagram.com','http://www.facebook.com',NULL,'sdMIuzMuwlhOGnWEBHu0qchwNubHTck4w9JGb8ESUgDwqAionW8ahV238nSZ','2018-09-18 18:31:21','2018-09-30 22:34:11'),(3,'Uchenna Nebedum','newaccount@account.com','$2y$10$f/sgzd2uUPsNNDMaiTgc0OaidZrNNiOo0SDoGiJC3LlQutYCNVPiu','nebed',1,9,NULL,'Nebed',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-10-04 08:06:20','2018-10-04 08:06:20');
/*!40000 ALTER TABLE `vendors` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-04 10:38:32
