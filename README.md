-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 06, 2022 at 11:23 PM
-- Server version: 5.7.39-cll-lve
-- PHP Version: 7.3.32

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
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(128) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`id`, `name`, `email`, `url`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(2, 'Standard', 'kyjkuang@gmail.com', 'https://apple.com', 3000.00, 'Packages', '2022-11-06 23:16:41', '2022-11-06 23:16:41', '4 Hour Shooting\r\n3-4 Location\r\n65+ Photos', 'Images/standard_thum.jpg', 'Images/standard_1.jpg,Images/standard_2.jpg,Images/standard_3.jpg'),
(3, 'Basic', 'kyjkuang@gmail.com', 'https://apple.com', 1800.00, 'Packages', '2022-11-06 23:13:02', '2022-11-06 23:13:02', '2 Hour Shooting\r\n2 Location\r\n35+ Photos', 'images/basic_thum.jpg', 'images/basic_1.jpg,images/basic_2.jpg,images/basic_3.jpg'),
(6, 'Complete', 'kyjkuang@gmail.com', 'https://apple.com', 4200.00, 'Packages', '2022-11-06 23:22:26', '2022-11-06 23:22:26', '6 Hour Shooting\r\n4-6 Location\r\n95+ Photos', 'images/complete_thum.jpg', 'images/complete_1.jpg,images/complete_2.jpg,images/complete_3.jpg');

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
