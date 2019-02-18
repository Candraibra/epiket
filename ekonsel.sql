-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Feb 2019 pada 02.58
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekonsel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(10) NOT NULL,
  `no_induk` int(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `level` int(1) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `no_induk`, `nama`, `level`, `password`) VALUES
(1, 1, 'Bekti', 1, '123456'),
(2, 2, 'Tisna Eka', 1, '123456'),
(3, 3, 'Lutfi', 1, '123456'),
(4, 4, 'Sekretaris X RPL 1', 0, '123456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_keluhan`
--

CREATE TABLE `tb_keluhan` (
  `id` int(11) NOT NULL,
  `fullname` varchar(35) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `email` varchar(35) NOT NULL,
  `keluhan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_keluhan`
--

INSERT INTO `tb_keluhan` (`id`, `fullname`, `kelas`, `email`, `keluhan`) VALUES
(1, 'Candra Ibra Sanie', 'XII RPL 1', 'canisanie@gmail.com', 'bu di kelas saya banyak sekali siswa yang membuang sampah sembarangan saya sudah mengingatkan tapi mereka tetap begitu, dimohon ibu untuk membantu saya mengingatkan mereka,trima kasih bu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kunjungan`
--

CREATE TABLE `tb_kunjungan` (
  `id` int(11) NOT NULL,
  `nama_ortu` varchar(30) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `cek` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kunjungan`
--

INSERT INTO `tb_kunjungan` (`id`, `nama_ortu`, `nama_siswa`, `kelas`, `cek`) VALUES
(1, 'Hasanudin', 'Candra Ibra Sanie', 'XII RPL 1', 1),
(2, 'Parjan Leter', 'Hanif Muflihul', 'XII RPL 2', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `darijam` varchar(10) NOT NULL,
  `ket` varchar(5) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id`, `nama`, `kelas`, `darijam`, `ket`, `tgl`) VALUES
(1, 'Pradhika Putra A', 'XII RPL 1', '2-8', 'I', '0000-00-00'),
(2, 'Andika Dwi Santoso', 'XII RPL 2', '1-10', 'S', '0000-00-00'),
(3, 'Bunga Allysah Gardiena', 'XII RPL 3', '1-10', 'A', '0000-00-00'),
(4, 'Candra Ibra Sanie', 'XII RPL 4', '1-10', 'I', '0000-00-00'),
(5, 'Candra', 'XII RPL 1', '1-3', 'A', '0000-00-00'),
(6, 'albi tp', 'XII RPL 1', '1-3', 'S', '0000-00-00'),
(7, 'fafaf', 'v', '1-3', 'A', '0000-00-00'),
(8, 'fwas', 'fs', 'fs', 'sfs', '0000-00-00'),
(9, 'candra', 'XII RPL 1', '1-3', 'A', '0000-00-00'),
(10, 'fs', 'XI TKJ 4', 'fs', 'fs', '0000-00-00'),
(11, 'gd', 'XI TKJ 3', '1-3', 'A', '0000-00-00'),
(12, 'albi tp', 'X TJA 1', '1-3', 'A', '0000-00-00'),
(13, 'candra', 'X TJA 1', '1-3', 'A', '0000-00-00'),
(14, 'asd', 'X TJA 2', '1-3', 'A', '2019-01-12'),
(15, 'Poundra Verdian', 'XII RPL 4', '1-3', 'S', '2019-01-12'),
(16, 'HANIF', 'XII RPL 4', '1-A', 'I', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_keluhan`
--
ALTER TABLE `tb_keluhan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kunjungan`
--
ALTER TABLE `tb_kunjungan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_keluhan`
--
ALTER TABLE `tb_keluhan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_kunjungan`
--
ALTER TABLE `tb_kunjungan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
