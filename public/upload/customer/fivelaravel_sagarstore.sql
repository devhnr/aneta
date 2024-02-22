-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 22, 2024 at 10:11 AM
-- Server version: 8.0.36
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fivelaravel_sagarstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `address_book`
--

CREATE TABLE `address_book` (
  `id` int NOT NULL,
  `userid` int NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `address2` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `default_address` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address_type` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `address_book`
--

INSERT INTO `address_book` (`id`, `userid`, `first_name`, `last_name`, `company`, `address1`, `address2`, `phone`, `email`, `city`, `pincode`, `state`, `country`, `default_address`, `address_type`) VALUES
(1, 4, 'mayudin', 'chauhan', NULL, 'lakhtar', 'surendranagar', '0123456789', 'mayudin@gmail.com', 'surendranagar', '123456', 'Gujarat', 'IN', NULL, NULL),
(2, 4, 'ventesh', 'devendra', NULL, 'ahmedabad', NULL, '1234567890', 'ventesh@gmail.com', 'ahmedabad', '123456', 'Gujarat', 'IN', NULL, NULL),
(3, 13, 'mayudin', 'Chauhan', NULL, 'Lakhtar', NULL, '7990739286', 'mayudin@gmail.com', 'surendranagar', '382775', 'Gujarat', 'IN', NULL, NULL),
(16, 3, 'AKASH ', 'PAWAR', 'Sagar', 'Jalna Maharashtra', 'Jindal market jalna ', '7038692042', 'akki@gmail.com', 'jalna ', '431203', '9', '5', '1', NULL),
(17, 3, 'AKASH ', 'PAWAR', 'Sagar', 'Jalna Maharashtra', 'Jindal market jalna ', '7038692042', 'akki@gmail.com', 'jalna ', '431203', '9', '5', '1', NULL),
(58, 7, 'Mudit', 'Agarwal', NULL, 'B-307, Naman Midtown, Prabhadevi', 'mumbai', '1234567890', 'mudit.fiveonline@gmail.com', 'Mumbai', '400024', '9', '5', NULL, NULL),
(69, 9, 'Yatrik', 'Kubadia', 'hnr', '307, B Wing, Naman Midtown', '', '9033259413', 'devang@gmail.com', 'Mumbai', '400013', '9', '5', '1', NULL),
(73, 9, 'Rajnikant', 'patel', 'hnr', 'Vastral', '', '9033259413', 'devang@gmail.com', 'AMD', '400028', '9', '5', '1', NULL),
(74, 9, 'Rajnikant', 'patel', 'hnr', 'Vastral', '', '9033259413', 'devang@gmail.com', 'AMD', '400028', '9', '5', '1', NULL),
(87, 1, 'dev', 'Patel', 'Dev Test Compant', 'Brahmpole street', '', '9033259413', 'devang.hnrtechnologies@gmail.com', 'lakhtar', '382775', '8', '5', '1', NULL),
(90, 1, 'dev 2', 'Patel', 'Dev Test Compant', 'Brahmpole street', '', '9033259413', 'devang.hnrtechnologies@gmail.com', 'lakhtar', '382775', '8', '5', '1', NULL),
(91, 7, 'Mudit', 'Agarwal', 'Five Online', 'B-307, Naman Midtown, Prabhadevi', '', '9833515678', 'mudit.fiveonline@gmail.com', 'Mumbai', '400024', '9', '5', '1', NULL),
(92, 10, 'ventesh', 'devendra', 'company', 'Ahmedabad', '', '9033259413', 'ventesh.hnrtechnologies@gmail.com', 'Ahmedbad', '382418', '8', '5', '1', NULL),
(93, 10, 'Venkatesh', 'Devendra', 'Five Online Live', 'Meghaninagar', 'Address 2', '1234567890', 'ventesh.hnrtechnologies@gmail.com', 'Ahmedabad', '380016', '8', '5', '1', NULL),
(94, 3, 'sagar ', 'paridhan ', 'Sagar', 'Jalna Maharashtra', 'Jindal market jalna ', '9403436751', 'akki@gmail.com', 'jalna ', '431203', '9', '5', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `set_order` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `sub_title`, `image`, `link`, `set_order`, `created_at`, `updated_at`) VALUES
(6, 'Exclusive Collection', 'Most Exclusive Brands', '1690544425fashion1_1.jpg', 'https://fiveonline.live/sagarstore/collection/man', 2, '2023-07-28 06:10:26', '2023-10-29 10:33:59'),
(7, 'Discover Bestseller', 'most unique style', '1703754921ben-edit-01.jpg', 'https://fiveonline.live/sagarstore/collection/latest-suits', 1, '2023-07-28 06:11:11', '2023-12-29 12:00:24'),
(9, NULL, NULL, '16970303741_2_1920x950_1.webp', 'https://fiveonline.live/sagarstore/product/kid-s-wear', 3, '2023-09-18 10:19:04', '2023-12-22 12:14:49'),
(10, 'winter  Collection', 'Expensive Offer', '1698317012win-3.jpg', 'https://fiveonline.live/sagarstore/collection/women', 4, '2023-10-06 13:49:09', '2023-12-22 12:33:58');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `page_url`, `image`, `short_description`, `description`, `created_at`, `updated_at`) VALUES
(6, 'The best way to predict the future is to create it', 'the-best-way-to-predict-the-future-is-to-create-it', '1691672315bg1.webp', '', NULL, '2023-08-10 12:58:35', '2023-08-10 12:58:35'),
(8, 'Winners make a habit of facturing positive', 'winners-make-a-habit-of-facturing-positive', '1696916207bg2.webp', 'Lorem ipsum is simply dummy text printing typesetting industry lorem ipsum has dummy...', NULL, '2023-10-10 05:36:47', '2023-12-21 11:40:18');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `group_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `set_order` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `group_id`, `name`, `page_url`, `meta_title`, `meta_keywords`, `meta_description`, `set_order`, `created_at`, `updated_at`) VALUES
(15, '7', 'Girls', 'girls', NULL, NULL, NULL, 8, '2023-09-19 09:09:43', '2023-09-19 09:09:43'),
(16, '7', 'Boys', 'boys', NULL, NULL, NULL, 7, '2023-09-19 09:09:54', '2023-11-23 12:33:13'),
(17, '8', 'Sherwani', '-sherwani', NULL, NULL, NULL, 2, '2023-09-19 09:10:05', '2023-11-16 06:31:23'),
(18, '9', 'Designer Saree', 'designer-saree', NULL, NULL, NULL, 5, '2023-09-19 09:10:15', '2023-11-16 07:56:37'),
(19, '9', 'Silk Saree\'s', 'silk-saree-s', NULL, NULL, NULL, 1, '2023-09-19 09:10:24', '2023-11-16 07:34:19'),
(20, '8', 'Men\'s Suits', 'men-s-suits', 'Men\'s Suit', NULL, NULL, 1, '2023-09-19 10:44:29', '2023-11-16 06:18:40'),
(26, '8', 'Bandi Kurtas', '-bandi-kurtas', NULL, NULL, NULL, 4, '2023-10-27 12:59:35', '2023-11-16 07:13:16'),
(31, '8', 'Accesries', 'accesries', NULL, NULL, NULL, 5, '2023-11-16 07:15:59', '2023-11-16 07:15:59'),
(33, '9', 'Printed Saree', 'printed-saree', NULL, NULL, NULL, 0, '2023-11-16 08:02:58', '2023-11-16 08:02:58'),
(34, '9', 'Occasion', 'occasion', NULL, NULL, NULL, 6, '2023-11-16 08:07:13', '2023-11-16 08:07:13'),
(35, '17', 'Style', 'style', NULL, NULL, NULL, 0, '2023-11-16 09:39:35', '2023-11-16 09:39:35'),
(36, '17', 'Occasion', 'occasion', NULL, NULL, NULL, 0, '2023-11-16 09:46:14', '2023-11-16 09:46:14'),
(37, '18', 'Styles', 'styles', NULL, NULL, NULL, 0, '2023-11-16 09:59:29', '2024-02-22 09:56:52'),
(38, '18', 'Occasion', 'occasion', NULL, NULL, NULL, 0, '2023-11-16 10:06:54', '2023-11-16 10:06:54');

-- --------------------------------------------------------

--
-- Table structure for table `ci_orders`
--

CREATE TABLE `ci_orders` (
  `order_id` int NOT NULL,
  `user_id` int NOT NULL,
  `order_number` varchar(100) DEFAULT NULL,
  `order_total` decimal(15,2) NOT NULL,
  `order_status` varchar(1) NOT NULL,
  `transactionid` varchar(255) NOT NULL,
  `tracking_id` varchar(255) DEFAULT NULL,
  `bank_ref_no` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) NOT NULL,
  `paymentmode` int NOT NULL COMMENT '"1" Cash,"2" online',
  `shippingcost` varchar(20) NOT NULL,
  `coup_name` varchar(255) NOT NULL,
  `coupondiscount` varchar(255) NOT NULL,
  `coupon_code` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `order_currency` varchar(255) NOT NULL,
  `list_order_status` varchar(255) DEFAULT NULL,
  `shipment_order_id` varchar(255) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `schedule_pickup` varchar(255) DEFAULT NULL,
  `booking_status` varchar(255) DEFAULT NULL,
  `create_lable_weight` varchar(255) DEFAULT NULL,
  `create_lable_length` varchar(255) DEFAULT NULL,
  `create_lable_height` varchar(255) DEFAULT NULL,
  `create_lable_width` varchar(255) DEFAULT NULL,
  `shipment_id` varchar(255) DEFAULT NULL,
  `generate_label` varchar(255) DEFAULT NULL,
  `track_url` text,
  `order_status_shiprocket` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_orders`
--

INSERT INTO `ci_orders` (`order_id`, `user_id`, `order_number`, `order_total`, `order_status`, `transactionid`, `tracking_id`, `bank_ref_no`, `payment_status`, `paymentmode`, `shippingcost`, `coup_name`, `coupondiscount`, `coupon_code`, `created_at`, `order_currency`, `list_order_status`, `shipment_order_id`, `ip_address`, `schedule_pickup`, `booking_status`, `create_lable_weight`, `create_lable_length`, `create_lable_height`, `create_lable_width`, `shipment_id`, `generate_label`, `track_url`, `order_status_shiprocket`) VALUES
(1, 1, '1', 1225.00, 'P', '', NULL, NULL, 'Success', 1, '0', '', '0', '', '2023-09-29 11:24:57', 'INR', '0', NULL, '103.85.8.157', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(2, 1, '2', 922.00, 'P', '', NULL, NULL, 'Success', 1, '0', '', '103', 'NAV123', '2023-10-05 13:15:42', 'INR', '0', NULL, '103.85.10.107', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(3, 1, '3', 3213.00, 'P', '', NULL, NULL, 'Success', 1, '0', '', '357', 'NAV123', '2023-10-05 13:27:11', 'INR', '0', NULL, '103.85.10.107', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(4, 1, '4', 1890.00, 'P', '', NULL, NULL, 'Success', 1, '0', '', '210', 'NAV123', '2023-10-06 07:29:57', 'INR', '0', NULL, '103.85.8.39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(5, 1, '5', 1593.00, 'P', '', NULL, NULL, 'Success', 1, '0', '', '177', 'NAV123', '2023-10-06 10:18:46', 'INR', '0', NULL, '103.85.8.39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(6, 1, '6', 720.00, 'P', '', NULL, NULL, 'Success', 1, '0', '', '80', 'NAV123', '2023-10-06 12:24:25', 'INR', '0', NULL, '110.226.180.107', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(7, 1, '7', 940.00, 'P', '', NULL, NULL, 'Success', 1, '0', '', '0', '', '2023-10-07 05:16:29', 'INR', '0', NULL, '150.129.206.90', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(8, 1, '8', 8000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 08:58:30', 'INR', '0', NULL, '152.58.34.5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(9, 1, '9', 8000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 08:59:10', 'INR', '0', NULL, '152.58.34.5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(10, 1, '10', 8000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 08:59:25', 'INR', '0', NULL, '152.58.34.5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(11, 1, '11', 8000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 08:59:59', 'INR', '0', NULL, '152.58.34.5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(12, 1, '12', 8000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 09:12:00', 'INR', '0', NULL, '152.58.34.5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(13, 1, '13', 8000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 09:43:53', 'INR', '0', NULL, '152.58.34.5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(14, 1, '14', 8000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 09:44:29', 'INR', '0', NULL, '152.58.34.5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(15, 1, '15', 8000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 09:45:20', 'INR', '0', NULL, '152.58.34.5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(16, 1, '16', 8000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 09:45:52', 'INR', '0', NULL, '152.58.34.5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(17, 1, '17', 8000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 09:58:57', 'INR', '0', NULL, '152.58.34.5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(18, 1, '18', 8000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 09:59:53', 'INR', '0', NULL, '152.58.34.5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(19, 1, '19', 8000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 10:00:32', 'INR', '0', NULL, '152.58.34.5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(20, 1, '20', 8000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 10:04:26', 'INR', '0', NULL, '152.58.34.5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(21, 1, '21', 8000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 10:18:01', 'INR', '0', NULL, '152.58.34.5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(22, 1, '22', 8000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 10:31:31', 'INR', '0', NULL, '152.58.34.5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(23, 1, '23', 8000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 10:32:58', 'INR', '0', NULL, '152.58.34.5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(24, 1, '24', 8000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 10:35:00', 'INR', '0', NULL, '152.58.34.5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(25, 1, '25', 8000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 10:35:39', 'INR', '0', NULL, '152.58.34.5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(26, 1, '26', 8000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 10:36:03', 'INR', '0', NULL, '152.58.34.5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(27, 1, '27', 8000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 10:36:43', 'INR', '0', NULL, '152.58.34.5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(28, 1, '28', 8000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 10:37:36', 'INR', '0', NULL, '152.58.34.5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(29, 1, '29', 8000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 10:40:12', 'INR', '0', NULL, '152.58.34.5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(30, 1, '30', 8000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 10:55:27', 'INR', '0', NULL, '152.58.34.5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(31, 1, '31', 8000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 11:09:13', 'INR', '0', NULL, '152.58.34.5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(32, 1, '32', 8000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 11:09:43', 'INR', '0', NULL, '152.58.34.5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(33, 1, '33', 12000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 11:15:32', 'INR', '0', NULL, '152.58.34.5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(34, 1, '34', 12000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 11:51:27', 'INR', '0', NULL, '152.58.34.33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(35, 1, '35', 12000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 11:55:14', 'INR', '0', NULL, '152.58.34.33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(36, 1, '36', 12000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 11:59:12', 'INR', '0', NULL, '152.58.34.33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(37, 1, '37', 9500.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 12:03:53', 'INR', '0', NULL, '152.58.34.33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(38, 1, '38', 8000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 12:08:13', 'INR', '0', NULL, '152.58.34.33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(39, 1, '39', 8000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 12:33:21', 'INR', '0', NULL, '152.58.34.33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(40, 1, '40', 7200.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 12:38:23', 'INR', '0', NULL, '152.58.34.33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(41, 1, '41', 7200.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 15:07:45', 'INR', '0', NULL, '152.58.60.161', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(42, 1, '42', 12000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 15:28:09', 'INR', '0', NULL, '152.58.60.161', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(43, 1, '43', 13000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 15:31:03', 'INR', '0', NULL, '152.58.60.161', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(44, 1, '44', 8000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 15:41:07', 'INR', '0', NULL, '152.58.60.161', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(45, 1, '45', 13000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-07 15:47:42', 'INR', '0', NULL, '152.58.60.161', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(46, 1, '46', 13000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-13 05:32:23', 'INR', '0', NULL, '103.85.8.46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(47, 1, '47', 13000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-13 05:33:40', 'INR', '0', NULL, '103.85.8.46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(48, 1, '48', 13000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-13 05:34:42', 'INR', '0', NULL, '103.85.8.46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(49, 1, '49', 13000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-13 05:39:44', 'INR', '0', NULL, '103.85.8.46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(50, 1, '50', 12000.00, 'P', '', '312010699094', '1702450562384', 'Success', 2, '0', '', '0', '', '2023-12-13 06:55:34', 'INR', '0', NULL, '103.85.8.46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(51, 1, '51', 12000.00, 'P', '', NULL, NULL, 'Success', 1, '0', '', '0', '', '2023-12-13 07:27:04', 'INR', '0', NULL, '103.85.8.46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(52, 1, '52', 9000.00, 'P', '', '312010699508', '1702452533609', 'Success', 2, '0', '', '0', '', '2023-12-13 07:28:28', 'INR', '0', NULL, '103.85.8.46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(53, 1, '53', 9000.00, 'P', '', '312010699545', '1702452821616', 'Success', 2, '0', '', '0', '', '2023-12-13 07:32:59', 'INR', '0', NULL, '103.85.8.46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(54, 1, '54', 9000.00, 'P', '', '312010699652', '1702453440389', 'Success', 2, '0', '', '0', '', '2023-12-13 07:43:40', 'INR', '0', NULL, '103.85.8.46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(55, 1, '55', 10000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-13 08:38:19', 'INR', '0', NULL, '103.85.8.46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(57, 1, '57', 13000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-13 11:39:59', 'INR', '0', NULL, '103.85.8.46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(58, 1, '58', 9000.00, 'P', '', '312010702102', '1702467901893', 'Success', 2, '0', '', '0', '', '2023-12-13 11:43:37', 'INR', '0', NULL, '103.85.8.46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(59, 9, '59', 4915.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-13 11:46:18', 'INR', '0', NULL, '110.226.179.77', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(60, 9, '60', 4915.00, 'P', '', '312010702153', '1702468156260', 'Success', 2, '0', '', '0', '', '2023-12-13 11:48:36', 'INR', '0', '452188949', '110.226.179.77', NULL, NULL, '1', '1', '1', '1', '450357371', NULL, NULL, ''),
(61, 1, '61', 9000.00, 'P', '', '312010707421', '1702542163796', 'Success', 2, '0', '', '0', '', '2023-12-14 08:21:59', 'INR', '0', '452150432', '103.85.9.184', NULL, NULL, '1', '1', '1', '1', '450318855', NULL, NULL, ''),
(62, 1, '62', 9000.00, 'P', '', '312010708163', '1702547129057', 'Success', 2, '0', '', '0', '', '2023-12-14 09:45:04', 'INR', '0', '452198927', '103.85.9.184', NULL, NULL, '1', '1', '1', '1', '450367348', NULL, NULL, ''),
(63, 1, '63', 22640.00, 'P', '', '312010708432', '1702548409787', 'Success', 2, '0', '', '0', '', '2023-12-14 10:06:07', 'INR', '0', '452217481', '103.85.9.184', NULL, NULL, '1', '1', '1', '1', '450385902', NULL, NULL, ''),
(64, 1, '64', 9000.00, 'P', '', '312010708935', '1702550597966', 'Success', 2, '0', '', '0', '', '2023-12-14 10:42:51', 'INR', '0', '452237921', '103.85.9.184', NULL, NULL, '2', '2', '2', '2', '450406342', NULL, NULL, ''),
(65, 1, '65', 7200.00, 'P', '', '312010709137', '1702551533637', 'Success', 2, '0', '', '0', '', '2023-12-14 10:58:10', 'INR', '0', '452247885', '103.85.9.184', NULL, NULL, '1', '1', '1', '1', '450416304', 'https://kr-shipmultichannel-mum.s3.ap-south-1.amazonaws.com/4224880/labels/993888658final_labels_amazon.pdf', 'https://shiprocket.co/tracking/338440947808', 'Canceled'),
(66, 1, '66', 10640.00, 'P', '', '312010709218', '1702551893960', 'Success', 2, '0', '', '0', '', '2023-12-14 11:04:34', 'INR', '0', '452251079', '103.85.9.184', NULL, NULL, '1', '1', '1', '1', '450419497', 'https://kr-shipmultichannel-mum.s3.ap-south-1.amazonaws.com/4224880/labels/10672332final_labels_amazon.pdf', NULL, ''),
(67, 1, '67', 9000.00, 'P', '', '312010711826', '1702615751869', 'Success', 2, '0', '', '0', '', '2023-12-15 04:48:28', 'INR', '0', '452628875', '103.85.9.74', NULL, NULL, '1', '1', '1', '1', '450797274', 'https://kr-shipmultichannel-mum.s3.ap-south-1.amazonaws.com/4224880/labels/870982689final_labels_amazon.pdf', 'https://shiprocket.co/tracking/338454424975', 'Canceled'),
(68, 1, '68', 12000.00, 'P', '', '312010724576', '1702893140472', 'Success', 2, '0', '', '0', '', '2023-12-18 09:40:47', 'INR', '0', '458514828', '103.85.8.87', NULL, NULL, '1', '1', '1', '1', '456680913', NULL, NULL, ''),
(69, 1, '69', 12000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-18 09:57:52', 'INR', '0', NULL, '103.85.8.87', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(70, 1, '70', 9000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-19 09:30:06', 'INR', '0', NULL, '103.238.107.84', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(71, 1, '71', 12000.00, 'P', '', NULL, NULL, 'Success', 1, '0', '', '0', '', '2023-12-22 10:43:02', 'INR', '0', '458512782', '103.85.9.83', NULL, NULL, '1', '1', '1', '1', '456678868', NULL, NULL, ''),
(72, 1, '72', 12000.00, 'P', '', NULL, NULL, 'Success', 1, '0', '', '0', '', '2023-12-25 11:22:56', 'INR', '0', '458517449', '103.238.107.28', NULL, NULL, '1', '1', '1', '1', '456683534', 'https://kr-shipmultichannel-mum.s3.ap-south-1.amazonaws.com/4105867/labels/1238772341final_labels_amazon.pdf', 'https://shiprocket.co/tracking/338659069360', 'Canceled'),
(73, 1, '73', 8000.00, 'P', '', NULL, NULL, 'Success', 1, '0', '', '0', '', '2023-12-26 06:38:59', 'INR', '0', '458914180', '103.238.107.245', NULL, NULL, '1', '1', '1', '1', '457080233', NULL, NULL, 'Canceled'),
(74, 1, '74', 10640.00, 'P', '', NULL, NULL, 'Success', 1, '0', '', '0', '', '2023-12-26 06:46:57', 'INR', '0', '458921676', '103.238.107.245', NULL, NULL, '1', '0.6', '0.6', '0.6', '457087730', 'https://kr-shipmultichannel-mum.s3.ap-south-1.amazonaws.com/4105867/labels/1703573726_shipping-label-457087730-77870459376.pdf', NULL, ''),
(75, 1, '75', 10640.00, 'P', '', NULL, NULL, 'Success', 1, '0', '', '0', '', '2023-12-26 06:56:32', 'INR', '0', '458931107', '103.238.107.245', NULL, NULL, '0.3', '06', '0.6', '0.6', '457097159', NULL, NULL, ''),
(76, 1, '76', 9000.00, 'P', '', NULL, NULL, 'Success', 1, '0', '', '0', '', '2023-12-26 09:17:10', 'INR', '0', '459163983', '103.238.107.245', NULL, NULL, '0.2', '0.5', '0.5', '0.5', '457330009', 'https://kr-shipmultichannel-mum.s3.ap-south-1.amazonaws.com/4105867/labels/1703595709_shipping-label-457330009-77870833725.pdf', 'https://shiprocket.co/tracking/77870833725', 'Pickup Exception'),
(77, 1, '77', 12000.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2023-12-27 05:02:32', 'INR', '0', NULL, '103.238.106.150', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(78, 1, '78', 12000.00, 'P', '', '312010763232', '6e6482487f2c', 'Success', 2, '0', '', '0', '', '2023-12-27 05:03:05', 'INR', '0', NULL, '103.238.106.150', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(79, 7, '79', 800.00, 'P', '', '312010764978', 'e13f6575ee6e', 'Success', 2, '0', '', '0', '', '2023-12-27 07:30:04', 'INR', '0', NULL, '103.167.48.7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(80, 1, '80', 9000.00, 'P', '', NULL, NULL, 'Success', 1, '0', '', '0', '', '2023-12-28 05:57:52', 'INR', '0', NULL, '103.238.106.202', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(81, 10, '81', 9000.00, 'P', '', NULL, NULL, 'Success', 1, '0', '', '0', '', '2023-12-28 09:42:18', 'INR', '0', NULL, '103.238.106.202', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(82, 10, '82', 12000.00, 'P', '', NULL, NULL, 'Success', 1, '0', '', '0', '', '2024-01-01 09:11:37', 'INR', '0', NULL, '103.85.11.193', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(83, 10, '83', 12000.00, 'P', '', '313010786021', 'b41237f82b00', 'Success', 2, '0', '', '0', '', '2024-01-01 09:13:42', 'INR', '0', NULL, '103.85.11.193', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(84, 10, '84', 8000.00, 'P', '', '313010786128', '4757d00b7b61', 'Success', 2, '0', '', '0', '', '2024-01-01 09:31:32', 'INR', '0', NULL, '103.85.11.193', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(85, 7, '85', 800.00, 'P', '', '313010789146', 'e8ada8306b21', 'Success', 2, '0', '', '0', '', '2024-01-02 07:19:49', 'INR', '0', '462692638', '110.226.181.198', NULL, NULL, '1', '1', '1', '1', '460857862', 'https://kr-shipmultichannel-mum.s3.ap-south-1.amazonaws.com/4105867/labels/1704780380_shipping-label-460857862-7D9379582.pdf', NULL, ''),
(86, 10, '86', 12000.00, 'P', '', '313010789659', '3d55267de255', 'Success', 2, '0', '', '0', '', '2024-01-02 08:21:16', 'INR', '0', NULL, '103.81.93.184', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(87, 1, '87', 9000.00, 'P', '', '313010794000', 'bs71b513321a93', 'Success', 2, '0', '', '0', '', '2024-01-03 05:21:39', 'INR', '0', NULL, '103.238.106.43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(88, 7, '88', 8091.00, 'P', '', '313010820902', 'bsf3e26b1914f0', 'Success', 2, '0', '', '899', 'SSrebulicDay', '2024-01-09 06:19:01', 'INR', '0', '466786564', '110.226.176.44', NULL, NULL, '10', '10', '10', '10', '464950905', NULL, NULL, ''),
(89, 3, '89', 18595.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2024-01-09 06:38:32', 'INR', '0', NULL, '223.233.84.168', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(90, 1, '90', 11595.00, 'P', '', NULL, NULL, 'Success', 1, '0', '', '0', '', '2024-01-18 06:40:11', 'INR', '0', NULL, '150.129.206.173', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(91, 3, '91', 19330.00, 'P', '', NULL, NULL, 'Success', 1, '0', '', '0', '', '2024-01-30 06:08:59', 'INR', '0', NULL, '223.233.82.4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(92, 3, '92', 10595.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2024-02-07 15:03:36', 'INR', '0', NULL, '152.57.33.102', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(93, 3, '93', 37190.00, 'P', '', NULL, NULL, 'FAILED', 2, '0', '', '0', '', '2024-02-13 05:14:43', 'INR', '0', NULL, '223.233.85.12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `ci_order_item`
--

CREATE TABLE `ci_order_item` (
  `order_item_id` int NOT NULL,
  `order_id` int NOT NULL,
  `user_info_id` int NOT NULL,
  `product_id` int NOT NULL,
  `order_item_code` varchar(255) NOT NULL,
  `order_item_name` varchar(255) NOT NULL,
  `product_quantity` int NOT NULL,
  `product_item_price` decimal(15,5) NOT NULL,
  `product_discount_amount` varchar(255) DEFAULT NULL,
  `order_item_currency` varchar(64) NOT NULL,
  `order_status` varchar(11) NOT NULL,
  `cdate` date NOT NULL,
  `deleted` int NOT NULL DEFAULT '0',
  `size_id` int NOT NULL,
  `size_name` varchar(255) NOT NULL,
  `colour_id` int NOT NULL,
  `colour_name` varchar(255) NOT NULL,
  `base_image` varchar(255) NOT NULL,
  `return_reasons` varchar(255) NOT NULL,
  `return_comment` text NOT NULL,
  `is_return` int NOT NULL,
  `exchange_comment` text NOT NULL,
  `size_exchnage` varchar(255) NOT NULL,
  `is_exchnage` int NOT NULL,
  `is_cancel` int NOT NULL,
  `return_image` varchar(255) NOT NULL,
  `return_refund` int NOT NULL COMMENT '(1 = wallet , 2 = refund)',
  `return_order_date` date NOT NULL,
  `reedem_approve` int NOT NULL COMMENT '(0 = no-approve,1 = approve )',
  `exchange_reasons` varchar(255) NOT NULL,
  `exchange_image` varchar(255) NOT NULL,
  `exchange_refund` int NOT NULL,
  `exchange_order_date` date NOT NULL,
  `sku_code` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `product_code` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_order_item`
