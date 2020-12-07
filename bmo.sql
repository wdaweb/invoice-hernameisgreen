-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2020 at 01:05 AM
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
(2, 'florence', 'welch', 'florence@mail.com'),
(4, 'susan', 'sarandon', 'susan@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `acc_info`
--

CREATE TABLE `acc_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(84) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `location` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `acc_id` int(64) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `acc_info`
--

INSERT INTO `acc_info` (`id`, `first_name`, `last_name`, `birthday`, `location`, `create_date`, `acc_id`) VALUES
(1, 'Helena ', 'Deland', '1990-03-22', 'Canada', '2020-11-24 16:13:34', 1),
(2, 'Florence ', 'Welch', '1986-08-28', 'United Kingdom', '2020-11-24 16:16:51', 2),
(4, 'Susan', 'Sarandon', '1964-03-27', 'America', '2020-12-05 09:38:07', 4);

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
  `date` date NOT NULL DEFAULT current_timestamp(),
  `period` tinyint(5) NOT NULL,
  `code` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(32) NOT NULL,
  `payment` int(64) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `user_id`, `date`, `period`, `code`, `number`, `payment`) VALUES
(1, 1, '2020-08-09', 4, 'FL', 5892121, 19648),
(2, 1, '2020-09-07', 5, 'UY', 66466345, 2436),
(3, 1, '2020-08-15', 4, 'KB', 85369889, 76888),
(4, 1, '2020-08-25', 4, 'RQ', 57037628, 161),
(5, 1, '2020-11-16', 6, 'KB', 76346407, 92118),
(6, 1, '2020-09-27', 5, 'FL', 3736172, 73035),
(7, 1, '2020-07-15', 4, 'KB', 16503508, 78595),
(8, 1, '2020-10-04', 5, 'KB', 30755693, 65508),
(9, 1, '2020-07-12', 4, 'RQ', 91001600, 81084),
(10, 1, '2020-09-22', 5, 'RQ', 81566011, 37114),
(11, 1, '2020-08-13', 4, 'FL', 83121965, 81253),
(12, 1, '2020-07-09', 4, 'UY', 57279986, 31823),
(13, 1, '2020-10-22', 5, 'FL', 63859049, 93198),
(14, 1, '2020-09-02', 5, 'FL', 69760924, 46594),
(15, 1, '2020-09-12', 5, 'PT', 42436315, 41860),
(16, 1, '2020-11-08', 6, 'KB', 56901143, 7265),
(17, 1, '2020-10-02', 5, 'RQ', 63369820, 59221),
(18, 1, '2020-09-30', 5, 'KB', 6272675, 49970),
(19, 1, '2020-10-18', 5, 'UY', 55076110, 39964),
(20, 1, '2020-09-25', 5, 'DF', 13006054, 52739),
(21, 1, '2020-10-05', 5, 'UY', 33353143, 29809),
(22, 1, '2020-07-20', 4, 'PT', 62271458, 72496),
(23, 1, '2020-08-13', 4, 'UY', 52209137, 85525),
(24, 1, '2020-10-16', 5, 'UY', 66927313, 83547),
(25, 1, '2020-09-19', 5, 'PT', 69932774, 76982),
(26, 1, '2020-07-14', 4, 'FL', 28188620, 97753),
(27, 1, '2020-09-20', 5, 'KB', 3250709, 49975),
(29, 1, '2020-07-15', 4, 'RQ', 14528476, 72039),
(30, 1, '2020-11-28', 6, 'FL', 12072514, 77862),
(31, 1, '2020-07-11', 4, 'FL', 50580491, 19043),
(32, 1, '2020-10-18', 5, 'FL', 8536155, 7210),
(33, 1, '2020-09-02', 5, 'UY', 99523791, 21357),
(34, 1, '2020-10-29', 5, 'UY', 68822241, 3722),
(35, 1, '2020-11-11', 6, 'PT', 69564098, 92960),
(36, 1, '2020-09-12', 5, 'KB', 55599514, 94914),
(37, 1, '2020-07-06', 4, 'RQ', 76342587, 92181),
(38, 1, '2020-08-21', 4, 'RQ', 51843571, 62297),
(39, 1, '2020-10-15', 5, 'DF', 89738912, 33080),
(40, 1, '2020-09-29', 5, 'UY', 22486650, 13609),
(41, 1, '2020-10-05', 5, 'UY', 52707212, 71140),
(42, 1, '2020-09-26', 5, 'FL', 95062908, 89567),
(43, 1, '2020-09-30', 5, 'PT', 50210469, 34759),
(44, 1, '2020-08-12', 4, 'UY', 30285767, 1565),
(45, 1, '2020-11-16', 6, 'DF', 22779965, 28097),
(46, 1, '2020-08-07', 4, 'DF', 57559068, 9495),
(47, 1, '2020-10-14', 5, 'DF', 33926870, 13270),
(48, 1, '2020-09-09', 5, 'UY', 99552330, 44065),
(49, 1, '2020-07-24', 4, 'DF', 33970007, 32058),
(50, 1, '2020-09-17', 5, 'RQ', 25361105, 39702),
(51, 1, '2020-12-03', 6, 'UY', 14244497, 55272),
(52, 1, '2020-11-07', 6, 'DF', 33791572, 51801),
(53, 1, '2020-07-22', 4, 'RQ', 74971302, 63875),
(54, 1, '2020-08-28', 4, 'KB', 48526587, 50200),
(55, 1, '2020-10-13', 5, 'FL', 2679392, 8895),
(56, 1, '2020-08-31', 4, 'KB', 92024851, 79802),
(57, 1, '2020-08-27', 4, 'KB', 76886571, 43357),
(58, 1, '2020-11-06', 6, 'FL', 65487184, 64650),
(59, 1, '2020-11-17', 6, 'KB', 7741117, 81535),
(60, 1, '2020-10-10', 5, 'RQ', 42677202, 73039),
(61, 1, '2020-11-12', 6, 'PT', 89165808, 54416),
(62, 1, '2020-09-21', 5, 'DF', 48655142, 54765),
(63, 1, '2020-10-18', 5, 'UY', 74360352, 41270),
(64, 1, '2020-07-25', 4, 'DF', 29909835, 9210),
(65, 1, '2020-08-04', 4, 'KB', 9567990, 62996),
(66, 1, '2020-07-28', 4, 'UY', 61834083, 94839),
(67, 1, '2020-11-05', 6, 'RQ', 89992668, 23881),
(68, 1, '2020-08-27', 4, 'DF', 27964635, 19447),
(69, 1, '2020-10-06', 5, 'KB', 44498866, 15183),
(70, 1, '2020-11-17', 6, 'PT', 31499632, 5950),
(71, 1, '2020-07-16', 4, 'RQ', 63768672, 58097),
(72, 1, '2020-09-23', 5, 'FL', 5890193, 24198),
(73, 1, '2020-11-18', 6, 'KB', 80817064, 32868),
(74, 1, '2020-09-30', 5, 'KB', 19753057, 60989),
(75, 1, '2020-09-21', 5, 'UY', 43979630, 69942),
(76, 1, '2020-09-29', 5, 'DF', 8523708, 68819),
(77, 1, '2020-09-26', 5, 'KB', 89646455, 741),
(78, 1, '2020-08-09', 4, 'DF', 74091981, 73258),
(79, 1, '2020-08-23', 4, 'PT', 41601089, 22782),
(80, 1, '2020-10-17', 5, 'PT', 67022572, 67500),
(81, 1, '2020-09-28', 5, 'RQ', 11881572, 66335),
(82, 1, '2020-11-14', 6, 'RQ', 56714045, 61839),
(83, 1, '2020-07-27', 4, 'FL', 72094282, 76986),
(84, 1, '2020-10-30', 5, 'FL', 19676946, 3747),
(85, 1, '2020-11-28', 6, 'RQ', 58404547, 41900),
(86, 1, '2020-07-20', 4, 'UY', 51132183, 60735),
(87, 1, '2020-10-10', 5, 'FL', 68114493, 34975),
(88, 1, '2020-07-05', 4, 'FL', 94001719, 51742),
(89, 1, '2020-09-06', 5, 'FL', 94526212, 19127),
(90, 1, '2020-08-23', 4, 'FL', 89480350, 59564),
(91, 1, '2020-10-04', 5, 'RQ', 91856513, 32018),
(92, 1, '2020-10-01', 5, 'DF', 50657389, 76406),
(93, 1, '2020-09-09', 5, 'FL', 56817001, 61483),
(94, 1, '2020-10-21', 5, 'PT', 40936916, 61733),
(95, 1, '2020-10-21', 5, 'UY', 12821711, 3698),
(96, 1, '2020-10-30', 5, 'FL', 56266435, 3741),
(97, 1, '2020-07-28', 4, 'RQ', 44225167, 49910),
(98, 1, '2020-08-03', 4, 'RQ', 51267134, 63607),
(99, 1, '2020-09-06', 5, 'UY', 9084036, 35446),
(100, 1, '2020-10-06', 5, 'UY', 47561175, 70548),
(101, 1, '2020-09-13', 5, 'DF', 40030789, 84368),
(102, 1, '2020-07-21', 4, 'DF', 90792179, 5499),
(103, 1, '2020-08-27', 4, 'KB', 5654670, 73936),
(104, 1, '2020-10-18', 5, 'UY', 2551436, 94607),
(105, 1, '2020-09-15', 5, 'FL', 54432523, 69179),
(106, 1, '2020-08-29', 4, 'RQ', 46184387, 46094),
(107, 1, '2020-07-13', 4, 'UY', 58286519, 94348),
(108, 1, '2020-08-03', 4, 'KB', 40537027, 27655),
(109, 1, '2020-07-23', 4, 'DF', 90756669, 29284),
(110, 1, '2020-10-14', 5, 'PT', 7024315, 309),
(111, 1, '2020-08-02', 4, 'FL', 6074717, 73056),
(112, 1, '2020-08-02', 4, 'DF', 49808886, 3665),
(113, 1, '2020-07-26', 4, 'RQ', 12147757, 58406),
(114, 1, '2020-09-19', 5, 'KB', 22909820, 81301),
(115, 1, '2020-11-03', 6, 'DF', 44463120, 21811),
(116, 1, '2020-07-21', 4, 'KB', 20621919, 78437),
(117, 1, '2020-10-27', 5, 'DF', 65932889, 27048),
(118, 1, '2020-11-14', 6, 'DF', 76263682, 46891),
(119, 1, '2020-09-01', 5, 'RQ', 53762647, 90864),
(120, 1, '2020-07-25', 4, 'PT', 9757914, 86618),
(121, 1, '2020-11-08', 6, 'PT', 9420057, 23367),
(122, 1, '2020-10-02', 5, 'KB', 50763472, 72580),
(123, 1, '2020-11-01', 6, 'FL', 57493039, 37748),
(124, 1, '2020-10-24', 5, 'KB', 58660011, 56907),
(125, 1, '2020-09-23', 5, 'PT', 77103922, 34393),
(126, 1, '2020-11-30', 6, 'UY', 40081196, 11520),
(127, 1, '2020-08-18', 4, 'DF', 17748420, 59926),
(128, 1, '2020-08-18', 4, 'FL', 67164961, 10042),
(129, 1, '2020-10-15', 5, 'RQ', 19685945, 58778),
(130, 1, '2020-09-27', 5, 'FL', 92915803, 6603),
(131, 1, '2020-10-31', 5, 'PT', 93803489, 17414),
(132, 1, '2020-08-01', 4, 'DF', 68915363, 23459),
(133, 1, '2020-10-03', 5, 'UY', 55053787, 53775),
(134, 1, '2020-11-17', 6, 'RQ', 79770496, 5936),
(135, 1, '2020-11-14', 6, 'FL', 86116210, 21091),
(136, 1, '2020-08-03', 4, 'UY', 6085977, 52355),
(137, 1, '2020-09-25', 5, 'KB', 63494757, 48618),
(138, 1, '2020-07-04', 4, 'FL', 91947696, 91210),
(139, 1, '2020-10-31', 5, 'FL', 77101524, 60892),
(140, 1, '2020-07-18', 4, 'DF', 26019724, 42062),
(141, 1, '2020-08-20', 4, 'FL', 31753147, 25899),
(142, 1, '2020-10-24', 5, 'UY', 34699525, 15132),
(143, 1, '2020-08-18', 4, 'RQ', 1129606, 78358),
(144, 1, '2020-08-31', 4, 'PT', 5298247, 98042),
(145, 1, '2020-08-27', 4, 'FL', 18423773, 29399),
(146, 1, '2020-11-29', 6, 'UY', 34164578, 68043),
(147, 1, '2020-08-07', 4, 'UY', 82423948, 38375),
(148, 1, '2020-11-07', 6, 'UY', 97998044, 75),
(149, 1, '2020-07-09', 4, 'RQ', 91807578, 37022),
(150, 1, '2020-08-13', 4, 'PT', 20794505, 88805),
(151, 1, '2020-11-08', 6, 'UY', 82687077, 23760),
(152, 1, '2020-07-30', 4, 'UY', 47481113, 11112),
(153, 1, '2020-07-10', 4, 'PT', 46694252, 20533),
(154, 1, '2020-07-15', 4, 'PT', 96259023, 55484),
(155, 1, '2020-08-25', 4, 'DF', 57179160, 18814),
(156, 1, '2020-07-19', 4, 'DF', 29293615, 22575),
(157, 1, '2020-08-12', 4, 'KB', 77679047, 66450),
(158, 1, '2020-11-13', 6, 'KB', 72539326, 37429),
(159, 1, '2020-11-13', 6, 'KB', 14189309, 57850),
(160, 1, '2020-07-08', 4, 'RQ', 82880797, 72941),
(161, 1, '2020-08-02', 4, 'UY', 12770492, 30228),
(162, 1, '2020-09-05', 5, 'RQ', 33757415, 8596),
(163, 1, '2020-07-20', 4, 'DF', 66755549, 87988),
(164, 1, '2020-11-18', 6, 'UY', 10291606, 23493),
(165, 1, '2020-09-14', 5, 'DF', 97665147, 58601),
(166, 1, '2020-08-04', 4, 'PT', 12215619, 66712),
(167, 1, '2020-10-07', 5, 'PT', 98100028, 79360),
(168, 1, '2020-07-01', 4, 'DF', 11052622, 60814),
(169, 1, '2020-09-01', 5, 'PT', 32031524, 3512),
(170, 1, '2020-09-10', 5, 'FL', 1171513, 18395),
(171, 1, '2020-09-20', 5, 'UY', 32805920, 6539),
(172, 1, '2020-09-07', 5, 'KB', 61216045, 48083),
(173, 1, '2020-08-22', 4, 'UY', 21580109, 61869),
(174, 1, '2020-11-01', 6, 'KB', 42882821, 16233),
(175, 1, '2020-11-14', 6, 'PT', 21125466, 38500),
(176, 1, '2020-11-23', 6, 'UY', 75485872, 98102),
(177, 1, '2020-11-02', 6, 'PT', 45832470, 56597),
(178, 1, '2020-12-03', 6, 'FL', 63483087, 29465),
(179, 1, '2020-11-30', 6, 'RQ', 86971309, 22669),
(180, 1, '2020-11-01', 6, 'KB', 42488852, 2586),
(181, 1, '2020-07-01', 4, 'DF', 50277997, 67605),
(182, 1, '2020-09-16', 5, 'KB', 17417298, 88135),
(183, 1, '2020-10-11', 5, 'KB', 50513474, 2675),
(184, 1, '2020-07-28', 4, 'DF', 95699700, 77426),
(185, 1, '2020-08-05', 4, 'RQ', 34514085, 94910),
(186, 1, '2020-09-22', 5, 'DF', 30203711, 363),
(187, 1, '2020-07-12', 4, 'PT', 84132543, 69483),
(188, 1, '2020-08-28', 4, 'RQ', 30454187, 92753),
(189, 1, '2020-11-02', 6, 'RQ', 14394190, 12137),
(190, 1, '2020-11-09', 6, 'UY', 40474897, 90358),
(191, 1, '2020-11-14', 6, 'RQ', 91829182, 80768),
(192, 1, '2020-08-25', 4, 'DF', 48771940, 51070),
(193, 1, '2020-11-25', 6, 'UY', 28858478, 72342),
(194, 1, '2020-11-29', 6, 'RQ', 27036800, 91418),
(195, 1, '2020-10-09', 5, 'RQ', 13921596, 18151),
(196, 1, '2020-08-21', 4, 'RQ', 10764452, 40352),
(197, 1, '2020-08-01', 4, 'DF', 70120150, 51626),
(198, 1, '2020-07-03', 4, 'KB', 69396671, 64534),
(199, 1, '2020-07-24', 4, 'KB', 25297505, 38133),
(200, 1, '2020-08-27', 4, 'DF', 60187108, 64147),
(201, 1, '2020-11-10', 6, 'DF', 10967134, 42989),
(202, 1, '2020-10-07', 5, 'CD', 42024723, 23);

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
(1, 1, '3', 3, 'went out with friends'),
(2, 2, '1', 4, 'on a diet'),
(3, 3, '2', 1, 'ate by myself'),
(4, 4, '1', 2, 'damn food was great'),
(5, 5, '4', 1, 'went out with friends'),
(6, 6, '4', 1, 'went out with friends'),
(7, 7, '2', 4, 'damn food was great'),
(8, 8, '1', 1, 'on a diet'),
(9, 9, '4', 4, 'on a diet'),
(10, 10, '4', 4, 'damn food was great'),
(11, 11, '4', 3, 'ate by myself'),
(12, 12, '1', 2, 'stress eating'),
(13, 13, '2', 3, 'ate by myself'),
(14, 14, '3', 3, 'on a diet'),
(15, 15, '3', 3, 'on a diet'),
(16, 16, '1', 2, 'ate by myself'),
(17, 17, '4', 4, 'ate by myself'),
(18, 18, '4', 1, 'ate by myself'),
(19, 19, '1', 1, 'stress eating'),
(20, 20, '2', 3, 'ate by myself'),
(21, 21, '4', 1, 'on a diet'),
(22, 22, '1', 4, 'stress eating'),
(23, 23, '2', 4, 'on a diet'),
(24, 24, '3', 3, 'on a diet'),
(25, 25, '3', 2, 'ate by myself'),
(26, 26, '1', 2, 'on a diet'),
(27, 27, '3', 2, 'damn food was great'),
(28, 28, '3', 2, 'damn food was great'),
(29, 29, '1', 1, 'stress eating'),
(30, 30, '4', 2, 'ate by myself'),
(31, 31, '2', 1, 'damn food was great'),
(32, 32, '2', 3, 'damn food was great'),
(33, 33, '3', 4, 'on a diet'),
(34, 34, '3', 4, 'damn food was great'),
(35, 35, '1', 1, 'damn food was great'),
(36, 36, '3', 1, 'went out with friends'),
(37, 37, '1', 3, 'ate by myself'),
(38, 38, '2', 4, 'on a diet'),
(39, 39, '1', 2, 'went out with friends'),
(40, 40, '4', 2, 'on a diet'),
(41, 41, '4', 1, 'went out with friends'),
(42, 42, '3', 2, 'went out with friends'),
(43, 43, '3', 1, 'on a diet'),
(44, 44, '2', 4, 'went out with friends'),
(45, 45, '1', 2, 'went out with friends'),
(46, 46, '2', 3, 'went out with friends'),
(47, 47, '1', 2, 'on a diet'),
(48, 48, '1', 1, 'stress eating'),
(49, 49, '2', 1, 'went out with friends'),
(50, 50, '3', 1, 'went out with friends'),
(51, 51, '4', 4, 'stress eating'),
(52, 52, '4', 1, 'stress eating'),
(53, 53, '4', 4, 'ate by myself'),
(54, 54, '4', 2, 'ate by myself'),
(55, 55, '3', 2, 'on a diet'),
(56, 56, '1', 3, 'stress eating'),
(57, 57, '2', 1, 'ate by myself'),
(58, 58, '3', 2, 'went out with friends'),
(59, 59, '4', 3, 'ate by myself'),
(60, 60, '2', 3, 'ate by myself'),
(61, 61, '1', 1, 'went out with friends'),
(62, 62, '1', 2, 'ate by myself'),
(63, 63, '4', 4, 'stress eating'),
(64, 64, '3', 1, 'stress eating'),
(65, 65, '2', 3, 'stress eating'),
(66, 66, '4', 1, 'on a diet'),
(67, 67, '3', 2, 'damn food was great'),
(68, 68, '2', 3, 'ate by myself'),
(69, 69, '1', 3, 'on a diet'),
(70, 70, '2', 1, 'went out with friends'),
(71, 71, '1', 3, 'on a diet'),
(72, 72, '3', 4, 'on a diet'),
(73, 73, '1', 3, 'ate by myself'),
(74, 74, '4', 2, 'stress eating'),
(75, 75, '1', 1, 'on a diet'),
(76, 76, '3', 4, 'stress eating'),
(77, 77, '2', 3, 'went out with friends'),
(78, 78, '3', 4, 'went out with friends'),
(79, 79, '2', 2, 'damn food was great'),
(80, 80, '1', 3, 'went out with friends'),
(81, 81, '4', 3, 'ate by myself'),
(82, 82, '2', 2, 'went out with friends'),
(83, 83, '4', 3, 'went out with friends'),
(84, 84, '1', 2, 'ate by myself'),
(85, 85, '1', 2, 'stress eating'),
(86, 86, '3', 4, 'on a diet'),
(87, 87, '1', 4, 'damn food was great'),
(88, 88, '3', 4, 'damn food was great'),
(89, 89, '3', 3, 'damn food was great'),
(90, 90, '1', 4, 'on a diet'),
(91, 91, '3', 4, 'on a diet'),
(92, 92, '1', 3, 'went out with friends'),
(93, 93, '2', 4, 'stress eating'),
(94, 94, '2', 4, 'damn food was great'),
(95, 95, '4', 2, 'went out with friends'),
(96, 96, '2', 4, 'went out with friends'),
(97, 97, '2', 4, 'went out with friends'),
(98, 98, '2', 4, 'stress eating'),
(99, 99, '3', 2, 'stress eating'),
(100, 100, '4', 1, 'damn food was great'),
(101, 101, '4', 2, 'stress eating'),
(102, 102, '3', 4, 'on a diet'),
(103, 103, '1', 1, 'damn food was great'),
(104, 104, '2', 4, 'stress eating'),
(105, 105, '1', 1, 'ate by myself'),
(106, 106, '3', 3, 'stress eating'),
(107, 107, '3', 3, 'went out with friends'),
(108, 108, '4', 3, 'ate by myself'),
(109, 109, '2', 4, 'stress eating'),
(110, 110, '1', 4, 'ate by myself'),
(111, 111, '2', 4, 'ate by myself'),
(112, 112, '3', 3, 'damn food was great'),
(113, 113, '1', 4, 'stress eating'),
(114, 114, '1', 1, 'stress eating'),
(115, 115, '4', 2, 'went out with friends'),
(116, 116, '4', 3, 'on a diet'),
(117, 117, '2', 4, 'went out with friends'),
(118, 118, '2', 3, 'damn food was great'),
(119, 119, '2', 2, 'went out with friends'),
(120, 120, '4', 1, 'went out with friends'),
(121, 121, '2', 4, 'ate by myself'),
(122, 122, '2', 3, 'went out with friends'),
(123, 123, '1', 3, 'damn food was great'),
(124, 124, '1', 2, 'ate by myself'),
(125, 125, '3', 1, 'damn food was great'),
(126, 126, '1', 4, 'damn food was great'),
(127, 127, '4', 4, 'went out with friends'),
(128, 128, '3', 3, 'went out with friends'),
(129, 129, '2', 4, 'on a diet'),
(130, 130, '2', 4, 'damn food was great'),
(131, 131, '2', 4, 'on a diet'),
(132, 132, '1', 3, 'on a diet'),
(133, 133, '4', 1, 'damn food was great'),
(134, 134, '1', 4, 'damn food was great'),
(135, 135, '3', 3, 'ate by myself'),
(136, 136, '3', 2, 'on a diet'),
(137, 137, '1', 1, 'ate by myself'),
(138, 138, '2', 4, 'ate by myself'),
(139, 139, '1', 3, 'went out with friends'),
(140, 140, '4', 3, 'went out with friends'),
(141, 141, '2', 1, 'on a diet'),
(142, 142, '2', 3, 'ate by myself'),
(143, 143, '4', 3, 'on a diet'),
(144, 144, '4', 4, 'ate by myself'),
(145, 145, '4', 4, 'damn food was great'),
(146, 146, '1', 2, 'stress eating'),
(147, 147, '1', 2, 'stress eating'),
(148, 148, '4', 4, 'went out with friends'),
(149, 149, '3', 2, 'went out with friends'),
(150, 150, '2', 2, 'stress eating'),
(151, 151, '4', 3, 'stress eating'),
(152, 152, '1', 3, 'damn food was great'),
(153, 153, '4', 4, 'went out with friends'),
(154, 154, '3', 4, 'went out with friends'),
(155, 155, '1', 2, 'went out with friends'),
(156, 156, '4', 3, 'stress eating'),
(157, 157, '1', 2, 'on a diet'),
(158, 158, '3', 2, 'ate by myself'),
(159, 159, '1', 4, 'ate by myself'),
(160, 160, '3', 4, 'went out with friends'),
(161, 161, '4', 1, 'ate by myself'),
(162, 162, '3', 1, 'ate by myself'),
(163, 163, '2', 1, 'on a diet'),
(164, 164, '3', 4, 'went out with friends'),
(165, 165, '2', 4, 'went out with friends'),
(166, 166, '4', 3, 'on a diet'),
(167, 167, '2', 3, 'damn food was great'),
(168, 168, '4', 4, 'on a diet'),
(169, 169, '4', 2, 'on a diet'),
(170, 170, '4', 1, 'damn food was great'),
(171, 171, '4', 1, 'on a diet'),
(172, 172, '1', 4, 'on a diet'),
(173, 173, '3', 1, 'went out with friends'),
(174, 174, '2', 4, 'went out with friends'),
(175, 175, '2', 3, 'stress eating'),
(176, 176, '1', 4, 'stress eating'),
(177, 177, '3', 3, 'went out with friends'),
(178, 178, '3', 4, 'went out with friends'),
(179, 179, '1', 2, 'went out with friends'),
(180, 180, '2', 2, 'went out with friends'),
(181, 181, '3', 4, 'damn food was great'),
(182, 182, '2', 3, 'ate by myself'),
(183, 183, '4', 3, 'damn food was great'),
(184, 184, '3', 4, 'on a diet'),
(185, 185, '4', 3, 'went out with friends'),
(186, 186, '1', 2, 'on a diet'),
(187, 187, '3', 2, 'stress eating'),
(188, 188, '4', 4, 'ate by myself'),
(189, 189, '1', 4, 'stress eating'),
(190, 190, '4', 3, 'on a diet'),
(191, 191, '2', 2, 'went out with friends'),
(192, 192, '2', 3, 'on a diet'),
(193, 193, '4', 2, 'went out with friends'),
(194, 194, '4', 3, 'damn food was great'),
(195, 195, '4', 4, 'ate by myself'),
(196, 196, '4', 2, 'damn food was great'),
(197, 197, '2', 2, 'ate by myself'),
(198, 198, '2', 2, 'stress eating'),
(199, 199, '3', 4, 'went out with friends'),
(200, 200, '4', 4, 'went out with friends'),
(201, 201, '4', 1, 'went out with friends'),
(202, 202, '1', 1, 'quick brekkie');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `acc_info`
--
ALTER TABLE `acc_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `award_numbers`
--
ALTER TABLE `award_numbers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `invoice_details`
--
ALTER TABLE `invoice_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
