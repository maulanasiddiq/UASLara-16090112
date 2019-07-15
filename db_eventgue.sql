-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2019 at 05:57 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_eventgue`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_event` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_event` date NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `judul_event`, `kategori_id`, `user_id`, `deskripsi`, `gambar`, `tanggal_event`, `lokasi`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Cybereye Community Flutter Workshop', 2, 1, 'Flutter Workshop adalah ..........', '1563205510xiKqNAd5kxFAvWtWFvkenY.jpg', '1970-01-01', 'Jl. Seruni, Slawi, Kab. Tegal', 0, '2019-07-15 08:45:10', '2019-07-15 08:45:10');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_event`
--

CREATE TABLE `kategori_event` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_event`
--

INSERT INTO `kategori_event` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(2, 'Technology', '2019-07-15 08:43:38', '2019-07-15 08:43:38'),
(3, 'Education', '2019-07-15 08:47:06', '2019-07-15 08:47:06');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user_id`, `name`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 'Logout', ' Keluar dari sistem', NULL, '2019-07-15 01:24:34', '2019-07-15 01:24:34'),
(2, 1, 'Login', 'Masuk ke sistem', NULL, '2019-07-15 01:24:45', '2019-07-15 01:24:45'),
(3, 1, 'Logout', ' Keluar dari sistem', NULL, '2019-07-15 01:24:56', '2019-07-15 01:24:56'),
(4, 1, 'Login', 'Masuk ke sistem', NULL, '2019-07-15 01:25:06', '2019-07-15 01:25:06'),
(5, 1, 'Logout', ' Keluar dari sistem', NULL, '2019-07-15 01:27:45', '2019-07-15 01:27:45'),
(6, 1, 'Login', 'Masuk ke sistem', NULL, '2019-07-15 01:27:56', '2019-07-15 01:27:56'),
(7, 1, 'Logout', ' Keluar dari sistem', NULL, '2019-07-15 02:02:42', '2019-07-15 02:02:42'),
(8, 1, 'Login', 'Masuk ke sistem', NULL, '2019-07-15 02:03:00', '2019-07-15 02:03:00'),
(9, 1, 'Logout', ' Keluar dari sistem', NULL, '2019-07-15 02:14:36', '2019-07-15 02:14:36'),
(10, 2, 'Login', 'Masuk ke sistem', NULL, '2019-07-15 02:14:56', '2019-07-15 02:14:56'),
(11, 2, 'Logout', ' Keluar dari sistem', NULL, '2019-07-15 02:26:29', '2019-07-15 02:26:29'),
(12, 1, 'Login', 'Masuk ke sistem', NULL, '2019-07-15 02:40:47', '2019-07-15 02:40:47'),
(13, 1, 'Login', 'Masuk ke sistem', NULL, '2019-07-15 06:21:01', '2019-07-15 06:21:01'),
(14, 1, 'Logout', ' Keluar dari sistem', NULL, '2019-07-15 08:10:16', '2019-07-15 08:10:16'),
(15, 1, 'Login', 'Masuk ke sistem', NULL, '2019-07-15 08:10:29', '2019-07-15 08:10:29'),
(16, 1, 'Logout', ' Keluar dari sistem', NULL, '2019-07-15 08:35:32', '2019-07-15 08:35:32'),
(17, 3, 'Register', 'Registrasi ke sistem', NULL, '2019-07-15 08:40:28', '2019-07-15 08:40:28'),
(18, 3, 'Login', 'Masuk ke sistem', NULL, '2019-07-15 08:40:47', '2019-07-15 08:40:47'),
(19, 3, 'Logout', ' Keluar dari sistem', NULL, '2019-07-15 08:41:09', '2019-07-15 08:41:09'),
(20, 1, 'Login', 'Masuk ke sistem', NULL, '2019-07-15 08:41:36', '2019-07-15 08:41:36'),
(21, 1, 'Logout', ' Keluar dari sistem', NULL, '2019-07-15 08:48:13', '2019-07-15 08:48:13'),
(22, 2, 'Login', 'Masuk ke sistem', NULL, '2019-07-15 08:48:51', '2019-07-15 08:48:51'),
(23, 2, 'Logout', ' Keluar dari sistem', NULL, '2019-07-15 08:49:26', '2019-07-15 08:49:26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_05_04_083522_create_table_kategori_event', 1),
(4, '2019_07_15_073855_create_logs_table', 2),
(6, '2019_07_15_094247_create_events_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'member',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '2019-07-15 00:37:27', '$2y$10$kvnxztTLf60hztRMwq.ELOcbk6MJYGMxpRB/kFqMgf9Rg4NKV2j5m', 'admin', NULL, NULL, '2019-07-15 00:37:27', '2019-07-15 00:37:27'),
(2, 'maulana', 'siddiqmaulanaabdul@gmail.com', NULL, '$2y$10$gob1RE0fP2mcR/0kr20jfOn7MPjxhiuN.65zS73D3YXKi/bxGxi2e', 'member', NULL, NULL, '2019-07-15 00:42:02', '2019-07-15 00:42:02'),
(3, 'member', 'member@gmail.com', NULL, '$2y$10$PeuWK5Chy6Q21H5AhbL2Xe6hQOTz./I0/tLpjTJZ151E2tV1KT/YS', 'member', NULL, NULL, '2019-07-15 08:40:28', '2019-07-15 08:40:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_event`
--
ALTER TABLE `kategori_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_deleted_at_unique` (`email`,`deleted_at`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori_event`
--
ALTER TABLE `kategori_event`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
