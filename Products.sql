-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 28, 2022 at 02:59 AM
-- Server version: 5.7.39-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `katelynn_Photography`
--

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `id` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `quantity` int(20) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `color` varchar(128) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`id`, `title`, `quantity`, `price`, `color`, `date_create`, `date_modify`, `description`, `thumbnail`) VALUES
(2, 'Standard', 0, '3000.00', 'Packages', '2022-11-06 23:16:41', '2022-11-06 23:16:41', '4 Hour Shooting\r\n3-4 Location\r\n65+ Photos', 'images/s1.jpg'),
(3, 'Basic', 0, '1800.00', 'Packages', '2022-11-06 23:13:02', '2022-11-06 23:13:02', '2 Hour Shooting\r\n2 Location\r\n35+ Photos', 'images/b1.jpg'),
(6, 'Complete', 0, '4200.00', 'Packages', '2022-11-06 23:22:26', '2022-11-06 23:22:26', '6 Hour Shooting\r\n4-6 Location\r\n95+ Photos', 'images/c1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Products`
--
ALTER TABLE `Products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
