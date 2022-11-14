-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Nov 2022 pada 17.01
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pa_web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(100) NOT NULL,
  `nama_pemesan` varchar(100) NOT NULL,
  `pesanan_produk` varchar(100) NOT NULL,
  `ukuran_pesanan` varchar(100) NOT NULL,
  `jumlah_pesanan` int(100) NOT NULL,
  `harga_pesanan` int(100) NOT NULL,
  `alamat_pemesan` varchar(1000) NOT NULL,
  `warna_pesanan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `nama_pemesan`, `pesanan_produk`, `ukuran_pesanan`, `jumlah_pesanan`, `harga_pesanan`, `alamat_pemesan`, `warna_pesanan`) VALUES
(4, 'Rizki', 'sneaker', '40', 2, 20000, 'unmul', 'hitam'),
(6, 'Rizki', 'sneaker', '56', 1, 23000, 'universitas', 'pink');

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi`
--

CREATE TABLE `registrasi` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pw` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nohp` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `registrasi`
--

INSERT INTO `registrasi` (`id`, `nama`, `pw`, `email`, `username`, `nohp`, `ttl`, `gambar`) VALUES
(2, 'riri', '202cb962ac59075b964b07152d234b70', 'rriri0024@gmail.com', 'riri', '0987654331', '2022-11-01', 'riri.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sepatu`
--

CREATE TABLE `sepatu` (
  `id` int(100) NOT NULL,
  `nama_sepatu` varchar(100) NOT NULL,
  `ukuran_sepatu` varchar(100) NOT NULL,
  `harga_sepatu` varchar(100) NOT NULL,
  `jml_stok` varchar(1000) NOT NULL,
  `warna_sepatu` varchar(100) NOT NULL,
  `gambar_sepatu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sepatu`
--

INSERT INTO `sepatu` (`id`, `nama_sepatu`, `ukuran_sepatu`, `harga_sepatu`, `jml_stok`, `warna_sepatu`, `gambar_sepatu`) VALUES
(2, 'sneaker', '40', 'Rp. 20.000', '3', 'Hitam', 'sneaker.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sepatu`
--
ALTER TABLE `sepatu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sepatu`
--
ALTER TABLE `sepatu`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
