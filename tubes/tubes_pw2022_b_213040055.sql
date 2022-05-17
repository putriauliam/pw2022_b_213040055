-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2022 at 09:30 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

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
-- Table structure for table `tablet`
--

CREATE TABLE `tablet` (
  `id` int(11) NOT NULL,
  `kode` char(15) NOT NULL,
  `merek` varchar(100) NOT NULL,
  `tipe` varchar(200) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tablet`
--

INSERT INTO `tablet` (`id`, `kode`, `merek`, `tipe`, `harga`, `gambar`) VALUES
(1, '355861534030196', 'Samsung', 'Galaxy Tab S6 Lite', '6.549.000', 'samsung.jpg'),
(2, '395009468991003', 'Xiaomi', 'Mi Pad 5 Pro', '5.999.000', 'xiaomi.jpg'),
(3, '116702003459877', 'Huawei', 'Matepad 11', '7.035.000', 'huawei.jpg'),
(4, '500102003450799', 'Lenovo', 'Smart Tab M10 FHD Plus', '4.800.000', 'lenovo.jpg'),
(5, '000405934721108', 'Asus', 'Zenpad 8.0', '3.299.000', 'asus.jpg'),
(6, '520077832901446', 'Acer', 'Iconia B1-710', '1.750.000', 'acer.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tablet`
--
ALTER TABLE `tablet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tablet`
--
ALTER TABLE `tablet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
