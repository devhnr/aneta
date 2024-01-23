-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2023 at 06:46 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_sagarstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `set_order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `sub_title`, `image`, `link`, `set_order`, `created_at`, `updated_at`) VALUES
(6, 'Exclusive Collection', 'Most Exclusive Brands', '1690544425fashion1_1.jpg', NULL, 2, '2023-07-28 06:10:26', '2023-07-28 06:10:26'),
(7, 'Discover Bestseller', 'most unique style', '1690544471fashion1_2.jpg', NULL, 1, '2023-07-28 06:11:11', '2023-07-28 06:11:11'),
(9, 'test', 'tst 123', '1695032343Chrysanthemum.jpg', 'https://bhaviklogistics.com/Aresstudio/beta/about', 3, '2023-09-18 10:19:04', '2023-09-18 10:20:04');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `page_url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `page_url`, `image`, `description`, `created_at`, `updated_at`) VALUES
(6, 'The best way to predict the future is to create it', 'the-best-way-to-predict-the-future-is-to-create-it', '1691672315bg1.webp', NULL, '2023-08-10 12:58:35', '2023-08-10 12:58:35');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `page_url` varchar(255) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `set_order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `group_id`, `name`, `page_url`, `meta_title`, `meta_keywords`, `meta_description`, `set_order`, `created_at`, `updated_at`) VALUES
(15, '6', 'Women Ethnicwear', 'women-ethnicwear', NULL, NULL, NULL, 0, '2023-09-19 01:49:19', '2023-09-19 01:49:19'),
(16, '6', 'Women Casualwear', 'women-casualwear', NULL, NULL, NULL, 0, '2023-09-19 01:49:33', '2023-09-19 01:49:33'),
(17, '7', 'Men\'s Wear cat', 'men-s-wear-cat', NULL, NULL, NULL, 0, '2023-09-19 02:35:55', '2023-09-19 02:35:55'),
(18, '8', 'Boys', 'boys', NULL, NULL, NULL, 0, '2023-09-19 02:36:06', '2023-09-19 02:36:06'),
(19, '8', 'Girls', 'girls', NULL, NULL, NULL, 0, '2023-09-19 02:36:16', '2023-09-19 02:36:16');

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `page_url` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `set_order` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `name`, `page_url`, `description`, `image`, `set_order`, `created_at`, `updated_at`) VALUES
(2, 'man', 'man', NULL, '1690610024home-shop-modern-01.png', 0, '2023-07-29 05:53:44', '2023-07-29 05:53:44'),
(3, 'women', 'women', NULL, '1690610039home-shop-modern-04.png', 0, '2023-07-29 05:53:59', '2023-07-29 05:53:59'),
(4, 'kids', 'kids', NULL, '1690610047home-shop-modern-02.png', 2, '2023-07-29 05:54:08', '2023-07-29 05:54:08');

-- --------------------------------------------------------

--
-- Table structure for table `colours`
--

CREATE TABLE `colours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colours`
--

INSERT INTO `colours` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(2, 'Blue', '0000FF', '2023-07-28 06:44:32', '2023-07-28 06:44:32'),
(3, 'Aqua', '00FFFF', '2023-07-28 06:44:53', '2023-07-28 06:44:53'),
(4, 'Lime', '00FF00', '2023-07-28 06:45:09', '2023-08-02 00:49:13');

-- --------------------------------------------------------

--
-- Table structure for table `coupans`
--

CREATE TABLE `coupans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupan_name` varchar(255) NOT NULL,
  `coupan_code` varchar(255) NOT NULL,
  `discount` int(11) NOT NULL,
  `coupanvalue` int(11) NOT NULL COMMENT 'percentage=0;price=1',
  `minimum_order` varchar(255) NOT NULL,
  `no_of_coupons` varchar(255) NOT NULL,
  `no_of_coupons_user` varchar(255) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `subcategory_id` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupans`
--

