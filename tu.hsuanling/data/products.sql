-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 13, 2022 at 07:38 PM
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
-- Database: `ixd608_HsuanLingTu_store_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `products` varchar(128) NOT NULL,
  `size` varchar(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `categories` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `products`, `size`, `price`, `categories`, `description`, `date_created`, `date_modified`, `thumbnail`, `image`) VALUES
(1, 'Kalanchoe Millotii', '2.5\"', 13.00, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(2, 'Pachyphytum Oferia', '2.5\"', 10.00, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(3, 'Mammillaria Polythele', '2.5\"', 10.00, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(4, 'Canary Aeonium', '4\"', 18.00, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(5, 'Echeveria Elegans', '4\"', 20.00, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(6, 'Polaskia Chichipe', '2.5\"', 13.00, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(7, 'Haworthia Limifolia', '2.5\"', 13.00, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(8, 'Sedum Adolphii', '1.5\"', 8.00, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(9, 'Oddity Sempervivum', '2.5\"', 13.00, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(10, 'Haworthia Tortuosa', '5\"', 20.00, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(11, 'Gymnocalycium Mihanovichii', '2.5\"', 10.00, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(12, 'Pachyphytum Compactum', '2.5\"', 10.00, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
