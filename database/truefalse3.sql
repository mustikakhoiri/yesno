-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Nov 2021 pada 04.25
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

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
-- Struktur dari tabel `tb_pertanyaan`
--

CREATE TABLE `tb_pertanyaan` (
  `id_pertanyaan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tersedia` enum('TRUE','FALSE') NOT NULL DEFAULT 'TRUE',
  `pertanyaan` varchar(255) NOT NULL,
  `jwb_iya` int(11) NOT NULL DEFAULT 0,
  `jwb_tidak` int(11) NOT NULL DEFAULT 0,
  `jml_jawaban` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pertanyaan`
--

INSERT INTO `tb_pertanyaan` (`id_pertanyaan`, `id_user`, `tersedia`, `pertanyaan`, `jwb_iya`, `jwb_tidak`, `jml_jawaban`, `nama_kategori`) VALUES
(5, 0, 'TRUE', 'Bagaimana kabar kalian ?', 26, 15, 0, ''),
(6, 0, 'TRUE', 'Andai kau bisa mengerti betapa beratnya aku ?', 19, 15, 0, ''),
(7, 0, 'TRUE', 'Mengapa bukan kamu yg memiliki aku ?', 9, 5, 0, ''),
(12, 0, 'TRUE', 'Ini gimana cara bikin trigger mysql kok lupa wkwk\r\n', 0, 0, 0, ''),
(14, 0, 'TRUE', 'How could u be so reckless with someone heart ?', 0, 0, 0, ''),
(17, 0, 'TRUE', 'Apakah minggu depan gajian ?', 3, 1, 0, ''),
(21, 0, 'TRUE', 'Besok presentasi ke pak usman ?', 0, 2, 0, ''),
(23, 0, 'FALSE', 'Yeay bisa', 1, 1, 0, ''),
(31, 0, 'FALSE', 'Aman kah ?', 1, 1, 0, ''),
(32, 0, 'TRUE', 'Ini pertanyaan baru hehe', 2, 1, 0, '');

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
(1, 'Ridho Dwi Ramadhan', 'ridho16', 'ridhowayne16@gmail.com', 'ridho123', 0, 0),
(2, 'Ridho Dwi Ramadhan', 'rama123', 'rama@gmail.com', '$2y$10$UUeFR1mM41aAM4F3APa5su3uEwK2tXE9gDVwcZxafjQXgwc5PrxQu', 0, 0),
(3, 'Ryan', 'ryan123', 'ryan@gmail.com', 'bd410624ee16dc9e3e23bc68700c43ab', 0, 0),
(12, 'dyta', 'dyta12', 'dyta13@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, 0),
(13, 'didi', 'didi1', 'didi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, 0),
(14, 'dena', 'dena12', 'dena@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, 0);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT untuk tabel `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  MODIFY `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
