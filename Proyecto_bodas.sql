-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: proyecto_bodas
-- ------------------------------------------------------
-- Server version	8.0.22

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
-- Table structure for table `bancos`
--

DROP TABLE IF EXISTS `bancos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bancos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `evento_id` bigint unsigned NOT NULL,
  `titular_banco` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `cuenta_banco` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `clabe_banco` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `bancos_evento_id_foreign` (`evento_id`),
  CONSTRAINT `bancos_evento_id_foreign` FOREIGN KEY (`evento_id`) REFERENCES `eventos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bancos`
--

LOCK TABLES `bancos` WRITE;
/*!40000 ALTER TABLE `bancos` DISABLE KEYS */;
INSERT INTO `bancos` VALUES (1,1,'','',''),(2,2,'Eliseo Ortiz','1234-1234-1234-1234 (banamex)','12345678978978799'),(3,3,'Eliseo Ortiz','1234-1234-1234-1234 (banamex)','12345678978978799');
/*!40000 ALTER TABLE `bancos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `evento_user`
--

DROP TABLE IF EXISTS `evento_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `evento_user` (
  `user_id` bigint unsigned NOT NULL,
  `evento_id` bigint unsigned NOT NULL,
  KEY `evento_user_user_id_foreign` (`user_id`),
  KEY `evento_user_evento_id_foreign` (`evento_id`),
  CONSTRAINT `evento_user_evento_id_foreign` FOREIGN KEY (`evento_id`) REFERENCES `eventos` (`id`),
  CONSTRAINT `evento_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `evento_user`
--

