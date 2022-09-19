-- MySQL dump 10.13  Distrib 8.0.29, for Linux (x86_64)
--
-- Host: localhost    Database: sapi
-- ------------------------------------------------------
-- Server version	8.0.29-0ubuntu0.20.04.3

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
-- Table structure for table `data_sapi`
--

DROP TABLE IF EXISTS `data_sapi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data_sapi` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `id_user` int DEFAULT NULL,
  `id_sapi` varchar(30) NOT NULL,
  `id_jenis` int DEFAULT NULL,
  `id_pakan` int NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `bobot_sapi` float NOT NULL,
  `warna_sapi` varchar(20) NOT NULL,
  `harga_sapi` decimal(10,0) NOT NULL,
  `qr_code` text NOT NULL,
  `input_dt` datetime NOT NULL,
  `update_dt` datetime NOT NULL,
  `id_parent` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_jenis` (`id_jenis`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `data_sapi_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenis` (`id_jenis`),
  CONSTRAINT `data_sapi_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `history` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_user` bigint unsigned DEFAULT NULL,
  `action` varchar(100) DEFAULT NULL,
  `updated_at` varchar(100) DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `jenis`
--

DROP TABLE IF EXISTS `jenis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jenis` (
  `id_jenis` int NOT NULL AUTO_INCREMENT,
  `jenis` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  `input_dt` datetime NOT NULL,
  `update_dt` datetime NOT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jenis` WRITE;
/*!40000 ALTER TABLE `jenis` DISABLE KEYS */;
INSERT INTO `jenis` VALUES 
(1,'Hereford','Sapi yang pertama kali dikembang biakan di daerah herefordsire inggris adalah jenis sapi yang sangat besar malah dahulu bobot sapi ini lebih besar dari keterunan hereford sekarang, seorang peternak sapi yang bernama benjamin tomkins menulis pada bukunya bahwa ia pernah memelihara sapi hereford dengan berat sebesar 3.900 pound atau sekitar 1,7 ton. Walaupun begitu sapi hereford masih memiliki berat ideal sekarang ini walaupun tidak sebesar dahulu, berat sapi hereford jantan dewasa bisa mencapai 1.800 pound dan rata-rata berat betina sekitar 1.200 pound.','2022-09-20 01:55:47','2022-09-20 01:55:47'),
(2,'Aberden Angus','suatu daerah yang bernama Aberdeen Shire dan Aungushire di Negara Scotlandia sana maka sapi Angus ini memiliki nama Nama resmi atau nama populer Aberdeen Angus.Ciri fisik sapi Angus lainnya adalah tidak memiliki punuk dan juga tidak mempunyai tanduk, bentuknya agak pendek tetapi gerakannya lincah atau aktif bergerak.','2022-08-11 03:41:02','2022-08-11 03:41:02'),
(3,'12345','Sapi ini aslinya berasal dari Switzerland dan berhasil di budidaya kan secara pesat di berbagai negara dunia, Australia, Selandia Baru, Benua Amerika termasuk juga Indonesia. Keunggulan lain, sapi ini bisa dijadikan sapi perah juga sapi pedaging. Sapi Simetal jantan dewasa berbobot 1,15 ton/ekor. Sedangkan betina dewasa mencapai 800 kg/ekor.','2022-08-29 05:20:46','2022-08-29 05:20:46');
/*!40000 ALTER TABLE `jenis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mahasiswa`
--

DROP TABLE IF EXISTS `mahasiswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mahasiswa` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nrp` char(9) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `jurusan` varchar(64) NOT NULL,
  `gambar` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `mhs`
--

DROP TABLE IF EXISTS `mhs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mhs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `nrp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `murid`
--

DROP TABLE IF EXISTS `murid`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `murid` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(250) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `gambar` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pakan`
--

DROP TABLE IF EXISTS `pakan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pakan` (
  `id_pakan` int NOT NULL AUTO_INCREMENT,
  `pakan` varchar(30) NOT NULL,
  `input_dt` datetime NOT NULL,
  `update_dt` datetime NOT NULL,
  PRIMARY KEY (`id_pakan`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `pakan` WRITE;
/*!40000 ALTER TABLE `pakan` DISABLE KEYS */;
INSERT INTO `pakan` VALUES 
(1,'Rumput Benggala','2022-08-11 08:03:57','2022-08-11 08:03:57'),
(2,'Lamtoro','2022-08-11 08:03:57','2022-08-11 08:03:57'),
(3,'Gamal','2022-08-17 18:10:43','2022-08-17 18:10:43'),
(4,'Desmodium','2022-08-31 21:54:51','2022-08-31 21:54:51');
/*!40000 ALTER TABLE `pakan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pakan_sapi`
--

DROP TABLE IF EXISTS `pakan_sapi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pakan_sapi` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_sapi` int NOT NULL,
  `id_pakan` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pakan` (`id_pakan`),
  KEY `id_sapi` (`id_sapi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('Admin','Peternak') NOT NULL,
  `input_dt` datetime NOT NULL,
  `update_dt` datetime NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES 
(1,'admin','$2a$10$OGnb10eQARUu7yrGD3qvHex6YBMrOY/fluqf8MEY8e7i2fnga5aT2','Admin','2022-08-11 16:24:45','2022-08-11 16:24:45'),
(2,'peternak','$2y$10$gPlY9H8UuOkyNb7egYehguMnS57GIdmQJhSKeL.ETZ41htscnY6eW','Peternak','2022-08-15 14:22:21','2022-08-15 14:22:21'),
(3,'peternak2','$2y$10$p5lF3DyOrQgfeMX9XWkEwOCegyqLcEICrjff7mL5JHOl9TYBOYPqG','Peternak','2022-08-17 17:45:45','2022-08-17 17:45:45'),
(4,'peternak3','$2y$10$J226kebJvSIl4Vo.5ik1DO.0SCOC.ipSDZ.GFWZ80NT50zUpSs.dO','Peternak','2022-08-24 01:39:52','2022-08-24 01:39:52'),
(5,'peternak4','$2y$10$oc4NGWe892jrgr0MtFEiU.7ozEor1G/1cjeZzDeUYpn0tqD1yX.66','Peternak','2022-08-31 10:46:00','2022-08-31 10:46:00');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES 
(1,'Amrendra','admin@gmail.com','087937462364','Jepara'),
(2,'Bahubalis','bahubalis@gmail.com','087746263748','Pati'),
(3,'Abraham','abraham@gmail.com','089746362746','Jakarta'),
(4,'Kuryowono','kiri@gmail.com','089847362546','Magelang'),
(5,'Karawini','karawas@gmail.com','085827364623','Semarang');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vaksin`
--

DROP TABLE IF EXISTS `vaksin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vaksin` (
  `id_vaksin` int NOT NULL AUTO_INCREMENT,
  `vaksin` varchar(30) NOT NULL,
  `input_dt` datetime NOT NULL,
  `update_dt` datetime NOT NULL,
  PRIMARY KEY (`id_vaksin`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `vaksin_sapi`
--

DROP TABLE IF EXISTS `vaksin_sapi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vaksin_sapi` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_sapi` varchar(30) NOT NULL,
  `id_vaksin` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_vaksin` (`id_vaksin`),
  CONSTRAINT `vaksin_sapi_ibfk_2` FOREIGN KEY (`id_vaksin`) REFERENCES `vaksin` (`id_vaksin`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping routines for database 'sapi'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-20  2:18:34
