-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jan 2024 pada 14.52
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakad`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bagan_skenario`
--

CREATE TABLE `bagan_skenario` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bagan_skenario`
--

INSERT INTO `bagan_skenario` (`id`, `nama`, `deskripsi`) VALUES
(1, 'Skenario 1', 'Intensif - Kimiawi - Wet process - Kopi greenbean'),
(2, 'Skenario 2', 'Intensif - Kimiawi - Semi-dry process - Kopi greenbean'),
(3, 'Skenario 3', 'Intensif - Kimiawi - Dry process - Kopi greenbean'),
(4, 'Skenario 4', 'Intensif - Manual- Wet process - Kopi greenbean'),
(5, 'Skenario 5', 'Intensif - Manual - Semi-dry process - Kopi greenbean'),
(6, 'Skenario 6', 'Intensif - Manual- Dry process - Kopi greenbean'),
(7, 'Skenario 7', 'Intensif - Mekanis - Wet process - Kopi greenbean'),
(15, 'Skenario 8', 'Intensif - Mekanis - Semi-dry process - kopi greenbean'),
(16, 'Skenario 9', 'Intensif - Mekanis - Dry process - Kopi greenbean'),
(17, 'Skenario 10', 'Organik - Manual - Wet process - Kopi greenbean'),
(18, 'Skenario 11', 'Organik - Manual - Semi-dry process - Kopi greenbean'),
(19, 'Skenario 12', 'Organik - Manual - Dry process - Kopi greenbean'),
(20, 'Skenario 13', 'Organik - Mekanis - Wet process - Kopi greenbean'),
(21, 'Skenario 14', 'Organik - Mekanis - Semi-dry process - Kopi greenbean'),
(22, 'Skenario 14', 'Organik - Mekanis - Dry process - Kopi greenbean');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_skenario`
--

