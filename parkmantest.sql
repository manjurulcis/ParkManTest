-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2016 at 05:05 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `parkmantest`
--

-- --------------------------------------------------------

--
-- Table structure for table `garages`
--

CREATE TABLE IF NOT EXISTS `garages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `owner_id` int(10) unsigned NOT NULL,
  `garage_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hourly_price` double(8,2) NOT NULL,
  `currency` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `center_coordinate` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `garages_owner_id_foreign` (`owner_id`),
  KEY `garages_country_center_coordinate_index` (`country`,`center_coordinate`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `garages`
--

INSERT INTO `garages` (`id`, `owner_id`, `garage_name`, `hourly_price`, `currency`, `country`, `center_coordinate`, `created_at`, `updated_at`) VALUES
(1, 1, 'Tampere Rautatientori', 2.00, '€', 'Finland', '60.168607847624095 24.932371066131623', '2016-09-27 07:56:25', '2016-09-27 07:56:25'),
(2, 1, 'Punavuori Garage', 1.50, '€', 'Finland', '60.162562 24.939453', '2016-09-27 07:56:25', '2016-09-27 07:56:25'),
(3, 1, 'Unknown', 3.00, '€', 'Finland', '60.16444996645511 24.938178168200714', '2016-09-27 07:56:25', '2016-09-27 07:56:25'),
(4, 1, 'Fitnesstukku', 2.00, '€', 'Finland', '60.165219358852795 24.93537425994873', '2016-09-27 07:56:25', '2016-09-27 07:56:25'),
(5, 1, 'Kauppis', 3.00, '€', 'Finland', '60.17167429490068 24.921585662024363', '2016-09-27 07:56:25', '2016-09-27 07:56:25'),
(6, 2, 'Q-Park1', 2.00, '€', 'Finland', '60.16867390148751 24.930162952045407', '2016-09-27 07:56:25', '2016-09-27 07:56:25');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_09_26_234346_create_owners_table', 1),
('2016_09_26_234357_create_zones_table', 1),
('2016_09_27_103430_create_garages_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE IF NOT EXISTS `owners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `owner_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `owners_contact_email_unique` (`contact_email`),
  KEY `owners_owner_name_contact_email_index` (`owner_name`,`contact_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`id`, `owner_name`, `contact_email`, `created_at`, `updated_at`) VALUES
(1, 'AutoPark', 'testemail@testautopark.fi', '2016-09-27 07:54:52', '2016-09-27 07:54:52'),
(2, 'Q-Park', 'qpark@testautopark.fi', '2016-09-27 07:54:52', '2016-09-27 07:54:52');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `zones`
--

CREATE TABLE IF NOT EXISTS `zones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `owner_id` int(10) unsigned NOT NULL,
  `garage_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hourly_price` double(8,2) NOT NULL,
  `currency` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `center_coordinate` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `zones_owner_id_foreign` (`owner_id`),
  KEY `zones_country_center_coordinate_index` (`country`,`center_coordinate`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `garages`
--
ALTER TABLE `garages`
  ADD CONSTRAINT `garages_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `owners` (`id`);

--
-- Constraints for table `zones`
--
ALTER TABLE `zones`
  ADD CONSTRAINT `zones_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `owners` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
