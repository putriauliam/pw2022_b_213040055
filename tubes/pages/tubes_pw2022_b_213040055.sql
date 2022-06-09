-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 09:14 AM
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
(53, '116702003459877', 2, 'Matepad 11', 'Huawei MatePad 11 mendukung gamut warna DCI-P3', 'huawei.jpg'),
(69, '300054676389421', 1, 'Pad', 'Oppo Pad mengusung layar IPS LCD dengan refresh rate 120Hz.', '629f1d5c7ca7f.jpg'),
(70, '682037529073486', 3, 'Tab VX', 'Memiliki RAM 8 GB dan memori internal 128 GB.', '629f1df2a98fd.jpeg'),
(71, '947520647704640', 7, 'T20 WiFi', 'Tablet dengan layar IPS LCD beresolusi 1200 x 2000pixels.', '629f208eeb4fd.jpg'),
(72, ' 50010200345079', 5, 'Smart Tab M10 FHD Plus', 'Tablet dengan layar IPS LCD beresolusi 1200 x 2000pixels.', '629f210e6ea33.jpg'),
(73, '520077832901446', 6, 'Iconia B1-710', 'Acer Iconia Tab B1-710 32GB adalah Tablet yang memiliki ukuran layar 7 inci.', '629f32d6650cf.jpg'),
(74, '875927556560411', 9, 'Pad', 'Layar tablet terbaru Vivo ini mengadopsi panel IPS LCD berukuran 11 inci.', '62a06a98028da.jpg'),
(75, '395009468991002', 8, 'Mi Pad 5 Pro', 'RAM berkapasitas 6/8 GB, dengan prosesor Octa-core', '62a06b87e37d9.jpg'),
(76, '000405934721108', 10, 'Zenpad 8.0', 'ASUS ZenPad 8.0 (Z380KL) adalah tablet dengan layar IPS beresolusi 800 x 1280pixels.', '62a06c8db3add.jpg');

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
(6, 'yuni', '$2y$10$mJkS.VtoVJ5g08uLxlWTYu8s8IUewNDD2Nr0oRy6LXozMm1yn9iCG');

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
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
