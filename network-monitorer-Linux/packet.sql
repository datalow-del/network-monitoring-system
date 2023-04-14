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
-- Database: `packet`
--

-- --------------------------------------------------------

--
-- Table structure for table `icmpip6`
--

CREATE TABLE `icmpip6` (
  `Timestamp` varchar(30) DEFAULT NULL,
  `Source_ip` varchar(30) DEFAULT NULL,
  `Des_ip` varchar(30) DEFAULT NULL,
  `hoplimit` varchar(30) DEFAULT NULL,
  `nextheaderinfo` varchar(30) DEFAULT NULL,
  `payloadlength` varchar(30) DEFAULT NULL,
  `neighbour` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `udpip6`
--

CREATE TABLE `udpip6` (
  `Timestamp` varchar(30) DEFAULT NULL,
  `Source_ip` varchar(30) DEFAULT NULL,
  `Des_ip` varchar(30) DEFAULT NULL,
  `hoplimit` varchar(30) DEFAULT NULL,
  `nextheaderinfo` varchar(30) DEFAULT NULL,
  `payloadlength` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
