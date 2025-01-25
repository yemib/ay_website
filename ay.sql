-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2019 at 10:22 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ay`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `created_at`, `updated_at`, `username`, `password`) VALUES
(2, '2019-08-17 10:14:14', '2019-08-17 10:14:14', 'username', 'password'),
(3, '2019-08-17 10:14:25', '2019-08-17 10:14:25', 'next', 'passworf');

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `facebook` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinterest` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone1` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone2` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`id`, `created_at`, `updated_at`, `facebook`, `twitter`, `google`, `pinterest`, `youtube`, `linkedin`, `instagram`, `phone1`, `phone2`) VALUES
(1, '2019-08-16 15:47:04', '2019-08-17 14:21:29', 'facebook', 'twitter', 'googl', 'pinte', ' ', ' ', ' ', '09094335653', '98932342322');

-- --------------------------------------------------------

--
-- Table structure for table `fonts`
--

CREATE TABLE `fonts` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `created_at`, `updated_at`, `image`) VALUES
(1, '2019-08-17 10:52:30', '2019-08-19 05:05:56', 0x2f706963747572655f6c6f676f2f313334313639333332342e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_12_20_161011_create_registers_table', 1),
(4, '2019_01_13_105737_create_pages_table', 1),
(5, '2019_01_13_143703_create_page_contents_table', 1),
(6, '2019_01_14_073120_create_admin_users_table', 1),
(7, '2019_01_28_154236_create_logos_table', 1),
(8, '2019_01_28_164531_create_contact_details_table', 1),
(9, '2019_02_09_202325_create_colors_table', 1),
(10, '2019_02_09_202433_create_fonts_table', 1),
(11, '2019_08_13_155842_create_services_table', 1),
(12, '2019_08_13_210001_create_posts_table', 1),
(13, '2019_08_13_210101_create_slidders_table', 1),
(14, '2019_08_13_210214_create_pagesses_table', 1),
(15, '2019_08_14_075924_create_servicesses_table', 2),
(16, '2019_08_17_103903_create_admins_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longblob NOT NULL,
  `publish` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `created_at`, `updated_at`, `title`, `body`, `publish`) VALUES
(1, '2019-08-16 13:45:09', '2019-08-19 04:54:12', 'About us', 0x3c703e3c62723e3c2f703e, 'yes'),
(3, '2019-08-16 13:53:53', '2019-08-19 06:54:43', 'Consumer Protection', 0x3c703e3c62723e3c2f703e, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `pagesses`
--

CREATE TABLE `pagesses` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page_contents`
--

CREATE TABLE `page_contents` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `servicesses`
--

CREATE TABLE `servicesses` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longblob NOT NULL,
  `image` longblob NOT NULL,
  `publish` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `servicesses`
--

INSERT INTO `servicesses` (`id`, `created_at`, `updated_at`, `title`, `body`, `image`, `publish`) VALUES
(15, '2019-08-14 18:40:39', '2019-08-19 07:01:47', 'Local moving', 0x3c703e5765206f6666657220612070726f66657373696f6e616c6c7920747261696e656420616e64206261636b67726f756e6420636865636b6564206d6f76696e67207465616d20746f20656e7375726520796f75722062656c6f6e67696e6773206172652068616e646c65642077697468206361726520616e64207468617420796f7572206d6f76652072756e7320736d6f6f74686c792e3c2f703e, 0x2f706963747572655f7365727669632f313933373131343833382e6a7067, 'yes'),
(17, '2019-08-14 19:11:25', '2019-08-19 04:32:36', 'Long-distance moving', 0x3c703e5768657468657220796f7526727371756f3b7265206d6f76696e67206163726f737320746f776e206f72206163726f73732074686520636f756e7472792c20776526727371756f3b6c6c2067657420796f752074686572652e205765207370656369616c697a6520696e206c6f6e672d64697374616e6365206d6f76696e672c206b656570696e6720796f7572206974656d73207361666520616e642073656375726520616c6f6e6720746865207761792077697468207468652073616d6520637573746f6d6572207365727669636520657863656c6c656e6365206f75722072657075746174696f6e20776173206275696c742075706f6e2e3c2f703e, 0x2f706963747572655f7365727669632f313037363531393539372e6a7067, 'yes'),
(18, '2019-08-14 19:12:21', '2019-08-19 04:35:06', 'Packing Services', 0x3c703e266e6273703b5765206f6666657220612076617269657479206f66207061636b696e672073657276696365732c2066726f6d206a757374206120666577206974656d7320746f20616e20656e7469726520686f6d65206f7220627573696e6573732e20496620796f7526727371756f3b7265206c6f6f6b696e6720746f20646f20697420796f757273656c662c206f7572206c6f636174696f6e7320636172727920616c6c206f6620746865206e656365737361727920737570706c6965732e3c2f703e, 0x2f706963747572655f7365727669632f313132303438373838302e6a7067, 'yes'),
(19, '2019-08-14 19:14:53', '2019-08-19 04:37:26', 'Storage', 0x3c703e496620796f7526727371756f3b726520696e206265747765656e20686f6d65732c20636f6d706c6574696e6720686f6d652072656e6f766174696f6e732c206f72206a757374206e656564206120736f6c7574696f6e20666f72206974656d73207468617420776f6e26727371756f3b742066697420696e7369646520796f757220686f6d652c2066696e64696e67206120706c61636520666f7220796f7572206974656d732063616e20626520747269636b792e204f7572206f6e736974652073746f7261676520756e6974732063616e2070726f7669646520796f7520776974682073746f7261676520666c65786962696c6974792c2073686f7274206f72206c6f6e672d7465726d2e3c2f703e, 0x2f706963747572655f7365727669632f3139343631353233382e6a7067, 'yes'),
(20, '2019-08-14 19:17:33', '2019-08-19 07:01:53', 'Boxes & Supplies', 0x3c703e456e737572696e6720796f7520686176652074686520726967687420737570706c69657320616e6420626f78657320746f20636f6d706c65746520796f7572206e65787420686f6d65206f7220627573696e657373206d6f7665206973206372756369616c20746f207468652073756363657373206f6620746865206d6f76652c20616e64206c75636b696c7920776526727371756f3b766520676f7420796f7520636f76657265642e205765206f66666572206120776964652073656c656374696f6e206f6620636f6d70657469746976656c7920707269636564206d6f76696e6720626f78657320616e64207061636b696e6720737570706c696573206174206f7572206c6f636174696f6e7320616c6c206163726f73732074686520636f756e7472792e3c2f703e, 0x2f706963747572655f7365727669632f313830313039323136322e6a7067, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `slidders`
--

CREATE TABLE `slidders` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` longblob NOT NULL,
  `publish` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slidders`
--

INSERT INTO `slidders` (`id`, `created_at`, `updated_at`, `image`, `publish`) VALUES
(10, '2019-08-19 04:22:45', '2019-08-19 06:59:24', 0x2f70696374757265732f3534383431323336372e6a7067, 'yes'),
(11, '2019-08-19 04:22:55', '2019-08-19 06:59:29', 0x2f70696374757265732f3734343438313537332e6a7067, 'yes'),
(12, '2019-08-19 04:23:01', '2019-08-19 06:59:33', 0x2f70696374757265732f3535303630373336382e6a7067, 'yes'),
(13, '2019-08-19 04:23:09', '2019-08-19 06:59:37', 0x2f70696374757265732f3733343535313030302e6a7067, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fonts`
--
ALTER TABLE `fonts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagesses`
--
ALTER TABLE `pagesses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_contents`
--
ALTER TABLE `page_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicesses`
--
ALTER TABLE `servicesses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slidders`
--
ALTER TABLE `slidders`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `fonts`
--
ALTER TABLE `fonts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pagesses`
--
ALTER TABLE `pagesses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `page_contents`
--
ALTER TABLE `page_contents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `servicesses`
--
ALTER TABLE `servicesses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `slidders`
--
ALTER TABLE `slidders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
