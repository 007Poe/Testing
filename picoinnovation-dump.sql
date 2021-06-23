-- MySQL dump 10.13  Distrib 5.7.27, for Linux (x86_64)
--
-- Host: localhost    Database: picoinnovation
-- ------------------------------------------------------
-- Server version	5.7.27-0ubuntu0.18.04.1

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
-- Table structure for table `carts`
--

DROP TABLE IF EXISTS `carts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carts`
--

LOCK TABLES `carts` WRITE;
/*!40000 ALTER TABLE `carts` DISABLE KEYS */;
/*!40000 ALTER TABLE `carts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Software by Pico','2018-08-16 08:15:15','2018-09-18 12:46:30'),(2,'Networking','2018-09-18 12:51:06','2018-09-18 12:51:06'),(3,'Security & Alarm System','2018-09-18 12:52:31','2018-09-18 12:53:02'),(4,'Sensors & Embedded Devices','2018-09-18 12:54:34','2018-09-18 12:55:18');
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
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currentaddress` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deliveryaddress` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inventories`
--

DROP TABLE IF EXISTS `inventories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inventories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `inventories_product_id_foreign` (`product_id`),
  CONSTRAINT `inventories_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inventories`
--

LOCK TABLES `inventories` WRITE;
/*!40000 ALTER TABLE `inventories` DISABLE KEYS */;
/*!40000 ALTER TABLE `inventories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2017_10_13_064417_create_skill_types_table',1),(4,'2017_11_21_072237_create_service_type_galleries_table',1),(5,'2017_12_07_082722_create_teams_table',1),(6,'2017_12_07_083748_create_positions_table',1),(7,'2017_12_07_083756_create_service_types_table',1),(8,'2017_12_07_083837_create_staff_table',1),(9,'2017_12_07_083857_create_services_table',1),(10,'2017_12_07_083913_create_skills_table',1),(11,'2017_12_23_162615_create_carts_table',1),(12,'2017_12_24_064631_create_categories_table',1),(13,'2017_12_24_064632_create_sub_categories_table',1),(14,'2017_12_24_065638_create_products_table',1),(15,'2017_12_30_071401_create_inventories_table',1),(16,'2018_01_11_125520_create_skill_staffs_table',1),(17,'2018_01_23_144410_create_wish_lists_table',1),(18,'2018_02_15_114424_create_customers_table',1),(19,'2018_02_17_132137_create_orders_table',1),(20,'2018_02_17_132207_create_order_details_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` double NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_details`
--

LOCK TABLES `order_details` WRITE;
/*!40000 ALTER TABLE `order_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `qty` int(11) NOT NULL,
  `total_amount` double NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `positions`
--

DROP TABLE IF EXISTS `positions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `positions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `positions`
--

LOCK TABLES `positions` WRITE;
/*!40000 ALTER TABLE `positions` DISABLE KEYS */;
INSERT INTO `positions` VALUES (1,'CEO & Founder','2018-09-11 19:50:34','2018-09-11 19:50:34'),(2,'Project Manager','2018-09-11 19:51:03','2018-09-11 19:51:03'),(3,'Network & System Engineer','2018-09-11 19:51:18','2018-09-11 19:51:18'),(4,'Junior Developer','2018-09-11 19:51:28','2018-09-11 19:51:28'),(5,'Senior Developer','2018-09-11 19:51:44','2018-09-11 19:51:44'),(6,'Team Leader','2018-10-09 03:24:00','2018-10-09 03:24:00'),(7,'Project Co-Operator','2018-10-09 03:24:44','2018-10-09 22:02:18'),(8,'HR Consultant','2019-07-07 06:21:04','2019-07-07 06:21:04'),(9,'Full Stack Web Developer','2019-07-07 06:21:32','2019-07-07 06:21:32');
/*!40000 ALTER TABLE `positions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL,
  `sub_category_id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `specification` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(10) unsigned NOT NULL,
  `sale_qty` int(10) unsigned NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_category_id_foreign` (`category_id`),
  KEY `products_sub_category_id_foreign` (`sub_category_id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `products_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,1,1,'Hospital Operating System','picoHOS','picoHOS','#00ffff','hw233',800000,'battery&&100','1537276975.png','Hello','good',65,0,'active','2018-08-16 08:18:16','2018-09-18 13:22:55'),(2,3,2,'Dahua 2MP H.264 Lite Series IP Camera','IPC-HFW1220S','IPC-HFW1220S','#ffffff','Φ70mm×164.7mm(2.76\'x6.49\')',49.5,'Image Sensor&&1/2.9” 2Megapixel progressive scan CMOS','1539071139.png','IPC-HFW1220S','CCTV Surveillance & Monitoring',20,0,'active','2018-10-09 07:45:39','2018-10-09 07:45:39'),(3,3,4,'Dahua 16ch  4K & H.265 Lite Network Video Recorder','NVR4216-4KS2','NVR4216-4KS2','#000000','1U Rack Type NVR',129,'NVR&&Network Video Recorder','1539074110.png','NVR4216-4KS2','CCTV Surveillance & Monitoring',20,0,'active','2018-10-09 08:35:10','2018-10-09 08:35:10'),(5,3,2,'Dahua 2MP H.265/H.264 Lite Series IP Camera','IPC-HFW1230S','IPC-HFW1230S','#ffffff','Φ70mm×164.7mm(2.76\'x6.49\')',52,'Image Sensor&/Focal Length&/Resolution&/RAM/ROM&/IR Distance&/Lens Focal Length&/Angle of View&/Digital Zoom&/Optical Zoom&/Pan/Tilt/Rotation&/IVS&/Advanced Intelligent&/Compression&/BLC Mode&/Ethernet&/Interoperability&/Audio Interface&/Power Supply&/Ingress Protection&&1/2.9” 2Megapixel progressive scan CMOS&/2.8 mm (3.6 mm optional)&/1080P(1920×1080)/720P(1280×720)/D1(704×576/704×480)/CI&/256MB/16MB&/Distance up to 30m(98ft)&/2.8 mm (3.6 mm optional)&/H:101°/83°, V:57°/44°&/16x&/N/A&/Pan:0° ~360° ;Tilt:0° ~90° ;Rotation:0° ~360°&/N/A&/N/A&/H.265+/H.265/H.264+/H.264&/BLC / HLC / DWDR&/RJ-45 (10/100Base-T)&/ONVIF, PSIA, CGI&/N/A&/DC12V, PoE (802.3af)(Class 0)&/IP67','1539143352.png','IPC-HFW1230S','CCTV Surveillance & Monitoring',20,0,'active','2018-10-10 03:49:12','2018-10-10 03:49:12'),(6,3,2,'Dahua 2MP Starlight IR Dome Network Camera ( Face Detection, People Counting,Heat Map)','IPC HDBW8232E-Z','IPC HDBW8232E-Z','#ffffff','Φ159.1mm×117.9mm(Φ6.26”×4.64”)',405,'Image Sensor&/Focal Length&/Resolution&/RAM/ROM&/IR Distance&/Lens Focal Length&/Angle of View&/Digital Zoom&/Optical Zoom&/Pan/Tilt/Rotation&/IVS&/Advanced Intelligent&/Compression&/BLC Mode&/Ethernet&/Interoperability&/Audio Interface&/Power Supply&/Ingress Protection&&1/1.9” 2Megapixel Exmor CMOS&/4.1mm-16.4mm 4x Optical Zoom&/1080P(1920×1080) / 1.3M(1280x960) / 1.0 M(720P)&/1024MB/128MB&/Distance up to 50m(164ft)&/4.1mm-16.4mm 4x Optical Zoom&/H: 92˚~32 ˚ V:53 ˚ ~18 ˚&/16x&/4x&/Pan:0˚~355˚; Tilt:0˚~65˚; Rotation:0˚~355˚&/Tripwire, Intrusion, Object Abandoned/Missing&/Face Detection, People Counting, Heat Map&/H.265+/H.265/H.264+/H.264&/BLC / HLC / WDR(120dB)/ SSA&/RJ-45 (100/1000Base-T)&/ONVIF, PSIA, CGI&/1/1 channel In/Out&/DC12V,AC24V, PoE+ (802.3at)(Class 4)&/IP67','1539145537.png','2MP Starlight IR Dome Network Camera ( Face Detection, People Counting, Heat Map)','CCTV Surveillance & Monitoring',20,0,'active','2018-10-10 04:25:38','2018-10-10 06:28:19'),(7,3,2,'Dahua 2MP Ultra-Smart Series Starlight IR Dome Network Camera ( Face Detection, People Counting,Heat Map)','IPC-HDBW8231E-Z','IPC-HDBW8231E-Z','#ffffff','Φ159.1mm×117.9mm(Φ6.26”×4.64”)',398,'Image Sensor&/Focal Length&/Resolution&/RAM/ROM&/IR Distance&/Lens Focal Length&/Angle of View&/Digital Zoom&/Optical Zoom&/Pan/Tilt/Rotation&/IVS&/Advanced Intelligent&/Compression&/BLC Mode&/Ethernet&/Interoperability&/Audio Interface&/Power Supply&/Ingress Protection&&1/2.8” 4Megapixel Exmor CMOS&/2.7~12mm motorized&/1080P(1920×1080)/ 1.3M(1280x960)/  720P(1280x720)/ D1(704×576/704x480) / VGA(640x480)/ CIF(352×288/342x240)&/1024MB/128MB&/Distance up to 50m(164ft)&/2.7~12mm motorized&/H: 110 ˚~36 ˚ V:57 ˚ ~20 ˚&/16x&/4x&/Pan:0˚~355˚; Tilt:0˚~65˚; Rotation:0˚~355˚&/Tripwire, Intrusion, Object Abandoned/Missing&/Face Detection, People Counting, Heat Map&/H.265+/H.265/H.264+/H.264&/BLC / HLC / WDR(140dB)/ SSA&/RJ-45 (100/1000Base-T)&/ONVIF, PSIA, CGI&/1/1 channel In/Out&/DC12V, PoE (802.3af)(Class 0)&/IP67','1539166334.png','2MP Ultra-Smart Series Starlight IR Dome Network Camera ( Face Detection, People Counting,Heat Map)','CCTV Surveillance & Monitoring',20,0,'active','2018-10-10 10:12:14','2018-10-10 10:12:14');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service_type_galleries`
--

DROP TABLE IF EXISTS `service_type_galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service_type_galleries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `service_type_id` int(10) unsigned NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_type_galleries`
--

LOCK TABLES `service_type_galleries` WRITE;
/*!40000 ALTER TABLE `service_type_galleries` DISABLE KEYS */;
/*!40000 ALTER TABLE `service_type_galleries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service_types`
--

DROP TABLE IF EXISTS `service_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_types`
--

LOCK TABLES `service_types` WRITE;
/*!40000 ALTER TABLE `service_types` DISABLE KEYS */;
INSERT INTO `service_types` VALUES (1,'Software Development','We PICO\'s software development team develop software for many kinds of business types such as hospitals, medical laboratory, event management, trading, convenience stores and service centers. Softwares that we already developed are picoHOS (Hospital Operating System), picoLAB( Medical Lab Management System), EZpwe (Event Management System) and picoPOS(Point of Sale System). All of our systems can use as both local private server system and cloud based server system for enterprise business.','1536729736.png','2018-07-04 12:27:10','2018-10-09 03:50:00'),(4,'Web Design & Development','We PICO\'s web development team is a skillful development team. And we are developing websites for event management system, e-commerce, online trading, convenience stores and service centers. We already developed web applications and websites for picoinnovation.com ( E-Commerce), EZpwe.com (Cloud Base Event Management System) and picoRMS (GPS Route Management System).','1536727206.png','2018-09-12 04:40:06','2018-09-12 04:40:06'),(5,'Embedded System Development','We PICO\'s network development team organize by skillful network engineers. We built a lot of network infrastructures for universities, business companies, resorts and offices.','1536727755.png','2018-09-12 04:49:15','2018-09-12 04:49:15'),(6,'Communication & Networking','We PICO\'s network development team organize by skillful network engineers. We built a lot of network infrastructures for universities, business companies, resorts and offices.','1536727813.png','2018-09-12 04:50:13','2018-09-12 04:50:13'),(7,'CCTV Surveillance & Monitoring','We PICO\'s network development team organize by skillful network engineers. We built a lot of network infrastructures for universities, business companies, resorts and offices.','1536728043.png','2018-09-12 04:54:03','2018-09-12 04:54:03'),(8,'Knowledge Sharing & Training','In computer networking, a network service is an application running at the network application layer and above, that provides data storage, manipulation, presentation, communication or other capability which is often implemented using a client-server or peer-to-peer architecture based on application layer network protocols. Each service is usually provided by a server component running on one or more computers (often a dedicated server computer offering multiple services) and accessed via a network by client components running on other devices. However, the client and server components can both be run on the same machine. Clients and servers will often have a user interface, and sometimes other hardware associated with it.','1536729459.png','2018-09-12 05:10:30','2018-09-12 05:17:39');
/*!40000 ALTER TABLE `service_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_type_id` int(10) unsigned NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `services_service_type_id_foreign` (`service_type_id`),
  CONSTRAINT `services_service_type_id_foreign` FOREIGN KEY (`service_type_id`) REFERENCES `service_types` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'picoSHOP',1,'picoSHOP is point of sale system for retail shop and small business. It can use cloud-based system as well as local system.','1539059997.png','2018-08-16 08:10:37','2018-10-09 04:39:57'),(2,'picoLAB',1,'picoLAB is Laboratory Information Management system for medical laboratory. It can use cloud-based system as well as local system.','1539059470.png','2018-10-09 04:31:10','2018-10-09 04:31:10'),(3,'picoHOS',1,'picoHOS is Hospital Operating System for Hospital and Poly-Clinic. It can use cloud-based system as well as local system.','1539059801.png','2018-10-09 04:36:41','2018-10-17 05:21:54');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skill_staffs`
--

DROP TABLE IF EXISTS `skill_staffs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skill_staffs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `skill_id` int(10) unsigned NOT NULL,
  `staff_id` int(10) unsigned NOT NULL,
  `percent` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `skill_staffs_skill_id_foreign` (`skill_id`),
  KEY `skill_staffs_staff_id_foreign` (`staff_id`),
  CONSTRAINT `skill_staffs_skill_id_foreign` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`id`) ON DELETE CASCADE,
  CONSTRAINT `skill_staffs_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skill_staffs`
--

LOCK TABLES `skill_staffs` WRITE;
/*!40000 ALTER TABLE `skill_staffs` DISABLE KEYS */;
INSERT INTO `skill_staffs` VALUES (1,1,1,80,'2018-09-17 02:28:06','2018-09-17 02:28:06'),(2,2,1,40,'2018-09-17 02:28:06','2018-09-17 02:28:06'),(3,3,1,50,'2018-09-17 02:28:06','2018-09-17 02:28:06'),(4,4,1,10,'2018-09-17 02:28:06','2018-09-17 02:28:06'),(5,5,1,20,'2018-09-17 02:28:06','2018-09-17 02:28:06'),(6,6,1,5,'2018-09-17 02:28:06','2018-09-17 02:28:06'),(7,7,1,5,'2018-09-17 02:28:06','2018-09-17 02:28:06'),(8,8,1,50,'2018-09-17 02:28:06','2018-09-17 02:28:06'),(9,9,2,99,'2018-09-17 05:43:23','2018-09-17 05:43:23'),(10,10,2,35,'2018-09-17 05:43:23','2018-09-17 05:43:23'),(11,11,2,35,'2018-09-17 05:43:23','2018-09-17 05:43:23'),(12,12,2,35,'2018-09-17 05:43:23','2018-09-17 05:43:23'),(13,13,2,30,'2018-09-17 05:43:23','2018-09-17 05:43:23'),(14,21,2,85,'2018-09-17 05:43:23','2018-10-09 03:43:22'),(15,1,6,80,'2018-11-14 12:45:11','2018-11-14 12:45:11'),(16,2,6,50,'2018-11-14 12:45:11','2018-11-14 12:45:11'),(17,3,6,70,'2018-11-14 12:45:11','2018-11-14 12:45:11'),(18,4,6,10,'2018-11-14 12:45:11','2018-11-14 12:45:11'),(19,5,6,60,'2018-11-14 12:45:11','2018-11-14 12:45:11'),(20,6,6,15,'2018-11-14 12:45:11','2018-11-14 12:45:11'),(21,7,6,20,'2018-11-14 12:45:11','2018-11-14 12:45:11'),(22,8,6,70,'2018-11-14 12:45:11','2018-11-14 12:45:11');
/*!40000 ALTER TABLE `skill_staffs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skill_types`
--

DROP TABLE IF EXISTS `skill_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skill_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skill_types`
--

LOCK TABLES `skill_types` WRITE;
/*!40000 ALTER TABLE `skill_types` DISABLE KEYS */;
INSERT INTO `skill_types` VALUES (1,'Development Skills','2018-09-11 20:01:29','2018-09-11 20:01:29'),(2,'Network Engineering Skills','2018-09-11 20:09:44','2018-09-11 20:09:44'),(3,'Embedded System Skills','2018-09-11 20:10:01','2018-09-11 20:10:01'),(4,'Surveillance & Security Skills','2018-09-11 20:22:33','2018-09-11 20:22:33'),(5,'Management Skills','2019-07-07 06:25:49','2019-07-07 06:25:49');
/*!40000 ALTER TABLE `skill_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skills` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill_type_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `skills_skill_type_id_foreign` (`skill_type_id`),
  CONSTRAINT `skills_skill_type_id_foreign` FOREIGN KEY (`skill_type_id`) REFERENCES `skill_types` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skills`
--

LOCK TABLES `skills` WRITE;
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;
INSERT INTO `skills` VALUES (1,'HTML/CSS',1,'2018-09-11 20:02:30','2018-09-11 20:02:30'),(2,'MySQL',1,'2018-09-11 20:02:59','2018-09-11 20:02:59'),(3,'PHP/Laravel',1,'2018-09-11 20:03:55','2018-09-11 20:03:55'),(4,'Java SE/EE',1,'2018-09-11 20:04:38','2018-09-11 20:04:38'),(5,'UI/UX',1,'2018-09-11 20:04:57','2018-09-11 20:04:57'),(6,'C/C++/Arduino',1,'2018-09-11 20:06:05','2018-09-11 20:06:05'),(7,'Python',1,'2018-09-11 20:06:33','2018-09-11 20:06:33'),(8,'Javascript/JQuery/Bootstrap',1,'2018-09-11 20:07:07','2018-09-11 20:07:07'),(9,'Network +',2,'2018-09-11 20:11:02','2018-09-11 20:11:02'),(10,'MTCNA/MTCRE/MTCINE',2,'2018-09-11 20:13:19','2018-09-11 20:13:19'),(11,'CCNA/CCNP/CCIE',2,'2018-09-11 20:13:40','2018-09-11 20:13:40'),(12,'Linux Sys-Admin',2,'2018-09-11 20:15:06','2018-09-11 20:15:06'),(13,'Firewall & Network Security',2,'2018-09-11 20:16:02','2018-09-11 20:16:02'),(14,'Micro-Controllers',3,'2018-09-11 20:17:54','2018-09-11 20:20:19'),(15,'Micro-Computers',3,'2018-09-11 20:18:12','2018-09-11 20:20:09'),(16,'Arduino',3,'2018-09-11 20:21:24','2018-09-11 20:21:24'),(17,'Micro C',3,'2018-09-11 20:21:35','2018-09-11 20:21:35'),(18,'CCTV Monitoring & Survey',4,'2018-09-11 20:23:18','2018-09-11 20:23:18'),(21,'Cabling & Rack Management',2,'2018-09-11 20:25:30','2018-09-11 20:25:30'),(22,'Management',5,'2019-07-07 06:49:02','2019-07-07 06:49:02'),(23,'Information Management',5,'2019-07-07 06:49:21','2019-07-07 06:49:21'),(24,'Industrial Psychology',5,'2019-07-07 06:51:25','2019-07-07 06:51:25'),(25,'Training & Development',5,'2019-07-07 06:52:19','2019-07-07 06:52:19');
/*!40000 ALTER TABLE `skills` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staff` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nrc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `codenumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` int(10) unsigned NOT NULL,
  `position_id` int(10) unsigned NOT NULL,
  `experience` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `staff_email_unique` (`email`),
  KEY `staff_position_id_foreign` (`position_id`),
  KEY `staff_team_id_foreign` (`team_id`),
  CONSTRAINT `staff_position_id_foreign` FOREIGN KEY (`position_id`) REFERENCES `positions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `staff_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staff`
--

LOCK TABLES `staff` WRITE;
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
INSERT INTO `staff` VALUES (1,'Sann Koko','9/PaKaKha(N)014162','1995-09-06','1537151286.png','29022016014162001','09444030408','Yangon, Myanmar.','B.Sc (Biochemistry)\r\nMTCNA, CCNA','sannkoko123@gmail.com',2,1,'1 year experience as IT Manager at CTTK Hospital (Pyin Oo Lwin),\r\n3 year experience as Network Engineer at i-Link Local Service Provider,\r\n2 year experience as Network Engineer & Project Manager at Pico Innovation','2018-09-17 02:28:06','2018-12-21 16:57:19'),(2,'Sann Koko','9/PaKaKha(N)014162','2016-02-29','1537163003.png','29022016014162001','09444030408','Mandalay, Myanmar.','B.Sc. (Biochemistry)\r\nMTCNA, CCNA,','sannkoko@picoinnovation.com',2,1,'IT Officer at CTTK Hospital (Pyin Oo Lwin),\r\nNetwork Engineer at i-Link Local Service Provider,\r\nProject Manager & Network Engineer at Pico Innovation','2018-09-17 05:43:23','2018-09-17 05:43:23'),(4,'Lwin Moe','7/Pa Kha Na (Naing) 342160','1997-03-08','1542177567.png','7373673637637363736733','09798940936','Mandalay, Myanmar','B.Tech(EP)','lwinmoe786969@gmail.com',5,7,'-','2018-11-14 06:39:27','2018-11-14 06:39:27'),(6,'Mg Nay','5/khaouna(N)108193','1995-11-11','1542199511.png','98765654','09794001541','Yangon , Pazuntaung','B.C.Sc','naywinhtun2020@gmail.com',1,5,'3 years','2018-11-14 12:45:11','2019-08-12 09:13:11'),(7,'Dr. May Lwin Nyein','9/KhaMaSa N 009412','2019-07-01','1562481686.png','01072019009412007','09402598298','Mandalay','Ph.D. Psychology, University of Yangon.','maylwin18917@gmail.com',2,8,'Assistant Lecturer at the University of Yangon.\r\nAssistant Lecturer at the University of Mandalay.\r\nMember of Myanmar Psychological Association.','2019-07-07 06:41:26','2019-07-07 07:01:45');
/*!40000 ALTER TABLE `staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sub_categories`
--

DROP TABLE IF EXISTS `sub_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sub_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specification` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sub_categories_category_id_foreign` (`category_id`),
  CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sub_categories`
--

LOCK TABLES `sub_categories` WRITE;
/*!40000 ALTER TABLE `sub_categories` DISABLE KEYS */;
INSERT INTO `sub_categories` VALUES (1,1,'Business Management Software','Products&&Hardware + Software Bundle','2018-08-16 08:15:39','2018-09-18 13:12:48'),(2,3,'Network Camera','IP CCTV Camera&&IP CCTV Camera','2018-10-09 07:28:14','2018-10-09 07:28:14'),(3,3,'Analog Camera','Analog CCTV Camera&&Analog CCTV Camera','2018-10-09 07:28:58','2018-10-09 07:28:58'),(4,3,'Network Video Recorder','NVR&&Network Video Recorder','2018-10-09 08:12:24','2018-10-09 08:12:24'),(5,3,'Digital Video Recorder','DVR&&Digital Video Recorder','2018-10-09 08:12:56','2018-10-09 08:12:56');
/*!40000 ALTER TABLE `sub_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teams` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teams`
--

LOCK TABLES `teams` WRITE;
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
INSERT INTO `teams` VALUES (1,'Software Development Team','2018-09-11 19:53:28','2018-09-11 19:53:28'),(2,'Administration & Business Management','2018-09-11 19:54:06','2019-07-07 07:04:33'),(4,'Media & Digital Marketing Team','2018-09-11 19:56:48','2018-09-11 19:57:36'),(5,'Internship & Student Team','2018-09-11 19:59:51','2018-09-11 19:59:51'),(6,'Network Engineering Development','2018-10-09 22:28:27','2019-07-07 07:04:13');
/*!40000 ALTER TABLE `teams` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'pico','sannkoko123@gmail.com','$2y$10$gnt8x71AnH5d1yh.OmL/0ONfpoB2OH0TGk8MyYeikNZ4o3rVZe.Bq','BGOr4481Qd9DEdyQXo2lHHPJYbZNlidBWb9aAeoUDodN8oDgx1TnsfM7sPaE','2018-07-04 08:42:31','2018-07-04 08:42:31');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wish_lists`
--

DROP TABLE IF EXISTS `wish_lists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wish_lists` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `wish_lists_product_id_foreign` (`product_id`),
  CONSTRAINT `wish_lists_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wish_lists`
--

LOCK TABLES `wish_lists` WRITE;
/*!40000 ALTER TABLE `wish_lists` DISABLE KEYS */;
INSERT INTO `wish_lists` VALUES (1,'103.89.178.159',1,'2018-08-17 10:08:12','2018-08-17 10:08:12'),(3,'122.248.108.204',1,'2018-09-19 04:25:35','2018-09-19 04:25:35'),(5,'116.206.139.38',2,'2018-11-14 13:13:00','2018-11-14 13:13:00'),(6,'116.206.139.38',5,'2018-11-14 13:13:06','2018-11-14 13:13:06'),(7,'69.160.25.189',1,'2019-08-07 18:46:53','2019-08-07 18:46:53');
/*!40000 ALTER TABLE `wish_lists` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-08-23 17:52:27
