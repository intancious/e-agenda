-- MariaDB dump 10.19  Distrib 10.4.20-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: agenda
-- ------------------------------------------------------
-- Server version	10.4.20-MariaDB

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
  `sub_agenda` text COLLATE utf8_unicode_ci DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_agenda`
--

LOCK TABLES `tb_agenda` WRITE;
/*!40000 ALTER TABLE `tb_agenda` DISABLE KEYS */;
INSERT INTO `tb_agenda` VALUES (1,'Vaksinasi Gratis Untuk Warga Kecamatan Silo','Peninjauan Langsung','Pemkab Jember','Bupati','1. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\r\n2. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n3. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ','2021-08-23','08:38:00','Kecamatan Silo','Busana Muslim','Lorem Ipsum','Lorem Ipsum','Lorem Ipsum','Lorem Ipsum','Lorem Ipsum','Lorem Ipsum','Lorem Ipsum','1629682785190.pdf','1629682785190.jpg',1,1,'1','2021-08-23 08:39:45','2021-08-23 13:33:03',NULL),(2,'testings','testings','testings','Bupati','testings','2021-08-26','15:31:00','testings','testings','testings','testings','testings','testings','testings','testings','testings','1629703944176.pdf','1629703944176.jpg',2,2,'5','2021-08-23 14:32:24','2021-08-24 09:55:54','2021-08-24 09:55:54'),(3,'coba','coba','coba','Bupati','coba','2021-08-25','09:57:00','coba','coba','coba','coba','coba','coba','coba','coba','coba','1629773870835.pdf','1629773870835.jpg',4,1,'4','2021-08-24 09:57:50','2021-08-24 10:21:40',NULL),(4,'jalan sehat berhadian 100$','hiburan rakyat','Mbak Desinta','Wakil Bupati','Mas Rosid : Pembagian Hadiah\r\nMbak Anis : Menyanyi\r\nMas Haritz : Membagikan konsumsi\r\n','2021-08-28','17:55:00','mana ajawes','bebass','mbak desinta','menonton','-','alun\" tengah','mbak desinta','mas wisnu','mas rosid wajib hadir','1629788202376.pdf','16297882023761.pdf',2,2,'1','2021-08-24 13:56:42','2021-08-24 13:58:51',NULL),(5,'agaggaga','jashjdhsajkdhkajs','jhdjaskhdkajd','Bupati','sdkajsdksja','2021-08-29','14:23:00','kjksdjl','kjkjlkjl','klhkjkj','hkhkljkj','jhjhkj','hjkhjhkjhkj','hjghjgjghj','jkhkjhkjnjkk','jhkkjk',NULL,'',3,3,'1','2021-08-24 14:20:02','2021-08-24 14:20:02',NULL);
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
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_levels`
--

LOCK TABLES `user_levels` WRITE;
/*!40000 ALTER TABLE `user_levels` DISABLE KEYS */;
INSERT INTO `user_levels` VALUES (1,'Superadmin','2021-08-24 07:52:11','2021-08-24 07:52:18'),(2,'Admin','2021-08-24 07:52:24','2021-08-24 07:52:28'),(3,'User','2021-08-24 07:52:31','2021-08-24 07:52:34');
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
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE,
  KEY `users_user_level_id_foreign` (`user_level_id`) USING BTREE,
  CONSTRAINT `users_user_level_id_foreign` FOREIGN KEY (`user_level_id`) REFERENCES `user_levels` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'admin@admin.com','Admin KOPIPRO','202cb962ac59075b964b07152d234b70','2021-08-23 13:19:21','2021-08-25 08:53:57'),(2,2,'bupati@gmail.com','Ir. H. Hendy Siswanto','c78de339ede23183fc9655b17fd6ba95','2021-08-23 13:22:09','2021-08-23 13:22:09'),(3,2,'wabup@gmail.com','KH. MB Firjaun Barlaman','2f8b68b996832a642955fc488d06f282','2021-08-23 13:22:09','2021-08-23 13:22:09'),(4,1,'sespri1@gmail.com','Sekretaris Bupati','7c18961df6176cbaa3c75702b9f473b7','2021-08-23 13:24:28','2021-08-23 13:24:28'),(5,1,'sespri2@gmail.com','Sekretaris Wakil Bupati','29b15eb2d4183a775d4c60d7eef97614','2021-08-23 13:24:28','2021-08-23 13:24:28'),(6,1,'protokol@gmail.com','Protokol','4873fcef7920451651653d12d3197710','2021-08-23 13:25:38','2021-08-23 13:25:38'),(7,3,'user@gmail.com','User Umum','ee11cbb19052e40b07aac0ca060c23ee','2021-08-23 13:26:09','2021-08-23 13:26:09'),(8,3,'rosid321@gmail.com','Fathor Rosid','827ccb0eea8a706c4c34a16891f84e7b','2021-08-23 21:17:45','2021-08-24 10:25:23'),(9,3,'damayanti@gmail.com','Desinta Damayanti ','202cb962ac59075b964b07152d234b70','2021-08-23 21:45:06','2021-08-24 10:24:53'),(11,3,'intan@gmail.com','Intan Permatasari','827ccb0eea8a706c4c34a16891f84e7b','2021-08-23 23:44:19','2021-08-24 10:25:08');
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

-- Dump completed on 2021-08-25  9:11:39
