-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 30, 2021 at 08:55 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_27_160500_create_overtimes_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `overtimes`
--

CREATE TABLE `overtimes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `day_date` date NOT NULL,
  `start` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `finish` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ot` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activity` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cek` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `overtimes`
--

INSERT INTO `overtimes` (`id`, `id_user`, `day_date`, `start`, `finish`, `ot`, `project_no`, `activity`, `location`, `cek`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-01-01', '17.00', '20.00', NULL, NULL, 'Assssssssssssssssssss', 'ssssssssssssssssss', NULL, '2021-01-29 15:44:37', '2021-01-29 15:44:37'),
(2, 1, '2021-01-02', '17.00', '20.00', NULL, NULL, 'zzzzzzzzzzzz', 'zzzzzzzzzzzzzz', NULL, '2021-01-29 15:44:59', '2021-01-29 15:44:59'),
(3, 1, '2021-01-03', '08:00', '20.00', NULL, NULL, 'ddddddddd', 'dsssssssssss', NULL, '2021-01-29 15:45:22', '2021-01-29 15:45:22');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@email.com', '$2y$10$z2/0y2.Lr1ylweL1IrUnhuwKMNJwl3a4bJH/bb0445nC1u.UZKuvO', '2021-01-29 14:45:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '/images/avatar/default.jpg',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@email.com', '/images/avatar/1611928638.png', NULL, '$2y$10$zRDLKkZD54faTjxS7PXZyeKyR2XgfskfpDepqPTo6rg2VY.FH.3NG', NULL, '2021-01-29 13:57:18', '2021-01-29 13:57:18'),
(2, 'user', 'user@email.com', '/images/avatar/default.jpg', NULL, '$2y$10$omBtNlZxOAGCOm.qBNYL4exPkIx17pTHIQosiuRDh0nsjo/1OnXGm', NULL, '2021-01-29 15:03:58', '2021-01-29 15:03:58'),
(3, 'daffi', 'daffi@email.com', '/images/avatar/1611932782.jpg', NULL, '$2y$10$S4f1NQIVfhIhw.agPuD7Kujov.F7ybfrspig6PYT.JeiZt.tQZuHG', NULL, '2021-01-29 15:06:22', '2021-01-29 15:06:22'),
(4, 'luthfi', 'luthfi@email.com', '/images/avatar/1611932887.jpg', NULL, '$2y$10$CrYvnZSckDTHyTKQUeE77.V3mdRPloJFuR.BC3GZWKGUi1wuv0ZXa', NULL, '2021-01-29 15:08:07', '2021-01-29 15:08:07'),
(5, 'sylvi', 'sylvi@email.com', '/images/avatar/1611932982.jpg', NULL, '$2y$10$cVorlcs2m62HOp8PcFcWj.Qw1CRiDKrdqu6fwIl1FYItlQy5StSAi', NULL, '2021-01-29 15:09:43', '2021-01-29 15:09:43'),
(6, 'pelanggan', 'pelanggan@email.com', '/images/avatar/default.jpg', NULL, '$2y$10$toVipF/u/otNYFbSagfboOFl1BBE3XC56cxVtYb8UGGgFPDtW045i', NULL, '2021-01-29 15:10:58', '2021-01-29 15:10:58'),
(7, 'pemilik', 'pemilik@email.com', '/images/avatar/default.jpg', NULL, '$2y$10$xi1FkXBKnf19b3ako2uj0eGHCINNxfSkHXViqT6ZZkMLtlhyQ21sO', NULL, '2021-01-29 15:11:30', '2021-01-29 15:11:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overtimes`
--
ALTER TABLE `overtimes`
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
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `overtimes`
--
ALTER TABLE `overtimes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
