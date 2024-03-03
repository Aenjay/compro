# ************************************************************
# Sequel Ace SQL dump
# Version 20062
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.4.18-MariaDB)
# Database: company
# Generation Time: 2024-03-03 23:14:51 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table blog
# ------------------------------------------------------------

DROP TABLE IF EXISTS `blog`;

CREATE TABLE `blog` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ringkasan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint(20) unsigned DEFAULT NULL,
  `updated_by` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `blog_judul_index` (`judul`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `blog` WRITE;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;

INSERT INTO `blog` (`id`, `judul`, `ringkasan`, `isi`, `slug`, `file`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,'Bonsai','Bonsai merupakan seni menanam pohon kecil dalam pot kecil, menciptakan replika pohon alami yang tampak miniatur.','Bonsai merupakan seni menanam pohon kecil dalam pot kecil, menciptakan replika pohon alami yang tampak miniatur.',NULL,'20240303163714-bonsai.jpg',NULL,NULL,'2024-03-03 09:37:14','2024-03-03 09:37:14',NULL),
	(2,'Anggrek tanah cina','Anggrek Tanah Cina, atau Paphiopedilum, adalah jenis anggrek yang berasal dari wilayah subtropis hingga tropis di Asia, termasuk Cina.','Anggrek Tanah Cina, atau Paphiopedilum, adalah jenis anggrek yang berasal dari wilayah subtropis hingga tropis di Asia, termasuk Cina.',NULL,'20240303163758-shocking.jpg',NULL,NULL,'2024-03-03 09:37:58','2024-03-03 09:37:58',NULL),
	(3,'Sansevieria','Sansevieria, juga dikenal sebagai lidah mertua atau lidah buaya, adalah tanaman hias populer yang dikenal karena daya tahan.','Sansevieria, juga dikenal sebagai lidah mertua atau lidah buaya, adalah tanaman hias populer yang dikenal karena daya tahan.',NULL,'20240303163840-tanaman.jpg',NULL,NULL,'2024-03-03 09:38:40','2024-03-03 09:38:40',NULL),
	(4,'Monstera Obliqua','Monstera obliqua, tanaman hias populer, dikenal dengan daunnya yang unik dan berlobus. Tanaman ini memiliki daun kecil-sedang.','Monstera obliqua, tanaman hias populer, dikenal dengan daunnya yang unik dan berlobus. Tanaman ini memiliki daun kecil-sedang.',NULL,'20240303163920-bolong.jpg',NULL,NULL,'2024-03-03 09:39:20','2024-03-03 09:39:20',NULL),
	(5,'Mawar Putih','Mawar putih adalah jenis bunga yang populer dan dikenal sebagai simbol kebersihan dan kepolosan. Bunga ini sering digunakan dalam berbagai acara, seperti pernikahan.','Mawar putih adalah jenis bunga yang populer dan dikenal sebagai simbol kebersihan dan kepolosan. Bunga ini sering digunakan dalam berbagai acara, seperti pernikahan.',NULL,'20240303163959-mawar.jpg',NULL,NULL,'2024-03-03 09:39:59','2024-03-03 09:39:59',NULL),
	(6,'Tulip','Tulip adalah bunga yang berasal dari Asia Tengah dan Timur Tengah. Bunga ini dikenal karena keindahan warna dan bentuknya yang unik. Tulip menjadi simbol keindahan.','Tulip adalah bunga yang berasal dari Asia Tengah dan Timur Tengah. Bunga ini dikenal karena keindahan warna dan bentuknya yang unik. Tulip menjadi simbol keindahan.',NULL,'20240303164032-tulip.jpg',NULL,NULL,'2024-03-03 09:40:32','2024-03-03 09:40:32',NULL),
	(7,'Bunga Matahari','Bunga matahari adalah tanaman tahunan yang dikenal dengan bunga besar dan bijinya yang kaya akan nutrisi. Bunga ini bunga besar yang mengikuti gerakan matahari.','Bunga matahari adalah tanaman tahunan yang dikenal dengan bunga besar dan bijinya yang kaya akan nutrisi. Bunga ini bunga besar yang mengikuti gerakan matahari.',NULL,'20240303164112-matahari.jpg',NULL,NULL,'2024-03-03 09:41:12','2024-03-03 09:41:12',NULL),
	(8,'Lavender','Lavender adalah tanaman aromatik yang dikenal dengan bunga berwarna ungu yang harum. Tanaman ini sering digunakan untuk keperluan aromaterapi dan pengobatan tradisional.','Lavender adalah tanaman aromatik yang dikenal dengan bunga berwarna ungu yang harum. Tanaman ini sering digunakan untuk keperluan aromaterapi dan pengobatan tradisional.',NULL,'20240303164147-lavender.jpg',NULL,NULL,'2024-03-03 09:41:47','2024-03-03 09:41:47',NULL);

/*!40000 ALTER TABLE `blog` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table contact
# ------------------------------------------------------------

DROP TABLE IF EXISTS `contact`;

CREATE TABLE `contact` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saran` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `contact_nama_index` (`nama`),
  KEY `contact_email_index` (`email`),
  KEY `contact_telepon_index` (`telepon`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;

INSERT INTO `contact` (`id`, `nama`, `email`, `telepon`, `alamat`, `saran`, `created_at`, `updated_at`)
VALUES
	(1,'Fajar','fajarmuhamad997@gmail.com','085123123','Jln..','jasdasd','2024-03-03 10:42:58','2024-03-03 10:42:58');

/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table failed_jobs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `failed_jobs`;

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



# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_reset_tokens_table',1),
	(3,'2019_08_19_000000_create_failed_jobs_table',1),
	(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
	(5,'2024_03_03_140743_add_column_role_to_users_table',2),
	(7,'2024_03_03_145416_create_blog_table',4),
	(8,'2024_03_03_162140_create_service_table',5),
	(9,'2024_03_03_164654_add_column_file_to_users_table',6),
	(10,'2024_03_03_165919_add_column_created_by_to_users_table',7),
	(11,'2024_03_03_173831_create_contact_table',8);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_reset_tokens
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_reset_tokens`;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table personal_access_tokens
# ------------------------------------------------------------

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table service
# ------------------------------------------------------------

DROP TABLE IF EXISTS `service`;

CREATE TABLE `service` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint(20) unsigned DEFAULT NULL,
  `updated_by` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `service_judul_index` (`nama`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `service` WRITE;
/*!40000 ALTER TABLE `service` DISABLE KEYS */;

INSERT INTO `service` (`id`, `nama`, `deskripsi`, `file`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,'Design Taman','Mewujudkan taman impian Anda dengan desain yang indah.','20240303163240-Screenshot 2024-03-03 at 23.32.32.png',NULL,NULL,'2024-03-03 09:32:40','2024-03-03 09:32:40',NULL),
	(2,'Perawatan Tanaman','Memberikan perawatan khusus untuk pertumbuhan tanaman yang optimal.','20240303163318-Screenshot 2024-03-03 at 23.33.06.png',NULL,NULL,'2024-03-03 09:33:18','2024-03-03 09:33:18',NULL),
	(3,'Pusat Tanaman','Memberikan perawatan khusus untuk pertumbuhan tanaman yang optimal.','20240303163340-Screenshot 2024-03-03 at 23.33.29.png',NULL,NULL,'2024-03-03 09:33:40','2024-03-03 09:33:40',NULL),
	(4,'Konsultasi Ahli','Dapatkan saran ahli untuk kebutuhan tanaman Anda.','20240303163405-Screenshot 2024-03-03 at 23.33.58.png',NULL,NULL,'2024-03-03 09:34:05','2024-03-03 09:34:05',NULL),
	(5,'Perawatan Lingkungan','Menyumbang pada pelestarian lingkungan dengan praktik perawatan tanaman yang ramah lingkungan.','20240303163430-Screenshot 2024-03-03 at 23.34.13.png',NULL,NULL,'2024-03-03 09:34:30','2024-03-03 09:34:30',NULL),
	(6,'Tanaman Organik','Menyediakan tanaman organik untuk kebutuhan pertanian dan kebun Anda.','20240303163452-Screenshot 2024-03-03 at 23.34.36.png',NULL,NULL,'2024-03-03 09:34:52','2024-03-03 09:34:52',NULL),
	(7,'Sistem Irigasi','Merancang dan memasang sistem irigasi yang efisien untuk tanaman Anda.','20240303163518-Screenshot 2024-03-03 at 23.35.01.png',NULL,NULL,'2024-03-03 09:35:18','2024-03-03 09:35:18',NULL),
	(8,'Lanskap Pegunungan','Menciptakan lanskap yang memukau dengan tema pegunungan untuk area tertentu.','20240303163551-Screenshot 2024-03-03 at 23.35.43.png',NULL,NULL,'2024-03-03 09:35:51','2024-03-03 09:35:51',NULL);

/*!40000 ALTER TABLE `service` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint(20) unsigned DEFAULT NULL,
  `updated_by` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `file`, `created_by`, `updated_by`)
VALUES
	(1,'Super Admin','superadmin@gmail.com','2024-03-03 07:11:30','$2y$12$pWrhKcSuEq8AF2.X3GDCD.wgykadUwyjiTz3h3oommZI0/ua2HphC','Xe5fuskTvbJOzrUJ9InFUgiDizREHZBxSFO7cFDJ2WYOpvtEgrec4pLAgQmb','2024-03-03 07:11:30','2024-03-03 09:56:50','Super Admin','20240303165650-admin.png',NULL,NULL),
	(2,'Admin','admin@gmail.com','2024-03-03 07:11:30','$2y$12$EgNsPhaY/FQpD3fHNcVCru2pjljgPwaYc.7JLIkDcg7Au5/I9BvK6','6IhvWdNwfQIfeKpYZtJtow8kWhQXNqXr6WEv4uJPwTZQ2D5bMtBDM92amwH0','2024-03-03 07:11:30','2024-03-03 09:56:57','Admin','20240303165657-favorit.png',NULL,NULL),
	(5,'Abdul','user@gmail.com',NULL,'$2y$12$o/gA0uUJ7Sldm0dZ48uo8uUrIf0Am.VhdEq2DB9x5ek4mBxmUmpyG',NULL,'2024-03-03 16:03:43','2024-03-03 16:03:43','User',NULL,NULL,NULL),
	(6,'Abdul Kahar','user2@gmail.com',NULL,'$2y$12$weAG9SZYGIzav8t3HdKKxu/blFiQe7DsyruT8Fu3.ZUVwonniR7/a',NULL,'2024-03-03 16:11:30','2024-03-03 16:11:30','User',NULL,NULL,NULL);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
