-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 24, 2024 at 02:20 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cleaningservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('spatie.permission.cache', 'a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:23:{i:0;a:4:{s:1:\"a\";i:2;s:1:\"b\";s:11:\"create user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:1;a:4:{s:1:\"a\";i:3;s:1:\"b\";s:9:\"edit user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:2;a:4:{s:1:\"a\";i:4;s:1:\"b\";s:11:\"delete user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:3;a:4:{s:1:\"a\";i:5;s:1:\"b\";s:9:\"list blog\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:4;a:4:{s:1:\"a\";i:6;s:1:\"b\";s:11:\"create blog\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:5;a:4:{s:1:\"a\";i:7;s:1:\"b\";s:9:\"edit blog\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:6;a:4:{s:1:\"a\";i:8;s:1:\"b\";s:11:\"delete blog\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:7;a:4:{s:1:\"a\";i:9;s:1:\"b\";s:18:\"list estimate page\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:8;a:4:{s:1:\"a\";i:10;s:1:\"b\";s:9:\"list role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:9;a:4:{s:1:\"a\";i:17;s:1:\"b\";s:9:\"list user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:10;a:4:{s:1:\"a\";i:18;s:1:\"b\";s:15:\"list permission\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:11;a:4:{s:1:\"a\";i:19;s:1:\"b\";s:11:\"create role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:12;a:4:{s:1:\"a\";i:20;s:1:\"b\";s:9:\"edit role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:13;a:4:{s:1:\"a\";i:21;s:1:\"b\";s:11:\"delete role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:14;a:4:{s:1:\"a\";i:22;s:1:\"b\";s:17:\"create permission\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:15;a:4:{s:1:\"a\";i:23;s:1:\"b\";s:15:\"edit permission\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:16;a:4:{s:1:\"a\";i:24;s:1:\"b\";s:17:\"delete permission\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:17;a:4:{s:1:\"a\";i:25;s:1:\"b\";s:12:\"list contact\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:18;a:4:{s:1:\"a\";i:26;s:1:\"b\";s:8:\"list faq\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:19;a:4:{s:1:\"a\";i:27;s:1:\"b\";s:10:\"create faq\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:20;a:4:{s:1:\"a\";i:28;s:1:\"b\";s:8:\"edit faq\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:21;a:4:{s:1:\"a\";i:29;s:1:\"b\";s:10:\"delete faq\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:22;a:4:{s:1:\"a\";i:30;s:1:\"b\";s:15:\"message history\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}}s:5:\"roles\";a:2:{i:0;a:3:{s:1:\"a\";i:2;s:1:\"b\";s:11:\"Super-Admin\";s:1:\"c\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:5:\"Admin\";s:1:\"c\";s:3:\"web\";}}}', 1724585541);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `estimates`
--

