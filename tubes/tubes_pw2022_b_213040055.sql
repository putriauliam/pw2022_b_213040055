-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 09:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_pw2022_b_213040055`
--

-- --------------------------------------------------------

--
-- Table structure for table `merek`
--

CREATE TABLE `merek` (
  `id_merek` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merek`
--

INSERT INTO `merek` (`id_merek`, `nama`) VALUES
(1, 'Oppo'),
(2, 'Huawei'),
(3, 'Advan'),
(4, 'Nokia'),
(5, 'Lenovo'),
(6, 'Acer'),
(7, 'Nokia'),
(8, 'Xiaomi'),
(9, 'Vivo\r\n'),
(10, 'Asus\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tablet`
--

CREATE TABLE `tablet` (
  `id` int(11) NOT NULL,
  `kode` char(15) NOT NULL,
  `merek` int(11) NOT NULL,
  `tipe` varchar(200) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tablet`
--

INSERT INTO `tablet` (`id`, `kode`, `merek`, `tipe`, `deskripsi`, `gambar`) VALUES
(53, '116702003459877', 2, 'Matepad 11', '  Huawei MatePad 11 adalah tablet dengan layar IPS beresolusi 2560 x 1600pixels. Hadir dengan CPU Qualcomm® Snapdragon™ 865 Mobile Platform untuk mendukung performanya, dilengkapi dengan kapasitas baterai sebesar 7250mAh dan resolusi kamera belakang 13MP.', 'huawei.jpg'),
(69, '300054676389421', 1, 'Pad', ' OPPO Pad adalah tablet dengan layar IPS beresolusi 1600 x 2560pixels. Hadir dengan CPU Qualcomm SM8250-AC Snapdragon 870 5G (7 nm) untuk mendukung performanya, tablet yang memiliki bobot 507g ini juga dilengkapi dengan kapasitas baterai sebesar 8360mAh d', '629f1d5c7ca7f.jpg'),
(70, '682037529073486', 3, 'Tab VX', 'Advan Tab VX adalah tablet canggih yang memiliki RAM 8 GB dan memori internal 128 GB yang bisa diperluas dengan memori eksternal hingga 1 TB. Mempunyai kamera utama 8MP dan kamera depan 5 MP membuat hasil jepretan foto lebih jernih. Tak kalah menarik tabl', '629f1df2a98fd.jpeg'),
(71, '947520647704640', 7, 'T20 ', 'Nokia T20 adalah tablet dengan layar IPS LCD 10.4&quot; dan resolusi 1200 x 2000pixels. Hadir dengan bobot 465 gg, tablet ini dilengkapi dengan kapasitas baterai 8200mAh dan resolusi kamera belakang 8MP. Untuk mendukung performanya, tablet Nokia ini juga ', '629f208eeb4fd.jpg'),
(72, ' 50010200345079', 5, 'Smart Tab M10 FHD Plus', 'Lenovo Smart Tab M10 FHD Plus adalah tablet dengan layar IPS beresolusi 1920 x 1080pixels. Hadir dengan CPU Mediatek MT6762 Helio P22T (12 nm) untuk mendukung performanya, tablet yang memiliki bobot 460g ini juga dilengkapi dengan kapasitas baterai sebesa', '629f210e6ea33.jpg'),
(73, '520077832901446', 6, 'Iconia B1-710', 'Acer Iconia Tab B1-710 merupakan tablet dengan ukuran ketebalan 339.9g, 12.7mm thickness dan ukuran layar 7.0&quot; yang dilengkapi dengan kamera 0.3MP Video recorder dan memiliki memory sebesar 1MB RAM, Handphone ini juga menggunakan Sistem Operasi Andro', '629f32d6650cf.jpg'),
(74, '875927556560411', 9, 'Pad', 'Vivo Pad mengandalkan chipset Snapdragon 870, yang dikombinasikan dengan RAM 8 GB dan dua opsi media penyimpanan 128 GB/256 GB. Baterai dari tablet Vivo Pad ini memiliki kapasitas yang cukup besar, yaitu 8.040 mAh dengan dukungan pengisian cepat berdaya 4', '62a06a98028da.jpg'),
(75, '395009468991002', 8, 'Mi Pad 5 Pro', 'Xiaomi Mi Pad 5 Pro adalah tablet dengan layar IPS LCD beresolusi 1600 x 2560pixels. Hadir dengan CPU Qualcomm SM8250-AC Snapdragon 870 5G (7 nm) untuk mendukung performanya, tablet yang memiliki bobot 515g ini juga dilengkapi dengan kapasitas baterai seb', '62a06b87e37d9.jpg'),
(76, '000405934721108', 10, 'Zenpad 8.0', ' ASUS ZenPad 8.0 (Z380KL) adalah tablet dengan layar IPS beresolusi 800 x 1280pixels. Hadir dengan CPU Qualcomm MSM8916 Snapdragon 410 (28 nm) untuk mendukung performanya, tablet yang memiliki bobot 350g ini juga dilengkapi dengan kapasitas baterai sebesa', '62a06c8db3add.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'putri', '$2y$10$YDA/iJmFoqjxoNfcPWwmxe8vyEJtIlf9lp1U5YWaY/xtGtSiCzlau'),
(2, 'aaynospe', '$2y$10$vcomM6sFCd0mwO3E.y.HseD1zZAV6rE7HrHH3gh3Z7WHdUAltBE1e'),
(3, 'aa', '$2y$10$xQTh6.yfZrriT/9fQl25fOTyCt2nMTSe/3sT9PTBwjzhbPyvjNZqS'),
(6, 'yuni', '$2y$10$mJkS.VtoVJ5g08uLxlWTYu8s8IUewNDD2Nr0oRy6LXozMm1yn9iCG'),
(7, 'admin', '$2y$10$wv4Yk6OaUT/dE9BftNdRteNbusl7ro6Mhp25P2B1dX9KGI9tnNijK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `merek`
--
ALTER TABLE `merek`
  ADD PRIMARY KEY (`id_merek`);

--
-- Indexes for table `tablet`
--
ALTER TABLE `tablet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `merek_2` (`merek`),
  ADD KEY `merek` (`merek`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `merek`
--
ALTER TABLE `merek`
  MODIFY `id_merek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tablet`
--
ALTER TABLE `tablet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tablet`
--
ALTER TABLE `tablet`
  ADD CONSTRAINT `merek` FOREIGN KEY (`merek`) REFERENCES `merek` (`id_merek`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
