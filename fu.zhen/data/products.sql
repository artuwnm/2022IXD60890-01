-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 10, 2022 at 11:51 PM
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
-- Database: `zhen_ixd608_example`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `category` varchar(32) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `price`, `quantity`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'Key Necklace', 'necklace', '150.00', 5, '2022-11-06 18:46:22', '2022-12-02 23:03:52', 'Golden necklace with a key shape.', 'key_necklace_thumbnail.JPG', 'key_necklace_thumbnail.JPG,key_necklace_1.JPG,key_necklace_2.JPG,key_necklace_3.JPG,key_necklace_4.JPG'),
(2, 'Leaf Necklace', 'necklace', '500.00', 3, '2022-11-06 18:48:37', '2022-11-06 18:48:37', 'Golden necklace with a leaf shape.', 'leaf_necklace_thumbnail.JPG', 'leaf_necklace_thumbnail.JPG,leaf_necklace_1.JPG,leaf_necklace_2.JPG,leaf_necklace_3.JPG,leaf_necklace_4.JPG'),
(3, 'Black Choker', 'necklace', '50.00', 10, '2022-11-06 18:51:00', '2022-11-06 18:51:00', 'Black choker.', 'black_choker_thumbnail.JPG', 'black_choker_thumbnail.JPG,black_choker_1.JPG,black_choker_2.JPG,black_choker_3.JPG,black_choker_4.JPG'),
(4, 'Pearl Ring', 'ring', '30.00', 6, '2022-11-06 18:53:12', '2022-11-06 18:53:12', 'Ring made with small white pearls.', 'pearl_ring_thumbnail.JPG', 'pearl_ring_thumbnail.JPG,pearl_ring_1.JPG,pearl_ring_2.JPG,pearl_ring_3.JPG,pearl_ring_4.JPG'),
(5, 'Rosegold Ring', 'ring', '50.00', 7, '2022-11-06 18:55:40', '2022-11-06 18:55:40', 'Rosegold ring with small crystal.', 'rosegold_ring_thumbnail.JPG', 'rosegold_ring_thumbnail.JPG,rosegold_ring_1.JPG,rosegold_ring_2.JPG,rosegold_ring_3.JPG,rosegold_ring_4.JPG'),
(7, 'Gold Ring', 'ring', '50.00', 2, '2022-11-06 18:57:03', '2022-11-06 18:57:03', 'Gold ring with small crystal.', 'gold_ring_thumbnail.JPG', 'gold_ring_thumbnail.JPG,gold_ring_1.JPG,gold_ring_2.JPG,gold_ring_3.JPG,gold_ring_4.JPG'),
(8, 'Silver Ring', 'ring', '45.00', 12, '2022-11-06 18:58:40', '2022-11-06 18:58:40', 'Wide silver and black ring.', 'silver_ring_thumbnail.JPG', 'silver_ring_thumbnail.JPG,silver_ring_1.JPG,silver_ring_2.JPG,silver_ring_3.JPG,silver_ring_4.JPG'),
(9, 'Black Ring', 'ring', '45.00', 15, '2022-11-06 18:59:49', '2022-11-06 18:59:49', 'Wide black ring.', 'black_ring_thumbnail.JPG', 'black_ring_thumbnail.JPG,black_ring_1.JPG,black_ring_2.JPG,black_ring_3.JPG,black_ring_4.JPG'),
(10, 'Gold Earring', 'earring', '70.00', 6, '2022-11-06 19:01:54', '2022-11-06 19:01:54', 'Long golden earring with a pearl.', 'gold_earring_thumbnail.JPG', 'gold_earring_thumbnail.JPG,gold_earring_1.JPG,gold_earring_2.JPG,gold_earring_3.JPG,gold_earring_4.JPG'),
(11, 'Pearl Earring', 'earring', '55.00', 8, '2022-11-06 19:03:32', '2022-11-06 19:03:32', 'Hooped earring with pearls.', 'pearl_earring_thumbnail.JPG', 'pearl_earring_thumbnail.JPG,pearl_earring_1.JPG,pearl_earring_2.JPG,pearl_earring_3.JPG,pearl_earring_4.JPG'),
(12, 'Bowknot Earring', 'earring', '80.00', 16, '2022-11-06 19:04:47', '2022-11-06 19:04:47', 'Bowknot earring with crystal.', 'bowknot_earring_thumbnail.JPG', 'bowknot_earring_thumbnail.JPG,bowknot_earring_1.JPG,bowknot_earring_2.JPG,bowknot_earring_3.JPG,bowknot_earring_4.JPG'),
(13, 'Silver Earring', 'earring', '30.00', 20, '2022-11-06 19:06:28', '2022-12-07 16:30:05', 'Silver earring with a small crystal.', 'silver_earring_thumbnail.JPG', 'silver_earring_thumbnail.JPG,silver_earring_1.JPG,silver_earring_2.JPG,silver_earring_3.JPG,silver_earring_4.JPG');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
