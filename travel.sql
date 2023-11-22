-- MySQL dump 10.13  Distrib 8.0.35, for Linux (x86_64)
--
-- Host: localhost    Database: travel
-- ------------------------------------------------------
-- Server version	8.0.35-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `blog_headers`
--

DROP TABLE IF EXISTS `blog_headers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blog_headers` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_headers`
--

LOCK TABLES `blog_headers` WRITE;
/*!40000 ALTER TABLE `blog_headers` DISABLE KEYS */;
INSERT INTO `blog_headers` VALUES (1,'Kauai: Wellcome to Garden Island','kauai-wellcome-to-garden-island','Admin','1660070920.jpeg','1','2022-08-09 18:48:40','2022-08-09 18:48:40'),(2,'Amelia Island: A Town Time Forgot','amelia-island-a-town-time-forgot','Tonia','1660071273.jpg','1','2022-08-09 18:54:33','2022-08-09 18:54:33');
/*!40000 ALTER TABLE `blog_headers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blogs` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `blog_headers_id` int NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (1,1,'1660070920.jpeg','<p>Kauai is Hawaii\'s fourth largest island and is sometimes called&nbsp;the \r\n\"Garden Island,\" which is an entirely accurate description. The oldest \r\nand northernmost island&nbsp;in the Hawaiian chain is draped in emerald \r\nvalleys, sharp mountain spires and jagged cliffs&nbsp;aged by time and the \r\nelements. </p><p>Centuries of growth have formed tropical rainforests, forking \r\nrivers and cascading waterfalls! Some parts of Kauai are only accessible\r\n by sea or air, revealing views beyond&nbsp;your imagination. More than just \r\ndramatic beauty, the island is home to a variety&nbsp;of outdoor activities. </p>\r\n<p>Go before it \r\nloses its virginity to the ravaging developers, already hovering about \r\nits shores.</p>','2022-08-09 18:48:40','2022-08-11 07:57:14'),(2,2,'1660071273.jpg','<p>It’s a town time forgot — or maybe it just refused to move forward. \r\nSerene and unpretentious, Amelia Island remains in the 1900s — reveling \r\nin its long, colorful history, quite aware it no longer has to prove \r\nanything to the rest of the world.&nbsp;</p>\r\n<p>Therein lies the charm of this tiny stretch of land, 13 miles long \r\nand two miles wide, just off the northeastern tip of Florida. And \r\nabundant charm it is.&nbsp;&nbsp;</p>\r\n<p>Most visitors come for the beautiful beaches, award-winning golf and \r\ntennis, luxurious resorts and other accouterments of world-class \r\nvacation destinations.&nbsp;&nbsp;</p>\r\nFor me, the main attraction is the seaport village of Fernandina \r\nBeach where a sense of Victorian splendor still abounds. Barely touched \r\nby t-shirt shops and cell phone stands, the town pays homage daily to \r\nits elegant past. <br>','2022-08-09 18:54:33','2022-08-09 18:54:33');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bookings` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tour_packages_id` int NOT NULL,
  `quantity` int NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookings`
--

