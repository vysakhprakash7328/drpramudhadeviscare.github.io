-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 27, 2020 at 10:43 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `veterinary`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `username`, `password`) VALUES
('vpk', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `clientdetails`
--

DROP TABLE IF EXISTS `clientdetails`;
CREATE TABLE IF NOT EXISTS `clientdetails` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `date` varchar(15) NOT NULL,
  `file` tinyblob NOT NULL,
  `message` varchar(50) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientdetails`
--

INSERT INTO `clientdetails` (`id`, `name`, `district`, `phone`, `date`, `file`, `message`) VALUES
(1, 'name', 'Malappuram', '8594036023', '20/08/2020', '', ''),
(2, 'vysakh', 'Kozhikode', '8594036023', '22/08/2020', '', ''),
(3, 'vysakh', 'Malappuram', '8594036023', '27/08/2020', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `otpverification`
--

DROP TABLE IF EXISTS `otpverification`;
CREATE TABLE IF NOT EXISTS `otpverification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mobile_number` varchar(10) NOT NULL,
  `verification_code` varchar(10) NOT NULL,
  `verified` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `verification_code` (`verification_code`),
  UNIQUE KEY `verified` (`verified`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `otpverification`
--

INSERT INTO `otpverification` (`id`, `mobile_number`, `verification_code`, `verified`) VALUES
(1, '9746751634', '99560', 0);

-- --------------------------------------------------------

--
-- Table structure for table `otp_expiry`
--

DROP TABLE IF EXISTS `otp_expiry`;
CREATE TABLE IF NOT EXISTS `otp_expiry` (
  `id` int(11) NOT NULL,
  `otp` varchar(10) NOT NULL,
  `is_expired` int(11) NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_temp`
--

DROP TABLE IF EXISTS `password_reset_temp`;
CREATE TABLE IF NOT EXISTS `password_reset_temp` (
  `email` varchar(250) NOT NULL,
  `key` varchar(250) NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password_reset_temp`
--

INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`) VALUES
('vysakhprakash3@gmail.com', '768e78024aa8fdb9b8fe87be86f6474581bd6cc777', '2020-08-23 17:22:01');

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

DROP TABLE IF EXISTS `registered_users`;
CREATE TABLE IF NOT EXISTS `registered_users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`id`, `email`) VALUES
(1, 'vysakhprakash3@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

DROP TABLE IF EXISTS `signup`;
CREATE TABLE IF NOT EXISTS `signup` (
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `repassword` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `email`, `password`, `repassword`) VALUES
('vysakh prakash', 'vysakhprakash3@gmail.com', 'kl65m7328', 'kl65m7328'),
('vysakh', 'vpk@gmail.com', '7328', '7328'),
('nirmala', 'nirmalababu@gmail.com', 'nirmala@123', 'nirmala@123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
