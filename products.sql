-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 26, 2022 at 04:25 PM
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
-- Database: `karen_ixd608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL,
  `url` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`, `url`) VALUES
(1, 'Chocolate Cookies', 4.05, '2022-10-26 11:35:16', '2022-10-26 12:36:44', 'Our crispy chocolate cookies are made of 75% dark chocolate chips, organic cocoa powder, and fresh peanuts.', 'chocolatecookies.jog', 'chocolatecookies.jog', 'http://karenchangart.com/aau/ixd608/chang.karen/product_item.php?id=1'),
(2, 'Cinnamon Roll', 3.20, '2022-10-26 12:36:16', '2022-10-26 12:36:16', 'Our cinnamon Roll is glazed with premium cinnamon icing.', 'cinnamonroll.jpg', 'cinnamonroll.jpg', 'http://karenchangart.com/aau/ixd608/chang.karen/product_item.php?id=1'),
(3, 'Lemon Souffle', 3.70, '2022-10-26 16:09:18', '2022-10-26 16:09:18', 'Our lemon souffle is super fluffy and rich in flavor. We use fresh-squeezed lemon juice and hand-shredded lemon peel for the flavor.', 'lemonsouffle.jpg', 'lemonsouffle.jpg', 'http://karenchangart.com/aau/ixd608/chang.karen/product_item.php?id=1'),
(4, 'Birthday Cupcake', 3.20, '2022-10-26 16:11:44', '2022-10-26 16:11:44', 'Our colorful birthday cupcakes spread cheer and excitement in your party!', 'birthdaycupcake.jpg', 'birthdaycupcake.jpg', 'http://karenchangart.com/aau/ixd608/chang.karen/product_item.php?id=1'),
(5, 'Boroh', 3.30, '2022-10-26 16:12:48', '2022-10-26 16:12:48', 'Our freshly baked boroh is creamy, fluffy, and sweet.', 'boroh.jpg', 'boroh.jpg', 'http://karenchangart.com/aau/ixd608/chang.karen/product_item.php?id=1'),
(6, 'cheesecake', 3.50, '2022-10-26 16:13:34', '2022-10-26 16:13:34', 'Our signature cheesecake is made of organic cream cheese and premium vanilla cookies.', 'cheesecake.jpg', 'cheesecake.jpg', 'http://karenchangart.com/aau/ixd608/chang.karen/product_item.php?id=1'),
(7, 'Chocolate Croissant', 3.99, '2022-10-26 16:14:32', '2022-10-26 16:14:32', 'Our crispy homemade chocolate croissant goes perfectly with your morning coffee!', 'chocolatecroissant.jpg', 'chocolatecroissant.jpg', 'http://karenchangart.com/aau/ixd608/chang.karen/product_item.php?id=1'),
(8, 'Classic Brownie', 3.60, '2022-10-26 16:15:47', '2022-10-26 16:15:47', 'We make the most authentic and classic brownies that quench your craving for sweets.', 'classicbrownie.jpg', 'classicbrownie.jpg', 'http://karenchangart.com/aau/ixd608/chang.karen/product_item.php?id=1'),
(9, 'Coconut Twist', 3.20, '2022-10-26 16:17:02', '2022-10-26 16:17:02', 'Our premium coconut twist is crunch outside and soft inside. We use fresh organic coconuts for flavor and texture.', 'coconuttwist.jpg', 'coconuttwist.jpg', 'http://karenchangart.com/aau/ixd608/chang.karen/product_item.php?id=1'),
(10, 'Expresso Bun', 3.70, '2022-10-26 16:17:53', '2022-10-26 16:17:53', 'Our expresso bun is made of dark roast Arabica coffee beans and organic cocoa powder.', 'expressobun.jpg', 'expressobun.jpg', 'http://karenchangart.com/aau/ixd608/chang.karen/product_item.php?id=1'),
(11, 'Milk Butter Puff', 3.80, '2022-10-26 16:18:44', '2022-10-26 16:18:44', 'We use homemade vanilla butter as delicious puff cream.', 'milkbutterpuff.jpg', 'milkbutterpuff.jpg', 'http://karenchangart.com/aau/ixd608/chang.karen/product_item.php?id=1'),
(12, 'Red Bean Bun', 2.99, '2022-10-26 16:19:43', '2022-10-26 16:19:43', 'Our sweet red bean is freshly cooked every morning!', 'readbeanbun.jpg', 'readbeanbun.jpg', 'http://karenchangart.com/aau/ixd608/chang.karen/product_item.php?id=1');

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
