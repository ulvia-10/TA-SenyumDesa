-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Mar 2021 pada 14.37
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Struktur dari tabel `akun_profile`
--

CREATE TABLE `akun_profile` (
  `id_profile` int(11) NOT NULL,
  `username` varchar(75) NOT NULL,
  `password` varchar(70) NOT NULL,
  `level` enum('pusat','korwil','anggota') NOT NULL,
  `status_account` enum('active','inactive') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
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
-- Dumping data untuk tabel `akun_profile`
--

INSERT INTO `akun_profile` (`id_profile`, `username`, `password`, `level`, `status_account`, `created_at`, `photo`, `gender`, `full_name`, `id_cabang`, `cv`, `tempat_lahir`, `tanggal_lahir`, `asal`, `reason_join`, `bukti_follow`) VALUES
(1, 'lusi', '$2y$10$VxjO.cX5XbsnXJ1vF6Atf.sbBrkjfcdiFWPjYCexjsJ2UNGp5UONG', 'pusat', 'active', '2021-03-12 14:31:13', NULL, 'P', 'Lusi Tiana ', NULL, '', '', '0000-00-00', '', '', 'Sudah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_donasi`
--

CREATE TABLE `data_donasi` (
  `id_donasi` int(11) NOT NULL,
  `no_rekening` varchar(50) NOT NULL,
  `nama_donatur` varchar(50) NOT NULL,
  `tgl_donasi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(50) NOT NULL,
  `jml_donasi` int(50) NOT NULL,
  `id_cabang` int(11) DEFAULT NULL,
  `id_profile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_informasiprofile`
--

CREATE TABLE `data_informasiprofile` (
  `id_informasiprofile` int(15) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_profile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kegiatan`
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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_keuangan`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_cabang`
--

CREATE TABLE `master_cabang` (
  `id_cabang` int(11) NOT NULL,
  `name_cabang` varchar(100) NOT NULL,
  `status_cabang` enum('active','inactive') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun_profile`
--
ALTER TABLE `akun_profile`
  ADD PRIMARY KEY (`id_profile`),
  ADD KEY `FK_akun_profile_master_cabang` (`id_cabang`);

--
-- Indeks untuk tabel `data_donasi`
--
ALTER TABLE `data_donasi`
  ADD PRIMARY KEY (`id_donasi`),
  ADD KEY `FK_data_donasi_master_cabang` (`id_cabang`),
  ADD KEY `FK_data_donasi_akun_profile` (`id_profile`);

--
-- Indeks untuk tabel `data_informasiprofile`
--
ALTER TABLE `data_informasiprofile`
  ADD PRIMARY KEY (`id_informasiprofile`),
  ADD KEY `id_profile` (`id_profile`);

--
-- Indeks untuk tabel `data_kegiatan`
--
ALTER TABLE `data_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`),
  ADD KEY `FK_data_kegiatan_akun_profile` (`id_profile`);

--
-- Indeks untuk tabel `data_keuangan`
--
ALTER TABLE `data_keuangan`
  ADD PRIMARY KEY (`id_keuangan`),
  ADD KEY `FK_data_keuangan_master_cabang` (`id_cabang`),
  ADD KEY `FK_data_keuangan_akun_profile` (`id_profile`);

--
-- Indeks untuk tabel `master_cabang`
--
ALTER TABLE `master_cabang`
  ADD PRIMARY KEY (`id_cabang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun_profile`
--
ALTER TABLE `akun_profile`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_kegiatan`
--
ALTER TABLE `data_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_keuangan`
--
ALTER TABLE `data_keuangan`
  MODIFY `id_keuangan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `master_cabang`
--
ALTER TABLE `master_cabang`
  MODIFY `id_cabang` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `akun_profile`
--
ALTER TABLE `akun_profile`
  ADD CONSTRAINT `FK_akun_profile_master_cabang` FOREIGN KEY (`id_cabang`) REFERENCES `master_cabang` (`id_cabang`);

--
-- Ketidakleluasaan untuk tabel `data_donasi`
--
ALTER TABLE `data_donasi`
  ADD CONSTRAINT `FK_data_donasi_akun_profile` FOREIGN KEY (`id_profile`) REFERENCES `akun_profile` (`id_profile`),
  ADD CONSTRAINT `FK_data_donasi_master_cabang` FOREIGN KEY (`id_cabang`) REFERENCES `master_cabang` (`id_cabang`);

--
-- Ketidakleluasaan untuk tabel `data_informasiprofile`
--
ALTER TABLE `data_informasiprofile`
  ADD CONSTRAINT `FK_data_informasiprofile_akun_profile` FOREIGN KEY (`id_profile`) REFERENCES `akun_profile` (`id_profile`);

--
-- Ketidakleluasaan untuk tabel `data_kegiatan`
--
ALTER TABLE `data_kegiatan`
  ADD CONSTRAINT `FK_data_kegiatan_akun_profile` FOREIGN KEY (`id_profile`) REFERENCES `akun_profile` (`id_profile`);

--
-- Ketidakleluasaan untuk tabel `data_keuangan`
--
ALTER TABLE `data_keuangan`
  ADD CONSTRAINT `FK_data_keuangan_akun_profile` FOREIGN KEY (`id_profile`) REFERENCES `akun_profile` (`id_profile`),
  ADD CONSTRAINT `FK_data_keuangan_master_cabang` FOREIGN KEY (`id_cabang`) REFERENCES `master_cabang` (`id_cabang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
