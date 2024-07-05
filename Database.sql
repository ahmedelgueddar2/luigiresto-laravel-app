-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2024 at 10:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(5, 'Pasta', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis nobis', '1692606158-Pasta.jpg', '2023-08-21 15:22:38', '2023-12-20 10:29:55'),
(6, 'Steakes', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis nobis', '1692606370-Stakes.jpg', '2023-08-21 15:26:10', '2023-08-21 15:38:40'),
(7, 'Dessert', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis nobis', '1692606479-Desert.jpg', '2023-08-21 15:27:59', '2023-08-21 15:39:17'),
(8, 'French', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis nobis', '1692606509-French.jpg', '2023-08-21 15:28:29', '2023-08-21 15:40:45'),
(9, 'Specials', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In, asperiores.', '1692611150-Specials.jpg', '2023-08-21 16:45:50', '2023-08-21 16:45:50'),
(10, 'Pizza', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In, asperiores.', '1692611279-Pizza.jpg', '2023-08-21 16:47:59', '2023-08-21 16:47:59');

-- --------------------------------------------------------

--
-- Table structure for table `category_menu`
--

CREATE TABLE `category_menu` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_menu`
--

INSERT INTO `category_menu` (`category_id`, `menu_id`) VALUES
(5, 4),
(5, 5),
(5, 7),
(6, 8),
(6, 9),
(7, 10),
(8, 10),
(7, 11),
(7, 12),
(8, 12),
(8, 13),
(9, 11),
(10, 7),
(9, 12),
(9, 7),
(10, 15),
(9, 15);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `description`, `image`, `price`, `created_at`, `updated_at`) VALUES
(4, 'Fixed Pasta', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In, asperiores.', '1692609665-Fixed Pasta.jpg', 100.01, '2023-08-20 00:30:16', '2023-12-20 10:31:13'),
(5, 'English Pasts', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In, asperiores.', '1692609858-English Pasts.jpg', 100.01, '2023-08-20 00:31:28', '2023-08-21 16:24:18'),
(7, 'Pastal Coral', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In, asperiores.', '1692609924-Pastal Coral.jpg', 200.01, '2023-08-21 16:25:24', '2023-08-21 16:25:24'),
(8, 'Clean Stake', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In, asperiores.', '1692610068-Clean Stake.jpg', 201.01, '2023-08-21 16:27:48', '2023-08-21 16:27:48'),
(9, 'Bufallo Stake', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In, asperiores.', '1692610158-Bufallo Stake.jpg', 500.01, '2023-08-21 16:29:18', '2023-08-21 16:29:18'),
(10, 'Dinner pie', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In, asperiores.', '1692610392-Dinner pie.jpg', 102.01, '2023-08-21 16:33:12', '2023-08-21 16:33:12'),
(11, 'Cream Rolls', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In, asperiores.', '1692610550-Dersert.jpg', 300.01, '2023-08-21 16:35:50', '2023-08-21 17:59:33'),
(12, 'Sauced Fries', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In, asperiores.', '1692610646-Sauced Fries.jpg', 300.01, '2023-08-21 16:37:26', '2023-08-21 16:37:26'),
(13, 'Sea Soup', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In, asperiores.', '1692610688-Sea Soup.jpg', 300.01, '2023-08-21 16:38:08', '2023-08-21 16:38:08'),
(15, 'Chicken Pizza', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In, asperiores.', '1703071993-Chicken Pizza.jpg', 100.01, '2023-12-20 10:33:13', '2023-12-20 10:33:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(20, '2023_08_16_103507_create_category_menu_table', 2),
(43, '2014_10_12_000000_create_users_table', 3),
(44, '2014_10_12_100000_create_password_resets_table', 3),
(45, '2019_08_19_000000_create_failed_jobs_table', 3),
(46, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(47, '2023_08_13_101443_create_categories_table', 3),
(48, '2023_08_13_102207_create_menus_table', 3),
(49, '2023_08_13_102414_create_tables_table', 3),
(50, '2023_08_13_102645_create_reservations_table', 3),
(51, '2023_08_16_143057_create_category_menu_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel_number` varchar(255) NOT NULL,
  `res_date` datetime NOT NULL,
  `table_id` bigint(20) UNSIGNED NOT NULL,
  `guest_number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `first_name`, `last_name`, `email`, `tel_number`, `res_date`, `table_id`, `guest_number`, `created_at`, `updated_at`) VALUES
(14, 'Daniel', 'Chucks', 'chucks@gmail.com', '0908683685', '2023-12-21 18:00:00', 7, 4, '2023-12-20 10:41:19', '2023-12-20 10:41:19'),
(17, 'Mike', 'Olu', 'chucks@gmail.com', '070625255', '2023-12-22 20:00:00', 9, 3, '2023-12-20 11:02:24', '2023-12-20 11:02:24');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guest_number` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'available',
  `location` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `name`, `guest_number`, `status`, `location`, `created_at`, `updated_at`) VALUES
(7, 'Table 1', 4, 'unavailable', 'front', '2023-12-20 10:37:52', '2023-12-20 11:01:33'),
(8, 'Table 2', 2, 'available', 'inside', '2023-12-20 10:42:04', '2023-12-20 10:42:04'),
(9, 'Table 3', 5, 'available', 'outside', '2023-12-20 10:46:39', '2023-12-20 10:46:39'),
(10, 'Table 4', 3, 'available', 'inside', '2023-12-20 10:47:03', '2023-12-20 10:55:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` varchar(255) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$8pnTwBMxJ7479UvMjlzgaO2g5u9zKED3JkPTsHoRo7efMzveqh2S6', '1', NULL, '2023-08-20 00:15:00', '2023-08-20 00:15:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_menu`
--
ALTER TABLE `category_menu`
  ADD KEY `category_menu_category_id_foreign` (`category_id`),
  ADD KEY `category_menu_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations_table_id_foreign` (`table_id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_menu`
--
ALTER TABLE `category_menu`
  ADD CONSTRAINT `category_menu_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_menu_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_table_id_foreign` FOREIGN KEY (`table_id`) REFERENCES `tables` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
