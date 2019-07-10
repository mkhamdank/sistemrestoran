-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Jul 2019 pada 05.22
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `framework_restoran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(300) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan`
--

CREATE TABLE `makanan` (
  `id_makanan` int(10) NOT NULL,
  `jenis_makanan` varchar(255) NOT NULL,
  `nama_makanan` varchar(255) NOT NULL,
  `harga_makanan` int(255) NOT NULL,
  `stok_makanan` int(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`id_makanan`, `jenis_makanan`, `nama_makanan`, `harga_makanan`, `stok_makanan`, `gambar`) VALUES
(5, 'Nasi', 'Nasi Goreng', 12000, 39, 'nasilemak.jpg'),
(7, 'nasi', 'nasiii', 120000, 18, 'koloke.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `minuman`
--

CREATE TABLE `minuman` (
  `id_minuman` int(11) NOT NULL,
  `nama_minuman` varchar(255) NOT NULL,
  `harga_minuman` int(255) NOT NULL,
  `stok_minuman` int(255) NOT NULL,
  `gmbr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan_makanan`
--

CREATE TABLE `pemesanan_makanan` (
  `id_pemesanan_mak` int(11) NOT NULL,
  `no_meja` int(11) NOT NULL,
  `nama_pemesan` varchar(90) NOT NULL,
  `tanggal` date NOT NULL,
  `pesanan_mkn` varchar(90) NOT NULL,
  `jml_mkn` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan_makanan`
--

INSERT INTO `pemesanan_makanan` (`id_pemesanan_mak`, `no_meja`, `nama_pemesan`, `tanggal`, `pesanan_mkn`, `jml_mkn`, `harga`, `status`) VALUES
(29, 12, 'Febrita', '2017-01-01', 'Koloke', 2, 40000, 'Sudah Dibayar'),
(30, 12, 'Khamdan', '2017-01-01', 'Cumi Panggang', 3, 75000, 'Belum Dibayar'),
(31, 4, 'Ndan', '2017-01-02', 'Nasi Goreng', 1, 12000, 'Sudah Dibayar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan_minuman`
--

CREATE TABLE `pemesanan_minuman` (
  `id_pemesanan_min` int(11) NOT NULL,
  `no_meja` int(11) NOT NULL,
  `nama_pemesan` varchar(90) NOT NULL,
  `tanggal` date NOT NULL,
  `pesanan_mnm` varchar(90) NOT NULL,
  `jml_mnm` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan_minuman`
--

INSERT INTO `pemesanan_minuman` (`id_pemesanan_min`, `no_meja`, `nama_pemesan`, `tanggal`, `pesanan_mnm`, `jml_mnm`, `harga`, `status`) VALUES
(21, 12, 'Febrita', '2017-01-01', 'Es Jeruk', 2, 24000, 'Sudah Dibayar'),
(22, 12, 'Khamdan', '2017-01-01', 'Es Jeruk', 3, 36000, 'Belum Dibayar'),
(23, 4, 'Ndan', '2017-01-02', 'Es Jeruk', 1, 12000, 'Sudah Dibayar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id_makanan`);

--
-- Indexes for table `minuman`
--
ALTER TABLE `minuman`
  ADD PRIMARY KEY (`id_minuman`);

--
-- Indexes for table `pemesanan_makanan`
--
ALTER TABLE `pemesanan_makanan`
  ADD PRIMARY KEY (`id_pemesanan_mak`);

--
-- Indexes for table `pemesanan_minuman`
--
ALTER TABLE `pemesanan_minuman`
  ADD PRIMARY KEY (`id_pemesanan_min`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id_makanan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `minuman`
--
ALTER TABLE `minuman`
  MODIFY `id_minuman` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pemesanan_makanan`
--
ALTER TABLE `pemesanan_makanan`
  MODIFY `id_pemesanan_mak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `pemesanan_minuman`
--
ALTER TABLE `pemesanan_minuman`
  MODIFY `id_pemesanan_min` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
