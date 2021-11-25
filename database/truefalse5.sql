-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Nov 2021 pada 07.29
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `truefalse`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `info_jawaban`
--

CREATE TABLE `info_jawaban` (
  `pertanyaan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating_action` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `info_jawaban`
--

INSERT INTO `info_jawaban` (`pertanyaan_id`, `user_id`, `rating_action`) VALUES
(43, 19, 'salah'),
(44, 19, 'benar'),
(45, 18, 'salah'),
(45, 19, 'salah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`) VALUES
(2, 'Bisnis'),
(3, 'Budaya'),
(4, 'Hiburan'),
(5, 'Kuliner'),
(6, 'Musik'),
(7, 'Olahraga'),
(8, 'Politik'),
(9, 'Religi'),
(10, 'Sosial Ekonomi'),
(11, 'Kesehatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pertanyaan`
--

CREATE TABLE `tb_pertanyaan` (
  `id_pertanyaan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `tersedia` enum('TRUE','FALSE') NOT NULL DEFAULT 'TRUE',
  `pertanyaan` varchar(255) NOT NULL,
  `jwb_iya` int(11) NOT NULL DEFAULT 0,
  `jwb_tidak` int(11) NOT NULL DEFAULT 0,
  `jml_jawaban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pertanyaan`
--

INSERT INTO `tb_pertanyaan` (`id_pertanyaan`, `id_user`, `id_kategori`, `tersedia`, `pertanyaan`, `jwb_iya`, `jwb_tidak`, `jml_jawaban`) VALUES
(36, 17, 2, 'TRUE', 'Apakah harga emas naik?', 1, 1, 0),
(37, 17, 3, 'TRUE', 'Apakah tari saman berasal dari Aceh?', 2, 0, 0),
(38, 17, 4, 'TRUE', 'Apakah Sule seorang pelawak?', 2, 0, 0),
(39, 17, 5, 'TRUE', 'Apakah gudeg makanan khas Jogja?', 2, 0, 0),
(40, 17, 6, 'TRUE', 'Apakah lagu terbaru Adele easy on me?', 2, 1, 0),
(41, 18, 7, 'TRUE', 'Apakah Manchaster United kalah dalam pertandingan sepak bola pekan lalu?', 1, 1, 0),
(42, 18, 8, 'TRUE', 'Apakah PPKM akan diberlakukan kembali selama nataru?', 1, 1, 0),
(43, 18, 9, 'TRUE', 'Apakah sedekah dapat membantu melancarkan rezeki?', 2, 0, 0),
(44, 18, 10, 'TRUE', 'Apakah sensus penduduk termasuk dalam sosial ekonomi?', 4, 0, 0),
(45, 18, 11, 'TRUE', 'Apakah pandemi covid-19 sudah mulai menurun?', 4, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username_user` varchar(20) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `password_user` varchar(255) NOT NULL,
  `jawaban_user` int(11) NOT NULL DEFAULT 0,
  `pertanyaan_user` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username_user`, `email_user`, `password_user`, `jawaban_user`, `pertanyaan_user`) VALUES
(17, 'dena', 'dena12', 'dena@gmail.com', '25d55ad283aa400af464c76d713c07ad', 0, 0),
(18, 'lalapo', 'lalapo1', 'lalapo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, 0),
(19, 'Ryan Hartadi', 'ryan123', 'ryan@gmail.com', 'bd410624ee16dc9e3e23bc68700c43ab', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `info_jawaban`
--
ALTER TABLE `info_jawaban`
  ADD UNIQUE KEY `pertanyaan_id` (`pertanyaan_id`,`user_id`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  MODIFY `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
