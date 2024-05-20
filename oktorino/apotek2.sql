-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Bulan Mei 2024 pada 04.30
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_obat`
--

CREATE TABLE `detail_obat` (
  `id_detail_obat` int(11) NOT NULL,
  `jenis_obat` varchar(64) NOT NULL,
  `efek_samping_obat` varchar(64) NOT NULL,
  `id_obat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detail_obat`
--

INSERT INTO `detail_obat` (`id_detail_obat`, `jenis_obat`, `efek_samping_obat`, `id_obat`) VALUES
(1, 'denam', 'ngantuk', 1),
(2, 'sakit kepala', 'ngantuk', 4),
(3, 'nyeri punggung', 'ngantuk', 5),
(4, 'batuk berdahak', 'rasa mual', 2),
(5, 'batuk tidak berdahak', 'rasa mual', 8),
(6, 'sakit kepala', 'ngantuk', 7),
(7, 'diare', '', 3),
(8, 'masuk angin', 'buang angin', 9),
(9, 'pusing', 'ngantuk', 10),
(10, 'luka luka', 'perih', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail_transaksi` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail_transaksi`, `id_obat`, `id_transaksi`, `harga`) VALUES
(1, 6, 1, 125000),
(2, 2, 2, 25000),
(3, 4, 3, 75000),
(4, 3, 4, 7000),
(5, 7, 5, 50000),
(6, 1, 6, 75000),
(7, 9, 7, 20000),
(8, 8, 8, 30000),
(9, 10, 9, 10000),
(10, 9, 10, 10000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(64) NOT NULL,
  `stock_obat` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `stock_obat`) VALUES
(1, 'Paracetamol', 2),
(2, 'Vicks', 2),
(3, 'Amoxillin', 3),
(4, 'Antangin JRG', 2),
(5, 'Asam Fusidat', 3),
(6, 'Betadine', 1),
(7, 'Panadol', 5),
(8, 'Tapentadol', 5),
(9, 'Tamoxifen', 4),
(10, 'Termorex', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama`, `alamat`, `no_tlp`) VALUES
(1, 'yayan', 'jogja', '081213131'),
(3, 'albert', 'sleman', '0812345678'),
(4, 'joni', 'sleman', '0812345671'),
(5, 'Todo', 'sleman', '0812345672'),
(6, 'Todi', 'codongcatur', '0812345673'),
(7, 'Gilang', 'codongcatur', '0812345674'),
(8, 'Ginanjar', 'bantul', '0812345675'),
(9, 'Ganjar', 'maguwo', '0812345676'),
(10, 'Pranowo', 'maguwo', '0812345677'),
(11, 'Prabowo', 'bantul', '0812345678'),
(12, 'Subianto', 'bantul', '0812345679');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `harga`, `id_pembeli`) VALUES
(1, 25000, 1),
(2, 12500, 1),
(3, 125000, 9),
(4, 25000, 10),
(5, 75000, 7),
(6, 7000, 8),
(7, 50000, 3),
(8, 75000, 4),
(9, 20000, 11),
(10, 30000, 12);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_obat`
--
ALTER TABLE `detail_obat`
  ADD PRIMARY KEY (`id_detail_obat`),
  ADD KEY `fk_detail_obat` (`id_obat`);

--
-- Indeks untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`),
  ADD KEY `fk_detail_transaksi` (`id_transaksi`),
  ADD KEY `fk_obat2` (`id_obat`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indeks untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `fk_pembeli` (`id_pembeli`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_obat`
--
ALTER TABLE `detail_obat`
  MODIFY `id_detail_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_obat`
--
ALTER TABLE `detail_obat`
  ADD CONSTRAINT `fk_detail_obat` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`);

--
-- Ketidakleluasaan untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `fk_detail_transaksi` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`),
  ADD CONSTRAINT `fk_obat2` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_pembeli` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