LOCK TABLES `evento_user` WRITE;
/*!40000 ALTER TABLE `evento_user` DISABLE KEYS */;
INSERT INTO `evento_user` VALUES (1,1),(1,2),(1,3);
/*!40000 ALTER TABLE `evento_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eventos`
--

DROP TABLE IF EXISTS `eventos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `eventos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre_evento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'nuevo_evento',
  `contraseña_del_evento` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_1` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `nombre_2` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `fecha_evento` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2021-10-27',
  `hora_evento` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '00:00',
  `no_niños` tinyint(1) NOT NULL DEFAULT '0',
  `codigo_de_vestimenta` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `ruta_foto_novios` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `mensaje_principal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'nuestra boda',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventos`
--

LOCK TABLES `eventos` WRITE;
/*!40000 ALTER TABLE `eventos` DISABLE KEYS */;
INSERT INTO `eventos` VALUES (1,'Evento seeder','123456789','','','2021-10-27','00:00',0,'0','','nuestra boda','2021-11-23 03:12:27','2021-11-23 03:12:27',NULL),(2,'mi boda soñada','123456789','eliseo','celia','2021-12-29','00:00',0,'0','images/WJAbiNfKuF7kwM6haGOhqgqY28pNohgw6ADDlHeY.jpg','Nuestra boda','2021-11-23 03:13:17','2021-11-23 08:22:12',NULL),(3,'mi boda soñada 2','celiiabbbb','Eliseo','Celia','2023-01-08','16:00',0,'3','images/uT5eDGChBHUVJvyfw571ewc90QXhyfqpwPIP6I3E.jpg','Por fiiiiiin','2021-11-23 07:36:11','2021-11-23 08:16:48',NULL);
/*!40000 ALTER TABLE `eventos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
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
-- Table structure for table `fotos`
--

DROP TABLE IF EXISTS `fotos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fotos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `evento_id` bigint unsigned NOT NULL,
  `ruta_foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `fotos_evento_id_foreign` (`evento_id`),
  CONSTRAINT `fotos_evento_id_foreign` FOREIGN KEY (`evento_id`) REFERENCES `eventos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fotos`
--

LOCK TABLES `fotos` WRITE;
/*!40000 ALTER TABLE `fotos` DISABLE KEYS */;
INSERT INTO `fotos` VALUES (9,2,'images/K1BJaQD4cbHKDVUJMkTWDZb9zlVnlrtZQZNaCJlX.jpg'),(10,2,'images/mn0qWsiVmzPdjZ0HS2Y9WsQE0aQwvRPkAG6oeqXk.jpg'),(11,2,'images/qTWk1XcZwPLun6jGOrQP06DdJvfjtYrYt48qfP73.jpg'),(12,3,'images/foeTKgy2WSOP6Nectu8yqIMHG64T9Q9xz8Ns71pk.jpg'),(13,3,'images/uZYVrsbQPjjpWOJ5xGvKXAW6Ihd86Q41CrbPwwGK.jpg'),(14,3,'images/V67esmC1jOjPoqefA9DpWmMWKiClV29FZPBG8bF5.jpg'),(15,3,'images/RBbSk3ynRPhnHq6yspwcTYPAiiKX5Ghwd4KSXC7m.jpg');
/*!40000 ALTER TABLE `fotos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invitados`
--

DROP TABLE IF EXISTS `invitados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `invitados` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `evento_id` bigint unsigned NOT NULL,
  `nombre_invitado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `correo_invitado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `numero_boletos` smallint NOT NULL DEFAULT '1',
  `confirmacion` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`),
  KEY `invitados_evento_id_foreign` (`evento_id`),
  CONSTRAINT `invitados_evento_id_foreign` FOREIGN KEY (`evento_id`) REFERENCES `eventos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invitados`
--

LOCK TABLES `invitados` WRITE;
/*!40000 ALTER TABLE `invitados` DISABLE KEYS */;
INSERT INTO `invitados` VALUES (1,1,'Mr. Antwon Hyatt MD','derrick67@gmail.com',9,'1'),(2,1,'Anya Nader','carrie67@yahoo.com',9,'2'),(3,1,'Omer Halvorson','hoppe.zula@barrows.net',5,'2'),(4,1,'Rey Pacocha','mgottlieb@gmail.com',6,'0'),(5,1,'Golda Stamm','nya96@dooley.org',4,'2'),(6,1,'Ms. Oceane Wilderman','jacobs.julien@hotmail.com',6,'2'),(7,1,'Electa Sipes','schuppe.jacinto@yahoo.com',7,'1'),(8,1,'Cortney Herman','lcormier@pfannerstill.com',2,'0'),(9,1,'Arch Bins','nolan.jeffery@gmail.com',7,'0'),(10,1,'Sage Schinner','lind.christop@hotmail.com',2,'2'),(12,2,'Fam. Ortiz Coronado','aoimagina@hotmail.com',1,'2'),(13,3,'Fam. Ortiz Coronado','aoimagina@hotmail.com',2,'0');
/*!40000 ALTER TABLE `invitados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lugars`
--

DROP TABLE IF EXISTS `lugars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lugars` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `evento_id` bigint unsigned NOT NULL,
  `nombre_ceremonia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `direccion_ceremonia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `ruta_foto_ceremonia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `fecha_ceremonia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `nombre_salon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `direccion_salon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `ruta_foto_salon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `fecha_salon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `lugars_evento_id_foreign` (`evento_id`),
  CONSTRAINT `lugars_evento_id_foreign` FOREIGN KEY (`evento_id`) REFERENCES `eventos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lugars`
--

LOCK TABLES `lugars` WRITE;
/*!40000 ALTER TABLE `lugars` DISABLE KEYS */;
INSERT INTO `lugars` VALUES (1,1,'San miguel de mezquitan','chiapas no se que la verdad xd','','2021-11-22T15:25','san rafael','no se','','2021-11-22T19:20'),(2,2,'','','','','','','',''),(3,3,'San miguel de mezquitan','Chiapas 1642','','2023-01-08T16:00','Ambier','no se','','2023-01-08T18:00');
/*!40000 ALTER TABLE `lugars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mesas`
--

DROP TABLE IF EXISTS `mesas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mesas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `evento_id` bigint unsigned NOT NULL,
  `nombre_mesa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `enlace_mesa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `mesas_evento_id_foreign` (`evento_id`),
  CONSTRAINT `mesas_evento_id_foreign` FOREIGN KEY (`evento_id`) REFERENCES `eventos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mesas`
--

LOCK TABLES `mesas` WRITE;
/*!40000 ALTER TABLE `mesas` DISABLE KEYS */;
INSERT INTO `mesas` VALUES (1,2,'amzaon','https://www.amazon.com.mx/b?ie=UTF8&node=19419980011'),(2,3,'amzaon','https://www.amazon.com.mx/b?ie=UTF8&node=19419980011'),(3,3,'liverpool','https://mesaderegalos.liverpool.com.mx');
/*!40000 ALTER TABLE `mesas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2014_10_12_200000_add_two_factor_columns_to_users_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2021_10_30_230236_create_sessions_table',1),(7,'2021_11_04_000942_create_eventos_table',1),(8,'2021_11_04_004518_create_user_evento_table',1),(9,'2021_11_11_215220_create_lugars_table',1),(10,'2021_11_11_235346_create_mesas_table',1),(11,'2021_11_14_184205_create_bancos_table',1),(12,'2021_11_14_190654_create_fotos_table',1),(13,'2021_11_16_154226_create_invitados_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
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
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('hjuv4qKDV65jR2qUsa7pYeHAsOUubqOtmbe51jCT',1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36','YTo2OntzOjY6Il90b2tlbiI7czo0MDoiVjM3SU9pTExsWWd6cWNocXpyWk53ek9kb3dsMGFFUFRFM3hBMTA5YyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly9wcm95ZWN0by1ib2Rhcy50ZXN0L2ludml0YWRvcy8xL2luZGV4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJEw5bTVDSE1INDQ5TFYyMWtyd0hiMmVSbWRIcGh1UWhXWnVnNjc5d0NsMW15Y0Y1Y0ZnakhxIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRMOW01Q0hNSDQ0OUxWMjFrcndIYjJlUm1kSHBodVFoV1p1ZzY3OXdDbDFteWNGNWNGZ2pIcSI7fQ==',1637634302),('MtuWc1qW7WD1tlvwEE93M9ay3GUX7s1EtToJ7ybH',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoicldsOGtlbTVBbE5lOE5sallhUThYMnphNU5xemJXbElZcTdOMmRrSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9wcm95ZWN0by1ib2Rhcy50ZXN0L2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1646699139);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
INSERT INTO `users` VALUES (1,'Seeder','seeder@test.com','2021-11-11 04:50:43','$2y$10$L9m5CHMH449LV21krwHb2eRmdHphuQhWZug679wCl1mycF5cFgjHq',NULL,NULL,NULL,NULL,'profile-photos/LovtRSEBAOrh0EtVISJyFChkPjVlmDJFlNJjQzSW.jpg','2021-11-23 03:12:27','2021-11-23 04:04:42');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'proyecto_bodas'
--

--
-- Dumping routines for database 'proyecto_bodas'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-14 16:43:51
