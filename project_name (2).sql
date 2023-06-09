-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 07:27 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_name`
--

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
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `name`) VALUES
(1, 'Tamil'),
(2, 'English'),
(3, 'Hindi'),
(4, 'Bengali'),
(5, 'Malayalam');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `name`) VALUES
(1, 'Beginner'),
(2, 'Intermediate'),
(3, 'Advanced');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_02_170123_create_table_states', 1),
(6, '2023_06_04_080449_create_table_citys', 1),
(7, '2023_06_04_104700_create_table_area', 1),
(8, '2023_06_05_154016_create_table__teacher', 1),
(9, '2023_06_06_151210_create_table__category', 1),
(10, '2023_06_06_151338_create_table_sub_category', 1),
(11, '2023_06_08_164822_create_table__accademy_table', 2),
(12, '2023_06_08_165653_create_table__accademy_table', 3),
(13, '2023_06_11_105839_create_table__booking_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Table structure for table `table_area`
--

CREATE TABLE `table_area` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_area`
--

INSERT INTO `table_area` (`id`, `city`, `status`, `state`, `area`, `created_at`, `updated_at`) VALUES
(1, 'chennai', NULL, 'tamil nadu', 'perambure', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `table_citys`
--

CREATE TABLE `table_citys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_citys`
--

INSERT INTO `table_citys` (`id`, `name`, `status`, `state`, `created_at`, `updated_at`) VALUES
(1, 'chennai', NULL, 'tamil nadu', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `table_states`
--

CREATE TABLE `table_states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_states`
--

INSERT INTO `table_states` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'tamil nadu', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `table_sub_category`
--

CREATE TABLE `table_sub_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `Category` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_sub_category`
--

INSERT INTO `table_sub_category` (`id`, `name`, `Category`, `created_at`, `updated_at`) VALUES
(1, 'test teacher', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `table__accademy`
--

CREATE TABLE `table__accademy` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address_1` varchar(255) DEFAULT NULL,
  `address_2` varchar(255) DEFAULT NULL,
  `State` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `from_time` varchar(255) DEFAULT NULL,
  `to_time` varchar(255) DEFAULT NULL,
  `days` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `aboutus` text DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table__accademy`
--

INSERT INTO `table__accademy` (`id`, `name`, `address_1`, `address_2`, `State`, `city`, `area`, `from_time`, `to_time`, `days`, `number`, `email`, `aboutus`, `image`, `created_at`, `updated_at`) VALUES
(5, 'admin', 'teest', 'test', 'tamil nadu', 'chennai', 'perambure', '23:06', '23:06', '1,2,3,4,5,6,7', '124456', 'admin@admin.com', 'swsq', 'images/eGINy7sON8OKA1D0TyhhqWKPY9Zkah1z3szv9JCh.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `table__booking`
--

CREATE TABLE `table__booking` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Category` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `spot` varchar(255) DEFAULT NULL,
  `days` varchar(255) DEFAULT NULL,
  `start_date` varchar(255) DEFAULT NULL,
  `sun_start_time` varchar(255) DEFAULT NULL,
  `mon_start_time` varchar(255) DEFAULT NULL,
  `tue_start_time` varchar(255) DEFAULT NULL,
  `wed_start_time` varchar(255) DEFAULT NULL,
  `thu_start_time` varchar(255) DEFAULT NULL,
  `fri_start_time` varchar(255) DEFAULT NULL,
  `sat_start_time` varchar(255) DEFAULT NULL,
  `end_date` varchar(255) DEFAULT NULL,
  `start_time` varchar(255) DEFAULT NULL,
  `end_time` varchar(255) DEFAULT NULL,
  `sun_end_time` varchar(255) DEFAULT NULL,
  `mon_end_time` varchar(255) DEFAULT NULL,
  `tue_end_time` varchar(255) DEFAULT NULL,
  `wed_end_time` varchar(255) DEFAULT NULL,
  `thu_end_time` varchar(255) DEFAULT NULL,
  `fri_end_time` varchar(255) DEFAULT NULL,
  `sat_end_time` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table__booking`
--

INSERT INTO `table__booking` (`id`, `Category`, `level`, `language`, `description`, `price`, `duration`, `spot`, `days`, `start_date`, `sun_start_time`, `mon_start_time`, `tue_start_time`, `wed_start_time`, `thu_start_time`, `fri_start_time`, `sat_start_time`, `end_date`, `start_time`, `end_time`, `sun_end_time`, `mon_end_time`, `tue_end_time`, `wed_end_time`, `thu_end_time`, `fri_end_time`, `sat_end_time`, `created_at`, `updated_at`) VALUES
(2, '1', '1', '1', 'test', '100', '2', '6', 'weekly', '2023-06-04', '22:49', NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-03', '21:28', '21:28', '22:50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `table__category`
--

CREATE TABLE `table__category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table__category`
--

INSERT INTO `table__category` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `table__teacher`
--

CREATE TABLE `table__teacher` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table__teacher`
--

INSERT INTO `table__teacher` (`id`, `name`, `lastname`, `email`, `phone`, `address`, `password`, `type`, `created_at`, `updated_at`) VALUES
(1, 'subin', 's', 'subinstark24@gmail.com', '01234567890', NULL, '$2y$10$IYnBpGMxGRB45fZOMunXTeuzSO91XIpTDl7KSwmRi8kSJlHnsnKR.', NULL, NULL, NULL),
(3, 'test', 'teacher', 'testTeacher@gmail.com', '01234567890', NULL, '$2y$10$zZB44KzmHPTrdQ40/NR0tOhl2QIsql8TB/dv2zaZ3uvSZEwpky7WO', 'test teacher', NULL, NULL);

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$IYnBpGMxGRB45fZOMunXTeuzSO91XIpTDl7KSwmRi8kSJlHnsnKR.', 'zxpWYTv32NTzrvCDBNycF8Y4UHXOpIW6Cyr5GMPfnWrWJzGNlBzUrr76LpzS', '2023-06-07 12:10:05', '2023-06-07 12:10:05');

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
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `table_area`
--
ALTER TABLE `table_area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_citys`
--
ALTER TABLE `table_citys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_states`
--
ALTER TABLE `table_states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_sub_category`
--
ALTER TABLE `table_sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table__accademy`
--
ALTER TABLE `table__accademy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table__booking`
--
ALTER TABLE `table__booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table__category`
--
ALTER TABLE `table__category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table__teacher`
--
ALTER TABLE `table__teacher`
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
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_area`
--
ALTER TABLE `table_area`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table_citys`
--
ALTER TABLE `table_citys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table_states`
--
ALTER TABLE `table_states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table_sub_category`
--
ALTER TABLE `table_sub_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table__accademy`
--
ALTER TABLE `table__accademy`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `table__booking`
--
ALTER TABLE `table__booking`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table__category`
--
ALTER TABLE `table__category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table__teacher`
--
ALTER TABLE `table__teacher`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
