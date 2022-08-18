-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 18, 2022 at 01:04 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`id`, `title`, `unit`, `created_at`, `updated_at`) VALUES
(2, 'Tomato', 'Nos', '2022-08-09 03:31:16', '2022-08-09 03:32:44'),
(4, 'Salt', 'Gram', '2022-08-09 03:33:36', '2022-08-09 03:33:36'),
(5, 'Sugar', 'Gram', '2022-08-09 03:33:44', '2022-08-09 03:33:44'),
(6, 'Garlic', 'Nos', '2022-08-09 03:33:55', '2022-08-09 03:33:55'),
(7, 'Oil', 'Gram', '2022-08-09 03:34:04', '2022-08-09 03:34:04');

-- --------------------------------------------------------

--
-- Table structure for table `main_categories`
--

CREATE TABLE `main_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_group_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type_of_category` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_categories`
--

INSERT INTO `main_categories` (`id`, `title`, `unit`, `main_group_id`, `created_at`, `updated_at`, `type_of_category`) VALUES
(1, 'Chicken', 'gran', 1, '2022-08-08 11:59:41', '2022-08-09 08:35:57', 'main_category'),
(2, 'Pork ', 'kg', 1, '2022-08-08 12:00:09', '2022-08-09 07:01:36', 'main_category'),
(3, 'Beef', 'kg', 1, '2022-08-08 12:00:21', '2022-08-09 07:01:43', 'main_category'),
(6, 'Fish', 'kg', 2, '2022-08-08 12:12:35', '2022-08-09 07:01:46', 'main_category'),
(13, 'Tomato', 'Nos', 0, '2022-08-09 07:24:09', '2022-08-09 07:24:09', 'ingredients'),
(14, 'Salt', 'Gram', 0, '2022-08-09 07:24:19', '2022-08-09 07:24:19', 'ingredients'),
(15, 'Sugar', 'Gram', 0, '2022-08-09 07:24:29', '2022-08-09 07:24:29', 'ingredients'),
(16, 'Garlic', 'Nos', 0, '2022-08-09 07:24:35', '2022-08-09 07:24:51', 'ingredients'),
(17, 'Oil', 'Gram', 0, '2022-08-09 07:24:46', '2022-08-09 07:24:46', 'ingredients'),
(18, 'Appetizer', 'g', 7, '2022-08-09 07:43:45', '2022-08-09 07:48:42', 'main_category'),
(20, 'Salad', 'g', 8, '2022-08-09 07:47:12', '2022-08-09 07:49:01', 'main_category'),
(21, 'Juice', 'Nos', 9, '2022-08-09 07:51:15', '2022-08-09 07:52:59', 'main_category'),
(22, 'Fruits Juice', 'Nos', 9, '2022-08-09 07:53:26', '2022-08-09 07:53:26', 'main_category'),
(23, 'Wine', 'Case', 9, '2022-08-09 07:53:38', '2022-08-09 07:55:16', 'main_category'),
(24, 'Bottle Beer', '12pk', 9, '2022-08-09 07:54:02', '2022-08-09 07:54:19', 'main_category'),
(25, 'Draft Beer', 'keg', 9, '2022-08-09 07:54:41', '2022-08-09 07:54:41', 'main_category');

-- --------------------------------------------------------

--
-- Table structure for table `main_groups`
--

CREATE TABLE `main_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_groups`
--

INSERT INTO `main_groups` (`id`, `title`, `created_at`, `updated_at`, `category`) VALUES
(1, 'Meat', '2022-08-08 11:33:42', '2022-08-08 11:36:37', 'Food'),
(2, 'Sea Food', '2022-08-08 11:34:12', '2022-08-08 11:36:12', 'Food'),
(3, 'Poultry', '2022-08-08 11:34:23', '2022-08-08 11:36:20', 'Food'),
(4, 'Poduce', '2022-08-08 11:35:32', '2022-08-08 12:24:52', 'Food'),
(5, 'Bar', '2022-08-08 12:18:56', '2022-08-08 12:18:56', 'Bar'),
(7, 'Appetizer', '2022-08-09 07:41:59', '2022-08-09 07:41:59', 'Food'),
(8, 'Salat', '2022-08-09 07:42:14', '2022-08-09 07:42:14', 'Food'),
(9, 'Drink', '2022-08-09 07:42:21', '2022-08-09 07:42:21', 'Bar');

-- --------------------------------------------------------

--
-- Table structure for table `manage_ingredients`
--

CREATE TABLE `manage_ingredients` (
  `id` int(10) UNSIGNED NOT NULL,
  `main_categorie_id` int(11) DEFAULT NULL,
  `sub_group_id` int(11) DEFAULT NULL,
  `number_of_unit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manage_ingredients`
--

INSERT INTO `manage_ingredients` (`id`, `main_categorie_id`, `sub_group_id`, `number_of_unit`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '20', '2000', '2022-08-09 09:24:40', '2022-08-09 09:24:40'),
(2, 2, 2, '20', '2000', '2022-08-09 09:25:57', '2022-08-09 09:25:57'),
(3, 3, 2, '20', '2000', '2022-08-09 09:26:27', '2022-08-09 09:26:27'),
(4, 3, 2, '20', '5000', '2022-08-09 09:26:31', '2022-08-09 09:26:31'),
(5, 2, 2, '1', '2000', '2022-08-09 09:29:42', '2022-08-09 09:29:42'),
(6, 1, 2, '20', '1000', '2022-08-09 09:35:40', '2022-08-09 09:35:40'),
(7, 2, 2, '20', '2000', '2022-08-09 09:37:38', '2022-08-09 09:37:38'),
(8, 2, 2, '2', '20', '2022-08-09 09:38:29', '2022-08-09 09:38:29'),
(22, 1, 1, '20', '10000', '2022-08-09 10:02:27', '2022-08-09 10:02:27'),
(25, 14, 1, '0.5', '5000', '2022-08-09 10:05:10', '2022-08-09 10:05:10'),
(26, 17, 1, '0.3', '20000', '2022-08-09 10:05:50', '2022-08-09 10:05:50'),
(27, 13, 1, '1', '200', '2022-08-09 10:06:16', '2022-08-09 10:06:16'),
(28, 16, 1, '0.5', '0', '2022-08-09 10:07:28', '2022-08-09 10:07:28');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_04_090359_add_user_info_field_to_users_table', 2),
(6, '2022_08_07_132356_create_main_groups_table', 3),
(8, '2022_08_08_175658_add_category_to__table', 5),
(9, '2022_08_08_181612_create_main_categories_table', 6),
(10, '2022_08_07_141722_create_sub_groups_table', 7),
(11, '2022_08_09_095456_create_ingredients_table', 8),
(12, '2022_08_09_132223_add_type_of_category_to_main_categories_table', 9),
(13, '2022_08_09_154427_create_manage_ingredients_table', 10),
(14, '2022_08_09_175529_add_sales_price_to_sub_groups_table', 11);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_groups`
--

