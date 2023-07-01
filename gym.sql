-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2023 at 04:53 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `dangkygoitap`
--

CREATE TABLE `dangkygoitap` (
  `id` bigint(20) NOT NULL,
  `idhoivien` bigint(20) NOT NULL,
  `idgoitap` bigint(20) NOT NULL,
  `ngaybatdau` date NOT NULL,
  `trangthai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dangkygoitap`
--

INSERT INTO `dangkygoitap` (`id`, `idhoivien`, `idgoitap`, `ngaybatdau`, `trangthai`) VALUES
(16, 1, 1, '2023-08-01', 'Đã xác nhận'),
(17, 1, 2, '2023-12-05', 'Đã xác nhận'),
(19, 1, 6, '2024-01-01', 'Đã xác nhận');

-- --------------------------------------------------------

--
-- Table structure for table `goitap`
--

CREATE TABLE `goitap` (
  `id` bigint(20) NOT NULL,
  `tengoitap` varchar(50) NOT NULL,
  `thoigian` int(11) NOT NULL,
  `donvi` varchar(20) NOT NULL,
  `gia` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `goitap`
--

INSERT INTO `goitap` (`id`, `tengoitap`, `thoigian`, `donvi`, `gia`) VALUES
(1, 'Gói Fitness 3 tháng', 3, 'tháng', 800000),
(2, 'Gói Yoga 1 tháng', 1, 'tháng', 300000),
(3, 'Gói Fitness theo buổi', 20, 'buổi', 260000),
(4, 'Gói Yoga theo buổi', 20, 'buổi', 270000),
(6, 'Gói Boxing 1 tháng', 3, 'tháng', 300000);

-- --------------------------------------------------------

--
-- Table structure for table `hoivien`
--

CREATE TABLE `hoivien` (
  `id` bigint(20) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `ngaysinh` date NOT NULL,
  `sdt` varchar(20) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `nghenghiep` varchar(20) NOT NULL,
  `mavantay` varchar(20) NOT NULL,
  `loaithanhvien` varchar(20) NOT NULL,
  `matkhau` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hoivien`
--

INSERT INTO `hoivien` (`id`, `hoten`, `ngaysinh`, `sdt`, `diachi`, `nghenghiep`, `mavantay`, `loaithanhvien`, `matkhau`) VALUES
(1, 'Nguyễn Thị Khách B', '2001-01-01', '0111111111', 'Hoàng Mai, Hà Nội', 'Sinh viên', '', '', 'khach01'),
(5, 'Trần Văn Khách A', '1999-01-01', '0111111112', 'Hai Bà Trưng, Hà Nội', 'Sinh viên', '', '', 'khach02');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id` bigint(20) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `sdt` varchar(20) NOT NULL,
  `vitri` varchar(20) NOT NULL,
  `matkhau` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `ten`, `diachi`, `sdt`, `vitri`, `matkhau`) VALUES
(5, 'Trần Trọng Hoàng', 'Thanh Xuân, Hà Nội', '0986523147', 'Nhân viên hỗ trợ', 'nhanvien'),
(7, 'Trần Thị Hà', 'Hoàng Mai, Hà Nội', '0147852369', 'Nhân viên marketing', ''),
(11, 'Lê Thị Hạnh', 'Thanh Xuân, Hà Nội', '0986137178', 'Nhân viên thu ngân', 'nhanvien'),
(13, 'Kiều Phương Thảo', 'Đống Đa, Hà Nội', '0969068711', 'Nhân viên thu ngân', '');

-- --------------------------------------------------------

--
-- Table structure for table `phanhoi`
--

CREATE TABLE `phanhoi` (
  `id` bigint(20) NOT NULL,
  `idhoivien` bigint(20) NOT NULL,
  `noidung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phanhoi`
--

INSERT INTO `phanhoi` (`id`, `idhoivien`, `noidung`) VALUES
(1, 1, 'Máy móc rất oke :))) nhân viên nhiệt tình');

-- --------------------------------------------------------

--
-- Table structure for table `phongtap`
--

CREATE TABLE `phongtap` (
  `id` bigint(20) NOT NULL,
  `maphong` varchar(20) NOT NULL,
  `tenphong` varchar(20) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phongtap`
--

INSERT INTO `phongtap` (`id`, `maphong`, `tenphong`, `soluong`) VALUES
(5, 'MP001', 'Fitness', 3),
(6, 'MP002', 'Yoga', 2),
(7, 'MP003', 'Boxing', 1);

-- --------------------------------------------------------

--
-- Table structure for table `trangthietbi`
--

CREATE TABLE `trangthietbi` (
  `id` bigint(20) NOT NULL,
  `maso` varchar(50) NOT NULL,
  `tenthietbi` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `ngaynhapve` date NOT NULL,
  `ngaybaohanh` date NOT NULL,
  `xuatsu` varchar(20) NOT NULL,
  `tinhtrang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trangthietbi`
--

INSERT INTO `trangthietbi` (`id`, `maso`, `tenthietbi`, `soluong`, `ngaynhapve`, `ngaybaohanh`, `xuatsu`, `tinhtrang`) VALUES
(1, 'TB001', 'Máy chạy bộ', 3, '2023-01-01', '2024-01-01', 'Mỹ', 'Hoạt động bình thường');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dangkygoitap`
--
ALTER TABLE `dangkygoitap`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idgoitap` (`idgoitap`),
  ADD KEY `idhoivien` (`idhoivien`);

--
-- Indexes for table `goitap`
--
ALTER TABLE `goitap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hoivien`
--
ALTER TABLE `hoivien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idhoivien` (`idhoivien`);

--
-- Indexes for table `phongtap`
--
ALTER TABLE `phongtap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trangthietbi`
--
ALTER TABLE `trangthietbi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dangkygoitap`
--
ALTER TABLE `dangkygoitap`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `goitap`
--
ALTER TABLE `goitap`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hoivien`
--
ALTER TABLE `hoivien`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `phanhoi`
--
ALTER TABLE `phanhoi`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `phongtap`
--
ALTER TABLE `phongtap`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `trangthietbi`
--
ALTER TABLE `trangthietbi`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dangkygoitap`
--
ALTER TABLE `dangkygoitap`
  ADD CONSTRAINT `dangkygoitap_ibfk_2` FOREIGN KEY (`idgoitap`) REFERENCES `goitap` (`id`),
  ADD CONSTRAINT `dangkygoitap_ibfk_3` FOREIGN KEY (`idhoivien`) REFERENCES `hoivien` (`id`);

--
-- Constraints for table `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD CONSTRAINT `phanhoi_ibfk_1` FOREIGN KEY (`idhoivien`) REFERENCES `hoivien` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
