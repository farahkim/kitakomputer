-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2021 at 10:39 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc`
--

CREATE TABLE `acc` (
  `kode` int(50) NOT NULL,
  `stok` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `merk` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `tipe` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `kondisi` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `harga` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `deskripsi` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `foto` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acc`
--

INSERT INTO `acc` (`kode`, `stok`, `merk`, `tipe`, `kondisi`, `harga`, `deskripsi`, `foto`) VALUES
(1021, '2', 'Lainnya', 'Headphone', 'Baru', 'Rp. 500.000', 'Dolby, HDMI port', 0x6865616470686f6e652e6a7067),
(12121, '2', 'Logitech', 'Keyboard', 'Baru', 'Rp. 400.000', 'Portable, User Friendly', 0x6b6579626f617264726f626f742e6a7067),
(121213, '3', 'Lainnya', 'Keyboard', 'Baru', 'Rp. 60.000', 'Keyboard Lipat', 0x6b6579626f6172642e6a7067),
(121221, '2', 'Lainnya', 'Keyboard', 'Baru', 'Rp. 520.000', 'Keyboard Gaming', 0x6b6579626f617264322e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `hp`
--

CREATE TABLE `hp` (
  `kode` int(10) NOT NULL,
  `stok` varchar(50) DEFAULT NULL,
  `merk` varchar(50) DEFAULT NULL,
  `tipe` varchar(50) DEFAULT NULL,
  `kondisi` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `harga` varchar(50) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `foto` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hp`
--

INSERT INTO `hp` (`kode`, `stok`, `merk`, `tipe`, `kondisi`, `harga`, `deskripsi`, `foto`) VALUES
(1015, '2', 'Realme', 'Narzo', 'Baru', 'Rp. 6.000.000', 'RAM 4, ROM 64, Snapdragon 460', 0x68705265616c6d652e6a7067),
(1016, '2', 'Xiaomi', 'Redmi Note 9', 'Baru', 'Rp. 4.000.000', 'RAM 4, ROM 64 GB, Snapdragon 550', 0x68705869616f6d692e6a7067),
(1017, '3', 'Apple', 'Pro Max', 'Bekas', 'Rp. 14.000.000', 'IOS Pro', 0x48506170706c652e6a7067),
(1018, '4', 'Huawei', 'Galaxy', 'Baru', 'Rp. 11.000.000', 'RAM 4, ROM 128, Snapdragon 560', 0x687073616d73756e672e6a7067),
(1021, '2', 'Oppo', 'F13', 'Baru', 'Rp. 7.000.000', 'RAM 4, ROM 128, Snapdragon 660', 0x68704f70706f2e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `kode` int(10) NOT NULL,
  `stok` varchar(50) DEFAULT NULL,
  `merk` varchar(50) DEFAULT NULL,
  `tipe` varchar(50) DEFAULT NULL,
  `kondisi` varchar(50) DEFAULT NULL,
  `harga` varchar(50) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `foto` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`kode`, `stok`, `merk`, `tipe`, `kondisi`, `harga`, `deskripsi`, `foto`) VALUES
(1013, '6', 'Lenovoo', 'Yoga Lipat', 'Baru', 'Rp. 17.000.000', 'RAM 4 GB, SSD, 1 TB', 0x6c656e6f766f796f67612e6a706567),
(1014, '2', 'Acer', 'Aspire3', 'Baru', 'Rp. 4.000.000', 'RAM 4, DDR4, 500 GB', 0x6c6170746f6b752e6a7067),
(1015, '4', 'Asus', 'Zenbook', 'Baru', 'Rp. 7.000.000', 'RAM 4 GB, SSD, 500 GB', 0x6c6170746f7061737573312e6a7067),
(1018, '4', 'Lenovoo', 'Ideapad ', 'Baru', 'Rp. 6.000.000', 'RAM 4, DDR4, 1 TB', 0x6c6170746f70617375732e6a706567),
(1019, '2', 'Asus', 'ROG', 'Baru', 'Rp. 34.000.000', 'RAM 8 GB, SSD, I TB, i9 CORE', 0x524f476c6170746f702e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `pc`
--

CREATE TABLE `pc` (
  `kode` int(10) NOT NULL,
  `stok` varchar(50) DEFAULT NULL,
  `merk` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `tipe` varchar(50) DEFAULT NULL,
  `kondisi` varchar(50) DEFAULT NULL,
  `harga` varchar(50) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `foto` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pc`
--

INSERT INTO `pc` (`kode`, `stok`, `merk`, `tipe`, `kondisi`, `harga`, `deskripsi`, `foto`) VALUES
(13, '2', 'Apple', 'Motherboard', 'Bekas', 'Rp. 15.000.000', 'IOS Pro', 0x6370752e6a7067),
(14, '2', 'Xiaomi', 'Hardisk', 'Baru', 'Rp. 600.000', '500 GB', 0x6861726469736b2e6a7067),
(15, '2', 'Huawei', 'Cooller', 'Baru', 'Rp. 200.000', 'Speed rate 5', 0x636f6c65722e6a7067),
(16, '2', 'Huawei', 'ai', 'Baru', 'Rp. 700.000', 'Input device', 0x6b6579626f617264322e6a7067),
(10037, '3', 'Acer', 'Keyboard', 'Baru', 'Rp. 600.000', 'Plus Mouse', 0x6b6579626f617264726f626f742e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acc`
--
ALTER TABLE `acc`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `hp`
--
ALTER TABLE `hp`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `pc`
--
ALTER TABLE `pc`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acc`
--
ALTER TABLE `acc`
  MODIFY `kode` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121222;

--
-- AUTO_INCREMENT for table `hp`
--
ALTER TABLE `hp`
  MODIFY `kode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1023;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `kode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1023;

--
-- AUTO_INCREMENT for table `pc`
--
ALTER TABLE `pc`
  MODIFY `kode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10041;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