--

INSERT INTO `ci_order_item` (`order_item_id`, `order_id`, `user_info_id`, `product_id`, `order_item_code`, `order_item_name`, `product_quantity`, `product_item_price`, `product_discount_amount`, `order_item_currency`, `order_status`, `cdate`, `deleted`, `size_id`, `size_name`, `colour_id`, `colour_name`, `base_image`, `return_reasons`, `return_comment`, `is_return`, `exchange_comment`, `size_exchnage`, `is_exchnage`, `is_cancel`, `return_image`, `return_refund`, `return_order_date`, `reedem_approve`, `exchange_reasons`, `exchange_image`, `exchange_refund`, `exchange_order_date`, `sku_code`, `product_code`) VALUES
(1, 1, 1, 21, '', 'Navy Cotton Printed Jacket', 1, 940.00000, '940', '', '', '2023-09-29', 0, 3, 'S', 4, 'Lime', '1695463322-20043084-01.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', '', ''),
(2, 1, 1, 20, '', 'Orange Cotton Printed Long Kurta', 1, 300.00000, '285', '', '', '2023-09-29', 0, 3, 'S', 3, 'Aqua', '1695463364-20058041-01.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', '', ''),
(3, 2, 1, 21, '', 'Navy Cotton Printed Jacket', 1, 940.00000, '940', '', '', '2023-10-05', 0, 3, 'S', 4, 'Lime', '1695463322-20043084-01.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', '', ''),
(4, 2, 1, 20, '', 'Orange Cotton Printed Long Kurta', 1, 100.00000, '85', '', '', '2023-10-05', 0, 3, 'S', 2, 'Blue', '1695463364-20058041-01.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', '', ''),
(5, 3, 1, 20, '', 'Orange Cotton Printed Long Kurta', 2, 200.00000, '185', '', '', '2023-10-05', 0, 2, 'L', 4, 'Lime', '1695463364-20058041-01.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', '', ''),
(6, 3, 1, 22, '', 'Cotton Block Printed Top', 4, 850.00000, '800', '', '', '2023-10-05', 0, 3, 'S', 4, 'Lime', '1695463565-10717734-1.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', '', ''),
(7, 4, 1, 22, '', 'Cotton Block Printed Top', 2, 850.00000, '800', '', '', '2023-10-06', 0, 3, 'S', 4, 'Lime', '1695463565-10717734-1.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'A-125', '12003'),
(8, 4, 1, 21, '', 'Navy Cotton Printed Jacket', 1, 500.00000, '500', '', '', '2023-10-06', 0, 4, 'M', 3, 'Aqua', '1695463322-20043084-01.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'A-1234', '12554'),
(9, 5, 1, 22, '', 'Cotton Block Printed Top', 2, 850.00000, '800', '', '', '2023-10-06', 0, 3, 'S', 4, 'Lime', '1695463565-10717734-1.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'A-125', '12003'),
(10, 5, 1, 20, '', 'Orange Cotton Printed Long Kurta', 2, 100.00000, '85', '', '', '2023-10-06', 0, 3, 'S', 2, 'Blue', '1695463364-20058041-01.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'A-224', 'A-5628'),
(11, 6, 1, 22, '', 'Cotton Block Printed Top', 1, 850.00000, '800', '', '', '2023-10-06', 0, 3, 'S', 4, 'Lime', '1695463565-10717734-1.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'A-125', '12003'),
(12, 7, 1, 21, '', 'Navy Cotton Printed Jacket', 1, 940.00000, '940', '', '', '2023-10-07', 0, 3, 'S', 4, 'Lime', '1695463322-20043084-01.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'A-1234', '12554'),
(13, 8, 1, 34, '', 'Tuxedo Suit\'s', 1, 8000.00000, '8000', '', '', '2023-12-07', 0, 10, '34', 2, 'Blue', '1700716638-suit-edit-03.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'Tuxedo Suit\'s'),
(14, 9, 1, 34, '', 'Tuxedo Suit\'s', 1, 8000.00000, '8000', '', '', '2023-12-07', 0, 10, '34', 2, 'Blue', '1700716638-suit-edit-03.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'Tuxedo Suit\'s'),
(15, 10, 1, 34, '', 'Tuxedo Suit\'s', 1, 8000.00000, '8000', '', '', '2023-12-07', 0, 10, '34', 2, 'Blue', '1700716638-suit-edit-03.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'Tuxedo Suit\'s'),
(16, 11, 1, 34, '', 'Tuxedo Suit\'s', 1, 8000.00000, '8000', '', '', '2023-12-07', 0, 10, '34', 2, 'Blue', '1700716638-suit-edit-03.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'Tuxedo Suit\'s'),
(17, 12, 1, 34, '', 'Tuxedo Suit\'s', 1, 8000.00000, '8000', '', '', '2023-12-07', 0, 10, '34', 2, 'Blue', '1700716638-suit-edit-03.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'Tuxedo Suit\'s'),
(18, 13, 1, 34, '', 'Tuxedo Suit\'s', 1, 8000.00000, '8000', '', '', '2023-12-07', 0, 10, '34', 2, 'Blue', '1700716638-suit-edit-03.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'Tuxedo Suit\'s'),
(19, 14, 1, 34, '', 'Tuxedo Suit\'s', 1, 8000.00000, '8000', '', '', '2023-12-07', 0, 10, '34', 2, 'Blue', '1700716638-suit-edit-03.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'Tuxedo Suit\'s'),
(20, 15, 1, 34, '', 'Tuxedo Suit\'s', 1, 8000.00000, '8000', '', '', '2023-12-07', 0, 10, '34', 2, 'Blue', '1700716638-suit-edit-03.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'Tuxedo Suit\'s'),
(21, 16, 1, 34, '', 'Tuxedo Suit\'s', 1, 8000.00000, '8000', '', '', '2023-12-07', 0, 10, '34', 2, 'Blue', '1700716638-suit-edit-03.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'Tuxedo Suit\'s'),
(22, 17, 1, 34, '', 'Tuxedo Suit\'s', 1, 8000.00000, '8000', '', '', '2023-12-07', 0, 10, '34', 2, 'Blue', '1700716638-suit-edit-03.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'Tuxedo Suit\'s'),
(23, 18, 1, 34, '', 'Tuxedo Suit\'s', 1, 8000.00000, '8000', '', '', '2023-12-07', 0, 10, '34', 2, 'Blue', '1700716638-suit-edit-03.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'Tuxedo Suit\'s'),
(24, 19, 1, 34, '', 'Tuxedo Suit\'s', 1, 8000.00000, '8000', '', '', '2023-12-07', 0, 10, '34', 2, 'Blue', '1700716638-suit-edit-03.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'Tuxedo Suit\'s'),
(25, 20, 1, 34, '', 'Tuxedo Suit\'s', 1, 8000.00000, '8000', '', '', '2023-12-07', 0, 10, '34', 2, 'Blue', '1700716638-suit-edit-03.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'Tuxedo Suit\'s'),
(26, 21, 1, 34, '', 'Tuxedo Suit\'s', 1, 8000.00000, '8000', '', '', '2023-12-07', 0, 10, '34', 2, 'Blue', '1700716638-suit-edit-03.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'Tuxedo Suit\'s'),
(27, 22, 1, 34, '', 'Tuxedo Suit\'s', 1, 8000.00000, '8000', '', '', '2023-12-07', 0, 10, '34', 2, 'Blue', '1700716638-suit-edit-03.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'Tuxedo Suit\'s'),
(28, 23, 1, 34, '', 'Tuxedo Suit\'s', 1, 8000.00000, '8000', '', '', '2023-12-07', 0, 10, '34', 2, 'Blue', '1700716638-suit-edit-03.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'Tuxedo Suit\'s'),
(29, 24, 1, 34, '', 'Tuxedo Suit\'s', 1, 8000.00000, '8000', '', '', '2023-12-07', 0, 10, '34', 2, 'Blue', '1700716638-suit-edit-03.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'Tuxedo Suit\'s'),
(30, 25, 1, 34, '', 'Tuxedo Suit\'s', 1, 8000.00000, '8000', '', '', '2023-12-07', 0, 10, '34', 2, 'Blue', '1700716638-suit-edit-03.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'Tuxedo Suit\'s'),
(31, 26, 1, 34, '', 'Tuxedo Suit\'s', 1, 8000.00000, '8000', '', '', '2023-12-07', 0, 10, '34', 2, 'Blue', '1700716638-suit-edit-03.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'Tuxedo Suit\'s'),
(32, 27, 1, 34, '', 'Tuxedo Suit\'s', 1, 8000.00000, '8000', '', '', '2023-12-07', 0, 10, '34', 2, 'Blue', '1700716638-suit-edit-03.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'Tuxedo Suit\'s'),
(33, 28, 1, 34, '', 'Tuxedo Suit\'s', 1, 8000.00000, '8000', '', '', '2023-12-07', 0, 10, '34', 2, 'Blue', '1700716638-suit-edit-03.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'Tuxedo Suit\'s'),
(34, 29, 1, 34, '', 'Tuxedo Suit\'s', 1, 8000.00000, '8000', '', '', '2023-12-07', 0, 10, '34', 2, 'Blue', '1700716638-suit-edit-03.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'Tuxedo Suit\'s'),
(35, 30, 1, 34, '', 'Tuxedo Suit\'s', 1, 8000.00000, '8000', '', '', '2023-12-07', 0, 10, '34', 2, 'Blue', '1700716638-suit-edit-03.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'Tuxedo Suit\'s'),
(36, 31, 1, 34, '', 'Tuxedo Suit\'s', 1, 8000.00000, '8000', '', '', '2023-12-07', 0, 10, '34', 2, 'Blue', '1700716638-suit-edit-03.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'Tuxedo Suit\'s'),
(37, 32, 1, 34, '', 'Tuxedo Suit\'s', 1, 8000.00000, '8000', '', '', '2023-12-07', 0, 10, '34', 2, 'Blue', '1700716638-suit-edit-03.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'Tuxedo Suit\'s'),
(38, 33, 1, 44, '', 'New and Perfect Jodhpuri Suit\'s', 1, 12000.00000, '0', '', '', '2023-12-07', 0, 11, '38', 6, 'Brown', '1700731377-23-11-23.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New and Perfect Jodhpuri Suit\'s'),
(39, 34, 1, 44, '', 'New and Perfect Jodhpuri Suit\'s', 1, 12000.00000, '0', '', '', '2023-12-07', 0, 11, '38', 6, 'Brown', '1700731377-23-11-23.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New and Perfect Jodhpuri Suit\'s'),
(40, 35, 1, 44, '', 'New and Perfect Jodhpuri Suit\'s', 1, 12000.00000, '0', '', '', '2023-12-07', 0, 11, '38', 6, 'Brown', '1700731377-23-11-23.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New and Perfect Jodhpuri Suit\'s'),
(41, 36, 1, 44, '', 'New and Perfect Jodhpuri Suit\'s', 1, 12000.00000, '0', '', '', '2023-12-07', 0, 11, '38', 6, 'Brown', '1700731377-23-11-23.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New and Perfect Jodhpuri Suit\'s'),
(42, 37, 1, 43, '', 'New Latest Jodhpuri  Pink Suit', 1, 9500.00000, '0', '', '', '2023-12-07', 0, 10, '34', 13, 'Pink', '1700718411-suit-edit-01.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New Latest Jodhpuri  Pink Suit'),
(43, 38, 1, 34, '', 'Tuxedo Suit\'s', 1, 8000.00000, '8000', '', '', '2023-12-07', 0, 10, '34', 2, 'Blue', '1700716638-suit-edit-03.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'Tuxedo Suit\'s'),
(44, 39, 1, 34, '', 'Tuxedo Suit\'s', 1, 8000.00000, '8000', '', '', '2023-12-07', 0, 10, '34', 2, 'Blue', '1700716638-suit-edit-03.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'Tuxedo Suit\'s'),
(45, 40, 1, 29, '', 'New Classic Suit', 1, 8000.00000, '7200', '', '', '2023-12-07', 0, 7, '28', 2, 'Blue', '1700735102-suit-edit-03.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New Classic Suit'),
(46, 41, 1, 29, '', 'New Classic Suit', 1, 8000.00000, '7200', '', '', '2023-12-07', 0, 7, '28', 2, 'Blue', '1700735102-suit-edit-03.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New Classic Suit'),
(47, 42, 1, 44, '', 'New and Perfect Jodhpuri Suit\'s', 1, 12000.00000, '0', '', '', '2023-12-07', 0, 11, '38', 6, 'Brown', '1700731377-23-11-23.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New and Perfect Jodhpuri Suit\'s'),
(48, 43, 1, 44, '', 'New and Perfect Jodhpuri Suit\'s', 1, 13000.00000, '0', '', '', '2023-12-07', 0, 12, '40', 6, 'Brown', '1700731377-23-11-23.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New and Perfect Jodhpuri Suit\'s'),
(49, 44, 1, 34, '', 'Tuxedo Suit\'s', 1, 8000.00000, '8000', '', '', '2023-12-07', 0, 10, '34', 2, 'Blue', '1700716638-suit-edit-03.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'Tuxedo Suit\'s'),
(50, 45, 1, 44, '', 'New and Perfect Jodhpuri Suit\'s', 1, 13000.00000, '0', '', '', '2023-12-07', 0, 12, '40', 6, 'Brown', '1700731377-23-11-23.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New and Perfect Jodhpuri Suit\'s'),
(51, 46, 1, 44, '', 'New and Perfect Jodhpuri Suit\'s', 1, 13000.00000, '0', '', '', '2023-12-13', 0, 12, '40', 6, 'Brown', '1700732103-00000111.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New and Perfect Jodhpuri Suit\'s'),
(52, 47, 1, 44, '', 'New and Perfect Jodhpuri Suit\'s', 1, 13000.00000, '0', '', '', '2023-12-13', 0, 12, '40', 6, 'Brown', '1700732103-00000111.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New and Perfect Jodhpuri Suit\'s'),
(53, 48, 1, 44, '', 'New and Perfect Jodhpuri Suit\'s', 1, 13000.00000, '0', '', '', '2023-12-13', 0, 12, '40', 6, 'Brown', '1700732103-00000111.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New and Perfect Jodhpuri Suit\'s'),
(54, 49, 1, 44, '', 'New and Perfect Jodhpuri Suit\'s', 1, 13000.00000, '0', '', '', '2023-12-13', 0, 12, '40', 6, 'Brown', '1700732103-00000111.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New and Perfect Jodhpuri Suit\'s'),
(55, 50, 1, 44, '', 'New and Perfect Jodhpuri Suit\'s', 1, 12000.00000, '0', '', '', '2023-12-13', 0, 11, '38', 6, 'Brown', '1700732103-00000111.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New and Perfect Jodhpuri Suit\'s'),
(56, 51, 1, 44, '', 'New and Perfect Jodhpuri Suit\'s', 1, 12000.00000, '0', '', '', '2023-12-13', 0, 11, '38', 6, 'Brown', '1700732103-00000111.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New and Perfect Jodhpuri Suit\'s'),
(57, 52, 1, 43, '', 'New Latest Jodhpuri  Pink Suit', 1, 9000.00000, '0', '', '', '2023-12-13', 0, 9, '32', 13, 'Pink', '1700718411-suit-edit-01.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New Latest Jodhpuri  Pink Suit'),
(58, 53, 1, 43, '', 'New Latest Jodhpuri  Pink Suit', 1, 9000.00000, '0', '', '', '2023-12-13', 0, 9, '32', 13, 'Pink', '1700718411-suit-edit-01.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New Latest Jodhpuri  Pink Suit'),
(59, 54, 1, 43, '', 'New Latest Jodhpuri  Pink Suit', 1, 9000.00000, '0', '', '', '2023-12-13', 0, 9, '32', 13, 'Pink', '1700718411-suit-edit-01.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New Latest Jodhpuri  Pink Suit'),
(60, 55, 1, 43, '', 'New Latest Jodhpuri  Pink Suit', 1, 10000.00000, '0', '', '', '2023-12-13', 0, 21, '36', 13, 'Pink', '1700718411-suit-edit-01.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New Latest Jodhpuri  Pink Suit'),
(62, 57, 1, 44, '', 'New and Perfect Jodhpuri Suit\'s', 1, 13000.00000, '0', '', '', '2023-12-13', 0, 12, '40', 6, 'Brown', '1700732103-00000111.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New and Perfect Jodhpuri Suit\'s'),
(63, 58, 1, 43, '', 'New Latest Jodhpuri  Pink Suit', 1, 9000.00000, '0', '', '', '2023-12-13', 0, 9, '32', 13, 'Pink', '1700718411-suit-edit-01.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New Latest Jodhpuri  Pink Suit'),
(64, 59, 9, 20, '', 'Orange Cotton Printed Long Kurta', 1, 3500.00000, '3485', '', '', '2023-12-13', 0, 9, '32', 9, 'Orange', '1695463364-20058041-01.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'A-224', 'A-5628'),
(65, 59, 9, 19, '', 'Denim', 1, 1500.00000, '1430', '', '', '2023-12-13', 0, 22, '-', 4, 'Lime', '1698405690-camera-2-(2).jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'A-127', 'A-5612'),
(66, 60, 9, 20, '', 'Orange Cotton Printed Long Kurta', 1, 3500.00000, '3485', '', '', '2023-12-13', 0, 9, '32', 9, 'Orange', '1695463364-20058041-01.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'A-224', 'A-5628'),
(67, 60, 9, 19, '', 'Denim', 1, 1500.00000, '1430', '', '', '2023-12-13', 0, 22, '-', 4, 'Lime', '1698405690-camera-2-(2).jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'A-127', 'A-5612'),
(68, 61, 1, 43, '', 'New Latest Jodhpuri  Pink Suit', 1, 9000.00000, '0', '', '', '2023-12-14', 0, 9, '32', 13, 'Pink', '1700718411-suit-edit-01.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New Latest Jodhpuri  Pink Suit'),
(69, 62, 1, 43, '', 'New Latest Jodhpuri  Pink Suit', 1, 9000.00000, '0', '', '', '2023-12-14', 0, 9, '32', 13, 'Pink', '1700718411-suit-edit-01.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New Latest Jodhpuri  Pink Suit'),
(70, 63, 1, 27, '', 'Cargo', 1, 11200.00000, '10640', '', '', '2023-12-14', 0, 7, '28', 7, 'Red', '1701262280-00000111.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'ABC123', 'ABC123'),
(71, 63, 1, 44, '', 'New and Perfect Jodhpuri Suit\'s', 1, 12000.00000, '0', '', '', '2023-12-14', 0, 11, '38', 6, 'Brown', '1700732103-00000111.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New and Perfect Jodhpuri Suit\'s'),
(72, 64, 1, 43, '', 'New Latest Jodhpuri  Pink Suit', 1, 9000.00000, '0', '', '', '2023-12-14', 0, 9, '32', 13, 'Pink', '1700718411-suit-edit-01.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New Latest Jodhpuri  Pink Suit'),
(73, 65, 1, 29, '', 'New Classic Suit', 1, 8000.00000, '7200', '', '', '2023-12-14', 0, 7, '28', 2, 'Blue', '1700735102-suit-edit-03.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New Classic Suit'),
(74, 66, 1, 27, '', 'Cargo', 1, 11200.00000, '10640', '', '', '2023-12-14', 0, 7, '28', 7, 'Red', '1701262280-00000111.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'ABC123', 'ABC123'),
(75, 67, 1, 43, '', 'New Latest Jodhpuri  Pink Suit', 1, 9000.00000, '0', '', '', '2023-12-15', 0, 9, '32', 13, 'Pink', '1700718411-suit-edit-01.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New Latest Jodhpuri  Pink Suit'),
(76, 68, 1, 44, '', 'New and Perfect Jodhpuri Suit\'s', 1, 12000.00000, '0', '', '', '2023-12-18', 0, 11, '38', 6, 'Brown', '1700732103-00000111.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New and Perfect Jodhpuri Suit\'s'),
(77, 69, 1, 44, '', 'New and Perfect Jodhpuri Suit\'s', 1, 12000.00000, '0', '', '', '2023-12-18', 0, 11, '38', 6, 'Brown', '1700732103-00000111.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New and Perfect Jodhpuri Suit\'s'),
(78, 70, 1, 43, '', 'New Latest Jodhpuri  Pink Suit', 1, 9000.00000, '0', '', '', '2023-12-19', 0, 9, '32', 13, 'Pink', '1700718411-suit-edit-01.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New Latest Jodhpuri  Pink Suit'),
(79, 71, 1, 44, '', 'New and Perfect Jodhpuri Suit\'s', 1, 12000.00000, '0', '', '', '2023-12-22', 0, 11, '38', 6, 'Brown', '1700732103-00000111.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New and Perfect Jodhpuri Suit\'s'),
(80, 72, 1, 44, '', 'New and Perfect Jodhpuri Suit\'s', 1, 12000.00000, '0', '', '', '2023-12-25', 0, 11, '38', 6, 'Brown', '1700732103-00000111.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New and Perfect Jodhpuri Suit\'s'),
(81, 73, 1, 34, '', 'Tuxedo Suit\'s', 1, 8000.00000, '8000', '', '', '2023-12-26', 0, 10, '34', 2, 'Blue', '1700716638-suit-edit-03.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'Tuxedo Suit\'s'),
(82, 74, 1, 27, '', 'Cargo', 1, 11200.00000, '10640', '', '', '2023-12-26', 0, 7, '28', 7, 'Red', '1701262280-00000111.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'ABC123', 'ABC123'),
(83, 75, 1, 27, '', 'Cargo', 1, 11200.00000, '10640', '', '', '2023-12-26', 0, 7, '28', 7, 'Red', '1701262280-00000111.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'ABC123', 'ABC123'),
(84, 76, 1, 43, '', 'New Latest Jodhpuri  Pink Suit', 1, 9000.00000, '0', '', '', '2023-12-26', 0, 9, '32', 13, 'Pink', '1700718411-suit-edit-01.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New Latest Jodhpuri  Pink Suit'),
(85, 77, 1, 44, '', 'New and Perfect Jodhpuri Suit\'s', 1, 12000.00000, '0', '', '', '2023-12-27', 0, 11, '38', 6, 'Brown', '1700732103-00000111.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New and Perfect Jodhpuri Suit\'s'),
(86, 78, 1, 44, '', 'New and Perfect Jodhpuri Suit\'s', 1, 12000.00000, '0', '', '', '2023-12-27', 0, 11, '38', 6, 'Brown', '1700732103-00000111.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New and Perfect Jodhpuri Suit\'s'),
(87, 79, 7, 22, '', 'Cotton Block Printed Top', 1, 850.00000, '800', '', '', '2023-12-27', 0, 19, '24', 8, 'Yellow', '1698322919-kid-girl-01.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'A-125', '12003'),
(88, 80, 1, 43, '', 'New Latest Jodhpuri  Pink Suit', 1, 9000.00000, '0', '', '', '2023-12-28', 0, 9, '32', 13, 'Pink', '1700718411-suit-edit-01.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New Latest Jodhpuri  Pink Suit'),
(89, 81, 10, 43, '', 'New Latest Jodhpuri  Pink Suit', 1, 9000.00000, '0', '', '', '2023-12-28', 0, 9, '32', 13, 'Pink', '1700718411-suit-edit-01.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New Latest Jodhpuri  Pink Suit'),
(90, 82, 10, 44, '', 'New and Perfect Jodhpuri Suit\'s', 1, 12000.00000, '0', '', '', '2024-01-01', 0, 11, '38', 6, 'Brown', '1700732103-00000111.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New and Perfect Jodhpuri Suit\'s'),
(91, 83, 10, 44, '', 'New and Perfect Jodhpuri Suit\'s', 1, 12000.00000, '0', '', '', '2024-01-01', 0, 11, '38', 6, 'Brown', '1700732103-00000111.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New and Perfect Jodhpuri Suit\'s'),
(92, 84, 10, 34, '', 'Tuxedo Suit\'s', 1, 8000.00000, '8000', '', '', '2024-01-01', 0, 10, '34', 2, 'Blue', '1700716638-suit-edit-03.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'Tuxedo Suit\'s'),
(93, 85, 7, 22, '', 'Cotton Block Printed Top', 1, 850.00000, '800', '', '', '2024-01-02', 0, 19, '24', 8, 'Yellow', '1698322919-kid-girl-01.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'A-125', '12003'),
(94, 86, 10, 44, '', 'New and Perfect Jodhpuri Suit\'s', 1, 12000.00000, '0', '', '', '2024-01-02', 0, 11, '38', 6, 'Brown', '1700732103-00000111.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New and Perfect Jodhpuri Suit\'s'),
(95, 87, 1, 43, '', 'New Latest Jodhpuri  Pink Suit', 1, 9000.00000, '0', '', '', '2024-01-03', 0, 9, '32', 13, 'Pink', '1700718411-suit-edit-01.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'New Latest Jodhpuri  Pink Suit'),
(96, 88, 7, 4, '', 'Indoweston  Sherwani', 1, 9000.00000, '8990', '', '', '2024-01-09', 0, 8, '30', 12, 'White', '1701061786-weding-sherwani-2.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'sku001', 'Indoweston  Sherwani'),
(97, 89, 3, 59, '', 'Royal Blue Solid Terry Rayon Party Wear Coat Suit', 1, 18595.00000, '0', '', '', '2024-01-09', 0, 10, '34', 2, 'Blue', '1704281703-BN41194.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'BN41194', 'BN41194'),
(98, 90, 1, 57, '', 'Matte Ruby Wine Jacquard Bandh gala Jodhpuri', 1, 11595.00000, '0', '', '', '2024-01-18', 0, 14, '44', 6, 'Brown', '1704279865-JP52974.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'JP52974', 'JP52974'),
(99, 91, 3, 19, '', 'Denim', 1, 1350.00000, '1280', '', '', '2024-01-30', 0, 22, '-', 3, 'Aqua', '1698405690-camera-2-(2).jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'A-127', 'A-5612'),
(100, 91, 3, 41, '', 'Plum Pre-Stitched Saree', 2, 9500.00000, '9025', '', '', '2024-01-30', 0, 11, '38', 13, 'Pink', '1699078819-saree-edit-01.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'SKU1234', 'Plum Pre-Stitched Saree'),
(101, 92, 3, 60, '', 'Maroon Colour All Function  Wear Terry Rayon Coat Suit', 1, 10595.00000, '0', '', '', '2024-02-07', 0, 10, '34', 21, 'Maroon', '1704282415-BN41217.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'BN41217', 'BN41217'),
(102, 93, 3, 59, '', 'Royal Blue Solid Terry Rayon Party Wear Coat Suit', 2, 18595.00000, '0', '', '', '2024-02-13', 0, 10, '34', 15, 'Blue', '1704281703-BN41194.jpg', '', '', 0, '', '', 0, 0, '', 0, '0000-00-00', 0, '', '', 0, '0000-00-00', 'BN41194', 'BN41194');

-- --------------------------------------------------------

--
-- Table structure for table `ci_shipping_address`
--

CREATE TABLE `ci_shipping_address` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `order_id` int NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `post_code` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `bill_first_name` varchar(255) NOT NULL,
  `bill_last_name` varchar(255) NOT NULL,
  `bill_company` varchar(255) NOT NULL,
  `bill_address1` text NOT NULL,
  `bill_address2` text NOT NULL,
  `bill_city` varchar(255) NOT NULL,
  `bill_post_code` varchar(255) NOT NULL,
  `bill_country` varchar(255) NOT NULL,
  `bill_state` varchar(255) NOT NULL,
  `bill_phone_number` varchar(255) NOT NULL,
  `bill_email_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `ci_shipping_address`
--

INSERT INTO `ci_shipping_address` (`id`, `user_id`, `order_id`, `first_name`, `last_name`, `company`, `address1`, `address2`, `city`, `post_code`, `country`, `state`, `phone_number`, `email_address`, `bill_first_name`, `bill_last_name`, `bill_company`, `bill_address1`, `bill_address2`, `bill_city`, `bill_post_code`, `bill_country`, `bill_state`, `bill_phone_number`, `bill_email_address`) VALUES
(1, 1, 1, 'dev', 'Patel', 'Dev Test Compant', 'Brahmpole street', 'malad', 'LAKHTAR', '999999', '5', '8', '1234567890', 'devang@gmail.com', 'dev', 'Patel', 'Dev Test Compant', 'Brahmpole street', 'malad', 'LAKHTAR', '999999', '5', '8', '1234567890', 'devang@gmail.com'),
(2, 1, 2, 'dev', 'Patel', 'Dev Test Compant', 'Brahmpole street', 'malad', 'LAKHTAR', '382775', '5', '4', '9999999999', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', 'Dev Test Compant', 'Brahmpole street', 'malad', 'LAKHTAR', '382775', '5', '4', '9999999999', 'devang.hnrtechnologies@gmail.com'),
(3, 1, 3, 'dev', 'Patel', 'Dev Test Compant', 'Brahmpole street', 'malad', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', 'Dev Test Compant', 'Brahmpole street', 'malad', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(4, 1, 4, 'Devang', 'Patel', 'test', 'Lakhtar', 'Surendranagar', 'Ahmendabad', '400097', '5', '8', '9658969858', 'rajnikant.patel87@gmail.com', 'Devang', 'Patel', 'test', 'Lakhtar', 'Surendranagar', 'Ahmendabad', '400097', '5', '8', '9658969858', 'rajnikant.patel87@gmail.com'),
(5, 1, 5, 'dev', 'Patel', 'Dev Test Compant', 'Brahmpole street', 'malad', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', 'Dev Test Compant', 'Brahmpole street', 'malad', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(6, 1, 6, 'Dev', 'P', '', 'Ad Nagar, Dadar', '', 'Mumbai', '400013', '5', '9', '9372962104', 'pranali.fiveonline@gmail.com', 'Dev', 'P', '', 'Ad Nagar, Dadar', '', 'Mumbai', '400013', '5', '9', '9372962104', 'pranali.fiveonline@gmail.com'),
(7, 1, 7, 'dev', 'Patel', 'Dev Test Compant', 'Brahmpole street', 'malad', 'asfa', '999999', '5', '8', '1234567890', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', 'Dev Test Compant', 'Brahmpole street', 'malad', 'asfa', '999999', '5', '8', '1234567890', 'devang.hnrtechnologies@gmail.com'),
(8, 3, 8, 'AKASH ', 'PAWAR', 'Sagar', 'Jalna Maharashtra', 'Jindal market jalna ', 'jalna ', '431203', '5', '9', '7038692042', 'akki@gmail.com', 'AKASH ', 'PAWAR', 'Sagar', 'Jalna Maharashtra', 'Jindal market jalna ', 'jalna ', '431203', '5', '9', '7038692042', 'akki@gmail.com'),
(9, 3, 8, 'AKASH ', 'PAWAR', 'Sagar', 'Jalna Maharashtra', 'Jindal market jalna ', 'jalna ', '431203', '5', '9', '7038692042', 'akki@gmail.com', 'AKASH ', 'PAWAR', 'Sagar', 'Jalna Maharashtra', 'Jindal market jalna ', 'jalna ', '431203', '5', '9', '7038692042', 'akki@gmail.com'),
(10, 1, 8, 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(11, 1, 9, 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(12, 1, 10, 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(13, 1, 11, 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(14, 1, 12, 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(15, 1, 13, 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(16, 1, 14, 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(17, 1, 15, 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(18, 1, 16, 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(19, 1, 17, 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(20, 1, 18, 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(21, 1, 19, 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(22, 1, 20, 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(23, 1, 21, 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(24, 1, 22, 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(25, 1, 23, 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(26, 1, 24, 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(27, 1, 25, 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(28, 1, 26, 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(29, 1, 27, 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(30, 1, 28, 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(31, 1, 29, 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(32, 1, 30, 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(33, 1, 31, 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(34, 1, 32, 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(35, 1, 33, 'dev', 'Patel', 'Dev Test Compant', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', 'Dev Test Compant', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(36, 1, 33, 'dev', 'Patel', 'Dev Test Compant', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', 'Dev Test Compant', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(37, 1, 33, 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9999999999', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9999999999', 'devang.hnrtechnologies@gmail.com'),
(38, 1, 34, 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '123456', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '123456', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(39, 1, 35, 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(40, 1, 36, 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(41, 1, 37, 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(42, 1, 38, 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(43, 1, 39, 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(44, 1, 40, 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(45, 1, 41, 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(46, 1, 42, 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(47, 1, 43, 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(48, 1, 44, 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(49, 1, 45, 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(50, 1, 46, 'Venkatesh', 'Devendra', 'Five Online Live', 'Meghaninagar', 'Address 2', 'Ahmedabad', '380016', '5', '8', '1234567890', 'ventesh.hnrtechnologies@gmail.com', 'Venkatesh', 'Devendra', 'Five Online Live', 'Meghaninagar', 'Address 2', 'Ahmedabad', '380016', '5', '8', '1234567890', 'ventesh.hnrtechnologies@gmail.com'),
(51, 1, 47, 'Venkatesh', 'Devendra', 'Five Online Live', 'Meghaninagar', 'Address 2', 'Ahmedabad', '380016', '5', '8', '1234567890', 'ventesh.hnrtechnologies@gmail.com', 'Venkatesh', 'Devendra', 'Five Online Live', 'Meghaninagar', 'Address 2', 'Ahmedabad', '380016', '5', '8', '1234567890', 'ventesh.hnrtechnologies@gmail.com'),
(52, 1, 48, 'Venkatesh', 'Devendra', 'Five Online Live', 'Meghaninagar', 'Address 2', 'Ahmedabad', '380016', '5', '8', '1234567890', 'ventesh.hnrtechnologies@gmail.com', 'Venkatesh', 'Devendra', 'Five Online Live', 'Meghaninagar', 'Address 2', 'Ahmedabad', '380016', '5', '8', '1234567890', 'ventesh.hnrtechnologies@gmail.com'),
(53, 1, 49, 'Venkatesh', 'Devendra', 'Test', 'Meghaninagar', 'Address 2', 'Ahmedabad', '380016', '5', '8', '1234567890', 'ventesh.hnrtechnologies@gmail.com', 'Venkatesh', 'Devendra', 'Test', 'Meghaninagar', 'Address 2', 'Ahmedabad', '380016', '5', '8', '1234567890', 'ventesh.hnrtechnologies@gmail.com'),
(54, 1, 50, 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(55, 1, 51, 'Rajnikant', 'Patel', 'Dev Test Compant', 'Brahmpole street', 'malad', 'LAKHTAR', '999999', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'Rajnikant', 'Patel', 'Dev Test Compant', 'Brahmpole street', 'malad', 'LAKHTAR', '999999', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(56, 1, 52, 'dev', 'Patel', 'Dev Test Compant', 'Brahmpole street', 'malad', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', 'Dev Test Compant', 'Brahmpole street', 'malad', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(57, 1, 53, 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(58, 1, 54, 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(59, 1, 55, 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(62, 1, 57, 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(63, 1, 58, 'Venky', 'Devendra', '', 'Vastral test', '', 'AMD', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'Venky', 'Devendra', '', 'Vastral test', '', 'AMD', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(64, 9, 59, 'Rajnikant', 'patel', 'hnr', 'Vastral', '', 'AMD', '400028', '5', '9', '9033259413', 'devang@gmail.com', 'Rajnikant', 'patel', 'hnr', 'Vastral', '', 'AMD', '400028', '5', '9', '9033259413', 'devang@gmail.com'),
(65, 9, 60, 'Rajnikant', 'patel', 'hnr', 'Vastral', '', 'AMD', '400028', '5', '9', '9033259413', 'devang@gmail.com', 'Rajnikant', 'patel', 'hnr', 'Vastral', '', 'AMD', '400028', '5', '9', '9033259413', 'devang@gmail.com'),
(66, 1, 61, 'devang', 'patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '9', '14', '9033259413', 'devang.hnrtechnologies@gmail.com', 'devang', 'patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '9', '14', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(67, 1, 62, 'devang', 'patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '9', '14', '9033259413', 'devang.hnrtechnologies@gmail.com', 'devang', 'patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '9', '14', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(68, 1, 63, 'devang', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '9', '14', '9033259413', 'devang.hnrtechnologies@gmail.com', 'devang', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '9', '14', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(69, 1, 64, 'Rajnikant', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '9', '14', '9033259413', 'devang.hnrtechnologies@gmail.com', 'Rajnikant', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '9', '14', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(70, 1, 65, 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '9', '14', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '9', '14', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(71, 1, 66, 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '9', '14', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '9', '14', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(72, 1, 67, 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '9', '14', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '9', '14', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(73, 1, 68, 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '9', '14', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', 'malad', 'lakhtar', '382775', '9', '14', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(74, 1, 69, 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '9', '14', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'lakhtar', '382775', '9', '14', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(75, 1, 70, 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', '', 'Brahmpole street', '', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(76, 1, 71, 'dev', 'Patel', 'Dev Test Compant', 'Brahmpole street', 'Address 2', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', 'Dev Test Compant', 'Brahmpole street', 'Address 2', 'LAKHTAR', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(77, 1, 72, 'Venkatesh', 'Devendra', 'Five Online Live', 'Meghaninagar', 'Address 2', 'Ahmedabad', '380016', '5', '8', '1234567890', 'ventesh.hnrtechnologies@gmail.com', 'Venkatesh', 'Devendra', 'Five Online Live', 'Meghaninagar', 'Address 2', 'Ahmedabad', '380016', '5', '8', '1234567890', 'ventesh.hnrtechnologies@gmail.com'),
(78, 1, 73, 'dev', 'Patel', 'Dev Test Compant', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', 'Dev Test Compant', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(79, 1, 74, 'dev', 'Patel', 'test ', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', 'test ', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(80, 1, 75, 'dev', 'Patel', 'Dev Test Compant', 'Brahmpole street', 'Address 2', 'lakhtar', '382775', '5', '9', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', 'Dev Test Compant', 'Brahmpole street', 'Address 2', 'lakhtar', '382775', '5', '9', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(81, 1, 76, 'dev 2', 'Patel', 'Dev Test Compant', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev 2', 'Patel', 'Dev Test Compant', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(82, 1, 77, 'dev', 'Patel', 'Dev Test Compant', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', 'Dev Test Compant', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(83, 1, 78, 'dev', 'Patel', 'Dev Test Compant', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', 'Dev Test Compant', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(84, 7, 79, 'Mudit', 'Agarwal', 'Five Online', 'B-307, Naman Midtown, Prabhadevi', '', 'Mumbai', '400024', '5', '9', '9833515678', 'mudit.fiveonline@gmail.com', 'Mudit', 'Agarwal', 'Five Online', 'B-307, Naman Midtown, Prabhadevi', '', 'Mumbai', '400024', '5', '9', '9833515678', 'mudit.fiveonline@gmail.com'),
(85, 1, 80, 'dev 2', 'Patel', 'Dev Test Compant', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev 2', 'Patel', 'Dev Test Compant', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(86, 10, 81, 'ventesh', 'devendra', 'company', 'Ahmedabad', '', 'Ahmedbad', '382418', '5', '8', '9033259413', 'ventesh.hnrtechnologies@gmail.com', 'ventesh', 'devendra', 'company', 'Ahmedabad', '', 'Ahmedbad', '382418', '5', '8', '9033259413', 'ventesh.hnrtechnologies@gmail.com'),
(87, 10, 82, 'Venkatesh', 'Devendra', 'Five Online Live', 'Meghaninagar', 'Address 2', 'Ahmedabad', '380016', '5', '8', '1234567890', 'ventesh.hnrtechnologies@gmail.com', 'Venkatesh', 'Devendra', 'Five Online Live', 'Meghaninagar', 'Address 2', 'Ahmedabad', '380016', '5', '8', '1234567890', 'ventesh.hnrtechnologies@gmail.com'),
(88, 10, 83, 'ventesh', 'devendra', 'company', 'Ahmedabad', '', 'Ahmedbad', '382418', '5', '8', '9033259413', 'ventesh.hnrtechnologies@gmail.com', 'ventesh', 'devendra', 'company', 'Ahmedabad', '', 'Ahmedbad', '382418', '5', '8', '9033259413', 'ventesh.hnrtechnologies@gmail.com'),
(89, 10, 84, 'ventesh', 'devendra', 'company', 'Ahmedabad', '', 'Ahmedbad', '382418', '5', '8', '9033259413', 'ventesh.hnrtechnologies@gmail.com', 'ventesh', 'devendra', 'company', 'Ahmedabad', '', 'Ahmedbad', '382418', '5', '8', '9033259413', 'ventesh.hnrtechnologies@gmail.com'),
(90, 7, 85, 'Mudit', 'Agarwal', 'Five Online', 'B-307, Naman Midtown, Prabhadevi', '', 'Mumbai', '400024', '5', '9', '9833515678', 'mudit.fiveonline@gmail.com', 'Mudit', 'Agarwal', 'Five Online', 'B-307, Naman Midtown, Prabhadevi', '', 'Mumbai', '400024', '5', '9', '9833515678', 'mudit.fiveonline@gmail.com'),
(91, 10, 86, 'ventesh', 'devendra', 'company', 'Ahmedabad', '', 'Ahmedbad', '382418', '5', '8', '9033259413', 'ventesh.hnrtechnologies@gmail.com', 'ventesh', 'devendra', 'company', 'Ahmedabad', '', 'Ahmedbad', '382418', '5', '8', '9033259413', 'ventesh.hnrtechnologies@gmail.com'),
(92, 1, 87, 'dev', 'Patel', 'Dev Test Compant', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', 'Dev Test Compant', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(93, 7, 88, 'Mudit', 'Agarwal', '', 'B-307, Naman Midtown, Prabhadevi', 'mumbai', 'Mumbai', '400024', '5', '9', '1234567890', 'mudit.fiveonline@gmail.com', 'Mudit', 'Agarwal', '', 'B-307, Naman Midtown, Prabhadevi', 'mumbai', 'Mumbai', '400024', '5', '9', '1234567890', 'mudit.fiveonline@gmail.com'),
(94, 3, 89, 'AKASH ', 'PAWAR', 'Sagar', 'Jalna Maharashtra', 'Jindal market jalna ', 'jalna ', '431203', '5', '9', '7038692042', 'akki@gmail.com', 'AKASH ', 'PAWAR', 'Sagar', 'Jalna Maharashtra', 'Jindal market jalna ', 'jalna ', '431203', '5', '9', '7038692042', 'akki@gmail.com'),
(95, 1, 90, 'dev', 'Patel', 'Dev Test Compant', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com', 'dev', 'Patel', 'Dev Test Compant', 'Brahmpole street', '', 'lakhtar', '382775', '5', '8', '9033259413', 'devang.hnrtechnologies@gmail.com'),
(96, 3, 91, 'AKASH ', 'PAWAR', 'Sagar', 'Jalna Maharashtra', 'Jindal market jalna ', 'jalna ', '431203', '5', '9', '7038692042', 'akki@gmail.com', 'AKASH ', 'PAWAR', 'Sagar', 'Jalna Maharashtra', 'Jindal market jalna ', 'jalna ', '431203', '5', '9', '7038692042', 'akki@gmail.com'),
(97, 3, 92, 'sagar ', 'paridhan ', 'Sagar', 'Jalna Maharashtra', 'Jindal market jalna ', 'jalna ', '431203', '5', '9', '9403436751', 'akki@gmail.com', 'AKASH ', 'PAWAR', 'Sagar', 'Jalna Maharashtra', 'Jindal market jalna ', 'jalna ', '431203', '5', '9', '7038692042', 'akki@gmail.com'),
(98, 3, 92, 'sagar ', 'paridhan ', 'Sagar', 'Jalna Maharashtra', 'Jindal market jalna ', 'jalna ', '431203', '5', '9', '9403436751', 'akki@gmail.com', 'AKASH ', 'PAWAR', 'Sagar', 'Jalna Maharashtra', 'Jindal market jalna ', 'jalna ', '431203', '5', '9', '7038692042', 'akki@gmail.com'),
(99, 3, 92, 'sagar ', 'paridhan ', 'Sagar', 'Jalna Maharashtra', 'Jindal market jalna ', 'jalna ', '431203', '5', '9', '9403436751', 'akki@gmail.com', 'AKASH ', 'PAWAR', 'Sagar', 'Jalna Maharashtra', 'Jindal market jalna ', 'jalna ', '431203', '5', '9', '7038692042', 'akki@gmail.com'),
(100, 3, 92, 'AKASH ', 'PAWAR', 'Sagar', 'Jalna Maharashtra', 'Jindal market jalna ', 'jalna ', '431203', '5', '9', '7038692042', 'akki@gmail.com', 'AKASH ', 'PAWAR', 'Sagar', 'Jalna Maharashtra', 'Jindal market jalna ', 'jalna ', '431203', '5', '9', '7038692042', 'akki@gmail.com'),
(101, 3, 93, 'AKASH ', 'PAWAR', 'Sagar', 'Jalna Maharashtra', 'Jindal market jalna ', 'jalna ', '431203', '5', '9', '7038692042', 'akki@gmail.com', 'AKASH ', 'PAWAR', 'Sagar', 'Jalna Maharashtra', 'Jindal market jalna ', 'jalna ', '431203', '5', '9', '7038692042', 'akki@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `name`, `description`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Terms & Conditions', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>', 'Terms & Conditions', 'Terms & Conditions', NULL, '2023-10-06 09:00:36', '2024-01-09 06:01:55'),
(2, 'Privacy Policy', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>', 'Privacy Policy', 'Privacy Policy', NULL, '2023-10-06 09:01:08', '2023-10-06 09:01:08'),
(3, 'What we offer', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>', 'What we offer', 'What we offer', NULL, '2023-10-06 09:01:28', '2023-10-06 09:01:28'),
(4, 'Return', '<p><strong>Lorem Ipsum</strong> &nbsp;simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>', 'Return', 'Return', NULL, '2023-10-06 09:01:47', '2024-01-08 13:19:36'),
(5, 'Free delivery', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>', 'Free delivery', 'Free delivery', NULL, '2023-10-06 09:14:51', '2023-10-06 09:14:51'),
(6, '7 days refund', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>', '7 days refund', '7 days refund', NULL, '2023-10-06 09:15:59', '2023-10-27 12:34:20'),
(7, 'Multiple payments', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>', 'Multiple payments', 'Multiple payments', NULL, '2023-10-06 09:16:57', '2023-10-06 09:16:57'),
(8, 'Sustainable', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>', 'Sustainable', 'Sustainable', NULL, '2023-10-06 09:17:27', '2023-10-06 09:17:27');

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `page_url` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `meta_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `meta_keywords` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `meta_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `set_order` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `name`, `page_url`, `description`, `image`, `meta_title`, `meta_keywords`, `meta_description`, `set_order`, `created_at`, `updated_at`) VALUES
(2, 'man', 'man', NULL, '1707547876H3.jpg', NULL, NULL, NULL, 4, '2023-07-29 05:53:44', '2024-02-10 06:51:16'),
(3, 'women', 'Women', NULL, '1707472024J4.jpg', NULL, NULL, NULL, 3, '2023-07-29 05:53:59', '2024-02-09 10:37:10'),
(4, 'kids', 'kids', NULL, '1690610047home-shop-modern-02.png', '', '', '', 5, '2023-07-29 05:54:08', '2023-07-29 05:54:08'),
(9, 'Wedding  Collection', 'wedding-collection', NULL, '1707474846F4.jpg', NULL, NULL, NULL, 2, '2023-09-27 12:22:14', '2024-02-09 10:34:07'),
(15, 'Latest Suits', 'latest-suits', NULL, '1707474582A1.jpg', 'Latest Suits', NULL, NULL, 1, '2023-11-03 05:46:38', '2024-02-09 10:29:43');

-- --------------------------------------------------------

--
-- Table structure for table `colours`
--

CREATE TABLE `colours` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colours`
--

INSERT INTO `colours` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(3, 'Aqua', '00FFFF', '2023-07-28 06:44:53', '2023-10-05 13:12:05'),
(4, 'Lime', '00FF00', '2023-07-28 06:45:09', '2023-10-05 13:11:54'),
(6, 'Brown', '964B00', '2023-10-27 13:10:42', '2023-10-27 13:10:42'),
(7, 'Red', 'FF0000', '2023-10-27 16:51:44', '2023-10-27 16:51:44'),
(8, 'Yellow', 'FFFF00', '2023-10-27 16:52:40', '2023-10-27 16:52:40'),
(9, 'Orange', 'FFA500', '2023-10-27 16:53:26', '2023-10-27 16:53:26'),
(10, 'Green', '008000', '2023-10-27 16:54:20', '2023-10-27 16:54:20'),
(11, 'Black', '000000', '2023-10-27 16:55:09', '2023-10-27 16:55:09'),
(12, 'White', 'FFFFFF', '2023-10-27 16:55:50', '2023-10-27 16:55:50'),
(13, 'Pink', 'FFC0CB', '2023-10-27 16:56:49', '2023-10-27 16:56:49'),
(14, 'Purple', '800080', '2023-10-27 16:58:31', '2023-10-27 16:58:31'),
(15, 'Blue', '0000FF', '2023-12-02 07:50:04', '2024-01-11 13:24:23'),
(16, 'Golden', 'FFD700', '2023-12-02 07:51:41', '2024-01-09 11:55:44'),
(17, 'Blue Gray', '98AFC7', '2023-12-02 10:00:14', '2024-01-09 07:32:37'),
(18, 'Light Purple Blue', '728FCE', '2023-12-02 10:00:50', '2024-01-09 08:00:14'),
(19, 'Denim Dark Blue', '151B8D', '2023-12-02 10:01:34', '2024-01-09 07:31:43'),
(20, 'Red Brown', '622F22', '2023-12-02 10:04:29', '2024-01-09 11:55:22'),
(21, 'Maroon', '800000', '2023-12-02 10:07:21', '2024-01-09 11:55:13'),
(22, 'Wine', '722F37', '2024-01-03 08:41:35', '2024-01-09 07:58:24'),
(23, 'Navy Blue', '000080', '2024-01-09 05:42:32', '2024-01-18 05:43:51'),
(24, 'Sky Blue', '87CEEB', '2024-02-17 06:26:07', '2024-02-17 06:26:48'),
(25, 'Cream', 'FFFDD0', '2024-02-17 08:04:39', '2024-02-17 08:04:39'),
(26, 'Pale Orange', 'FFA756', '2024-02-17 08:23:01', '2024-02-17 08:23:01'),
(27, 'Pista Green', '93c572', '2024-02-17 08:46:01', '2024-02-17 08:46:01'),
(28, 'Taupe Pink', 'CDB2AE', '2024-02-17 09:06:04', '2024-02-17 09:06:04'),
(29, 'Crimson Red', '990000', '2024-02-17 09:55:59', '2024-02-17 09:55:59'),
(30, 'Rose Pink', 'FF66CC', '2024-02-17 11:33:04', '2024-02-17 11:33:04'),
(31, 'Golden Yellow', 'FFDF00', '2024-02-18 06:08:53', '2024-02-18 06:08:53'),
(32, 'Pacific Blue', '1ca9c9', '2024-02-18 07:18:52', '2024-02-18 07:18:52'),
(33, 'Tropical Green', '428047', '2024-02-18 07:45:19', '2024-02-18 07:45:19'),
(34, 'Violet Byzantium', '702963', '2024-02-18 09:02:55', '2024-02-18 09:02:55'),
(35, 'Multicolor', 'ff0000', '2024-02-18 09:18:52', '2024-02-18 09:18:52'),
(36, 'Carbon Blue', '9ABACB', '2024-02-18 12:47:35', '2024-02-18 12:47:35'),
(37, 'Sorrell Brown', '998960', '2024-02-19 06:35:53', '2024-02-19 06:35:53'),
(38, 'Occur Yellow', 'CB9D06', '2024-02-19 07:05:30', '2024-02-19 07:05:30'),
(39, 'Peach', 'FFE5B4', '2024-02-19 07:37:24', '2024-02-19 07:37:24'),
(40, 'Bottle Green', '006A4E', '2024-02-19 08:07:38', '2024-02-19 08:07:38'),
(41, 'Light Beige', 'F6E3BA', '2024-02-19 09:52:37', '2024-02-19 09:52:37'),
(42, 'Magenta Purple', '6C244C', '2024-02-19 10:04:37', '2024-02-19 10:12:47'),
(43, 'Ocean Blue', '4f42b5', '2024-02-19 10:46:57', '2024-02-19 10:46:57'),
(44, 'Crimson Pink', 'DC143C', '2024-02-19 11:03:50', '2024-02-19 11:03:50'),
(45, 'Cinereous', '98817B', '2024-02-20 09:14:21', '2024-02-20 09:14:21'),
(46, 'Teal Blue', '367588', '2024-02-20 09:32:53', '2024-02-20 09:32:53'),
(47, 'Wine Dreg', '673147', '2024-02-20 09:50:55', '2024-02-20 09:50:55'),
(48, 'French Plum', '811453', '2024-02-20 10:46:59', '2024-02-20 10:46:59'),
(49, 'dark Byzantium', '5D3954', '2024-02-20 11:01:08', '2024-02-20 11:01:08'),
(50, 'Brink Pink', 'FB607F', '2024-02-20 11:13:43', '2024-02-20 11:13:43'),
(51, 'Greyish Blue', '6699CC', '2024-02-20 12:40:19', '2024-02-20 12:40:19'),
(52, 'Tiara Blue', 'CBD7D7', '2024-02-21 08:39:59', '2024-02-21 08:39:59'),
(53, 'Shading', '00007F', '2024-02-21 09:42:42', '2024-02-21 09:42:42'),
(54, 'Blue Dianne', '204852', '2024-02-21 09:57:44', '2024-02-21 09:57:44'),
(55, 'Mauve Pink', 'E0B0FF', '2024-02-21 10:11:58', '2024-02-21 10:11:58'),
(56, 'Lite Pink', 'FFB6C1', '2024-02-21 11:13:54', '2024-02-21 11:13:54');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint UNSIGNED NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country`, `created_at`, `updated_at`) VALUES
(5, 'Bharat', '2023-09-25 07:06:54', '2024-01-26 05:31:11');

-- --------------------------------------------------------

--
-- Table structure for table `coupans`
--

CREATE TABLE `coupans` (
  `id` bigint UNSIGNED NOT NULL,
  `coupan_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupan_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int NOT NULL,
  `coupanvalue` int NOT NULL COMMENT 'percentage=0;price=1',
  `minimum_order` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_coupons` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_coupons_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `category_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subcategory_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `is_active` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `is_discounted` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupans`
--

INSERT INTO `coupans` (`id`, `coupan_name`, `coupan_code`, `discount`, `coupanvalue`, `minimum_order`, `no_of_coupons`, `no_of_coupons_user`, `startdate`, `enddate`, `category_id`, `subcategory_id`, `description`, `is_active`, `created_at`, `updated_at`, `is_discounted`) VALUES
(1, 'Diwali', 'Diwali-11', 150, 1, '500', '15', '1', '2023-08-13', '2023-11-28', NULL, NULL, '<p>This is First Coupan</p>', 1, NULL, NULL, NULL),
(7, 'Navratri offer', 'NAV123', 10, 0, '500', '5', '20', '2023-09-26', '2023-10-15', NULL, NULL, NULL, 1, '2023-09-25 11:02:19', '2023-09-25 11:02:19', NULL),
(9, 'Republic Day', 'SSrebulicDay', 10000, 0, '7000', '100', '50', '2024-01-09', '2024-01-26', NULL, NULL, NULL, 0, '2024-01-09 05:59:48', '2024-01-09 05:59:48', NULL),
(10, 'Testdev', 'devtest', 1000, 0, '500', '100', '100', '2024-01-02', '2024-02-03', NULL, NULL, NULL, 0, '2024-01-09 10:36:07', '2024-01-09 10:36:07', NULL),
(11, 'Test', '1234', 1000, 0, '5000', '10', '10', '2024-01-10', '2024-02-01', NULL, NULL, NULL, 0, '2024-01-10 12:12:42', '2024-01-10 12:12:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `front_users`
--

CREATE TABLE `front_users` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `create_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `front_users`
--

INSERT INTO `front_users` (`id`, `name`, `email`, `password`, `gender`, `mobile`, `dob`, `create_at`) VALUES
(1, 'devang', 'devang.hnrtechnologies@gmail.com', '$2y$10$Ts06FLJH7TyHOD4ltc9evuI2G8F/vHZODMax301CakunN9/H9tQaq', 'Male', '9033259413', '2023-09-29', '2023-09-28'),
(2, 'Parth Prajapati', 'parth.hnrtechnologies@gmail.com', '$2y$10$XlHZt3fcpFxp8DWJN9xKluGfkdjVWEKT.v6VvwZJRG4Ltxdi8kpWa', NULL, '7738920110', NULL, '2023-10-06'),
(3, 'Akash Pawar', 'akki@gmail.com', '$2y$10$uL7Gw6QKojniuV.TEeonae.d5OMqqsoyU2YatNs8F//qWbfeMWGVW', NULL, '7038692042', NULL, '2023-10-26'),
(4, 'Mithun', 'akashp1156@gmail.com', '$2y$10$V.aMOZEv.v399foDGERoTuFtJvd3IFbfz5314CnDUwLFxUyNVYtFy', NULL, '7038692042', NULL, '2023-10-26'),
(5, 'akki', 'omg41@gmail.com', '$2y$10$PfuUb0NL5KFtt.AxcNtnDOxKia8T6Zby2heH6RiqHbPGKoy2MFbw6', NULL, '8845155625', NULL, '2023-10-31'),
(7, 'mudit.fiveonline@gmail.com', 'mudit.fiveonline@gmail.com', '$2y$10$IYofvvO1WQmu9ETtuT.2V.lq7x41UROibpmFeagkFEosSf5ov4f22', 'Male', '1234567890', '2000-01-23', '2023-12-12'),
(8, 'Pranali', 'pranali.fiveonline@gmail.com', '$2y$10$XlTSqCVYQ9qE707CGV0lxuBrcXskYh/fgn42CF03Wzvefo6VlfbDe', NULL, '9372962104', NULL, '2023-12-12'),
(9, 'yatrik.fiveonline@gmail.com', 'yatrik.fiveonline@gmail.com', '$2y$10$DJOflVfe2lguM1.QFmLT4OuTAVFhc.IjnpbjOg5p3SkswT6Jh2Vfu', NULL, '9167599272', NULL, '2023-12-13'),
(10, 'Venky', 'ventesh.hnrtechnologies@gmail.com', '$2y$10$KuRhZGnSNhtjWlZfzZ7DPuKsIB1XIJPtDWIxf0McBKbt4okZDGU.i', NULL, '9924634037', NULL, '2023-12-28');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `set_order` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `page_url`, `set_order`, `created_at`, `updated_at`) VALUES
(7, 'Kid\'s Wear', 'kid-s-wear', 5, '2023-09-19 09:08:09', '2023-09-19 09:08:09'),
(8, 'Men\'s Wear', 'men-s-wear', 1, '2023-09-19 09:08:19', '2023-09-19 10:08:14'),
(9, 'Saree\'s', 'saree-s', 2, '2023-09-19 09:08:27', '2023-11-16 10:12:51'),
(17, 'Lehenga', 'lehenga-', 3, '2023-11-16 09:26:55', '2023-11-16 09:26:55'),
(18, 'Salwar Suit\'s And Dresses', 'salwar-suit-s-and-dresses', 4, '2023-11-16 09:38:55', '2024-02-22 09:44:26');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'Cotton', '2023-07-28 23:57:25', '2023-07-28 23:57:25'),
(4, 'Silk', '2023-07-28 23:57:37', '2023-07-28 23:57:37'),
(6, 'Soft Silk', '2023-10-31 11:12:39', '2023-11-27 05:12:14'),
(7, 'Cut work', '2023-10-31 11:12:59', '2023-10-31 11:12:59'),
(8, 'Paithani', '2023-10-31 11:13:12', '2023-10-31 11:13:12'),
(9, 'Fancy', '2023-10-31 11:13:22', '2023-10-31 11:13:22'),
(10, 'T R', '2024-01-03 12:21:48', '2024-01-03 12:21:48'),
(11, 'Craft', '2024-02-01 07:22:08', '2024-02-01 07:22:08'),
(12, 'Banarasi Silk', '2024-02-17 08:25:45', '2024-02-17 08:25:45'),
(13, 'Georgette', '2024-02-19 07:39:38', '2024-02-19 07:39:38'),
(14, 'Chinon', '2024-02-19 07:52:29', '2024-02-19 07:52:29'),
(15, 'Soft Net', '2024-02-19 09:54:53', '2024-02-19 09:54:53'),
(16, 'Soft Organza', '2024-02-20 09:17:43', '2024-02-20 09:17:43'),
(17, 'Russian Silk', '2024-02-20 11:05:36', '2024-02-20 11:05:36'),
(18, 'Jenicho Tissue', '2024-02-21 09:39:49', '2024-02-21 09:39:49'),
(19, 'Crush Silk', '2024-02-21 11:42:52', '2024-02-21 11:42:52');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
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
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `pname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(11, 'blog', '2023-09-15 03:54:43', '2023-09-15 03:54:43'),
(12, 'cms', '2023-09-15 03:54:43', '2023-09-15 03:54:43'),
(13, 'User Permission', '2023-09-15 03:54:43', '2023-09-15 03:54:43'),
(14, 'Admin User', '2023-09-15 03:54:43', '2023-09-15 03:54:43'),
(15, 'Coupan', '2023-09-15 03:54:43', '2023-09-15 03:54:43'),
(16, 'collection', '2023-09-15 03:54:43', '2023-09-15 03:54:43'),
(17, 'customers', '2023-09-15 09:24:43', '2023-09-15 09:24:43'),
(18, 'subscribe', '2023-09-15 09:24:43', '2023-09-15 09:24:43'),
(19, 'country', '2023-09-15 09:24:43', '2023-09-15 09:24:43'),
(20, 'state', '2023-09-15 09:24:43', '2023-09-15 09:24:43'),
(21, 'Order', '2023-09-15 14:54:43', '2023-09-15 14:54:43'),
(22, 'Review', '2023-09-15 14:54:43', '2023-09-15 14:54:43');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `group_id` int NOT NULL,
  `cat_id` int NOT NULL,
  `subcat_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `page_url` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `sale_product` int DEFAULT NULL,
  `hot_product` int DEFAULT NULL,
  `new_product` int DEFAULT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sku_code` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `collection_id` int DEFAULT NULL,
  `discount` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `discount_type` int DEFAULT NULL COMMENT '0=percentage , 1=price,2=None',
  `description` text COLLATE utf8mb4_general_ci,
  `image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `recent_product` int DEFAULT NULL,
  `feature_product` int DEFAULT NULL,
  `best_seller` int DEFAULT NULL,
  `material_id` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `style_type_id` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lining` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_general_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `group_id`, `cat_id`, `subcat_id`, `name`, `page_url`, `sale_product`, `hot_product`, `new_product`, `product_code`, `sku_code`, `short_description`, `collection_id`, `discount`, `discount_type`, `description`, `image`, `recent_product`, `feature_product`, `best_seller`, `material_id`, `style_type_id`, `lining`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(4, 8, 17, 21, 'Indoweston  Sherwani', 'indoweston-sherwani-', 0, 0, 0, 'Indoweston  Sherwani', 'sku001', 'An Indo western sherwani for grooms will understandably be the most elegant and ornate to look at and may even incorporate a bit of Indian work such as zari, zardozi, cut dana or gota patti work. However, the designs made are usually more simple and weste', NULL, '10', 1, '<p><strong>An Indo western sherwani for grooms will understandably be the most elegant and ornate to look at and may even incorporate a bit of Indian work such as zari, zardozi, cut dana or gota patti work. However, the designs made are usually more simple and western in their appearance, including waves, lines, dots and shapes</strong></p>', '1701062037weding-sherwani-2.jpg', 0, 1, 1, '4', '5', NULL, NULL, NULL, NULL, '2023-08-02 06:03:48', '2023-12-08 10:37:52'),
(19, 9, 18, 22, 'Tomato Red, Gajji Silk, Bandhani  Printed Saree.', 'tomato-red-gajji-silk-bandhani-printed-saree-', 0, 0, 0, 'Product Code pending', 'Bandani+002', 'Bandhani Printed, Gajji Silk, Gota, Zari & Moti Work, Tomato Red Color.', 3, NULL, 2, '<p>Wrapping yourself in elegant tomato red color saree with Bandhani printed gives traditional look to it. The blouse attached to it is unstitched with Gota and Moti work on it .The color of the saree fascinates and captivates your mind with mind blowing look.</p>', '1708584234E2.webp', 0, 1, 0, '4', '5', NULL, NULL, NULL, NULL, '2023-09-21 12:59:04', '2024-02-22 06:43:54'),
(20, 7, 16, 18, 'Orange Cotton Printed Long Kurta', 'orange-cotton-printed-long-kurta', 0, 0, 0, 'A-5628', 'A-224', 'This is kids Kurta', 4, '15', 1, '<p>Test descr</p>', NULL, 1, 0, 1, '', '', NULL, NULL, NULL, NULL, '2023-09-21 13:01:31', '2023-12-11 12:59:44'),
(21, 7, 16, 18, 'Navy Cotton Printed Jacket', 'navy-cotton-printed-jacket', 0, 0, 0, '12554', 'A-1234', 'This is kids wear', 4, '10', 2, NULL, NULL, 0, 0, 0, '3', '3', NULL, NULL, NULL, NULL, '2023-09-23 10:01:18', '2023-12-04 10:59:57'),
(22, 7, 15, 15, 'Cotton Block Printed Top', 'cotton-block-printed-top', 0, 0, 0, '12003', 'A-125', 'This is girls wear', 4, '50', 1, NULL, NULL, 0, 0, 1, '3', '3', NULL, NULL, NULL, NULL, '2023-09-23 10:05:32', '2023-12-08 05:56:19'),
(25, 7, 16, 17, 'Blazer', 'blazer', 0, 0, 0, 'T002', 'SK002', 'Test 123', 4, '10', 1, '<p>test dec long 123</p>', '', 0, 0, 0, '2', '3', 'test 1234 lin', 'test1', 'test, tat', 'ttt', '2023-09-26 09:10:22', '2023-09-26 09:10:22'),
(27, 8, 20, 28, 'Cargo', 'cargo', 0, 0, 0, 'ABC123', 'ABC123', 'ABC123', 15, '5', 0, NULL, '', 0, 1, 0, '', '', NULL, NULL, NULL, NULL, '2023-10-12 09:52:38', '2023-12-09 04:56:48'),
(29, 8, 20, 28, 'New Classic Suit', 'new-classic-suit', 0, 0, 0, 'New Classic Suit', 'SKU1234', 'Step up your fashion game with our Blue Color  Jodhpuri Suit  Carefully tailored in Terry rayon fabric, this ensemble promises a flawless fit and prime comfort. The suit collar boasts of an upscale Mandarin design that is sure to turn heads at any occasio', 2, '10', 0, '<p>Step up your fashion game with our Blue Color &nbsp;Jodhpuri Suit! Carefully tailored in Terry rayon fabric, this ensemble promises a flawless fit and prime comfort. The suit collar boasts of an upscale Mandarin design that is sure to turn heads at any occasion. The full sleeves accentuate the ensemble\'s charisma. Ready to make a striking impression at every Functions. There might be a slight color</p>', '170073501100000111.jpg', 0, 0, 0, '3', '3,5', NULL, NULL, NULL, NULL, '2023-10-27 13:39:58', '2024-01-04 08:16:40'),
(34, 8, 20, 30, 'Tuxedo Suit\'s', 'tuxedo-suit-s', 0, 0, 0, 'Tuxedo Suit\'s', 'SKU1234', 'Blue Tuxedo Suit\'s\r\nElevate your style with the timeless appeal of this Blue Tuxedo Suit Fabric Valvate Suit. The Stand-Up Collar and Slim Fit exude sophistication, while the Full Sleeves offer comfort. Crafted with precision, the suit showcases exquisite', 2, '25', 2, '<p>Create a striking impression with our Blue Toun Tr Imported Fabric Tuxedo &nbsp;Suit, enriched with Print Work. The Full Sleeves suit, featuring a Stand-Up Collar, radiates sophistication. And crafted from premium Tr Imported fabric Perfect Size, paired with Tuxedo Tr Fabric&nbsp;Unstitched bottoms, this ensemble captures attention effortlessly. Elevate your style with this exquisite piece best Quality.&nbsp;</p>', '1704450287BN41267.jpg', 0, 0, 0, '10', '7', NULL, NULL, NULL, NULL, '2023-10-29 12:16:29', '2024-01-13 06:10:21'),
(39, 8, 17, 19, 'Wedding Sherwani', 'wedding-sherwani', 0, 0, 0, 'Sherwani', 'SKU1234', 'The pastel White colour of the sherwani is both modern and versatile, making it suitable for various wedding themes and color palettes. Paired with a white silk churidar, the ensemble creates a harmonious and regal look, making the groom look dashing.', NULL, NULL, 2, '<p><strong>The pastel white wedding sherwani with a white silk churidar is an elegant and refined choice for a groom. Crafted from raw silk, this sherwani exudes sophistication and luxury. The mandarin collar, full sleeves, straight-cut style, and front and side slits all contribute to its traditional and stylish appearance. What sets this sherwani apart is its intricate embellishments. It is adorned with Resham (silk thread embroidery), Zardosi, Badla (metallic threadwork), and Pearl work. These exquisite details add a touch of opulence and intricate craftsmanship to the sherwani, making it an excellent choice for a wedding.&nbsp;</strong></p>', '1700647580weding-sherwani-2.jpg', 0, 0, 0, '3,4,7', '3,5', NULL, NULL, NULL, NULL, '2023-11-03 05:12:10', '2023-11-23 05:07:00'),
(40, 8, 17, 19, 'wedding Sherwani', 'wedding-sherwani-', 0, 0, 0, 'wedding Suit\'s', 'SKU1234', 'The pastel White colour of the sherwani is both modern and versatile, making it suitable for various wedding themes and color palettes. Paired with a white silk churidar, the ensemble creates a harmonious and regal look, making the groom look dashing.', NULL, '10', 0, '<p>Elevate your wedding with the timeless charm of this Off-White Silk Wedding Sherwani. Adorned with intricate Resham, Zardosi, Sequins, Stone, and Cutdana work, it\'s a masterpiece of artistry. The Full Sleeves, Front &amp; Side Slits, and Mandarin Collar enhance its regal appeal. Crafted to perfection, this sherwani is the epitome of grace and style, ensuring you stand out on your special day.&nbsp;</p>', '1700656376wedding-shervani-3.jpg', 0, 0, 1, '3,4', '3,5', 'Semi-formal might be the most common wedding dress code. Think date night at the nicest restaurant in your town. Men should definitely wear slacks and a dress shirt but they can choose if they\'d like to wear a tie and sport jacket or not. Women should wea', NULL, NULL, NULL, '2023-11-03 05:27:33', '2023-11-23 05:05:28'),
(43, 8, 20, 36, 'Deep Navy  Blue Woven Italian Jodhpuri Suit', 'deep-navy-blue-woven-italian-jodhpuri-suit', 0, 0, 0, 'JP52953', 'JP52953', 'Make a bold statement with this Navy blue Colour Jodhpuri set with sequins, thread and Printed work. Tailored in terry valvate fabric is lightweight, breathable and comfortable, Good Quality and Perfect Size.', 2, NULL, 2, '<p>Step up your fashion game with Navy blue Color Jodhpuri Suit Carefully tailored in Terry rayon fabric Printed Work, this ensemble promises a flawless fit and prime comfort. The suit collar boasts of an upscale Mandarin design that is sure to turn heads at any occasion. The full sleeves accentuate the ensemble\'s charisma. Ready to make a striking impression at every party, Wedding, Function, reception etc.</p>', '1708522920men.jpg', 0, 0, 1, '10', '7', NULL, NULL, NULL, NULL, '2023-11-23 05:46:26', '2024-02-21 13:42:00'),
(44, 8, 20, 36, 'New Stylish Red wine colour Jodhpuri suit\'s', 'new-stylish-red-wine-colour-jodhpuri-suit-s', 0, 0, 0, 'JP52906', 'JP52906', 'Make a bold fashion statement in this Stylish Red wine  colour suit, meticulously embellished with Terry rayon, and Sequins work that radiates opulence. Paired flawlessly with comfortable wine Beige cotton trousers in a stylish trouser style, this ensembl', 2, NULL, 2, '<ul><li>&nbsp;Matte Ruby Wine Jacquard Bandh gala Jodhpuri for Men</li><li>&nbsp; This Bandh gala Jodhpuri Suit comes with matching Wine Trousers</li><li>&nbsp; The Moti and thread handwork on neck and pocket complements the floral texture of the Jacquard</li><li>&nbsp; Pair this Bandh gala with Dark Wine mandarin collar shirt</li><li>&nbsp; This Classic Bandh gala can be the new shade in your wardrobe</li></ul>', '1704271170JP52906.jpg', 0, 0, 1, '10', '8', NULL, NULL, NULL, NULL, '2023-11-23 09:19:28', '2024-01-13 06:16:47'),
(45, 8, 17, 19, 'New Stylish wedding Sherwani', 'new-stylish-wedding-sherwani-', 0, 0, 0, 'New Stylish wedding Sherwani', 'SKU1234', 'New Stylish wedding Sherwani', NULL, '10', 0, NULL, '1702126283shrwani-img-01.jpg', 0, 0, 1, '3', '3', NULL, NULL, NULL, NULL, '2023-11-25 05:12:00', '2023-12-09 12:51:24'),
(47, 17, 35, 62, 'Printed Georgette  Crimson Pink  With Blouse & Lehenga.', 'printed-georgette-crimson-pink-with-blouse-lehenga-', 0, 0, 0, '0309000K001', 'Crop Top Lehenga+002', 'Readymade Printed Ghagra , With Organza Dupatta & Blouse.', 3, NULL, 2, '<p>Drape yourself with this beautiful lehenga of crimson pink color and and blouse of raw silk fabric with same color embraced on it, adds a touch of opulence. Not only this but it also has Organza Dupatta attached to it with work of Moti, &amp; pearl.&nbsp;</p>', '1708341104L1.webp', 0, 1, 0, '4,13', '9', NULL, NULL, NULL, NULL, '2023-11-27 10:28:04', '2024-02-19 11:11:46'),
(48, 18, 37, 70, 'Soft Net, With Gota Work , Light Beige color', 'soft-net-with-gota-work-light-beige-color', 0, 0, 0, '02LY000R001', 'Gowns+001', 'Fancy Gown With Gota &  Sequin Work.', 3, NULL, 2, '<p>This is beautifully designed fancy Gown with embellished Gota &amp; Sequin Work. It has also Dupatta attached to it which has soft net fabric.</p>', '1708336745H2.webp', 0, 0, 1, '15', '8', NULL, NULL, NULL, NULL, '2023-11-27 10:39:38', '2024-02-19 10:01:03'),
(49, 18, 37, 68, 'Peplum Top, Row Silk, Rose Pink  Color.', 'peplum-top-row-silk-rose-pink-color-', 0, 0, 0, '02SP0001001', 'Indoweston+002', 'Peplum Top With Sharara,  Zardosi Work.', 3, NULL, 2, '<p>The Embellishment of Zardosi work on Peplum top makes it more fascinating to wear. the Dress also has Sharara to it in crepe silk fabric with same color embraced to it.</p>', '1708335560I1.webp', 0, 0, 0, '4', '9', NULL, NULL, NULL, NULL, '2023-11-27 11:03:25', '2024-02-19 09:39:21'),
(50, 8, 20, 28, 'Classic New Suit', '-classic-new-suit-', 0, 0, 0, 'classic suit', 'SKU1234', NULL, 15, NULL, 2, NULL, '', 0, 0, 0, '', '', NULL, NULL, NULL, NULL, '2023-11-27 12:06:43', '2023-12-29 12:04:43'),
(51, 7, 15, 15, 'Ghagra', 'ghagra-', 0, 0, 0, 'ghagra', 'SKU1234', 'ghagra', NULL, NULL, 2, NULL, '', 0, 0, 0, '', '', NULL, NULL, NULL, NULL, '2023-11-27 12:15:05', '2023-11-27 12:15:05'),
(53, 18, 37, 69, 'Printed Pure Silk, Sorrell Brown With Mist Grey.', 'printed-pure-silk-sorrell-brown-with-mist-grey-', 0, 0, 0, '02WC001E001', 'Salwar Suit+002', 'Printed Zari With Moti & Mirror A Line Pattern.', 3, NULL, 2, '<p>Multi coloured Pure, Soft silk kameez adorned with Moti &nbsp;&amp; Zari work, featuring a stylish round neck at front. The A line pattern kameez has full sleeves and is embellished with print. Paired with mix Sorrell brown and mist grey color adding a touch of opulence. I Following with dupatta of chiffon fabric with Gota work at border. Their might be certain color variant due to photographic condition .</p>', '1708325004B1.webp', 0, 0, 0, '4', '5', NULL, NULL, NULL, NULL, '2023-11-29 10:14:43', '2024-02-19 06:46:36'),
(54, 7, 16, 18, 'Boys Suit', 'boys-suit', 0, 0, 0, 'Boys Suit', 'SKU1234', 'Boys Suit', NULL, '10', 0, '<p>Boys Suit</p>', '1701253166boy-1.jpg', 0, 0, 0, '4', '3', NULL, NULL, NULL, NULL, '2023-11-29 10:19:26', '2023-11-29 10:19:26'),
(55, 17, 35, 62, 'Raw Silk Peplum Top With Organza Dupatta.', 'raw-silk-peplum-top-with-organza-dupatta-', 0, 0, 0, '023G000V001', 'Crop Top Lehenga+003', 'Organza Dupatta With Soft Silk  peplum Top Over Ghagra Yellow Color.', 3, NULL, 2, '<p>Yellow color peplum top adorned with Moti &amp; Cutdana work featuring a stylish front V neck .The Ghagra of plain yellow color adds more rich and captivating look. It has also Organza Dupatta with same work.</p>', '1708342162N1.webp', 0, 0, 0, '6', '9', NULL, NULL, NULL, NULL, '2023-12-09 05:25:42', '2024-02-19 11:29:23'),
(57, 8, 20, 36, 'Matte Ruby Wine Jacquard Bandh gala Jodhpuri', 'matte-ruby-wine-jacquard-bandhgala-jodhpuri', 0, 0, 0, 'JP52974', 'JP52974', 'A brief style of your charm and glam of reception exalts from this whine Brown  Jodhpuri  suit. Crafted in terry rayon fabric.', 2, '0', 2, '<p>This Brown Colour jodhpuri suit is a perfect pick for party, crafted in terry rayon fabric with zari work. The mandarin collar, two flap pockets and a pocket tie adds charm to the attire.&nbsp;</p><p><br>&nbsp;</p>', '1704279832JP52974.jpg', 0, 1, 0, '10', '7', NULL, NULL, NULL, NULL, '2024-01-03 11:03:54', '2024-01-20 08:16:24'),
(58, 8, 20, 30, 'New  Looking Best Brown Colour Tuxedo Suit', 'new-looking-best-brown-colour-tuxedo-suit', 0, 0, 0, 'BN41322', 'BN41322', 'Get an emperor look in this designer Brown terry rayon Tuxedo suit.', 2, NULL, 2, '<p>Exhibit a vibe of elegance with this classic Brown checks coat suit for reception wear. Tailored from terry rayon fabric. It features a peak lapel collar, one buttoned placket, two welt pockets with flap, and a welt pocket. It comes with a shirt and an unstitched bottom.</p>', '1704280591BN41322.jpg', 0, 0, 1, '10', '7', NULL, NULL, NULL, NULL, '2024-01-03 11:16:32', '2024-01-13 06:08:53'),
(59, 8, 20, 30, 'Royal Blue Solid Terry Rayon Party Wear Coat Suit', 'royal-blue-solid-terry-rayon-party-wear-coat-suit', 0, 0, 0, 'BN41194', 'BN41194', 'Terry rayon fabric with royal blue color three piece coat suit.', 2, NULL, 2, '<p>Terry rayon fabric with royal blue color three piece coat suit. Featuring with shawl collar, full sleeves and one buttoned placket. Comes with matching bottom fabric and waist coat.</p>', '1704281676BN41194.jpg', 1, 0, 0, '10', '7', NULL, NULL, NULL, NULL, '2024-01-03 11:34:37', '2024-01-27 06:00:22'),
(60, 8, 20, 30, 'Maroon Colour All Function  Wear Terry Rayon Coat Suit', 'maroon-colour-all-function-wear-terry-rayon-coat-suit', 0, 0, 0, 'BN41217', 'BN41217', 'Exhibit a vibe of elegance with this classic maroon checks coat suit for reception wear. Tailored from terry rayon fabric.', 2, NULL, 2, '<p>Exhibit a vibe of elegance with this classic maroon checks coat suit for reception wear. Tailored from terry rayon fabric. It features a peak lapel collar, one buttoned placket, two welt pockets with flap, and a welt pocket.</p>', '1704282376BN41217.jpg', 0, 1, 0, '10', '7', NULL, NULL, NULL, NULL, '2024-01-03 11:46:18', '2024-01-13 06:06:08'),
(61, 8, 20, 30, 'Royal Blue Tuxedo Suit', 'royal-blue-tuxedo-suit', 0, 0, 0, 'BN41360', 'BN41360', 'Royal Blue  Tuxedo Suit includes , a Waistcoat, a matching Trouser, a Shirt, a matching Bow and Pocket Square.', 2, NULL, 2, '<ul><li>Navy Blue&nbsp;Classic and Contemporary Tuxedo Suit for&nbsp;Men.</li><li>This smart fit, shawl lapel, two button&nbsp;Tuxedo, with metal chain on the lapel comes with matching waistcoat and trouser</li><li>It also comes with metal buttons, and Ribbon Bow with matching broche</li><li>Sustainable fashion tip: Re Style this Tuxedo by removing hand stitched chain on the lapel</li><li>It includes pure cotton straight pleat tuxedo shirt.</li><li>Can be worn in evening occasions such as wedding reception, dinner parties, anniversary occasions, etc</li><li>One can never go wrong with a Navy Blue Tuxedo.</li></ul>', '1704283546BN41360.jpg', 0, 0, 1, '10', '7', NULL, NULL, NULL, NULL, '2024-01-03 12:05:47', '2024-01-06 06:25:29'),
(62, 8, 20, 30, 'Black  Designer Suit', 'black-designer-suit', 0, 0, 0, 'BN71361', 'BN71361', 'includes Tuxedo, a Waistcoat, a matching Trouser, a Shirt, a matching Bow and Pocket Square.', 2, NULL, 2, '<ul><li>Black &nbsp;Classic and Contemporary Tuxedo Suit for&nbsp;Men.</li><li>This smart fit, shawl lapel, two button&nbsp;Tuxedo, with metal chain on the lapel comes with matching waistcoat and trouser</li><li>It also comes with metal buttons, and Ribbon Bow with matching broche</li><li>Sustainable fashion tip: Re Style this Tuxedo by removing hand stitched chain on the lapel</li><li>It includes pure cotton straight pleat tuxedo shirt.</li><li>Can be worn in evening occasions such as wedding reception, dinner parties, anniversary occasions, etc</li><li>One can never go wrong with Black &nbsp;Tuxedo Suit.</li></ul>', '1704437722BN71361.jpg', 0, 1, 0, '10', '7', NULL, NULL, NULL, NULL, '2024-01-05 06:55:23', '2024-01-13 06:14:01'),
(63, 8, 20, 30, 'Navy Blue  Designer Tuxedo Suit', 'navy-blue-designer-tuxedo-suit', 0, 0, 0, 'BN71380', 'BN71380', 'Navy Blue Classic Tuxedo Suit All Function Useable', 2, NULL, 2, '<p>Sagar Menza&nbsp;</p>', '1704439223BN71380.jpg', 0, 0, 1, '10', '7', NULL, NULL, NULL, NULL, '2024-01-05 07:20:24', '2024-01-13 06:13:15'),
(64, 8, 20, 30, 'Navy Blue exclusive Lightweight  Suit', 'navy-blue-exclusive-lightweight-suit-', 0, 0, 0, 'BN71435', 'BN71435', 'Tuxedo Suit Light Weight  Navy blue  for Comfortable All Functions', 2, NULL, 2, '<ul><li>Navy Blue SeerSucker Lightweight Blazer for Men</li><li>This Blazer is made of SeerSucker fabric, hence it has a little stretch and is lightweight</li><li>Convenient for travel purpose, easy to fold and carry in bag</li><li>Can be worn with Jeans/Chinos/Trousers&nbsp;and Shirt/ Polo Tshirt</li><li>For Men who always look for something new, ne it design, color, fabric, etc</li></ul>', '1704447058BN71435.jpg', 1, 0, 0, '10', '7', NULL, NULL, NULL, NULL, '2024-01-05 09:30:59', '2024-02-13 13:47:58'),
(65, 8, 20, 30, 'New Latest Tuxedo Blue Suit', 'new-latest-tuxedo-blue-suit', 0, 0, 0, 'BN71515', 'BN71515', 'New Best Quality Tuxedo Suit', 2, NULL, 2, '<p>New Best Quality Tuxedo Suit&nbsp;</p>', '1704461586BN71515.jpg', 0, 1, 0, '10', '7', NULL, NULL, NULL, NULL, '2024-01-05 13:33:08', '2024-01-11 13:30:20'),
(66, 9, 18, 24, 'Rose Pink, Pure Designer Silk  Saree.', 'rose-pink-pure-designer-silk-saree-', 0, 0, 0, 'Product Code pending', 'embroidery+001', 'Pure Silk, Rose Pink With Border Royal Blue, Zari Woven.', 3, NULL, 2, '<p>Fascinating your grace with this Rose Pink Pure Silk Saree. Adorned with &nbsp;Zari Woven patterns all over, it exudes elegance. The 5.5 Mtrs length drapes beautifully, while the Silk Border of royal blue color and Pallu in Blue Color showcase intricate Zari work. the unstitched blouse accompanying with rose pink color.</p>', '1708582135G2.webp', 0, 0, 1, '4', '10', NULL, NULL, NULL, NULL, '2024-01-31 10:30:47', '2024-02-22 06:08:55'),
(67, 17, 35, 60, 'Red Sequins Embroidered Silk Exclusive Bridal Lehenga', '-red-sequins-embroidered-silk-exclusive-bridal-lehenga-', 0, 0, 0, '02PI002O001', 'Designer Lehenga+003', 'Red Sequins Embroidered Silk Exclusive Bridal Lehenga  Embrace the allure of Crimson Red Silk in this enchanting ensemble. The flared Lehenga, adorned with Dori, Sequins, Zardosi & Resham work, radiates pure charm.', 9, NULL, 2, '<p>Embrace the allure of Crimson Red Silk in this enchanting ensemble. The flared Lehenga, adorned with Dori, Sequins, Zardosi &amp; Resham work, radiates pure charm. The Readymade Lehenga Choli, featuring a Tie-Back Neck and Leaf Neck pattern with Elbow Sleeves, complements the richness of Silk. The Net Dupatta in Crimson Red, with Gold borders and intricate Dori, Sequins, Pearl &amp; Resham work, adds a touch of opulence. Elevate your look with this Pure masterpiece, pairing it with golden accessories for a regal finish.</p>', '1708147375b1000.jpg', 0, 1, 0, '4', '8', NULL, NULL, NULL, NULL, '2024-02-15 10:09:14', '2024-02-21 09:20:19'),
(68, 9, 19, 77, 'Zari woven Silk Saree', 'zari-woven-silk-saree', 0, 0, 0, '015F007X001', 'Fancy+001', 'Rose Pink With Cream, Zari Woven, Resham, Swarovski, Silk Saree.', 3, NULL, 2, '<p>Embracing the vivacity of Rose Pink with Cream Zari Woven Silk Saree .It has 5.5 mtr length &nbsp;carrying to it. While the blouse is unstitched with same work of Zari and Swarovski to it. There might be a little color variant due to lightning of the photographic condition .</p>', '1708157097015F007X001.jpg', 0, 0, 0, '4', '9', NULL, NULL, NULL, NULL, '2024-02-17 08:04:58', '2024-02-17 12:42:50'),
(69, 9, 19, 49, 'Pale Orange Silk Banarasi Saree', 'pale-orange-silk-banarasi-saree', 0, 0, 0, 'pending', 'sku code pending', 'Pale Orange, Silk Banarasi Saree, Resham Work.', 3, NULL, 2, '<p>Wrapping Yourself In Elegance With Pale Orange With Banarasi Silk Saree. It Has Unstitched Blouse With Same Work To It. &nbsp;It\'s&nbsp;</p><p>Pallu &nbsp;is Crafted With Zari weaving Red Color, Their Might be Little Color &nbsp;Variant Due To Photographic Lighting &nbsp;Sources.</p>', '1708159204A3.jpg', 0, 0, 0, '12', '9', NULL, NULL, NULL, NULL, '2024-02-17 08:40:04', '2024-02-17 08:40:04'),
(70, 9, 19, 49, 'Pista  Green  Banarasi Silk Saree', 'pista-green-banarasi-silk-saree-', 0, 0, 0, '01BP0064001', 'Saree+002', 'Pista  Green, Gota Work,  Banarasi Silk Saree .', 3, NULL, 2, '<p>The saree is designed with Pista Green and multi dy color to it with unstitched blouse attached.</p><p>This saree is crafted with Silk Banarasi and Zari weaving to it and fulfilled border with Gota work on it &amp; creating elegant and traditional look to it.</p>', '1708232648BAR--01BP0064001.jpg', 0, 0, 0, '4', '9', NULL, NULL, NULL, NULL, '2024-02-17 08:57:21', '2024-02-18 05:04:08'),
(71, 9, 18, 23, 'Embroidered, Butter Organza ,Taupe Pink', 'embroidered-butter-organza-taupe-pink-', 0, 0, 0, '01GA008C001', 'Saree+001', 'Embroidered, Organza Saree, Taupe Pink, With Sequin & Moti Work.', 3, NULL, 2, '<p>The saree is fascinating with Taupe pink and white color which gives elegant and rich look to it. It has readymade blouse with Sippi and Moti work on it&nbsp;</p><p>the blouse pattern is all over with leaf front neck pattern. The saree has another palazzo attached to it with white color printed. Their might be little color variant due to photographic condition .</p>', '1708163201b4.jpg', 0, 0, 0, '4', '5', NULL, NULL, NULL, NULL, '2024-02-17 09:46:42', '2024-02-17 09:46:42'),
(72, 9, 19, 76, 'Crimson Red Banarasi Khadi Silk Saree', 'crimson-red-banarasi-khadi-silk-saree-', 0, 0, 0, '01M4000S001', 'Khadi+001', 'Zari woven, Crimson Red, Banarasi Khadi Silk,  Bandage Printed Saree.', 3, NULL, 2, '<p>The saree is handcrafted with cutdana , sequin, Zari &amp; Zardosi work at border.</p><p>The crimson red color embraced to it makes more fascinating feeling to it that too with attached unstitched blouse with same work embraced on it. Following with frills to the saree .Their might be certain color variant due to photographic condition.</p>', '1708164355c3.jpg', 0, 0, 0, '12', '5', NULL, NULL, NULL, NULL, '2024-02-17 10:05:56', '2024-02-17 10:11:36'),
(73, 9, 18, 22, 'Crimson Red ,Zari Woven, Gajji  Silk Saree', 'crimson-red-zari-woven-gajji-silk-saree', 0, 0, 0, 'Product Code pending', 'Bandani+001', 'Crimson Red Color, Ghatchola Pattern ,Printed Gajji Silk Saree.', 3, NULL, 2, '<p>Drape yourself in the timeless elegance of Crimson red color with our exquisite Gajji Silk Saree. Intricately woven with Zari ,adds the touch of opulence .This is the perfect blend of tradition and contemporary grace. The blouse is unstitched embracing with Gota work. Their &nbsp;might be little color variant due to image and original product due to photographic lighting sources.</p>', '1708580734D1.webp', 0, 0, 0, '4', '10', NULL, NULL, NULL, NULL, '2024-02-17 10:43:23', '2024-02-22 05:45:34'),
(74, 9, 19, 48, 'Black, Zari Woven, Patola Saree.', 'black-zari-woven-patola-saree-', 0, 0, 0, '02KI000K001', 'Patola+001', 'Zari Woven Black Color With Patola Silk Saree.', 3, NULL, 2, '<p>Fascinating with black color Patola print saree looks more beautiful while wearing. It has unstitched blouse attached to it, not only this but it is handcrafted by Zari Weaving cloth. their may be certain color variant due to photographic condition.</p>', '1708585891F3.webp', 0, 0, 0, '4', '10', NULL, NULL, NULL, NULL, '2024-02-18 06:01:10', '2024-02-22 07:11:32'),
(75, 9, 19, 25, 'Golden Yellow South Silk Saree.', 'golden-yellow-south-silk-saree-', 0, 0, 0, '02AD0010001', 'South+ 001', 'Zari Woven With Golden Yellow Color South Silk Saree.', 3, NULL, 2, '<p>Drape Yourself In the Timeless elegance of Golden Yellow With Our Exquisite South Silk Saree. Intricately Woven with Zari Detailing. The Gold Border Adorned with zari weaving, adds a Touch Of &nbsp;opulence Paired With An Unstitch Silk Blouse Silk Matching With Zari Work.</p><p>Showcasing The Artistry Of Zari on luxurious Silk Fabric. There Might Be certain color variant due to photographic condition.&nbsp;</p>', '1708586354J2.webp', 0, 0, 0, '4', '10', NULL, NULL, NULL, NULL, '2024-02-18 06:18:56', '2024-02-22 07:19:14'),
(76, 9, 19, 25, 'Red , Gold Zari Woven South Silk Saree.', 'red-gold-zari-woven-south-silk-saree-', 0, 0, 0, '02AA002I001', 'South+002', 'Zari Woven With Red Color South Silk Saree.', 3, NULL, 2, '<p>Drape yourself in the timeless elegance of Red color with our exquisite south silk saree. Intricately woven with Zari detailing, It exudes a regal charm. The gold border ,adorned with Zari weaving, adds a touch of opulence. Paired with unstitched south silk &nbsp;blouse matching the Zari work.&nbsp;</p>', '1708586132H2.webp', 0, 0, 0, '4', '10', NULL, NULL, NULL, NULL, '2024-02-18 06:32:57', '2024-02-22 07:15:32'),
(77, 9, 19, 25, 'Red , With Golden Zari Woven South Silk Saree.', 'red-with-golden-zari-woven-south-silk-saree-', 0, 0, 0, '017C0019001', 'South+003', 'Red Color With Golden Zari, Swarovski, Zardosi, Resham, Sequin.', 3, NULL, 2, '<p>The saree has flower print carrying on to it. The golden Zari fascinating on the saree makes it more rich while wearing. The saree not only has Zari but also Zardosi, Resham, &nbsp;Swarovski, accompanying on it. Showcasing the Zari weaving unstitched blouse attached to it.</p>', '1708585669I3.webp', 0, 0, 0, '4', '10', NULL, NULL, NULL, NULL, '2024-02-18 06:48:51', '2024-02-22 07:07:49'),
(78, 9, 19, 25, 'Yellow Color, South Silk Saree, With Golden Zari At Border', 'yellow-color-south-silk-saree-with-golden-zari-at-border', 0, 0, 0, '02A6000K001', 'South+ 004', 'South Silk Saree With Zari Woven Yellow Color.', 3, NULL, 2, '<p>Embrace the vivacity of bright yellow in this handloom south silk saree. The 5.5 mtr length is adorned with intricate Zari woven pattern, complemented by a silk border in resplendent green with matching Zari work , with unstitched blouse which has yellow color accompanying Zari work on it give a touch of opulence to it.&nbsp;</p>', '1708585253N3.webp', 0, 0, 0, '4', '10', NULL, NULL, NULL, NULL, '2024-02-18 07:08:49', '2024-02-22 07:00:53'),
(79, 9, 19, 25, 'Pacific  Blue Zari Woven Kanchivaram Silk Saree.', 'pacific-blue-zari-woven-kanchivaram-silk-saree-', 0, 0, 0, '02A60014001', 'South+005', 'Zari Woven, Pacific Blue  With Red Border Silk Saree.', 3, NULL, 2, '<p>Embellishing the zari work on saree makes it look more fascinating. The saree has pacific blue color body and the border is embraced with red color accompanying with Zari work on it. It has unstitched blouse attached to it with Zari weaving work on it. Their might be certain image color variant due to photographic condition &nbsp;or your device Setting.&nbsp;</p>', '1708584994P2.webp', 0, 1, 0, '4', '10', NULL, NULL, NULL, NULL, '2024-02-18 07:28:58', '2024-02-22 06:56:34'),
(80, 9, 19, 47, '(Gadwall Silk)  Paithani Saree With Tropical Green Color', '-gadwall-silk-paithani-saree-with-tropical-green-color', 0, 0, 0, '02A6000Q001', 'Paithani+001', 'Tropical Green  With True Rani Color Paithani Border, Zari Woven.', 3, NULL, 2, '<p>Make a statement in the limelight with the tropical green flared Gadwall silk saree . Adorned with true rani color paithani border with zari weaving. The unstitched blouse attached to it makes it more decored with same Zari work and color . The Pallu of the saree is embraced with true rani color .their might be little &nbsp;color variant due to photographic condition or setting in your device.</p>', '1708242809K4.webp', 1, 0, 0, '4', '10', NULL, NULL, NULL, NULL, '2024-02-18 07:53:30', '2024-02-18 07:58:22'),
(81, 9, 19, 47, '(Gadwall Silk) , Paithani Saree , Violet  Byzantium.', '-gadwall-silk-paithani-saree-violet-byzantium-', 0, 0, 0, '02A6000Q001', 'Paithani+002', 'Zari Woven, Violet  Byzantium, Resham Paithani silk Saree.', 3, NULL, 2, '<p>This saree is adorned with Zari weaving on it and has unstitched blouse attached to it with beautiful violet color adding a touch of opulence &nbsp;it. The saree is fascinated with border of rose pink color carrying a Paithani type of look and the body is decored with Zari work.</p>', '1708584624K2.webp', 1, 0, 1, '4', '10', NULL, NULL, NULL, NULL, '2024-02-18 09:12:19', '2024-02-22 06:50:25'),
(82, 9, 19, 77, 'Multi Color, Zardosi, Tissue  Silk Saree.', 'multi-color-zardosi-tissue-silk-saree-', 0, 0, 0, '01YG003N001', 'Fancy+002', 'Zari Woven with Zardosi work, multi Color, Pure Tissue Silk Saree.', 3, NULL, 2, '<p>Embracing the vivacity of multi coloured saree in the tissue silk fabric. The 5.5 mtr length is adorned with Zari woven pattern, contemplated by silk true rani color showcasing the work of Zardosi and Resham accompanied on it, adds a touch of opulence. It has also unstitched blouse attached to it which has same Zari work.</p>', '1708248576M1.webp', 1, 1, 1, '4', '10', NULL, NULL, NULL, NULL, '2024-02-18 09:29:37', '2024-02-18 09:29:52'),
(83, 9, 19, 25, 'RoseWood Brown, Zari Woven, Kanchivaram  Silk Saree.', 'rosewood-brown-zari-woven-kanchivaram-silk-saree-', 0, 0, 0, '02A6001B001', 'South+006', 'Zari Woven, Pure Silk Saree.', 3, NULL, 2, '<p>Drape Yourself In The timeless Bright Rose Wood Brown Color.</p><p>The Work Of Saree Fascinates More While You Wear It On Your Body, Accompanying With Zari On Border With Beautiful Red Color At Border Adds A Touch Of Opulence.</p><p>It Has Unstitched blouse attached to it with same Zari work.</p>', '1708249623O1.webp', 1, 1, 1, '4', '10', NULL, NULL, NULL, NULL, '2024-02-18 09:47:04', '2024-02-19 06:09:16'),
(84, 18, 37, 69, 'Multi Color,  Soft Silk  Printed Suit.', 'multi-color-soft-silk-printed-suit-', 0, 0, 0, '02WC0011001', 'Salwar Suit+001', 'Printed Suit, Multi Color With  Cutdana, Sequin, Mirror Work.', 3, NULL, 2, '<p>Multi-coloured &nbsp;pure soft silk kameez adorned with sequin ,Cutdana, mirror work, Featuring a stylish U neck at the front. This suit has full sleeves attached ton it is embellished with print. Paired with multi color A line pattern bottom. It has also dupatta of of multi color which adds more traditional look.&nbsp;</p>', '1708323703A1_2.webp', 0, 0, 0, '6', '5', NULL, NULL, NULL, NULL, '2024-02-19 06:21:44', '2024-02-19 06:28:16'),
(85, 9, 19, 25, 'Kanchivaram Pure Silk Saree.', 'kanchivaram-pure-silk-saree-', 0, 0, 0, '0220L000Y001', 'South+ 007', 'Occur Yellow, Zari Woven, Kanchivaram Pure Silk Saree.', 3, NULL, 2, '<p>The fascinating Occur Yellow color with Zari work makes the saree look more captivating and adds touch of opulence. it has unstitched blouse attached with same Zari work on it. The Pallu of the saree is decored with Zari weaving embracing to the dark red color.</p>', '1708326744NA1.webp', 0, 0, 0, '4', '10', NULL, NULL, NULL, NULL, '2024-02-19 07:12:26', '2024-02-19 07:15:00'),
(86, 18, 38, 72, 'Drape Saree Georgette, Peach Color.', 'drape-saree-georgette-peach-color-', 0, 0, 0, '02R80046001', 'Festive+001', 'Drape Saree With Jacket & Blouse, Sequin Work.', 3, NULL, 2, '<p>Add a vibrancy in your party &nbsp;collection with this drape saree of peach color. This &nbsp;is exclusive &nbsp; saree &nbsp;which has blouse attached to it with oversleeves beautified gracefully with sequin, and Sippi work.</p>', '1708328733D3.webp', 0, 0, 0, '13', '9', NULL, NULL, NULL, NULL, '2024-02-19 07:45:34', '2024-02-19 07:47:04'),
(87, 18, 37, 68, 'Indoweston Printed Zari Pink Color', 'indoweston-printed-zari-pink-color-', 0, 0, 0, '017Z009H001', 'Indoweston+001', 'Chinon, Indoweston Suit with Skirt of Multi color.', 3, NULL, 2, '<p>The Indoweston Suit is designed with Cutdana , Moti , Resham , pipe, to it which is absolutely beautiful having long sleeves attached to it<strong>.</strong></p>', '1708329405C4.webp', 0, 0, 0, '14', '5', NULL, NULL, NULL, NULL, '2024-02-19 07:56:46', '2024-02-19 08:02:57'),
(88, 18, 37, 71, 'Bottle Green Crop Top Skirt.', 'bottle-green-crop-top-skirt-', 0, 0, 0, '02SI0007001', 'Crop Top+001', 'Bottle Green Crop Top Skirt, With Resham Work.', 3, NULL, 2, '<p>The crop top skirt is of bottle green color which has Resham &amp; &nbsp;mirror work on it which &nbsp;gives the feel of handcrafted. It also has skirt which is of Chinon fabric with bottle green color. The dupatta attached to it is of Net embracing with border.&nbsp;</p>', '1708330412E1.webp', 0, 0, 0, '4', '9', NULL, NULL, NULL, NULL, '2024-02-19 08:13:33', '2024-02-19 08:16:20'),
(89, 9, 19, 25, 'Magenta Purple Kanchivaram Silk Saree.', 'magenta-purple-kanchivaram-silk-saree-', 0, 0, 0, '020L000K001', 'South+007', 'Zari Woven Magenta Purple Kanchivaram Silk Saree.', 3, NULL, 2, '<p>Their Might be certain color variant due to photographic condition.</p>', '1708337352NB3.webp', 0, 0, 0, '4', '10', NULL, NULL, NULL, NULL, '2024-02-19 10:09:13', '2024-02-19 10:14:39'),
(90, 17, 35, 62, 'Ocean Blue Blouse With Lehenga & Dupatta.', '-ocean-blue-blouse-with-lehenga-dupatta-', 0, 0, 0, '035H000K001', 'Crop Top Lehenga+001', 'Raw Silk, Moti ,Cutdana & Mirror Work Crop Top Lehenga.', 3, NULL, 2, '<p>This Ghagra is decored with Moti, Cutdana, and mirror work which has blouse attached to it having &nbsp;neck from front side having same embroidery to it. It has also Organza Dupatta attached to it which makes it look more rich.</p>', '1708340020K1.webp', 0, 0, 0, '4', '8', NULL, NULL, NULL, NULL, '2024-02-19 10:53:41', '2024-02-19 10:55:12'),
(91, 9, 19, 49, 'Gota Work, Zari Woven, Wine Color Banarasi Silk Saree.', 'gota-work-zari-woven-wine-color-banarasi-silk-saree-', 0, 0, 0, '035G000D001', 'Banarasi+001', 'Hand Work, Gota Work, Zari Woven Banarasi Silk Saree.', 3, NULL, 2, '<p>This Saree Fabric are Best Quality, &nbsp;Worked Carefully, ……… &nbsp;&nbsp;</p>', '1708345495DSC06313.jpg', 0, 0, 0, '4', '10', NULL, NULL, NULL, NULL, '2024-02-19 12:14:07', '2024-02-19 12:24:55'),
(92, 9, 19, 25, 'Pacific Blue, Kanchivaram Silk Saree', 'pacific-blue-kanchivaram-silk-saree', 0, 0, 0, '02OL000E001', 'South+008', 'Zari Woven, Pacific Blue, Kanchivaram Silk Saree.', 3, NULL, 2, '<p>This Saree is Crafted With Zari weaving Having Pacific Blue Color Adding A Touch Of Traditional Look. it also has Unstitched Blouse Attached To It With Same Work.</p>', '1708345218NC2.webp', 0, 0, 0, '4', '10', NULL, NULL, NULL, NULL, '2024-02-19 12:20:19', '2024-02-20 10:14:06'),
(93, 9, 18, 23, 'Cinereous, Soft Organza Designer Saree', 'cinereous-soft-organza-designer-saree-', 0, 0, 0, '01GA007N001', 'Organza+001', 'Soft Organza Designer Saree  With Readymade Blouse.', 3, NULL, 2, '<p>Drape yourself in this marvellous Saree with Cinereous color soft organza saree. It has readymade blouse attached to it which have Pearl work on it. The saree Border is designed and decored with Pearls and Moti work.&nbsp;</p>', '1708421036NJ1.jpg', 0, 0, 0, '15', '8', NULL, NULL, NULL, NULL, '2024-02-20 09:23:57', '2024-02-20 09:23:57'),
(94, 9, 19, 77, 'Teal Blue Fancy Art Silk Saree.', 'teal-blue-fancy-art-silk-saree-', 0, 0, 0, '035G0022001', 'Fancy+003', 'Teal Blue Fancy Art Silk Saree With Gota & Zari Work.', 3, NULL, 2, '<p>Adding a touch of opulence the saree has Leheriya print with beautiful Teal Blue color embracing on it. It has also unstitched blouse attached to it having Gota &amp; Zari work on it. The saree has Gota and Zari work on its Border.&nbsp;</p>', '1708422142NG4.webp', 0, 0, 0, '4', '8', NULL, NULL, NULL, NULL, '2024-02-20 09:42:23', '2024-02-20 09:42:23'),
(95, 9, 18, 24, 'Wine Dreg, Chinon Crape, Embroidered With Resham & Cutdana.', 'wine-dreg-chinon-crape-embroidered-with-resham-cutdana-', 0, 0, 0, '015F0096001', 'Embroidered+001', 'Wine Dreg, Resham Cutdana Sequin & Moti Work.', 3, NULL, 2, '<p>The saree is Embellished with Resham, Cutdana, Sequin , &amp; Moti work on it embracing with Wine dreg color gracefully. The saree has all over craft on it with attached unstitched blouse to it having same work and color. Their might be certain color variant in photo due to photographic condition.&nbsp;</p><p>&nbsp;</p>', '1708423534NE1.webp', 0, 0, 0, '4', '8', NULL, NULL, NULL, NULL, '2024-02-20 10:05:34', '2024-02-20 10:05:34'),
(96, 9, 18, 23, 'French Plum Silk Organza Embroidered .', 'french-plum-silk-organza-embroidered-', 0, 0, 0, '013Q007L001', 'Organza+002', 'Silk Organza  Saree With Sequin, Cutdana & Resham Work.', 3, NULL, 2, '<p>The Embellishment of this pure Organza silk saree gives a beautiful touch, while it also has embraced Cutdana, Resham, Sequin work at border which adds a touch of opulence. The saree has unstitched blouse attached to it with same work.&nbsp;</p>', '1708426692NM1.webp', 0, 0, 0, '16', '8,9', NULL, NULL, NULL, NULL, '2024-02-20 10:55:19', '2024-02-20 10:58:12'),
(97, 9, 19, 77, 'Dark Byzantium, Russian Silk  Saree', 'dark-byzantium-russian-silk-saree', 0, 0, 0, '02N0003Z001', 'Fancy+004', 'Fancy Art Silk Saree, Embroidered with Zardosi & Gota Work.', 3, NULL, 2, '<p>Drape yourself in this timeless elegance of Dark Byzantium Color with jacket &nbsp;saree, while having unstitched blouse attached to it. The saree has Zardosi, Moti, &amp; Gota work on it embracing with same color.&nbsp;</p>', '1708427425NK4.webp', 0, 0, 0, '17', '8', NULL, NULL, NULL, NULL, '2024-02-20 11:10:25', '2024-02-20 11:10:40'),
(98, 9, 18, 23, 'Brink Pink, Soft Organza Plain Designer Saree.', 'brink-pink-soft-organza-plain-designer-saree-', 0, 0, 0, '020J001E001', 'Organza+003', 'Embroidered Soft Organza Saree  with Sequin,  Pipe And Moti Work.', 3, NULL, 2, '<p>Drape Yourself In elegance with this mesmerizing brink pink soft organza saree. Adorned &nbsp;With Intricate Pipe, Sequin &amp; Moti work at border. it has also beautiful readymade blouse attached to it with same work. &nbsp;</p>', '1708428140NL4.webp', 0, 0, 0, '16', '8', NULL, NULL, NULL, NULL, '2024-02-20 11:22:21', '2024-02-20 11:22:21'),
(99, 9, 18, 23, 'Navy Blue,  Zari Designer  Organza Silk Saree.', 'navy-blue-zari-designer-organza-silk-saree-', 0, 0, 0, '02GA0083001', 'Organza+004', 'Cutdana, Resham, Moti, Zardosi Work, Navy Blue Organza Silk Saree.', 3, NULL, 2, '<p>The Saree Has Cutdana, Resham, Moti, Sequin Slaves, Zardosi Work &nbsp;Organza Designer Silk Saree.&nbsp;</p>', '1708498754NN1.jpg', 0, 0, 0, '4', '10', NULL, NULL, NULL, NULL, '2024-02-20 12:03:05', '2024-02-21 06:59:14'),
(100, 9, 18, 23, 'greyish blue, Butter Organza 2 Parts Saree', 'greyish-blue-butter-organza-2-parts-saree', 0, 0, 0, '01WR005S001', 'Organza+005', 'Bitter Organza Embroidered  Two Part Saree With Sippy Work', 3, NULL, 2, '<p>Drape Yourself In this Timeless Elegance of Greyish Blue Color With Sippy And Sequin Work At Border Work. it is two part saree having readymade blouse with same work . &nbsp;</p>', '1708433195NP2.webp', 0, 0, 0, '11', '8', NULL, NULL, NULL, NULL, '2024-02-20 12:46:35', '2024-02-20 12:46:35'),
(101, 9, 19, 25, 'Zari woven, South  Silk Saree', 'zari-woven-south-silk-saree', 0, 0, 0, '02AD000Z001', 'South+009', 'Zari woven, South  Silk Saree.', 3, NULL, 2, NULL, '1708494770NQ3.webp', 0, 0, 0, '4', '10', NULL, NULL, NULL, NULL, '2024-02-21 05:52:50', '2024-02-21 05:52:50'),
(102, 9, 19, 48, 'Zari Woven Patola Silk Saree.', 'zari-woven-patola-silk-saree-', 0, 0, 0, '010A0034001', 'Patola+002', 'Zari Woven  Patola Silk Saree.', 3, NULL, 2, NULL, '1708495079NR4.webp', 0, 0, 0, '4', '10', NULL, NULL, NULL, NULL, '2024-02-21 05:57:59', '2024-02-21 05:57:59'),
(103, 17, 35, 60, 'Purple  Embroidered  Raw Silk   With Pure Organza Dupatta', 'purple-embroidered-raw-silk-with-pure-organza-dupatta-', 0, 0, 0, '02WG000C001', 'Designer Lehenga+001', 'Embroidered  Raw Silk   Lehenga With  Blouse & Dupatta.', 9, NULL, 2, '<p>The lehenga is embellished with Moti, Cutdana , &amp; Pearl work &nbsp;&amp; the adoring Dupatta with rose pink colour of soft organza makes it more graceful to wear. It also has blouse of Mauve Taupe color embraced to it with Zari and Resham work.</p>', '1708503966I4.jpg', 0, 0, 0, '4', '8', NULL, NULL, NULL, NULL, '2024-02-21 08:26:07', '2024-02-21 08:26:07'),
(104, 17, 35, 60, 'Tiara Blue, Crush Silk With Blouse & Dupatta.', 'tiara-blue-crush-silk-with-blouse-dupatta-', 0, 0, 0, 'Product Code pending', 'Designer Lehenga+002', 'Crush Silk Lehenga With Organza Dupatta & Silk Blouse.', 9, NULL, 2, '<p>The Lehenga is designed with Gota , sequin , Moti , Mirror , Cutdana &amp; Zari work on it . It has also blouse attached to it with front V neck and back of leaf neck pattern embracing silk fabric on it , while the blouse has half sleeves attached to it . It includes dupatta of soft organza having same work which enhances the look of whole designer wear .&nbsp;</p>', '1708506400E3.jpg', 0, 0, 0, '4', '8', NULL, NULL, NULL, NULL, '2024-02-21 09:06:41', '2024-02-21 09:06:41'),
(105, 17, 35, 60, 'Mid Gray, Sky Blue, Jenicho Tissue  Designer Lehenga', 'mid-gray-sky-blue-jenicho-tissue-designer-lehenga-', 0, 0, 0, '01R7003S001', 'Designer Lehenga+004', 'Shading Color Of Lehenga with Blouse & Dupatta.', 9, NULL, 2, '<p>The embellishment of Cutdana , Sequin , Moti , &amp; Swarovski on lehenga embracing the Jenicho tissue makes it look more beautiful , while Dupatta is of Regent Gray color with organza silk fabric . IT has also unstitched blouse attached to it with Swarovski work &nbsp;consisting of Mid Gray with shading color .</p>', '1708509076c2.jpg', 0, 0, 0, '18', '8', NULL, NULL, NULL, NULL, '2024-02-21 09:51:17', '2024-02-21 09:54:30'),
(106, 17, 35, 60, 'Banarasi Zari Woven Lehenga With Attach Pallu & Blouse.', 'banarasi-zari-woven-lehenga-with-attach-pallu-blouse-', 0, 0, 0, '01R70035001', 'Designer Lehenga+005', 'Blue Dianne Banarasi Lehenga, Raw Silk Blouse.', 9, NULL, 2, '<p>Envelop yourself in this timeless color of Blue Dianne lehenga with attached Pallu &nbsp;embracing Banarasi Zari weaving . IT has also blouse attached to it with front round neck pattern and u neck pattern at back with Mirror, Resham, Zardosi, and stone work having Raw silk fabric.&nbsp;</p>', '1708509878D3.jpg', 0, 0, 0, '12', '10', NULL, NULL, NULL, NULL, '2024-02-21 10:04:39', '2024-02-21 10:06:35'),
(107, 17, 36, 63, 'Mauve Pink,Silk Lehnga With Organza Dupatta  & Blouse.', 'mauve-pink-silk-lehnga-with-organza-dupatta-blouse-', 0, 0, 0, '035H000E001', 'wedding lehenga+001', 'Silk Lehnga With Organza Dupatta & Blouse.', 9, NULL, 2, '<p>Drape Yourself In this Mauve &nbsp;Pink Silk Color Lehenga With &nbsp;embellishment of Moti, Gota, Zardosi, Pipe, Cutdana &amp; Mirror Work. It also Has Organza dupatta with same work &nbsp;enhancing, while Silk Unstitched Blouse With Same Work Gives Traditional Look.&nbsp;</p>', '1708510827G3.jpg', 0, 0, 0, '4', '8', NULL, NULL, NULL, NULL, '2024-02-21 10:20:28', '2024-02-21 10:23:29'),
(108, 17, 35, 60, 'Baby Pink , Butter Silk Lehenga With Dupatta & Blouse', '-baby-pink-butter-silk-lehenga-with-dupatta-blouse', 0, 0, 0, '023G0022001', 'Designer Lehenga+006', 'Silk Lehnga With Organza Dupatta & Blouse.', 9, NULL, 2, '<p>The embellishment of Cutdana , Moti , Resham , Sequin , &amp; Sippy &nbsp;work with Baby pink color adds a touch of opulence to the lehenga while wearing it . It has also Readymade blouse attached to it &nbsp;having V neck from front and V neck at back of Raw silk and same color embraced on it , Not only this but it also has Dupatta containing with it of same work and color .&nbsp;</p>', '1708511571H2.jpg', 0, 0, 0, '4', '8', NULL, NULL, NULL, NULL, '2024-02-21 10:32:52', '2024-02-21 10:36:31'),
(109, 18, 37, 69, 'Maroon Color , Raw Silk , Aline Pattern  bottom .', 'maroon-color-raw-silk-aline-pattern-bottom-', 0, 0, 0, '03480005001', 'Suit\'s+001', 'Raw Silk Kameez, with Organza  dupatta , with Aline Bottom .', 3, NULL, 2, '<p>The Kameez is embellished with Resham , Moti , sequin work on it having maroon color on it . it also has pure organza dupatta with work at border.</p>', '1708512954510A7569.jpg', 0, 0, 0, '4', '8', NULL, NULL, NULL, NULL, '2024-02-21 10:55:55', '2024-02-21 11:35:13'),
(110, 18, 37, 69, 'Dark Red, Soft Organza Dhoti Short Kurta Set', 'dark-red-soft-organza-dhoti-short-kurta-set-', 0, 0, 0, '03480006001', 'Suit\'s+002', 'Soft Organza  kameez With Soft Silk Bottom.', 3, NULL, 2, '<p>Embellishment Of Sequin On Kameez having Stand Collar with Dark Red Color Gives A Formal Look , While The Bottom Of Dhoti Have Soft Silk Fabric With Plane Design adds A touch Of opulence.&nbsp;</p>', '1708513598510A7597.jpg', 0, 0, 0, '4', '3', NULL, NULL, NULL, NULL, '2024-02-21 11:06:39', '2024-02-21 11:07:57'),
(111, 18, 37, 71, 'Lite Pink, Georgette Skirt  With Blouse & Dupatta.', 'lite-pink-georgette-skirt-with-blouse-dupatta-', 0, 0, 0, '02T00003001', 'Crop Top skirt+004', 'Georgette  Skirt With Net Blouse  & Net Dupatta.', 3, NULL, 2, '<p>The skirt is embellished with sequin work embracing light pink color on it. IT consist of off sleeves blouse with net having Moti &amp; sequin work on it , while the net dupatta has lase at border.&nbsp;</p>', '1708514202F4.jpg', 0, 0, 0, '13', '8', NULL, NULL, NULL, NULL, '2024-02-21 11:16:43', '2024-02-21 11:17:24'),
(112, 18, 37, 71, 'Raw Silk, Pink Color Blouse With Organza Jacket & Skirt.', 'raw-silk-pink-color-blouse-with-organza-jacket-skirt-', 0, 0, 0, '02SO0008001', 'Crop Top skirt+005', 'Rani Color Skirt With  Organza Jacket & Blouse.', 3, NULL, 2, '<p>The aesthetic skirt embracing rani color on it with plain work gives more opulence to it while wearing . It consist of blouse having Zardosi &amp; Resham work on it ,while it is off sleeves. IT also includes organza Jacket with same work captivating your mind and soul.</p>', '1708514833J2.jpg', 0, 0, 0, '4', '8', NULL, NULL, NULL, NULL, '2024-02-21 11:27:13', '2024-02-21 11:33:20'),
(113, 18, 37, 70, 'Purple, Crush Silk Gown', 'purple-crush-silk-gown', 0, 0, 0, '02SN0007001', 'Gowns+002', 'Fancy Gown With Purple Color.', 3, NULL, 2, '<p>The gown is designed with Zardosi, Moti &amp; Resham work enhancing the color and feel of it.</p>', '1708515749G2.jpg', 0, 0, 0, '19', '9', NULL, NULL, NULL, NULL, '2024-02-21 11:42:29', '2024-02-21 11:46:08'),
(114, 18, 37, 68, 'Black Top, Bottom Silk White', 'black-top-bottom-silk-white-', 0, 0, 0, '02S00002001', 'Suit\'s+003', 'Black Designer Top, Silk White Bottom.', 3, NULL, 2, NULL, '1708595898R2-03.webp', 0, 0, 0, '6', '7', NULL, NULL, NULL, NULL, '2024-02-21 12:01:36', '2024-02-22 09:58:18'),
(115, 18, 37, 69, 'Black Silk  Kameez,  A Line Bottom With Dupatta.', 'black-silk-kameez-a-line-bottom-with-dupatta-', 0, 0, 0, '01UC00K1001', 'Suit\'s+004', 'Black  Kameez  With Resham & Gota work,  A Line Bottom With Silk Dupatta.', 3, NULL, 2, NULL, '1708517356510A7820.jpg', 0, 0, 0, '4', '9', NULL, NULL, NULL, NULL, '2024-02-21 12:09:17', '2024-02-22 09:18:39'),
(116, 18, 37, 69, 'Multicolor Silk Kameez With  Bottom & Dupatta', 'multicolor-silk-kameez-with-bottom-dupatta', 0, 0, 0, '034E0001001', 'Suit\'s+005', 'Printed Kameez, With bottom & chiffon  Dupatta having Gota work .', 3, NULL, 2, '<p>The kameez is embellished with Zari and Gota work on it ,while it has chiffon dupatta and printed bottom .</p>', '1708517945510A7900.jpg', 0, 0, 0, '4', '5', NULL, NULL, NULL, NULL, '2024-02-21 12:19:06', '2024-02-22 09:53:25');

-- --------------------------------------------------------

--
-- Table structure for table `product_attribute`
--

CREATE TABLE `product_attribute` (
  `id` int NOT NULL,
  `pid` int DEFAULT NULL,
  `size_id` int DEFAULT NULL,
  `price` int DEFAULT NULL,
  `colour_id` int DEFAULT NULL,
  `qty` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_attribute`
--

INSERT INTO `product_attribute` (`id`, `pid`, `size_id`, `price`, `colour_id`, `qty`) VALUES
(2, 2, 2, 200, 3, 20),
(3, 2, 4, 300, 4, 30),
(4, 3, 2, 78, 3, 2),
(5, 4, 8, 9000, 12, 4),
(7, 5, 2, 1500, 2, 1),
(8, 6, 3, 300, 3, 5),
(9, 6, 4, 350, 3, 5),
(10, 7, 2, 1500, 2, 1),
(11, 8, 2, 1500, 2, 1),
(12, 9, 3, 1500, 2, 1),
(13, 11, 2, 1500, 2, 1),
(14, 12, 2, 1500, 2, 1),
(15, 13, 2, 1500, 2, 1),
(16, 14, 2, 1500, 3, 1),
(17, 14, 2, 1500, 2, 1),
(18, 15, 2, 1500, 2, 1),
(19, 15, 3, 1500, 3, 10),
(20, 16, 2, 1500, 2, 1),
(21, 18, 2, 2000, 2, 75),
(22, 18, 3, 1500, 3, 75),
(23, 18, 4, 1000, 4, 75),
(24, 19, 22, 12200, 29, 10),
(28, 21, 19, 940, 4, 74),
(29, 21, 20, 500, 3, 74),
(30, 22, 19, 850, 8, 68),
(31, 22, 20, 940, 9, 75),
(34, 25, 2, 400, 2, 10),
(35, 25, 3, 300, 2, 10),
(36, 25, 4, 350, 2, 10),
(37, 26, 2, 500, 2, 10),
(38, 26, 3, 400, 2, 10),
(39, 26, 2, 550, 3, 10),
(40, 21, 7, 600, 13, 20),
(41, 28, 7, 1000, 2, 1),
(42, 28, 8, 1000, 2, 1),
(43, 28, 9, 1000, 2, 1),
(44, 28, 10, 1000, 2, 1),
(45, 28, 11, 1000, 2, 1),
(47, 29, 7, 8000, 2, 7),
(48, 30, 9, 1500, 8, 12),
(49, 31, 10, 1000, 11, 15),
(50, 32, 11, 700, 14, 8),
(51, 33, 8, 500, 6, 9),
(52, 34, 10, 16595, 23, 10),
(53, 35, 2, 500, 2, 10),
(54, 36, 8, 1200, 10, 12),
(55, 37, 10, 1700, 14, 14),
(56, 38, 3, 1900, 9, 8),
(57, 39, 8, 10000, 12, 5),
(58, 40, 10, 14000, 11, 9),
(59, 29, 8, 8500, 6, 10),
(60, 41, 11, 9500, 13, 6),
(61, 42, 10, 14000, 14, 15),
(62, 40, 9, 12000, 7, 12),
(63, 40, 11, 15000, 12, 5),
(64, 43, 10, 8595, 15, 10),
(65, 44, 10, 9595, 14, 10),
(66, 45, 9, 8000, 6, 12),
(67, 46, 8, 6000, 13, 10),
(68, 46, 9, 6500, 11, 10),
(69, 47, 22, 20400, 30, 8),
(70, 48, 12, 24500, 41, 10),
(71, 49, 12, 41300, 30, 10),
(72, 50, 8, 15000, 11, 5),
(73, 51, 9, 2400, 11, 12),
(74, 52, 22, 6565, 7, 8),
(75, 53, 12, 6740, 37, 10),
(76, 54, 8, 4500, 2, 6),
(77, 34, 21, 16595, 23, 10),
(81, 43, 21, 8595, 15, 10),
(82, 43, 11, 8595, 15, 10),
(83, 43, 12, 8595, 15, 10),
(84, 20, 9, 3500, 9, 10),
(85, 52, 22, 6000, 9, 21),
(86, 27, 7, 11200, 7, 8),
(87, 55, 22, 12400, 8, 10),
(88, 56, 22, 11200, 11, 10),
(90, 50, 10, 10000, 13, 3),
(91, 44, 21, 9595, 14, 10),
(92, 44, 11, 9595, 14, 10),
(93, 44, 12, 9595, 14, 10),
(94, 44, 13, 9595, 14, 10),
(95, 44, 14, 9595, 14, 10),
(96, 43, 13, 8595, 15, 10),
(97, 43, 14, 8595, 15, 10),
(98, 57, 10, 11595, 6, 10),
(99, 57, 21, 11595, 6, 10),
(100, 57, 11, 11595, 6, 10),
(101, 57, 12, 11595, 6, 10),
(102, 57, 13, 11595, 6, 10),
(104, 58, 10, 14595, 6, 10),
(105, 58, 21, 14595, 6, 10),
(106, 58, 11, 14595, 6, 10),
(107, 58, 12, 14595, 6, 10),
(108, 58, 13, 14595, 6, 10),
(109, 58, 14, 14595, 6, 10),
(110, 59, 10, 18595, 15, 8),
(111, 59, 21, 18595, 15, 10),
(112, 59, 11, 18595, 15, 10),
(113, 59, 12, 18595, 15, 10),
(114, 59, 13, 18595, 15, 10),
(115, 59, 14, 18595, 15, 10),
(116, 60, 10, 10595, 21, 9),
(117, 60, 21, 10595, 21, 10),
(118, 60, 11, 10595, 21, 10),
(119, 60, 12, 10595, 21, 10),
(120, 60, 13, 10595, 21, 10),
(121, 60, 14, 10595, 21, 10),
(122, 61, 10, 11595, 15, 0),
(123, 61, 21, 11595, 0, 0),
(124, 61, 11, 11595, 0, 0),
(125, 61, 12, 11595, 0, 0),
(126, 61, 13, 11595, 0, 0),
(127, 61, 14, 11595, 0, 0),
(128, 62, 10, 10595, 11, 10),
(129, 62, 21, 10595, 11, 10),
(130, 62, 11, 10595, 11, 10),
(131, 62, 12, 10595, 11, 10),
(132, 62, 13, 10595, 11, 10),
(133, 62, 14, 10595, 11, 10),
(134, 63, 10, 17595, 23, 10),
(135, 63, 21, 17595, 23, 10),
(136, 63, 11, 17595, 23, 10),
(137, 63, 12, 17595, 23, 10),
(138, 63, 13, 17595, 23, 10),
(139, 63, 14, 17595, 23, 10),
(140, 64, 10, 16595, 23, 10),
(141, 64, 21, 16595, 23, 10),
(142, 64, 11, 16595, 23, 10),
(143, 64, 12, 16595, 23, 10),
(144, 64, 13, 16595, 23, 10),
(145, 64, 14, 16595, 23, 10),
(146, 34, 11, 16595, 23, 10),
(147, 34, 12, 16595, 23, 10),
(148, 34, 13, 16595, 23, 10),
(149, 34, 14, 16595, 23, 10),
(150, 65, 10, 12595, 23, 10),
(151, 65, 21, 12595, 23, 10),
(152, 65, 11, 12595, 23, 10),
(153, 65, 12, 12595, 23, 10),
(154, 65, 13, 12595, 23, 10),
(155, 65, 14, 12595, 23, 10),
(156, 57, 14, 11595, 6, 10),
(157, 66, 22, 12000, 13, 10),
(158, 67, 22, 20900, 7, 10),
(159, 68, 22, 19500, 30, 10),
(160, 69, 22, 20100, 26, 10),
(161, 70, 22, 13600, 27, 10),
(162, 71, 22, 21100, 13, 10),
(163, 72, 22, 21700, 29, 10),
(164, 73, 22, 12000, 29, 10),
(165, 74, 22, 15300, 11, 10),
(166, 75, 22, 29500, 31, 10),
(167, 76, 22, 35500, 7, 10),
(168, 77, 22, 39100, 7, 10),
(169, 78, 22, 26400, 8, 10),
(170, 79, 22, 15200, 32, 10),
(171, 80, 22, 28000, 33, 10),
(172, 81, 22, 28000, 34, 10),
(173, 82, 22, 35150, 35, 10),
(174, 83, 22, 23200, 6, 10),
(176, 84, 11, 6950, 35, 10),
(179, 85, 22, 41000, 38, 10),
(180, 86, 13, 8500, 39, 10),
(181, 87, 12, 7395, 13, 10),
(182, 88, 12, 8000, 40, 10),
(183, 89, 22, 35300, 42, 10),
(184, 90, 22, 13100, 43, 10),
(185, 91, 22, 14000, 22, 10),
(186, 92, 22, 34900, 32, 10),
(187, 93, 22, 12400, 45, 10),
(188, 94, 22, 14800, 46, 10),
(189, 95, 22, 7750, 47, 10),
(190, 96, 22, 20760, 48, 10),
(191, 97, 22, 10800, 49, 10),
(192, 98, 22, 16900, 50, 10),
(193, 99, 22, 15500, 23, 10),
(194, 100, 22, 13100, 51, 10),
(195, 101, 22, 29400, 30, 10),
(196, 102, 22, 18200, 30, 10),
(197, 103, 22, 53500, 14, 10),
(198, 104, 22, 16100, 52, 0),
(199, 105, 22, 15000, 53, 10),
(200, 106, 22, 13200, 54, 10),
(201, 107, 22, 12400, 55, 10),
(202, 108, 22, 24500, 13, 10),
(203, 109, 12, 12000, 20, 0),
(204, 110, 12, 10300, 7, 10),
(205, 111, 12, 15750, 56, 0),
(206, 112, 12, 26400, 13, 10),
(207, 113, 12, 23100, 14, 10),
(208, 114, 12, 15750, 11, 10),
(212, 116, 11, 200, 16, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` int NOT NULL,
  `pid` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `baseimage` int NOT NULL,
  `baseimageHover` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`id`, `pid`, `image`, `baseimage`, `baseimageHover`, `created_at`, `updated_at`) VALUES
(10, 6, '16951214254.webp', 0, 1, '2023-09-19 11:03:45', '2023-09-19 11:03:45'),
(11, 6, '1695121425F4.jpg', 1, 0, '2023-09-19 11:03:45', '2023-09-19 11:03:45'),
(17, 21, '1695463322-20043084-01.jpg', 1, 0, '2023-09-23 10:02:02', '2023-09-23 10:02:02'),
(18, 21, '1695463327-20043084-02.jpg', 0, 1, '2023-09-23 10:02:07', '2023-09-23 10:02:07'),
(19, 20, '1695463364-20058041-01.jpg', 1, 0, '2023-09-23 10:02:44', '2023-09-23 10:02:44'),
(20, 20, '1695463368-20058041-02.jpg', 0, 1, '2023-09-23 10:02:49', '2023-09-23 10:02:49'),
(21, 22, '1695463565-10717734-1.jpg', 0, 1, '2023-09-23 10:06:05', '2023-09-23 10:06:05'),
(22, 22, '1695463569-10717734-3.jpg', 0, 0, '2023-09-23 10:06:09', '2023-09-23 10:06:09'),
(25, 18, '1697023433-[GetPaidStock.com]-652684239b4a4.jpg', 1, 0, '2023-10-11 11:23:54', '2023-10-11 11:23:54'),
(26, 18, '1697023927-Mask-group-(2).jpg', 0, 1, '2023-10-11 11:32:07', '2023-10-11 11:32:07'),
(29, 25, '1697103750-Mask-group-(5).jpg', 0, 0, '2023-10-12 09:42:30', '2023-10-12 09:42:30'),
(30, 25, '1697103978-Mask-group-(6).jpg', 0, 0, '2023-10-12 09:46:18', '2023-10-12 09:46:18'),
(34, 28, '1697105874-8d95e6d8-e38c-4acf-8467-f8cb43ec3ca61692014199517-Levis-Men-Jeans-3681692014198901-2.jpeg', 0, 0, '2023-10-12 10:17:55', '2023-10-12 10:17:55'),
(35, 28, '1698319861-jens-1.jpg', 1, 0, '2023-10-26 11:31:01', '2023-10-26 11:31:01'),
(36, 28, '1698320140-jens-2.jpg', 0, 1, '2023-10-26 11:35:40', '2023-10-26 11:35:40'),
(37, 28, '1698320221-jens-1.jpg', 0, 0, '2023-10-26 11:37:01', '2023-10-26 11:37:01'),
(40, 25, '1698321379-boy-1.jpg', 1, 0, '2023-10-26 11:56:21', '2023-10-26 11:56:21'),
(41, 25, '1698321431-boy-2.jpg', 0, 1, '2023-10-26 11:57:15', '2023-10-26 11:57:15'),
(44, 22, '1698322919-kid-girl-01.jpg', 1, 0, '2023-10-26 12:22:01', '2023-10-26 12:22:01'),
(45, 22, '1698322931-kid-girl-02.jpg', 0, 0, '2023-10-26 12:22:14', '2023-10-26 12:22:14'),
(53, 26, '1698406597-camera-2-(2).jpg', 0, 1, '2023-10-27 11:36:41', '2023-10-27 11:36:41'),
(56, 18, '1698413064-IMG_0208.JPG', 0, 0, '2023-10-27 13:24:27', '2023-10-27 13:24:27'),
(60, 30, '1698474850-formal.jpeg', 1, 0, '2023-10-28 06:34:10', '2023-10-28 06:34:10'),
(61, 30, '1698474881-men-t-2.jpg', 0, 1, '2023-10-28 06:34:45', '2023-10-28 06:34:45'),
(62, 30, '1698474997-men-t-1.jpg', 0, 0, '2023-10-28 06:36:40', '2023-10-28 06:36:40'),
(63, 31, '1698557475-formal.jpeg', 1, 0, '2023-10-29 05:31:15', '2023-10-29 05:31:15'),
(64, 31, '1698557491-IMG_0246.JPG', 0, 1, '2023-10-29 05:31:34', '2023-10-29 05:31:34'),
(70, 33, '1698667311-IMG_0246.JPG', 1, 0, '2023-10-30 12:01:54', '2023-10-30 12:01:54'),
(71, 33, '1698667329-IMG_0241.JPG', 0, 1, '2023-10-30 12:02:12', '2023-10-30 12:02:12'),
(74, 36, '1698734504-s1.jpg', 1, 0, '2023-10-31 06:41:44', '2023-10-31 06:41:44'),
(75, 36, '1698734516-wed-1.jpg', 0, 1, '2023-10-31 06:42:00', '2023-10-31 06:42:00'),
(76, 35, '1698734580-camera-2-(1).jpg', 1, 0, '2023-10-31 06:43:04', '2023-10-31 06:43:04'),
(77, 35, '1698734595-camera-2-(2).jpg', 0, 1, '2023-10-31 06:43:18', '2023-10-31 06:43:18'),
(78, 32, '1698734844-s1.jpg', 1, 0, '2023-10-31 06:47:24', '2023-10-31 06:47:24'),
(79, 32, '1698734859-w-Ethical-1.jpg', 0, 1, '2023-10-31 06:47:39', '2023-10-31 06:47:39'),
(80, 37, '1698750137-IMG_0241.JPG', 1, 0, '2023-10-31 11:02:20', '2023-10-31 11:02:20'),
(81, 37, '1698750148-formal.jpeg', 0, 1, '2023-10-31 11:02:28', '2023-10-31 11:02:28'),
(82, 38, '1698750350-IMG_0246.JPG', 0, 0, '2023-10-31 11:05:53', '2023-10-31 11:05:53'),
(83, 38, '1698750370-men-t-1.jpg', 1, 1, '2023-10-31 11:06:14', '2023-10-31 11:06:14'),
(94, 41, '1699078819-saree-edit-01.jpg', 1, 0, '2023-11-04 06:20:19', '2023-11-04 06:20:19'),
(95, 41, '1699078928-saree-edit-1.jpg', 0, 1, '2023-11-04 06:22:09', '2023-11-04 06:22:09'),
(100, 39, '1700646992-weding-sherwani-2.jpg', 1, 0, '2023-11-22 09:56:35', '2023-11-22 09:56:35'),
(103, 40, '1700656224-weding-sherwani-2.jpg', 1, 1, '2023-11-22 12:30:27', '2023-11-22 12:30:27'),
(111, 29, '1700735102-suit-edit-03.jpg', 1, 0, '2023-11-23 10:25:02', '2023-11-23 10:25:02'),
(114, 4, '1701061786-weding-sherwani-2.jpg', 1, 0, '2023-11-27 05:09:49', '2023-11-27 05:09:49'),
(115, 46, '1701064611-modi-jacket.jpg', 1, 0, '2023-11-27 05:56:52', '2023-11-27 05:56:52'),
(121, 51, '1701087331-LLLLLLL.jpg', 1, 0, '2023-11-27 12:15:31', '2023-11-27 12:15:31'),
(126, 54, '1701253187-boy-1.jpg', 1, 0, '2023-11-29 10:19:49', '2023-11-29 10:19:49'),
(127, 27, '1701262280-00000111.jpg', 1, 0, '2023-11-29 12:51:20', '2023-11-29 12:51:20'),
(128, 50, '1701262446-suit-edit-01.jpg', 1, 0, '2023-11-29 12:54:06', '2023-11-29 12:54:06'),
(134, 45, '1702027372-shrwani-img-01.jpg', 1, 0, '2023-12-08 09:22:56', '2023-12-08 09:22:56'),
(135, 52, '1702027858-saree-edit-3.jpg', 1, 0, '2023-12-08 09:31:02', '2023-12-08 09:31:02'),
(136, 52, '1702027873-saree-edit-02.jpg', 0, 1, '2023-12-08 09:31:17', '2023-12-08 09:31:17'),
(137, 52, '1702027930-saree-edit-1.jpg', 0, 0, '2023-12-08 09:32:10', '2023-12-08 09:32:10'),
(138, 52, '1702027943-saree-edit-01.jpg', 0, 0, '2023-12-08 09:32:23', '2023-12-08 09:32:23'),
(144, 44, '1704269455-JP52906-1.jpg', 0, 1, '2024-01-03 08:11:01', '2024-01-03 08:11:01'),
(145, 44, '1704269516-JP52906.jpg', 1, 0, '2024-01-03 08:12:02', '2024-01-03 08:12:02'),
(148, 43, '1704275523-JP52951.jpg', 1, 0, '2024-01-03 09:52:09', '2024-01-03 09:52:09'),
(149, 43, '1704275557-JP52953.jpg', 0, 1, '2024-01-03 09:52:43', '2024-01-03 09:52:43'),
(150, 34, '1704278385-BN41267.jpg', 1, 0, '2024-01-03 10:39:51', '2024-01-03 10:39:51'),
(151, 34, '1704278411-BN41275.jpg', 0, 1, '2024-01-03 10:40:17', '2024-01-03 10:40:17'),
(152, 57, '1704279865-JP52974.jpg', 1, 0, '2024-01-03 11:04:31', '2024-01-03 11:04:31'),
(153, 58, '1704280630-BN41322.jpg', 1, 0, '2024-01-03 11:17:17', '2024-01-03 11:17:17'),
(154, 58, '1704280656-BN71159.jpg', 0, 1, '2024-01-03 11:17:42', '2024-01-03 11:17:42'),
(155, 59, '1704281703-BN41194.jpg', 1, 0, '2024-01-03 11:35:09', '2024-01-03 11:35:09'),
(156, 60, '1704282415-BN41217.jpg', 1, 0, '2024-01-03 11:47:01', '2024-01-03 11:47:01'),
(157, 61, '1704283584-BN41360.jpg', 1, 0, '2024-01-03 12:06:30', '2024-01-03 12:06:30'),
(158, 58, '1704372624-BN41322-edit.jpg', 0, 0, '2024-01-04 12:50:24', '2024-01-04 12:50:24'),
(160, 58, '1704373400-BN71159edit02.jpg', 0, 0, '2024-01-04 13:03:20', '2024-01-04 13:03:20'),
(161, 59, '1704432905-BN41194+.jpg', 0, 0, '2024-01-05 05:35:05', '2024-01-05 05:35:05'),
(162, 59, '1704432919-BN41194++.jpg', 0, 1, '2024-01-05 05:35:19', '2024-01-05 05:35:19'),
(163, 60, '1704433380-BN41217++.jpg', 0, 1, '2024-01-05 05:43:00', '2024-01-05 05:43:00'),
(164, 60, '1704433389-BN41217+.jpg', 0, 0, '2024-01-05 05:43:09', '2024-01-05 05:43:09'),
(165, 34, '1704436344-BN41267+.jpg', 0, 0, '2024-01-05 06:32:25', '2024-01-05 06:32:25'),
(166, 34, '1704436353-BN41267++.jpg', 0, 0, '2024-01-05 06:32:33', '2024-01-05 06:32:33'),
(167, 61, '1704436726-BN41360++.jpg', 0, 1, '2024-01-05 06:38:47', '2024-01-05 06:38:47'),
(168, 61, '1704436734-BN41360+.jpg', 0, 0, '2024-01-05 06:38:54', '2024-01-05 06:38:54'),
(169, 61, '1704436743-BN41360+++.jpg', 0, 0, '2024-01-05 06:39:03', '2024-01-05 06:39:03'),
(170, 62, '1704437752-BN71361.jpg', 1, 0, '2024-01-05 06:55:58', '2024-01-05 06:55:58'),
(171, 62, '1704437777-BN71361+.jpg', 0, 1, '2024-01-05 06:56:17', '2024-01-05 06:56:17'),
(172, 62, '1704437785-BN71361++.jpg', 0, 0, '2024-01-05 06:56:25', '2024-01-05 06:56:25'),
(173, 63, '1704439264-BN71380.jpg', 1, 0, '2024-01-05 07:21:11', '2024-01-05 07:21:11'),
(174, 63, '1704439486-BN71380+.jpg', 0, 0, '2024-01-05 07:24:47', '2024-01-05 07:24:47'),
(175, 63, '1704439495-BN71380++.jpg', 0, 1, '2024-01-05 07:24:55', '2024-01-05 07:24:55'),
(176, 64, '1704447086-BN71435.jpg', 1, 0, '2024-01-05 09:31:32', '2024-01-05 09:31:32'),
(177, 64, '1704447328-BN71435+.jpg', 0, 0, '2024-01-05 09:35:29', '2024-01-05 09:35:29'),
(178, 64, '1704447411-BN71435++.jpg', 0, 1, '2024-01-05 09:36:51', '2024-01-05 09:36:51'),
(179, 65, '1704461617-BN71515.jpg', 1, 0, '2024-01-05 13:33:44', '2024-01-05 13:33:44'),
(180, 65, '1704461764-BN71515+.jpg', 0, 0, '2024-01-05 13:36:04', '2024-01-05 13:36:04'),
(181, 65, '1704461773-BN71515++.jpg', 0, 1, '2024-01-05 13:36:14', '2024-01-05 13:36:14'),
(182, 57, '1704525631-JP52974+.jpg', 0, 1, '2024-01-06 07:20:31', '2024-01-06 07:20:31'),
(183, 57, '1704525639-JP52974++.jpg', 0, 0, '2024-01-06 07:20:39', '2024-01-06 07:20:39'),
(184, 44, '1704525936-JP52906-1++.jpg', 0, 0, '2024-01-06 07:25:36', '2024-01-06 07:25:36'),
(185, 44, '1704525949-JP52906+.jpg', 0, 0, '2024-01-06 07:25:49', '2024-01-06 07:25:49'),
(186, 43, '1704526179-JP52953++.jpg', 0, 0, '2024-01-06 07:29:39', '2024-01-06 07:29:39'),
(187, 43, '1704526189-JP52951+.jpg', 0, 0, '2024-01-06 07:29:49', '2024-01-06 07:29:49'),
(189, 26, '1705584205-ps-edit--111.jpg', 0, 0, '2024-01-18 13:23:29', '2024-01-18 13:23:29'),
(190, 26, '1705584323-1705558680634.jpg', 1, 0, '2024-01-18 13:25:32', '2024-01-18 13:25:32'),
(219, 67, '1708149397-b1.jpg', 1, 0, '2024-02-17 05:56:42', '2024-02-17 05:56:42'),
(220, 67, '1708149411-b2.jpg', 0, 1, '2024-02-17 05:56:56', '2024-02-17 05:56:56'),
(221, 67, '1708149421-A3.jpg', 0, 0, '2024-02-17 05:57:01', '2024-02-17 05:57:01'),
(236, 72, '1708164371-BAR--01M4000S001.jpg', 0, 1, '2024-02-17 10:06:16', '2024-02-17 10:06:16'),
(254, 56, '1708170854-F1.jpg', 1, 0, '2024-02-17 11:54:18', '2024-02-17 11:54:18'),
(255, 72, '1708234346-Crimson-Red-Banarasi-Khadi-Silk-Saree-(blouse-img).jpg', 0, 0, '2024-02-18 05:32:26', '2024-02-18 05:32:26'),
(288, 80, '1708242851-K1.webp', 1, 0, '2024-02-18 07:54:18', '2024-02-18 07:54:18'),
(289, 80, '1708242869-K2.webp', 0, 1, '2024-02-18 07:54:39', '2024-02-18 07:54:39'),
(290, 80, '1708242889-K3.webp', 0, 0, '2024-02-18 07:54:56', '2024-02-18 07:54:56'),
(291, 80, '1708242908-K4.webp', 0, 0, '2024-02-18 07:55:14', '2024-02-18 07:55:14'),
(296, 82, '1708248627-M1.webp', 1, 0, '2024-02-18 09:30:34', '2024-02-18 09:30:34'),
(297, 82, '1708248634-M2.webp', 0, 1, '2024-02-18 09:30:43', '2024-02-18 09:30:43'),
(298, 82, '1708248643-M3.webp', 0, 0, '2024-02-18 09:30:51', '2024-02-18 09:30:51'),
(299, 82, '1708248651-M4.webp', 0, 0, '2024-02-18 09:31:00', '2024-02-18 09:31:00'),
(304, 69, '1708261447-Pale-Orange-Silk-Banarasi-Saree.jpg', 0, 0, '2024-02-18 13:04:07', '2024-02-18 13:04:07'),
(305, 74, '1708319460-IMG_1003.JPG', 0, 0, '2024-02-19 05:11:03', '2024-02-19 05:11:03'),
(306, 84, '1708323725-A1_2.webp', 1, 0, '2024-02-19 06:22:12', '2024-02-19 06:22:12'),
(307, 84, '1708323732-A2.webp', 0, 1, '2024-02-19 06:22:21', '2024-02-19 06:22:21'),
(308, 84, '1708323741-A3.webp', 0, 0, '2024-02-19 06:22:29', '2024-02-19 06:22:29'),
(309, 84, '1708323749-A4.webp', 0, 0, '2024-02-19 06:22:36', '2024-02-19 06:22:36'),
(310, 53, '1708325024-B1.webp', 1, 0, '2024-02-19 06:43:50', '2024-02-19 06:43:50'),
(311, 53, '1708325042-B2.webp', 0, 1, '2024-02-19 06:44:09', '2024-02-19 06:44:09'),
(312, 53, '1708325049-B3.webp', 0, 0, '2024-02-19 06:44:16', '2024-02-19 06:44:16'),
(313, 53, '1708325056-B4.webp', 0, 0, '2024-02-19 06:44:22', '2024-02-19 06:44:22'),
(318, 86, '1708328761-D1.webp', 0, 0, '2024-02-19 07:46:07', '2024-02-19 07:46:07'),
(319, 86, '1708328767-D2.webp', 0, 1, '2024-02-19 07:46:13', '2024-02-19 07:46:13'),
(320, 86, '1708328773-D3.webp', 1, 0, '2024-02-19 07:46:20', '2024-02-19 07:46:20'),
(321, 86, '1708328780-D4.webp', 0, 0, '2024-02-19 07:46:26', '2024-02-19 07:46:26'),
(322, 87, '1708329423-C1.webp', 0, 0, '2024-02-19 07:57:09', '2024-02-19 07:57:09'),
(323, 87, '1708329429-C2.webp', 0, 1, '2024-02-19 07:57:17', '2024-02-19 07:57:17'),
(324, 87, '1708329437-C3.webp', 0, 0, '2024-02-19 07:57:24', '2024-02-19 07:57:24'),
(325, 87, '1708329444-C4.webp', 1, 0, '2024-02-19 07:57:30', '2024-02-19 07:57:30'),
(326, 88, '1708330445-E1.webp', 1, 0, '2024-02-19 08:14:12', '2024-02-19 08:14:12'),
(327, 88, '1708330452-E2.webp', 0, 1, '2024-02-19 08:14:20', '2024-02-19 08:14:20'),
(328, 88, '1708330460-E3.webp', 0, 0, '2024-02-19 08:14:27', '2024-02-19 08:14:27'),
(329, 88, '1708330467-E4.webp', 0, 0, '2024-02-19 08:14:34', '2024-02-19 08:14:34'),
(330, 49, '1708335620-I1.webp', 1, 0, '2024-02-19 09:40:27', '2024-02-19 09:40:27'),
(331, 49, '1708335627-I2.webp', 0, 0, '2024-02-19 09:40:33', '2024-02-19 09:40:33'),
(332, 49, '1708335633-I3.webp', 0, 1, '2024-02-19 09:40:41', '2024-02-19 09:40:41'),
(333, 49, '1708335641-I4.webp', 0, 0, '2024-02-19 09:40:47', '2024-02-19 09:40:47'),
(334, 48, '1708336777-H1.webp', 1, 0, '2024-02-19 09:59:44', '2024-02-19 09:59:44'),
(335, 48, '1708336784-H2.webp', 0, 0, '2024-02-19 09:59:52', '2024-02-19 09:59:52'),
(336, 48, '1708336792-H3.webp', 0, 0, '2024-02-19 09:59:59', '2024-02-19 09:59:59'),
(337, 48, '1708336799-H4.webp', 0, 1, '2024-02-19 10:00:07', '2024-02-19 10:00:07'),
(338, 89, '1708337375-NB1.webp', 0, 0, '2024-02-19 10:09:43', '2024-02-19 10:09:43'),
(339, 89, '1708337383-NB2.webp', 0, 1, '2024-02-19 10:09:52', '2024-02-19 10:09:52'),
(340, 89, '1708337392-NB3.webp', 1, 0, '2024-02-19 10:09:59', '2024-02-19 10:09:59'),
(341, 90, '1708340042-K1.webp', 1, 0, '2024-02-19 10:54:09', '2024-02-19 10:54:09'),
(342, 90, '1708340049-K2.webp', 0, 1, '2024-02-19 10:54:17', '2024-02-19 10:54:17'),
(343, 90, '1708340057-K3.webp', 0, 0, '2024-02-19 10:54:24', '2024-02-19 10:54:24'),
(344, 90, '1708340064-K4.webp', 0, 0, '2024-02-19 10:54:31', '2024-02-19 10:54:31'),
(345, 47, '1708341251-L1.webp', 1, 0, '2024-02-19 11:14:18', '2024-02-19 11:14:18'),
(346, 47, '1708341258-L2.webp', 0, 1, '2024-02-19 11:14:26', '2024-02-19 11:14:26'),
(347, 47, '1708341266-L3.webp', 0, 0, '2024-02-19 11:14:34', '2024-02-19 11:14:34'),
(348, 47, '1708341274-L4.webp', 0, 0, '2024-02-19 11:14:41', '2024-02-19 11:14:41'),
(349, 55, '1708341580-N1.webp', 1, 0, '2024-02-19 11:19:46', '2024-02-19 11:19:46'),
(350, 55, '1708341586-N2.webp', 0, 1, '2024-02-19 11:19:54', '2024-02-19 11:19:54'),
(351, 55, '1708341594-N3.webp', 0, 0, '2024-02-19 11:20:00', '2024-02-19 11:20:00'),
(352, 91, '1708344868-ND1.webp', 0, 1, '2024-02-19 12:14:35', '2024-02-19 12:14:35'),
(353, 91, '1708344875-ND2.webp', 0, 0, '2024-02-19 12:14:42', '2024-02-19 12:14:42'),
(354, 91, '1708344882-ND3.webp', 1, 0, '2024-02-19 12:14:51', '2024-02-19 12:14:51'),
(355, 91, '1708344891-ND4.webp', 0, 0, '2024-02-19 12:14:58', '2024-02-19 12:14:58'),
(356, 92, '1708345242-NC1.webp', 1, 0, '2024-02-19 12:20:51', '2024-02-19 12:20:51'),
(357, 92, '1708345251-NC2.webp', 0, 1, '2024-02-19 12:20:58', '2024-02-19 12:20:58'),
(358, 92, '1708345258-NC3.webp', 0, 0, '2024-02-19 12:21:05', '2024-02-19 12:21:05'),
(359, 92, '1708348512-IMG_0980.JPG', 0, 0, '2024-02-19 13:15:14', '2024-02-19 13:15:14'),
(362, 85, '1708414932-NA2.webp', 0, 1, '2024-02-20 07:42:12', '2024-02-20 07:42:12'),
(363, 85, '1708414932-NA3.webp', 0, 0, '2024-02-20 07:42:12', '2024-02-20 07:42:12'),
(364, 85, '1708415157-NA1.webp', 1, 0, '2024-02-20 07:45:57', '2024-02-20 07:45:57'),
(381, 95, '1708423562-NE1.webp', 1, 0, '2024-02-20 10:06:02', '2024-02-20 10:06:02'),
(382, 95, '1708423562-NE2.webp', 0, 0, '2024-02-20 10:06:03', '2024-02-20 10:06:03'),
(383, 95, '1708423563-NE3.webp', 0, 1, '2024-02-20 10:06:03', '2024-02-20 10:06:03'),
(384, 95, '1708423563-NE4.webp', 0, 0, '2024-02-20 10:06:03', '2024-02-20 10:06:03'),
(389, 96, '1708426651-NM1.webp', 0, 1, '2024-02-20 10:57:31', '2024-02-20 10:57:31'),
(390, 96, '1708426651-NM2.webp', 0, 0, '2024-02-20 10:57:31', '2024-02-20 10:57:31'),
(391, 96, '1708426651-NM3.webp', 1, 0, '2024-02-20 10:57:32', '2024-02-20 10:57:32'),
(392, 97, '1708427492-NK1.webp', 1, 0, '2024-02-20 11:11:32', '2024-02-20 11:11:32'),
(393, 97, '1708427492-NK2.webp', 0, 0, '2024-02-20 11:11:32', '2024-02-20 11:11:32'),
(394, 97, '1708427492-NK3.webp', 0, 1, '2024-02-20 11:11:33', '2024-02-20 11:11:33'),
(395, 97, '1708427493-NK4.webp', 0, 0, '2024-02-20 11:11:33', '2024-02-20 11:11:33'),
(396, 98, '1708428155-NL1.webp', 1, 0, '2024-02-20 11:22:36', '2024-02-20 11:22:36'),
(397, 98, '1708428156-NL2.webp', 0, 0, '2024-02-20 11:22:36', '2024-02-20 11:22:36'),
(398, 98, '1708428156-NL3.webp', 0, 1, '2024-02-20 11:22:36', '2024-02-20 11:22:36'),
(399, 98, '1708428156-NL4.webp', 0, 0, '2024-02-20 11:22:36', '2024-02-20 11:22:36'),
(400, 99, '1708430610-NN1.webp', 1, 0, '2024-02-20 12:03:30', '2024-02-20 12:03:30'),
(401, 99, '1708430610-NN2.webp', 0, 0, '2024-02-20 12:03:30', '2024-02-20 12:03:30'),
(402, 99, '1708430610-NN3.webp', 0, 1, '2024-02-20 12:03:31', '2024-02-20 12:03:31'),
(403, 99, '1708430611-NN4.webp', 0, 0, '2024-02-20 12:03:31', '2024-02-20 12:03:31'),
(404, 100, '1708433210-NP1.webp', 0, 0, '2024-02-20 12:46:51', '2024-02-20 12:46:51'),
(405, 100, '1708433211-NP2.webp', 1, 0, '2024-02-20 12:46:51', '2024-02-20 12:46:51'),
(406, 100, '1708433211-NP3.webp', 0, 1, '2024-02-20 12:46:51', '2024-02-20 12:46:51'),
(407, 101, '1708494785-NQ1.webp', 0, 0, '2024-02-21 05:53:05', '2024-02-21 05:53:05'),
(408, 101, '1708494785-NQ2.webp', 0, 1, '2024-02-21 05:53:05', '2024-02-21 05:53:05'),
(409, 101, '1708494785-NQ3.webp', 1, 0, '2024-02-21 05:53:06', '2024-02-21 05:53:06'),
(417, 103, '1708503991-BAR--02WG000C001.jpg', 0, 0, '2024-02-21 08:26:35', '2024-02-21 08:26:35'),
(418, 103, '1708503995-I2.jpg', 0, 1, '2024-02-21 08:26:40', '2024-02-21 08:26:40'),
(419, 103, '1708504000-I4.jpg', 1, 0, '2024-02-21 08:26:44', '2024-02-21 08:26:44'),
(420, 103, '1708504004-rs-53500.jpg', 0, 0, '2024-02-21 08:26:48', '2024-02-21 08:26:48'),
(421, 104, '1708506426-E2.jpg', 0, 1, '2024-02-21 09:07:06', '2024-02-21 09:07:06'),
(422, 104, '1708506426-E3.jpg', 1, 0, '2024-02-21 09:07:10', '2024-02-21 09:07:10'),
(423, 104, '1708506430-E4.jpg', 0, 0, '2024-02-21 09:07:14', '2024-02-21 09:07:14'),
(424, 104, '1708506434-rs-16100.jpg', 0, 0, '2024-02-21 09:07:18', '2024-02-21 09:07:18'),
(425, 105, '1708509099-c2.jpg', 1, 0, '2024-02-21 09:51:43', '2024-02-21 09:51:43'),
(426, 105, '1708509103-c3.jpg', 0, 1, '2024-02-21 09:51:47', '2024-02-21 09:51:47'),
(427, 105, '1708509107-c4.jpg', 0, 0, '2024-02-21 09:51:51', '2024-02-21 09:51:51'),
(428, 105, '1708509111-c5.jpg', 0, 0, '2024-02-21 09:51:51', '2024-02-21 09:51:51'),
(429, 106, '1708509909-BAR--01R70035001.jpg', 1, 0, '2024-02-21 10:05:09', '2024-02-21 10:05:09'),
(430, 106, '1708509909-D3.jpg', 0, 1, '2024-02-21 10:05:13', '2024-02-21 10:05:13'),
(431, 106, '1708509913-D4.jpg', 0, 0, '2024-02-21 10:05:14', '2024-02-21 10:05:14'),
(432, 106, '1708509914-rs-13200.jpg', 0, 0, '2024-02-21 10:05:17', '2024-02-21 10:05:17'),
(433, 107, '1708510901-G4.jpg', 0, 0, '2024-02-21 10:21:41', '2024-02-21 10:21:41'),
(434, 107, '1708510901-rs-12400.jpg', 1, 0, '2024-02-21 10:21:45', '2024-02-21 10:21:45'),
(435, 107, '1708510905-BAR-035H000E001.jpg', 0, 0, '2024-02-21 10:21:49', '2024-02-21 10:21:49'),
(436, 107, '1708510909-G2.jpg', 0, 0, '2024-02-21 10:21:53', '2024-02-21 10:21:53'),
(437, 107, '1708510913-G3.jpg', 0, 1, '2024-02-21 10:21:57', '2024-02-21 10:21:57'),
(438, 108, '1708511625-023G0022001.jpg', 1, 0, '2024-02-21 10:33:49', '2024-02-21 10:33:49'),
(439, 108, '1708511629-H2.jpg', 0, 1, '2024-02-21 10:33:52', '2024-02-21 10:33:52'),
(440, 108, '1708511632-H4.jpg', 0, 0, '2024-02-21 10:33:56', '2024-02-21 10:33:56'),
(444, 110, '1708513617-510A7596.jpg', 1, 0, '2024-02-21 11:07:00', '2024-02-21 11:07:00'),
(445, 110, '1708513620-510A7597.jpg', 0, 1, '2024-02-21 11:07:05', '2024-02-21 11:07:05'),
(446, 111, '1708514269-F1.jpg', 0, 0, '2024-02-21 11:17:53', '2024-02-21 11:17:53'),
(447, 111, '1708514273-F2.jpg', 0, 0, '2024-02-21 11:17:56', '2024-02-21 11:17:56'),
(448, 111, '1708514276-F3.jpg', 0, 1, '2024-02-21 11:18:00', '2024-02-21 11:18:00'),
(449, 111, '1708514280-F4.jpg', 1, 0, '2024-02-21 11:18:04', '2024-02-21 11:18:04'),
(450, 112, '1708514862-J1.jpg', 1, 0, '2024-02-21 11:27:45', '2024-02-21 11:27:45'),
(451, 112, '1708514865-J2.jpg', 0, 0, '2024-02-21 11:27:49', '2024-02-21 11:27:49'),
(452, 112, '1708514869-J3.jpg', 0, 0, '2024-02-21 11:27:52', '2024-02-21 11:27:52'),
(453, 112, '1708514872-J4.jpg', 0, 1, '2024-02-21 11:27:56', '2024-02-21 11:27:56'),
(454, 113, '1708515905-G1.jpg', 1, 0, '2024-02-21 11:45:09', '2024-02-21 11:45:09'),
(455, 113, '1708515909-G2.jpg', 0, 0, '2024-02-21 11:45:13', '2024-02-21 11:45:13'),
(456, 113, '1708515913-G3.jpg', 0, 1, '2024-02-21 11:45:17', '2024-02-21 11:45:17'),
(457, 113, '1708515917-G4.jpg', 0, 0, '2024-02-21 11:45:21', '2024-02-21 11:45:21'),
(461, 115, '1708517376-510A7817.jpg', 1, 0, '2024-02-21 12:09:40', '2024-02-21 12:09:40'),
(462, 115, '1708517380-510A7818.jpg', 0, 1, '2024-02-21 12:09:44', '2024-02-21 12:09:44'),
(463, 115, '1708517384-510A7820.jpg', 0, 0, '2024-02-21 12:09:48', '2024-02-21 12:09:48'),
(464, 116, '1708517969-510A7900.jpg', 1, 0, '2024-02-21 12:19:33', '2024-02-21 12:19:33'),
(465, 116, '1708517973-510A7902.jpg', 0, 1, '2024-02-21 12:19:37', '2024-02-21 12:19:37'),
(466, 116, '1708517977-510A7904.jpg', 0, 0, '2024-02-21 12:19:41', '2024-02-21 12:19:41'),
(467, 102, '1708578960-NR1.webp', 1, 0, '2024-02-22 05:16:01', '2024-02-22 05:16:01'),
(468, 102, '1708578961-NR2.webp', 0, 0, '2024-02-22 05:16:01', '2024-02-22 05:16:01'),
(469, 102, '1708578961-NR3.webp', 0, 1, '2024-02-22 05:16:02', '2024-02-22 05:16:02'),
(470, 102, '1708578962-NR4.webp', 0, 0, '2024-02-22 05:16:02', '2024-02-22 05:16:02'),
(471, 83, '1708579185-O1.webp', 1, 0, '2024-02-22 05:19:46', '2024-02-22 05:19:46'),
(472, 83, '1708579186-O2.webp', 0, 1, '2024-02-22 05:19:47', '2024-02-22 05:19:47'),
(473, 83, '1708579187-O3.webp', 0, 0, '2024-02-22 05:19:48', '2024-02-22 05:19:48'),
(474, 83, '1708579188-O4.webp', 0, 0, '2024-02-22 05:19:49', '2024-02-22 05:19:49'),
(475, 72, '1708579820-c3.webp', 0, 0, '2024-02-22 05:30:21', '2024-02-22 05:30:21'),
(476, 72, '1708579821-c4.webp', 1, 0, '2024-02-22 05:30:22', '2024-02-22 05:30:22'),
(478, 72, '1708579823-c5.webp', 0, 0, '2024-02-22 05:30:24', '2024-02-22 05:30:24'),
(479, 71, '1708580179-b3.webp', 0, 0, '2024-02-22 05:36:20', '2024-02-22 05:36:20'),
(480, 71, '1708580180-b4.webp', 1, 0, '2024-02-22 05:36:21', '2024-02-22 05:36:21'),
(481, 71, '1708580181-BAR--01GA008C001.webp', 0, 1, '2024-02-22 05:36:22', '2024-02-22 05:36:22'),
(482, 70, '1708580336-AAA3.webp', 0, 0, '2024-02-22 05:38:57', '2024-02-22 05:38:57'),
(483, 70, '1708580337-AAA4.webp', 0, 1, '2024-02-22 05:38:57', '2024-02-22 05:38:57'),
(484, 70, '1708580337-BAR--01BP0064001.webp', 1, 0, '2024-02-22 05:38:58', '2024-02-22 05:38:58'),
(485, 73, '1708580562-D1.webp', 1, 0, '2024-02-22 05:42:43', '2024-02-22 05:42:43'),
(486, 73, '1708580563-D2.webp', 0, 1, '2024-02-22 05:42:44', '2024-02-22 05:42:44'),
(487, 73, '1708580564-D3.webp', 0, 0, '2024-02-22 05:42:44', '2024-02-22 05:42:44'),
(488, 73, '1708580564-D4.webp', 0, 0, '2024-02-22 05:42:45', '2024-02-22 05:42:45'),
(489, 73, '1708580565-D5.webp', 0, 0, '2024-02-22 05:42:46', '2024-02-22 05:42:46'),
(490, 69, '1708581222-A3.webp', 0, 0, '2024-02-22 05:53:43', '2024-02-22 05:53:43'),
(491, 69, '1708581223-A4.webp', 1, 0, '2024-02-22 05:53:44', '2024-02-22 05:53:44'),
(492, 69, '1708581224-BAR--01YG0039001.webp', 0, 1, '2024-02-22 05:53:45', '2024-02-22 05:53:45'),
(493, 68, '1708581462-015F007X001.webp', 0, 0, '2024-02-22 05:57:43', '2024-02-22 05:57:43'),
(494, 68, '1708581463-AA3.webp', 1, 0, '2024-02-22 05:57:43', '2024-02-22 05:57:43'),
(495, 68, '1708581463-AA4.webp', 0, 1, '2024-02-22 05:57:44', '2024-02-22 05:57:44'),
(496, 66, '1708581979-G1.webp', 1, 0, '2024-02-22 06:06:20', '2024-02-22 06:06:20'),
(497, 66, '1708581980-G2.webp', 0, 1, '2024-02-22 06:06:21', '2024-02-22 06:06:21'),
(498, 66, '1708581981-G3.webp', 0, 0, '2024-02-22 06:06:21', '2024-02-22 06:06:21'),
(499, 66, '1708581981-G4.webp', 0, 0, '2024-02-22 06:06:22', '2024-02-22 06:06:22'),
(500, 19, '1708583891-E1.webp', 0, 1, '2024-02-22 06:38:12', '2024-02-22 06:38:12'),
(501, 19, '1708583892-E2.webp', 1, 0, '2024-02-22 06:38:12', '2024-02-22 06:38:12'),
(502, 19, '1708583892-E3.webp', 0, 0, '2024-02-22 06:38:13', '2024-02-22 06:38:13'),
(503, 19, '1708583893-E4.webp', 0, 0, '2024-02-22 06:38:14', '2024-02-22 06:38:14'),
(504, 19, '1708583894-E5.webp', 0, 0, '2024-02-22 06:38:15', '2024-02-22 06:38:15'),
(505, 81, '1708584509-L1.webp', 1, 0, '2024-02-22 06:48:30', '2024-02-22 06:48:30'),
(506, 81, '1708584510-L2.webp', 0, 1, '2024-02-22 06:48:31', '2024-02-22 06:48:31'),
(507, 81, '1708584511-L3.webp', 0, 0, '2024-02-22 06:48:32', '2024-02-22 06:48:32'),
(508, 81, '1708584512-L4.webp', 0, 0, '2024-02-22 06:48:33', '2024-02-22 06:48:33'),
(509, 79, '1708584915-P1.webp', 1, 0, '2024-02-22 06:55:16', '2024-02-22 06:55:16'),
(510, 79, '1708584916-P2.webp', 0, 1, '2024-02-22 06:55:16', '2024-02-22 06:55:16'),
(511, 79, '1708584916-P3.webp', 0, 0, '2024-02-22 06:55:17', '2024-02-22 06:55:17'),
(512, 79, '1708584917-P4.webp', 0, 0, '2024-02-22 06:55:18', '2024-02-22 06:55:18'),
(513, 78, '1708585159-N1.webp', 1, 0, '2024-02-22 06:59:20', '2024-02-22 06:59:20'),
(515, 78, '1708585160-N3.webp', 0, 1, '2024-02-22 06:59:21', '2024-02-22 06:59:21'),
(516, 78, '1708585161-N4.webp', 0, 0, '2024-02-22 06:59:22', '2024-02-22 06:59:22'),
(517, 77, '1708585584-I1.webp', 1, 0, '2024-02-22 07:06:25', '2024-02-22 07:06:25'),
(518, 77, '1708585585-I2.webp', 0, 0, '2024-02-22 07:06:26', '2024-02-22 07:06:26'),
(519, 77, '1708585586-I3.webp', 0, 1, '2024-02-22 07:06:27', '2024-02-22 07:06:27'),
(520, 77, '1708585587-I4.webp', 0, 0, '2024-02-22 07:06:28', '2024-02-22 07:06:28'),
(521, 77, '1708585588-I5.webp', 0, 0, '2024-02-22 07:06:28', '2024-02-22 07:06:28'),
(522, 74, '1708585821-F1.webp', 0, 0, '2024-02-22 07:10:22', '2024-02-22 07:10:22'),
(523, 74, '1708585822-F2.webp', 1, 0, '2024-02-22 07:10:23', '2024-02-22 07:10:23'),
(524, 74, '1708585823-F3.webp', 0, 1, '2024-02-22 07:10:23', '2024-02-22 07:10:23'),
(525, 74, '1708585823-F4.webp', 0, 0, '2024-02-22 07:10:24', '2024-02-22 07:10:24'),
(526, 76, '1708586054-H1.webp', 1, 0, '2024-02-22 07:14:15', '2024-02-22 07:14:15'),
(527, 76, '1708586055-H2.webp', 0, 1, '2024-02-22 07:14:15', '2024-02-22 07:14:15'),
(528, 76, '1708586055-H3.webp', 0, 0, '2024-02-22 07:14:16', '2024-02-22 07:14:16'),
(529, 76, '1708586056-H4.webp', 0, 0, '2024-02-22 07:14:17', '2024-02-22 07:14:17'),
(530, 76, '1708586057-H5.webp', 0, 0, '2024-02-22 07:14:18', '2024-02-22 07:14:18'),
(531, 75, '1708586300-J1.webp', 0, 0, '2024-02-22 07:18:21', '2024-02-22 07:18:21'),
(532, 75, '1708586301-J2.webp', 0, 1, '2024-02-22 07:18:22', '2024-02-22 07:18:22'),
(533, 75, '1708586302-J3.webp', 0, 0, '2024-02-22 07:18:23', '2024-02-22 07:18:23'),
(534, 75, '1708586303-J4.webp', 1, 0, '2024-02-22 07:18:23', '2024-02-22 07:18:23'),
(540, 94, '1708588777-NG1.webp', 1, 0, '2024-02-22 07:59:38', '2024-02-22 07:59:38'),
(541, 94, '1708588778-NG2.webp', 0, 0, '2024-02-22 07:59:39', '2024-02-22 07:59:39'),
(542, 94, '1708588779-NG3.webp', 0, 1, '2024-02-22 07:59:39', '2024-02-22 07:59:39'),
(543, 94, '1708588779-NG4.webp', 0, 0, '2024-02-22 07:59:40', '2024-02-22 07:59:40'),
(544, 93, '1708588873-NJ1.webp', 1, 0, '2024-02-22 08:01:14', '2024-02-22 08:01:14'),
(545, 93, '1708588874-NJ2.webp', 0, 0, '2024-02-22 08:01:15', '2024-02-22 08:01:15'),
(546, 93, '1708588875-NJ3.webp', 0, 1, '2024-02-22 08:01:15', '2024-02-22 08:01:15'),
(547, 109, '1708595066-R--edit-01.webp', 0, 1, '2024-02-22 09:44:27', '2024-02-22 09:44:27'),
(548, 109, '1708595067-R--edit-03.webp', 1, 0, '2024-02-22 09:44:28', '2024-02-22 09:44:28'),
(549, 109, '1708595068-R-edit02.webp', 0, 0, '2024-02-22 09:44:28', '2024-02-22 09:44:28'),
(550, 114, '1708595644-R2--01.webp', 0, 0, '2024-02-22 09:54:05', '2024-02-22 09:54:05'),
(551, 114, '1708595645-R2-02.webp', 0, 0, '2024-02-22 09:54:05', '2024-02-22 09:54:05'),
(552, 114, '1708595645-R2-03.webp', 0, 1, '2024-02-22 09:54:06', '2024-02-22 09:54:06');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `rate` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `comment` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` int DEFAULT '1' COMMENT '0=active,1=deactive',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `product_id`, `name`, `email`, `rate`, `comment`, `status`, `created_at`) VALUES
(1, 2, 21, 'parth', 'parth@gmail.com', '4', 'tdfgfg', 0, '2023-10-06 14:04:49'),
(2, 1, 21, 'dev patel', 'devang.hnrtechnologies@gmail.com', '2', 'test', 0, '2023-10-07 05:17:53');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(7, '28', '2023-10-12 10:25:35', '2023-10-12 10:25:35'),
(8, '30', '2023-10-12 10:25:55', '2023-10-12 10:25:55'),
(9, '32', '2023-10-12 10:26:14', '2023-10-12 10:26:14'),
(10, '34', '2023-10-12 10:26:21', '2023-10-12 10:26:21'),
(11, '38', '2023-10-12 10:26:27', '2023-10-12 10:26:27'),
(12, '40', '2023-11-30 05:11:28', '2023-11-30 05:11:28'),
(13, '42', '2023-11-30 05:11:36', '2023-11-30 05:11:36'),
(14, '44', '2023-11-30 05:11:43', '2023-11-30 05:11:43'),
(15, '46', '2023-11-30 05:11:53', '2023-11-30 05:11:53'),
(16, '48', '2023-11-30 05:12:04', '2023-11-30 05:12:04'),
(17, '50', '2023-11-30 05:12:11', '2023-11-30 05:12:11'),
(18, '52', '2023-11-30 05:12:19', '2023-11-30 05:12:19'),
(19, '24', '2023-12-04 10:53:24', '2023-12-04 10:53:24'),
(20, '26', '2023-12-04 10:53:31', '2023-12-04 10:53:31'),
(21, '36', '2023-12-04 11:03:59', '2023-12-04 11:03:59'),
(22, '-', '2023-12-05 06:50:14', '2023-12-05 06:50:14');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint UNSIGNED NOT NULL,
  `country_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `country_id`, `state`, `created_at`, `updated_at`) VALUES
(4, '5', 'Rajasthan', '2023-09-24 11:57:07', '2023-09-25 07:07:09'),
(8, '5', 'Gujarat', '2023-09-29 05:36:40', '2023-09-29 05:36:40'),
(9, '5', 'Maharashtra', '2023-09-29 05:36:48', '2023-12-18 13:03:17'),
(12, '5', 'Haryana', '2023-09-29 05:39:28', '2023-09-29 05:39:28'),
(13, '5', 'Goa', '2023-09-29 05:39:37', '2023-09-29 05:39:37'),
(15, '5', 'Andhra Pradesh', '2023-12-18 12:45:19', '2023-12-18 12:45:53'),
(16, '5', 'Arunachal Pradesh', '2023-12-18 12:46:32', '2023-12-18 12:46:32'),
(17, '5', 'Assam', '2023-12-18 12:46:48', '2023-12-18 12:46:48'),
(18, '5', 'Bihar', '2023-12-18 12:47:06', '2023-12-18 12:47:06'),
(19, '5', 'Chhattisgarh', '2023-12-18 12:47:22', '2023-12-18 12:47:22'),
(20, '5', 'Himachal Pradesh', '2023-12-18 12:47:50', '2023-12-18 12:47:50'),
(21, '5', 'Jharkhand', '2023-12-18 12:48:05', '2023-12-18 12:48:05'),
(22, '5', 'Karnataka', '2023-12-18 12:48:36', '2023-12-18 12:48:36'),
(23, '5', 'Kerala', '2023-12-18 12:48:52', '2023-12-18 12:48:52'),
(24, '5', 'Madhya Pradesh', '2023-12-18 12:49:08', '2023-12-18 12:49:08'),
(26, '5', 'Meghalaya', '2023-12-18 12:49:51', '2023-12-18 12:49:51'),
(27, '5', 'Mizoram', '2023-12-18 12:50:52', '2023-12-18 12:50:52'),
(28, '5', 'Nagaland', '2023-12-18 12:51:05', '2023-12-18 12:51:05'),
(29, '5', 'Odisha', '2023-12-18 12:51:17', '2023-12-18 12:51:17'),
(30, '5', 'Punjab', '2023-12-18 12:51:29', '2023-12-18 12:51:29'),
(32, '5', 'Tamil Nadu', '2023-12-18 12:52:16', '2023-12-18 12:52:16'),
(33, '5', 'Tripura', '2023-12-18 12:52:34', '2023-12-18 12:52:34'),
(34, '5', 'Telangana', '2023-12-18 12:52:49', '2023-12-18 12:52:49'),
(35, '5', 'Uttar Pradesh', '2023-12-18 12:53:07', '2023-12-18 12:53:07'),
(36, '5', 'Uttarakhand', '2023-12-18 12:53:36', '2023-12-18 12:53:36'),
(37, '5', 'West Bengal', '2023-12-18 12:53:52', '2023-12-18 12:53:52'),
(38, '5', 'Andaman & Nicobar', '2023-12-18 12:54:16', '2023-12-18 12:54:16'),
(41, '5', 'Jammu & Kashmir', '2023-12-18 12:55:19', '2023-12-18 12:55:19'),
(42, '5', 'Ladakh', '2023-12-18 12:55:34', '2023-12-18 12:55:34'),
(43, '5', 'Lakshadweep', '2023-12-18 12:56:37', '2023-12-18 12:56:37');

-- --------------------------------------------------------

--
-- Table structure for table `style_types`
--

CREATE TABLE `style_types` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `style_types`
--

INSERT INTO `style_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Sports', '2023-07-29 00:07:14', '2023-10-26 10:20:22'),
(3, 'Formal', '2023-07-29 00:07:23', '2023-07-29 00:07:23'),
(5, 'Printed', '2023-10-31 11:14:14', '2023-10-31 11:14:14'),
(6, 'T R', '2024-01-03 12:20:52', '2024-01-03 12:20:52'),
(7, 'Plein', '2024-01-03 12:25:11', '2024-01-03 12:25:11'),
(8, 'Designer', '2024-01-03 12:47:22', '2024-01-03 12:47:22'),
(9, 'Craft', '2024-02-08 07:24:54', '2024-02-08 07:24:54'),
(10, 'Zari Woven', '2024-02-17 10:05:30', '2024-02-17 10:05:30');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint UNSIGNED NOT NULL,
  `group_id` int NOT NULL,
  `cat_id` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `set_order` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `group_id`, `cat_id`, `name`, `page_url`, `image`, `meta_title`, `meta_keywords`, `meta_description`, `set_order`, `created_at`, `updated_at`) VALUES
(15, 7, 15, 'Ghagra  &  Crop Top Skirt', 'ghagra-crop-top-skirt', '1696423623download.png', NULL, NULL, NULL, 4, '2023-09-19 09:10:49', '2023-11-23 12:30:03'),
(16, 7, 15, 'Gown', 'gown', '', NULL, NULL, NULL, 3, '2023-09-19 09:11:00', '2023-09-19 09:11:00'),
(17, 7, 16, 'Waistcoat Sets', 'waistcoat-sets', '', NULL, NULL, NULL, 2, '2023-09-19 09:11:10', '2023-11-23 12:27:13'),
(18, 7, 16, 'Suit', 'suit', '1696594098rs=w_1200,h_1200.webp', NULL, NULL, NULL, 1, '2023-09-19 09:11:20', '2023-10-06 12:08:18'),
(19, 8, 17, 'Wedding Sherwani', 'wedding-sherwani', '1701080332Screenshot-2023-11-27-154830.png', NULL, NULL, NULL, 2, '2023-09-19 09:11:35', '2023-11-27 10:18:52'),
(21, 8, 17, 'IndoWestern Sherwani', 'indowestern-sherwani-', '1701079459Screenshot-2023-11-27-153343.png', NULL, NULL, NULL, 1, '2023-09-19 09:11:59', '2023-11-27 10:04:19'),
(22, 9, 18, 'Bandhani Saree', 'bandhani-saree-', '', NULL, NULL, NULL, 10, '2023-09-19 09:12:18', '2023-11-16 08:00:52'),
(23, 9, 18, 'Organza Designer Saree', 'organza-designer-saree', '', NULL, NULL, NULL, 9, '2023-09-19 09:12:31', '2023-11-16 07:59:32'),
(24, 9, 18, 'Pure Designer Embroidery Saree', 'pure-designer-embroidery-saree', '', NULL, NULL, NULL, 8, '2023-09-19 09:12:42', '2023-11-16 07:58:40'),
(25, 9, 19, 'Handloom South  Silk Saree', 'handloom-south-silk-saree', '', NULL, NULL, NULL, 7, '2023-09-19 09:12:53', '2023-11-22 09:10:06'),
(28, 8, 20, 'Classic Suit\'s', 'classic-suit-s', '1701077711Screenshot-2023-11-27-150240.png', NULL, NULL, NULL, 5, '2023-10-04 11:05:47', '2023-11-27 09:35:11'),
(30, 8, 20, 'Tuxedo Suit\'s', 'tuxedo-suit-s', '1704373726Screenshot-2024-01-04-150841.png', NULL, NULL, NULL, 4, '2023-10-27 12:58:14', '2024-01-04 13:08:46'),
(36, 8, 20, 'Jodhpuri Suit\'s', 'jodhpuri-suit-s', '1704364010Screenshot-2024-01-04-150841.png', NULL, NULL, NULL, 0, '2023-11-16 06:22:10', '2024-01-04 10:26:50'),
(38, 8, 26, 'Bandi', 'bandi-', '', NULL, NULL, NULL, 0, '2023-11-16 07:14:05', '2023-11-16 07:14:05'),
(39, 8, 26, 'Bandi Set', 'bandi-set', '', NULL, NULL, NULL, 0, '2023-11-16 07:14:24', '2023-11-16 07:14:24'),
(40, 8, 31, 'Safa', 'safa', '', NULL, NULL, NULL, 0, '2023-11-16 07:16:32', '2023-11-16 07:16:32'),
(41, 8, 31, 'Mojadi', 'mojadi', '', NULL, NULL, NULL, 0, '2023-11-16 07:16:57', '2023-11-16 07:16:57'),
(42, 8, 31, 'Dupatta', 'dupatta', '', NULL, NULL, NULL, 0, '2023-11-16 07:17:27', '2023-11-16 07:17:27'),
(47, 9, 19, 'Paithani Sarees', 'paithani-sarees', '', NULL, NULL, NULL, 0, '2023-11-16 07:38:34', '2023-11-16 07:38:34'),
(48, 9, 19, 'Ikkat & Patola Saree', 'ikkat-patola-saree', '', NULL, NULL, NULL, 0, '2023-11-16 07:39:30', '2023-11-22 09:10:51'),
(49, 9, 19, 'Banarasi Silk Saree', 'banarasi-silk-saree', '', NULL, NULL, NULL, 0, '2023-11-16 07:39:54', '2023-11-16 07:39:54'),
(50, 9, 18, 'Ready Blouse Saree', 'ready-blouse-saree', '', NULL, NULL, NULL, 0, '2023-11-16 08:01:47', '2023-11-16 08:01:47'),
(51, 9, 33, 'Designer Printed Saree', 'designer-printed-saree', '', NULL, NULL, NULL, 0, '2023-11-16 08:04:09', '2023-11-16 08:04:09'),
(52, 9, 33, 'Tussar Printed Saree', 'tussar-printed-saree', '', NULL, NULL, NULL, 0, '2023-11-16 08:04:54', '2023-11-16 08:04:54'),
(53, 9, 33, 'Kalamkari Silk Printed Saree', 'kalamkari-silk-printed-saree', '', NULL, NULL, NULL, 0, '2023-11-16 08:05:50', '2023-11-16 08:05:50'),
(54, 9, 34, 'Wedding Saree', 'wedding-saree', '', NULL, NULL, NULL, 0, '2023-11-16 08:07:57', '2023-11-16 08:07:57'),
(55, 9, 34, 'Festive Wear Saree', 'festive-wear-saree', '', NULL, NULL, NULL, 0, '2023-11-16 08:11:31', '2023-11-16 08:11:31'),
(56, 9, 34, 'Party Wear Saree', 'party-wear-saree', '', NULL, NULL, NULL, 0, '2023-11-16 08:13:16', '2023-11-16 08:13:16'),
(57, 9, 34, 'Mehndi Saree', 'mehndi-saree-', '', NULL, NULL, NULL, 0, '2023-11-16 08:14:19', '2023-11-16 08:14:19'),
(58, 9, 34, 'Reception Saree\'s', 'reception-saree-s', '', NULL, NULL, NULL, 0, '2023-11-16 08:14:50', '2023-11-16 08:14:50'),
(59, 17, 35, 'Bridal Lehenga', 'bridal-lehenga-', '', NULL, NULL, NULL, 0, '2023-11-16 09:40:47', '2023-11-16 09:40:47'),
(60, 17, 35, 'Designer Lehenga', 'designer-lehenga-', '', NULL, NULL, NULL, 0, '2023-11-16 09:42:11', '2023-11-16 09:42:11'),
(61, 17, 35, 'Bridesmaids Lehenga', 'bridesmaids-lehenga-', '', NULL, NULL, NULL, 0, '2023-11-16 09:43:30', '2023-11-16 09:43:30'),
(62, 17, 35, 'Crop Top Lehenga', 'crop-top-lehenga-', '', NULL, NULL, NULL, 0, '2023-11-16 09:44:41', '2023-11-16 09:44:41'),
(63, 17, 36, 'Wedding Lehenga', 'wedding-lehenga-', '', NULL, NULL, NULL, 0, '2023-11-16 09:46:50', '2023-11-16 09:46:50'),
(64, 17, 36, 'Reception Lehenga', 'reception-lehenga-', '', NULL, NULL, NULL, 0, '2023-11-16 09:47:19', '2023-11-16 09:47:19'),
(65, 17, 36, 'Party Wear Lehenga', 'party-wear-lehenga-', '', NULL, NULL, NULL, 0, '2023-11-16 09:49:12', '2023-11-16 09:49:12'),
(66, 17, 36, 'Mehendi Lehenga', 'mehendi-lehenga', '', NULL, NULL, NULL, 0, '2023-11-16 09:50:14', '2023-12-13 13:11:26'),
(67, 17, 36, 'Engagement Lehenga', 'engagement-lehenga-', '', NULL, NULL, NULL, 0, '2023-11-16 09:50:58', '2023-11-16 09:50:58'),
(68, 18, 37, 'Indoweston', 'indoweston-', '1701080544Screenshot-2023-11-27-155140.png', NULL, NULL, NULL, 0, '2023-11-16 10:01:46', '2023-11-27 10:22:24'),
(69, 18, 37, 'Suit\'s', 'suit-s-', '', NULL, NULL, NULL, 0, '2023-11-16 10:02:23', '2023-11-16 10:02:23'),
(70, 18, 37, 'Gowns', 'gowns', '', NULL, NULL, NULL, 0, '2023-11-16 10:03:07', '2023-11-16 10:03:28'),
(71, 18, 37, 'Crop-Top Skirt', 'crop-top-skirt-', '', NULL, NULL, NULL, 0, '2023-11-16 10:04:47', '2023-11-16 10:04:47'),
(72, 18, 38, 'Festive Salwar Kameez', 'festive-salwar-kameez', '', NULL, NULL, NULL, 0, '2023-11-16 10:09:35', '2023-11-16 10:09:35'),
(73, 18, 38, 'Party Wear Salwar Kameez', 'party-wear-salwar-kameez', '', NULL, NULL, NULL, 0, '2023-11-16 10:10:12', '2023-11-16 10:10:12'),
(74, 18, 38, 'Engagement  Salwar Kameez', 'engagement-salwar-kameez', '', NULL, NULL, NULL, 0, '2023-11-16 10:11:03', '2023-11-16 10:11:03'),
(75, 18, 38, 'Sangeet Salwar Kameez', 'sangeet-salwar-kameez', '', NULL, NULL, NULL, 0, '2023-11-16 10:11:39', '2023-12-13 13:14:13'),
(76, 9, 19, 'Banarasi Khadi Silk Saree', 'banarasi-khadi-silk-saree', '', NULL, NULL, NULL, 0, '2023-11-22 09:07:37', '2023-11-22 09:07:37'),
(77, 9, 19, 'Fancy Art Silk Saree', 'fancy-art-silk-saree', '', NULL, NULL, NULL, 0, '2023-11-22 09:08:44', '2023-11-22 09:08:44'),
(78, 7, 16, 'Kurta', 'kurta', '', NULL, NULL, NULL, 0, '2023-11-23 12:25:49', '2023-11-23 12:25:49'),
(79, 7, 15, 'Dresses', 'dresses', '', NULL, NULL, NULL, 0, '2023-11-23 12:30:47', '2023-11-23 12:30:47'),
(80, 7, 15, 'Western Wear', 'western-wear', '', NULL, NULL, NULL, 0, '2023-11-23 12:31:37', '2023-12-13 13:17:24'),
(81, 8, 26, 'Modi Kurta', 'modi-kurta-', '', NULL, NULL, NULL, 0, '2023-12-13 13:07:56', '2023-12-13 13:07:56');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `created_at`, `updated_at`) VALUES
(4, 'test4@gmail.com', '2023-09-22 08:34:45', NULL),
(5, 'test5@gmail.com', '2023-09-22 08:34:45', NULL),
(6, 'parth.hnrtechnologies@gmail.com', '2023-09-28 00:00:00', NULL),
(7, 'akki@gmail.com', '2023-11-24 00:00:00', NULL),
(8, 'akshp@785gmail.com', '2023-12-04 00:00:00', NULL),
(9, 'devang.hnrtechnologies@gmail.com', '2024-02-19 00:00:00', NULL),
(10, 'test', '2024-02-19 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_banners`
--

CREATE TABLE `sub_banners` (
  `id` bigint UNSIGNED NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `set_order` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_banners`
--

INSERT INTO `sub_banners` (`id`, `link`, `video_link`, `image`, `set_order`, `created_at`, `updated_at`) VALUES
(4, 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fwww.beyoung.in%2Fapi%2Fcache%2Fcatalog%2Fproducts%2Fbanner_desktop%2FWinter-Collection-categry-banner_31_1_2023_767x430.jpg&tbnid=EFHjMscM-mnPBM&vet=12ahUKEwj8xa_5vJOCAxVho2MGHSKEBUYQMygWegQIARB6..i&imgre', NULL, '1698315229win-1.jpg', 2, '2023-09-21 13:22:23', '2023-10-26 10:14:26'),
(5, NULL, 'Video: MPEG4 Video (H264) 1920x1080 50fps 10046kbps [V: Mainconcept Video Media Handler [eng] (h264 main L4.2, yuv420p, 1920x1080, 10046 kb/s)] Audio: AAC 48000Hz stereo 317kbps [A: #Mainconcept MP4 Sound Media Handler [eng] (aac lc, 48000 Hz, stereo, 31', '1695302555sub-banner2.jpg', 1, '2023-09-21 13:22:35', '2023-12-29 12:29:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `role_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `user_name`, `email`, `email_verified_at`, `password`, `mobile`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '1', 'Admin', '', 'admin@gmail.com', NULL, '$2y$10$e72baN/g/IhpkD4b0PJ9zuSE6mQN7VFBzoqKjCE3pymA1LUQtAsx.', '', NULL, '2023-07-28 03:04:25', '2023-07-28 03:04:25'),
(3, '4', 'Sub Admin', 'sub', 'sub@gmail.com', NULL, '$2y$10$pqnAutawrB8LkMHNiP.oh.BR4.1K77fhF0/6xb5U1DkO46uttQZ4K', '1234567890', NULL, '2023-09-20 06:29:25', '2023-09-20 06:29:25');

-- --------------------------------------------------------

--
-- Table structure for table `user_permissions`
--

CREATE TABLE `user_permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `cname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `editperm` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_permissions`
--

INSERT INTO `user_permissions` (`id`, `cname`, `permission`, `editperm`, `created_at`, `updated_at`) VALUES
(1, 'admin', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22', '2023-09-18 05:33:28', '2023-10-07 05:15:06'),
(4, 'subadmin', '1', '1', '2023-09-19 10:04:47', '2023-09-21 06:30:27'),
(8, 'Sales Dept', '21', NULL, '2024-01-09 06:29:49', '2024-01-09 06:29:49');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int NOT NULL,
  `userid` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `added_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `userid`, `product_id`, `added_date`) VALUES
(3, '1', '9', '2023-09-08 00:00:00'),
(8, '1', '20', '2023-10-04 00:00:00'),
(9, '1', '6', '2023-10-04 00:00:00'),
(10, '1', '26', '2023-10-06 00:00:00'),
(11, '1', '22', '2023-10-06 00:00:00'),
(15, '3', '19', '2023-10-26 00:00:00'),
(16, '4', '18', '2023-10-26 00:00:00'),
(17, '4', '20', '2023-10-26 00:00:00'),
(18, '3', '27', '2023-10-26 00:00:00'),
(19, '3', '28', '2023-10-26 00:00:00'),
(20, '5', '36', '2023-10-31 00:00:00'),
(21, '3', '39', '2023-11-03 00:00:00'),
(22, '3', '40', '2023-11-03 00:00:00'),
(23, '3', '29', '2023-11-03 00:00:00'),
(24, '7', '4', '2023-12-12 00:00:00'),
(25, '1', '4', '2024-02-21 00:00:00'),
(26, '1', '19', '2024-02-21 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address_book`
--
ALTER TABLE `address_book`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `ci_orders`
--
ALTER TABLE `ci_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `ci_order_item`
--
ALTER TABLE `ci_order_item`
  ADD PRIMARY KEY (`order_item_id`);

--
-- Indexes for table `ci_shipping_address`
--
ALTER TABLE `ci_shipping_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
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
-- Indexes for table `countries`
--
ALTER TABLE `countries`
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
-- Indexes for table `front_users`
--
ALTER TABLE `front_users`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
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
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
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
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address_book`
--
ALTER TABLE `address_book`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `ci_orders`
--
ALTER TABLE `ci_orders`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `ci_order_item`
--
ALTER TABLE `ci_order_item`
  MODIFY `order_item_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `ci_shipping_address`
--
ALTER TABLE `ci_shipping_address`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `colours`
--
ALTER TABLE `colours`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `coupans`
--
ALTER TABLE `coupans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `front_users`
--
ALTER TABLE `front_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `product_attribute`
--
ALTER TABLE `product_attribute`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=553;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `style_types`
--
ALTER TABLE `style_types`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sub_banners`
--
ALTER TABLE `sub_banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_permissions`
--
ALTER TABLE `user_permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
