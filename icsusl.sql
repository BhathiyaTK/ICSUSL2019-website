-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 10, 2019 at 10:05 AM
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
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deligates`
--

INSERT INTO `deligates` (`id`, `name`, `id_or_title`, `badge_name`, `affiliation`, `country`, `email`, `phone`, `rec_name`, `rec_address`, `part_type`, `bank_rec`, `std_ship`, `lunch`, `dinner`, `tour`, `bank_rec_appr`, `stdship_appr`) VALUES
(2, 'Bhathiya Kariyawasam', '1994', 'Gora', 'undergraduate', 'Sri Lanka', 'bhathiya@gmail.com', '12345678', 'Bhathiya Kariyawasam', '123, Panadura, Sri Lanka', 'student', 'man.jpg', 'female4.jpg', 'chicken', 'chicken', 'option1', 'Approved', 'Approved'),
(3, 'Osusara Kammaawatta', '1996', 'Kana', 'YouTuber', 'Pakistan', 'ossafilms@gmail.com', '987654321', 'Osusara Kammalawatta', '456, Islamabad, Pakistan', 'student', 'man1.jpg', 'female2.jpg', 'veg', 'veg', 'option2', 'No Action Taken', 'Declined'),
(4, 'Yohan Malshika', '1995', 'Huda', 'undergraduate', 'Somalia', 'malshikey@gmail.com', '192837465', 'Yohan Malshika', '789, Mogadishu, Somalia', 'student', 'man1.jpg', 'female4.jpg', 'chicken', 'fish', 'option1', 'Declined', 'No Action Taken'),
(5, 'Janidu Jayasanka', '1996', 'Huiya', 'undergraduate', 'India', 'Jonnyluther@gmail.com', '123987654', 'Janidu Jayasanka', '12, New Delhi, India', 'participant/co-author', 'man1.jpg', 'N/A', 'chicken', 'egg', 'option1', 'No Action Taken', 'No Action Taken'),
(6, 'Nandika Jeewantha', '1993', 'Soiya', 'undergraduate', 'Afghanistan', 'jcodetech@gmail.com', '1122334455', 'Nandika Jeewantha', '32, Kabul, Afghanistan', 'author', 'man.jpg', 'N/A', 'egg', 'chicken', 'option2', 'No Action Taken', 'No Action Taken'),
(7, 'Sachithra Dilshan', '1995', 'Dapa', 'undergraduate', 'Indonesia', 'sachithradil@gmail.com', '66778899', 'Ssachithra Dilshan', '654, Jakarta, Indonesia', 'student', 'female2.jpg', 'female4.jpg', 'fish', 'fish', 'option1', 'No Action Taken', 'No Action Taken'),
(8, 'Gayan Chanaka', '1995', 'Sera', 'undergraduate', 'Malaysia', 'gayan@gmail.com', '21324354', 'Gayan Chanaka', '91, Kuala Lampur, Malaysia', 'ars-author', 'N/A', 'N/A', 'chicken', 'chicken', 'option2', 'No Action Taken', 'No Action Taken'),
(9, 'Sithum Ravishara', '1995', 'Thawa', 'undergraduate', 'Saudi Arabia', 'sithumravi@gmail.com', '76859403', 'Sithum Ravishara', '432, Riyadh, Saudi Arabia', 'participant/co-author', 'female2.jpg', 'N/A', 'chicken', 'chicken', 'option1', 'Approved', 'No Action Taken'),
(10, 'Udani Dhananjana', '1996', 'Udani', 'undergraduate', 'Nepal', 'udani@gmail.com', '10293847', 'Udani Dhananjana', '523, Kathmandu, Nepal', 'author', 'female4.jpg', 'N/A', 'chicken', 'egg', 'option2', 'Declined', 'No Action Taken');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
