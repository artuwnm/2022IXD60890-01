-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 17, 2022 at 07:22 PM
-- Server version: 5.7.40-cll-lve
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
-- Database: `yushiz_ixd608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `date_create`, `description`, `thumbnail`, `images`) VALUES
(2, 'proof (collector\'s edition)', '259.00', 'album', '2022-11-06 21:42:56', 'this album is a limit edition, and the sales of this album will not be counted in the billboard chart at the label\'s request.', 'proof_collector_thumb.jpg', 'proof_collector_1.jpg,proof_collector_2.jpg'),
(3, 'jack in the box', '49.99', 'album', '2022-11-06 21:42:56', 'jhope first solo album', 'jack_in_the_box_thumb.jpg', 'jack_in_the_box_1.jpg,jack_in_the_box_2.jpg'),
(9, '2 cool 4 skool', '21.00', 'album', '2022-11-06 21:56:07', 'bts single album 2 cool 4 skool', '2cool4skool_thumb.jpg', '2cool4skool_1.jpg'),
(10, 'you never walk alone', '23.00', 'album', '2022-11-06 21:56:07', 'bts new album \'you never walk alone\'. ', 'you_never_walk_alone_thumb.jpg', 'you_never_walk_alone_1.jpg'),
(11, 'bts official light stick', '59.00', 'merch', '2022-11-06 21:56:07', 'bts official light stick map of the soul special edition', 'army_bomb_thumb.jpg', 'army_bomb_1.jpg'),
(12, 'bts 2022 wall calendar', '27.00', 'merch', '2022-11-06 21:56:07', 'bts 2022 wall calendar', 'bts_2022_calendar_thumb.jpg', 'bts_2022_calendar_1.jpg'),
(13, 'indigo (set)', '27.68', 'album', '0000-00-00 00:00:00', 'RM\'s first album.', 'indigo_set_thumb.jpg', 'indigo_set_1.jpg'),
(14, 'love yourself \"HER\"', '48.30', 'album', '0000-00-00 00:00:00', 'BTS album Love Yourself series.', 'bts_love_yourself_thumb.jpg', 'bts_love_yourself_1.jpg,bts_love_yourself_2.jpg'),
(15, 'butter(set)', '33.07', 'album', '0000-00-00 00:00:00', 'BTS released their CD single \"Butter\" on July 9. The CD single includes the shimmering summer song \"Butter\" as well as \"Permission to Dance\" that will get your heart pumping and dance again. ', 'butter_thumb.jpg', 'butter_1.jpg,butter_2.jpg'),
(16, 'Jin (BTS) The Astronaut (Random)', '15.79', 'album', '0000-00-00 00:00:00', 'BTS Jin\'s 1st solo album.', 'the_astronaut_thumb.jpg', 'the_astronaut_1.jpg'),
(17, 'Official Light Stick Keyring SE', '13.93', 'merch', '0000-00-00 00:00:00', 'BTS Official Light Stick Keyring SE.', 'lightstick_key_thumb.jpg', 'lightstick_key_1.jpg,lightstick_key_2.jpg'),
(18, 'Proof (Standard Edition)', '51.00', 'album', '0000-00-00 00:00:00', 'Standard version of BTS\'s album \"PROOF\".', 'proof_standard_thumb.jpg', 'proof_standard_1.jpg,proof_standard_2.jpg'),
(19, 'BTS Young Forever in The Most Beautiful Moment in Life', '19.32', 'album', '0000-00-00 00:00:00', 'The final chapter of the story of The most beautiful moment in life.\r\nHaving won over the world with their two-part The most beautiful moment in life series in 2015, BTS will release their special album The most beautiful moment in life: YOUNG FOREVER on May 2.', 'young_forever_thumb.jpg', 'young_forever_1.jpg,young_forever_2.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