CREATE TABLE `hasil_skenario` (
  `kode_skenario` int(11) NOT NULL,
  `id_skenario` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jenis_skenario` varchar(20) NOT NULL,
  `skenario` varchar(30) NOT NULL,
  `lahan` int(10) DEFAULT NULL,
  `alsintan` int(10) DEFAULT NULL,
  `pengadaan_bibit` int(10) NOT NULL,
  `persiapan_lahan` int(10) NOT NULL,
  `penanaman` int(10) NOT NULL,
  `penyulaman` int(10) NOT NULL,
  `pemupukan` int(10) NOT NULL,
  `pengendalian_opt` int(10) NOT NULL,
  `pemangkasan` int(10) NOT NULL,
  `pemanenan` int(10) NOT NULL,
  `lahan_dan_bangunan` int(10) NOT NULL,
  `pembersihan_buah` int(10) NOT NULL,
  `pulping` int(10) NOT NULL,
  `fermentasi` int(10) NOT NULL,
  `pembersih_kopi_hs` int(10) NOT NULL,
  `pengeringan` int(10) NOT NULL,
  `hulling` int(10) NOT NULL,
  `sortasi_greenbean` int(10) NOT NULL,
  `pengemasan` int(10) NOT NULL,
  `total_biaya` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hasil_skenario`
--

INSERT INTO `hasil_skenario` (`kode_skenario`, `id_skenario`, `id_user`, `jenis_skenario`, `skenario`, `lahan`, `alsintan`, `pengadaan_bibit`, `persiapan_lahan`, `penanaman`, `penyulaman`, `pemupukan`, `pengendalian_opt`, `pemangkasan`, `pemanenan`, `lahan_dan_bangunan`, `pembersihan_buah`, `pulping`, `fermentasi`, `pembersih_kopi_hs`, `pengeringan`, `hulling`, `sortasi_greenbean`, `pengemasan`, `total_biaya`) VALUES
(32, 1, 24, 'Skenario 1', 'Intensif, Kimiawi, Wet Process', 2000, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2005),
(33, 2, 24, 'Skenario 2', 'Intensif, Kimiawi, Semi-dry Pr', 0, 0, 0, 2000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 2002),
(34, 3, 24, 'Skenario 3', 'Intensif, Kimiawi, Dry Process', 2000, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2003),
(35, 15, 24, 'Skenario 15', 'Organik, Mekanis, Dry Process', 0, 0, 0, 0, 0, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 12),
(41, 3, 24, 'Skenario 3', 'Intensif, Kimiawi, Dry Process', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5),
(44, 1, 23, 'Skenario 1', 'Intensif, Kimiawi, Wet Process', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 3),
(45, 12, 23, 'Skenario 12', 'Organik, Manual, Dry Process', 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rancangan_skenario`
--

CREATE TABLE `rancangan_skenario` (
  `id_skenario` int(2) NOT NULL,
  `skenario` varchar(20) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `input1` varchar(50) NOT NULL,
  `input2` varchar(50) NOT NULL,
  `input3` varchar(50) NOT NULL,
  `input4` varchar(50) NOT NULL,
  `input5` varchar(50) NOT NULL,
  `input6` varchar(50) NOT NULL,
  `input7` varchar(50) NOT NULL,
  `input8` varchar(50) NOT NULL,
  `input9` varchar(50) NOT NULL,
  `input10` varchar(50) NOT NULL,
  `input11` varchar(50) NOT NULL,
  `input12` varchar(50) NOT NULL,
  `input13` varchar(50) NOT NULL,
  `input14` varchar(50) NOT NULL,
  `input15` varchar(50) NOT NULL,
  `input16` varchar(50) NOT NULL,
  `input17` varchar(50) NOT NULL,
  `input18` varchar(50) NOT NULL,
  `input19` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `rancangan_skenario`
--

INSERT INTO `rancangan_skenario` (`id_skenario`, `skenario`, `deskripsi`, `input1`, `input2`, `input3`, `input4`, `input5`, `input6`, `input7`, `input8`, `input9`, `input10`, `input11`, `input12`, `input13`, `input14`, `input15`, `input16`, `input17`, `input18`, `input19`) VALUES
(1, 'Skenario 1', 'Intensif, Kimiawi, Wet Process', 'Lahan', 'Alsintan', 'Pengadaan Bibit', 'Persiapan Lahan', 'Penanaman', 'Penyulaman', 'Pemupukan', 'Pengendalian OPT', 'Pemangkasan', 'Pemanenan', 'Lahan dan Bangunan', 'Pembersihan Buah Kopi', 'Pulping ', 'Fermentasi', 'Pembersihan Kopi HS', 'Pengeringan', 'Hulling', 'Sortasi Greenbean', 'Pengemasan'),
(2, 'Skenario 2', 'Intensif, Kimiawi, Semi-dry Process', 'Lahan', 'Alsintan', 'Pengadaan Bibit', 'Persiapan Lahan', 'Penanaman', 'Penyulaman', 'Pemupukan', 'Pengendalian OPT', 'Pemangkasan', 'Pemanenan', 'Lahan dan Bangunan', 'Pembersihan Buah Kopi', 'Pulping ', 'x', 'x', 'Pengeringan', 'Hulling', 'Sortasi Greenbean', 'Pengemasan'),
(3, 'Skenario 3', 'Intensif, Kimiawi, Dry Process', 'Lahan', 'Alsintan', 'Pengadaan Bibit', 'Persiapan Lahan', 'Penanaman', 'Penyulaman', 'Pemupukan', 'Pengendalian OPT', 'Pemangkasan', 'Pemanenan', 'Lahan dan Bangunan', 'Pembersihan Buah Kopi', 'x', 'x', 'x', 'Pengeringan', 'Hulling', 'Sortasi Greenbean', 'Pengemasan'),
(4, 'Skenario 4', 'Intensif, Manual, Wet Process', 'Lahan', 'Alsintan', 'Pengadaan Bibit', 'Persiapan Lahan', 'Penanaman', 'Penyulaman', 'Pemupukan', 'Pengendalian OPT', 'Pemangkasan', 'Pemanenan', 'Lahan dan Bangunan', 'Pembersihan Buah Kopi', 'Pulping ', 'Fermentasi', 'Pembersihan Kopi HS', 'Pengeringan', 'Hulling', 'Sortasi Greenbean', 'Pengemasan'),
(5, 'Skenario 5', 'Intensif, Manual, Semi-dry Process', 'Lahan', 'Alsintan', 'Pengadaan Bibit', 'Persiapan Lahan', 'Penanaman', 'Penyulaman', 'Pemupukan', 'Pengendalian OPT', 'Pemangkasan', 'Pemanenan', 'Lahan dan Bangunan', 'Pembersihan Buah Kopi', 'Pulping ', 'x', 'x', 'Pengeringan', 'Hulling', 'Sortasi Greenbean', 'Pengemasan'),
(6, 'Skenario 6', 'Intensif, Manual, Dry Process', 'Lahan', 'Alsintan', 'Pengadaan Bibit', 'Persiapan Lahan', 'Penanaman', 'Penyulaman', 'Pemupukan', 'Pengendalian OPT', 'Pemangkasan', 'Pemanenan', 'Lahan dan Bangunan', 'Pembersihan Buah Kopi', 'x', 'x', 'x', 'Pengeringan', 'Hulling', 'Sortasi Greenbean', 'Pengemasan'),
(7, 'Skenario 7', 'Intensif, Mekanis, Wet Process', 'Lahan', 'Alsintan', 'Pengadaan Bibit', 'Persiapan Lahan', 'Penanaman', 'Penyulaman', 'Pemupukan', 'Pengendalian OPT', 'Pemangkasan', 'Pemanenan', 'Lahan dan Bangunan', 'Pembersihan Buah Kopi', 'Pulping ', 'Fermentasi', 'Pembersihan Kopi HS', 'Pengeringan', 'Hulling', 'Sortasi Greenbean', 'Pengemasan'),
(8, 'Skenario 8', 'Intensif, Mekanis, Semi-dry Process', 'Lahan', 'Alsintan', 'Pengadaan Bibit', 'Persiapan Lahan', 'Penanaman', 'Penyulaman', 'Pemupukan', 'Pengendalian OPT', 'Pemangkasan', 'Pemanenan', 'Lahan dan Bangunan', 'Pembersihan Buah Kopi', 'Pulping ', 'x', 'x', 'Pengeringan', 'Hulling', 'Sortasi Greenbean', 'Pengemasan'),
(9, 'Skenario 9', 'Intensif, Mekanis, Dry Process', 'Lahan', 'Alsintan', 'Pengadaan Bibit', 'Persiapan Lahan', 'Penanaman', 'Penyulaman', 'Pemupukan', 'Pengendalian OPT', 'Pemangkasan', 'Pemanenan', 'Lahan dan Bangunan', 'Pembersihan Buah Kopi', 'x', 'x', 'x', 'Pengeringan', 'Hulling', 'Sortasi Greenbean', 'Pengemasan'),
(10, 'Skenario 10', 'Organik, Manual, Wet Process', 'Lahan', 'Alsintan', 'Pengadaan Bibit', 'Persiapan Lahan', 'Penanaman', 'Penyulaman', 'Pemupukan', 'Pengendalian OPT', 'Pemangkasan', 'Pemanenan', 'Lahan dan Bangunan', 'Pembersihan Buah Kopi', 'Pulping ', 'Fermentasi', 'Pembersihan Kopi HS', 'Pengeringan', 'Hulling', 'Sortasi Greenbean', 'Pengemasan'),
(11, 'Skenario 11', 'Organik, Manual, Semi-dry Process', 'Lahan', 'Alsintan', 'Pengadaan Bibit', 'Persiapan Lahan', 'Penanaman', 'Penyulaman', 'Pemupukan', 'Pengendalian OPT', 'Pemangkasan', 'Pemanenan', 'Lahan dan Bangunan', 'Pembersihan Buah Kopi', 'Pulping ', 'x', 'x', 'Pengeringan', 'Hulling', 'Sortasi Greenbean', 'Pengemasan'),
(12, 'Skenario 12', 'Organik, Manual, Dry Process', 'Lahan', 'Alsintan', 'Pengadaan Bibit', 'Persiapan Lahan', 'Penanaman', 'Penyulaman', 'Pemupukan', 'Pengendalian OPT', 'Pemangkasan', 'Pemanenan', 'Lahan dan Bangunan', 'Pembersihan Buah Kopi', 'x', 'x', 'x', 'Pengeringan', 'Hulling', 'Sortasi Greenbean', 'Pengemasan'),
(13, 'Skenario 13', 'Organik, Mekanis, Wet Process', 'Lahan', 'Alsintan', 'Pengadaan Bibit', 'Persiapan Lahan', 'Penanaman', 'Penyulaman', 'Pemupukan', 'Pengendalian OPT', 'Pemangkasan', 'Pemanenan', 'Lahan dan Bangunan', 'Pembersihan Buah Kopi', 'Pulping ', 'Fermentasi', 'Pembersihan Kopi HS', 'Pengeringan', 'Hulling', 'Sortasi Greenbean', 'Pengemasan'),
(14, 'Skenario 14', 'Organik, Mekanis, Semi-dry Process', 'Lahan', 'Alsintan', 'Pengadaan Bibit', 'Persiapan Lahan', 'Penanaman', 'Penyulaman', 'Pemupukan', 'Pengendalian OPT', 'Pemangkasan', 'Pemanenan', 'Lahan dan Bangunan', 'Pembersihan Buah Kopi', 'Pulping ', 'x', 'x', 'Pengeringan', 'Hulling', 'Sortasi Greenbean', 'Pengemasan'),
(15, 'Skenario 15', 'Organik, Mekanis, Dry Process', 'Lahan', 'Alsintan', 'Pengadaan Bibit', 'Persiapan Lahan', 'Penanaman', 'Penyulaman', 'Pemupukan', 'Pengendalian OPT', 'Pemangkasan', 'Pemanenan', 'Lahan dan Bangunan', 'Pembersihan Buah Kopi', 'x', 'x', 'x', 'Pengeringan', 'Hulling', 'Sortasi Greenbean', 'Pengemasan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `password` varchar(260) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `nama_gh` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`, `lokasi`, `nama_gh`) VALUES
(11, 'Irfan Azmi Al-Hayat', 'irfan6699@gmail.com', 'avatar31.png', '$2y$10$N07IzieINXBHQmgGyWsBjeCZcjN1/POjg.Td8lSZsVHDrwEg9Faaa', 2, 1, 1657883071, 'Dramaga, Bogor', 'Greenhouse Leuwikopo'),
(12, 'Nafri A', 'nafri6699@gmail.com', 'avatar3.png', '$2y$10$UHUPM930wjqNWy3YNnxluuvBG0GBZz0u1AMTe0maZSqjVlZVpE7YK', 1, 1, 1657883082, NULL, NULL),
(13, 'Bob si Petani', 'bob@gmail.com', 'avatar53.png', '$2y$10$cPr7P/nyP5QiZ9eyw2yUz.ShScW7En7vjm9Q1wnp/jbapQiE0r2Ny', 2, 1, 1657944496, 'Dramaga, Bogor', 'Greenhouse Selada 1 Bob'),
(14, 'irfan', 'irfan2@gmail.com', 'avatar3.png', '$2y$10$oxXnOuUE3mj1SNIVnPWnnuCRcqKkt6017jpjMOKmmz/xSEPW4wyTq', 2, 1, 1658910305, 'asdas', 'asds'),
(18, 'userbaru', 'userbaru@gmail.com', 'avatar3.png', '$2y$10$3HPFGiEA.dIopk7bet6PT.HwUKJHtci/IaxFb4yVj9znA8l7oPMae', 2, 1, 1660742327, 'Zimbabwe', 'house baru'),
(19, 'userbaru2', 'userbaru2@gmail.com', 'avatar3.png', '$2y$10$7oGtugRvAzPEUM.WoAS5ZOT5EKC6xgYGFPhOgHcxHSklJEuC9Jq86', 2, 1, 1661269270, 'Wakanda', 'house baru'),
(20, 'faisal', 'faisal@gmail.com', 'avatar3.png', '$2y$10$jJGy87DeppWZEDIaQvWAeuEzmT7wzAWmIKJb8ikrf1OTmb9LVTQM6', 2, 1, 1704514865, 'Jakarta', 'faisal'),
(21, 'bank-sampah', 'Internets420@gmail.com', 'avatar3.png', '$2y$10$uSs//JW32neq3TvR6KJBYecl3kvduA/8gomdC4gt38SmBvRkoof9e', 2, 1, 1704722143, 'jak', 'al'),
(22, 'set', 'edrick@gmail.com', 'avatar3.png', '$2y$10$yWygr/HY6duHwSYVxkbtj.5WngqEE4rs2SyzblDItxjyp4KKwEYTC', 2, 1, 1704722301, 'Bekasi', 'faisal'),
(23, 'Aditya', 'admin@gmail.com', 'avatar3.png', '$2y$10$ZuU7YNiM3cCLrqYPW5g3aeZJhQRe80p2oFIB39fOOebhVrlwsPGRK', 2, 1, 1704807562, 'Lampung', 'adit'),
(24, 'img', 'internets@gmail.com', 'avatar3.png', '$2y$10$LUvGo2cI/VMq/03cV4m1nOUCwo0IEsZT7tumE8TTLkl4ZZynojK0C', 2, 1, 1705232827, 'Bekasi', 'adit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'ADMIN'),
(2, 'USER');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'ADMINISTRATOR'),
(2, 'USER');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `title` varchar(128) DEFAULT NULL,
  `url` varchar(128) DEFAULT NULL,
  `icon` varchar(128) DEFAULT NULL,
  `class` varchar(50) NOT NULL,
  `group_menu` int(5) NOT NULL DEFAULT 0,
  `is_active` int(11) DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `class`, `group_menu`, `is_active`, `urutan`) VALUES