CREATE TABLE `estimates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `p_type` text DEFAULT NULL,
  `no_bed_bath` text DEFAULT NULL,
  `f_type` text DEFAULT NULL,
  `s_room` text DEFAULT NULL,
  `clean_service_period` text DEFAULT NULL,
  `clean_service_period_other` text DEFAULT NULL,
  `clean_service` text DEFAULT NULL,
  `clean_service_other` text DEFAULT NULL,
  `pets` text DEFAULT NULL,
  `pet_type` text DEFAULT NULL,
  `allergies_sensitives` text DEFAULT NULL,
  `present` text DEFAULT NULL,
  `access` text DEFAULT NULL,
  `attension` text DEFAULT NULL,
  `request` text DEFAULT NULL,
  `hear` text DEFAULT NULL,
  `extra` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(5, '0001_01_01_000000_create_users_table', 1),
(6, '0001_01_01_000001_create_cache_table', 1),
(7, '0001_01_01_000002_create_jobs_table', 1),
(8, '2024_08_07_044822_create_permission_tables', 1),
(9, '2024_08_07_105219_create_posts_table', 2),
(10, '2024_08_10_021518_create_contacts_table', 3),
(11, '2024_08_10_104819_create_estimates_table', 4),
(12, '2024_08_10_140210_create_visitors_table', 5),
(13, '2024_08_15_041541_create_faqs_table', 6),
(14, '2024_08_16_082429_create_videos_table', 7),
(16, '2024_08_19_040153_add_ip_to_visitors_table', 8),
(17, '2024_08_22_063314_create_subscribes_table', 9),
(19, '2024_08_24_120739_create_send_histories_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(2, 'create user', 'web', '2024-08-07 00:38:27', '2024-08-07 00:38:27'),
(3, 'edit user', 'web', '2024-08-07 00:38:27', '2024-08-07 00:38:27'),
(4, 'delete user', 'web', '2024-08-07 00:38:27', '2024-08-07 00:38:27'),
(5, 'list blog', 'web', '2024-08-07 00:38:27', '2024-08-07 00:38:27'),
(6, 'create blog', 'web', '2024-08-07 00:38:27', '2024-08-07 00:38:27'),
(7, 'edit blog', 'web', '2024-08-07 00:38:27', '2024-08-07 00:38:27'),
(8, 'delete blog', 'web', '2024-08-07 00:38:27', '2024-08-07 00:38:27'),
(9, 'list estimate page', 'web', '2024-08-07 00:38:27', '2024-08-07 00:38:27'),
(10, 'list role', 'web', '2024-08-07 00:38:27', '2024-08-07 00:38:27'),
(17, 'list user', 'web', '2024-08-10 06:34:48', '2024-08-10 06:34:48'),
(18, 'list permission', 'web', '2024-08-10 06:35:14', '2024-08-10 06:35:14'),
(19, 'create role', 'web', '2024-08-10 06:37:59', '2024-08-10 06:37:59'),
(20, 'edit role', 'web', '2024-08-10 06:38:09', '2024-08-10 06:38:09'),
(21, 'delete role', 'web', '2024-08-10 06:38:17', '2024-08-10 06:38:17'),
(22, 'create permission', 'web', '2024-08-10 06:38:44', '2024-08-10 06:38:44'),
(23, 'edit permission', 'web', '2024-08-10 06:38:52', '2024-08-10 06:38:52'),
(24, 'delete permission', 'web', '2024-08-10 06:38:59', '2024-08-10 06:38:59'),
(25, 'list contact', 'web', '2024-08-10 08:26:31', '2024-08-10 08:26:31'),
(26, 'list faq', 'web', '2024-08-14 21:55:33', '2024-08-14 21:55:33'),
(27, 'create faq', 'web', '2024-08-14 21:55:44', '2024-08-14 21:55:44'),
(28, 'edit faq', 'web', '2024-08-14 21:55:59', '2024-08-14 21:55:59'),
(29, 'delete faq', 'web', '2024-08-14 21:56:06', '2024-08-14 21:56:06'),
(30, 'message history', 'web', '2024-08-24 04:32:10', '2024-08-24 04:32:10');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2024-08-07 00:38:27', '2024-08-07 00:38:27'),
(2, 'Super-Admin', 'web', '2024-08-07 00:38:27', '2024-08-07 00:38:27');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(17, 1),
(17, 2),
(18, 2),
(19, 2),
(20, 2),
(21, 2),
(22, 2),
(23, 2),
(24, 2),
(25, 2),
(26, 2),
(27, 2),
(28, 2),
(29, 2),
(30, 2);

-- --------------------------------------------------------

--
-- Table structure for table `send_histories`
--

CREATE TABLE `send_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` text DEFAULT NULL,
  `to` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('70lcddZzBLJLxL3JXPFkHFWG0avKLPN0rHPfCoFY', 2, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaHZLMUFuMnNjRWIyUk80QlBZalBIZzYxeFlpQ21Nc05Pb2JxR3d3aCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1724499255),
('rNNeucjlhysshstqSpY2dGWduANVyrh4Y7r3a0nS', 2, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUkljOXJoMkdlTng0SEV5RUVtWEhWcWZ2ZWhyaTJYSTVFZUt4MFRLZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9zbXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1724501763);

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email_phone` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Admin', 'admin@test.com', '2024-08-07 00:38:27', '$2y$12$O68SFdhBQo15xAKKiBzLmu.MtwWjSjOySUPhTl4e69NPkRJh9.BEK', 'gFyLuwYSNnfiW5qKQfkxW1Y66rGD1S91qZmg8FN1xBfqELT6cltV7jGXJ8z3', '2024-08-07 00:38:27', '2024-08-16 04:13:10'),
(2, 'Super Admin', 'superadmin@test.com', '2024-08-07 00:38:27', '$2y$12$Zi72GuiXjMnPQhTb5YWu4OympNe1ajqo.QfqY2L5r31Vx9c1it76C', 'dsxPckPlBdIqbJtL3xa4f2x0Nvf6Ngzy4gbaSzi7VdXNM7jueJcvjG70MPxR', '2024-08-07 00:38:27', '2024-08-16 04:13:02');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `video` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visitor_count` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ip` text DEFAULT NULL,
  `devices` text DEFAULT NULL,
  `platform` text DEFAULT NULL,
  `browser` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `visitor_count`, `created_at`, `updated_at`, `ip`, `devices`, `platform`, `browser`) VALUES
