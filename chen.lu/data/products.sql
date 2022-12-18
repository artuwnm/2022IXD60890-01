-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 05, 2022 at 01:48 AM
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
-- Database: `lchen_ixd608`
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
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL,
  `instruction` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`, `instruction`) VALUES
(1, 'Dress', '12.99', 'cat', '2022-11-06 22:40:54', '2022-11-06 22:40:54', 'The pullover style makes getting in and out simple and easy, so they can get to the candy and snacks faster.', 'cat_dress_thumb.jpg', 'cat_dress_thumb.jpg,cat_dress_1.jpg,cat_dress_2.jpg,cat_dress_3.jpg', 'Turn inside out, machine wash cold with like colors on a gentle cycle. Only non-chlorine bleach when needed. Tumble dry low. Do not iron.'),
(2, 'Hoodie', '13.49', 'cat', '2022-11-06 22:45:08', '2022-11-06 22:45:08', 'Easy to put on and take off with a stretched, ribbed belly panel and it even has a working pocket.', 'cat_hoodie_thumb.jpg', 'cat_hoodie_thumb.jpg,cat_hoodie_1.jpg,cat_hoodie_2.jpg,cat_hoodie_3.jpg', 'Turn inside out, machine wash cold with like colors, gentle cycle, only non-chlorine bleach when needed, tumble dry low. Do not iron.'),
(3, 'Hat', '8.99', 'cat', '2022-11-06 22:47:29', '2022-11-06 22:47:29', 'Made with plush material and fluffy white trim, just like the real thing!', 'cat_hat_thumb.jpg', 'cat_hat_thumb.jpg,cat_hat_1.jpg,cat_hat_2.jpg', 'Spot clean only. Hand wash cold separately. Do not bleach. Lay flat to dry.'),
(4, 'Bow Tie', '6.99', 'dog', '2022-11-06 22:49:49', '2022-11-06 22:49:49', 'Dapper dog bow to elevate your pet’s holiday look.', 'dog_bowtie_thumb.jpg', 'dog_bowtie_thumb.jpg,dog_bowtie_1.jpg,dog_bowtie_2.jpg,dog_bowtie_3.jpg', 'Spot clean only.'),
(5, 'Sweater', '46.00', 'other', '2022-11-06 22:53:20', '2022-11-06 22:53:20', 'Your buddy is going to look great and feel cozy in this Pig Sweater! This double-layer fleece sweater is designed with velcro straps that attach in front of and behind the front legs. It also features a hole for easy leash attachment!', 'pig_sweater_thumb.jpg', 'pig_sweater_thumb.jpg,pig_sweater_1.jpg,pig_sweater_2.jpg,pig_sweater_3.jpg', 'Machine Wash Cold with Straps Fastened. Wash with Like Colors. Tumble Dry Low.'),
(6, 'Bandana', '6.61', 'dog', '2022-11-06 22:55:05', '2022-11-06 22:55:05', 'Help your pet guac their style with this adorable bandana! Just tie it around your pet’s neck loosely so it’s comfy, and they’re ready to strut their stuff. Now your pup or kitty can put their best furry foot forward with this fun look!', 'dog_bandana_thumb.jpg', 'dog_bandaba_1.jpg,dog_bandana_2.jpgdog_bandana_thumb.jpg,', 'Machine wash cold with like colors on gentle cycle. Only non-chlorine bleach when needed. Tumble dry low. Do not iron.'),
(7, 'Bathrobe', '29.99', 'dog', '2022-11-06 22:57:01', '2022-11-06 22:57:01', 'Ideal for bathing, grooming or rainy days.\r\nDesigned to instantly wick away excess water.', 'dog_bathrobe_thumb.jpg', 'dog_bathrobe_thumb.jpg,dog_bathrobe_1.jpg,dog_bathrobe_2.jpg,dog_bathrobe_3.jpg', 'Hand wash only using mild detergeant. Air dry only, do not dry using heat. Do not use fabric softener. Discontinue use if damaged.'),
(8, 'Socks', '7.34', 'dog', '2022-11-06 22:58:26', '2022-11-06 22:58:26', 'Made to be worn indoors to give your pet some extra grip on hard floors.', 'dog_socks_thumb.jpg', 'dog_socks_thumb.jpg,dog_socks_1.jpg,dog_socks_2.jpg', 'Hoop and loop fasterners strap is optional and can be removed. Remove hoop and loop fasterners. Hand wash in cold water, line dry.'),
(9, 'Raincoat', '15.99', 'dog', '2022-11-06 23:01:09', '2022-11-06 23:01:09', '100% waterproof vinyl to help keep water out, with hood and stylish white piping.\r\nTransparent style lets you show off your pup’s cute look underneath the rain coat.', 'dog_raincoat_thumb.jpg', 'dog_raincoat_thumb.jpg,dog_raincoat_1.jpg,dog_raincoat_2.jpg,dog_raincoat_3.jpg', 'Hand wash cold separately. Do not bleach. Lay flat to dry.'),
(10, 'Vest', '15.20', 'other', '2022-11-06 23:05:14', '2022-11-06 23:05:14', 'Soft to touch,comfortable for you pets.\r\nKeeps your pets warm during cold season.', 'rabbbit_vest_thumb.jpg', 'rabbbit_vest_thumb.jpg,rabbbit_vest_1.jpg,rabbbit_vest_2.jpg,rabbbit_vest_3.jpg', 'Turn inside out, machine wash cold with like colors, gentle cycle, only non-chlorine bleach when needed, tumble dry low. Do not iron.'),
(11, 'Hoodie', '10.21', 'other', '2022-11-06 23:08:12', '2022-11-06 23:08:12', 'Pet Bird Clothes Handmade Custom Parrot Clothes, Cute Bird Transformed', 'bird_hoodie_thumb.jpg', 'bird_hoodie_thumb.jpg,bird_hoodie_1.jpg,bird_hoodie_2.jpg', 'Turn inside out, machine wash cold with like colors on gentle cycle. Only non-chlorine bleach when needed. Tumble dry low. Do not iron.'),
(12, 'Parka', '22.99', 'dog', '2022-11-06 23:11:04', '2022-12-05 00:14:16', 'Pet parka with water-resistant exterior helps keep your pet warm and dry.\r\nDesigned to keep pets warm—with extra coverage for the chest area and plush fleece lining which makes it extra-comfy for dogs and kitties too.', 'dog_parka_thumb.jpg', 'dog_parka_thumb.jpg,dog_parka_1.jpg,dog_parka_2.jpg', 'Machine wash cold on gentle cycle. For best results, hand wash cold separately. Do not bleach. Lay flat to dry.');

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
