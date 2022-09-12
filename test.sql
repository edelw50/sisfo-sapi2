-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 01:24 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_sapi`
--

CREATE TABLE `data_sapi` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_sapi` varchar(30) NOT NULL,
  `id_jenis` int(11) DEFAULT NULL,
  `id_pakan` int(11) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `bobot_sapi` float NOT NULL,
  `warna_sapi` varchar(20) NOT NULL,
  `harga_sapi` decimal(10,0) NOT NULL,
  `qr_code` text NOT NULL,
  `input_dt` datetime NOT NULL,
  `update_dt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_sapi`
--

INSERT INTO `data_sapi` (`id`, `nama`, `id_user`, `id_sapi`, `id_jenis`, `id_pakan`, `jenis_kelamin`, `tgl_lahir`, `bobot_sapi`, `warna_sapi`, `harga_sapi`, `qr_code`, `input_dt`, `update_dt`) VALUES
(16, 'Sapi A', 8, '5BMajGU6zY', 1, 1, 'Betina', '2022-09-03', 65, 'Coklat', '456', 'iVBORw0KGgoAAAANSUhEUgAAAKQAAACkAQMAAAAjexcCAAAABlBMVEX///8AAABVwtN+AAAACXBIWXMAAA7EAAAOxAGVKw4bAAABOklEQVRIie2WwZEDMQgEyWDyz5IMOHpky3tv8M+q9ZbUerAMaOSI3/jyqKpU+BfJYokmz9mK9GKJVvZTPVEw26QqqZgsUyIplbFJ/f2dgN5S7VAEv+NfjWfUO8QqPcicttoUszslhD5btIkjhcupW4sppfkcSDT3VX1MvZacgnrEEu3pOSrO5h1tTuWmLrVKtEgu0uRFTbPIZYf2uxXppVzSlzpzGnw9uqAOcZcocSBZxz+2KB5HICraW9qibmnF6Tx7/hJNpM6jUlx1xpTu6zrKZzyePTmjaNLnkGTwjNqiKGO/KLov75mfUkfDPTuPj9fP6auiOPO59paobyeHEkaqLcoFSiROYn7UmVP/W8GZjzq5SGX3xOMqYpGWrdm3//MbZtQXKnc1AsVDsxmlmla8TkK5RH/ji+MP24bEZSG/iXIAAAAASUVORK5CYII=', '2022-09-07 23:09:03', '2022-09-07 23:09:03'),
(17, 'Sapi B', 8, 'ruM5IXtV6s', 2, 2, 'Jantan', '2022-03-12', 85, 'Putih', '4567', 'iVBORw0KGgoAAAANSUhEUgAAAKQAAACkAQMAAAAjexcCAAAABlBMVEX///8AAABVwtN+AAAACXBIWXMAAA7EAAAOxAGVKw4bAAABLklEQVRIie2W2Q3EQAhD6cD9d0kHLDa59hvnL6PVBl6ijPBwJOJbL6+qysgsBP/peGjSy6ALOS5azQi15Ngo7URVmCkCAH0npQ3+Ym6YaJ3CSJznGe8oF7hdb/afgTva769OPXCn1gguKoOok1AKuWiyWqKDYCRnIHsakqVCm+HCa9rZPInNQK5H9/SwoUsCaaLsFW2DZ9nRIEyUkoAKteaUyEVVL5iLHjFRsG12cU/2nersaYtSx71nDe1pqASZLnE3jT2FurGyr61LnTWlpRA4++LOyS1NzdKk6s1YjiZKv1g0BJU2ygOV6DUfAiY6JzqJza7kojOdWN6J+Wjx0Jy8g9R/qrOl81WRpzpWqu6pYMpJU8pwhCBsVHNJlZLXMDVQneZ0T/Z6uOi3Xlw/HAXEZUJ4QEgAAAAASUVORK5CYII=', '2022-09-07 23:09:29', '2022-09-07 23:09:29'),
(18, 'Sapi ZZ', 8, 'y8PqDvLOey', 2, 4, 'Jantan', '2022-07-15', 98, 'Hitam', '5678', 'iVBORw0KGgoAAAANSUhEUgAAAKQAAACkAQMAAAAjexcCAAAABlBMVEX///8AAABVwtN+AAAACXBIWXMAAA7EAAAOxAGVKw4bAAABMUlEQVRIie2WQZYCMQhEuQH3vyU3wPqkM45ryp10G81nwaMgwYiffdm6uyo7i4eNiWrVNgA5GxdVsChZ88XGSImResw0ZXJ4Ka8caFQfmu3oVPPaZ41X9GSSoT55AwNlR/ON653FmiaeeVROdXa4aEqR1ppI0zfamrYcaN3TIVf0PVUcBetJQJ8sE0VtKcNKd/8r8I4ii9KAdYePxnQeJ0aPRC8TVQFP77HO4qEcEiFCUQAb5b5QFkgUNImL5tTwuZXj3hp7SgJ9Vg7LLeae1iNQjSNdtPLsYw5O3mm6p1SQvsOT8XcIt7TPxTGo37mt6UQkXJ4OdNFnIDGjeMNFz+A4vcLtWS7KMM05gwzTcNKjCTdGdhgpcRhO89NFKeYMkRqfi54Yef4J3tlkoD/7or0AnnrwsRHnLRoAAAAASUVORK5CYII=', '2022-09-07 23:09:54', '2022-09-07 23:09:54');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  `input_dt` datetime NOT NULL,
  `update_dt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `jenis`, `keterangan`, `input_dt`, `update_dt`) VALUES
(1, 'Hereford', 'Sapi yang pertama kali dikembang biakan di daerah herefordsire inggris adalah jenis sapi yang sangat besar malah dahulu bobot sapi ini lebih besar dari keterunan hereford sekarang, seorang peternak sapi yang bernama benjamin tomkins menulis pada bukunya bahwa ia pernah memelihara sapi hereford dengan berat sebesar 3.900 pound atau sekitar 1,7 ton. Walaupun begitu sapi hereford masih memiliki berat ideal sekarang ini walaupun tidak sebesar dahulu, berat sapi hereford jantan dewasa bisa mencapai 1.800 pound dan rata-rata berat betina sekitar 1.200 pound.', '2022-08-11 03:41:02', '2022-08-11 03:41:02'),
(2, 'Aberden Angus', 'suatu daerah yang bernama Aberdeen Shire dan Aungushire di Negara Scotlandia sana maka sapi Angus ini memiliki nama Nama resmi atau nama populer Aberdeen Angus.Ciri fisik sapi Angus lainnya adalah tidak memiliki punuk dan juga tidak mempunyai tanduk, bentuknya agak pendek tetapi gerakannya lincah atau aktif bergerak.', '2022-08-11 03:41:02', '2022-08-11 03:41:02'),
(3, '12345', 'Sapi ini aslinya berasal dari Switzerland dan berhasil di budidaya kan secara pesat di berbagai negara dunia, Australia, Selandia Baru, Benua Amerika termasuk juga Indonesia. Keunggulan lain, sapi ini bisa dijadikan sapi perah juga sapi pedaging. Sapi Simetal jantan dewasa berbobot 1,15 ton/ekor. Sedangkan betina dewasa mencapai 800 kg/ekor.', '2022-08-29 05:20:46', '2022-08-29 05:20:46'),
(48, 'tes jenis update', 'tesketerangan', '2022-08-31 13:37:24', '2022-08-31 13:37:24');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nrp` char(9) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `jurusan` varchar(64) NOT NULL,
  `gambar` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nrp`, `nama`, `email`, `jurusan`, `gambar`) VALUES
(1, '002345678', 'Edelweis Dwii', 'edelwww@gmail.com', 'Teknik Telkom', '629a16a786a04.jpg'),
(2, '002345345', 'Dwi Edelweis', 'dwiedelweis@gmail.com', 'Teknik Elektro', 'img2.jpg'),
(3, '123456378', 'Zendaya', 'zenzendaya@gmail.com', 'Teknik Informatika', 'img3.jpg'),
(4, '567890234', 'Tom Holland', 'hollandtom1980@gmail.com', 'Teknik Sipil', 'img4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` (
  `id` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nrp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`id`, `nama`, `nrp`, `email`, `jurusan`) VALUES
