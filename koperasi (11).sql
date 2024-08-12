-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2023 at 04:35 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koperasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(20) NOT NULL,
  `nik` int(20) NOT NULL,
  `nama_anggota` varchar(50) DEFAULT NULL,
  `alamat_anggota` varchar(100) DEFAULT NULL,
  `no_hp` varchar(13) DEFAULT NULL,
  `jabatan` varchar(20) DEFAULT NULL,
  `jenis_kelamin` varchar(13) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nik`, `nama_anggota`, `alamat_anggota`, `no_hp`, `jabatan`, `jenis_kelamin`, `foto`, `status`) VALUES
(1, 2147483647, 'nina', 'takisung', '0987654', 'Seksi Usaha', 'Perempuan', '', NULL),
(19, 2147483647, 'rey', 'takisung 2', '0987654', 'Bendahara', 'Laki-laki', '', NULL),
(20, 4567886, 'nanidfsdf', 'pelaihari', '087771922326', '', 'Laki-laki', 'th.jpeg', NULL),
(22, 2147483647, 'riska', 'kintap', '08314231838', 'Bendahara', 'perempuan', '', NULL),
(27, 1010101101, 'diva', 'asam asam', '08384464746', 'Anggota', 'Laki-laki', '', 'tidak_aktif'),
(28, 2147483647, 'otong', 'banjar', '02020202', 'Dewan Pertimbangan', 'Laki-laki', '', 'non-aktif'),
(29, 767676, 'diva', 'banjar', '083150126994', 'Ketua', 'Laki-laki', 'a.aa.png', 'non-aktif'),
(30, 76674, 'hahah', 'pelaihari', '08384464746', 'Ketua', 'Laki-laki', 'a.aa.png', 'non-aktif'),
(31, 767676, 'diva', 'banjar', '02020202', 'Seksi Usaha', 'Laki-laki', 'a.basdat1.png', 'non-aktif'),
(32, 2147483647, 'RiskaKurnia', 'pelaihari 2', '083150126994', 'Ketua', 'Perempuan', '', 'aktif'),
(33, 2147483647, 'khoirotunnisa', 'karang jawa', '08910291000', 'Bendahara', 'Perempuan', 'Screenshot 2023-06-19 203037.png', 'aktif'),
(34, 2147483647, 'diva', 'kintap', '08384464746', 'Anggota', 'Laki-laki', '', 'aktif'),
(35, 2147483647, 'jono', 'banjar', '0872181910', 'Anggota', 'Laki-laki', '', 'aktif'),
(36, 2147483647, 'nuraisyah', 'pelaihari', '08628229226', 'Anggota', 'Perempuan', '', 'aktif'),
(37, 2147483647, 'otong', 'karang jawa', '083150119282', 'Anggota', 'Perempuan', '', 'aktif'),
(38, 2147483647, 'heri', 'pelaihari', '09876543333', 'Anggota', 'Laki-laki', '', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_simpanan`
--

CREATE TABLE `jenis_simpanan` (
  `id_jenis_simpanan` int(11) NOT NULL,
  `jenis_simpanan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenis_simpanan`
--

INSERT INTO `jenis_simpanan` (`id_jenis_simpanan`, `jenis_simpanan`) VALUES
(5, 'Simpanan Wajib'),
(6, 'Simpanan Pokok'),
(7, 'Simpanan Sukarela');

-- --------------------------------------------------------

--
-- Table structure for table `simpanan`
--

CREATE TABLE `simpanan` (
  `id_simpanan` int(10) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `jml_simpanan` varchar(20) NOT NULL,
  `id_anggota` int(20) NOT NULL,
  `id_jenis_simpanan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `simpanan`
--

INSERT INTO `simpanan` (`id_simpanan`, `tgl_bayar`, `jml_simpanan`, `id_anggota`, `id_jenis_simpanan`) VALUES
(40, '2023-06-21', '300000', 33, 7),
(41, '2023-06-21', '90000', 35, 6),
(42, '2023-06-14', '100000', 36, 6),
(43, '2023-06-08', '700000', 34, 7),
(44, '2023-06-21', '100000', 36, 6),
(45, '2023-06-20', '20000', 32, 7),
(46, '2023-06-22', '9000', 38, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `id_anggota` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`, `id_anggota`) VALUES
(11, 'kepala koperasi', 'kepala koperasi', 'kepala koperasi', 32),
(12, 'bendahara', 'bendahara', 'bendahara', 33),
(13, 'anggota', 'anggota', 'anggota', 34),
(14, 'super admin', 'super admin', 'superadmin', 35),
(15, 'admin', 'admin', 'admin', 36),
(16, 'kepalakoperasi', 'kepalakoperasi', 'kepala koperasi', 37),
(17, 'heri', 'ndutt', 'anggota', 38);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `jenis_simpanan`
--
ALTER TABLE `jenis_simpanan`
  ADD PRIMARY KEY (`id_jenis_simpanan`);

--
-- Indexes for table `simpanan`
--
ALTER TABLE `simpanan`
  ADD PRIMARY KEY (`id_simpanan`),
  ADD KEY `id_anggota` (`id_anggota`),
  ADD KEY `id_jenis_simpanan` (`id_jenis_simpanan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `jenis_simpanan`
--
ALTER TABLE `jenis_simpanan`
  MODIFY `id_jenis_simpanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `simpanan`
--
ALTER TABLE `simpanan`
  MODIFY `id_simpanan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `simpanan`
--
ALTER TABLE `simpanan`
  ADD CONSTRAINT `simpanan_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`),
  ADD CONSTRAINT `simpanan_ibfk_2` FOREIGN KEY (`id_jenis_simpanan`) REFERENCES `jenis_simpanan` (`id_jenis_simpanan`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
