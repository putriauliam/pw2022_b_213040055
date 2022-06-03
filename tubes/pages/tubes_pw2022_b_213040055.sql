-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2022 at 02:12 PM
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
-- Table structure for table `tablet`
--

CREATE TABLE `tablet` (
  `id` int(11) NOT NULL,
  `kode` char(15) NOT NULL,
  `merek` varchar(100) NOT NULL,
  `tipe` varchar(200) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tablet`
--

INSERT INTO `tablet` (`id`, `kode`, `merek`, `tipe`, `deskripsi`, `gambar`) VALUES
(1, '355861534030196', 'Samsung', 'Galaxy Tab S6 Lite', ' Samsung Galaxy Tab S6 Lite adalah tablet dengan layar TFT beresolusi 1200 x 2000pixels. Hadir dengan CPU Exynos 9611 (10nm) untuk mendukung performanya, tablet yang memiliki bobot 467g ini juga dilengkapi dengan kapasitas baterai sebesar 7040mAh.   ', 'samsung.jpg'),
(2, '395009468991003', 'Xiaomi', 'Mi Pad 5 Pro', 'Xiaomi Pad 5 Pro hadir dengan spesifikasi RAM berkapasitas 6/8 GB, chipset Snapdragon 870 5G dengan prosesor Octa-core (1×3.2 GHz Kryo 585 &amp; 3×2.42 GHz Kryo 585 &amp; 4×1.80 GHz Kryo 585), GPU Adreno 650 dan kamera utama beresolusi 50 MP. ', 'xiaomi.jpg'),
(3, '116702003459877', 'Huawei', 'Matepad 11', 'Huawei MatePad 11 mendukung gamut warna DCI-P3 sehingga gambar dan video akan terlihat sangat hidup. MatePad 11 menjadi tablet pertama yang mendukung kecepatan refresh rate 120 Hz.\r\n\r\n', 'huawei.jpg'),
(4, '500102003450799', 'Lenovo', 'Smart Tab M10 FHD Plus', 'Lenovo Smart Tab M10 FHD Plus adalah produk yang mengusung layar 10.3 inch beresolusi 1200 x 1920 px. Perangkat ini menawarkan kamera 8 MP (Single Lensa), memori 32/64/128 GB, 2/4 GB RAM, dan baterai berkapasitas 5100 mAh.', 'lenovo.jpg'),
(5, '000405934721108', 'Asus', 'Zenpad 8.0', ' ASUS ZenPad 8.0 (Z380KL) adalah tablet dengan layar IPS beresolusi 800 x 1280pixels. Hadir dengan CPU Qualcomm MSM8916 Snapdragon 410 (28 nm) untuk mendukung performanya, tablet yang memiliki bobot 350g ini juga dilengkapi dengan kapasitas baterai sebesa', 'asus.jpg'),
(6, '520077832901446', 'Acer', 'Iconia B1-710', '  Acer Iconia Tab B1-710 32GB adalah Tablet yang memiliki ukuran layar 7 inci dengan layar sentuh kapasitif TFT dengan keunggulan fitur berupa Active Matrix dan LED Backlight yang menyajikan resolusi layar 1024 x 600 piksel.  ', 'acer.jpg'),
(7, '300054676389421', 'Oppo', 'Pad', ' Oppo Pad mengusung layar IPS LCD dengan refresh rate 120Hz. Ukuran layarnya mencapai 11 inci dengan resolusi 2560 x 1600 pixel dan 275 ppi kerapatan piksel. Rasio layarnya juga mencapai 86,3% dengan bezel yang cukup tipis. ', 'oppo.png'),
(8, '682037529073486', 'Advan', 'Tab VX', ' Advan Tab VX adalah tablet canggih yang memiliki RAM 8 GB dan memori internal 128 GB yang bisa diperluas dengan memori eksternal hingga 1 TB. Mempunyai kamera utama 8MP dan kamera depan 5 MP. ', 'advan.jpg'),
(9, '947520647704640', 'Nokia', 'T20 WiFi', ' Nokia T20 adalah tablet dengan layar IPS LCD beresolusi 1200 x 2000pixels. Hadir dengan CPU Octa-Core untuk mendukung performanya, tablet yang memiliki bobot 465 gg ini juga dilengkapi dengan kapasitas baterai sebesar 8200mAh dan resolusi kamera belakang', 'nokia.jpg'),
(10, '875927556560411', 'Vivo', 'Pad', '  Layar tablet terbaru Vivo ini mengadopsi panel IPS LCD berukuran 11 inci dengan resolusi QHD Plus dan refresh rate 120 Hz. Di bagian atasnya, terdapat kamera selfie beresolusi 8 MP yang dilengkapi dengan sensor ToF (Time-of-Flight).', 'vivo.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
