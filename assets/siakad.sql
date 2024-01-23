-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306:3306
-- Waktu pembuatan: 23 Jan 2024 pada 05.01
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(8, 'Skenario 8', 'Intensif - Mekanis - Semi-dry process - kopi greenbean'),
(9, 'Skenario 9', 'Intensif - Mekanis - Dry process - Kopi greenbean'),
(10, 'Skenario 10', 'Organik - Manual - Wet process - Kopi greenbean'),
(11, 'Skenario 11', 'Organik - Manual - Semi-dry process - Kopi greenbean'),
(12, 'Skenario 12', 'Organik - Manual - Dry process - Kopi greenbean'),
(13, 'Skenario 13', 'Organik - Mekanis - Wet process - Kopi greenbean'),
(14, 'Skenario 14', 'Organik - Mekanis - Semi-dry process - Kopi greenbean'),
(15, 'Skenario 15', 'Organik - Mekanis - Dry process - Kopi greenbean');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_skenario`
--

CREATE TABLE `hasil_skenario` (
  `kode_skenario` int(11) NOT NULL,
  `id_skenario` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_skenario` varchar(20) NOT NULL,
  `skenario` varchar(60) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasil_skenario`
--

INSERT INTO `hasil_skenario` (`kode_skenario`, `id_skenario`, `id_user`, `nama`, `jenis_skenario`, `skenario`, `lahan`, `alsintan`, `pengadaan_bibit`, `persiapan_lahan`, `penanaman`, `penyulaman`, `pemupukan`, `pengendalian_opt`, `pemangkasan`, `pemanenan`, `lahan_dan_bangunan`, `pembersihan_buah`, `pulping`, `fermentasi`, `pembersih_kopi_hs`, `pengeringan`, `hulling`, `sortasi_greenbean`, `pengemasan`, `total_biaya`) VALUES
(73, 5, 23, 'Aditya', 'Skenario 5', 'Intensif, Manual, Semi-dry Process', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 0, 0, 14, 15, 16, 17, 153),
(74, 6, 23, 'Aditya', 'Skenario 6', 'Intensif, Manual, Dry Process', 16, 15, 14, 13, 12, 11, 10, 9, 8, 7, 6, 5, 0, 0, 0, 4, 3, 2, 1, 136),
(82, 1, 23, 'set', 'Skenario 1', 'Intensif, Kimiawi, Wet Process', 1, 500, 500, 500, 500, 500, 6, 500, 500, 500, 500, 500, 500, 5005, 500, 500, 500, 500, 500, 13012),
(83, 2, 22, 'set', 'Skenario 2', 'Intensif, Kimiawi, Semi-dry Process', 6, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 170),
(90, 4, 20, 'faisal', 'Skenario 4', 'Intensif, Manual, Wet Process', 4, 5, 8, 7, 9, 0, 5, 6, 5, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 59);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`, `lokasi`, `nama_gh`) VALUES
(20, 'faisal', 'faisal@gmail.com', 'avatar3.png', '$2y$10$Et4hRwkHROc9fU0zHGTNmOpz9NUAyQSEcIEuuY8R8B.nR1EqHpkpm', 2, 1, 1704514865, 'Jakarta', 'faisal'),
(21, 'bank-sampah', 'Internets420@gmail.com', 'avatar3.png', '$2y$10$uSs//JW32neq3TvR6KJBYecl3kvduA/8gomdC4gt38SmBvRkoof9e', 2, 1, 1704722143, 'Jakarta', 'al'),
(22, 'edrikct', 'edrick@gmail.com', 'avatar3.png', '$2y$10$yWygr/HY6duHwSYVxkbtj.5WngqEE4rs2SyzblDItxjyp4KKwEYTC', 2, 1, 1704722301, 'Bekasi', 'faisal'),
(23, 'Adityal', 'admin@gmail.com', 'avatar3.png', '$2y$10$xRQpcAzQ3bYycXCaAE4qzOL2gNkphb23aooNod/3poPYB5o8guv2q', 1, 1, 1704807562, 'Lampung baru', 'adit'),
(25, 'img', 'internets@gmail.com', 'avatar3.png', '$2y$10$ZG2wq6wmxkBszXUnmOcgoOTklvNoYy5CSu7AoxrN/H1ceD2GH97.a', 1, 1, 1705232827, 'Beka', 'adit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'ADMINISTRATOR'),
(2, 'USER');

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
  ADD PRIMARY KEY (`kode_skenario`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_skenario` (`id_skenario`);

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
  MODIFY `kode_skenario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `hasil_skenario`
--
ALTER TABLE `hasil_skenario`
  ADD CONSTRAINT `hasil_skenario_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hasil_skenario_ibfk_2` FOREIGN KEY (`id_skenario`) REFERENCES `bagan_skenario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
