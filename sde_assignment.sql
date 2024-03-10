-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 10, 2024 at 02:49 PM
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
-- Database: `sde_assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `customer_name` varchar(100) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `agency_name` varchar(100) NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `model` varchar(100) NOT NULL,
  `num` varchar(100) NOT NULL,
  `rent` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `car_rental_agencies`
--

DROP TABLE IF EXISTS `car_rental_agencies`;
CREATE TABLE IF NOT EXISTS `car_rental_agencies` (
  `cra_id` int NOT NULL AUTO_INCREMENT,
  `cra_name` varchar(100) NOT NULL,
  `cra_email` varchar(100) NOT NULL,
  `cra_password` varchar(100) NOT NULL,
  PRIMARY KEY (`cra_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `car_rental_agencies`
--

INSERT INTO `car_rental_agencies` (`cra_id`, `cra_name`, `cra_email`, `cra_password`) VALUES
(3, 'Ola', 'ola12@gmail.com', 'ola'),
(4, 'Uber', 'uber12@gmai.com', 'uber');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `customer_id` int NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(100) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_password` varchar(100) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_password`) VALUES
(7, 'Gourav', 'gourav07@gmail.com', 'gourav'),
(6, 'Arjun', 'arjun07@gmail.com', 'arjun');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_details`
--

DROP TABLE IF EXISTS `vehicle_details`;
CREATE TABLE IF NOT EXISTS `vehicle_details` (
  `agency_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `v_id` int NOT NULL AUTO_INCREMENT,
  `v_model` varchar(100) NOT NULL,
  `v_num` varchar(100) NOT NULL,
  `v_seat` varchar(100) NOT NULL,
  `v_rent` varchar(100) NOT NULL,
  PRIMARY KEY (`v_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `vehicle_details`
--

INSERT INTO `vehicle_details` (`agency_name`, `v_id`, `v_model`, `v_num`, `v_seat`, `v_rent`) VALUES
('Ola', 3, 'Swift Dezire', 'Dl12fs12', '4', '2000'),
('Ola', 4, 'Audi', 'UK120000', '4', '10000'),
('Uber', 5, 'Maruti suzuki SUV', 'DL1204520', '6', '5000'),
('Uber', 6, 'Wagnor', 'DL547325', '4', '2500'),
('Uber', 7, 'Honda city', 'Dl5421356', '4', '1500');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
