-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2021 at 03:22 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` text NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `harga`, `stok`, `gambar`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(6, 'hijab apik', 100000, 3, '1607613051_c0339335f47781fa64c4.jpg', 1, '2020-12-10 09:10:51', 1, '2021-01-28 07:16:32'),
(7, 'kaos apik', 30000, 8, '1608217264_d1782e7b8374f8808605.jpg', 1, '2020-12-17 09:01:04', NULL, NULL),
(8, 'celana apik', 100000, 9, '1608217320_10c5c2115518390d080e.jpg', 1, '2020-12-17 09:02:00', NULL, NULL),
(9, 'topi apik', 40000, 11, '1608217349_1c40d549a0512df62d8a.jpg', 1, '2020-12-17 09:02:29', NULL, NULL),
(10, 'jaket mbois', 300000, 6, '1608217395_e5f37c3b0068520973f0.jpg', 1, '2020-12-17 09:03:15', NULL, NULL),
(13, 'barang1', 200000, 6, '1611839733_271c9182e006aa3a9586.jpg', 1, '2021-01-28 07:15:33', NULL, NULL),
(14, 'barang2', 50, 3, '1611842023_d654d260ef0327d8fdfb.png', 1, '2021-01-28 07:53:43', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_barang` int(11) UNSIGNED NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `komentar` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2020-11-22-133039', 'App\\Database\\Migrations\\User', 'default', 'App', 1606053947, 1),
(2, '2020-11-22-134652', 'App\\Database\\Migrations\\Barang', 'default', 'App', 1606053947, 1),
(3, '2020-11-22-135336', 'App\\Database\\Migrations\\Transaksi', 'default', 'App', 1606053947, 1),
(4, '2020-11-22-135956', 'App\\Database\\Migrations\\Komentar', 'default', 'App', 1606053947, 1),
(5, '2020-11-22-141849', 'App\\Database\\Migrations\\TransaksiAlterFk', 'default', 'App', 1606054827, 2),
(6, '2020-11-22-141940', 'App\\Database\\Migrations\\KomentarAlterFk', 'default', 'App', 1606054828, 2),
(7, '2020-12-17-122344', 'App\\Database\\Migrations\\TransaksiAlterAlamat', 'default', 'App', 1608208048, 3);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_barang` int(11) UNSIGNED NOT NULL,
  `id_pembeli` int(11) UNSIGNED NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `ongkir` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_barang`, `id_pembeli`, `jumlah`, `total_harga`, `created_by`, `created_date`, `updated_by`, `updated_date`, `alamat`, `ongkir`, `status`) VALUES
(1, 7, 2, 1, 47000, 2, '2021-01-19 07:12:06', NULL, NULL, 'surabaya', 17000, 0),
(2, 10, 8, 1, 337000, 8, '2021-01-22 10:31:56', NULL, NULL, 'Buduran', 37000, 0),
(3, 7, 6, 1, 39000, 6, '2021-01-22 23:35:25', NULL, NULL, 'jaksel', 9000, 0),
(4, 6, 10, 2, 222000, 10, '2021-01-28 07:23:12', NULL, NULL, 'surabaya', 22000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `salt` text NOT NULL,
  `role` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `salt`, `role`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 'fadlan', 'c7683ba6e074df89c877433107a38a92', '5fc79487625bf5.48810566', 0, 0, '2020-12-02 07:20:07', NULL, NULL),
(2, 'alanalan', '355751e7b49af142e6e57052ead7ded6', '5fdb512bba4038.62989783', 1, 0, '2020-12-17 06:38:03', NULL, NULL),
(6, 'user1', 'b978a77738da5ec1d095460ac8beb538', '60097ef3455d50.35185522', 1, 0, '2021-01-21 07:17:39', NULL, NULL),
(7, 'user2', '219c39d8b7c37b94ebe61231815cc5a4', '60097f26e81c79.28899833', 1, 0, '2021-01-21 07:18:30', NULL, NULL),
(8, 'user3', 'b98f11ff6059f0f0f3b84b758d7811f1', '600afd958a2996.72695538', 1, 0, '2021-01-22 10:30:13', NULL, NULL),
(9, 'dimas', '41a7fc1afb38f536e0e6f2b6cd908d72', '600bb67a7cbe05.57302769', 1, 0, '2021-01-22 23:39:06', NULL, NULL),
(10, 'rifai', '9c6d68aa10031288475f1c57852c8bcd', '600bb6abcd93b9.95170610', 1, 0, '2021-01-22 23:39:55', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `komentar_id_user_foreign` (`id_user`),
  ADD KEY `komentar_id_barang_foreign` (`id_barang`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksi_id_pembeli_foreign` (`id_pembeli`),
  ADD KEY `transaksi_id_barang_foreign` (`id_barang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_id_barang_foreign` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `komentar_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_id_barang_foreign` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_id_pembeli_foreign` FOREIGN KEY (`id_pembeli`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
