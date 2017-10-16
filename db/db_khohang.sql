-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2017 at 06:55 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_khohang`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdathang`
--

CREATE TABLE `chitietdathang` (
  `sohoadon` int(11) NOT NULL,
  `mahang` int(11) NOT NULL,
  `giaban` int(11) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `mucgiamgia` float DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dondathang`
--

CREATE TABLE `dondathang` (
  `sohoadon` int(11) NOT NULL,
  `makhachhang` int(11) NOT NULL,
  `maxe` int(11) NOT NULL,
  `manhanvien` int(11) NOT NULL,
  `ngaydathang` date DEFAULT NULL,
  `ngaygiaohang` date DEFAULT NULL,
  `noigiaohang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grouppermission`
--

CREATE TABLE `grouppermission` (
  `id` int(11) NOT NULL,
  `permissionID` int(11) NOT NULL,
  `groupID` int(11) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hangxe`
--

CREATE TABLE `hangxe` (
  `id` int(11) NOT NULL,
  `tenhang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hangxe`
--

INSERT INTO `hangxe` (`id`, `tenhang`, `anh`, `mota`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Honda', 'Honda', 'Honda', 1, 1507999325, 1507999325),
(2, 'Yamaha', 'Yamaha', 'Yamaha', 1, 1507999346, 1507999346);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `makhachhang` int(11) NOT NULL,
  `tenkhachhang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `manhanvien` int(11) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loaihang`
--

CREATE TABLE `loaihang` (
  `id_LH` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parentID` int(11) DEFAULT '0',
  `hangxeID` int(11) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaihang`
--

INSERT INTO `loaihang` (`id_LH`, `name`, `anh`, `parentID`, `hangxeID`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Lốp xe', '', 0, 1, 1, 1508001393, 1508001393),
(2, 'Ắc quy', '', 0, 2, 1, 1508002416, 1508002637),
(3, 'Bi', '', 0, 1, 1, 1508002487, 1508002487),
(4, 'Lốp xe SH', '', 1, 1, 1, 1508058172, 1508058172);

-- --------------------------------------------------------

--
-- Table structure for table `mathang`
--

CREATE TABLE `mathang` (
  `mahang` int(11) NOT NULL,
  `tenhang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `macongty` int(11) NOT NULL,
  `maloaihang` int(11) NOT NULL,
  `soluong` int(11) DEFAULT NULL,
  `mota` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `giahang` int(11) DEFAULT NULL,
  `donvitinh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `manhanvien` int(11) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1507970650),
('m130524_201442_init', 1507971763),
('m171014_084901_user_group', 1507971476),
('m171014_085015_user_permistion', 1507994496),
('m171014_093522_loaihang', 1507998783),
('m171014_093833_khachhang', 1507975288),
('m171014_093901_mathang', 1507975289),
('m171014_093918_nhacungcap', 1507975289),
('m171014_093946_dondathang', 1508152161),
('m171014_093959_chitietdathang', 1507975290),
('m171014_151728_groupPermission', 1507994496),
('m171014_151950_Permission', 1507994497),
('m171014_162954_hangxe', 1507998784),
('m171016_110426_tbl_xe', 1508152161),
('m171016_160823_tbl_donvitinh', 1508170205);

-- --------------------------------------------------------

--
-- Table structure for table `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `macongty` int(11) NOT NULL,
  `tencogty` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tenviethoadon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `manhanvien` int(11) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhacungcap`
--

INSERT INTO `nhacungcap` (`macongty`, `tencogty`, `tenviethoadon`, `diachi`, `dienthoai`, `fax`, `email`, `manhanvien`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Công ty Nhật Cường', '', '123 phố Huế', '09887788', '', '', 2, 1, 1508153908, 1508164493),
(2, 'Công ty Thành Nam', '', '111 HBT', '', '', '', 2, 1, 1508153938, 1508153938);

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donvitinh`
--

CREATE TABLE `tbl_donvitinh` (
  `id` int(11) NOT NULL,
  `tendvt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_xe`
--

CREATE TABLE `tbl_xe` (
  `maxe` int(11) NOT NULL,
  `bks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tenxe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `makhachhang` int(11) NOT NULL,
  `manhanvien` int(11) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_group` int(11) NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` smallint(6) DEFAULT '1',
  `status` smallint(6) NOT NULL DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `user_group`, `auth_key`, `password_hash`, `address`, `phone`, `email`, `gender`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 0, 'WHNLgSBBIpHraQwpZs-GeNwbzvoDbQZ0', '$2y$13$eF0MhM6jMlR.HLs1fLdn6.pOP4wK2B7tSS.Q1Lqh0H0J4bi1w0dx2', NULL, NULL, 'admin@gmail.com', 1, 1, 1507971838, 1507971838),
(2, 'hung', 0, 'vzNQluE9TjoeS-HtUWju3S9_dJp4HXcn', '$2y$13$WwGzPI3oeZXJSZuFcr/YjO1TRYls0DA9iteVtvJbEq07qFnEHkFhy', NULL, NULL, 'hung@gmail.com', 1, 10, 1508153067, 1508153067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdathang`
--
ALTER TABLE `chitietdathang`
  ADD PRIMARY KEY (`sohoadon`);

--
-- Indexes for table `dondathang`
--
ALTER TABLE `dondathang`
  ADD PRIMARY KEY (`sohoadon`);

--
-- Indexes for table `grouppermission`
--
ALTER TABLE `grouppermission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hangxe`
--
ALTER TABLE `hangxe`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tenhang` (`tenhang`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makhachhang`);

--
-- Indexes for table `loaihang`
--
ALTER TABLE `loaihang`
  ADD PRIMARY KEY (`id_LH`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `mathang`
--
ALTER TABLE `mathang`
  ADD PRIMARY KEY (`mahang`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`macongty`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_donvitinh`
--
ALTER TABLE `tbl_donvitinh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_xe`
--
ALTER TABLE `tbl_xe`
  ADD PRIMARY KEY (`maxe`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietdathang`
--
ALTER TABLE `chitietdathang`
  MODIFY `sohoadon` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dondathang`
--
ALTER TABLE `dondathang`
  MODIFY `sohoadon` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `grouppermission`
--
ALTER TABLE `grouppermission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hangxe`
--
ALTER TABLE `hangxe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makhachhang` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `loaihang`
--
ALTER TABLE `loaihang`
  MODIFY `id_LH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mathang`
--
ALTER TABLE `mathang`
  MODIFY `mahang` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `macongty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_donvitinh`
--
ALTER TABLE `tbl_donvitinh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_xe`
--
ALTER TABLE `tbl_xe`
  MODIFY `maxe` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
