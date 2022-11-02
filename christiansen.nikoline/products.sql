-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 02, 2022 at 09:06 PM
-- Server version: 5.7.36-39-log
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u55005db3`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `thumbnail` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `category`, `date_create`, `date_modify`, `thumbnail`, `images`) VALUES
(1, '12', '16.20', 'In celebration of our 12th anniversary!', 'tall_can', '2022-11-02 20:50:50', '2022-11-02 20:50:50', '12_1.jpg', '12_1.jpg'),
(2, 'Dark Days', '15.00', 'Dark Days is a black ale with notes of coffee, caramel, and roasted malt. A portion of all sales of Dark Days will benefit Apiary for Practical Support (@apiaryps), a hub providing technical assistance to groups that provide abortion access.', 'tall_can', '2022-11-02 20:52:06', '2022-11-02 20:52:06', 'dark_days_1.jpg', 'dark_days_1.jpg'),
(3, 'Back Cove', '13.00', 'Back Cove is a North German-style pilsner fermented with kellerbier yeast. Harmoniously balanced, with hints of orchard fruit, clean malt and earthy bitterness. 5.2%', 'tall_can', '2022-11-02 20:53:30', '2022-11-02 20:53:30', 'back_cove_1.jpg', 'back_cove_1.jpg'),
(4, 'Cutter', '15.00', 'Cutter (n)—a single-masted sailing vessel with the mast set about two-fifths of the way aft along the waterline. In a sea of IPAs, Cutter stands tall. This Double IPA sails with citrus and tropical fruit aromas and a balanced hoppy finish. Big, bold, and beautiful. DOUBLE IPA ABV 8%', 'tall_can', '2022-11-02 20:54:45', '2022-11-02 20:54:45', 'cutter_1.jpg', 'cutter_1.jpg'),
(5, 'Daymark', '13.72', 'Chart a new course with Daymark as your guide. This bright, citrusy pale ale finishes crisp and clean with just a touch of spicy rye. 5.5%', 'tall_can', '2022-11-02 20:56:45', '2022-11-02 20:56:45', 'daymark_1.jpg', 'daymark_1.jpg'),
(6, 'Ishmael', '13.72', 'Ishmael’s clean, malty flavor and medium body makes it the perfect dinner companion. You could call it an altbier or an amber. We call it a copper ale. We call it Ishmael. 4.9%', 'tall_can', '2022-11-02 20:58:14', '2022-11-02 20:58:14', 'ishmael_1.jpg', 'ishmael_1.jpg'),
(7, 'Maine Island Trail AIe', '13.72', 'SESSION INDIA PALE ALE\r\nWith a bright malt body and bold notes of citrus and pine, Maine Island Trail Ale is the perfect companion for summer in Maine. We are honored to produce this beer in celebration of the Maine Island Trail. The Maine Island Trail Association’s thoughtful use and volunteer stewardship of Maine’s wild islands mirrors Rising Tide’s respect and love for the coast of Maine.\r\nABV 4.3%', 'tall_can', '2022-11-02 20:59:41', '2022-11-02 20:59:41', 'maine_island_1.jpg', 'maine_island_1.jpg'),
(8, 'Mountainside', '13.72', 'As the season changes from summer to fall and on into winter, our attention shifts from the sea to the mountains. Mountainside IPA is the perfect companion for all of your mountainside adventures. ABV 6.0%', 'tall_can', '2022-11-02 21:00:39', '2022-11-02 21:00:39', 'mountainside_1.jpg', 'mountainside_1.jpg'),
(9, 'Oktoberfest', '13.20', 'MARZEN STYLE LAGER\r\nComplex and malty while still being dry and crisp, our Märzen-style lager is a celebration of the crisp weather of autumn. Prost!\r\nABV 5.7%', 'tall_can', '2022-11-02 21:01:34', '2022-11-02 21:01:34', 'oktoberfest_1.jpg', 'oktoberfest_1.jpg'),
(10, 'Playa Bella', '15.00', 'Mexican-style amber lager brewed with roasted poblanos. Notes of caramel, chocolate, and pepper. This beer screams tacos and mole!', 'tall_can', '2022-11-02 21:02:01', '2022-11-02 21:02:01', 'playa_bella_1.jpg', 'playa_bella_1.jpg'),
(11, 'Zephyr', '13.20', 'INDIA PALE ALE\r\nRefreshing like a westerly breeze, Zephyr is a pleasantly balanced IPA with waves of citrus. A modern classic.\r\nABV 6.5%', 'tall_can', '2022-11-02 21:04:24', '2022-11-02 21:04:24', 'zephyr_1.jpg', 'zephyr_1.jpg'),
(12, 'Waypoint', '13.74', 'Once the heat of summer breaks, it’s time to find your way to our coffee porter, Waypoint. This beer is brewed with the highest quality coffee blended and roasted by our neighbors at Tandem Coffee Roasters to give our mild porter a rich fruity complexity held up by a chocolatey, malty backbone. This East Bayside collaboration is available from foliage season into the depths of our Maine winter. 5%', 'tall_can', '2022-11-02 21:05:27', '2022-11-02 21:05:27', 'waypoint_1.jpg', 'waypoint_1.jpg');

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
