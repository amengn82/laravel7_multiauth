-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2023 at 12:09 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel7_multiauth`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `menu_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 4, 'ordered', '2023-03-06 17:33:45', '2023-03-06 17:36:44'),
(2, 2, 7, 'ordered', '2023-03-06 17:36:02', '2023-03-06 17:36:44'),
(3, 2, 9, 'ordered', '2023-03-06 17:36:11', '2023-03-06 17:36:44'),
(4, 2, 11, 'ordered', '2023-03-06 17:36:16', '2023-03-06 17:36:44'),
(5, 11, 1, 'ordered', '2023-03-06 19:13:25', '2023-03-06 19:13:38'),
(6, 11, 2, 'ordered', '2023-03-06 19:13:28', '2023-03-06 19:13:38'),
(7, 11, 3, 'ordered', '2023-03-06 19:13:32', '2023-03-06 19:13:38'),
(8, 13, 6, 'ordered', '2023-03-06 19:15:24', '2023-03-06 19:15:42'),
(9, 13, 8, 'ordered', '2023-03-06 19:15:29', '2023-03-06 19:15:42'),
(10, 13, 11, 'ordered', '2023-03-06 19:15:34', '2023-03-06 19:15:42'),
(11, 9, 2, 'ordered', '2023-03-06 19:18:23', '2023-03-06 19:18:43'),
(12, 9, 3, 'ordered', '2023-03-06 19:18:27', '2023-03-06 19:18:43'),
(13, 9, 5, 'ordered', '2023-03-06 19:18:31', '2023-03-06 19:18:43'),
(14, 9, 7, 'ordered', '2023-03-06 19:18:38', '2023-03-06 19:18:43');

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
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `image_url`, `detail`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Carrot and mushroom gyros', '23-51-17_rotimenu1.jpeg', 'Vegan', 40.00, '2023-03-06 16:51:17', '2023-03-06 16:51:17'),
(2, 'Chicken shawarma wrap', '23-52-06_rotimenu2.jpg', 'Chicken', 45.00, '2023-03-06 16:52:06', '2023-03-06 16:52:06'),
(3, 'Instant Pot Beef Gyro', '23-52-55_rotimenu3.jpg', 'Beef', 55.00, '2023-03-06 16:52:55', '2023-03-06 16:52:55'),
(4, 'Falafel & shawarma dejaj sandwich', '23-55-51_rotimenu4.jpg', 'Grilled chicken', 55.00, '2023-03-06 16:55:51', '2023-03-06 16:55:51'),
(5, 'Gyro night', '23-56-45_rotimenu5.png', 'Traditional chicken gyro', 55.00, '2023-03-06 16:56:45', '2023-03-06 16:56:45'),
(6, 'Beef and lamb shawarma warps', '23-57-49_rotimenu6.jpg', 'Beef and lamb', 65.00, '2023-03-06 16:57:49', '2023-03-06 16:57:49'),
(7, 'Beef donair', '23-59-56_rotimenu7.jpg', 'Beef', 55.00, '2023-03-06 16:59:56', '2023-03-06 16:59:56'),
(8, 'Chicken donair', '00-01-11_rotimenu8.jpg', 'Chicken', 55.00, '2023-03-06 17:01:11', '2023-03-06 17:01:11'),
(9, 'Falafel donair', '00-02-00_rotimenu9.jpg', 'Vegan', 55.00, '2023-03-06 17:02:00', '2023-03-06 17:02:00'),
(10, 'Kids beef donair', '00-02-40_rotimenu10.jpeg', 'No veggie toppings', 55.00, '2023-03-06 17:02:40', '2023-03-06 17:02:40'),
(11, 'Mixed donair', '00-03-16_rotimenu11.jpg', 'All meat and all toppings', 65.00, '2023-03-06 17:03:16', '2023-03-06 17:03:16');

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
(4, '2023_03_01_205542_create_menus_table', 1),
(5, '2023_03_02_050157_create_carts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, 1, '$2y$10$kLLxtIbrhg.qeGvSf6gqiOSbIr51CoWfcRJ7LwvtH6gbbvxt2M0DW', NULL, '2023-03-06 11:00:25', '2023-03-06 11:00:25'),
(2, 'User1', 'user1@user1.com', NULL, 0, '$2y$10$vwSF.gOHIaBLOQztAtQI9ePTADCFC7DI9PQrOpCyiU4BXAksPe5vu', NULL, '2023-03-06 11:00:25', '2023-03-06 18:00:11'),
(3, 'User2', 'user2@user2.com', NULL, 0, '$2y$10$je8qJ3Mo/k6GCCA1/Igu3uhaahRQMfIcBnx.OCQnkoXa4LymfqU.y', NULL, '2023-03-06 17:42:54', '2023-03-06 17:43:53'),
(4, 'User3', 'user3@user3.com', NULL, 0, '$2y$10$9kGdYliMj0409kBpQkAv8eTcLY4G.KSGtt90hgEr.yNaWmlUD7JRq', NULL, '2023-03-06 17:44:32', '2023-03-06 17:44:32'),
(5, 'User4', 'user4@user4.com', NULL, 0, '$2y$10$XIFTZ1sSQql6CvDl1/zaxuxiMM9fUCXzZBDEcmEIYCixoXGfdGbGW', NULL, '2023-03-06 17:45:37', '2023-03-06 17:46:55'),
(6, 'User5', 'user5@user5.com', NULL, 0, '$2y$10$cixQxUXyf9OUY8iUNi4fy.mp8Cg8KZU8R5dw.1J5x1D8PtjVhMVRG', NULL, '2023-03-06 17:48:08', '2023-03-06 17:48:08'),
(7, 'User6', 'user6@user6.com', NULL, 0, '$2y$10$fcMjTGUQUVAXe/n0WwFWgel952kE5i/PqmurtEooT0oNWnJsEyJ0e', NULL, '2023-03-06 17:48:44', '2023-03-06 17:48:44'),
(8, 'User7', 'user7@user7.com', NULL, 0, '$2y$10$Y3Mzaqy3hqmRB.WNzTdfme2mzxzFGRgzTH/KabYSC5zZC.a.v0a22', NULL, '2023-03-06 17:49:16', '2023-03-06 17:49:16'),
(9, 'User8', 'user8@user8.com', NULL, 0, '$2y$10$ek/tzXIMzj4vjOeRiIreTOsEtRAdogrdpUmlVCvGipqqihIPazrdS', NULL, '2023-03-06 17:50:24', '2023-03-06 17:50:24'),
(10, 'User9', 'user9@user9.com', NULL, 0, '$2y$10$c/niAcmv/Cltt4wRAaClY.oQb1aksQsRGMOxbh9S27qIjamJE.TW2', NULL, '2023-03-06 17:51:34', '2023-03-06 17:51:34'),
(11, 'User10', 'user10@user10.com', NULL, 0, '$2y$10$wdvEgxBNh4fcvkht6CS.BOT78K9RdP3iN11.EHEVDtWUEzWocSk3q', NULL, '2023-03-06 17:52:08', '2023-03-06 17:52:40'),
(12, 'User11', 'user11@user11.com', NULL, 0, '$2y$10$/rJw6KYm1NKtYD1PF39ZdOB.FE9092uelScJUhOB4CUxxQnKqRMFu', NULL, '2023-03-06 17:53:33', '2023-03-06 17:53:33'),
(13, 'User12', 'user12@user12.com', NULL, 0, '$2y$10$4BwkXCnR.yHlkJp3yCrYKO31M68RBY0SwA2Ww8E6PdpvwRMmkYp2C', NULL, '2023-03-06 18:03:10', '2023-03-06 18:03:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
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
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`),
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
