-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2022 at 07:06 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `packets`
--

-- --------------------------------------------------------

--
-- Table structure for table `arp`
--

CREATE TABLE `arp` (
  `Time_Stamp` varchar(30) DEFAULT NULL,
  `Source_Mac_Address` varchar(30) DEFAULT NULL,
  `Destination_Mac_Address` varchar(30) DEFAULT NULL,
  `Source_IpAddress` varchar(30) DEFAULT NULL,
  `Destination_IpAddress` varchar(30) DEFAULT NULL,
  `Length` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ip`
--

CREATE TABLE `ip` (
  `Time_Stamp` varchar(30) DEFAULT NULL,
  `Source_Mac_Address` varchar(30) DEFAULT NULL,
  `Destination_Mac_Address` varchar(30) DEFAULT NULL,
  `Source_IpAddress` varchar(30) DEFAULT NULL,
  `Destination_IpAddress` varchar(30) DEFAULT NULL,
  `Source_Port` varchar(30) DEFAULT NULL,
  `Destination_Port` varchar(30) DEFAULT NULL,
  `Length` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `udp`
--

CREATE TABLE `udp` (
  `Time_Stamp` varchar(30) DEFAULT NULL,
  `Source_Mac_Address` varchar(30) DEFAULT NULL,
  `Destination_Mac_Address` varchar(30) DEFAULT NULL,
  `Source_IpAddress` varchar(30) DEFAULT NULL,
  `Destination_IpAddress` varchar(30) DEFAULT NULL,
  `Source_Port` varchar(30) DEFAULT NULL,
  `Destination_Port` varchar(30) DEFAULT NULL,
  `Length` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
