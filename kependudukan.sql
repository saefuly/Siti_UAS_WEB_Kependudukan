-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2018 at 08:22 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kependudukan`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_diri`
--

CREATE TABLE `data_diri` (
  `nik` bigint(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `kota_asal` varchar(100) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `status` enum('kawin','belum kawin') NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `kewarganegaraan` varchar(11) NOT NULL,
  `hobi` text NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_diri`
--

INSERT INTO `data_diri` (`nik`, `nama`, `email`, `tempat_lahir`, `tanggl_lahir`, `alamat`, `kota_asal`, `agama`, `jenis_kelamin`, `status`, `pekerjaan`, `kewarganegaraan`, `hobi`, `deskripsi`, `foto`) VALUES
(123456786543122, 'dudung', 'dudung@mailinator.com', 'bandung', '0000-00-00', 'margaasih', 'bandung', 'islam', 'P', 'belum kawin', 'karyawan', 'indonesia', 'lalalala', '', 'ecommerce.png'),
(1256718178191281, 'tatang', 'tatang@mailinator.com', 'bandung', '0000-00-00', 'margaasih', 'bandung', 'islam', 'P', 'belum kawin', 'karyawan', 'indonesia', 'lalalala', '', '7cc7a630624d20f7797cb4c8e93c09c1.png'),
(2390181290129012, 'iim', 'iim@mailinator.com', 'bandung', '1996-05-15', 'margaasih', 'bandung', 'islam', 'P', 'belum kawin', 'karyawan', 'indonesia', 'lalalala', 'lalalalala', 'C360_2015-07-02-19-21-58-945.jpg'),
(3201239012901290, 'Siti Atikah Nurduha R', 'siti.atikah15@gmail.com', 'Bandung', '0000-00-00', 'Margaasih', 'Bandung', 'islam', 'P', 'kawin', 'karyawan swasta', 'Indonesia', 'lalalal', '', 'dashboard.png'),
(3201901290129014, 'CEK', 'test@mailinator.com', 'Bandung', '0000-00-00', 'Jalan Raya', 'Bandung', 'islam', 'P', 'kawin', 'karyawan', 'Indonesia', '', '', 'Penjualan.png'),
(4327891012901234, 'Birgita Nindya Karina', 'birgita@mailinator.com', 'Bandung', '0000-00-00', 'Margaasih', 'Bandung', 'kristen', 'P', 'belum kawin', 'Pelajar', 'Indonesia', 'Baca', '', 'Screenshot_14.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `level` int(1) NOT NULL,
  `nik` bigint(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `level`, `nik`) VALUES
('siti', 'password', 1, 3201239012901290);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_diri`
--
ALTER TABLE `data_diri`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD KEY `nik` (`nik`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_diri` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
