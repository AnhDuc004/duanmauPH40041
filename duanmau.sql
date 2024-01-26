-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2024 at 01:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demoduanmau`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `ngaybinhluan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(3, 'nice', 8, 19, '03:48:59pm 21/10/2023'),
(4, '<3', 8, 19, '03:49:12pm 21/10/2023'),
(5, '.....', 8, 19, '03:49:18pm 21/10/2023'),
(7, 'very nice', 8, 19, '03:52:15pm 21/10/2023'),
(8, '111', 8, 19, '03:53:44pm 21/10/2023'),
(9, '2222', 8, 19, '03:53:47pm 21/10/2023'),
(12, 'Very Good', 4, 22, '05:46:33pm 21/10/2023'),
(14, '123', 4, 22, '07:15:20am 22/10/2023'),
(15, 'sdasd', 4, 23, '01:12:59pm 26/01/2024');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(8, 'Điện Thoại'),
(9, 'Máy Tính'),
(12, 'Đồng Hồ');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` double(10,2) DEFAULT 0.00,
  `img` varchar(250) DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `desc`, `view`, `iddm`) VALUES
(9, 'Asus', 18000000.00, '1006.jpg', '123', 7, 9),
(12, 'A12', 124444.00, '1044.jpg', '', 13, 9),
(14, 'b12', 124444.00, '1001.jpg', '', 8, 12),
(15, 'c12', 18000000.00, '1002.jpg', '', 3, 12),
(16, 'bbb', 18000000.00, '1004.jpg', '', 12, 9),
(17, 'nokia', 12000.00, '1032.jpg', '', 40, 8),
(18, 'cc', 18000000.00, '1012.jpg', '', 4, 8),
(19, 'bb', 4000000.00, '1033.png', '', 30, 8),
(20, 'A123', 22222222.00, '1069.jpg', '', 9, 8),
(22, 'Asus VivoBook', 18000000.00, '1006.jpg', 'P/N:  \r\nX415EA-EK1387W\r\nThương hiệu:  \r\nAsus\r\nXuất xứ:  \r\nTrung Quốc\r\nThời điểm ra mắt:  \r\n2022\r\nThời gian bảo hành (tháng):  \r\n24\r\nHướng dẫn bảo quản:  \r\nĐể nơi khô ráo, nhẹ tay, dễ vỡ.\r\nHướng dẫn sử dụng:  \r\nXem trong sách hướng dẫn sử dụng\r\nNhà cung cấp:  \r\nCông ty TNHH Phân phối SYNNEX FPT', 0, 9),
(23, 'Veru', 12000.00, '1039.jpg', 'Luxury', 0, 12),
(24, '1035B', 18000000.00, '1035.jpg', '', 0, 12);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `role` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(4, 'admin', '12345', 'anhtdph40041@fpt.edu.vn', '', '', 1),
(8, 'duc anh', '123', 'ducanh29304@gmail.com', '', '', 0),
(9, 'phuong04', '123456', 'phuongctlph40011@fpt.edu.vn', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_binhluan_sanpham` (`idpro`),
  ADD KEY `lk_binhluan_taikhoan` (`iduser`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `lk_binhluan_sanpham` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `lk_binhluan_taikhoan` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