INSERT INTO `coupans` (`id`, `coupan_name`, `coupan_code`, `discount`, `coupanvalue`, `minimum_order`, `no_of_coupons`, `no_of_coupons_user`, `startdate`, `enddate`, `category_id`, `subcategory_id`, `description`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Diwali', 'Diwali-11', 150, 1, '5000', '15', '1', '2023-08-13', '2023-08-20', '1,3', '3,4,6', '<p>This is First Coupan</p>', 1, NULL, NULL);

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
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `page_url` varchar(255) NOT NULL,
  `set_order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `page_url`, `set_order`, `created_at`, `updated_at`) VALUES
(6, 'Women\'s Wear', 'women-s-wear', 3, '2023-09-19 01:48:15', '2023-09-19 01:48:15'),
(7, 'Mean\'s Wear', 'mean-s-wear', 2, '2023-09-19 01:48:35', '2023-09-19 01:48:35'),
(8, 'Kid\'s Wear', 'kid-s-wear', 1, '2023-09-19 01:48:45', '2023-09-19 01:48:45');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Lather', '2023-07-28 23:57:16', '2023-07-28 23:57:16'),
(3, 'Cotton', '2023-07-28 23:57:25', '2023-07-28 23:57:25'),
(4, 'Silk', '2023-07-28 23:57:37', '2023-07-28 23:57:37');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_28_091042_create_categories_table', 2),
(6, '2023_07_28_094648_create_subcategories_table', 3),
(7, '2023_07_28_103239_create_banners_table', 4),
(8, '2023_07_28_114610_create_sizes_table', 5),
(9, '2023_07_28_120230_create_colours_table', 6),
(10, '2023_07_29_051620_create_materials_table', 7),
(11, '2023_07_29_052838_create_style_types_table', 8);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pname` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `pname`, `created_at`, `updated_at`) VALUES
(1, 'Category', '2023-09-15 03:54:43', '2023-09-15 03:54:43'),
(2, 'Subcategory', '2023-09-15 03:54:43', '2023-09-15 03:54:43'),
(3, 'Product', '2023-09-15 03:54:43', '2023-09-15 03:54:43'),
(4, 'Group', '2023-09-15 03:54:43', '2023-09-15 03:54:43'),
(5, 'banner', '2023-09-15 03:54:43', '2023-09-15 03:54:43'),
(6, 'colour', '2023-09-15 03:54:43', '2023-09-15 03:54:43'),
(7, 'size', '2023-09-15 03:54:43', '2023-09-15 03:54:43'),
(8, 'material', '2023-09-15 03:54:43', '2023-09-15 03:54:43'),
(9, 'style type', '2023-09-15 03:54:43', '2023-09-15 03:54:43'),
(10, 'sub banner', '2023-09-15 03:54:43', '2023-09-15 03:54:43'),
(11, 'blog', '2023-09-15 03:54:43', '2023-09-15 03:54:43');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `page_url` varchar(255) NOT NULL,
  `product_code` varchar(255) DEFAULT NULL,
  `sku_code` varchar(255) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `collection_id` int(11) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `discount_type` int(11) DEFAULT NULL COMMENT '0=percentage , 1=price',
  `description` text DEFAULT NULL,
  `recent_product` int(11) DEFAULT NULL,
  `feature_product` int(11) DEFAULT NULL,
  `best_seller` int(11) DEFAULT NULL,
  `material_id` varchar(255) DEFAULT NULL,
  `style_type_id` varchar(255) DEFAULT NULL,
  `lining` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `group_id`, `cat_id`, `subcat_id`, `name`, `page_url`, `product_code`, `sku_code`, `short_description`, `collection_id`, `discount`, `discount_type`, `description`, `recent_product`, `feature_product`, `best_seller`, `material_id`, `style_type_id`, `lining`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(4, 6, 15, 2, 'Tennis Shorts', 'tennis-shorts', 'P001', 'sku001', 'g', 2, '10', 1, '<p>fghs</p>', 1, 1, 1, '2', '2', 'xcbxc', NULL, NULL, NULL, '2023-08-02 06:03:48', '2023-09-19 02:45:35'),
