-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Agu 2023 pada 09.57
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inventaris`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `kode_barang` varchar(8) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `spesifikasi` varchar(35) NOT NULL,
  `kategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`kode_barang`, `nama_barang`, `spesifikasi`, `kategori`) VALUES
('B001', 'Pemograman V', '20 Halaman', 'Buku');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_keluarbarang`
--

CREATE TABLE `tbl_keluarbarang` (
  `id_keluarbarang` varchar(11) NOT NULL,
  `kode_barang` varchar(8) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `jumlah_keluar` int(8) NOT NULL,
  `lokasi_barang` varchar(50) NOT NULL,
  `kondisi` varchar(15) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_masukbarang`
--

CREATE TABLE `tbl_masukbarang` (
  `id_masukbarang` varchar(11) NOT NULL,
  `kode_barang` varchar(8) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `jumlah_masuk` int(8) NOT NULL,
  `kode_supplier` varchar(5) NOT NULL,
  `lokasi_barang` varchar(50) NOT NULL,
  `kondisi` varchar(15) NOT NULL,
  `sumber_dana` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rusakbarang`
--

CREATE TABLE `tbl_rusakbarang` (
  `id_barangrusak` varchar(11) NOT NULL,
  `kode_barang` varchar(6) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `kondisi` varchar(15) NOT NULL,
  `tgl_rusak` date NOT NULL,
  `jumlah_rusak` int(8) NOT NULL,
  `lokasi_barang` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_supplier`
--

CREATE TABLE `tbl_supplier` (
  `kode_supplier` varchar(5) NOT NULL,
  `nama_supplier` varchar(35) NOT NULL,
  `alamat_supplier` varchar(50) NOT NULL,
  `telp_supplier` varchar(25) NOT NULL,
  `kota_supplier` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`kode_supplier`, `nama_supplier`, `alamat_supplier`, `telp_supplier`, `kota_supplier`) VALUES
('SP001', 'Ryan', 'Ryan ajha udah', '08***********', 'TNJ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` varchar(8) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`) VALUES
('001', 'admin', 'ISMvKXpXpadDiUoOSoAfww=='),
('002', 'mario', 'mario');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indeks untuk tabel `tbl_keluarbarang`
--
ALTER TABLE `tbl_keluarbarang`
  ADD PRIMARY KEY (`id_keluarbarang`);

--
-- Indeks untuk tabel `tbl_masukbarang`
--
ALTER TABLE `tbl_masukbarang`
  ADD PRIMARY KEY (`id_masukbarang`);

--
-- Indeks untuk tabel `tbl_rusakbarang`
--
ALTER TABLE `tbl_rusakbarang`
  ADD PRIMARY KEY (`id_barangrusak`);

--
-- Indeks untuk tabel `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  ADD PRIMARY KEY (`kode_supplier`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
