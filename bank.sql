-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 03:41 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `balance` float NOT NULL,
  `transfers` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `balance`, `transfers`) VALUES
(1, 'Reshma', 'reshma@gmail.com', 43000, 2000),
(2, 'Shreyas', 'shreyas@gmail.com', 57000, -2000),
(3, 'Bhumika', 'bhumika@gmail.com', 64000, 0),
(4, 'Utsav', 'utsav@gmail.com', 56000, 0),
(5, 'Sowmya', 'sowmya@gmail.com', 16000, 0),
(6, 'Shelly', 'shelly@gmail.com', 25000, 0),
(7, 'Ayman', 'ayman@gmail.com', 30000, 0),
(8, 'Coco', 'coco@gmail.com', 80000, 0),
(9, 'Milo', 'milo@gmail.com', 100000, 0),
(10, 'Meena', 'meena@gmail.com', 200000, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
