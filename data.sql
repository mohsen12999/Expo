-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2020 at 06:21 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expo_db`
--

--
-- Dumping data for table `booths`
--

INSERT INTO `booths` (`id`, `title`, `title_fa`, `title_ru`, `title_ar`, `description`, `description_fa`, `description_ru`, `description_ar`, `pic`, `theme`, `catalog`, `status`, `status_description`, `visits`, `booth_map_id`, `created_at`, `updated_at`, `expo_package_id`, `theme_id`, `user_expo_package_id`, `expo_id`, `user_id`, `confirm`) VALUES
(1, 'test', NULL, NULL, NULL, 'test', NULL, NULL, NULL, '', '', '', 0, NULL, 6, '504', '2020-12-17 15:07:27', '2020-12-30 05:18:46', 2, 4, 1, 1, 2, 1),
(3, 'test2', NULL, NULL, NULL, 'test2', NULL, NULL, NULL, '', '', '', 0, NULL, 6, '408', '2020-12-17 15:09:16', '2020-12-26 03:59:20', 3, 6, 2, 8, 2, 1),
(4, 'test3', NULL, NULL, NULL, 'test3', NULL, NULL, NULL, '', '', '', 0, NULL, 5, '409', '2020-12-17 15:11:28', '2020-12-30 05:18:56', 1, 5, 3, 1, 2, 1),
(5, 'tes4', NULL, NULL, NULL, 'test5', NULL, NULL, NULL, '', '', '', 0, NULL, 0, '407', '2020-12-17 15:11:44', '2020-12-19 03:56:05', 1, 1, 3, 8, 2, 0),
(6, 'test3', NULL, NULL, NULL, 'test4', NULL, NULL, NULL, '', '', '', 0, NULL, 0, '508', '2020-12-17 15:11:58', '2020-12-17 15:12:00', 1, 1, 3, 7, 2, 0),
(7, 'test9', NULL, NULL, NULL, 'test9', NULL, NULL, NULL, '', '', '', 0, NULL, 6, '506', '2020-12-17 15:14:25', '2020-12-26 17:37:53', 1, 3, 4, 1, 2, 1),
(8, 'test9', NULL, NULL, NULL, 'test9', NULL, NULL, NULL, '', '', '', 0, NULL, 4, '406', '2020-12-17 15:14:30', '2020-12-26 17:37:57', 1, 5, 4, 1, 2, 1),
(9, 'test1', NULL, NULL, NULL, 'test2', NULL, NULL, NULL, '', '', '', 0, NULL, 8, '408', '2020-12-18 09:59:22', '2020-12-30 01:40:16', 2, 1, 5, 1, 2, 1),
(10, 'testi', NULL, NULL, NULL, 'testiii', NULL, NULL, NULL, '', '', '', 0, NULL, 0, '407', '2020-12-18 10:00:19', '2020-12-18 10:00:24', 3, 6, 6, 1, 2, 0),
(11, 'test', NULL, NULL, NULL, 'test', NULL, NULL, NULL, '', '', '', 0, NULL, 0, '307', '2020-12-18 14:27:23', '2020-12-29 06:36:26', 3, 6, 7, 1, 5, 1),
(12, 'pejvak', NULL, NULL, NULL, 'pejvak de', NULL, NULL, NULL, '/img/booths/1608363690_namad4.jpg', '', '', 0, NULL, 0, '504', '2020-12-19 04:11:30', '2020-12-22 04:00:36', 3, 6, 8, 6, 2, 1),
(13, 'title test', NULL, NULL, NULL, 'Description test', NULL, NULL, NULL, '/img/booths/1608539024_Hydrangeas.jpg', '', '/img/booths/catalog/1608539025_1.pdf', 0, NULL, 3, '520', '2020-12-21 04:53:45', '2020-12-29 05:33:44', 3, 4, 9, 4, 9, 1),
(14, 'pej test title', NULL, NULL, NULL, 'Description pej desc', NULL, NULL, NULL, '', '', '/img/booths/catalog/1608540589_1.pdf', 0, NULL, 0, '420', '2020-12-21 05:19:49', '2020-12-21 05:19:58', 1, 3, 10, 5, 9, 0),
(15, 'futur test title', NULL, NULL, NULL, 'Description for futur', NULL, NULL, NULL, '/img/booths/1608541813_Jellyfish.jpg', '', '', 0, NULL, 0, '220', '2020-12-21 05:40:13', '2020-12-22 03:58:46', 2, 6, 11, 7, 9, 1),
(16, 'world test', NULL, NULL, NULL, 'dfgfbfb', NULL, NULL, NULL, '', '', '/img/booths/catalog/1608543133_GPLLicenseTerms.pdf', 0, NULL, 4, '220', '2020-12-21 06:02:13', '2020-12-23 06:45:30', 3, 1, 12, 8, 9, 1),
(17, 'job booth tittttle', NULL, NULL, NULL, 'dgfffh', NULL, NULL, NULL, '', '', '/img/booths/catalog/1608630108_Tamdid_M.pdf', 0, NULL, 6, '219', '2020-12-22 06:11:48', '2020-12-30 05:19:11', 2, 2, 13, 1, 9, 1),
(18, 'job booth tittttle2', NULL, NULL, NULL, 'fghh', NULL, NULL, NULL, '/img/booths/1608631495_Jellyfish.jpg', '', '/img/booths/catalog/1608631495_رویجلدرزومه.pdf', 0, NULL, 6, '227', '2020-12-22 06:34:55', '2020-12-26 17:38:13', 1, 4, 14, 1, 9, 1),
(19, 'job booth tittttle3', NULL, NULL, NULL, 'ddfvdvd', NULL, NULL, NULL, '', '', '/img/booths/catalog/1608632802_1.pdf', 0, NULL, 2, '101', '2020-12-22 06:56:42', '2020-12-26 09:54:59', 2, 3, 15, 1, 9, 1),
(20, 'titlew', NULL, NULL, NULL, 'dsggd', NULL, NULL, NULL, '', '', '/img/booths/catalog/1608969573_رویجلدرزومه.pdf', 0, NULL, 3, '401', '2020-12-26 04:29:33', '2020-12-29 06:13:05', 2, 1, 16, 4, 9, 1),
(21, 'تست', NULL, NULL, NULL, 'تست', NULL, NULL, NULL, '', '', '', 0, NULL, 2, '222', '2020-12-26 13:44:04', '2020-12-30 01:41:36', 2, 3, 19, 1, 2, 1),
(22, 'sfdsf', NULL, NULL, NULL, 'sdfsdfsdf', NULL, NULL, NULL, '', '', '', 0, NULL, 1, '401', '2020-12-27 04:52:12', '2020-12-30 01:41:06', 1, 5, 20, 1, 2, 1),
(23, 'job newww', NULL, NULL, NULL, 'd new', NULL, NULL, NULL, '', '', '', 0, NULL, 1, '425', '2020-12-29 06:21:14', '2020-12-30 01:41:26', 3, 1, 18, 1, 9, 1),
(24, 'tech new', NULL, NULL, NULL, 'd new', NULL, NULL, NULL, '', '', '', 0, NULL, 0, '109', '2020-12-29 06:27:34', '2020-12-29 06:27:54', 1, 3, 21, 5, 9, 1),
(25, 'tesst', NULL, NULL, NULL, 'd tesst', NULL, NULL, NULL, '', '', '', 0, NULL, 0, '108', '2020-12-30 04:19:10', '2020-12-30 04:19:32', 2, 4, 22, 5, 9, 1),
(26, 'es', NULL, NULL, NULL, 'd es', NULL, NULL, NULL, '', '', '/img/booths/catalog/1609317417_5.pdf', 0, NULL, 3, '401', '2020-12-30 05:06:57', '2020-12-30 05:19:55', 3, 4, 23, 5, 9, 1);

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `pic`, `link`, `created_at`, `updated_at`) VALUES
(1, '/img/brands/brand1.png', NULL, '2020-08-27 22:53:54', '2020-08-27 22:53:54'),
(2, '/img/brands/brand2.png', NULL, '2020-08-27 22:54:06', '2020-08-27 22:54:06'),
(3, '/img/brands/brand3.png', NULL, '2020-08-27 22:54:13', '2020-08-27 22:54:13'),
(4, '/img/brands/brand4.png', NULL, '2020-08-27 22:54:20', '2020-08-27 22:54:20'),
(5, '/img/brands/brand5.png', NULL, '2020-08-27 22:54:32', '2020-08-27 22:54:32'),
(6, '/img/brands/1605850869_vvvvvvvvvvvvvv.jpg', NULL, '2020-11-19 23:41:09', '2020-11-19 23:41:09');

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `title_fa`, `title_ru`, `title_ar`, `description`, `description_fa`, `description_ru`, `description_ar`, `pic`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Manufacturing & Processing Machanery', NULL, NULL, NULL, '', NULL, NULL, NULL, '/img/categories/cat2.png', '0.00', 1, NULL, NULL),
(2, 'Industerial Equipment & Energy', NULL, NULL, NULL, '', NULL, NULL, NULL, '/img/categories/cat1.png', '0.00', 1, NULL, NULL),
(3, 'construction & decoration', NULL, NULL, NULL, '', NULL, NULL, NULL, '/img/categories/cat3.png', '0.00', 1, NULL, NULL),
(4, 'Electronics & security', NULL, NULL, NULL, '', NULL, NULL, NULL, '/img/categories/cat9.png', '0.00', 1, NULL, NULL),
(5, 'Health & Medicine', NULL, NULL, NULL, '', NULL, NULL, NULL, '/img/categories/cat7.png', '0.00', 1, NULL, NULL),
(6, 'Customer Electronics & Entertainment', NULL, NULL, NULL, '', NULL, NULL, NULL, '/img/categories/cat4.png', '0.00', 1, NULL, NULL),
(7, 'Consumer Good & Daily Use.', NULL, NULL, NULL, '', NULL, NULL, NULL, '/img/categories/cat8.png', '0.00', 1, NULL, '2020-12-09 10:16:28'),
(8, 'Fasion & Popular Items', NULL, NULL, NULL, '', NULL, NULL, NULL, '/img/categories/cat6.png', '0.00', 1, NULL, NULL),
(9, 'Transportation & Vehicle Accessoriess', NULL, NULL, NULL, '', NULL, NULL, NULL, '/img/categories/cat5.png', '2.00', 1, NULL, '2020-12-10 12:05:38'),
(10, 'test cat', NULL, NULL, NULL, 'ghjykuykkl,jjl', NULL, NULL, NULL, '', '0.00', 1, '2020-12-21 03:35:38', '2020-12-21 03:35:38');

--
-- Dumping data for table `counters`
--

INSERT INTO `counters` (`id`, `title`, `description`, `url_link`, `launch_day`, `status`, `expo_id`, `created_at`, `updated_at`) VALUES
(1, 'Chicago Expo  new', 'chicago new', NULL, '2021-10-20 00:00:00', 1, 3, '2020-08-27 22:54:32', '2020-12-02 05:44:25');

--
-- Dumping data for table `expos`
--

INSERT INTO `expos` (`id`, `title`, `title_fa`, `title_ru`, `title_ar`, `description`, `description_fa`, `description_ru`, `description_ar`, `pic`, `video`, `start`, `end`, `history`, `type`, `type_desc`, `theme`, `status`, `created_at`, `updated_at`, `expo_category_id`, `user_id`) VALUES
(1, 'Job Expo 1', NULL, NULL, NULL, 'Job Expo Description', NULL, NULL, NULL, '/img/expos/expo-1.jpg', NULL, '2017-09-01 00:00:00', '2017-10-01 00:00:00', 0, 1, 'Yearly', '', 1, NULL, '2020-12-11 00:15:30', 1, NULL),
(2, 'Gaming Expo', NULL, NULL, NULL, 'Gaming Expo Description', NULL, NULL, NULL, '/img/expos/expo-2.jpg', NULL, '2017-09-01 22:17:49', '2018-03-01 22:17:49', 1, 1, '', '', 1, NULL, NULL, 6, NULL),
(3, 'Chicago Expo', NULL, NULL, NULL, 'Chicago Expo Description', NULL, NULL, NULL, '/img/expos/expo-3.jpg', NULL, '2018-05-01 22:17:49', '2018-09-01 22:17:49', 1, 1, '', '', 1, NULL, NULL, 8, NULL),
(4, 'Swiss Expo', NULL, NULL, NULL, 'Swiss Expo Description', NULL, NULL, NULL, '/img/expos/expo-4.jpg', NULL, '2018-09-01 22:17:49', '2018-10-01 22:17:49', 1, 1, '', '', 1, NULL, '2020-12-26 04:51:59', 3, NULL),
(5, 'Tech Expo', NULL, NULL, NULL, 'Tech Expo Description', NULL, NULL, NULL, '/img/expos/expo-5.jpg', NULL, '2020-09-09 22:16:30', '2020-10-16 22:16:30', 0, 0, '', '', 1, NULL, NULL, 7, NULL),
(6, 'Gaming Expo', NULL, NULL, NULL, 'Gaming Expo Description', NULL, NULL, NULL, '/img/expos/expo-6.jpg', NULL, '2020-12-14 00:00:00', '2020-12-20 00:00:00', 1, 0, 'Periodic', '', 1, NULL, '2020-12-01 06:17:21', 7, NULL),
(7, 'Future Energy Expo', NULL, NULL, NULL, 'Future Energy Expo Description', NULL, NULL, NULL, '/img/expos/expo-7.jpg', NULL, '2020-12-01 00:00:00', '2020-12-17 00:00:00', 1, 1, 'Yearly', '', 1, NULL, '2020-12-26 04:22:06', 9, NULL),
(8, 'World fair Expo', NULL, NULL, NULL, 'World fair Expo Description', NULL, NULL, NULL, '/img/expos/1604922372_1.jpg', NULL, '2020-12-12 00:00:00', '2020-12-17 00:00:00', 1, 0, 'Periodic', '', 1, NULL, '2020-12-01 06:15:30', 3, NULL);

--
-- Dumping data for table `expo_categories`
--

INSERT INTO `expo_categories` (`id`, `title`, `title_fa`, `title_ru`, `title_ar`, `description`, `description_fa`, `description_ru`, `description_ar`, `pic`, `price`, `status`, `start`, `end`, `created_at`, `updated_at`) VALUES
(1, 'IT Companies', NULL, NULL, NULL, '', NULL, NULL, NULL, '/img/categories/cat2.png', '0.00', 1, '2020-12-12 18:13:11', NULL, NULL, NULL),
(2, 'Galleries', NULL, NULL, NULL, '', NULL, NULL, NULL, '/img/categories/cat1.png', '0.00', 1, '2020-12-12 18:13:11', NULL, NULL, NULL),
(3, 'Organizations', NULL, NULL, NULL, '', NULL, NULL, NULL, '/img/categories/cat3.png', '0.00', 1, '2020-12-12 18:13:11', NULL, NULL, NULL),
(4, 'Clothes Companies', NULL, NULL, NULL, '', NULL, NULL, NULL, '/img/categories/cat9.png', '0.00', 1, '2020-12-12 18:13:11', NULL, NULL, NULL),
(5, 'Medicine Companies', NULL, NULL, NULL, '', NULL, NULL, NULL, '/img/categories/cat7.png', '0.00', 1, '2020-12-12 18:13:11', NULL, NULL, NULL),
(6, 'Electronics Companies', NULL, NULL, NULL, '', NULL, NULL, NULL, '/img/categories/cat4.png', '0.00', 1, '2020-12-12 18:13:11', NULL, NULL, NULL),
(7, 'Consumer Support', NULL, NULL, NULL, '', NULL, NULL, NULL, '/img/categories/cat8.png', '0.00', 1, '2020-12-12 18:13:11', NULL, NULL, NULL),
(8, 'Post Companies', NULL, NULL, NULL, '', NULL, NULL, NULL, '/img/categories/cat6.png', '0.00', 1, '2020-12-12 18:13:11', NULL, NULL, NULL),
(9, 'Vehicle Companies', NULL, NULL, NULL, '', NULL, NULL, NULL, '/img/categories/cat5.png', '0.00', 1, '2020-12-12 18:13:11', NULL, NULL, '2020-12-10 12:06:27');

--
-- Dumping data for table `expo_comments`
--

INSERT INTO `expo_comments` (`id`, `name`, `email`, `subject`, `description`, `status`, `expo_id`, `created_at`, `updated_at`) VALUES
(1, 'test6', NULL, NULL, 'test6', 1, 1, '2020-12-18 17:03:45', '2020-12-18 17:04:29'),
(2, 'test7', NULL, NULL, 'test7', 0, 2, '2020-12-18 17:05:32', '2020-12-18 17:05:32'),
(3, 'test78', NULL, NULL, 'test78', 1, 3, '2020-12-18 17:06:18', '2020-12-18 17:06:32');

--
-- Dumping data for table `expo_images`
--

INSERT INTO `expo_images` (`id`, `title`, `description`, `path`, `status`, `expo_id`, `created_at`, `updated_at`) VALUES
(5, '', '', '/img/expos/img_1609057073_Baymax.jpg', 0, 8, '2020-12-27 04:47:53', '2020-12-27 04:47:53'),
(6, '', '', '/img/expos/img_1609179582_IMG_8499~photo.jpeg', 0, 7, '2020-12-28 14:49:42', '2020-12-28 14:49:42'),
(7, '', '', '/img/expos/img_1609179643_IMG_8500~photo.jpeg', 0, 7, '2020-12-28 14:50:43', '2020-12-28 14:50:43'),
(8, '', '', '/img/expos/img_1609233779_Penguins.jpg', 0, 4, '2020-12-29 05:52:59', '2020-12-29 05:52:59'),
(9, '', '', '/img/expos/img_1609233869_Desert.jpg', 0, 4, '2020-12-29 05:54:29', '2020-12-29 05:54:29'),
(10, '', '', '/img/expos/img_1609272464_IMG_8500~photo.jpeg', 0, 3, '2020-12-29 16:37:44', '2020-12-29 16:37:44'),
(11, '', '', '/img/expos/img_1609272475_IMG_8502~photo.jpeg', 0, 3, '2020-12-29 16:37:55', '2020-12-29 16:37:55'),
(12, '', '', '/img/expos/img_1609272518_IMG_8501~photo.jpeg', 0, 6, '2020-12-29 16:38:38', '2020-12-29 16:38:38'),
(13, '', '', '/img/expos/img_1609317044_Tulips.jpg', 0, 8, '2020-12-30 05:00:44', '2020-12-30 05:00:44'),
(14, '', '', '/img/expos/img_1609317114_Desert.jpg', 0, 6, '2020-12-30 05:01:54', '2020-12-30 05:01:54');

--
-- Dumping data for table `expo_packages`
--

INSERT INTO `expo_packages` (`id`, `pic`, `title`, `description`, `video_time`, `video_count`, `video_size`, `photo_count`, `photo_size`, `catalog_page`, `catalog_size`, `color`, `type`, `status`, `duration`, `price`, `created_at`, `updated_at`) VALUES
(1, '/img/packages/send.png', 'Basic', '<ul class=\"benefit-list\">\r\n<li>Video 1min up to 10MB</li>\r\n<li>Photo 5 up to 10MB</li>\r\n<li>Catalog 5page up to 10MB</li>\r\n<li>Logo</li>\r\n<li>Company Name</li>\r\n<li>About Company and History</li>\r\n<li>Contact to you</li>\r\n<li>Resume</li>\r\n<li>Your Costomer</li>\r\n<li>Make Booth</li>\r\n<li>Daily Visitor Report</li>\r\n</ul>', 1, 1, 10, 5, 10, 5, 10, '#ec3725', 1, 1, 0, '50.00', '2020-08-21 17:48:14', '2020-12-30 04:54:57'),
(2, '/img/packages/crown.png', 'Golden', '<ul class=\"benefit-list\">\r\n<li>3 Video up to 2min and 10MB</li>\r\n<li>Photo 10 up to 20MB</li>\r\n<li>Catalog up to 30MB</li>\r\n<li>Logo</li>\r\n<li>Company Name</li>\r\n<li>About Company and History</li>\r\n<li>Contact to you</li>\r\n<li>Resume</li>\r\n<li>Your Costomer</li>\r\n<li>Make Booth</li>\r\n<li>Daily Visitor Report</li>\r\n<li>Digital visit cart</li>\r\n<li>Online Chat</li>\r\n<li>Online Call</li>\r\n</ul>', 2, 3, 20, 10, 20, NULL, 30, '#f39c12', 1, 1, 0, '200.00', '2020-08-21 17:49:19', '2020-08-21 17:49:19'),
(3, '/img/packages/shuttle.png', 'Silver', '<ul class=\"benefit-list\">\r\n<li>2 Video up to 2min and 15MB</li>\r\n<li>Photo 10 up to 15MB</li>\r\n<li>Catalog 10page  up to 20MB</li>\r\n<li>Logo</li>\r\n<li>Company Name</li>\r\n<li>About Company and History</li>\r\n<li>Contact to you</li>\r\n<li>Resume</li>\r\n<li>Your Costomer</li>\r\n<li>Make Booth</li>\r\n<li>Daily Visitor Report</li>\r\n<li>Digital visit cart</li>\r\n<li>Online Chat</li>\r\n</ul>', 2, 2, 15, 10, 15, 10, 20, '#06a9f6', 1, 1, 0, '100.00', '2020-08-21 17:48:14', '2020-08-30 15:24:51');

--
-- Dumping data for table `expo_visits`
--

INSERT INTO `expo_visits` (`id`, `expo_id`, `day`, `count`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-12-18', 6, '2020-12-18 17:03:25', '2020-12-18 17:07:24'),
(2, 2, '2020-12-18', 3, '2020-12-18 17:04:08', '2020-12-18 17:05:33'),
(3, 3, '2020-12-18', 3, '2020-12-18 17:06:04', '2020-12-18 17:06:38'),
(4, 2, '2020-12-19', 1, '2020-12-18 23:16:57', '2020-12-18 23:16:57'),
(5, 8, '2020-12-19', 1, '2020-12-18 23:56:18', '2020-12-18 23:56:18'),
(6, 1, '2020-12-19', 2, '2020-12-19 01:48:31', '2020-12-19 03:21:54'),
(7, 3, '2020-12-19', 1, '2020-12-19 04:04:43', '2020-12-19 04:04:43'),
(8, 5, '2020-12-19', 1, '2020-12-19 15:42:09', '2020-12-19 15:42:09'),
(9, 6, '2020-12-19', 1, '2020-12-19 16:57:56', '2020-12-19 16:57:56'),
(10, 8, '2020-12-20', 1, '2020-12-20 04:19:59', '2020-12-20 04:19:59'),
(11, 3, '2020-12-20', 1, '2020-12-20 05:36:24', '2020-12-20 05:36:24'),
(12, 7, '2020-12-20', 1, '2020-12-20 06:51:33', '2020-12-20 06:51:33'),
(13, 4, '2020-12-20', 1, '2020-12-20 08:07:22', '2020-12-20 08:07:22'),
(14, 6, '2020-12-21', 1, '2020-12-21 03:28:28', '2020-12-21 03:28:28'),
(15, 3, '2020-12-21', 1, '2020-12-21 03:28:37', '2020-12-21 03:28:37'),
(16, 2, '2020-12-21', 2, '2020-12-21 03:28:48', '2020-12-21 05:21:46'),
(17, 8, '2020-12-21', 3, '2020-12-21 03:28:53', '2020-12-21 06:02:49'),
(18, 4, '2020-12-21', 4, '2020-12-21 04:59:14', '2020-12-21 05:23:30'),
(19, 5, '2020-12-21', 1, '2020-12-21 05:22:01', '2020-12-21 05:22:01'),
(20, 4, '2020-12-22', 2, '2020-12-22 03:15:02', '2020-12-22 04:01:22'),
(21, 8, '2020-12-22', 3, '2020-12-22 04:03:09', '2020-12-22 19:20:58'),
(22, 1, '2020-12-22', 3, '2020-12-22 06:13:29', '2020-12-22 06:37:06'),
(23, 5, '2020-12-22', 1, '2020-12-22 11:57:20', '2020-12-22 11:57:20'),
(24, 4, '2020-12-26', 5, '2020-12-26 03:59:02', '2020-12-26 04:53:12'),
(25, 3, '2020-12-26', 2, '2020-12-26 03:59:07', '2020-12-26 17:35:58'),
(26, 8, '2020-12-26', 1, '2020-12-26 03:59:15', '2020-12-26 03:59:15'),
(27, 1, '2020-12-26', 2, '2020-12-26 13:45:35', '2020-12-26 17:37:13'),
(28, 4, '2020-12-27', 1, '2020-12-27 04:47:32', '2020-12-27 04:47:32'),
(29, 8, '2020-12-27', 1, '2020-12-27 04:48:56', '2020-12-27 04:48:56'),
(30, 6, '2020-12-27', 1, '2020-12-27 04:49:10', '2020-12-27 04:49:10'),
(31, 4, '2020-12-29', 3, '2020-12-29 05:33:29', '2020-12-29 06:12:46'),
(32, 7, '2020-12-29', 4, '2020-12-29 05:56:51', '2020-12-29 05:58:34'),
(33, 6, '2020-12-29', 1, '2020-12-29 05:58:07', '2020-12-29 05:58:07'),
(34, 1, '2020-12-29', 1, '2020-12-29 05:59:08', '2020-12-29 05:59:08'),
(35, 5, '2020-12-29', 1, '2020-12-29 05:59:46', '2020-12-29 05:59:46'),
(36, 5, '2020-12-30', 5, '2020-12-30 05:03:40', '2020-12-30 05:19:47'),
(37, 1, '2020-12-30', 1, '2020-12-30 05:18:39', '2020-12-30 05:18:39');

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `title`, `description`, `path`, `created_at`, `updated_at`, `booth_id`, `product_id`) VALUES
(1, 'Koala.jpg', '', '/img/booths/gallery/1608539025_Koala.jpg', '2020-12-21 04:53:45', '2020-12-21 04:53:45', 13, NULL),
(2, 'Lighthouse.jpg', '', '/img/booths/gallery/1608540589_Lighthouse.jpg', '2020-12-21 05:19:49', '2020-12-21 05:19:49', 14, NULL),
(3, 'Desert.jpg', '', '/img/booths/gallery/1608543133_Desert.jpg', '2020-12-21 06:02:13', '2020-12-21 06:02:13', 16, NULL),
(4, 'Desert.jpg', '', '/img/booths/gallery/1608630108_Desert.jpg', '2020-12-22 06:11:48', '2020-12-22 06:11:48', 17, NULL),
(5, 'Lighthouse.jpg', '', '/img/booths/gallery/1608631495_Lighthouse.jpg', '2020-12-22 06:34:55', '2020-12-22 06:34:55', 18, NULL),
(6, '20160306_170014.jpg', '', '/img/booths/gallery/1609057332_20160306_170014.jpg', '2020-12-27 04:52:12', '2020-12-27 04:52:12', 22, NULL),
(7, 'Baymax.jpg', '', '/img/booths/gallery/1609057332_Baymax.jpg', '2020-12-27 04:52:12', '2020-12-27 04:52:12', 22, NULL),
(8, 'me - Copy.jpg', '', '/img/booths/gallery/1609057332_me-Copy.jpg', '2020-12-27 04:52:12', '2020-12-27 04:52:12', 22, NULL),
(9, 'me.jpg', '', '/img/booths/gallery/1609057332_me.jpg', '2020-12-27 04:52:12', '2020-12-27 04:52:12', 22, NULL),
(10, 'Baymax - Copy.jpg', '', '/img/booths/gallery/1609057332_Baymax-Copy.jpg', '2020-12-27 04:52:12', '2020-12-27 04:52:12', 22, NULL),
(11, 'Chrysanthemum.jpg', '', '/img/booths/gallery/1609314551_Chrysanthemum.jpg', '2020-12-30 04:19:11', '2020-12-30 04:19:11', 25, NULL),
(12, 'Desert.jpg', '', '/img/booths/gallery/1609314551_Desert.jpg', '2020-12-30 04:19:11', '2020-12-30 04:19:11', 25, NULL),
(13, 'Hydrangeas.jpg', '', '/img/booths/gallery/1609314551_Hydrangeas.jpg', '2020-12-30 04:19:11', '2020-12-30 04:19:11', 25, NULL),
(14, 'Jellyfish.jpg', '', '/img/booths/gallery/1609314551_Jellyfish.jpg', '2020-12-30 04:19:11', '2020-12-30 04:19:11', 25, NULL),
(15, 'Lighthouse.jpg', '', '/img/booths/gallery/1609314551_Lighthouse.jpg', '2020-12-30 04:19:11', '2020-12-30 04:19:11', 25, NULL),
(16, 'Penguins.jpg', '', '/img/booths/gallery/1609314551_Penguins.jpg', '2020-12-30 04:19:11', '2020-12-30 04:19:11', 25, NULL),
(17, 'Desert.jpg', '', '/img/booths/gallery/1609317417_Desert.jpg', '2020-12-30 05:06:58', '2020-12-30 05:06:58', 26, NULL),
(18, 'Hydrangeas.jpg', '', '/img/booths/gallery/1609317418_Hydrangeas.jpg', '2020-12-30 05:06:58', '2020-12-30 05:06:58', 26, NULL),
(19, 'Jellyfish.jpg', '', '/img/booths/gallery/1609317418_Jellyfish.jpg', '2020-12-30 05:06:58', '2020-12-30 05:06:58', 26, NULL),
(20, 'Koala.jpg', '', '/img/booths/gallery/1609317418_Koala.jpg', '2020-12-30 05:06:58', '2020-12-30 05:06:58', 26, NULL),
(21, 'Lighthouse.jpg', '', '/img/booths/gallery/1609317418_Lighthouse.jpg', '2020-12-30 05:06:58', '2020-12-30 05:06:58', 26, NULL),
(22, 'Penguins.jpg', '', '/img/booths/gallery/1609317418_Penguins.jpg', '2020-12-30 05:06:58', '2020-12-30 05:06:58', 26, NULL),
(23, 'Tulips.jpg', '', '/img/booths/gallery/1609317418_Tulips.jpg', '2020-12-30 05:06:58', '2020-12-30 05:06:58', 26, NULL);

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `title`, `description`, `price`, `price_unit`, `bankName`, `bankCode`, `status`, `type`, `item_name`, `item_id`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'Buy package Silver', 'Buy package Silver with 100.00', '100.00', NULL, 'Test bank', 'Test bank code', 0, 0, 'Industerial Equipment & Energy', 1, '2020-12-17 14:54:03', '2020-12-17 14:54:20', 2),
(2, 'Buy package Golden', 'Buy package Golden with 170.00', '170.00', NULL, 'Test bank', 'Test bank code', 0, 0, 'Electronics & security', 2, '2020-12-17 14:55:07', '2020-12-17 14:55:34', 2),
(3, 'Buy package Basic 1', 'Buy package Basic 1 with 30.00', '30.00', NULL, 'Test bank', 'Test bank code', 0, 0, 'Electronics & security', 3, '2020-12-17 14:55:20', '2020-12-17 14:55:46', 2),
(4, 'Buy Expo package Golden', 'Buy Expo package Golden with 200.00', '200.00', NULL, 'Test bank', 'Test bank code', 0, 1, 'Job Expo 1', 1, '2020-12-17 15:05:50', '2020-12-17 15:07:27', 2),
(5, 'Buy Expo package Silver', 'Buy Expo package Silver with 100.00', '100.00', NULL, 'Test bank', 'Test bank code', 0, 1, 'World fair Expo', 2, '2020-12-17 15:08:19', '2020-12-17 15:09:16', 2),
(6, 'Buy Expo package Basic', 'Buy Expo package Basic with 50.00', '50.00', NULL, 'Test bank', 'Test bank code', 0, 1, 'Future Energy Expo', 3, '2020-12-17 15:10:41', '2020-12-17 15:11:58', 2),
(7, 'Buy Expo package Basic', 'Buy Expo package Basic with 50.00', '50.00', NULL, 'Test bank', 'Test bank code', 0, 1, 'Job Expo 1', 4, '2020-12-17 15:10:59', '2020-12-17 15:14:25', 2),
(8, 'Buy package Basic 1', 'Buy package Basic 1 with 30.00', '30.00', NULL, 'Test bank', 'Test bank code', 0, 0, 'Electronics & security', 4, '2020-12-18 05:03:19', '2020-12-18 05:03:32', 2),
(9, 'Buy Expo package Golden', 'Buy Expo package Golden with 200.00', '200.00', NULL, 'Test bank', 'Test bank code', 0, 1, 'Job Expo 1', 5, '2020-12-18 09:58:52', '2020-12-18 09:59:22', 2),
(10, 'Buy Expo package Silver', 'Buy Expo package Silver with 100.00', '100.00', NULL, 'Test bank', 'Test bank code', 0, 1, 'Job Expo 1', 6, '2020-12-18 09:59:55', '2020-12-18 10:00:19', 2),
(11, 'Buy package Golden', 'Buy package Golden with 170.00', '170.00', NULL, 'Test bank', 'Test bank code', 0, 0, 'Electronics & security', 5, '2020-12-18 10:32:51', '2020-12-18 10:33:01', 2),
(12, 'Buy package Silver', 'Buy package Silver with 100.00', '100.00', NULL, 'Test bank', 'Test bank code', 0, 0, 'Health & Medicine', 6, '2020-12-18 14:22:35', '2020-12-18 14:22:51', 5),
(13, 'Buy package Basic 1', 'Buy package Basic 1 with 30.00', '30.00', NULL, 'Test bank', 'Test bank code', 0, 0, 'Health & Medicine', 7, '2020-12-18 14:23:04', '2020-12-18 14:23:13', 5),
(14, 'Buy Expo package Silver', 'Buy Expo package Silver with 100.00', '100.00', NULL, 'Test bank', 'Test bank code', 0, 1, 'Job Expo 1', 7, '2020-12-18 14:23:37', '2020-12-18 14:27:23', 5),
(15, 'Buy package Silver', 'Buy package Silver with 100.00', '100.00', NULL, 'Test bank', 'Test bank code', 0, 0, 'Consumer Good & Daily Use.', 8, '2020-12-19 04:06:15', '2020-12-19 04:07:04', 2),
(16, 'Buy package Basic 1', 'Buy package Basic 1 with 30.00', '30.00', NULL, 'Test bank', 'Test bank code', 0, 0, 'Fasion & Popular Items', 9, '2020-12-19 04:08:01', '2020-12-19 04:08:10', 2),
(17, 'Buy Expo package Silver', 'Buy Expo package Silver with 100.00', '100.00', NULL, 'Test bank', 'Test bank code', 0, 1, 'Gaming Expo', 8, '2020-12-19 04:08:56', '2020-12-19 04:11:30', 2),
(18, 'Buy package test pack', 'Buy package test pack with 2.00', '2.00', NULL, 'Test bank', 'Test bank code', 0, 0, 'test cat', 10, '2020-12-21 03:51:08', '2020-12-21 03:51:49', 9),
(19, 'Buy package Golden', 'Buy package Golden with 170.00', '170.00', NULL, 'Test bank', 'Test bank code', 0, 0, 'Manufacturing & Processing Machanery', 11, '2020-12-21 03:52:21', '2020-12-21 03:52:33', 9),
(20, 'Buy package Silver', 'Buy package Silver with 100.00', '100.00', NULL, 'Test bank', 'Test bank code', 0, 0, 'Industerial Equipment & Energy', 12, '2020-12-21 03:54:40', '2020-12-21 03:55:40', 9),
(21, 'Buy package Basic 1', 'Buy package Basic 1 with 30.00', '30.00', NULL, 'Test bank', 'Test bank code', 0, 0, 'Industerial Equipment & Energy', 13, '2020-12-21 03:54:54', '2020-12-21 03:55:09', 9),
(22, 'Buy package gollld', 'Buy package gollld with 0.00', '0.00', NULL, 'Test bank', 'Test bank code', 0, 0, 'test cat', 14, '2020-12-21 03:58:01', '2020-12-21 03:58:33', 9),
(23, 'Buy Expo package Silver', 'Buy Expo package Silver with 100.00', '100.00', NULL, 'Test bank', 'Test bank code', 0, 1, 'Swiss Expo', 9, '2020-12-21 04:40:41', '2020-12-21 04:53:45', 9),
(24, 'Buy package gollld', 'Buy package gollld with 0.00', '0.00', NULL, 'Test bank', 'Test bank code', 0, 0, 'Manufacturing & Processing Machanery', 15, '2020-12-21 04:42:15', '2020-12-26 05:03:10', 9),
(25, 'Buy Expo package Basic', 'Buy Expo package Basic with 50.00', '50.00', NULL, 'Test bank', 'Test bank code', 0, 1, 'Tech Expo', 10, '2020-12-21 05:17:37', '2020-12-21 05:19:49', 9),
(26, 'Buy Expo package Golden', 'Buy Expo package Golden with 200.00', '200.00', NULL, 'Test bank', 'Test bank code', 0, 1, 'Future Energy Expo', 11, '2020-12-21 05:38:11', '2020-12-21 05:40:13', 9),
(27, 'Buy Expo package Silver', 'Buy Expo package Silver with 100.00', '100.00', NULL, 'Test bank', 'Test bank code', 0, 1, 'World fair Expo', 12, '2020-12-21 05:59:44', '2020-12-21 06:02:13', 9),
(28, 'Buy Expo package Golden', 'Buy Expo package Golden with 200.00', '200.00', NULL, 'Test bank', 'Test bank code', 0, 1, 'Job Expo 1', 13, '2020-12-22 06:06:33', '2020-12-22 06:11:48', 9),
(29, 'Buy Expo package Basic', 'Buy Expo package Basic with 50.00', '50.00', NULL, 'Test bank', 'Test bank code', 0, 1, 'Job Expo 1', 14, '2020-12-22 06:26:45', '2020-12-22 06:34:55', 9),
(30, 'Buy Expo package Golden', 'Buy Expo package Golden with 200.00', '200.00', NULL, 'Test bank', 'Test bank code', 0, 1, 'Job Expo 1', 15, '2020-12-22 06:49:42', '2020-12-22 06:56:42', 9),
(31, 'Buy Expo package Golden', 'Buy Expo package Golden with 200.00', '200.00', NULL, 'Test bank', 'Test bank code', 0, 1, 'Swiss Expo', 16, '2020-12-26 04:22:20', '2020-12-26 04:29:33', 9),
(32, 'Buy Expo package Silver', 'Buy Expo package Silver with 100.00', '100.00', NULL, 'Test bank', 'Test bank code', 0, 1, '', 17, '2020-12-26 04:55:54', '2020-12-26 04:55:54', 9),
(33, 'Buy Expo package Silver', 'Buy Expo package Silver with 100.00', '100.00', NULL, 'Test bank', 'Test bank code', 0, 1, 'Job Expo 1', 18, '2020-12-26 04:56:33', '2020-12-29 06:21:14', 9),
(34, 'Buy package gollld', 'Buy package gollld with 0.00', '0.00', NULL, 'Test bank', 'Test bank code', 0, 0, '', 16, '2020-12-26 05:02:54', '2020-12-26 05:02:54', 9),
(35, 'Buy package test', 'Buy package test with 0.00', '0.00', NULL, 'Test bank', 'Test bank code', 0, 0, 'Industerial Equipment & Energy', 17, '2020-12-26 05:03:44', '2020-12-26 05:03:56', 9),
(36, 'Buy Expo package Golden', 'Buy Expo package Golden with 200.00', '200.00', NULL, 'Test bank', 'Test bank code', 0, 1, 'Job Expo 1', 19, '2020-12-26 13:43:01', '2020-12-26 13:44:04', 2),
(37, 'Buy Expo package Basic', 'Buy Expo package Basic with 50.00', '50.00', NULL, 'Test bank', 'Test bank code', 0, 1, 'Job Expo 1', 20, '2020-12-27 04:50:41', '2020-12-27 04:52:12', 2),
(38, 'Buy Expo package Basic', 'Buy Expo package Basic with 50.00', '50.00', NULL, 'Test bank', 'Test bank code', 0, 1, 'Tech Expo', 21, '2020-12-29 06:22:35', '2020-12-29 06:27:34', 9),
(39, 'Buy Expo package Golden', 'Buy Expo package Golden with 200.00', '200.00', NULL, 'Test bank', 'Test bank code', 0, 1, 'Tech Expo', 22, '2020-12-30 04:03:16', '2020-12-30 04:19:11', 9),
(40, 'Buy Expo package Silver', 'Buy Expo package Silver with 100.00', '100.00', NULL, 'Test bank', 'Test bank code', 0, 1, 'Tech Expo', 23, '2020-12-30 04:20:08', '2020-12-30 05:06:58', 9),
(41, 'Buy Expo package Basic', 'Buy Expo package Basic with 50.00', '50.00', NULL, 'Test bank', 'Test bank code', 0, 1, '', 24, '2020-12-30 04:50:18', '2020-12-30 04:50:18', 9);

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `title`, `description`, `file`, `type`, `status`, `created_at`, `updated_at`, `ticket_id`, `sender_id`) VALUES
(1, 'test3', 'test5', '/img/tickets/1608231420_IMG_8502~photo.jpeg', 0, 0, '2020-12-17 15:27:00', '2020-12-17 15:27:00', 1, 2),
(2, 'test', 'test', '/img/tickets/1608231439_IMG_8502~photo.jpeg', 0, 0, '2020-12-17 15:27:19', '2020-12-17 15:27:19', 1, 2),
(3, 't1', 'd1', '/img/tickets/1608631924_5.16mb1.24min.mp4', 0, 0, '2020-12-22 06:42:04', '2020-12-22 06:42:04', 2, 9),
(4, 'j1', 'dj2', '/img/tickets/1608632011_0.374mb15s.mp4', 0, 0, '2020-12-22 06:43:31', '2020-12-22 06:43:31', 2, 1),
(5, 't2', 'd2', '/img/tickets/1608632062_رویجلدرزومه.pdf', 0, 0, '2020-12-22 06:44:22', '2020-12-22 06:44:22', 3, 9),
(6, 'j2', 'dj2', '/img/tickets/1608632173_1.pdf', 0, 0, '2020-12-22 06:46:13', '2020-12-22 06:46:13', 3, 1),
(7, 't22', 'dj22', '/img/tickets/1608968048_رویجلدرزومه.pdf', 0, 0, '2020-12-26 04:04:08', '2020-12-26 04:04:08', 3, 9);

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `pic`, `title`, `description`, `color`, `type`, `status`, `duration`, `price`, `created_at`, `updated_at`) VALUES
(1, '/img/packages/send.png', 'Basic 1', '<ul class=\"benefit-list\"> <li>Video 1min up to 10MB</li> <li>Photo 5 up to 10MB</li> <li>Catalog 5page up to 10MB</li> <li>Logo</li> <li>Company Name</li> <li>About Company and History</li> <li>Contact to you</li> <li>Resume</li> <li>Your Costomer</li> <li>Make Booth</li> <li>Daily Visitor Report</li> </ul>', '#ff8080', 1, 1, 12, '30.00', '2020-08-21 17:48:14', '2020-12-21 04:38:10'),
(2, '/img/packages/crown.png', 'Golden', '<ul class=\"benefit-list\"> <li>3 Video up to 2min and 10MB</li> <li>Photo 10 up to 20MB</li> <li>Catalog up to 30MB</li> <li>Logo</li> <li>Company Name</li> <li>About Company and History</li> <li>Contact to you</li> <li>Resume</li> <li>Your Costomer</li> <li>Make Booth</li> <li>Daily Visitor Report</li> <li>Digital visit cart</li> <li>Online Chat</li> <li>Online Call</li> </ul>', '#f39c12', 1, 1, 12, '170.00', '2020-08-21 17:49:19', '2020-12-10 23:28:20'),
(3, '/img/packages/shuttle.png', 'Silver', '<ul class=\"benefit-list\">\r\n<li>2 Video up to 2min and 15MB</li>\r\n<li>Photo 10 up to 15MB</li>\r\n<li>Catalog 10page  up to 20MB</li>\r\n<li>Logo</li>\r\n<li>Company Name</li>\r\n<li>About Company and History</li>\r\n<li>Contact to you</li>\r\n<li>Resume</li>\r\n<li>Your Costomer</li>\r\n<li>Make Booth</li>\r\n<li>Daily Visitor Report</li>\r\n<li>Digital visit cart</li>\r\n<li>Online Chat</li>\r\n</ul>', '#808080', 1, 1, 24, '100.00', '2020-08-21 17:48:14', '2020-12-21 03:38:20'),
(4, '', 'gollld', '<ul class=\"benefit-list\"> <li>Video 1min up to 10MB</li> <li>Photo 5 up to 10MB</li> <li>Catalog 5page up to 10MB</li> <li>Logo</li> <li>Company Name</li> <li>About Company and History</li> <li>Contact to you</li> <li>Resume</li> <li>Your Costomer</li> <li>Make Booth</li> <li>Daily Visitor Report</li> </ul>', '#80ffff', 0, 0, 6, '0.00', '2020-12-12 10:59:10', '2020-12-21 04:35:15'),
(5, '', 'test pack', '<ul class=\"benefit-list\"> <li>2 Video up to 2min and 15MB</li> <li>Photo 10 up to 15MB</li> <li>Catalog 10page up to 20MB</li> <li>Logo</li> <li>Company Name</li> <li>About Company and History</li> <li>Contact to you</li> <li>Resume</li> <li>Your Costomer</li> <li>Make Booth</li> <li>Daily Visitor Report</li> <li>Digital visit cart</li> <li>Online Chat</li> </ul>', '#000000', 0, 0, 1, '2.00', '2020-12-21 03:50:24', '2020-12-21 04:31:43'),
(6, '', 'test', '<ul class=\"benefit-list\"> <li>2 Video up to 2min and 15MB</li> <li>Photo 10 up to 15MB</li> <li>Catalog 10page up to 20MB</li> <li>Logo</li> <li>Company Name</li> <li>About Company and History</li> <li>Contact to you</li> <li>Resume</li> <li>Your Costomer</li> <li>Make Booth</li> <li>Daily Visitor Report</li> <li>Digital visit cart</li> <li>Online Chat</li> </ul>', '#ff0080', 0, 0, 2, '0.00', '2020-12-21 04:27:01', '2020-12-21 04:31:10'),
(7, '', 'expo test pack', '<ul class=\"benefit-list\"> <li>2 Video up to 2min and 15MB</li> <li>Photo 10 up to 15MB</li> <li>Catalog 10page up to 20MB</li> <li>Logo</li> <li>Company Name</li> <li>About Company and History</li> <li>Contact to you</li> <li>Resume</li> <li>Your Costomer</li> <li>Make Booth</li> <li>Daily Visitor Report</li> <li>Digital visit cart</li> <li>Online Chat</li> </ul>', '#ff0080', 0, 0, 3, '3.00', '2020-12-21 04:28:26', '2020-12-21 04:31:50');

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `pic`, `title`, `abstract`, `description`, `status`, `subject_id`, `created_at`, `updated_at`) VALUES
(1, '/img/posts/pic.jpg', 'Start our website', 'you can register and make user.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 0, '2020-08-31 02:19:27', '2020-08-31 02:19:27');

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `title`, `description`, `other`, `url`, `info`, `created_at`, `updated_at`) VALUES
(1, 'tel', NULL, '+98 1155230030', NULL, NULL, NULL, '2020-08-27 18:35:32', '2020-12-07 09:13:26'),
(2, 'address', NULL, 'Ramsar, Narenjbon, Number 1458', NULL, NULL, NULL, '2020-08-27 18:35:32', '2020-12-07 19:45:19'),
(3, 'logo', NULL, '/img/Logo.png', NULL, NULL, NULL, '2020-08-27 18:35:32', '2020-08-27 18:35:32'),
(4, 'footer', NULL, NULL, NULL, NULL, '<section id=\"footer\" class=\"text-center\">  <div class=\"container\"> <a class=\"navbar-brand\" href=\"#\"><img  src=\"/img/Logo.png\"  height=\"50\"  class=\"d-inline-block align-top\"  alt=\"\"  loading=\"lazy\"/> </a> <p>Enjoy a full day with Gravitas Beauty Expo designed for beauty brandfounders to connect, vend and be supported by beauty lovers, buyers,influencers and press. </p> <p><i class=\"fas fa-phone-alt\"></i> +98 11 55228001</p> <p><i class=\"fas fa-at\"></i> info@Expo.com</p> <div class=\"social-network\"><a href=\"#\">  <i class=\"fab fa-facebook-f\"></i></a><a href=\"#\">  <i class=\"fab fa-twitter\"></i></a><a href=\"#\">  <i class=\"fab fa-instagram\"></i></a><a href=\"#\">  <i class=\"fab fa-google-plus-g\"></i></a><a href=\"#\">  <i class=\"fab fa-telegram-plane\"></i></a> </div>  </div></section><section id=\"copyright\" class=\"text-center\">  <p>©Copyright | Expo 2020. All Right Reserved. v0.1</p></section>', '2020-08-27 18:37:29', '2020-12-02 05:55:40'),
(5, 'exhibitor_benefit', 'Our Benefit for Exhibitors', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida neque convallis a cras. Dictumst quisque sagittis purus sit', 'Register', '/register', NULL, '2020-08-29 22:31:21', '2020-08-29 22:31:21'),
(6, 'visitor_benefit', 'Our Benefit for Visitors', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida neque convallis a cras. Dictumst quisque sagittis purus sit', 'See Expos', '/expos', NULL, '2020-08-29 22:31:21', '2020-08-29 22:31:21'),
(7, 'facebook', NULL, 'https://facebook.com', NULL, NULL, NULL, '2020-09-02 22:23:33', '2020-12-07 08:41:17'),
(8, 'twitter', NULL, 'https://twitter.com', NULL, NULL, NULL, '2020-09-02 22:23:33', '2020-09-02 22:25:18'),
(9, 'instagram', NULL, 'https://instagram.com/pejvak.app', NULL, NULL, NULL, '2020-09-02 22:23:33', '2020-12-02 05:47:48'),
(10, 'telegram', NULL, 'https://telegram.me', NULL, NULL, NULL, '2020-09-02 22:23:33', '2020-09-02 22:25:18');

--
-- Dumping data for table `site_visits`
--

INSERT INTO `site_visits` (`id`, `day`, `count`, `created_at`, `updated_at`) VALUES
(1, '2020-12-17', 13, '2020-12-18 00:23:26', '2020-12-17 15:26:25'),
(2, '2020-12-18', 29, '2020-12-17 21:31:00', '2020-12-18 19:29:37'),
(3, '2020-12-19', 19, '2020-12-18 20:46:12', '2020-12-19 15:23:17'),
(4, '2020-12-20', 7, '2020-12-19 22:53:16', '2020-12-20 20:13:29'),
(5, '2020-12-21', 66, '2020-12-20 21:23:52', '2020-12-21 19:29:20'),
(6, '2020-12-22', 43, '2020-12-21 22:00:53', '2020-12-22 14:44:33'),
(7, '2020-12-23', 11, '2020-12-22 23:55:59', '2020-12-23 18:39:51'),
(8, '2020-12-24', 7, '2020-12-23 23:40:54', '2020-12-24 18:39:18'),
(9, '2020-12-25', 5, '2020-12-25 00:48:45', '2020-12-25 18:27:02'),
(10, '2020-12-26', 76, '2020-12-26 03:58:46', '2020-12-26 17:38:13'),
(11, '2020-12-27', 31, '2020-12-26 22:38:35', '2020-12-27 18:39:20'),
(12, '2020-12-28', 13, '2020-12-28 00:22:09', '2020-12-28 13:51:18'),
(13, '2020-12-29', 37, '2020-12-29 05:29:03', '2020-12-29 16:37:12'),
(14, '2020-12-30', 37, '2020-12-29 22:11:22', '2020-12-30 13:46:44');

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `pic`, `title`, `description`, `btn_title`, `btn_link`, `created_at`, `updated_at`) VALUES
(1, '/img/slider/Landing.png', 'Build<br/>Something', 'Register to access to all the utilities..', 'Become An Exhibitors', '/register', '2020-08-28 15:00:18', '2020-11-28 06:31:02');

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id`, `title`, `pic`, `theme_id`, `theme_url`, `theme`, `created_at`, `updated_at`) VALUES
(1, 'Theme 1', '/img/theme/1.jpg', 'theme-1', 'home.themes.theme1', 'theme1', '2020-08-21 17:25:14', '2020-08-21 17:25:14'),
(2, 'Theme 2', '/img/theme/2.jpg', 'theme-2', 'home.themes.theme2', 'theme2', '2020-08-21 17:25:38', '2020-08-21 17:25:38'),
(3, 'Theme 3', '/img/theme/3.jpg', 'theme-3', 'home.themes.theme3', 'theme3', '2020-08-21 17:25:53', '2020-08-21 17:25:53'),
(4, 'Theme 4', '/img/theme/4.jpg', 'theme-4', 'home.themes.theme4', 'theme4', '2020-08-21 17:26:08', '2020-08-21 17:26:08'),
(5, 'Theme 5', '/img/theme/5.jpg', 'theme-5', 'home.themes.theme5', 'theme5', '2020-08-21 17:26:22', '2020-08-21 17:26:22'),
(6, 'Theme 6', '/img/theme/6.jpg', 'theme-6', 'home.themes.theme6', 'theme6', '2020-08-21 17:26:36', '2020-08-21 17:26:36');

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `title`, `description`, `name`, `email`, `type`, `status`, `created_at`, `updated_at`, `sender_id`, `receiver_id`) VALUES
(1, 'test3', 'test5', 'mohsen', 'user@namayeshagh.ir', 1, 2, '2020-12-17 15:27:00', '2020-12-17 15:27:19', 2, NULL),
(2, 't1', 'd1', 'hoomanat', 'hoom@gmail.com', 1, 3, '2020-12-22 06:42:04', '2020-12-22 06:46:50', 9, 1),
(3, 't2', 'd2', 'hoomanat', 'hoom@gmail.com', 2, 2, '2020-12-22 06:44:22', '2020-12-26 04:04:08', 9, 1);

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `avatar`, `color`, `theme`, `address`, `mobile`, `tel`, `country`, `website`, `presenter`, `presenter_id`, `role_id`) VALUES
(1, 'admin', 'admin@namayeshagh.ir', NULL, '$2y$10$BIY7vkwbbCUhaf6Bj1fgmeYoGHcnCG7hm1l3boydkuR00ggxrMjc6', 'cO2XCwXICCtngf4uKoP3BkPUg2wTB186320LKu3Y3mcoZTR3YbcbQjgVf8V3', '2020-08-17 04:34:30', '2020-12-14 12:26:24', '', '#000000', '', 'hjjk', '256636562', '525', 'gghjhjhh', '', NULL, NULL, 1),
(2, 'mohsen', 'user@namayeshagh.ir', NULL, '$2y$10$i/17B1abjIHA4W99BlDQBOfKtooxSjzDWoMK95S33GdYk7rWidJQu', 'Hm5OOV4uulcpKZItBkkVBDL6qTxeJG42N5AzKl1YsUsOAljmHVghhfDNxt0E', '2020-08-17 04:34:58', '2020-09-04 14:43:24', '/img/avatars/1599286404_apple.jpg', '#000000', '', 'Ramsar NarenjBon', '09111111', '', '', '', NULL, NULL, 0),
(3, 'RobertoPiraloff', 'robert-piraloff@gmail.com', NULL, '$2y$10$jAzKaKWy8j8Taivs/BqCauHMHFoOE2rqOdQ.A6zaH9/0F1W67IFCW', NULL, '2020-11-19 00:00:27', '2020-11-19 00:00:27', '', '', '', '', '', '', '', '', NULL, NULL, 0),
(4, 'hadi roshan', 'roshan.hadi@gmail.com', NULL, '$2y$10$u2w6n68w4jbI187QL6He7eh5TSx3ZSQ9JwuLHdV1yZjAz9zyIVZR.', NULL, '2020-11-26 02:26:59', '2020-12-01 05:54:41', '', '#000000', '', '', '', '', '', '', NULL, NULL, 0),
(5, 'hooman', 'hooman_ramsar@yahoo.com', NULL, '$2y$10$S1qfIEp24Uo3LYpibpSKReZOzClFExP9SL/tupJRTcvq3D2W3BOPe', NULL, '2020-12-18 14:22:01', '2020-12-18 14:22:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(6, 'esmaeili', 'esmaeili@pdade.net', NULL, '$2y$10$C0Kct7lt/3d/Rlv1ZTPgn.RuO0jXzrh16u9lBzRnlwGkvPzW5kfve', NULL, '2020-12-19 04:14:09', '2020-12-19 04:14:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(9, 'hoomanat', 'hoom@gmail.com', NULL, '$2y$10$Wf2lBQGCP19f8IFJVN/vJuoJ0hV9hzwH95R9txAcgbQCa9mzU.aLO', NULL, '2020-12-21 03:32:29', '2020-12-22 06:48:55', '/img/avatars/1608632335_Tulips.jpg', '#000000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

--
-- Dumping data for table `user_categories`
--

INSERT INTO `user_categories` (`id`, `category_id`, `user_id`, `user_package_id`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 1, '2020-12-17 14:54:20', '2020-12-17 14:54:20'),
(2, 4, 2, 2, '2020-12-17 14:55:34', '2020-12-17 14:55:34'),
(3, 4, 2, 3, '2020-12-17 14:55:46', '2020-12-17 14:55:46'),
(4, 4, 2, 4, '2020-12-18 05:03:32', '2020-12-18 05:03:32'),
(5, 4, 2, 5, '2020-12-18 10:33:01', '2020-12-18 10:33:01'),
(6, 5, 5, 6, '2020-12-18 14:22:51', '2020-12-18 14:22:51'),
(7, 5, 5, 7, '2020-12-18 14:23:13', '2020-12-18 14:23:13'),
(8, 7, 2, 8, '2020-12-19 04:07:04', '2020-12-19 04:07:04'),
(9, 8, 2, 9, '2020-12-19 04:08:10', '2020-12-19 04:08:10'),
(10, 10, 9, 10, '2020-12-21 03:51:49', '2020-12-21 03:51:49'),
(11, 1, 9, 11, '2020-12-21 03:52:33', '2020-12-21 03:52:33'),
(12, 2, 9, 13, '2020-12-21 03:55:09', '2020-12-21 03:55:09'),
(13, 2, 9, 12, '2020-12-21 03:55:40', '2020-12-21 03:55:40'),
(14, 10, 9, 14, '2020-12-21 03:58:33', '2020-12-21 03:58:33'),
(15, 1, 9, 15, '2020-12-26 05:03:10', '2020-12-26 05:03:10'),
(16, 2, 9, 17, '2020-12-26 05:03:56', '2020-12-26 05:03:56');

--
-- Dumping data for table `user_expo_packages`
--

INSERT INTO `user_expo_packages` (`id`, `title`, `description`, `start`, `end`, `type`, `status`, `booth_id`, `created_at`, `updated_at`, `user_id`, `expo_package_id`, `invoice_id`) VALUES
(1, 'Golden', '', NULL, NULL, 1, 1, 1, '2020-12-17 15:05:50', '2020-12-17 15:07:27', 2, 2, 4),
(2, 'Silver', '', NULL, NULL, 1, 1, 3, '2020-12-17 15:08:19', '2020-12-17 15:09:16', 2, 3, 5),
(3, 'Basic', '', NULL, NULL, 1, 1, 6, '2020-12-17 15:10:41', '2020-12-17 15:11:58', 2, 1, 6),
(4, 'Basic', '', NULL, NULL, 1, 1, 8, '2020-12-17 15:10:59', '2020-12-17 15:14:30', 2, 1, 7),
(5, 'Golden', '', NULL, NULL, 1, 1, 9, '2020-12-18 09:58:52', '2020-12-18 09:59:22', 2, 2, 9),
(6, 'Silver', '', NULL, NULL, 1, 1, 10, '2020-12-18 09:59:55', '2020-12-18 10:00:19', 2, 3, 10),
(7, 'Silver', '', NULL, NULL, 1, 1, 11, '2020-12-18 14:23:37', '2020-12-18 14:27:23', 5, 3, 14),
(8, 'Silver', '', NULL, NULL, 1, 1, 12, '2020-12-19 04:08:56', '2020-12-19 04:11:30', 2, 3, 17),
(9, 'Silver', '', NULL, NULL, 1, 1, 13, '2020-12-21 04:40:41', '2020-12-21 04:53:45', 9, 3, 23),
(10, 'Basic', '', NULL, NULL, 1, 1, 14, '2020-12-21 05:17:37', '2020-12-21 05:19:49', 9, 1, 25),
(11, 'Golden', '', NULL, NULL, 1, 1, 15, '2020-12-21 05:38:11', '2020-12-21 05:40:13', 9, 2, 26),
(12, 'Silver', '', NULL, NULL, 1, 1, 16, '2020-12-21 05:59:44', '2020-12-21 06:02:13', 9, 3, 27),
(13, 'Golden', '', NULL, NULL, 1, 1, 17, '2020-12-22 06:06:33', '2020-12-22 06:11:48', 9, 2, 28),
(14, 'Basic', '', NULL, NULL, 1, 1, 18, '2020-12-22 06:26:45', '2020-12-22 06:34:55', 9, 1, 29),
(15, 'Golden', '', NULL, NULL, 1, 1, 19, '2020-12-22 06:49:42', '2020-12-22 06:56:42', 9, 2, 30),
(16, 'Golden', '', NULL, NULL, 1, 1, 20, '2020-12-26 04:22:20', '2020-12-26 04:29:33', 9, 2, 31),
(17, 'Silver', '', NULL, NULL, 1, 0, NULL, '2020-12-26 04:55:54', '2020-12-26 04:55:54', 9, 3, 32),
(18, 'Silver', '', NULL, NULL, 1, 1, 23, '2020-12-26 04:56:33', '2020-12-29 06:21:14', 9, 3, 33),
(19, 'Golden', '', NULL, NULL, 1, 1, 21, '2020-12-26 13:43:01', '2020-12-26 13:44:04', 2, 2, 36),
(20, 'Basic', '', NULL, NULL, 1, 1, 22, '2020-12-27 04:50:41', '2020-12-27 04:52:12', 2, 1, 37),
(21, 'Basic', '', NULL, NULL, 1, 1, 24, '2020-12-29 06:22:35', '2020-12-29 06:27:34', 9, 1, 38),
(22, 'Golden', '', NULL, NULL, 1, 1, 25, '2020-12-30 04:03:16', '2020-12-30 04:19:11', 9, 2, 39),
(23, 'Silver', '', NULL, NULL, 1, 1, 26, '2020-12-30 04:20:08', '2020-12-30 05:06:58', 9, 3, 40),
(24, 'Basic', '', NULL, NULL, 1, 0, NULL, '2020-12-30 04:50:18', '2020-12-30 04:50:18', 9, 1, 41);

--
-- Dumping data for table `user_packages`
--

INSERT INTO `user_packages` (`id`, `title`, `description`, `start`, `end`, `type`, `status`, `created_at`, `updated_at`, `user_id`, `package_id`, `invoice_id`) VALUES
(1, 'Silver', '', '2020-12-17 18:24:20', '2022-12-17 18:24:20', 1, 1, '2020-12-17 14:54:03', '2020-12-17 14:54:20', 2, 3, 1),
(2, 'Golden', '', '2020-12-17 18:25:34', '2021-12-17 18:25:34', 1, 1, '2020-12-17 14:55:07', '2020-12-17 14:55:34', 2, 2, 2),
(3, 'Basic 1', '', '2020-12-17 18:25:46', '2021-12-17 18:25:46', 1, 1, '2020-12-17 14:55:20', '2020-12-17 14:55:46', 2, 1, 3),
(4, 'Basic 1', '', '2020-12-18 08:33:32', '2021-12-18 08:33:32', 1, 1, '2020-12-18 05:03:19', '2020-12-18 05:03:32', 2, 1, 8),
(5, 'Golden', '', '2021-12-18 08:33:32', '2022-12-18 08:33:32', 1, 1, '2020-12-18 10:32:51', '2020-12-18 10:33:01', 2, 2, 11),
(6, 'Silver', '', '2020-12-18 17:52:51', '2022-12-18 17:52:51', 1, 1, '2020-12-18 14:22:35', '2020-12-18 14:22:51', 5, 3, 12),
(7, 'Basic 1', '', '2022-12-18 17:52:51', '2023-12-18 17:52:51', 1, 1, '2020-12-18 14:23:04', '2020-12-18 14:23:13', 5, 1, 13),
(8, 'Silver', '', '2020-12-19 07:37:04', '2022-12-19 07:37:04', 1, 1, '2020-12-19 04:06:15', '2020-12-19 04:07:04', 2, 3, 15),
(9, 'Basic 1', '', '2020-12-19 07:38:10', '2021-12-19 07:38:10', 1, 1, '2020-12-19 04:08:01', '2020-12-19 04:08:10', 2, 1, 16),
(10, 'test pack', '', '2020-12-21 07:21:49', '2021-01-21 07:21:49', 0, 1, '2020-12-21 03:51:08', '2020-12-21 03:51:49', 9, 5, 18),
(11, 'Golden', '', '2020-12-21 07:22:33', '2021-12-21 07:22:33', 1, 1, '2020-12-21 03:52:21', '2020-12-21 03:52:33', 9, 2, 19),
(12, 'Silver', '', '2023-12-17 18:24:20', '2025-12-17 18:24:20', 1, 1, '2020-12-21 03:54:40', '2020-12-21 03:55:40', 9, 3, 20),
(13, 'Basic 1', '', '2022-12-17 18:24:20', '2023-12-17 18:24:20', 1, 1, '2020-12-21 03:54:54', '2020-12-21 03:55:09', 9, 1, 21),
(14, 'gollld', '', '2021-01-21 07:21:49', '2021-07-21 07:21:49', 0, 1, '2020-12-21 03:58:01', '2020-12-21 03:58:33', 9, 4, 22),
(15, 'gollld', '', '2021-12-21 07:22:33', '2022-06-21 07:22:33', 0, 1, '2020-12-21 04:42:15', '2020-12-26 05:03:10', 9, 4, 24),
(16, 'gollld', '', NULL, NULL, 0, 0, '2020-12-26 05:02:54', '2020-12-26 05:02:54', 9, 4, 34),
(17, 'test', '', '2025-12-17 18:24:20', '2026-02-17 18:24:20', 0, 1, '2020-12-26 05:03:44', '2020-12-26 05:03:56', 9, 6, 35);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