(1, 'Edelweis Dwi', '043240324', 'edelweis@gmail.com', 'Teknik Sipil'),
(2, 'Erick Armana', '79879898900', 'erick@gmail.com', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `murid`
--

CREATE TABLE `murid` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `gambar` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `murid`
--

INSERT INTO `murid` (`id`, `nama`, `nomor`, `gambar`) VALUES
(18, 'Sapi 1', '3712372', '3712372.png'),
(19, 'Sapi 2', '00284938', '00284938.png'),
(20, 'Sapi 3', '74636595', '74636595.png'),
(21, 'Sapi 4', '93859084', '93859084.png'),
(22, 'Sapi 4', '4329548', '4329548.png'),
(23, 'Sapi 5', '47826384', '47826384.png');

-- --------------------------------------------------------

--
-- Table structure for table `pakan`
--

CREATE TABLE `pakan` (
  `id_pakan` int(11) NOT NULL,
  `pakan` varchar(30) NOT NULL,
  `input_dt` datetime NOT NULL,
  `update_dt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pakan`
--

INSERT INTO `pakan` (`id_pakan`, `pakan`, `input_dt`, `update_dt`) VALUES
(1, 'Rumput Benggala', '2022-08-11 08:03:57', '2022-08-11 08:03:57'),
(2, 'Lamtoro', '2022-08-11 08:03:57', '2022-08-11 08:03:57'),
(3, 'Gamal', '2022-08-17 18:10:43', '2022-08-17 18:10:43'),
(4, 'Desmodium', '2022-08-31 21:54:51', '2022-08-31 21:54:51');

-- --------------------------------------------------------

--
-- Table structure for table `pakan_sapi`
--

CREATE TABLE `pakan_sapi` (
  `id` int(11) NOT NULL,
  `id_sapi` int(11) NOT NULL,
  `id_pakan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('Admin','Peternak') NOT NULL,
  `input_dt` datetime NOT NULL,
  `update_dt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`, `input_dt`, `update_dt`) VALUES
(4, 'edel123', '123', 'Admin', '0000-00-00 00:00:00', '2022-08-31 14:00:07'),
(5, 'admin', '$2y$10$Me6k4HT3cC.iw.qvgXUakOgPHScDNmdXMOIT.vZHauEUN9tUNeCES', 'Admin', '2022-08-11 16:24:45', '2022-08-11 16:24:45'),
(6, 'peternak', '$2y$10$gPlY9H8UuOkyNb7egYehguMnS57GIdmQJhSKeL.ETZ41htscnY6eW', 'Peternak', '2022-08-15 14:22:21', '2022-08-15 14:22:21'),
(7, 'peternak2', '$2y$10$p5lF3DyOrQgfeMX9XWkEwOCegyqLcEICrjff7mL5JHOl9TYBOYPqG', 'Peternak', '2022-08-17 17:45:45', '2022-08-17 17:45:45'),
(8, 'peternak3', '$2y$10$J226kebJvSIl4Vo.5ik1DO.0SCOC.ipSDZ.GFWZ80NT50zUpSs.dO', 'Peternak', '2022-08-24 01:39:52', '2022-08-24 01:39:52'),
(9, 'peternak4', '$2y$10$oc4NGWe892jrgr0MtFEiU.7ozEor1G/1cjeZzDeUYpn0tqD1yX.66', 'Peternak', '2022-08-31 10:46:00', '2022-08-31 10:46:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `mobile`, `city`) VALUES
(7, 'pki-validation', 'user@gmail.com', '8887919632', 'Lucknow'),
(8, 'pki-validation', 'user@gmail.com', '8887919632', 'Lucknow'),
(9, 'Rajs', 'user@gmail.com', '8887919632', 'Lucknow'),
(10, 'Amrendra', 'user@gmail.com', '434334', 'Lucknow'),
(11, 'Bahubalis', 'user@gmail.com', '000000', 'Lucknowww'),
(13, 'admin', 'admin@gmail.com', '9988999999', 'Lucknow'),
(15, 'ninebroadband', 'superadmin@gmail.com', '8127956219', 'Lucknow'),
(16, 'index.html', 'superadmin@gmail.com', '8127956219', 'Lucknow'),
(18, 'index.html', 'user@gmail.com', '8127956219', 'Lucknow'),
(19, 'sfd', 'sfdasf@Gmail.com', 'adsffsaf', 'safdsa'),
(21, 'djksd', 'delweiss99@gmail.com', '088806897055', 'Ambarawa'),
(22, 'djksd', 'delweiss99@gmail.com', '088806897055', 'Ambarawa'),
(23, 'edelw', 'delweiss99@gmail.comm', '0878779021921', 'Ammkaknskann'),
(24, 'dksldk', 'itsedelweis99@dlsdkkdk', '0878779021', 'ICON+ Mampang, Jakarsya');

-- --------------------------------------------------------

--
-- Table structure for table `vaksin`
--

CREATE TABLE `vaksin` (
  `id_vaksin` int(11) NOT NULL,
  `vaksin` varchar(30) NOT NULL,
  `input_dt` datetime NOT NULL,
  `update_dt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vaksin`
--

INSERT INTO `vaksin` (`id_vaksin`, `vaksin`, `input_dt`, `update_dt`) VALUES
(1, 'Vaksin1', '2022-08-11 08:04:33', '2022-08-11 08:04:33'),
(2, 'Vaksin2', '2022-08-11 08:04:33', '2022-08-11 08:04:33');

-- --------------------------------------------------------

--
-- Table structure for table `vaksin_sapi`
--

CREATE TABLE `vaksin_sapi` (
  `id` int(11) NOT NULL,
  `id_sapi` varchar(30) NOT NULL,
  `id_vaksin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vaksin_sapi`
--

INSERT INTO `vaksin_sapi` (`id`, `id_sapi`, `id_vaksin`) VALUES
(14, '5BMajGU6zY', 1),
(15, 'ruM5IXtV6s', 1),
(16, 'ruM5IXtV6s', 2),
(17, 'y8PqDvLOey', 1),
(18, 'y8PqDvLOey', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_sapi`
--
ALTER TABLE `data_sapi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jenis` (`id_jenis`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakan`
--
ALTER TABLE `pakan`
  ADD PRIMARY KEY (`id_pakan`);

--
-- Indexes for table `pakan_sapi`
--
ALTER TABLE `pakan_sapi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pakan` (`id_pakan`),
  ADD KEY `id_sapi` (`id_sapi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaksin`
--
ALTER TABLE `vaksin`
  ADD PRIMARY KEY (`id_vaksin`);

--
-- Indexes for table `vaksin_sapi`
--
ALTER TABLE `vaksin_sapi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_vaksin` (`id_vaksin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_sapi`
--
ALTER TABLE `data_sapi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mhs`
--
ALTER TABLE `mhs`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `murid`
--
ALTER TABLE `murid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pakan`
--
ALTER TABLE `pakan`
  MODIFY `id_pakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pakan_sapi`
--
ALTER TABLE `pakan_sapi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `vaksin`
--
ALTER TABLE `vaksin`
  MODIFY `id_vaksin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vaksin_sapi`
--
ALTER TABLE `vaksin_sapi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_sapi`
--
ALTER TABLE `data_sapi`
  ADD CONSTRAINT `data_sapi_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenis` (`id_jenis`),
  ADD CONSTRAINT `data_sapi_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `vaksin_sapi`
--
ALTER TABLE `vaksin_sapi`
  ADD CONSTRAINT `vaksin_sapi_ibfk_2` FOREIGN KEY (`id_vaksin`) REFERENCES `vaksin` (`id_vaksin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