(2, 2, 'My Profile', 'myprofile', 'fas fa-fw fa-user', '', 0, 1, 2),
(8, 1, 'Menu Management', 'admin/menu', 'fa-solid fa-folder', '', 0, 1, 2),
(9, 1, 'Sub Menu Management', 'admin/submenu', 'fa-solid fa-folder-open', '', 0, 1, 3),
(24, 2, 'Interpretasi', 'interpretasi', 'fas fa-fw fa-chart-line', '', 0, 1, 9),
(35, 2, 'Dashboard', 'dashboard', 'fas fa-fw fa-tachometer-alt', '', 0, 1, 1),
(40, 1, 'Role', 'admin/role', 'fa solid fa-user-tie', '', 0, 1, 1),
(59, 2, 'Tambah Data', 'lci', NULL, '', 0, 1, 5),
(60, 2, 'Data History', 'datahistory', NULL, 'disable-link', 0, 1, 6),
(61, 2, 'Skenario Usaha', 'skenario', NULL, '', 0, 1, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_sub_menu`
--

CREATE TABLE `user_sub_sub_menu` (
  `id` int(5) NOT NULL,
  `userId` int(11) NOT NULL,
  `group_menu` int(5) NOT NULL,
  `title` varchar(30) NOT NULL,
  `url` varchar(50) NOT NULL,
  `urutan` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `user_sub_sub_menu`
--

INSERT INTO `user_sub_sub_menu` (`id`, `userId`, `group_menu`, `title`, `url`, `urutan`, `date_created`) VALUES
(1, 11, 4, 'Data', 'masterdata', 1, 0),
(72, 11, 1, 'Pembibitan', 'lcia?proses=Pembibitan', 1, 1658495044),
(73, 11, 3, 'Pembibitan', 'lci?proses=Pembibitan', 1, 1658495044),
(74, 13, 2, 'Dalam Greenhouse', 'datlingdalam', 0, 0),
(75, 13, 2, 'Luar Greenhouse', 'datlingluar', 0, 0),
(77, 11, 1, 'Pemeliharaan', 'lcia?proses=Pemeliharaan', 2, 1658495120),
(78, 11, 3, 'Pemeliharaan', 'lci?proses=Pemeliharaan', 2, 1658495120),
(83, 11, 1, 'Pemanenan', 'lcia?proses=Pemanenan', 3, 1658495185),
(84, 11, 3, 'Pemanenan', 'lci?proses=Pemanenan', 3, 1658495185),
(85, 13, 1, 'Pembibitan', 'lcia?proses=Pembibitan', 1, 1658500837),
(86, 13, 3, 'Pembibitan', 'lci?proses=Pembibitan', 1, 1658500837),
(87, 13, 1, 'Pemeliharaan', 'lcia?proses=Pemeliharaan', 2, 1658500843),
(88, 13, 3, 'Pemeliharaan', 'lci?proses=Pemeliharaan', 2, 1658500843),
(89, 13, 1, 'Pemanenan', 'lcia?proses=Pemanenan', 3, 1658500853),
(90, 13, 3, 'Pemanenan', 'lci?proses=Pemanenan', 3, 1658500853),
(99, 11, 4, 'Proses', 'masterdata/proses', 2, 0),
(100, 11, 4, 'Tahun', 'masterdata/Tahun', 3, 0),
(101, 13, 4, 'Proses', 'masterdata/proses', 2, 0),
(102, 13, 4, 'Tahun', 'masterdata/Tahun', 3, 0),
(105, 13, 4, 'Data', 'masterdata', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bagan_skenario`
--
ALTER TABLE `bagan_skenario`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hasil_skenario`
--
ALTER TABLE `hasil_skenario`
  ADD PRIMARY KEY (`kode_skenario`);

--
-- Indeks untuk tabel `rancangan_skenario`
--
ALTER TABLE `rancangan_skenario`
  ADD PRIMARY KEY (`id_skenario`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `role_id` (`role_id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role menu` (`role_id`),
  ADD KEY `menu` (`menu_id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indeks untuk tabel `user_sub_sub_menu`
--
ALTER TABLE `user_sub_sub_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bagan_skenario`
--
ALTER TABLE `bagan_skenario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `hasil_skenario`
--
ALTER TABLE `hasil_skenario`
  MODIFY `kode_skenario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT untuk tabel `user_sub_sub_menu`
--
ALTER TABLE `user_sub_sub_menu`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`);

--
-- Ketidakleluasaan untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD CONSTRAINT `menu` FOREIGN KEY (`menu_id`) REFERENCES `user_menu` (`id`),
  ADD CONSTRAINT `role menu` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`);

--
-- Ketidakleluasaan untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD CONSTRAINT `user_sub_menu_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `user_menu` (`id`);

--
-- Ketidakleluasaan untuk tabel `user_sub_sub_menu`
--
ALTER TABLE `user_sub_sub_menu`
  ADD CONSTRAINT `user_sub_sub_menu_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