(6, 6, 16, 1, 'Plain Multicolored', 'plain-multicolored', 'p002', '002', 'test', 3, '10', 0, '<p>tetsst</p>', 0, 0, 0, '2', '2', NULL, NULL, NULL, NULL, '2023-09-19 08:16:45', '2023-09-19 08:16:45'),
(7, 6, 16, 3, 'Cotton Polo Shirt', 'cotton-polo-shirt', 'p003', '003', 'test', 3, '20', 0, '<p>tst</p>', 0, 0, 0, '2', '2', NULL, NULL, NULL, NULL, '2023-09-19 08:19:58', '2023-09-19 08:19:58'),
(8, 7, 17, 5, 'Outlaw Jacket', 'outlaw-jacket', 'p004', '004', 'Test', 2, '20', 0, '<p>Test Desc</p>', 0, 0, 0, '2,3,4', '2,3', NULL, NULL, NULL, NULL, '2023-09-19 08:21:06', '2023-09-19 07:24:54'),
(9, 7, 17, 6, 'Cotton Jacket', 'cotton-jacket', 'P005', '005', 'Test', 2, '10', 1, '<p>Test Desc</p>', 0, 0, 0, '2,3', '2,3', NULL, NULL, NULL, NULL, '2023-09-19 08:22:09', '2023-09-19 08:22:09'),
(10, 8, 18, 8, 'Short Sleeved Hoodie', 'short-sleeved-hoodie', 'p006', '006', 'Test', 4, '10', 0, '<p><a href=\"http://localhost/laravel_project/sagarstore/single-product\">Short Sleeved HoodieShort Sleeved HoodieShort Sleeved HoodieShort Sleeved HoodieShort Sleeved Hoodie</a></p>', 0, 0, 0, '2', '2', NULL, NULL, NULL, NULL, '2023-09-19 08:23:01', '2023-09-19 08:23:01'),
(11, 8, 19, 10, 'Tennis Shorts', 'tennis-shorts', 'p007', '007', NULL, 4, '10', 0, '<p>Test</p>', 0, 0, 0, '2', '2', NULL, NULL, NULL, NULL, '2023-09-19 08:24:14', '2023-09-19 08:24:14');

-- --------------------------------------------------------

--
-- Table structure for table `product_attribute`
--

CREATE TABLE `product_attribute` (
  `id` int(11) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `size_id` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `colour_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_attribute`
--

INSERT INTO `product_attribute` (`id`, `pid`, `size_id`, `price`, `colour_id`, `qty`) VALUES
(2, 2, 2, 200, 3, 20),
(3, 2, 4, 300, 4, 30),
(4, 3, 2, 78, 3, 2),
(5, 4, 2, 150, 2, 2),
(6, 4, 3, 78, 3, 2),
(7, 5, 2, 1500, 2, 1),
(8, 6, 2, 100, 2, 10),
(9, 6, 3, 200, 3, 20),
(10, 7, 3, 100, 3, 10),
(11, 7, 4, 100, 2, 10),
(14, 9, 3, 500, 2, 10),
(15, 9, 4, 600, 3, 60),
(16, 10, 2, 100, 2, 10),
(17, 10, 3, 500, 2, 20),
(18, 11, 2, 100, 2, 10),
(19, 11, 3, 500, 3, 20),
(21, 8, 2, 150, 3, 10),
(22, 8, 3, 350, 2, 20);

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `baseimage` int(11) NOT NULL,
  `baseimageHover` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`id`, `pid`, `image`, `baseimage`, `baseimageHover`, `created_at`, `updated_at`) VALUES
(6, 4, '1691650744F1.jpg', 1, 0, '2023-08-10 06:59:04', '2023-08-10 06:59:04'),
(7, 4, '1691651279product-image-26.jpg', 0, 0, '2023-08-10 07:07:59', '2023-08-10 07:07:59'),
(8, 11, '16951119491.webp', 0, 1, '2023-09-19 08:25:50', '2023-09-19 08:25:50'),
(9, 11, '1695111950F1.jpg', 1, 0, '2023-09-19 08:25:50', '2023-09-19 08:25:50'),
(10, 10, '16951119741.webp', 0, 1, '2023-09-19 08:26:14', '2023-09-19 08:26:14'),
(11, 10, '1695111974F1.jpg', 1, 0, '2023-09-19 08:26:14', '2023-09-19 08:26:14'),
(12, 9, '16951120231_4.webp', 0, 1, '2023-09-19 08:27:04', '2023-09-19 08:27:04'),
(13, 9, '1695112024F2.jpg', 1, 0, '2023-09-19 08:27:04', '2023-09-19 08:27:04'),
(14, 8, '16951120701_5.webp', 0, 1, '2023-09-19 08:27:50', '2023-09-19 08:27:50'),
(15, 8, '1695112070F3.jpg', 1, 0, '2023-09-19 08:27:51', '2023-09-19 08:27:51'),
(16, 7, '16951121311_3.webp', 0, 1, '2023-09-19 08:28:52', '2023-09-19 08:28:52'),
(17, 7, '1695112132F4.jpg', 1, 0, '2023-09-19 08:28:52', '2023-09-19 08:28:52');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'L', '2023-07-28 06:30:27', '2023-07-28 06:30:27'),
(3, 'S', '2023-07-28 06:30:42', '2023-07-28 06:30:42'),
(4, 'M', '2023-07-28 06:31:03', '2023-07-28 06:31:03');

