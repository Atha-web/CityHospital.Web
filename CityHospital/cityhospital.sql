-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 01, 2023 at 09:07 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cityhospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `specialist` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `time` time NOT NULL,
  `day` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `specialist`, `branch`, `time`, `day`) VALUES
(8, 'Dr Vinujaah Vijayakumar', 'Aesthetic Physician', 'Galle', '09:30:00', 'Tuesday & Thursday'),
(2, 'Dr Inbaraj', 'Psychology', 'Jaffna', '17:00:00', 'Monday & Friday'),
(4, 'Dr Surya Kumar', 'Cardiac ', 'Galle', '17:00:00', 'Tuesday & Wednesday'),
(10, 'Dr. Nihal Peeris', 'Chest surgeon ', 'Kurunegala', '17:15:00', 'Wednesday'),
(11, 'Dr Joe', 'Psychology', 'Jaffna', '23:00:00', 'Thursday');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `subject`, `message`) VALUES
('JOHN', 'John@gmail.com', 'Medical Surgery', 'Detail \r\n                        ');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `age` int NOT NULL,
  `contact` int NOT NULL,
  `gender` varchar(10) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `age`, `contact`, `gender`, `doctor`) VALUES
(45, 'sandy', 26, 2147483647, 'male', '5'),
(40, 'sandy', 26, 2147483647, 'male', '5'),
(39, 'sam', 25, 756984256, 'male', '4'),
(44, 'sandy', 26, 2147483647, 'male', '5'),
(43, 'jack', 29, 2147483647, 'female', '2'),
(42, 'jack', 29, 2147483647, 'female', '2'),
(41, 'jack', 29, 2147483647, 'female', '2'),
(46, 'David', 20, 754632597, 'male', '8');

-- --------------------------------------------------------

--
-- Table structure for table `preg`
--

DROP TABLE IF EXISTS `preg`;
CREATE TABLE IF NOT EXISTS `preg` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `preg`
--

INSERT INTO `preg` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'ASD', 'asd@gmail.com', 'asd@gmail.com', '123'),
(2, 'Jackie', 'jack@gmail.com', '', '123');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(21, 'mnb', 'mnb@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(20, 'JOHNNY ', 'John1@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(19, 'JOHN', 'John@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(18, 'asd', 'asd@gmail.com', '202cb962ac59075b964b07152d234b70', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
