-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2017 at 03:13 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learn`
--

-- --------------------------------------------------------

--
-- Table structure for table `confrence_request`
--

DROP TABLE IF EXISTS `confrence_request`;
CREATE TABLE IF NOT EXISTS `confrence_request` (
  `request_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `requested_by` varchar(100) NOT NULL,
  `accepted_by` varchar(100) DEFAULT NULL,
  `topic` varchar(200) NOT NULL,
  `isaccepted` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confrence_request`
--

INSERT INTO `confrence_request` (`request_date`, `requested_by`, `accepted_by`, `topic`, `isaccepted`) VALUES
('2017-06-17 11:39:19', 'siva', '', 'Wantan', b'1'),
('2017-06-17 12:22:39', 'siva', NULL, 'testing', b'1'),
('2017-06-17 12:24:02', 'student', NULL, 'test1', b'1'),
('2017-06-17 12:47:25', 'student', NULL, 'siva', b'1'),
('2017-06-17 13:04:33', 'student', NULL, 'test 4', b'0'),
('2017-06-17 13:16:30', 'student', NULL, 'Wonton', b'0'),
('2017-06-17 13:16:36', 'student', NULL, 'Wonton', b'0'),
('2017-06-17 13:58:39', 'student', NULL, 'L', b'0'),
('2017-06-17 13:59:53', 'student', NULL, 'L', b'0'),
('2017-06-17 14:00:11', 'student', NULL, 'L', b'0'),
('2017-06-17 14:25:31', 'student', NULL, 'How to make wonton', b'0'),
('2017-06-17 14:36:46', 'student', NULL, 'How to make wonton', b'0'),
('2017-06-17 14:39:01', 'student', NULL, 'How to make wonton', b'0'),
('2017-06-17 14:45:01', 'student', NULL, 'How to make wonton', b'0'),
('2017-06-17 14:45:41', 'student', NULL, 'How to make wonton', b'0'),
('2017-06-17 14:46:49', 'student', NULL, 'How to make wonton', b'0'),
('2017-06-17 14:48:03', 'student', NULL, 'How to make wonton', b'0'),
('2017-06-17 14:48:59', 'student', NULL, 'How to make wonton', b'0'),
('2017-06-17 14:51:07', 'student', NULL, 'How to make wonton', b'0'),
('2017-06-17 14:54:19', 'student', NULL, 'Yy', b'0'),
('2017-06-17 15:08:12', 'student', NULL, 'O', b'0'),
('2017-06-17 15:09:03', 'student', NULL, 'block 71', b'0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
