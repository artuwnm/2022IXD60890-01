-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 06, 2022 at 04:53 PM
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
-- Database: `echiang_ixd608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `date_create`, `date_modify`, `thumbnail`, `images`) VALUES
(1, 'Cocktail Dress', '1950s inspired dress for cocktail party.', 75.00, '2022-11-06 16:40:18', '2022-11-06 16:40:18', 'cocktail_dress_thumb.jpg', 'cocktail_dress_1.jpg,cocktail_dress_2.jpg'),
(2, 'Striped Pants', '1950s inspired striped pants for eveyday wear.', 45.00, '2022-11-06 16:40:18', '2022-11-06 16:40:18', 'striped_pants_thumb.jpg', 'striped_pants_1.jpg,striped_pants_2.jpg'),
(3, 'Work shirt', '1960s inspired Work Shirt for everyday wear.', 35.00, '2022-11-06 16:40:18', '2022-11-06 16:40:18', 'work_shirt_thumb.jpg', 'work_shirt_1.jpg'),
(4, 'Charming Sweater', '1980s inspired charming sweater for casual wear.', 55.00, '2022-11-06 16:40:18', '2022-11-06 16:40:18', 'charming_sweater_thumb.jpg', 'charming_sweater_1.jpg'),
(5, 'Pencil Pants', '1990s inspired pencil pants for everyday and professional wear.', 55.00, '2022-11-06 16:40:18', '2022-11-06 16:40:18', 'pencil_pants_thumb.jpg', 'pencil_pants_1.jpg'),
(6, 'Collar Button Fitted Dress', '1950s inspired dress for casual wear.', 120.00, '2022-11-06 16:40:18', '2022-11-06 16:40:18', 'collar_dress_thumb.jpg', 'collar_dress_1.jpg'),
(7, 'Long Sleeve Blouse', 'Vintage long sleeve blouse for casual wear.', 55.00, '2022-11-06 16:40:18', '2022-11-06 16:40:18', 'long_blouse_thumb.jpg', 'long_blouse_1.jpg'),
(8, 'Mini Skirt Brown', 'Pattered mini skirt in brown for everyday wear.', 55.00, '2022-11-06 16:40:18', '2022-11-06 16:40:18', 'mini_skirt_thumb.jpg', 'mini_skirt_1.jpg'),
(9, 'Ankle Pencil Skirt', 'Ankle Pencil Skirt in brown for everyday wear.', 65.00, '2022-11-06 16:40:18', '2022-11-06 16:40:18', 'ankle_skirt_thumb.jpg', 'ankle_skirt_1.jpg'),
(10, 'Denim Jean Jacket ', 'Denim Jean Jacket for everyday wear.', 65.00, '2022-11-06 16:40:18', '2022-11-06 16:40:18', 'denim_jacket_thumb.jpg', 'denim_jacket_1.jpg'),
(11, 'Denim Jean pants', 'Denim Jean pants for everyday wear.', 75.00, '2022-11-06 16:40:18', '2022-11-06 16:40:18', 'denim_pants_thumb.jpg', 'denim_pants_1.jpg'),
(12, 'Polka Dot Dress', '1950s inspired Polka Dot Dress for everyday wear.', 95.00, '2022-11-06 16:40:18', '2022-11-06 16:40:18', 'polka_dress_thumb.jpg', 'polka_dress_1.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
