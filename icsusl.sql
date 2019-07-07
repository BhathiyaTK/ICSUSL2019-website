-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 07, 2019 at 07:34 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icsusl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `deligates`
--

DROP TABLE IF EXISTS `deligates`;
CREATE TABLE IF NOT EXISTS `deligates` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `id_or_title` varchar(225) NOT NULL,
  `badge_name` varchar(225) NOT NULL,
  `affiliation` varchar(225) NOT NULL,
  `country` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `rec_name` varchar(225) NOT NULL,
  `rec_address` varchar(225) NOT NULL,
  `part_type` varchar(225) NOT NULL,
  `bank_rec` varchar(225) NOT NULL,
  `std_ship` varchar(225) NOT NULL,
  `lunch` varchar(225) NOT NULL,
  `dinner` varchar(225) NOT NULL,
  `tour` varchar(225) NOT NULL,
  `bank_rec_appr` varchar(225) NOT NULL,
  `stdship_appr` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deligates`
--

INSERT INTO `deligates` (`id`, `name`, `id_or_title`, `badge_name`, `affiliation`, `country`, `email`, `phone`, `rec_name`, `rec_address`, `part_type`, `bank_rec`, `std_ship`, `lunch`, `dinner`, `tour`, `bank_rec_appr`, `stdship_appr`) VALUES
(2, 'Bhathiya Kariyawasam', '1994', 'BK', 'undergraduate', 'Sri Lanka', 'bhathiyakariyawasam94@gmail.com', '12345678', 'Bhathiya Kariyawasam', '123, Panadura, Sri Lanka', 'student', 'man.jpg', 'female4.jpg', 'chicken', 'chicken', 'yes', 'Approved', 'Approved'),
(3, 'Osusara Kammaawatta', '1996', 'OSSA', 'YouTuber', 'Sri Lanka', 'ossafilms@gmail.com', '987654321', 'Osusara Kammalawatta', '456, Hanwalla, Sri Lanka', 'student', 'man1.jpg', 'female2.jpg', 'veg', 'veg', 'yes', 'No Action Taken', 'Declined'),
(4, 'Yohan Malshika', '1995', 'YM', 'undergraduate', 'Sri Lanka', 'malshikey@gmail.com', '192837465', 'Yohan Malshika', '789, Waskaduwa, Sri Lanka', 'student', 'man1.jpg', 'female4.jpg', 'chicken', 'fish', 'yes', 'Declined', 'No Action Taken');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
