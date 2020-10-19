-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2020 pada 08.19
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simpleci4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `mhs_nim` int(7) NOT NULL,
  `mhs_nama` varchar(100) NOT NULL,
  `mhs_jenisKelamin` char(1) NOT NULL,
  `mhs_tempatLahir` varchar(100) NOT NULL,
  `mhs_tanggalLahir` date NOT NULL,
  `mhs_alamat` varchar(100) NOT NULL,
  `mhs_telepon` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`mhs_nim`, `mhs_nama`, `mhs_jenisKelamin`, `mhs_tempatLahir`, `mhs_tanggalLahir`, `mhs_alamat`, `mhs_telepon`) VALUES
(1234567899, 'Budi Mulya', 'L', 'Cilacap', '1996-01-18', 'Jl. Kejanten nomor 11', '083863533737'),
(1293091239, 'Londo', 'P', 'Tangerang', '2020-10-11', 'Tabfer', '0813153559379');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`mhs_nim`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `mhs_nim` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1293091241;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
