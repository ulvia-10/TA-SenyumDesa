-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2021 at 09:23 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `senyumdesa`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun_profile`
--

CREATE TABLE `akun_profile` (
  `id_profile` int(11) NOT NULL,
  `username` varchar(75) NOT NULL,
  `password` varchar(70) NOT NULL,
  `level` enum('pusat','korwil','anggota') NOT NULL,
  `status_account` enum('active','inactive') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `photo` varchar(75) DEFAULT NULL,
  `gender` enum('P','L') NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `id_cabang` int(11) DEFAULT NULL,
  `cv` varchar(40) NOT NULL,
  `tempat_lahir` varchar(40) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `asal` varchar(50) NOT NULL,
  `reason_join` text NOT NULL,
  `bukti_follow` enum('Sudah','Belum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun_profile`
--

INSERT INTO `akun_profile` (`id_profile`, `username`, `password`, `level`, `status_account`, `created_at`, `photo`, `gender`, `full_name`, `id_cabang`, `cv`, `tempat_lahir`, `tanggal_lahir`, `asal`, `reason_join`, `bukti_follow`) VALUES
(1, 'lusi', '$2y$10$VxjO.cX5XbsnXJ1vF6Atf.sbBrkjfcdiFWPjYCexjsJ2UNGp5UONG', 'pusat', 'active', '2021-03-31 15:44:59', NULL, 'P', 'Lusi Tiana ', 5, '', 'Sidoarjo', '2021-03-11', 'TNI', 'tauk ah', 'Sudah');

-- --------------------------------------------------------

--
-- Table structure for table `data_donasi`
--

