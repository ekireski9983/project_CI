-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jan 2024 pada 11.03
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek01`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga_satuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `nama_barang`, `qty`, `harga_satuan`) VALUES
('A001', 'Le Mineral', 2, 2000),
('A002', 'Aqua', 3, 3000),
('A003', 'RON88', 10, 1500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `userid` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`userid`, `nama`, `jabatan`, `level`) VALUES
('admin', 'Susanto', 'admin', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_log_user`
--

CREATE TABLE `tbl_log_user` (
  `userid` varchar(10) DEFAULT NULL,
  `log_time` timestamp NULL DEFAULT current_timestamp(),
  `log_ip` varchar(20) DEFAULT NULL,
  `log_kom` text DEFAULT NULL,
  `log_lastaction` varchar(50) DEFAULT NULL,
  `log_date_out` datetime DEFAULT NULL,
  `log_status` tinyint(4) DEFAULT NULL,
  `log_id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_log_user`
--

INSERT INTO `tbl_log_user` (`userid`, `log_time`, `log_ip`, `log_kom`, `log_lastaction`, `log_date_out`, `log_status`, `log_id`, `tanggal`) VALUES
('babang', '2023-12-12 06:42:12', '::1', 'B1-21', '/project01/index.php/signin/login', '2023-12-12 13:42:12', 0, 1, '2023-12-12'),
('babang', '2023-12-12 06:59:37', '::1', 'B1-21', '/project01/index.php/signin/login', '2023-12-12 13:59:37', 0, 2, '2023-12-12'),
('babang', '2023-12-12 06:59:58', '::1', 'B1-21', '/project01/index.php/signin/login', '2023-12-12 13:59:58', 0, 3, '2023-12-12'),
('babang', '2023-12-12 07:43:36', '::1', 'B1-21', '/project01/index.php/signin/login', '2023-12-12 14:43:36', 0, 4, '2023-12-12'),
('babang', '2023-12-12 07:44:38', '::1', 'B1-21', '/project01/index.php/signin/login', '2023-12-12 14:44:38', 0, 5, '2023-12-12'),
('bobo', '2023-12-12 07:46:16', '::1', 'B1-21', '/project01/index.php/signin/login', '2023-12-12 14:46:16', 0, 6, '2023-12-12'),
('www', '2023-12-12 07:47:16', '::1', 'B1-21', '/project01/index.php/signin/login', '2023-12-12 14:47:16', 1, 7, '2023-12-12'),
('www', '2023-12-12 07:47:56', '::1', 'B1-21', '/project01/index.php/signin/login', '2023-12-12 14:47:56', 1, 8, '2023-12-12'),
('www', '2023-12-12 07:48:04', '::1', 'B1-21', '/project01/index.php/signin/login', '2023-12-12 14:48:04', 1, 9, '2023-12-12'),
('www', '2023-12-12 07:49:03', '::1', 'B1-21', '/project01/index.php/signin/login', '2023-12-12 14:49:03', 1, 10, '2023-12-12'),
('www', '2023-12-12 07:53:30', '::1', 'B1-21', '/project01/index.php/signin/login', '2023-12-12 14:53:30', 1, 11, '2023-12-12'),
('www', '2023-12-12 07:54:01', '::1', 'B1-21', '/project01/index.php/signin/login', '2023-12-12 14:54:01', 1, 12, '2023-12-12'),
('www', '2023-12-12 08:00:23', '::1', 'B1-21', '/project01/index.php/signin/login', '2023-12-12 15:00:23', 1, 13, '2023-12-12'),
('www', '2023-12-12 08:03:24', '::1', 'B1-21', '/project01/index.php/signin/login', '2023-12-12 15:03:24', 1, 14, '2023-12-12'),
('www', '2023-12-12 08:09:41', '::1', 'B1-21', '/project01/index.php/signin/login', '2023-12-12 15:09:41', 1, 15, '2023-12-12'),
('www', '2023-12-12 08:09:48', '::1', 'B1-21', '/project01/index.php/signin/login', '2023-12-12 15:09:48', 1, 16, '2023-12-12'),
('www', '2023-12-12 08:38:21', '::1', 'B1-21', '/project01/index.php/signin/login', '2023-12-12 15:38:21', 1, 17, '2023-12-12'),
('www', '2023-12-12 08:38:26', '::1', 'B1-21', '/project01/index.php/signin/login', '2023-12-12 15:38:26', 1, 18, '2023-12-12'),
('www', '2023-12-12 08:38:34', '::1', 'B1-21', '/project01/index.php/signin/login', '2023-12-12 15:38:34', 1, 19, '2023-12-12'),
('www', '2023-12-12 08:42:11', '::1', 'B1-21', '/projek01/index.php/signin/login', '2023-12-12 15:42:11', 1, 20, '2023-12-12'),
('www', '2023-12-12 08:48:30', '::1', 'B1-21', '/projek01/index.php/signin/login', '2023-12-12 15:48:30', 1, 21, '2023-12-12'),
('www', '2023-12-12 08:49:34', '::1', 'B1-21', '/projek01/index.php/signin/login', '2023-12-12 15:49:34', 1, 22, '2023-12-12'),
('www', '2023-12-12 09:00:29', '::1', 'B1-21', '/projek01/index.php/signin/login', '2023-12-12 16:00:29', 1, 23, '2023-12-12'),
('admin', '2023-12-12 09:01:35', '::1', 'B1-21', '/projek01/index.php/signin/login', '2023-12-12 16:01:35', 1, 24, '2023-12-12'),
('admin', '2023-12-12 09:13:08', '::1', 'B1-21', '/projek01/index.php/signin/login', '2023-12-12 16:13:08', 0, 25, '2023-12-12'),
('admin', '2023-12-19 06:11:57', '::1', 'B1-21', '/projek01/index.php/signin/login', '2023-12-19 13:11:57', 0, 26, '2023-12-19'),
('admin', '2023-12-19 08:51:14', '::1', 'B1-21', '/projek01/index.php/signin/login', '2023-12-19 15:51:14', 0, 27, '2023-12-19'),
('admin', '2024-01-09 06:40:44', '::1', 'B1-21', '/projek01/index.php/signin/login', '2024-01-09 13:40:44', 0, 28, '2024-01-09'),
('admin', '2024-01-16 06:12:59', '::1', 'B1-21', '/projek01/index.php/signin/login', '2024-01-16 13:12:59', 0, 29, '2024-01-16'),
('admin', '2024-01-16 06:14:15', '::1', 'B1-21', '/projek01/index.php/signin/login', '2024-01-16 13:14:15', 0, 30, '2024-01-16'),
('admin', '2024-01-16 06:17:53', '::1', 'B1-21', '/projek01/index.php/signin/login', '2024-01-16 13:17:53', 0, 31, '2024-01-16'),
('admin', '2024-01-16 06:36:08', '::1', 'B1-21', '/projek01/index.php/signin/login', '2024-01-16 13:36:08', 0, 32, '2024-01-16'),
('admin', '2024-01-16 07:17:57', '::1', 'B1-21', '/projek01/index.php/signin/login', '2024-01-16 14:17:57', 0, 33, '2024-01-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pembeli`
--

CREATE TABLE `tbl_pembeli` (
  `id` int(11) NOT NULL,
  `userid` varchar(10) DEFAULT NULL,
  `nama_pembeli` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `telepon` varchar(13) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `tgl_regis` datetime DEFAULT NULL,
  `foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_pembeli`
--

INSERT INTO `tbl_pembeli` (`id`, `userid`, `nama_pembeli`, `alamat`, `telepon`, `email`, `jenis_kelamin`, `tgl_regis`, `foto`) VALUES
(6, 'PB0001', 'Maman', 'dsdgdfgdfgfd', '081111111111', 'Maman@gmail.com', 'Laki-laki', NULL, NULL),
(7, 'PB0002', 'Mamad', 'dfsdgdsg', '081111111111', 'mamad@gmail.com', 'Laki-laki', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `userid` varchar(10) DEFAULT NULL,
  `password` text DEFAULT NULL COMMENT 'menggunakan MD5',
  `level` int(11) DEFAULT NULL COMMENT '0=>Super Admin\r\n1=>Admin\r\n2=>Owner\r\n3=>Pembeli',
  `status` int(11) DEFAULT NULL COMMENT '0= non-aktif 1= aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`userid`, `password`, `level`, `status`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 1, 1),
('babang', '9f42ba58fd72ddf7e20d2457f660a981', 0, 1),
('babu', '827ccb0eea8a706c4c34a16891f84e7b', 2, 1),
('bobo', '21232f297a57a5a743894a0e4a801fc3', 1, 1),
('joko', 'd5f098aa9b2bdb1ef7afa70b00f2d928', 1, 1),
('joko12', 'd20d481c5693134fec616cdb80373197', 0, 1),
('joko13', 'd584822999faac4f59a8c65aa8b3dd6e', 2, 1),
('www', '202cb962ac59075b964b07152d234b70', 1, 1),
(NULL, 'e10adc3949ba59abbe56e057f20f883e', 3, 1),
('PB0001', 'e10adc3949ba59abbe56e057f20f883e', 3, 1),
('PB0001', 'e10adc3949ba59abbe56e057f20f883e', 3, 1),
('PB0002', 'e10adc3949ba59abbe56e057f20f883e', 3, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user_toko`
--

CREATE TABLE `tbl_user_toko` (
  `id` int(11) NOT NULL,
  `userid` varchar(10) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `posisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`userid`);

--
-- Indeks untuk tabel `tbl_log_user`
--
ALTER TABLE `tbl_log_user`
  ADD PRIMARY KEY (`log_id`);

--
-- Indeks untuk tabel `tbl_pembeli`
--
ALTER TABLE `tbl_pembeli`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_user_toko`
--
ALTER TABLE `tbl_user_toko`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_log_user`
--
ALTER TABLE `tbl_log_user`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `tbl_pembeli`
--
ALTER TABLE `tbl_pembeli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_user_toko`
--
ALTER TABLE `tbl_user_toko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
