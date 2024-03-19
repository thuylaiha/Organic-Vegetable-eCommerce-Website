-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2023 at 12:57 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ace_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `nameadmin` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nameadmin`, `username`, `password`, `admin_status`) VALUES
(1, 'Ha Le Thuy Lai', 'thuylaiha', '25f9e794323b453885f5181f1b624d0b', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart_details`
--

CREATE TABLE `tbl_cart_details` (
  `id_cart_details` int(11) NOT NULL,
  `code_cart` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_sp` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_cart_details`
--

INSERT INTO `tbl_cart_details` (`id_cart_details`, `code_cart`, `id_sp`, `soluongmua`) VALUES
(1, '2366', 1, 1),
(2, '7877', 2, 1),
(3, '8851', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart_registered`
--

CREATE TABLE `tbl_cart_registered` (
  `id_cart_registered` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart_status` int(11) NOT NULL,
  `cart_date` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_cart_registered`
--

INSERT INTO `tbl_cart_registered` (`id_cart_registered`, `id_khachhang`, `code_cart`, `cart_status`, `cart_date`) VALUES
(7, 4, '2366', 0, ''),
(9, 4, '7877', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_khachhang` int(11) NOT NULL,
  `tenkhachhang` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dienthoai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_khachhang`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(3, 'Lai Ha', 'thuylai@gmail.com', 'Vinh Long', 'e10adc3949ba59abbe56e057f20f883e', '0776584248'),
(4, 'thuylaiha', 'thuylaiha231002@gmail.com', 'Vinh Long', 'e10adc3949ba59abbe56e057f20f883e', '08456789');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thutu` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(1, 'Rau củ', 1),
(2, 'Quả', 2),
(3, 'Nấm', 3),
(4, 'Thực phẩm khác', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sp` int(11) NOT NULL,
  `tensp` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giasp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia_sale` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sp`, `tensp`, `masp`, `giasp`, `gia_sale`, `hinhanh`, `mota`, `tinhtrang`, `id_danhmuc`) VALUES
(1, 'Bầu xanh', 'rau1', '15000', '13000', 'bau.jpg', 'Ngon', 1, 1),
(2, 'Bông cải', 'rau2', '50000', '49000', 'bongcai.jpg', 'Ngon', 1, 1),
(3, 'Cà rốt', 'cu1', '20000', '19000', 'carot.jpg', 'Ngon', 1, 1),
(4, 'Cà tím', 'cu2', '10000', '8000', 'catim.jpg', '', 1, 1),
(5, 'Chôm chôm', 'qua1', '20000', '15000', 'chomchom.jpg', 'Đặc sản Vĩnh Long', 1, 2),
(7, 'Đậu bắp', 'cu3', '10000', '0', 'daubap.jpg', 'Ngon', 1, 1),
(8, 'Kim châm', 'mac06', '25000', '23000', 'kimcham.jpg', 'Ngon', 1, 3),
(9, 'Gừng', 'raucu8', '50000', '46000', 'Ginger.jpg', 'ngon', 1, 1),
(10, 'Muối tôm', 'tp1', '9000', '8000', 'muoitom.jpg', 'Ngon', 1, 4),
(11, 'Mận chuông', 'qua4', '15000', '14000', 'roi.jpg', 'Ngon', 1, 2),
(12, 'Linh chi', 'nam2', '43000', '40000', 'linhchi.jpg', 'Ngon', 1, 3),
(19, 'Nhãn', 'qua5', '30000', '25000', 'nhan.jpg', 'Ngon', 1, 2),
(20, 'Thanh long', 'qua6', '17000', '15000', 'thanhlong.jpg', 'Ngon', 15, 2),
(23, 'Rau cần tây', 'rau7', '20000', '19000', 'raucantay.jpg', 'Ngon', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD PRIMARY KEY (`id_cart_details`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Indexes for table `tbl_cart_registered`
--
ALTER TABLE `tbl_cart_registered`
  ADD PRIMARY KEY (`id_cart_registered`),
  ADD KEY `id_khachhang` (`id_khachhang`);

--
-- Indexes for table `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_khachhang`);

--
-- Indexes for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Indexes for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  MODIFY `id_cart_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_cart_registered`
--
ALTER TABLE `tbl_cart_registered`
  MODIFY `id_cart_registered` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_khachhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD CONSTRAINT `tbl_cart_details_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `tbl_sanpham` (`id_sp`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_cart_registered`
--
ALTER TABLE `tbl_cart_registered`
  ADD CONSTRAINT `tbl_cart_registered_ibfk_1` FOREIGN KEY (`id_khachhang`) REFERENCES `tbl_dangky` (`id_khachhang`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `tbl_sanpham_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `tbl_danhmuc` (`id_danhmuc`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