(1, 1, '2024-08-18 21:51:04', '2024-08-18 21:51:04', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(2, 1, '2024-08-18 21:53:22', '2024-08-18 21:53:22', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(3, 1, '2024-08-18 21:57:30', '2024-08-18 21:57:30', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(4, 1, '2024-08-18 21:57:36', '2024-08-18 21:57:36', '127.0.0.1', 'iPhone', 'iOS', 'Safari'),
(5, 1, '2024-08-18 21:57:53', '2024-08-18 21:57:53', '127.0.0.1', 'iPhone', 'iOS', 'Safari'),
(6, 1, '2024-08-18 21:58:05', '2024-08-18 21:58:05', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(7, 1, '2024-08-21 07:51:38', '2024-08-21 07:51:38', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(8, 1, '2024-08-21 07:52:50', '2024-08-21 07:52:50', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(9, 1, '2024-08-21 07:53:13', '2024-08-21 07:53:13', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(10, 1, '2024-08-21 07:53:31', '2024-08-21 07:53:31', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(11, 1, '2024-08-21 07:53:42', '2024-08-21 07:53:42', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(12, 1, '2024-08-21 08:00:44', '2024-08-21 08:00:44', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(13, 1, '2024-08-21 08:00:46', '2024-08-21 08:00:46', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(14, 1, '2024-08-21 08:01:04', '2024-08-21 08:01:04', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(15, 1, '2024-08-21 08:01:12', '2024-08-21 08:01:12', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(16, 1, '2024-08-21 08:03:05', '2024-08-21 08:03:05', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(17, 1, '2024-08-21 08:03:52', '2024-08-21 08:03:52', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(18, 1, '2024-08-21 08:05:35', '2024-08-21 08:05:35', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(19, 1, '2024-08-21 08:05:45', '2024-08-21 08:05:45', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(20, 1, '2024-08-21 08:08:28', '2024-08-21 08:08:28', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(21, 1, '2024-08-21 08:08:49', '2024-08-21 08:08:49', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(22, 1, '2024-08-21 08:08:59', '2024-08-21 08:08:59', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(23, 1, '2024-08-21 08:09:50', '2024-08-21 08:09:50', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(24, 1, '2024-08-21 08:10:03', '2024-08-21 08:10:03', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(25, 1, '2024-08-21 08:10:10', '2024-08-21 08:10:10', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(26, 1, '2024-08-21 08:12:19', '2024-08-21 08:12:19', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(27, 1, '2024-08-21 08:13:29', '2024-08-21 08:13:29', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(28, 1, '2024-08-21 08:15:02', '2024-08-21 08:15:02', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(29, 1, '2024-08-21 08:15:54', '2024-08-21 08:15:54', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(30, 1, '2024-08-21 08:16:15', '2024-08-21 08:16:15', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(31, 1, '2024-08-21 08:16:43', '2024-08-21 08:16:43', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(32, 1, '2024-08-21 08:17:00', '2024-08-21 08:17:00', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(33, 1, '2024-08-21 08:17:19', '2024-08-21 08:17:19', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(34, 1, '2024-08-21 08:18:27', '2024-08-21 08:18:27', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(35, 1, '2024-08-21 08:18:36', '2024-08-21 08:18:36', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(36, 1, '2024-08-21 08:18:42', '2024-08-21 08:18:42', '127.0.0.1', 'Nexus', 'AndroidOS', 'Chrome'),
(37, 1, '2024-08-21 08:18:47', '2024-08-21 08:18:47', '127.0.0.1', 'Nexus', 'AndroidOS', 'Chrome'),
(38, 1, '2024-08-21 08:19:14', '2024-08-21 08:19:14', '127.0.0.1', 'iPhone', 'iOS', 'Safari'),
(39, 1, '2024-08-21 08:19:20', '2024-08-21 08:19:20', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(40, 1, '2024-08-21 08:20:10', '2024-08-21 08:20:10', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(41, 1, '2024-08-21 09:33:53', '2024-08-21 09:33:53', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(42, 1, '2024-08-21 09:39:26', '2024-08-21 09:39:26', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(43, 1, '2024-08-21 23:23:30', '2024-08-21 23:23:30', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(44, 1, '2024-08-21 23:23:42', '2024-08-21 23:23:42', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(45, 1, '2024-08-21 23:25:28', '2024-08-21 23:25:28', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(46, 1, '2024-08-21 23:26:08', '2024-08-21 23:26:08', '127.0.0.1', 'Nexus', 'AndroidOS', 'Chrome'),
(47, 1, '2024-08-21 23:26:14', '2024-08-21 23:26:14', '127.0.0.1', 'Nexus', 'AndroidOS', 'Chrome'),
(48, 1, '2024-08-21 23:26:59', '2024-08-21 23:26:59', '127.0.0.1', 'Nexus', 'AndroidOS', 'Chrome'),
(49, 1, '2024-08-21 23:27:12', '2024-08-21 23:27:12', '127.0.0.1', 'Nexus', 'AndroidOS', 'Chrome'),
(50, 1, '2024-08-21 23:27:16', '2024-08-21 23:27:16', '127.0.0.1', 'Nexus', 'AndroidOS', 'Chrome'),
(51, 1, '2024-08-21 23:28:29', '2024-08-21 23:28:29', '127.0.0.1', 'Nexus', 'AndroidOS', 'Chrome'),
(52, 1, '2024-08-21 23:28:40', '2024-08-21 23:28:40', '127.0.0.1', 'Nexus', 'AndroidOS', 'Chrome'),
(53, 1, '2024-08-21 23:28:47', '2024-08-21 23:28:47', '127.0.0.1', 'Nexus', 'AndroidOS', 'Chrome'),
(54, 1, '2024-08-21 23:29:55', '2024-08-21 23:29:55', '127.0.0.1', 'Nexus', 'AndroidOS', 'Chrome'),
(55, 1, '2024-08-21 23:30:01', '2024-08-21 23:30:01', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(56, 1, '2024-08-21 23:30:12', '2024-08-21 23:30:12', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(57, 1, '2024-08-21 23:30:18', '2024-08-21 23:30:18', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(58, 1, '2024-08-21 23:30:22', '2024-08-21 23:30:22', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(59, 1, '2024-08-21 23:30:24', '2024-08-21 23:30:24', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(60, 1, '2024-08-21 23:37:28', '2024-08-21 23:37:28', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(61, 1, '2024-08-21 23:38:49', '2024-08-21 23:38:49', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(62, 1, '2024-08-21 23:38:54', '2024-08-21 23:38:54', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(63, 1, '2024-08-21 23:40:22', '2024-08-21 23:40:22', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(64, 1, '2024-08-21 23:41:39', '2024-08-21 23:41:39', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(65, 1, '2024-08-21 23:42:17', '2024-08-21 23:42:17', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(66, 1, '2024-08-21 23:50:44', '2024-08-21 23:50:44', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(67, 1, '2024-08-21 23:51:30', '2024-08-21 23:51:30', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(68, 1, '2024-08-21 23:51:36', '2024-08-21 23:51:36', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(69, 1, '2024-08-21 23:52:02', '2024-08-21 23:52:02', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(70, 1, '2024-08-21 23:53:19', '2024-08-21 23:53:19', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(71, 1, '2024-08-21 23:53:29', '2024-08-21 23:53:29', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(72, 1, '2024-08-21 23:53:40', '2024-08-21 23:53:40', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(73, 1, '2024-08-21 23:55:36', '2024-08-21 23:55:36', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(74, 1, '2024-08-21 23:56:42', '2024-08-21 23:56:42', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(75, 1, '2024-08-21 23:56:47', '2024-08-21 23:56:47', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(76, 1, '2024-08-21 23:57:00', '2024-08-21 23:57:00', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(77, 1, '2024-08-21 23:59:32', '2024-08-21 23:59:32', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(78, 1, '2024-08-21 23:59:55', '2024-08-21 23:59:55', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(79, 1, '2024-08-22 00:00:02', '2024-08-22 00:00:02', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(80, 1, '2024-08-22 00:00:25', '2024-08-22 00:00:25', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(81, 1, '2024-08-22 00:02:02', '2024-08-22 00:02:02', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(82, 1, '2024-08-22 00:02:08', '2024-08-22 00:02:08', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(83, 1, '2024-08-22 00:02:50', '2024-08-22 00:02:50', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(84, 1, '2024-08-22 00:03:31', '2024-08-22 00:03:31', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(85, 1, '2024-08-22 00:04:11', '2024-08-22 00:04:11', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(86, 1, '2024-08-22 00:05:41', '2024-08-22 00:05:41', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(87, 1, '2024-08-22 00:05:44', '2024-08-22 00:05:44', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(88, 1, '2024-08-22 00:05:52', '2024-08-22 00:05:52', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(89, 1, '2024-08-22 00:06:15', '2024-08-22 00:06:15', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(90, 1, '2024-08-22 00:06:20', '2024-08-22 00:06:20', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(91, 1, '2024-08-22 00:06:25', '2024-08-22 00:06:25', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(92, 1, '2024-08-22 00:07:05', '2024-08-22 00:07:05', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(93, 1, '2024-08-22 00:07:06', '2024-08-22 00:07:06', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(94, 1, '2024-08-22 00:07:12', '2024-08-22 00:07:12', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(95, 1, '2024-08-22 00:07:23', '2024-08-22 00:07:23', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(96, 1, '2024-08-22 00:08:05', '2024-08-22 00:08:05', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(97, 1, '2024-08-22 00:08:15', '2024-08-22 00:08:15', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(98, 1, '2024-08-22 00:08:17', '2024-08-22 00:08:17', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(99, 1, '2024-08-22 00:08:33', '2024-08-22 00:08:33', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(100, 1, '2024-08-22 00:09:51', '2024-08-22 00:09:51', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(101, 1, '2024-08-22 00:09:57', '2024-08-22 00:09:57', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(102, 1, '2024-08-22 00:10:25', '2024-08-22 00:10:25', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(103, 1, '2024-08-22 00:10:55', '2024-08-22 00:10:55', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(104, 1, '2024-08-22 00:14:36', '2024-08-22 00:14:36', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(105, 1, '2024-08-22 00:14:46', '2024-08-22 00:14:46', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(106, 1, '2024-08-22 00:14:51', '2024-08-22 00:14:51', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(107, 1, '2024-08-22 00:14:55', '2024-08-22 00:14:55', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(108, 1, '2024-08-22 00:15:15', '2024-08-22 00:15:15', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(109, 1, '2024-08-22 00:16:24', '2024-08-22 00:16:24', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(110, 1, '2024-08-22 00:16:31', '2024-08-22 00:16:31', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(111, 1, '2024-08-22 00:16:35', '2024-08-22 00:16:35', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(112, 1, '2024-08-22 00:16:37', '2024-08-22 00:16:37', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(113, 1, '2024-08-22 00:16:43', '2024-08-22 00:16:43', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(114, 1, '2024-08-22 00:18:31', '2024-08-22 00:18:31', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(115, 1, '2024-08-22 00:18:34', '2024-08-22 00:18:34', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(116, 1, '2024-08-22 00:18:41', '2024-08-22 00:18:41', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(117, 1, '2024-08-22 00:18:46', '2024-08-22 00:18:46', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(118, 1, '2024-08-22 00:18:51', '2024-08-22 00:18:51', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(119, 1, '2024-08-22 00:18:58', '2024-08-22 00:18:58', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(120, 1, '2024-08-22 00:19:04', '2024-08-22 00:19:04', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(121, 1, '2024-08-22 00:19:19', '2024-08-22 00:19:19', '127.0.0.1', '0', 'Ubuntu', 'Firefox'),
(122, 1, '2024-08-22 00:19:24', '2024-08-22 00:19:24', '127.0.0.1', '0', 'Ubuntu', 'Firefox'),
(123, 1, '2024-08-22 00:19:36', '2024-08-22 00:19:36', '127.0.0.1', '0', 'Ubuntu', 'Firefox'),
(124, 1, '2024-08-22 00:19:45', '2024-08-22 00:19:45', '127.0.0.1', '0', 'Ubuntu', 'Firefox'),
(125, 1, '2024-08-22 00:19:46', '2024-08-22 00:19:46', '127.0.0.1', '0', 'Ubuntu', 'Firefox'),
(126, 1, '2024-08-22 00:22:22', '2024-08-22 00:22:22', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(127, 1, '2024-08-22 00:22:27', '2024-08-22 00:22:27', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(128, 1, '2024-08-22 00:22:32', '2024-08-22 00:22:32', '127.0.0.1', '0', 'Ubuntu', 'Firefox'),
(129, 1, '2024-08-22 00:22:44', '2024-08-22 00:22:44', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(130, 1, '2024-08-22 00:22:47', '2024-08-22 00:22:47', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(131, 1, '2024-08-22 00:22:53', '2024-08-22 00:22:53', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(132, 1, '2024-08-22 00:23:01', '2024-08-22 00:23:01', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(133, 1, '2024-08-22 00:23:33', '2024-08-22 00:23:33', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(134, 1, '2024-08-22 00:23:37', '2024-08-22 00:23:37', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(135, 1, '2024-08-22 00:23:42', '2024-08-22 00:23:42', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(136, 1, '2024-08-22 00:26:48', '2024-08-22 00:26:48', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(137, 1, '2024-08-22 00:26:55', '2024-08-22 00:26:55', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(138, 1, '2024-08-22 00:27:03', '2024-08-22 00:27:03', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(139, 1, '2024-08-22 00:27:14', '2024-08-22 00:27:14', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(140, 1, '2024-08-22 00:27:46', '2024-08-22 00:27:46', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(141, 1, '2024-08-22 00:27:55', '2024-08-22 00:27:55', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(142, 1, '2024-08-22 00:28:05', '2024-08-22 00:28:05', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(143, 1, '2024-08-22 00:28:21', '2024-08-22 00:28:21', '127.0.0.1', 'WebKit', 'Linux', 'Opera'),
(144, 1, '2024-08-22 00:28:40', '2024-08-22 00:28:40', '127.0.0.1', 'WebKit', 'Linux', 'Opera'),
(145, 1, '2024-08-22 00:28:53', '2024-08-22 00:28:53', '127.0.0.1', 'WebKit', 'Linux', 'Opera'),
(146, 1, '2024-08-22 00:30:21', '2024-08-22 00:30:21', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(147, 1, '2024-08-22 00:32:24', '2024-08-22 00:32:24', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(148, 1, '2024-08-22 00:32:31', '2024-08-22 00:32:31', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(149, 1, '2024-08-22 00:32:36', '2024-08-22 00:32:36', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(150, 1, '2024-08-22 00:55:41', '2024-08-22 00:55:41', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(151, 1, '2024-08-22 00:55:47', '2024-08-22 00:55:47', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(152, 1, '2024-08-22 00:56:18', '2024-08-22 00:56:18', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(153, 1, '2024-08-22 00:56:28', '2024-08-22 00:56:28', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(154, 1, '2024-08-22 00:56:32', '2024-08-22 00:56:32', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(155, 1, '2024-08-22 00:56:36', '2024-08-22 00:56:36', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(156, 1, '2024-08-22 00:57:18', '2024-08-22 00:57:18', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(157, 1, '2024-08-22 00:57:32', '2024-08-22 00:57:32', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(158, 1, '2024-08-22 00:58:01', '2024-08-22 00:58:01', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(159, 1, '2024-08-22 08:25:15', '2024-08-22 08:25:15', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(160, 1, '2024-08-22 08:25:26', '2024-08-22 08:25:26', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(161, 1, '2024-08-22 08:26:32', '2024-08-22 08:26:32', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(162, 1, '2024-08-22 08:26:41', '2024-08-22 08:26:41', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(163, 1, '2024-08-22 08:26:48', '2024-08-22 08:26:48', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(164, 1, '2024-08-22 08:28:00', '2024-08-22 08:28:00', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(165, 1, '2024-08-22 08:28:07', '2024-08-22 08:28:07', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(166, 1, '2024-08-22 08:28:19', '2024-08-22 08:28:19', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(167, 1, '2024-08-22 08:28:57', '2024-08-22 08:28:57', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(168, 1, '2024-08-22 08:29:05', '2024-08-22 08:29:05', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(169, 1, '2024-08-22 08:30:08', '2024-08-22 08:30:08', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(170, 1, '2024-08-22 08:30:44', '2024-08-22 08:30:44', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(171, 1, '2024-08-22 08:30:48', '2024-08-22 08:30:48', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(172, 1, '2024-08-22 08:30:57', '2024-08-22 08:30:57', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(173, 1, '2024-08-22 08:32:12', '2024-08-22 08:32:12', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(174, 1, '2024-08-22 08:32:14', '2024-08-22 08:32:14', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(175, 1, '2024-08-22 08:32:26', '2024-08-22 08:32:26', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(176, 1, '2024-08-22 08:34:57', '2024-08-22 08:34:57', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(177, 1, '2024-08-22 08:35:02', '2024-08-22 08:35:02', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(178, 1, '2024-08-22 08:35:27', '2024-08-22 08:35:27', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(179, 1, '2024-08-22 08:35:36', '2024-08-22 08:35:36', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(180, 1, '2024-08-22 08:35:47', '2024-08-22 08:35:47', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(181, 1, '2024-08-22 08:36:20', '2024-08-22 08:36:20', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(182, 1, '2024-08-22 08:36:38', '2024-08-22 08:36:38', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(183, 1, '2024-08-22 08:36:47', '2024-08-22 08:36:47', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(184, 1, '2024-08-22 08:36:54', '2024-08-22 08:36:54', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(185, 1, '2024-08-22 08:37:04', '2024-08-22 08:37:04', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(186, 1, '2024-08-22 08:37:20', '2024-08-22 08:37:20', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(187, 1, '2024-08-22 08:38:04', '2024-08-22 08:38:04', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(188, 1, '2024-08-22 08:38:19', '2024-08-22 08:38:19', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(189, 1, '2024-08-22 08:41:40', '2024-08-22 08:41:40', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(190, 1, '2024-08-22 08:43:08', '2024-08-22 08:43:08', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(191, 1, '2024-08-22 08:45:13', '2024-08-22 08:45:13', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(192, 1, '2024-08-22 08:45:23', '2024-08-22 08:45:23', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(193, 1, '2024-08-22 08:47:06', '2024-08-22 08:47:06', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(194, 1, '2024-08-22 08:47:23', '2024-08-22 08:47:23', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(195, 1, '2024-08-22 08:47:33', '2024-08-22 08:47:33', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(196, 1, '2024-08-22 08:48:31', '2024-08-22 08:48:31', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(197, 1, '2024-08-22 08:48:43', '2024-08-22 08:48:43', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(198, 1, '2024-08-22 08:48:50', '2024-08-22 08:48:50', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(199, 1, '2024-08-22 08:49:06', '2024-08-22 08:49:06', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(200, 1, '2024-08-22 08:49:27', '2024-08-22 08:49:27', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(201, 1, '2024-08-22 08:50:43', '2024-08-22 08:50:43', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(202, 1, '2024-08-22 08:50:51', '2024-08-22 08:50:51', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(203, 1, '2024-08-22 08:52:03', '2024-08-22 08:52:03', '127.0.0.1', 'Nexus', 'AndroidOS', 'Chrome'),
(204, 1, '2024-08-22 08:52:19', '2024-08-22 08:52:19', '127.0.0.1', 'Nexus', 'AndroidOS', 'Chrome'),
(205, 1, '2024-08-22 08:52:31', '2024-08-22 08:52:31', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(206, 1, '2024-08-22 08:53:25', '2024-08-22 08:53:25', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(207, 1, '2024-08-22 08:53:34', '2024-08-22 08:53:34', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(208, 1, '2024-08-22 08:53:43', '2024-08-22 08:53:43', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(209, 1, '2024-08-22 08:53:59', '2024-08-22 08:53:59', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(210, 1, '2024-08-22 08:54:13', '2024-08-22 08:54:13', '127.0.0.1', 'Nexus', 'AndroidOS', 'Chrome'),
(211, 1, '2024-08-22 08:54:53', '2024-08-22 08:54:53', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(212, 1, '2024-08-22 08:55:23', '2024-08-22 08:55:23', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(213, 1, '2024-08-22 08:55:42', '2024-08-22 08:55:42', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(214, 1, '2024-08-22 08:55:57', '2024-08-22 08:55:57', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(215, 1, '2024-08-22 08:56:16', '2024-08-22 08:56:16', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(216, 1, '2024-08-22 08:56:36', '2024-08-22 08:56:36', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(217, 1, '2024-08-22 08:56:42', '2024-08-22 08:56:42', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(218, 1, '2024-08-22 08:56:53', '2024-08-22 08:56:53', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(219, 1, '2024-08-22 08:58:09', '2024-08-22 08:58:09', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(220, 1, '2024-08-22 08:58:15', '2024-08-22 08:58:15', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(221, 1, '2024-08-22 08:58:28', '2024-08-22 08:58:28', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(222, 1, '2024-08-22 09:00:02', '2024-08-22 09:00:02', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(223, 1, '2024-08-22 09:00:25', '2024-08-22 09:00:25', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(224, 1, '2024-08-22 09:01:30', '2024-08-22 09:01:30', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(225, 1, '2024-08-22 09:01:48', '2024-08-22 09:01:48', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(226, 1, '2024-08-22 09:02:27', '2024-08-22 09:02:27', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(227, 1, '2024-08-22 09:02:33', '2024-08-22 09:02:33', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(228, 1, '2024-08-22 09:03:27', '2024-08-22 09:03:27', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(229, 1, '2024-08-22 09:03:47', '2024-08-22 09:03:47', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(230, 1, '2024-08-22 09:03:54', '2024-08-22 09:03:54', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(231, 1, '2024-08-22 09:04:01', '2024-08-22 09:04:01', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(232, 1, '2024-08-22 09:04:12', '2024-08-22 09:04:12', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(233, 1, '2024-08-22 09:04:17', '2024-08-22 09:04:17', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(234, 1, '2024-08-22 09:05:02', '2024-08-22 09:05:02', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(235, 1, '2024-08-22 09:05:07', '2024-08-22 09:05:07', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(236, 1, '2024-08-22 09:22:00', '2024-08-22 09:22:00', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(237, 1, '2024-08-22 09:22:08', '2024-08-22 09:22:08', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(238, 1, '2024-08-22 09:30:54', '2024-08-22 09:30:54', '169.254.34.5', 'WebKit', 'Linux', 'Chrome'),
(239, 1, '2024-08-22 09:36:15', '2024-08-22 09:36:15', '169.254.34.2', 'Macintosh', 'OS X', 'Firefox'),
(240, 1, '2024-08-22 09:39:55', '2024-08-22 09:39:55', '169.254.34.2', 'Macintosh', 'OS X', 'Firefox'),
(241, 1, '2024-08-22 09:41:53', '2024-08-22 09:41:53', '169.254.34.2', 'Macintosh', 'OS X', 'Firefox'),
(242, 1, '2024-08-24 00:08:36', '2024-08-24 00:08:36', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(243, 1, '2024-08-24 01:59:07', '2024-08-24 01:59:07', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(244, 1, '2024-08-24 01:59:19', '2024-08-24 01:59:19', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(245, 1, '2024-08-24 05:05:11', '2024-08-24 05:05:11', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(246, 1, '2024-08-24 05:06:14', '2024-08-24 05:06:14', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(247, 1, '2024-08-24 05:06:23', '2024-08-24 05:06:23', '127.0.0.1', 'WebKit', 'Linux', 'Chrome'),
(248, 1, '2024-08-24 05:06:35', '2024-08-24 05:06:35', '127.0.0.1', 'WebKit', 'Linux', 'Chrome');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estimates`
--
ALTER TABLE `estimates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `send_histories`
--
ALTER TABLE `send_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `estimates`
--
ALTER TABLE `estimates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `send_histories`
--
ALTER TABLE `send_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