CREATE TABLE `data_donasi` (
  `Id_donasi` int(11) NOT NULL,
  `no_rekening` varchar(50) NOT NULL,
  `nama_donatur` varchar(50) NOT NULL,
  `tgl_donasi` datetime NOT NULL DEFAULT current_timestamp(),
  `status` enum('Lunas','Belum Lunas','Kadaluwarsa') CHARACTER SET utf8mb4 NOT NULL,
  `jml_donasi` int(50) NOT NULL,
  `id_cabang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_donasi`
--

INSERT INTO `data_donasi` (`Id_donasi`, `no_rekening`, `nama_donatur`, `tgl_donasi`, `status`, `jml_donasi`, `id_cabang`) VALUES
(2, '2324', 'Lusi Tiana ', '2021-03-03 18:35:45', 'Lunas', 15000000, 13),
(3, '0983939', 'Dika Widya', '2021-03-02 18:36:25', 'Belum Lunas', 123500000, 11),
(4, '0088877', 'Nisa Damayanti', '2021-03-24 18:36:25', 'Lunas', 130000000, 14),
(6, '1831710054', 'Putri saferina', '2021-03-30 21:53:35', 'Belum Lunas', 1800000, NULL),
(7, '4567890', 'Mark Tuan', '2021-03-31 09:52:55', 'Belum Lunas', 190000, NULL),
(9, '0987564367', 'dwi', '2021-03-31 19:51:17', 'Lunas', 8000000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_informasiprofile`
--

CREATE TABLE `data_informasiprofile` (
  `id_informasiprofile` int(15) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_profile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_kegiatan`
--

CREATE TABLE `data_kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(75) DEFAULT NULL,
  `id_profile` int(11) NOT NULL,
  `tanggal_kegiatan` datetime NOT NULL,
  `tanggal_berakhir` datetime DEFAULT NULL,
  `status` enum('expired','draft','publish') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_keuangan`
--

CREATE TABLE `data_keuangan` (
  `id_keuangan` int(11) NOT NULL,
  `id_cabang` int(11) NOT NULL,
  `id_profile` int(11) NOT NULL,
  `judul` varchar(75) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `tanggal_laporan` datetime NOT NULL,
  `jenis_keuangan` enum('masuk','keluar') NOT NULL,
  `nominal` int(15) NOT NULL,
  `tipe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_keuangan`
--

INSERT INTO `data_keuangan` (`id_keuangan`, `id_cabang`, `id_profile`, `judul`, `deskripsi`, `tanggal_laporan`, `jenis_keuangan`, `nominal`, `tipe`) VALUES
(1, 18, 1, 'Setoran Modal', 'setoran kas', '2021-03-24 18:46:24', 'masuk', 20000000, 'Rekening'),
(2, 3, 1, 'Biaya Notaris', 'Notaris perlengakapan', '2021-03-27 18:46:24', 'keluar', 30000000, 'Notaris'),
(5, 11, 1, 'Anak Tasya', 'Ya Begitu', '0000-00-00 00:00:00', 'masuk', 15000000, 'aloha');

-- --------------------------------------------------------

--
-- Table structure for table `master_cabang`
--

CREATE TABLE `master_cabang` (
  `id_cabang` int(11) NOT NULL,
  `name_cabang` varchar(100) NOT NULL,
  `status_cabang` enum('active','inactive') NOT NULL,
  `photo` varchar(75) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_cabang`
--

INSERT INTO `master_cabang` (`id_cabang`, `name_cabang`, `status_cabang`, `photo`, `created_at`) VALUES
(1, 'Bali ', 'active', '', '2021-04-01 05:33:54'),
(2, 'Bangkalan', 'active', '', '2021-03-22 17:24:37'),
(3, 'Bandung ', '', '', '2021-03-31 13:21:29'),
(4, 'Gresik', 'active', '', '2021-03-22 17:25:05'),
(5, 'Jambi baru', 'inactive', '', '2021-03-31 12:49:36'),
(6, 'Kalimantan Barat', 'active', '', '2021-03-22 17:25:31'),
(7, 'Kediri', 'active', '', '2021-03-22 17:26:12'),
(8, 'Malang', 'active', '', '2021-03-22 17:26:12'),
(9, 'Pamekasan', 'active', '', '2021-03-22 17:26:38'),
(11, 'Surabaya', 'active', '', '2021-03-22 17:27:04'),
(12, 'Yogyakarta', 'active', '', '2021-03-22 17:27:04'),
(13, 'Sidoarjo', 'active', '', '2021-03-22 17:27:36'),
(14, 'Sumatra Selatan', 'active', '', '2021-03-22 17:27:36'),
(16, 'Padang Raya', 'active', '', '2021-03-30 14:15:59'),
(17, 'Jakarta Selatan', 'active', '', '2021-03-30 14:23:09'),
(18, 'Bogor', 'inactive', '', '2021-03-30 14:40:56'),
(19, 'jogja', 'inactive', '', '2021-03-31 12:49:01'),
(20, 'Bondowoso baru', 'active', '', '2021-04-01 05:30:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun_profile`
--
ALTER TABLE `akun_profile`
  ADD PRIMARY KEY (`id_profile`),
  ADD KEY `FK_akun_profile_master_cabang` (`id_cabang`);

--
-- Indexes for table `data_donasi`
--
ALTER TABLE `data_donasi`
  ADD PRIMARY KEY (`Id_donasi`),
  ADD KEY `FK_data_donasi_master_cabang` (`id_cabang`);

--
-- Indexes for table `data_informasiprofile`
--
ALTER TABLE `data_informasiprofile`
  ADD PRIMARY KEY (`id_informasiprofile`),
  ADD KEY `id_profile` (`id_profile`);

--
-- Indexes for table `data_kegiatan`
--
ALTER TABLE `data_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`),
  ADD KEY `FK_data_kegiatan_akun_profile` (`id_profile`);

--
-- Indexes for table `data_keuangan`
--
ALTER TABLE `data_keuangan`
  ADD PRIMARY KEY (`id_keuangan`),
  ADD KEY `FK_data_keuangan_master_cabang` (`id_cabang`),
  ADD KEY `FK_data_keuangan_akun_profile` (`id_profile`);

--
-- Indexes for table `master_cabang`
--
ALTER TABLE `master_cabang`
  ADD PRIMARY KEY (`id_cabang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun_profile`
--
ALTER TABLE `akun_profile`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_donasi`
--
ALTER TABLE `data_donasi`
  MODIFY `Id_donasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `data_kegiatan`
--
ALTER TABLE `data_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_keuangan`
--
ALTER TABLE `data_keuangan`
  MODIFY `id_keuangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `master_cabang`
--
ALTER TABLE `master_cabang`
  MODIFY `id_cabang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `akun_profile`
--
ALTER TABLE `akun_profile`
  ADD CONSTRAINT `FK_akun_profile_master_cabang` FOREIGN KEY (`id_cabang`) REFERENCES `master_cabang` (`id_cabang`);

--
-- Constraints for table `data_donasi`
--
ALTER TABLE `data_donasi`
  ADD CONSTRAINT `FK_data_donasi_master_cabang` FOREIGN KEY (`id_cabang`) REFERENCES `master_cabang` (`id_cabang`);

--
-- Constraints for table `data_informasiprofile`
--
ALTER TABLE `data_informasiprofile`
  ADD CONSTRAINT `FK_data_informasiprofile_akun_profile` FOREIGN KEY (`id_profile`) REFERENCES `akun_profile` (`id_profile`);

--
-- Constraints for table `data_kegiatan`
--
ALTER TABLE `data_kegiatan`
  ADD CONSTRAINT `FK_data_kegiatan_akun_profile` FOREIGN KEY (`id_profile`) REFERENCES `akun_profile` (`id_profile`);

--
-- Constraints for table `data_keuangan`
--
ALTER TABLE `data_keuangan`
  ADD CONSTRAINT `FK_data_keuangan_akun_profile` FOREIGN KEY (`id_profile`) REFERENCES `akun_profile` (`id_profile`),
  ADD CONSTRAINT `FK_data_keuangan_master_cabang` FOREIGN KEY (`id_cabang`) REFERENCES `master_cabang` (`id_cabang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
