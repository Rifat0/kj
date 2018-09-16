-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2018 at 07:40 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kajandi`
--

-- --------------------------------------------------------

--
-- Table structure for table `banar`
--

CREATE TABLE `banar` (
  `banar_id` int(10) UNSIGNED NOT NULL,
  `banar_image` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banar_text` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banar_url` varchar(450) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banar`
--

INSERT INTO `banar` (`banar_id`, `banar_image`, `banar_text`, `banar_url`, `created_at`, `updated_at`) VALUES
(1, '2025.jpg', 'fdhfghfgh', 'fdghfgfghhfghfgh', NULL, NULL),
(2, '9636.jpg', 'fghgfj', 'fghjghj', '2018-09-13 05:46:16', NULL),
(3, '7186.jpg', 'Info booth', 'http://192.168.0.103/kajandi/admin/add_banar', '2018-09-14 21:48:05', NULL);

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
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2018_08_15_101257_create_category_table', 1),
(7, '2018_09_13_050215_create_product_sub_category', 2),
(8, '2018_09_13_113146_create_banar_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_image` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_abbreviation` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoty_position` tinyint(3) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`category_id`, `category_image`, `category_name`, `category_description`, `category_abbreviation`, `categoty_position`, `created_at`, `updated_at`) VALUES
(2, '1646.jpg', 'dfsdfsd', 'sdfsdf', 'dsfsd', NULL, '2018-09-12 22:50:32', '2018-09-13 03:30:13'),
(3, '7492.svg', 'New category', 'New category', 'New category', NULL, '2018-09-13 04:14:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_sub_category`
--

CREATE TABLE `product_sub_category` (
  `sub_category_id` int(10) UNSIGNED NOT NULL,
  `category_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category_description` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category_abbreviation` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_sub_category`
--

INSERT INTO `product_sub_category` (`sub_category_id`, `category_id`, `sub_category_name`, `sub_category_description`, `sub_category_abbreviation`, `created_at`, `updated_at`) VALUES
(2, '3', '1', '2', '3', '2018-09-13 04:22:15', '2018-09-13 04:39:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_general_settings`
--

CREATE TABLE `vendor_general_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `geocode` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkdin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `googlePlus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `administrationLanguage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `storeLogo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `storeIcon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor_general_settings`
--

INSERT INTO `vendor_general_settings` (`id`, `name`, `owner`, `address`, `geocode`, `email`, `telephone`, `fax`, `facebook`, `twitter`, `linkdin`, `googlePlus`, `instagram`, `pinterest`, `country`, `language`, `state`, `administrationLanguage`, `storeLogo`, `storeIcon`, `copyright`, `created_at`, `updated_at`) VALUES
(1, 'Kajandifhfghfg', 'Owner', 'Nigeria', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16144500.3022037!2d-0.36746026228187517!3d8.923358659835959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0baf7da48d0d%3A0x99a8fe4168c50bc8!2sNigeria!5e0!3m2!1sen!2sbd!4v1536749004366\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'support@kajandi.com', '+88012345678911', NULL, 'facebook.com', 'twitter.com', 'linkedin.com', 'plus.google.com', 'instagram.com', 'pinterest.com', '-- Select Country --', '-- Select Language --', '-- Select Region/State --', '-- Select Administration Language --', '1993.PNG', '7271.PNG', 'Kajandi', '2018-04-28 21:00:00', '2018-05-24 02:39:42');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_payment_delivery`
--

CREATE TABLE `vendor_payment_delivery` (
  `id` int(11) NOT NULL,
  `smallOrdersAccepted` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minimumOrderQuantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unitOfMeasure` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pd_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pd_priceForOptional` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instantPrice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fifteenDaysPrice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thirteenDaysPrice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dpu_w_p_length` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dpu_w_p_width` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dpu_w_p_height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dpu_w_p_weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dpu_w_p_volume` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_d_p_u_length` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_d_p_u_width` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_d_p_u_height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weightPerPack` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exportCartonDimension` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exportCartonWeight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DeliveryWithinState` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DeliveryWithinGR` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DeliveryOutsideGR` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DurationDeliveryWithinState` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DurationDeliveryWithinGR` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DurationDeliveryOutsideGR` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paymentMethod` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor_payment_delivery`
--

INSERT INTO `vendor_payment_delivery` (`id`, `smallOrdersAccepted`, `minimumOrderQuantity`, `unitOfMeasure`, `pd_price`, `pd_priceForOptional`, `instantPrice`, `fifteenDaysPrice`, `thirteenDaysPrice`, `dpu_w_p_length`, `dpu_w_p_width`, `dpu_w_p_height`, `dpu_w_p_weight`, `dpu_w_p_volume`, `p_d_p_u_length`, `p_d_p_u_width`, `p_d_p_u_height`, `weightPerPack`, `exportCartonDimension`, `exportCartonWeight`, `DeliveryWithinState`, `DeliveryWithinGR`, `DeliveryOutsideGR`, `DurationDeliveryWithinState`, `DurationDeliveryWithinGR`, `DurationDeliveryOutsideGR`, `paymentMethod`, `created_at`, `updated_at`) VALUES
(4, 'yes', 'test 1', 'option 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', NULL, NULL, NULL, 'CIA', '2018-09-12 05:16:20', NULL),
(5, 'yes', 'test 2', 'option 1', 'test 2', 'test 2', 'test 2', 'test 2', 'test 2', 'test 2', 'test 2', 'test 2', 'test 2', 'test 2', 'test 2', 'test 2', 'test 2', 'test 2', 'test 2', 'test 2', 'test 2', 'test 2', 'test 2', 'test 2', 'test 2', 'test 2', NULL, '2018-09-12 05:19:55', NULL),
(6, 'yes', 'test 3 update', 'option 1', 'test 3 update', 'test 3 update', 'test 3 update', 'test 3 update', 'test 3 update', 'test 3 update', 'test 3 update', 'test 3 update', 'test 3 update', 'test 3 update', 'test 3 update', 'test 3 update', 'test 3 update', 'test 3 update', 'test 3 update', 'test 3 update', 'test 3 update', 'test 3 update', 'test 3 update', 'test 3 update', 'test 3 update', 'test 3 update', 'COD', '2018-09-12 05:21:22', NULL),
(7, 'yes', NULL, 'option 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2018-09-13 09:32:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_products`
--

CREATE TABLE `vendor_products` (
  `id` int(11) NOT NULL,
  `productName` longtext COLLATE utf8mb4_unicode_ci,
  `productGenericName` longtext COLLATE utf8mb4_unicode_ci,
  `productDescription` longtext COLLATE utf8mb4_unicode_ci,
  `productKeyword` longtext COLLATE utf8mb4_unicode_ci,
  `partNumber` mediumtext COLLATE utf8mb4_unicode_ci,
  `menufacturer` mediumtext COLLATE utf8mb4_unicode_ci,
  `modelNumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplyType` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `productCategory` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `productSubCategory` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accessories` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keySpecification` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor_products`
--

INSERT INTO `vendor_products` (`id`, `productName`, `productGenericName`, `productDescription`, `productKeyword`, `partNumber`, `menufacturer`, `modelNumber`, `vendor`, `supplyType`, `productCategory`, `productSubCategory`, `color`, `accessories`, `keySpecification`, `created_at`, `updated_at`) VALUES
(4, 'test 1', 'test 1', '<p>test 1<br></p>', 'test 1', 'test 1', 'test 1', 'test 1', NULL, 'OEM / Manufacturer', 'option 1', 'option 1', 'test 1', 'test 1', '<p>test 1<br></p>', '2018-09-12 05:16:20', NULL),
(5, 'test 2', 'test 2', '<p>test 2<br></p>', 'test 2', 'test 2', 'test 2', 'test 2', 'test 2', 'OEM / Manufacturer', 'option 1', 'option 1', 'test 2', 'test 2', '<p>test 2<br></p>', '2018-09-12 05:19:55', NULL),
(6, 'test 3 update', 'test 3 update', '<p>test 3 update<br></p>', 'test 3 update', 'test 3 update', 'test 3 update', 'test 3 update', 'test 3 update', 'OEM / Manufacturer', 'option 1', 'option 1', 'test 3 update', 'test 3 update', '<p>test 3 update<br></p>', '2018-09-12 05:21:22', NULL),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OEM / Manufacturer', 'option 1', 'option 1', NULL, NULL, NULL, '2018-09-13 09:32:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_product_images`
--

CREATE TABLE `vendor_product_images` (
  `id` int(11) NOT NULL,
  `productImage` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor_product_images`
--

INSERT INTO `vendor_product_images` (`id`, `productImage`, `created_at`, `updated_at`) VALUES
(6, '9615.PNG', '2018-09-12 05:21:22', NULL),
(5, '', '2018-09-12 05:19:55', NULL),
(4, '', '2018-09-12 05:16:20', NULL),
(7, '', '2018-09-13 09:32:22', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banar`
--
ALTER TABLE `banar`
  ADD PRIMARY KEY (`banar_id`);

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
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product_sub_category`
--
ALTER TABLE `product_sub_category`
  ADD PRIMARY KEY (`sub_category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vendor_general_settings`
--
ALTER TABLE `vendor_general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_payment_delivery`
--
ALTER TABLE `vendor_payment_delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_products`
--
ALTER TABLE `vendor_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_product_images`
--
ALTER TABLE `vendor_product_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banar`
--
ALTER TABLE `banar`
  MODIFY `banar_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_sub_category`
--
ALTER TABLE `product_sub_category`
  MODIFY `sub_category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_general_settings`
--
ALTER TABLE `vendor_general_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vendor_payment_delivery`
--
ALTER TABLE `vendor_payment_delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vendor_products`
--
ALTER TABLE `vendor_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vendor_product_images`
--
ALTER TABLE `vendor_product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
