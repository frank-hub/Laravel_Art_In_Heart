-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 10, 2018 at 03:48 PM
-- Server version: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `art_in_heart`
--

-- --------------------------------------------------------

--
-- Table structure for table `add__arts`
--

CREATE TABLE `add__arts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cartegory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_cartegory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add__arts`
--

INSERT INTO `add__arts` (`id`, `name`, `cartegory`, `sub_cartegory`, `description`, `price`, `images`, `created_at`, `updated_at`) VALUES
(2, 'FRANKLINE KELVIN KIPRUTO', 'art work', 'Painting', 'a description', 123, 'IMG-20181109-WA0021_1541853628.jpg', '2018-11-10 09:40:28', '2018-11-10 09:40:28'),
(3, 'Sculture 21', 'art work', 'Sculpture', 'a description', 932809, 'IMG-20181109-WA0014_1541855519.jpg', '2018-11-10 10:11:59', '2018-11-10 10:11:59'),
(4, 'Photo', 'art work', 'Photography', 'a description', 3400, 'IMG-20181109-WA0003_1541856158.jpg', '2018-11-10 10:22:38', '2018-11-10 10:22:38');

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `name`, `sub_category`, `description`, `price`, `images`, `created_at`, `updated_at`) VALUES
(1, 'FRANKLINE KELVIN KIPRUTO', 'Feature Art', 'science', 23, 'cover1-_1541841046.jpg', '2018-11-10 06:10:46', '2018-11-10 06:10:46');

-- --------------------------------------------------------

--
-- Table structure for table `discoveries`
--

CREATE TABLE `discoveries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discoveries`
--

INSERT INTO `discoveries` (`id`, `name`, `sub_category`, `description`, `price`, `images`, `created_at`, `updated_at`) VALUES
(4, 'FRANKLINE KELVIN KIPRUTO', 'Art of the week', 'a description', 12, 'cover1-_1541842047.jpg', '2018-11-10 06:27:27', '2018-11-10 06:27:27'),
(5, 'franklime kelvin', 'Feature Art', 'a description', 23, 'IMG-20181109-WA0010_1541846464.jpg', '2018-11-10 07:41:04', '2018-11-10 07:41:04'),
(6, 'The Piece', 'Feature Art', 'a short description', 1200, 'IMG-20181109-WA0017_1541850512.jpg', '2018-11-10 08:48:32', '2018-11-10 08:48:32'),
(7, 'Gift to Sumbi', 'Gift', 'a description', 8000, 'IMG-20181109-WA0006_1541851199.jpg', '2018-11-10 08:59:59', '2018-11-10 08:59:59');

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
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2018_11_09_140309_create_add__arts_table', 2),
(13, '2018_11_10_063007_create_discoveries_table', 2),
(14, '2018_11_10_072414_create_artists_table', 2);

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
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'FRANKLINE KELVIN KIPRUTO', 'franklinekevo@gmail.com', NULL, '$2y$10$ulG./7MW0xUVCtQWlZMNfeC3ec8/M9WDYK.nYyyMegb6jxW9/kCoK', 'Gl2zu9D4L3XHo6CCwJWbOTh3eagy4eotrj94M84PSFzmYzJOkyiaA2DxOt34', '2018-11-10 03:45:17', '2018-11-10 03:45:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add__arts`
--
ALTER TABLE `add__arts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discoveries`
--
ALTER TABLE `discoveries`
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
-- AUTO_INCREMENT for table `add__arts`
--
ALTER TABLE `add__arts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `discoveries`
--
ALTER TABLE `discoveries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