LOCK TABLES `bookings` WRITE;
/*!40000 ALTER TABLE `bookings` DISABLE KEYS */;
INSERT INTO `bookings` VALUES (1,'Tonia','odubiyiifeolu@gmail.com','NIgeria','Lagos, NIgeria.','09129309446',1,6,'pending','2022-08-31','2022-08-11 07:51:54','2022-08-11 07:51:54');
/*!40000 ALTER TABLE `bookings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_uses`
--

DROP TABLE IF EXISTS `contact_uses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact_uses` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_uses`
--

LOCK TABLES `contact_uses` WRITE;
/*!40000 ALTER TABLE `contact_uses` DISABLE KEYS */;
INSERT INTO `contact_uses` VALUES (1,'Oludayo Funmi','oluwafunmi@gmail.com','Inquiry','i would like to inquire about your dubai plan','2022-08-09 21:21:29','2022-08-09 21:21:29');
/*!40000 ALTER TABLE `contact_uses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `destination__images`
--

DROP TABLE IF EXISTS `destination__images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `destination__images` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `destinations_id` int NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `destination__images`
--

LOCK TABLES `destination__images` WRITE;
/*!40000 ALTER TABLE `destination__images` DISABLE KEYS */;
INSERT INTO `destination__images` VALUES (1,1,'/multimages/destinationsgallery/4137.1660073979.jpg','2022-08-09 19:39:39','2022-08-09 19:39:39'),(2,1,'/multimages/destinationsgallery/6510.1660074016.jpg','2022-08-09 19:40:17','2022-08-09 19:40:17');
/*!40000 ALTER TABLE `destination__images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `destinations`
--

DROP TABLE IF EXISTS `destinations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `destinations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `locations_id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_status` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `destinations`
--

LOCK TABLES `destinations` WRITE;
/*!40000 ALTER TABLE `destinations` DISABLE KEYS */;
INSERT INTO `destinations` VALUES (1,3,'FIVE Palm Jumeirah Dubai','<p>FIVE Palm Jumeirah Dubai boasts its own private beach as well as 5 \r\noutdoor swimming pools, including a 55 m long option, running through \r\nthe heart of the resort. Guests can enjoy free WiFi throughout the \r\nproperty.</p>\r\n<p>The hotel has 470 guest rooms and suites, spread across 16 floors, \r\ndecorated in a simple yet elegant style with views of the Arabian Gulf.</p>\r\n<p>The resort has an array of facilities, including dining venues hosted\r\n by world-class chefs, a modern spa and a karaoke room at Maiden \r\nShanghai.</p>\r\n<p>A landmark on the trunk of the iconic Palm Jumeirah, FIVE Palm \r\nJumeirah Dubai is strategically located for convenient access to Dubai’s\r\n business districts, as well as the city’s many exciting tourist and \r\nentertainment attractions.</p>\r\n<p>The resort is also accessible from Dubai International Airport (DXB),\r\n which is 32.6 km away and Al Maktoum International Airport (DWC), which\r\n 42.3 km away. Mall of Emirates is 11.2 km away, while Dubai Mall is \r\n22.7 km from the property. Dubai Parks and Resorts is 34.4 km away.</p>\r\n<p>Kosher food is available upon request. </p>','1660072931.jpg',1,'2022-08-09 19:22:11','2022-08-11 07:59:34'),(2,1,'Petra','<div class=\"YsGUOb\" style=\"transform: rotateZ(-180deg);\"></div><div class=\"r21Kzd\" data-hveid=\"CGQQAQ\" data-ved=\"2ahUKEwi5v8jLn775AhXU_IUKHdR7BwYQuk56BAhkEAE\" style=\"visibility: hidden;\"></div><div id=\"Tq30YrngGtT5lwTU950w__22\"><div class=\"wDYxhc NFQFxe oHglmf xzPb7d\" data-md=\"32\" style=\"clear:none\" data-hveid=\"CGgQAA\" data-ved=\"2ahUKEwi5v8jLn775AhXU_IUKHdR7BwYQ4dMGegQIaBAA\"><div style=\"position:relative;overflow:visible\" class=\"kno-mrg-si kno-mrg kno-swp\" id=\"media_result_group\" data-hveid=\"CGgQAQ\"><div class=\"kno-fiu kno-liu\"><div data-count=\"1\" data-hveid=\"CFoQAA\">Known as the <em>“Lost City”, the</em> <em>“Pink City”</em>&nbsp;and even the <em>“Rose Red City”,</em> Petra is a stunningly beautiful ancient city and <u><a href=\"https://whc.unesco.org/en/list/326\">UNESCO world heritage</a></u>\r\n site nestled into the desert canyons of southern Jordan. The dusty pink\r\n rock facade and magical surrounding desert landscapes are famous for \r\nbeing among the Seven Wonders of the world. If you’re visiting Jordan, \r\nPetra is an absolute must-see.<span><span><span class=\"eHaQD\"></span></span></span></div></div></div></div></div>','1660202759.jpg',1,'2022-08-11 07:25:59','2022-08-11 07:25:59');
/*!40000 ALTER TABLE `destinations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `locations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locations`
--

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;
INSERT INTO `locations` VALUES (1,'Maldives','2022-08-09 18:32:39','2022-08-11 07:56:44'),(2,'Ghana','2022-08-09 18:32:46','2022-08-09 18:32:46'),(3,'Dubai','2022-08-09 18:33:04','2022-08-09 18:33:04'),(4,'Jordan','2022-08-11 07:19:50','2022-08-11 07:19:50');
/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member_categories`
--

DROP TABLE IF EXISTS `member_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `member_categories` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member_categories`
--

LOCK TABLES `member_categories` WRITE;
/*!40000 ALTER TABLE `member_categories` DISABLE KEYS */;
INSERT INTO `member_categories` VALUES (1,'Web Developer','2023-04-05 08:19:16','2023-04-05 08:19:16'),(2,'Chairman','2023-04-05 08:19:30','2023-04-05 08:19:30');
/*!40000 ALTER TABLE `member_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_07_04_083306_create_tests_table',1),(4,'2018_07_04_094236_create_tour_categories_table',1),(5,'2018_07_05_065523_create_blog_headers_table',1),(6,'2018_07_05_065636_create_blogs_table',1),(7,'2018_07_10_032157_create_tour_packages_table',1),(8,'2018_07_12_033601_create_tour_schedules_table',1),(9,'2018_07_12_033928_create_schedule_images_table',1),(10,'2018_07_18_024006_create_tour_leaders_table',1),(11,'2018_07_31_081159_create_tour_galleries_table',1),(12,'2018_08_03_034024_create_locations_table',1),(13,'2018_08_04_033041_create_destinations_table',1),(14,'2018_08_04_033122_create_destination__images_table',1),(15,'2018_08_17_095004_create_contact_uses_table',1),(16,'2018_08_27_092941_create_bookings_table',1),(17,'2018_09_07_052618_create_ourteams_table',1),(18,'2018_09_07_092406_create_member_categories_table',1),(19,'2018_09_13_030816_create_testimonials_table',1),(20,'2018_09_17_044634_create_reviews_table',1),(21,'2019_12_14_000001_create_personal_access_tokens_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ourteams`
--

DROP TABLE IF EXISTS `ourteams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ourteams` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `member_categories_id` int NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ourteams`
--

LOCK TABLES `ourteams` WRITE;
/*!40000 ALTER TABLE `ourteams` DISABLE KEYS */;
INSERT INTO `ourteams` VALUES (1,1,'/multimages/ourteam/7660.1680686421.jpeg','Odubiyi Ifeoluwa','Web DEveloper','A proficient team member','2023-04-05 08:20:21','2023-04-05 08:20:21');
/*!40000 ALTER TABLE `ourteams` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reviews` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `tour_packages_id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT INTO `reviews` VALUES (1,2,'Oludayo Funmi','Cashew Travelers is definitely the best in town.','2022-08-11 07:28:18','2022-08-11 07:28:18');
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schedule_images`
--

DROP TABLE IF EXISTS `schedule_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `schedule_images` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `tour_schedules_id` int NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schedule_images`
--

LOCK TABLES `schedule_images` WRITE;
/*!40000 ALTER TABLE `schedule_images` DISABLE KEYS */;
/*!40000 ALTER TABLE `schedule_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `testimonials` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonials`
--

LOCK TABLES `testimonials` WRITE;
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tests`
--

DROP TABLE IF EXISTS `tests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tests` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tests`
--

LOCK TABLES `tests` WRITE;
/*!40000 ALTER TABLE `tests` DISABLE KEYS */;
/*!40000 ALTER TABLE `tests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tour_categories`
--

DROP TABLE IF EXISTS `tour_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tour_categories` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tour_categories`
--

LOCK TABLES `tour_categories` WRITE;
/*!40000 ALTER TABLE `tour_categories` DISABLE KEYS */;
INSERT INTO `tour_categories` VALUES (1,'Honeymoon Deals','1','2022-08-09 18:31:35','2022-08-11 08:13:02'),(2,'Tours and Excursions','1','2022-08-09 18:32:04','2022-08-09 18:32:04'),(3,'Conferences','1','2022-08-09 18:32:23','2022-08-09 18:32:23');
/*!40000 ALTER TABLE `tour_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tour_galleries`
--

DROP TABLE IF EXISTS `tour_galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tour_galleries` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `tour_packages_id` int NOT NULL,
  `gallery` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tour_galleries`
--

LOCK TABLES `tour_galleries` WRITE;
/*!40000 ALTER TABLE `tour_galleries` DISABLE KEYS */;
INSERT INTO `tour_galleries` VALUES (1,1,'/multimages/gallery/8907.1660077210.jpg','2022-08-09 20:33:30','2022-08-09 20:33:30'),(2,1,'/multimages/gallery/9622.1660077387.jpg','2022-08-09 20:36:27','2022-08-09 20:36:27');
/*!40000 ALTER TABLE `tour_galleries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tour_leaders`
--

DROP TABLE IF EXISTS `tour_leaders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tour_leaders` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `education` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `special` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tour_leaders`
--

LOCK TABLES `tour_leaders` WRITE;
/*!40000 ALTER TABLE `tour_leaders` DISABLE KEYS */;
INSERT INTO `tour_leaders` VALUES (1,'Tourism Education and Edu-Tourism Development: Sustainable Tourism Development Perspective in Education 1','Saltan Arnold','<ul><li>Address travel queries of tour groups.</li></ul>\r\n	                        \r\n	                    \r\n                            <ul><li>Coordinate accommodation, flights and transportation for outbound travel groups.</li></ul>\r\n	                        \r\n	                    \r\n                            <ul><li>Coordinate with operations department regarding safety, disaster recovery and evacuation procedures.</li></ul>\r\n	                        \r\n	                    \r\n                            <ul><li>Coordinate with relevant parties to ensure smooth operations for tours and travel coordination with bus captains.</li></ul>\r\n	                        \r\n	                    \r\n                            <ul><li>Monitor safety and security of members within tour groups.</li></ul>\r\n	                        \r\n	                    \r\n                            <ul><li>Provide feedback from tour groups to operations department.</li><li>Provide tour briefs to tour groups.</li></ul>\r\n	                        \r\n	                    \r\n                            <ul><li>Respond to emergencies and unexpected situations during tours.</li></ul>\r\n	                        \r\n	                    \r\n                            <ul><li>Respond to tour groups\' complaints.</li></ul>','1660075891.jpeg','Dubai,Maldives','2022-08-09 20:11:31','2022-08-09 20:11:31');
/*!40000 ALTER TABLE `tour_leaders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tour_packages`
--

DROP TABLE IF EXISTS `tour_packages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tour_packages` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `tour_categories_id` int NOT NULL,
  `locations_id` int NOT NULL,
  `tour_leaders_id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `long` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_status` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tour_packages`
--

LOCK TABLES `tour_packages` WRITE;
/*!40000 ALTER TABLE `tour_packages` DISABLE KEYS */;
INSERT INTO `tour_packages` VALUES (1,1,3,1,'Cruise and Sightseeing Tour For 5 Days in Dubai Highlights','<div class=\"base-block-body\"><div class=\"product-overview__list-container product-overview__list-container--custom-highlights\"><ul class=\"product-overview__list\"><li class=\"product-overview__list-item\"><span class=\"product-overview__list-item-icon tours-icon-focus\"></span><div>Soak\r\n up the sun, sand and water on the white sandy Jumeirah beach and \r\nsatisfy the adventurer in you with numerous water activities like water \r\nskiing, kayaking, paddle boarding, wakeboarding</div></li><li class=\"product-overview__list-item\"><span class=\"product-overview__list-item-icon tours-icon-focus\"></span><div>Stand\r\n at the 124th floor of the Burj Khalifa at the top renowned in the world\r\n and witness the artificially blue artificial lake blazed in the sun \r\nbelow you as well as enchanting sight of the panoramic views of the \r\nentire city </div></li><li class=\"product-overview__list-item\"><span class=\"product-overview__list-item-icon tours-icon-focus\"></span><div>Capture\r\n the stunning views of the dancing fountains - the tiny, delicate sprays\r\n dancing to the music and huge gushes thundering into the air \r\npunctuating the melody with boom</div></li><li class=\"product-overview__list-item\"><span class=\"product-overview__list-item-icon tours-icon-focus\"></span><div>Cruise\r\n down the serene waters flowing right through the heart of Dubai in a \r\nDhow Cruise and enjoy a delectable dinner amidst the sparkling skyline \r\nof Dubai dotted with uncountable skyscrapers </div></li><li class=\"product-overview__list-item\"><span class=\"product-overview__list-item-icon tours-icon-focus\"></span><div>Gear\r\n up for a thrilling roller coaster desert safari in the quintessential \r\nmagical desert rolling in the desert and set your heart racing as you \r\nshout your lungs out on every descent down a steep dune</div></li></ul></div></div>','<p></p><div><p><strong><u>Quick Info:</u></strong></p><p><strong>Start Point:</strong> Mumbai</p><p><strong>End Point:</strong> Dubai</p><p><strong></strong><br></p></div><ul><li>Daily Breakfast</li><li>Stay for 4 nights in mentioned hotels</li><li>Dubai city tour on SIC basis</li><li>Dhow Cruise Marina Dinner on Seat in Coach basis</li><li>Desert Safari on Seat in Coach basis</li><li>Return Airport transfers on Private basis</li><li>RT-PCR on arrival complimentary</li></ul>','5 Days/ 4 Nights','1660077189.jpg','2,000,000 Naira per couple','25.276987','55.296249',1,'2022-08-09 20:33:09','2022-08-11 07:59:03'),(2,2,1,1,'Short & Sweet Maldives Vacation- 4N/5D','f you are planning a Maldives trip, the cashew travelers the right place to \r\ncome to. Whatever your travel preference, you will find suitable \r\nMaldives holiday packages here. Whether you are looking for Maldives \r\npackages for a family or a couple, whether you need escorted Maldives \r\ntour packages for your parents or an offbeat Maldives vacation for \r\nyourself, The Cashew travelers can help you sort out your Maldives trip plan.<br> \r\nExplore a variety of itineraries and\r\n choose from Maldives travel packages with or without flights. With our \r\nunbeatable deals and discounts, your money goes further! Don’t forget to\r\n add tours and activities to your selected Maldives packages.<br><br> We\r\n curate our Maldives packages by theme as well, to help you find your \r\nkind of holiday. Whether you are planning your honeymoon and looking for\r\n romantic Maldives packages for couples or simply want an adventurous \r\nMaldives trip with friends, you will find the right choice at \r\nMakeMyTrip. Be it a short trip or long, a relaxing stay or an active \r\nholiday, whatever your travel style, MakeMyTrip has the right Maldives \r\nvacation packages for you to choose from. Looking for a luxury holiday? \r\nCheck out our luxury Maldives packages offering the best of hotels and \r\ninclusions designed to pamper you on your Maldives vacation. <br> To \r\nhelp you prepare for your Maldives travel, we have put together some \r\ntips such as the best time to visit Maldives, things to do in Maldives \r\nand so on.','<ul><li> Taj Coral Reef Resort &amp; Spa Maldives - Holidays Selections</li><li>Daily Breakfast<br></li><li>Complimentary airport transfer for Taj room with transfers</li><li>Complimentary snorkeling equipment and beach picnic at Taj</li><li>Submarine Tour and whale watchind.<br></li><li>Departure airport transfers for Taj Coral Reef on a speedboat (shared basis)</li></ul><p></p>','5 Days/ 4 Nights','1660202295.jpg','750,000 Naira','3.2028° N','73.2207° E',1,'2022-08-11 07:18:15','2022-08-11 07:18:15');
/*!40000 ALTER TABLE `tour_packages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tour_schedules`
--

DROP TABLE IF EXISTS `tour_schedules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tour_schedules` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tour_packages_id` int NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tour_schedules`
--

LOCK TABLES `tour_schedules` WRITE;
/*!40000 ALTER TABLE `tour_schedules` DISABLE KEYS */;
/*!40000 ALTER TABLE `tour_schedules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@gmail.com','$2y$10$WCQ1UuF6wylpoAY8rx1yh.D/98N2PDaFchTK/g7iZiaGs57xof936','orUCcFEI5ar5CUkgbwRHVH1fMuS2q1aXHtnWlaeQCAm5ZgnD8EaHFi58a80M',NULL,NULL),(3,'tonia','tonia@gmail.com','$2y$10$ysuKH6uUeuwS2gR.jzy2oetKfzMmMjqc5vnq4Ax2ycFvwtS.tKDPW',NULL,'2022-08-11 08:14:58','2022-08-11 08:14:58');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usersback`
--

DROP TABLE IF EXISTS `usersback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usersback` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usersback`
--

LOCK TABLES `usersback` WRITE;
/*!40000 ALTER TABLE `usersback` DISABLE KEYS */;
INSERT INTO `usersback` VALUES (1,'Admin','admin@gmail.com','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','orUCcFEI5ar5CUkgbwRHVH1fMuS2q1aXHtnWlaeQCAm5ZgnD8EaHFi58a80M',NULL,NULL),(3,'tonia','tonia@gmail.com','$2y$10$ysuKH6uUeuwS2gR.jzy2oetKfzMmMjqc5vnq4Ax2ycFvwtS.tKDPW',NULL,'2022-08-11 08:14:58','2022-08-11 08:14:58');
/*!40000 ALTER TABLE `usersback` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-22 11:15:26
