-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2017 at 01:42 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `chitietlk`
--

CREATE TABLE `chitietlk` (
  `id_lk` int(11) NOT NULL,
  `tenlk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gia` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `mota` longtext COLLATE utf8_unicode_ci NOT NULL,
  `id_loailk` int(100) NOT NULL,
  `thutu` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitietlk`
--

INSERT INTO `chitietlk` (`id_lk`, `tenlk`, `hinhanh`, `gia`, `mota`, `id_loailk`, `thutu`) VALUES
(2, 'Bia Heineken', 'biaheineken.PNG', '25000', '', 12, 0),
(3, 'Bia Sài Gòn', 'biasaigon.PNG', '15000', '', 12, 0),
(4, 'Bia StrongBow', 'biastrongbow.jpg', '20000', '', 12, 0),
(5, 'Bia StrongBow Lon', 'strongbowlon.jpg', '20000', '', 12, 0),
(6, 'Nước Suối', 'nuocsuoi.PNG', '5000', '', 9, 0),
(7, 'Pessi', 'pessi.PNG', '10000', '', 10, 0),
(8, 'Nước Tăng Lực Lon', 'nuoctangluc.PNG', '15000', '', 10, 0),
(9, 'Nước Tropicanat Wister', 'tropicana_twister.PNG', '10000', '', 10, 0),
(10, 'Rượu Champagne', 'ruouchampagne.jpg', '300000', '', 11, 0),
(11, 'Rượu Chuối Hột', 'ruouchuoihot.jpg', '50000', '', 11, 0),
(12, 'Rượu Nếp', 'ruounep.jpg', '60000', '', 11, 0),
(13, 'Rượu Trái Cây', 'ruoutraicay.jpg', '25000', '', 11, 0),
(14, 'Rượu Vang Đỏ', 'ruouvangdo.jpg', '250000', '', 11, 0),
(15, 'Rượu Vodka', 'Ruou-Vodka.jpg', '250000', '', 11, 0),
(16, 'Nước Suối Aquafina', 'Aquafina.png', '7000', '', 9, 0),
(17, 'Nước Suối Dasani', 'Dasani.jpg', '7000', '', 9, 0),
(18, 'Nước Suối Lavie', 'Lavie.jpg', '7000', '', 9, 0);

-- --------------------------------------------------------

--
-- Table structure for table `chitietsp`
--

CREATE TABLE `chitietsp` (
  `id_sp` int(11) NOT NULL,
  `tensp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gia` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `mota` longtext COLLATE utf8_unicode_ci NOT NULL,
  `id_loaisp` int(100) NOT NULL,
  `thutu` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitietsp`
--

INSERT INTO `chitietsp` (`id_sp`, `tensp`, `hinhanh`, `gia`, `mota`, `id_loaisp`, `thutu`) VALUES
(36, 'Suất Gà Kèm Xôi', 'gakemxoi.PNG', '98000', '', 15, 0),
(37, 'Suất Gà Kèm Cơm Trắng', 'gakemcomtrang.PNG', '98000', '', 15, 0),
(38, 'Suất Gà Kèm Miến', 'gakemmien.PNG', '98000', '', 15, 0),
(39, 'Suất Gà Kèm Cháo', 'gakemchao.PNG', '98000', '', 15, 0),
(40, 'Suất Lẩu Gà Dân Tộc', 'lauga.PNG', '98000', '', 15, 0),
(41, 'Gà Hấp Nồi Đất', 'gahapnoidat.PNG', '235000', '', 14, 0),
(42, 'Gà Rang Muối', 'garangmuoi.PNG', '255000', '', 14, 0),
(43, 'Gà Quay Nguyên Con', 'gaquaynguyencon.PNG', '235000', '', 14, 0),
(44, 'Gà Nướng Nguyên Con', 'ganuongnguyencon.PNG', '235000', '', 14, 0),
(45, 'Gà Om Nấm Niêu Đất', 'gaomnamnieudat.PNG', '255000', '', 14, 0),
(46, 'Gà Hấp Lá Chanh', 'gahaplachanh.PNG', '235000', '', 14, 0),
(47, 'Gà Hấp Gừng', 'gahapgung.PNG', '235000', '', 14, 0),
(48, 'Gà Hầm Thuốc Bắc', 'gahamthuocbac.PNG', '250000', '', 14, 0),
(49, 'Lẩu Gà Rêu Cua-3 Người', 'laugarieucua_set3n(nho).PNG', '350000', '', 16, 0),
(50, 'Lẩu Gà Rêu Cua-6 Người', 'laugarieucua_set6n(to).PNG', '585000', '', 16, 0),
(51, 'Lẩu Gà Ngũ Vị', 'launguvi.PNG', '275000', '', 16, 0),
(52, 'Lẩu Gà Trứng Lộn', 'laugadantoctrunglon.PNG', '280000', '', 16, 0),
(53, 'Lẩu Gà Chua Cay', 'laugachuacay.PNG', '298000', '', 16, 0),
(54, 'Gà Xào Nấm', 'laugaxaonam.PNG', '100000', '', 17, 0),
(55, 'Cánh Gà Chiên', 'canhgachien.PNG', '15000', '', 17, 0),
(56, 'Đùi Gà Hấp', 'duigahap.PNG', '85000', '', 17, 0),
(57, 'Xôi Hấp Nước Cốt Dừa', 'xoihapnuoccotdua.PNG', '25000', '', 18, 0),
(58, 'Khoai Tây Chiên', 'khoaitaychien.PNG', '25000', '', 18, 0),
(59, 'Bắp Chiên', 'bapchien.PNG', '35000', '', 18, 0),
(60, 'Súp Gà Ngô Non', 'supgabapnon.PNG', '15000', '', 18, 0),
(61, 'Cháo Gà', 'chaoga.PNG', '25000', '', 18, 0),
(62, 'Miến Nấu Lòng Gà', 'miennaulongga.PNG', '25000', '', 18, 0),
(63, 'Miến Xào Lòng Mề', 'miengxaolongme.PNG', '40000', '', 18, 0),
(64, 'Salat Cà Chua Dưa Leo', 'salatcachuaduachuot.PNG', '20000', '', 19, 0),
(65, 'Trứng Cải Luộc', 'trungcailuoc.PNG', '25000', '', 19, 0),
(66, 'Bông Thiên Lý Xào Mề', 'bongthienlyxaomega.PNG', '35000', '', 19, 0),
(67, 'Trái Cây Theo Mùa', 'Hoaquatuoitheomua.PNG', '35000', '', 20, 0),
(68, 'Kem Hàn Quốc', 'kemhanquoc.png', '7000', '', 20, 0),
(69, 'Kem Merino', 'kemmerino.PNG', '15000', '', 20, 0),
(70, 'Kem Trái Cây', 'kemtraicay.jpg', '15000', '', 20, 0),
(71, 'Yaourt Đá', 'yaourtda.jpg', '10000', '', 20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gopy`
--

CREATE TABLE `gopy` (
  `id_gopy` int(11) NOT NULL,
  `hoten` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cty` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dienthoai` int(12) NOT NULL,
  `fax` int(12) NOT NULL,
  `diachi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gopy`
--

INSERT INTO `gopy` (`id_gopy`, `hoten`, `cty`, `email`, `dienthoai`, `fax`, `diachi`, `noidung`) VALUES
(1, 'Nguyá»…n ThÃ¡i Ngá»c', 'dÄ‘', 'walleken23@gmail.com', 0, 0, '123Q', 'dfzsefzsdfd fdsgzfdg');

-- --------------------------------------------------------

--
-- Table structure for table `loailk`
--

CREATE TABLE `loailk` (
  `id_loailk` int(11) NOT NULL,
  `tenloailk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thutu` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loailk`
--

INSERT INTO `loailk` (`id_loailk`, `tenloailk`, `thutu`) VALUES
(9, 'Nước suối', 0),
(10, 'Nước ngọt', 1),
(11, 'Rượu', 2),
(12, 'Bia', 3);

-- --------------------------------------------------------

--
-- Table structure for table `loaisp`
--

CREATE TABLE `loaisp` (
  `id_loaisp` int(11) NOT NULL,
  `tenloaisp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thutu` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaisp`
--

INSERT INTO `loaisp` (`id_loaisp`, `tenloaisp`, `thutu`) VALUES
(14, 'Món tùy chọn', 1),
(15, 'Suất trọn gói', 0),
(16, 'Món lẩu', 2),
(17, 'Các món gà khác', 3),
(18, 'Món ăn kèm', 4),
(19, 'Món rau', 5),
(20, 'Món tráng miệng', 6);

-- --------------------------------------------------------

--
-- Table structure for table `thongtinkh`
--

CREATE TABLE `thongtinkh` (
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` text COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thongtinkh`
--

INSERT INTO `thongtinkh` (`username`, `phone`, `diachi`, `email`) VALUES
('ghsgdf', '0009999999', 'Ngã Năm-Sóc Trăng', 'hoaikhang295@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `chitietlk`
--
ALTER TABLE `chitietlk`
  ADD PRIMARY KEY (`id_lk`);

--
-- Indexes for table `chitietsp`
--
ALTER TABLE `chitietsp`
  ADD PRIMARY KEY (`id_sp`);

--
-- Indexes for table `gopy`
--
ALTER TABLE `gopy`
  ADD PRIMARY KEY (`id_gopy`);

--
-- Indexes for table `loailk`
--
ALTER TABLE `loailk`
  ADD PRIMARY KEY (`id_loailk`);

--
-- Indexes for table `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`id_loaisp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `chitietlk`
--
ALTER TABLE `chitietlk`
  MODIFY `id_lk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `chitietsp`
--
ALTER TABLE `chitietsp`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `gopy`
--
ALTER TABLE `gopy`
  MODIFY `id_gopy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `loailk`
--
ALTER TABLE `loailk`
  MODIFY `id_loailk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `id_loaisp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