-- --------------------------------------------------------

--
-- Table structure for table `style_types`
--

CREATE TABLE `style_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `style_types`
--

INSERT INTO `style_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Sports', '2023-07-29 00:07:14', '2023-07-29 00:07:14'),
(3, 'Formal', '2023-07-29 00:07:23', '2023-07-29 00:07:23');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_id` int(11) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `page_url` varchar(255) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `set_order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `group_id`, `cat_id`, `name`, `page_url`, `meta_title`, `meta_keywords`, `meta_description`, `set_order`, `created_at`, `updated_at`) VALUES
(1, 6, 16, 'Saree', 'saree', NULL, NULL, NULL, 0, '2023-09-19 02:41:28', '2023-09-19 02:41:28'),
(2, 6, 15, 'Silk Saree', 'silk-saree', NULL, NULL, NULL, 0, '2023-09-19 02:41:47', '2023-09-19 02:41:47'),
(3, 6, 16, 'Evening Gown', 'evening-gown', NULL, NULL, NULL, 0, '2023-09-19 02:42:02', '2023-09-19 02:42:02'),
(4, 6, 16, 'Skirt', 'skirt', NULL, NULL, NULL, 0, '2023-09-19 02:42:16', '2023-09-19 02:42:16'),
(5, 7, 17, 'Suit', 'suit', NULL, NULL, NULL, 0, '2023-09-19 02:42:32', '2023-09-19 02:42:32'),
(6, 7, 17, 'Indo Western', 'indo-western', NULL, NULL, NULL, 0, '2023-09-19 02:42:49', '2023-09-19 02:42:49'),
(7, 7, 17, 'Suit Blazer', 'suit-blazer', NULL, NULL, NULL, 0, '2023-09-19 02:43:06', '2023-09-19 02:43:06'),
(8, 8, 18, 'Suit', 'suit', NULL, NULL, NULL, 0, '2023-09-19 02:43:23', '2023-09-19 02:43:23'),
(9, 8, 18, 'Blazers', 'blazers', NULL, NULL, NULL, 0, '2023-09-19 02:43:36', '2023-09-19 02:43:36'),
(10, 8, 19, 'Gown', 'gown', NULL, NULL, NULL, 0, '2023-09-19 02:43:52', '2023-09-19 02:43:52'),
(11, 8, 19, 'Crop Top', 'crop-top', NULL, NULL, NULL, 0, '2023-09-19 02:44:06', '2023-09-19 02:44:06');

-- --------------------------------------------------------

--
-- Table structure for table `sub_banners`
--

CREATE TABLE `sub_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(255) NOT NULL,
  `video_link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `set_order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `user_name`, `email`, `email_verified_at`, `password`, `mobile`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '1', 'Admin', '', 'admin@gmail.com', NULL, '$2y$10$e72baN/g/IhpkD4b0PJ9zuSE6mQN7VFBzoqKjCE3pymA1LUQtAsx.', '', NULL, '2023-07-28 03:04:25', '2023-07-28 03:04:25');

-- --------------------------------------------------------

--
-- Table structure for table `user_permissions`
--

CREATE TABLE `user_permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cname` varchar(255) NOT NULL,
  `permission` varchar(255) NOT NULL,
  `editperm` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_permissions`
--

INSERT INTO `user_permissions` (`id`, `cname`, `permission`, `editperm`, `created_at`, `updated_at`) VALUES
(1, 'admin', '1,2,3,4,5,6,7,8,9,10,11', '1,2,3,4,5,6,7,8,9,10,11', '2023-09-18 05:33:28', '2023-09-18 23:11:31'),
(2, 'mayudin', '1,2,3,4,5,6,7,8,9,10,11', '1,2,3,4,5,6,7,8,9,10,11', '2023-09-18 05:33:28', '2023-09-18 22:58:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colours`
--
ALTER TABLE `colours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupans`
--
ALTER TABLE `coupans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_attribute`
--
ALTER TABLE `product_attribute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `style_types`
--
ALTER TABLE `style_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_banners`
--
ALTER TABLE `sub_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_permissions`
--
ALTER TABLE `user_permissions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `colours`
--
ALTER TABLE `colours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `coupans`
--
ALTER TABLE `coupans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_attribute`
--
ALTER TABLE `product_attribute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `style_types`
--
ALTER TABLE `style_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sub_banners`
--
ALTER TABLE `sub_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_permissions`
--
ALTER TABLE `user_permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
