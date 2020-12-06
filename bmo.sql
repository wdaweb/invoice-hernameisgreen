-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 05:32 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bmo`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc_basic`
--

CREATE TABLE `acc_basic` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `acc_basic`
--

INSERT INTO `acc_basic` (`id`, `username`, `pw`, `email`) VALUES
(1, 'hdeland', 'pale', 'hdeland@mail.com'),
(2, 'florence', 'welch', 'florence@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `acc_info`
--

CREATE TABLE `acc_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(84) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `location` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `acc_id` int(64) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `acc_info`
--

INSERT INTO `acc_info` (`id`, `name`, `birthday`, `location`, `create_date`, `acc_id`) VALUES
(1, 'Helena Deland', '1990-03-22', 'Canada', '2020-11-24 16:13:34', 1),
(2, 'Florence Welch', '1986-08-28', 'United Kingdom', '2020-11-24 16:16:51', 2);

-- --------------------------------------------------------

--
-- Table structure for table `award_numbers`
--

CREATE TABLE `award_numbers` (
  `id` int(11) NOT NULL,
  `year` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` tinyint(10) NOT NULL,
  `number` int(64) NOT NULL,
  `type` tinyint(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `award_numbers`
--

INSERT INTO `award_numbers` (`id`, `year`, `period`, `number`, `type`) VALUES
(1, '2020', 5, 42024723, 1),
(2, '2020', 5, 64157858, 2),
(3, '2020', 5, 68550826, 3),
(4, '2020', 5, 84643124, 3),
(5, '2020', 5, 46665810, 3),
(6, '2020', 5, 651, 4),
(7, '2020', 5, 341, 4);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(32) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `period` tinyint(5) NOT NULL,
  `code` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(32) NOT NULL,
  `payment` int(64) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `user_id`, `date`, `period`, `code`, `number`, `payment`) VALUES
(1, 1, '2020-09-03 16:00:00', 5, 'CD', 48762534, 23),
(2, 1, '2020-10-14 16:00:00', 5, 'TK', 1234567, 336),
(3, 1, '2020-12-02 16:00:00', 6, 'CD', 22334455, 56);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_details`
--

CREATE TABLE `invoice_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `in_id` int(10) UNSIGNED NOT NULL,
  `category` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` int(15) NOT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoice_details`
--

INSERT INTO `invoice_details` (`id`, `in_id`, `category`, `method`, `notes`) VALUES
(1, 1, '1', 1, 'none'),
(2, 2, '2', 3, '咖哩'),
(3, 3, '2', 3, 'try try');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acc_basic`
--
ALTER TABLE `acc_basic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acc_info`
--
ALTER TABLE `acc_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `award_numbers`
--
ALTER TABLE `award_numbers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acc_basic`
--
ALTER TABLE `acc_basic`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `acc_info`
--
ALTER TABLE `acc_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `award_numbers`
--
ALTER TABLE `award_numbers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `invoice_details`
--
ALTER TABLE `invoice_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