CREATE TABLE `sub_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_category_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sales_price` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_groups`
--

INSERT INTO `sub_groups` (`id`, `title`, `photo`, `main_category_id`, `created_at`, `updated_at`, `sales_price`) VALUES
(1, 'Sweet & Sour Chicken', NULL, 1, '2022-08-09 05:56:11', '2022-08-09 05:56:11', NULL),
(2, 'Fried Pork Sticks', NULL, 2, '2022-08-09 06:02:45', '2022-08-09 06:02:45', NULL),
(3, 'Fried Green Leaf', NULL, 7, '2022-08-09 06:11:10', '2022-08-09 06:11:10', NULL),
(4, 'Fried Chicken', NULL, 1, '2022-08-09 07:33:18', '2022-08-09 07:33:18', NULL),
(5, 'French Fries', NULL, 18, '2022-08-09 07:49:28', '2022-08-09 07:49:28', NULL),
(6, 'Chicken Salad', NULL, 20, '2022-08-09 07:49:43', '2022-08-09 07:49:43', NULL),
(7, 'Chicken', NULL, 1, '2022-08-09 11:26:15', '2022-08-09 11:26:15', '5000');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `employee_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc_front_photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc_back_photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `household_member_list` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `employment_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `join_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_contact_person` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_contact_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `employee_id`, `phone`, `passport_photo`, `nrc_number`, `nrc_front_photo`, `nrc_back_photo`, `household_member_list`, `gender`, `address`, `department_id`, `role_id`, `employment_type`, `join_date`, `emergency_contact_person`, `emergency_contact_number`) VALUES
(1, 'Admin', 'admin@pos.com', NULL, '$2y$10$QY5zYqTa4F8hPixXo5ArpOykpL0h2q9y0kn11YM9P/fKEDA3ke1Wq', NULL, '2022-08-07 12:07:32', '2022-08-07 12:07:32', '000001', '09123123123', NULL, '-', NULL, NULL, NULL, NULL, 'YGN', 0, 0, NULL, NULL, NULL, NULL),
(2, 'User', 'user@gmail.com', NULL, '$2y$10$M014.YARYaSyfggtn8k.l.tJMN0HXsT8tzKAd23k1c1eK38Uzn/Fu', NULL, '2022-08-07 05:56:08', '2022-08-07 05:56:08', '000002', NULL, 'documents/RuqhkGOi4drq2aE9yQeRTJvdkcLrj612EEhO81o8.png', NULL, NULL, NULL, NULL, 'Male', 'YGN', 0, 0, 'Contract', '2022-08-07T18:55', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_categories`
--
ALTER TABLE `main_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_groups`
--
ALTER TABLE `main_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_ingredients`
--
ALTER TABLE `manage_ingredients`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sub_groups`
--
ALTER TABLE `sub_groups`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `main_categories`
--
ALTER TABLE `main_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `main_groups`
--
ALTER TABLE `main_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `manage_ingredients`
--
ALTER TABLE `manage_ingredients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_groups`
--
ALTER TABLE `sub_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
