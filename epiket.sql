-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Nov 2018 pada 01.21
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiket`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(10) NOT NULL,
  `no_induk` int(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `no_induk`, `nama`, `password`) VALUES
(1, 54321, 'Admin Senin', 'haloepiket'),
(2, 123, 'Admin Selasa', 'haloepiket'),
(3, 321, 'Admin Rabu', 'haloepiket');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `mapel` varchar(30) NOT NULL,
  `darijam` varchar(10) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `tugas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`id`, `nama`, `mapel`, `darijam`, `keterangan`, `tugas`) VALUES
(1, 'Agus Indra Cahya', 'KP', '1-10', 'Workshop', 'Anak Anak diharapkan telah menyelesaikan proposal'),
(2, 'Berlian Windasari', 'PMG', '2-8', 'Rapat Guru', 'Silahkan Anak Anak Mengarjakan latihan uas yang sudah saya share di classroom'),
(3, 'Lulu Zakiyah', 'PK5', '1-10', 'Workshop', 'Silahkan Anak Anak Menyelesaikan Tugas Minggu Kemarin'),
(4, 'Bambang Hertanto', 'KWU', '7-9', 'Urusan Keluarga', 'Produk minggu depan dikumpulkan ya anak anak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengumuman`
--

CREATE TABLE `tb_pengumuman` (
  `id` int(11) NOT NULL,
  `Keterangan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pengumuman`
--

INSERT INTO `tb_pengumuman` (`id`, `Keterangan`) VALUES
(1, 'A.2.7 Sedang digunakan untuk workshop para guru silahkan anak anak yang menggunakan A.2.7 untuk pindah ke B.3.6');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `darijam` varchar(10) NOT NULL,
  `ket` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id`, `nama`, `kelas`, `darijam`, `ket`) VALUES
(1, 'Pradhika Putra A', 'XII RPL 1', '2-8', 'I'),
(2, 'Andika Dwi Santoso', 'XII RPL 2', '1-10', 'S'),
(3, 'Bunga Allysah Gardiena', 'XII RPL 3', '1-10', 'A'),
(4, 'Candra Ibra Sanie', 'XII RPL 4', '1-10', 'I');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
