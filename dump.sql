-- MariaDB dump 10.19  Distrib 10.4.19-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: agenda
-- ------------------------------------------------------
-- Server version	10.4.19-MariaDB

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
-- Table structure for table `header`
--

DROP TABLE IF EXISTS `header`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `header` (
  `id_header` int(11) NOT NULL AUTO_INCREMENT,
  `header_name` varchar(50) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_header`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `header`
--

LOCK TABLES `header` WRITE;
/*!40000 ALTER TABLE `header` DISABLE KEYS */;
/*!40000 ALTER TABLE `header` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_agenda`
--

DROP TABLE IF EXISTS `tb_agenda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_agenda` (
  `id_agenda` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kegiatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `penyelenggara` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `agenda` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_agenda` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tanggal` date NOT NULL,
  `pukul` time NOT NULL,
  `tempat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pakaian` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `undangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `peran_pimpinan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `urutan_acara` text COLLATE utf8_unicode_ci NOT NULL,
  `tata_ruangan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pihak_terkait` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `petugas_protokol` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `catatan` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `sambutan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `surat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status_agenda` int(11) NOT NULL COMMENT '1: selesai, 2: ditunda; 3: belum berjalan; 4: sedang berlangsung',
  `status_verifikasi` int(11) NOT NULL COMMENT '1: Disetujui; 2: Tidak disetujui; 3: Belum diverifikasi',
  `user_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_agenda`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_agenda`
--

LOCK TABLES `tb_agenda` WRITE;
/*!40000 ALTER TABLE `tb_agenda` DISABLE KEYS */;
INSERT INTO `tb_agenda` VALUES (1,'Lorem Ipsum is simply dummy text of the printing and typesetting industry','Sosialisasi','Lorem Ipsum','Bupati','Bapak Bupati','2021-08-16','17:35:08','Aula P.B. Sudirman','Batik','Lorem ipsum','Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s','1. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s','1629126359965','Lorem Ipsum','Lorem Ipsum','Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s','1628986771001.pdf','1628986771001.pdf',4,2,'Om Harits','2021-08-16 11:39:31','2021-08-19 07:55:34',NULL),(2,'cobas','cobas','Lorem Ipsums','Bupati','cobas','2021-08-27','21:26:00','cobas','cobas','cobas','cobas','1. cobas; 2. cobas; 3. cobas','162912014494623','cobas','cobas','cobas','1629120144946.pdf','16291201449461.pdf',3,1,'Om Harits','2021-08-16 20:22:24','2021-08-19 09:21:18',NULL),(5,'testing','testing','Lorem Ipsum','Wakil Bupati','testing','2021-09-04','22:06:00','testing','testing','testing','testing','testing','1629126151503.PNG','testing','testing','testing','1629126151503.pdf','16291261515031.pdf',4,1,'Om Harits','2021-08-16 22:02:31','2021-08-19 07:55:34','2021-08-18 11:38:07'),(6,'test','test','Lorem Ipsum','Wakil Bupati','test','2021-08-28','16:42:00','test','test','test','test','test','1629193310097.PNG','test','test','test','1629193310097.pdf','16291933100971.pdf',4,1,'Om Harits','2021-08-17 16:41:50','2021-08-19 07:55:34','2021-08-18 10:58:26');
/*!40000 ALTER TABLE `tb_agenda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_levels`
--

DROP TABLE IF EXISTS `user_levels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_levels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_levels`
--

LOCK TABLES `user_levels` WRITE;
/*!40000 ALTER TABLE `user_levels` DISABLE KEYS */;
INSERT INTO `user_levels` VALUES (1,'Superadmin',NULL,NULL),(2,'Admin',NULL,NULL),(3,'user',NULL,NULL);
/*!40000 ALTER TABLE `user_levels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_level_id` int(10) unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `users_user_level_id_foreign` (`user_level_id`) USING BTREE,
  CONSTRAINT `users_user_level_id_foreign` FOREIGN KEY (`user_level_id`) REFERENCES `user_levels` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'admin@admin.com','Intan Permatasari','21232f297a57a5a743894a0e4a801fc3',NULL,NULL);
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

-- Dump completed on 2021-08-19 22:16:06
