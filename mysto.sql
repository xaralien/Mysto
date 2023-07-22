-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jun 2023 pada 10.23
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysto`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gudang`
--

CREATE TABLE `gudang` (
  `id_block` varchar(2) NOT NULL,
  `status_block` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `gudang`
--

INSERT INTO `gudang` (`id_block`, `status_block`) VALUES
('A1', 'Setengah'),
('A2', 'SepaKosong'),
('A3', 'Setengah'),
('A4', 'Separuh'),
('A5', 'Kosong'),
('A6', 'Kosong'),
('A7', 'Setengah'),
('A8', 'Setengah'),
('A9', 'Kosong'),
('B1', 'Kosong'),
('B2', 'Kosong'),
('B3', 'Kosong'),
('B4', 'Kosong'),
('B5', 'Kosong'),
('B6', 'Kosong'),
('B7', 'Kosong'),
('B8', 'Kosong'),
('B9', 'Kosong'),
('C1', 'Kosong'),
('C2', 'Kosong'),
('C3', 'Kosong'),
('C4', 'Kosong'),
('C5', 'Kosong'),
('C6', 'Kosong'),
('C7', 'Kosong'),
('C8', 'Kosong'),
('C9', 'Kosong'),
('D1', 'Kosong'),
('D2', 'Kosong'),
('D3', 'Kosong'),
('D4', 'Kosong'),
('D5', 'Kosong'),
('D6', 'Kosong'),
('D7', 'Kosong'),
('D8', 'Kosong'),
('D9', 'Kosong'),
('E1', 'Kosong'),
('E2', 'Kosong'),
('E3', 'Kosong'),
('E4', 'Kosong'),
('E5', 'Kosong'),
('E6', 'Kosong'),
('E7', 'Kosong'),
('E8', 'Kosong'),
('E9', 'Kosong'),
('F1', 'Kosong'),
('F2', 'Kosong'),
('F3', 'Kosong'),
('F4', 'Kosong'),
('F5', 'Kosong'),
('F6', 'Kosong'),
('F7', 'Kosong'),
('F8', 'Kosong'),
('F9', 'Kosong'),
('G1', 'Kosong'),
('G2', 'Kosong'),
('G3', 'Kosong'),
('G4', 'Kosong'),
('G5', 'Kosong'),
('G6', 'Kosong'),
('G7', 'Kosong'),
('G8', 'Kosong'),
('G9', 'Kosong'),
('H1', 'Kosong'),
('H2', 'Kosong'),
('H3', 'Kosong'),
('H4', 'Kosong'),
('H5', 'Kosong'),
('H6', 'Kosong'),
('H7', 'Kosong'),
('H8', 'Kosong'),
('H9', 'Kosong'),
('I1', 'Kosong'),
('I2', 'Kosong'),
('I3', 'Kosong'),
('I4', 'Kosong'),
('I5', 'Kosong'),
('I6', 'Kosong'),
('I7', 'Kosong'),
('I8', 'Kosong'),
('I9', 'Kosong');

-- --------------------------------------------------------

--
-- Struktur dari tabel `histori`
--

CREATE TABLE `histori` (
  `id_histori` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_block` varchar(2) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `status` varchar(40) NOT NULL,
  `jumlah_produk` int(11) NOT NULL,
  `sisa_produk` int(11) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `histori`
--

INSERT INTO `histori` (`id_histori`, `id_user`, `id_block`, `id_produk`, `status`, `jumlah_produk`, `sisa_produk`, `tanggal`) VALUES
(101, 23, 'A1', 1, 'Input Barang', 1, 0, '2023-06-27 16:05:34'),
(102, 23, 'A2', 1, 'Input Barang', 2, 0, '2023-06-27 16:06:39'),
(103, 20, 'A2', 1, 'Output Barang', 1, 1, '2023-06-27 16:10:45'),
(104, 20, 'A2', 1, 'Output Barang', 1, 0, '2023-06-27 16:11:38'),
(105, 17, 'A2', 1, 'Input Barang', 4, 0, '2023-06-27 16:12:21'),
(106, 17, 'A2', 1, 'Output Barang', 2, 2, '2023-06-27 16:12:30'),
(107, 17, 'A1', 1, 'Output Barang', 1, 0, '2023-06-28 14:35:44'),
(108, 17, 'A1', 1, 'Input Barang', 2, 0, '2023-06-28 14:35:53'),
(109, 17, 'A1', 1, 'Output Barang', 1, 1, '2023-06-28 14:35:56'),
(110, 17, 'A1', 1, 'Input Barang', 999, 1, '2023-06-28 14:53:42'),
(111, 17, 'A1', 1, 'Output Barang', 1, 999, '2023-06-28 14:55:37'),
(112, 17, 'A1', 1, 'Output Barang', 1, 998, '2023-06-28 14:56:49'),
(113, 17, 'A1', 1, 'Input Barang', 2, 998, '2023-06-28 14:57:05'),
(114, 17, 'A1', 1, 'Input Barang', 1, 1000, '2023-06-28 14:57:30'),
(115, 17, 'A1', 1, 'Input Barang', 1, 1001, '2023-06-28 14:59:44'),
(116, 17, 'A1', 1, 'Input Barang', 1, 0, '2023-06-28 14:59:44'),
(117, 17, 'A1', 1, 'Input Barang', 1, 1002, '2023-06-28 14:59:53'),
(118, 17, 'A1', 1, 'Input Barang', 1, 0, '2023-06-28 14:59:53'),
(119, 17, 'A2', 1, 'Input Barang', 750, 2, '2023-06-28 15:00:08'),
(120, 17, 'A2', 1, 'Input Barang', 750, 0, '2023-06-28 15:00:08'),
(121, 17, 'A3', 1, 'Input Barang', 500, 0, '2023-06-28 15:00:17'),
(122, 17, 'A4', 1, 'Input Barang', 250, 0, '2023-06-28 15:00:27'),
(123, 17, 'A4', 1, 'Input Barang', 1, 250, '2023-06-28 15:01:05'),
(124, 17, 'A4', 1, 'Input Barang', 1, 0, '2023-06-28 15:01:05'),
(125, 17, 'A3', 1, 'Input Barang', 1, 500, '2023-06-28 15:01:18'),
(126, 17, 'A3', 1, 'Input Barang', 1, 0, '2023-06-28 15:01:18'),
(127, 17, 'A1', 1, 'Output Barang', 1000, 3, '2023-06-28 15:05:41'),
(128, 17, 'A1', 1, 'Input Barang', 2, 3, '2023-06-28 15:06:24'),
(129, 17, 'A1', 1, 'Input Barang', 2, 0, '2023-06-28 15:06:24'),
(130, 17, 'A1', 5, 'Input Barang', 250, 0, '2023-06-28 15:18:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `isigudang`
--

CREATE TABLE `isigudang` (
  `id_produk_gudang` int(11) NOT NULL,
  `id_block` varchar(2) NOT NULL,
  `id_produk` int(4) NOT NULL,
  `jumlah_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `isigudang`
--

INSERT INTO `isigudang` (`id_produk_gudang`, `id_block`, `id_produk`, `jumlah_produk`) VALUES
(48, 'A2', 1, 752),
(49, 'A1', 1, 5),
(50, 'A3', 1, 501),
(51, 'A4', 1, 251),
(52, 'A1', 5, 250);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(4) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
('A', 'Produk Makanan'),
('B', 'Bahan Makanan'),
('C', 'Material Cair'),
('D', 'Material Padat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `nama_sub_kategori` varchar(30) NOT NULL,
  `jumlah_satuan_produk` int(10) NOT NULL,
  `satuan_produk` varchar(10) NOT NULL,
  `harga_produk` int(15) NOT NULL,
  `deskripsi_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `nama_sub_kategori`, `jumlah_satuan_produk`, `satuan_produk`, `harga_produk`, `deskripsi_produk`) VALUES
(1, 'Beras Rose Band', 'Beras', 50, 'Liter', 1400000, 'Makanan kaleng berisi Ikan Makarel dengan Saus Tomat yang lezat.'),
(2, 'Indomie Goreng Rasa Ayam Goren', 'Mie Instant', 1, 'Dus', 150000, 'Mie Instant dengan rasa Ayam Goreng'),
(3, 'Sarden Botan Kaleng Besar', 'Makanan Kaleng', 1, 'Dus', 600000, 'Beras Putih asli dari Indonesia. Produk Local'),
(4, 'Bang Bang', 'Makanan Ringan', 1, 'Dus', 35000, 'Bang Bang dengan Waffer yang di selimuti karamel dan coklat'),
(5, 'Tepung Terigu Komachi', 'Bahan Adonan', 1, 'KG', 21000, 'Tepung Komachi merupakan jenis tepung terigu premix yang dibuat dengan biji gandum pilihan lalu dicampur dengan bahan-bahan tambahan seperti pengembang dan pengempuk serta memiliki kadar gluten yang tinggi.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` int(2) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Staff Gudang'),
(3, 'Penyuplai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `satuan`
--

CREATE TABLE `satuan` (
  `jenis_satuan` varchar(10) NOT NULL,
  `gram_per_satuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `subkategori`
--

CREATE TABLE `subkategori` (
  `nama_sub_kategori` varchar(30) NOT NULL,
  `id_kategori` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `subkategori`
--

INSERT INTO `subkategori` (`nama_sub_kategori`, `id_kategori`) VALUES
('Kayu', 'C'),
('Makanan Ringan', 'A'),
('Makanan Kaleng', 'A'),
('Beras', 'A'),
('Mie Instant', 'A'),
('Bahan Adonan', 'B');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(7) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(40) NOT NULL,
  `nomor_tlp` char(15) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `tanggal_input` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `email`, `nomor_tlp`, `image`, `password`, `role_id`, `is_active`, `tanggal_input`) VALUES
(17, 'admin', '', 'admin@gmail.com', '1', '', '$2y$10$szDY3w/tr7XJACaCfolz0OHaFoZLjGIXGuU68zlK9RIFkdibq6BnW', 1, 1, '0000-00-00 00:00:00'),
(24, 'user@gmail.com', 'rumah user', 'user@gmail.com', '156464', 'default.jpg', '$2y$10$qiEMz4eXaA6U8HVPFizLB.DksV.0fq6R7t.Ng6ospf67GFWL1zXty', 3, 1, '0000-00-00 00:00:00'),
(25, 'staff', 'staff', 'staff@gmail.com', '56464654', 'default.jpg', '$2y$10$B9XeWYc.ACy7aP/0lch1Me6BifzFkgYtnMcueHEczwymcSFSRMOh.', 2, 1, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`id_block`);

--
-- Indeks untuk tabel `histori`
--
ALTER TABLE `histori`
  ADD PRIMARY KEY (`id_histori`),
  ADD KEY `id_block` (`id_block`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indeks untuk tabel `isigudang`
--
ALTER TABLE `isigudang`
  ADD PRIMARY KEY (`id_produk_gudang`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `histori`
--
ALTER TABLE `histori`
  MODIFY `id_histori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT untuk tabel `isigudang`
--
ALTER TABLE `isigudang`
  MODIFY `id_produk_gudang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
