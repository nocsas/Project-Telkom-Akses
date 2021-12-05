-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2021 at 08:39 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `import_exel`
--

-- --------------------------------------------------------

--
-- Table structure for table `nossa`
--

CREATE TABLE `nossa` (
  `no` int(20) NOT NULL,
  `incident` varchar(20) CHARACTER SET latin1 NOT NULL,
  `workzone` varchar(4) CHARACTER SET latin1 NOT NULL,
  `service_no` varchar(20) CHARACTER SET latin1 NOT NULL,
  `assigned_to` varchar(15) NOT NULL,
  `booking_date` varchar(25) NOT NULL,
  `reported_date` varchar(25) NOT NULL,
  `status` varchar(15) NOT NULL,
  `last_work_log` varchar(25) NOT NULL,
  `jenis_tiket` varchar(15) NOT NULL,
  `teknisi_nossa` varchar(50) NOT NULL,
  `real_teknisi` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `kendala` varchar(255) NOT NULL,
  `status_tiket` varchar(25) NOT NULL,
  `status_manja` varchar(50) NOT NULL,
  `keterangan` text CHARACTER SET latin1 NOT NULL,
  `date_inpute` date NOT NULL,
  `date_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nossa`
--

INSERT INTO `nossa` (`no`, `incident`, `workzone`, `service_no`, `assigned_to`, `booking_date`, `reported_date`, `status`, `last_work_log`, `jenis_tiket`, `teknisi_nossa`, `real_teknisi`, `kategori`, `kendala`, `status_tiket`, `status_manja`, `keterangan`, `date_inpute`, `date_update`) VALUES
(17, 'IN114289153', 'BBS', '141131105563', 'F4BBS004', '', '26-10-2021 13:16:55', 'BACKEND', '31-10-2021 09:23:10', '', '', '', '', '', 'COMPLETE?BY?TECHNICIAN', '', '', '2021-10-31', '2021-10-31'),
(18, 'IN114622249', 'PKM', '146144114390', 'F4PKM094', '29-10-2021 10:00:00', '28-10-2021 10:24:35', 'BACKEND', '30-10-2021 19:17:38', '', '', '', '', '', '', '', '', '2021-10-31', '2021-10-31'),
(19, 'IN114636024', 'KEN', '146130117092', 'F4KEN033', '', '28-10-2021 12:36:17', 'BACKEND', '30-10-2021 11:32:51', '', '', '', '', '', 'COMPLETE?BY?TECHNICIAN', '', '', '2021-10-31', '0000-00-00'),
(20, 'IN114644533', 'KEN', '0274885383', 'F4PKM056', '29-10-2021 10:00:00', '28-10-2021 14:35:15', 'BACKEND', '31-10-2021 08:09:42', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(21, 'IN114650257', 'PKM', '142144105016', 'F4PKM092', '', '28-10-2021 15:55:19', 'BACKEND', '30-10-2021 19:19:09', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(22, 'IN114653146', 'KEN', '141130113227', 'F4KEN033', '29-10-2021 13:00:00', '28-10-2021 16:42:17', 'BACKEND', '31-10-2021 11:14:30', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(23, 'IN114689327', 'BBS', '141131119305', 'F4BBS005', '', '29-10-2021 05:06:56', 'BACKEND', '30-10-2021 13:18:03', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(24, 'IN114700803', 'KBU', '143113113450', 'F4KBU216', '', '29-10-2021 07:34:40', 'BACKEND', '31-10-2021 10:28:22', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(25, 'IN114710895', 'KEN', '0274881315', 'F4PKM056', '', '29-10-2021 09:10:59', 'BACKEND', '31-10-2021 11:08:52', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(26, 'IN114711398', 'KBU', '141113124859', 'F4KEN114', '', '29-10-2021 09:15:35', 'BACKEND', '31-10-2021 12:09:53', '', '', '', '', '', 'COMPLETE?BY?TECHNICIAN', '', '', '2021-10-31', '0000-00-00'),
(27, 'IN114791055', 'KEN', '146130114971', 'F4KEN112', '', '30-10-2021 05:58:23', 'BACKEND', '30-10-2021 14:44:57', '', '', '', '', '', 'COMPLETE?BY?TECHNICIAN', '', '', '2021-10-31', '0000-00-00'),
(28, 'IN114796383', 'SMN', '146133109204', 'F4SMN108', '', '30-10-2021 08:01:30', 'BACKEND', '30-10-2021 13:15:42', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(29, 'IN114797315', 'KEN', '141130127102', 'F4KBU219', '', '30-10-2021 08:15:22', 'BACKEND', '30-10-2021 20:00:28', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(30, 'IN114800952', 'KEN', '143130100737', 'F4KBU202', '30-10-2021 13:00:00', '30-10-2021 09:05:08', 'BACKEND', '30-10-2021 19:57:53', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(31, 'IN114802737', 'KEN', '146130115764', 'F4KBU202', '', '30-10-2021 09:28:05', 'BACKEND', '31-10-2021 08:06:07', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(32, 'IN114812096', 'KEN', '141130119260', 'F4KBU219', '30-10-2021 13:00:00', '30-10-2021 11:24:24', 'BACKEND', '30-10-2021 20:05:22', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(33, 'IN114816979', 'KBU', '143113112620', 'F4KBU230', '', '30-10-2021 12:33:34', 'BACKEND', '30-10-2021 13:29:32', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(34, 'IN114819145', 'PKM', '02742860888', 'F4PKM090', '', '30-10-2021 13:00:04', 'BACKEND', '31-10-2021 08:46:34', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(35, 'IN114824215', 'BBS', '141131122073', 'F4BBS006', '', '30-10-2021 14:00:01', 'BACKEND', '31-10-2021 10:57:00', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(36, 'IN114828859', 'PGR', '141114112077', 'F4GOD009', '', '30-10-2021 14:38:20', 'BACKEND', '31-10-2021 09:08:30', '', '', '', '', '', 'COMPLETE?BY?TECHNICIAN', '', '', '2021-10-31', '0000-00-00'),
(37, 'IN114831980', 'KBU', '141114114759', 'F4SMN091', '31-10-2021 08:00:00', '30-10-2021 15:00:13', 'BACKEND', '31-10-2021 08:22:14', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(38, 'IN114832035', 'KLS', '141145100075', 'F4PKM093', '', '30-10-2021 15:00:40', 'BACKEND', '31-10-2021 08:55:31', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(39, 'IN114836508', 'KBU', '146113112717', 'F4KBU230', '', '30-10-2021 15:33:29', 'BACKEND', '31-10-2021 10:27:38', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(40, 'IN114836525', 'KEN', '146130115876', '', '', '30-10-2021 15:33:31', 'BACKEND', '', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(41, 'IN114836866', 'KBU', '143113122726', 'F4KBU216', '', '30-10-2021 15:33:29', 'BACKEND', '31-10-2021 06:15:37', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(42, 'IN114837607', 'KBU', '143113118384', 'F4KBU201', '', '30-10-2021 15:33:33', 'BACKEND', '31-10-2021 06:19:17', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(43, 'IN114837621', 'KEN', '141130121933', '', '', '30-10-2021 15:33:34', 'BACKEND', '', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(44, 'IN114844852', 'KLS', '141145170207', 'F4KLS048', '31-10-2021 10:00:00', '30-10-2021 16:38:26', 'BACKEND', '31-10-2021 08:56:01', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(45, 'IN114846708', 'PKM', '146144112608', 'F4PKM091', '31-10-2021 10:00:00', '30-10-2021 16:58:59', 'BACKEND', '31-10-2021 11:07:31', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(46, 'IN114848306', 'KEN', '141130127811', 'F4PKM056', '31-10-2021 13:00:00', '30-10-2021 17:18:40', 'BACKEND', '31-10-2021 08:10:10', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(47, 'IN114852053', 'PKM', '146144114702', '', '', '30-10-2021 17:55:17', 'BACKEND', '30-10-2021 19:14:00', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(48, 'IN114853553', 'PGR', '141114192064', 'F4SMN097', '', '30-10-2021 18:15:37', 'BACKEND', '31-10-2021 10:36:27', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(49, 'IN114853784', 'PKM', '142144101212', 'F4PKM094', '', '30-10-2021 18:20:01', 'BACKEND', '31-10-2021 08:51:18', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(50, 'IN114854053', 'BBS', '141131116114', '', '31-10-2021 09:00:00', '30-10-2021 18:23:51', 'BACKEND', '31-10-2021 11:55:29', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(51, 'IN114855690', 'BTL', '146129110282', '', '', '30-10-2021 18:47:21', 'BACKEND', '31-10-2021 11:03:38', '', '', '', '', '', 'COMPLETE?BY?TECHNICIAN', '', '', '2021-10-31', '0000-00-00'),
(52, 'IN114856580', 'PGR', '141114186770', 'F4PGR300', '', '30-10-2021 19:01:46', 'BACKEND', '31-10-2021 08:41:32', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(53, 'IN114857118', 'KEN', '141130119037', 'F4PKM080', '', '30-10-2021 19:10:15', 'BACKEND', '31-10-2021 09:31:38', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(54, 'IN114857149', 'KEN', '146130119325', '', '31-10-2021 13:00:00', '30-10-2021 19:10:45', 'BACKEND', '31-10-2021 11:23:01', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(55, 'IN114857253', 'SMN', '146133120968', 'F4SMN094', '31-10-2021 13:00:00', '30-10-2021 19:13:02', 'BACKEND', '30-10-2021 19:49:43', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(56, 'IN114858126', 'SMN', '146133120327', 'F4SMN108', '', '30-10-2021 19:27:37', 'BACKEND', '30-10-2021 19:58:29', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(57, 'IN114861483', 'KGD', '143132106593', '', '', '30-10-2021 20:25:07', 'BACKEND', '31-10-2021 10:29:24', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(58, 'IN114861643', 'KEN', '02744533594', 'F4KBU202', '', '30-10-2021 20:28:02', 'BACKEND', '31-10-2021 11:19:29', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(59, 'IN114865859', 'KLS', '143145101983', 'F4KBU221', '31-10-2021 13:00:00', '30-10-2021 21:13:59', 'BACKEND', '31-10-2021 08:37:54', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(60, 'IN114867960', 'PGR', '141114197882', 'F4KEN121', '31-10-2021 09:00:00', '30-10-2021 21:39:06', 'BACKEND', '31-10-2021 12:14:15', '', '', '', '', '', 'COMPLETE?BY?TECHNICIAN', '', '', '2021-10-31', '0000-00-00'),
(61, 'IN114901440', 'KEN', '146130115594', 'F4KBU202', '', '31-10-2021 03:07:13', 'BACKEND', '31-10-2021 11:44:35', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(62, 'IN114901637', 'BBS', '146131110744', 'F4BBS006', '', '31-10-2021 03:07:01', 'BACKEND', '31-10-2021 08:17:59', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(63, 'IN114901968', 'GOD', '146136117102', '', '', '31-10-2021 03:07:20', 'BACKEND', '', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(64, 'IN114903476', 'SMN', '146133109170', '', '', '31-10-2021 03:07:05', 'BACKEND', '31-10-2021 11:16:52', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(65, 'IN114903851', 'KLS', '146145114015', '', '', '31-10-2021 03:07:00', 'BACKEND', '31-10-2021 11:21:08', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(66, 'IN114904358', 'KLS', '146145113036', '', '', '31-10-2021 03:06:58', 'BACKEND', '', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(67, 'IN114904613', 'PGR', '141114170580', 'F4PGR300', '', '31-10-2021 03:06:48', 'BACKEND', '31-10-2021 08:41:25', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(68, 'IN114905052', 'GOD', '146136117379', 'F4PGR134', '', '31-10-2021 03:07:07', 'BACKEND', '31-10-2021 12:46:18', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(69, 'IN114905099', 'KGD', '143132101764', 'F4PGR179', '', '31-10-2021 03:06:48', 'BACKEND', '31-10-2021 09:04:40', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(70, 'IN114905366', 'SMN', '141133101636', 'F4SMN101', '', '31-10-2021 03:07:08', 'BACKEND', '31-10-2021 11:36:47', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(71, 'IN114905580', 'PKM', '146144109388', '', '', '31-10-2021 03:06:55', 'BACKEND', '', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(72, 'IN114905689', 'PGR', '141114202258', 'F4PGR300', '', '31-10-2021 03:07:05', 'BACKEND', '31-10-2021 08:41:26', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(73, 'IN114905701', 'PGR', '141114131145', 'F4PGR458', '', '31-10-2021 03:07:19', 'BACKEND', '31-10-2021 08:35:08', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(74, 'IN114905868', 'PGR', '141114201881', 'F4PGR458', '', '31-10-2021 03:07:01', 'BACKEND', '31-10-2021 08:35:03', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(75, 'IN114906484', 'PGR', '146114112316', 'F4PGR458', '', '31-10-2021 03:07:21', 'BACKEND', '31-10-2021 08:35:16', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(76, 'IN114906657', 'KBU', '143113102454', 'F4KBU216', '', '31-10-2021 03:06:59', 'BACKEND', '31-10-2021 06:16:26', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(77, 'IN114906678', 'BBS', '141131114804', 'F4BTL006', '', '31-10-2021 03:07:01', 'BACKEND', '31-10-2021 08:15:36', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(78, 'IN114907801', 'KEN', '146130116979', 'F4KEN112', '', '31-10-2021 03:07:37', 'BACKEND', '31-10-2021 11:47:26', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(79, 'IN114908002', 'SMN', '141133105600', '', '', '31-10-2021 03:07:21', 'BACKEND', '', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(80, 'IN114908127', 'PGR', '141114197456', 'F4PGR458', '', '31-10-2021 03:07:27', 'BACKEND', '31-10-2021 11:02:52', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(81, 'IN114908616', 'KBU', '141114125651', 'F4KBU201', '', '31-10-2021 03:07:36', 'BACKEND', '31-10-2021 06:17:21', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(82, 'IN114908751', 'WTS', '141143102731', '', '', '31-10-2021 03:07:30', 'BACKEND', '', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(83, 'IN114910102', 'KBU', '146113120300', 'F4GMJ025', '', '31-10-2021 03:07:41', 'BACKEND', '31-10-2021 11:13:47', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(84, 'IN114910133', 'KBU', '143113103168', 'F4GMJ025', '', '31-10-2021 03:07:36', 'BACKEND', '31-10-2021 06:43:26', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(85, 'IN114916187', 'KBU', '146113113530', 'F4GMJ015', '', '31-10-2021 04:05:16', 'BACKEND', '31-10-2021 06:33:19', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(86, 'IN114916708', 'SMN', '146133120547', '', '', '31-10-2021 04:05:11', 'BACKEND', '31-10-2021 04:08:42', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(87, 'IN114916751', 'BTL', '141129112111', '', '', '31-10-2021 04:05:13', 'BACKEND', '', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(88, 'IN114916755', 'PKM', '146144111252', '', '', '31-10-2021 04:05:09', 'BACKEND', '', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(89, 'IN114916968', 'PGR', '141114189022', 'F4PGR458', '', '31-10-2021 04:05:17', 'BACKEND', '31-10-2021 08:35:15', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(90, 'IN114917030', 'PGR', '141114201944', 'F4GOD009', '', '31-10-2021 04:05:15', 'BACKEND', '31-10-2021 08:53:00', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(91, 'IN114917138', 'WTS', '146143111598', '', '', '31-10-2021 04:05:09', 'BACKEND', '', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(92, 'IN114918056', 'KBU', '141129113559', 'F4PGR133', '', '31-10-2021 04:05:07', 'BACKEND', '31-10-2021 06:40:02', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(93, 'IN114918277', 'PGR', '146114112668', 'F4SMN097', '', '31-10-2021 04:05:18', 'BACKEND', '31-10-2021 08:32:18', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(94, 'IN114929189', 'KBU', '146113119145', 'F4GMJ025', '', '31-10-2021 05:03:49', 'BACKEND', '31-10-2021 06:31:58', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(95, 'IN114940449', 'KLS', '142145100011', 'F4KLS053', '', '31-10-2021 05:55:06', 'BACKEND', '31-10-2021 08:38:56', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(96, 'IN114943036', 'PGR', '141114201557', 'F4PGR232', '', '31-10-2021 06:02:57', 'BACKEND', '31-10-2021 08:29:49', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(97, 'IN114943079', 'PGR', '141114188952', 'F4KEN121', '', '31-10-2021 06:02:57', 'BACKEND', '31-10-2021 08:45:01', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(98, 'IN114943084', 'PGR', '141114190012', 'F4KEN121', '', '31-10-2021 06:02:54', 'BACKEND', '31-10-2021 08:45:01', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(99, 'IN114943220', 'PGR', '141114193813', 'F4PGR459', '', '31-10-2021 06:02:57', 'BACKEND', '31-10-2021 08:54:46', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(100, 'IN114951745', 'PKM', '146144114599', '', '', '31-10-2021 06:42:10', 'BACKEND', '31-10-2021 09:14:18', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(101, 'IN114959417', 'PKM', '141144109544', '', '31-10-2021 13:00:00', '31-10-2021 07:19:49', 'BACKEND', '31-10-2021 09:04:53', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(102, 'IN114961775', 'KGD', '143132103795', '', '', '31-10-2021 07:30:05', 'BACKEND', '31-10-2021 09:33:10', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(103, 'IN114964371', 'PKM', '142144104356', 'F4KEN112', '31-10-2021 13:00:00', '31-10-2021 07:44:54', 'BACKEND', '31-10-2021 09:02:37', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(104, 'IN114969849', 'KLS', '143145102737', 'F4KLS053', '', '31-10-2021 08:15:02', 'BACKEND', '31-10-2021 10:51:01', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(105, 'IN114975349', 'KLS', '143145102563', 'F4KLS053', '31-10-2021 11:00:00', '31-10-2021 08:48:05', 'BACKEND', '31-10-2021 10:51:02', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(106, 'IN114975406', 'KLS', '143145100632', 'F4KLS053', '31-10-2021 10:00:00', '31-10-2021 08:48:22', 'BACKEND', '31-10-2021 10:51:02', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(107, 'IN114976499', 'KLS', '146145111494', 'F4KLS053', '', '31-10-2021 08:55:19', 'BACKEND', '31-10-2021 10:51:03', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(108, 'IN114982483', 'KEN', '146130113094', 'F4KEN112', '', '31-10-2021 09:32:07', 'BACKEND', '31-10-2021 11:46:12', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(109, 'IN114982580', 'BBS', '141131107347', 'F4BBS004', '', '31-10-2021 09:32:08', 'BACKEND', '31-10-2021 10:55:44', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(110, 'IN114984132', 'BTL', '141129111257', '', '', '31-10-2021 09:42:07', 'BACKEND', '31-10-2021 12:36:31', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(111, 'IN114986475', 'KGD', '141114118591', 'F4KEN104', '31-10-2021 11:00:00', '31-10-2021 09:56:34', 'BACKEND', '31-10-2021 12:07:14', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(112, 'IN114986710', 'KEN', '141130122784', 'F4PKM056', '31-10-2021 13:00:00', '31-10-2021 09:58:01', 'BACKEND', '31-10-2021 10:00:53', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(113, 'IN114987037', 'WNS', '143135105716', 'F4BTL004', '', '31-10-2021 10:00:01', 'BACKEND', '31-10-2021 10:26:49', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(114, 'IN114987310', 'KBU', '0274515239', 'F4KEN106', '', '31-10-2021 10:01:34', 'BACKEND', '31-10-2021 12:10:54', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(115, 'IN114987978', 'KBU', '0274513384', 'F4KLS032', '31-10-2021 11:00:00', '31-10-2021 10:05:21', 'BACKEND', '31-10-2021 11:35:15', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(116, 'IN114990140', 'KBU', '', '', '', '31-10-2021 10:16:57', 'QUEUED', '31-10-2021 12:33:13', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(117, 'IN114992037', 'BTL', '146129114631', 'F4BTL025', '31-10-2021 16:00:00', '31-10-2021 10:26:39', 'BACKEND', '31-10-2021 10:51:58', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(118, 'IN114992424', 'KLS', '146145111886', '', '', '31-10-2021 10:28:37', 'BACKEND', '31-10-2021 10:51:01', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(119, 'IN114992804', 'PGR', '141114203212', 'F4PGR459', '', '31-10-2021 10:30:26', 'BACKEND', '31-10-2021 11:38:39', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(120, 'IN114993157', 'KBU', '0274547315', 'F4KEN106', '', '31-10-2021 10:32:02', 'BACKEND', '31-10-2021 12:05:42', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(121, 'IN114993485', 'KBU', '146113114069', 'F4PGR133', '', '31-10-2021 10:32:35', 'BACKEND', '31-10-2021 10:46:28', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(122, 'IN114993560', 'PGR', '141114127434', 'F4PGR459', '31-10-2021 11:00:00', '31-10-2021 10:33:42', 'BACKEND', '31-10-2021 11:36:06', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(123, 'IN114994595', 'KBU', '143113118674', 'F4KBU216', '31-10-2021 11:00:00', '31-10-2021 10:38:48', 'BACKEND', '31-10-2021 10:52:03', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(124, 'IN114995912', 'PKM', '142144102083', 'F4PKM091', '', '31-10-2021 10:45:01', 'BACKEND', '31-10-2021 11:07:31', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(125, 'IN114996671', 'KEN', '146130118950', 'F4PKM080', '', '31-10-2021 10:49:11', 'BACKEND', '31-10-2021 11:24:17', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(126, 'IN114997196', 'PGR', '141114100457', 'F4PGR232', '31-10-2021 13:00:00', '31-10-2021 10:52:01', 'BACKEND', '31-10-2021 11:37:30', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(127, 'IN115004320', 'KBU', '146113119930', 'F4SMN091', '', '31-10-2021 11:30:11', 'BACKEND', '31-10-2021 11:50:04', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(128, 'IN115004753', 'KBU', '141113108330', 'F4KLS031', '31-10-2021 13:00:00', '31-10-2021 11:32:51', 'BACKEND', '31-10-2021 11:41:26', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(129, 'IN115005177', 'KEN', '141130116239', 'F4KBU202', '', '31-10-2021 11:35:04', 'BACKEND', '31-10-2021 12:25:49', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(130, 'IN115006023', 'KBU', '146113118115', 'F4PGR133', '', '31-10-2021 11:40:07', 'BACKEND', '31-10-2021 11:51:22', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(131, 'IN115006034', 'KLS', '146145109322', 'F4KLS053', '', '31-10-2021 11:40:09', 'BACKEND', '31-10-2021 12:09:04', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(132, 'IN115006374', 'PKM', '146144111057', 'F4PKM092', '', '31-10-2021 11:42:04', 'BACKEND', '31-10-2021 12:05:49', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(133, 'IN115006430', 'PKM', '142144104133', 'F4PKM090', '31-10-2021 13:00:00', '31-10-2021 11:42:25', 'BACKEND', '31-10-2021 11:57:04', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(134, 'IN115008798', 'WTS', '141143101948', 'F4BTL015', '31-10-2021 13:00:00', '31-10-2021 11:57:08', 'BACKEND', '31-10-2021 12:09:25', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(135, 'IN115010548', 'BBS', '141131108211', 'F4KBU225', '31-10-2021 13:00:00', '31-10-2021 12:08:30', 'BACKEND', '31-10-2021 12:12:20', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(136, 'IN115014291', 'SMN', '146133111613', 'F4SMN108', '31-10-2021 13:00:00', '31-10-2021 12:32:29', 'BACKEND', '31-10-2021 12:36:20', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(137, 'IN115015773', 'PGR', '141114192313', 'F4PGR458', '31-10-2021 13:00:00', '31-10-2021 12:41:57', 'BACKEND', '', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(138, 'IN115016551', 'KEN', '141130109199', 'F4KBU219', '01-11-2021 10:00:00', '31-10-2021 12:47:49', 'BACKEND', '', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(139, 'IN115016891', 'BTL', '141129120950', 'F4BTL025', '31-10-2021 13:00:00', '31-10-2021 12:50:19', 'BACKEND', '', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(140, 'IN115018303', 'KGD', '143132106260', 'F4PGR179', '', '31-10-2021 13:00:04', 'BACKEND', '', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(141, 'IN115019762', 'KBU', '141113106606', 'F4KBU210', '', '31-10-2021 13:10:14', 'BACKEND', '', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(142, 'IN115019771', 'KBU', '146113114703', 'F4KBU230', '', '31-10-2021 13:10:20', 'BACKEND', '', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(143, 'IN115020544', 'BBS', '141131112268', 'F4BBS132', '', '31-10-2021 13:15:31', 'BACKEND', '', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(144, 'IN115021429', 'BPN', '146132109296', 'F4PGR103', '31-10-2021 14:00:00', '31-10-2021 13:21:38', 'BACKEND', '', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(145, 'IN115022543', 'SMN', '146133110040', 'F4SMN096', '01-11-2021 09:00:00', '31-10-2021 13:28:40', 'BACKEND', '', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(146, 'IN115023134', 'BTL', '0274367061', 'F4BTL016', '31-10-2021 14:00:00', '31-10-2021 13:32:32', 'BACKEND', '', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(147, 'IN115023761', 'PGR', '141114177204', 'F4GOD009', '31-10-2021 14:00:00', '31-10-2021 13:35:56', 'BACKEND', '', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(148, 'IN115024525', 'PGR', '141114180927', '', '', '31-10-2021 13:40:37', 'QUEUED', '', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(149, 'IN115024529', 'GOD', '146136116589', '', '', '31-10-2021 13:40:41', 'QUEUED', '', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00'),
(150, 'IN97307046', 'NAS', '', '', '', '22-04-2021 13:08:29', 'QUEUED', '29-10-2021 09:30:39', '', '', '', '', '', '', '', '', '2021-10-31', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nossa`
--
ALTER TABLE `nossa`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `incident` (`incident`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nossa`
--
ALTER TABLE `nossa`
  MODIFY `no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;