-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 20, 2022 at 04:28 PM
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
-- Database: `K_Kardan_IXD608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `sku` int(4) NOT NULL,
  `category` varchar(32) NOT NULL,
  `size` int(32) NOT NULL,
  `description` text NOT NULL,
  `ingredients` text NOT NULL,
  `benefits` text NOT NULL,
  `rating` int(2) NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL,
  `hero_images` varchar(128) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `direction` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `sku`, `category`, `size`, `description`, `ingredients`, `benefits`, `rating`, `thumbnail`, `images`, `hero_images`, `date_created`, `date_modified`, `direction`) VALUES
(1, 'Vitamin A', '11.99', 2010, 'Letter Vitamin', 60, 'Jamieson Vitamin A 10,000 IU is formulated to support healthy skin, vision and immune function.', 'Vitamin A (Palmitate)', 'Supports night vision, eyesight and skin health,Helps in the development of healthy skin,Promotes healthy vision', 5, 'KHealth_Vitamin_A.png', 'KHealth_Vitamin_A.png', 'KHealth_Vitamin_A_Hero.png', '2022-11-12 20:21:58', '2022-11-12 20:21:58', 'Take 1 tablet daily. Store between 15°C and 25°C, away from children.'),
(2, 'Vitamin B', '18.99', 2015, 'Letter Vitamin', 60, 'KHealth B Complex + Vitamin C provides essential B vitamins to help convert carbs, proteins, and fats to energy, and 500 mg of vitamin C per serving to help support a healthy immune system.', 'Vitamin B1,Vitamin B2,Vitamin B3,Vitamin B5,Vitamin B6,Vitamin B12', 'Converts carbs, proteins and fats to energy,Provides 500 mg of vitamin C per serving,Naturally energizing', 5, 'KHealth_Vitamin_B.png', 'KHealth_Vitamin_B.png', 'KHealth_Vitamin_B_Hero.png', '2022-11-12 20:27:16', '2022-11-12 20:27:16', 'Take two tablets daily with a meal. Store between 15°C and 25°C, away from children.'),
(3, 'Vitamin B1', '13.99', 2020, 'Letter Vitamin', 60, 'KHealth Vitamin B1 (Thiamine) 100mg helps to metabolize amino acids and carbohydrates and promotes a healthy nervous system. It is involved in the synthesis of red blood cells, while also aiding in tissue formation.', 'Vitamin B1', 'Helps in the metabolism of carbohydrates, fats and proteins for enhanced energy production', 4, 'KHealth_Vitamin_B1.png', 'KHealth_Vitamin_B1.png', 'KHealth_Vitamin_B1_Hero.png', '2022-11-12 20:36:09', '2022-11-12 20:36:09', 'Take 1 tablet daily with a meal. Store between 15°C and 25°C, away from children.'),
(4, '', '0.00', 0, '', 0, '', '', '', 4, '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(5, 'Vitamin B2', '14.99', 2209, 'Letter Vitamin', 60, 'KHealth Vitamin B2 (Riboflavin) 100 mg helps to metabolize amino acids and carbohydrates and promotes a healthy nervous system. It is involved in the synthesis of red blood cells, while also aiding in tissue formation.Helps in the metabolism of carbohydrates, fats and proteins for enhanced energy production.', 'Vitamin B2', 'Take 1 tablet daily with a meal. Store between 15°C and 25°C, away from children.', 5, 'KHealth_Vitamin_B2.png', 'KHealth_Vitamin_B2.png', 'KHealth_Vitamin_B2_Hero.png', '2022-11-12 20:38:09', '2022-11-12 20:38:09', 'Helps in the metabolism of carbohydrates, fats and proteins for enhanced energy production.'),
(6, 'Vitamin B6', '25.99', 2019, 'Letter Vitamin', 60, 'KHealth Vitamin B6 (Pyridoxine) 250 mg helps to metabolize amino acids and carbohydrates and promotes a healthy nervous system. It is involved in the synthesis of red blood cells, while also aiding in tissue formation.', 'Vitamin B6', 'Promotes a healthy nervous system, Helps in the metabolism of carbohydrates, fats and proteins for enhanced energy production, Supports cardiovascular health by reducing blood levels of homocysteine', 4, 'KHealth_Vitamin_B6.png', 'KHealth_Vitamin_B6.png', 'KHealth_Vitamin_B6_Hero.png', '2022-11-12 20:40:30', '2022-11-12 20:40:30', 'Take 1 tablet daily with a meal. Store between 15°C and 25°C, away from children.'),
(7, 'Vitamin B12', '13.99', 2044, 'Letter Vitamin', 60, 'KHealth B12 tablets are formulated exclusively with methylcobalamin, an advanced source of B12 that allows for faster absorption, so you can be naturally energized, faster!', '', 'Naturally energizing,Faster acting!,\r\nAdvanced formula made with methylcobalamin,Converts carbs, proteins, and fats to energy.', 5, 'KHealth_Vitamin_B12.png', 'KHealth_Vitamin_B12.png', 'KHealth_Vitamin_B12_Hero.png', '2022-11-12 20:43:02', '2022-11-12 20:43:02', 'Take one tablet daily with a meal. Store between 15ºC and 25ºC , away from children.'),
(8, 'Vitamin B100 Complex', '23.99', 2170, 'Letter Vitamin', 60, 'KHealth B Complex 100 Timed Release provides essential B vitamins in a high potency, timed-release dose to help convert carbs, proteins, and fats to energy throughout the day.\r\n', 'Vitamin B1, Vitamin B2, Vitamin B3, Vitamin B5, Vitamin B6, Vitamin B12', 'Ultra strength formula, Converts carbs, proteins and fats to energy, Timed Release', 5, 'KHealth_Vitamin_B100.png', 'KHealth_Vitamin_B100.png', 'KHealth_Vitamin_B100_Hero.png', '2022-11-12 20:46:29', '2022-11-12 20:46:29', 'Take 1 tablet daily with a meal. Store between 15°C and 25°C, away from children.'),
(9, 'Vitamin C', '10.99', 2029, 'Letter Vitamin', 60, 'Jamieson Vitamin C is an antioxidant for the maintenance of good health.', 'Vitamin C, Also Contains: Cellulose, modified cellulose gum, vegetable magnesium stearate, hydroxypropyl cellulose, water-soluble cellulose, vegetable stearic acid, silica, Brazilian palm tree wax.\r\n', 'Antioxidant source for the maintenance of good health', 5, 'KHealth_Vitamin_C.png', 'KHealth_Vitamin_C.png', 'KHealth_Vitamin_C_Hero.png', '2022-11-12 20:48:34', '2022-11-12 20:48:34', 'Take 1 to 2 tablets daily. Store between 15°C and 25°C, away from children.'),
(10, 'Vitamin D3', '11.99', 6106, 'Letter Vitamin', 60, 'KHealth Vitamin D3 1,000 IU can play a key role in the maintenance of good health while promoting the development of bones and teeth and helping the body effectively absorb calcium.', 'Vitamin D3, Also Contains: Gelatin (bovine), glycerin, medium-chain triglycerides.\r\n', 'Easy-to-swallow softgel,\r\nHelps support a healthy immune system and bone health, Helps the absorption of calcium and phosphorous, Helps maintain overall health', 5, 'KHealth_Vitamin_D3.png', 'KHealth_Vitamin_D3.png', 'KHealth_Vitamin_D3_Hero.png', '2022-11-12 20:50:51', '2022-11-12 20:50:51', 'Take 1 tablet daily. Store between 15ºC and 25ºC, away from children.'),
(11, 'Vitamin E', '16.99', 2028, '', 0, 'KHealth Vitamin E provides antioxidant support in low-potency strength to help protect the body from tissue damage and promotes normal red blood cell formation.', 'Great source of antioxidants, Naturally sourced vitamin E', 'Natural Vitamin E, Also Contains: Soybean oil, gelatin (bovine), glycerin.', 5, 'KHealth_Vitamin_E.png', 'KHealth_Vitamin_E.png', 'KHealth_Vitamin_E_Hero.png', '2022-11-12 20:52:42', '2022-11-12 20:52:42', 'Take 1 tablet daily. Store between 15°C and 25°C, away from children.'),
(12, 'Vitamin K2', '0.00', 0, '', 0, 'KHealth  Vitamin K is great for anyone who suffers from osteoarthritis and supplements with calcium. Vitamin K helps keep Calcium minerals in your bones in the long term.', 'Vitamin K2, Also Contains: Sunflower oil, gelatin (bovine), glycerin. Contains soy ingredients.', 'Supports a healthy immune system and bone health, Helps keep calcium in bones and prevents it from leaching into the bloodstream and hardening the blood.', 0, 'KHealth_Vitamin_K2.png', 'KHealth_Vitamin_K2.png', 'KHealth_Vitamin_K2_Hero.png', '2022-11-12 20:54:47', '2022-11-12 20:54:47', 'Take 1 tablet daily. Store between 15°C and 25°C, away from children.\r\n'),
(13, 'Multivitamin Adults', '18.99', 7875, 'Multivitamin', 60, 'KHealth 100% Complete Chewable Multivitamin for Adults is the easy way to get 100% of your body\'s daily vitamin needs. Formulated to Health Canada\'s recommendations, Jamieson 100% Chewable Multivitamins are a delicious bite of all natural tropical fruit and refreshing citrus flavours.', 'Vitamin A, Vitamin B1, Vitamin B2, Vitamin B3, Vitamin B5, Vitamin B6, Vitamin B12, Vitamin C, Vitamin D, Vitamin E, Vitamin K1, Biotin, Calcium, Iodine, Iron, Magnesium,Zinc.', '100% or more of your daily vitamin needs, as recommended by Health Canada\r\nNaturally energizing & immune defense\r\nFormulated for adults. Delicious Citrus Twist flavour. Also contains lutein.', 5, 'KHealth_MultiVitamin_Adults.png', 'KHealth_MultiVitamin_Adults.png', 'KHealth_MultiVitamin_Adults_Hero.png', '2022-11-12 21:02:56', '2022-11-12 21:02:56', 'Chew 1 tablet daily with a meal. Take a few hours before or after taking other medications. Store between 15°C and 25°C, away from children.'),
(14, 'Women MultiVitamin', '18.99', 7868, 'Multivitamin', 60, 'KHealth 100% Complete Multivitamin for Women is the easy way to get 100% of your body\'s daily vitamin needs. It is formulated to Health Canada\'s recommendations so you can feel confident you are getting 100% or more of the vitamins your body needs each day!', 'Vitamin A, Vitamin B1, Vitamin B2, Vitamin B3, Vitamin B5, Vitamin B6, Vitamin B12, Vitamin C, Vitamin D, Vitamin E, Vitamin K1, Biotin, Calcium, Copper, Iron, Magnesium, Zinc ', '100% or more of your daily vitamin needs, as recommended by Health Canada. Naturally energizing & immune defense. Formulated for adult women. Also contains cranberry, lutein, and lycopene.', 5, 'KHealth_MultiVitamin_Women.png', 'KHealth_MultiVitamin_Women.png', 'KHealth_MultiVitamin_Women_Hero.png', '2022-11-12 21:06:39', '2022-11-12 21:06:39', 'Take 1 tablet daily with a meal. Take a few hours before or after taking other medications.Store between 15 °C & 25 °C, away from children.'),
(15, 'Men Multivitamin', '18.99', 7870, 'Miltivitamin', 60, 'KHealth 100% Complete Multivitamin for Men is the easy way to get 100% of your body\'s daily vitamin needs. It is formulated to Health Canada\'s recommendations so you can feel confident you are getting 100% or more of the vitamins your body needs each day!', 'Vitamin A, Vitamin B1, Vitamin B2, Vitamin B3, Vitamin B5, Vitamin B6, Vitamin B12, Vitamin C, Vitamin D, Vitamin E, Vitamin K1, Biotin, Calcium, Iron, Magnesium, Zinc ', '100% or more of your daily vitamin needs, as recommended by Health Canada. Naturally energizing & immune defense. Formulated for adult men. Also contains Siberian ginseng, lutein, and lycopene.', 5, 'KHealth_MultiVitamin_Men.png', 'KHealth_MultiVitamin_Men.png', 'KHealth_MultiVitamin_Men_Hero.png', '2022-11-12 21:09:24', '2022-11-12 21:09:24', 'Take 1 tablet daily with a meal. Take a few hours before or after taking other medications. Store between 15 °C & 25 °C, away from children.'),
(16, 'Women 50+ Multivitamin', '18.99', 7869, 'Multivitamin', 60, 'KHealth 100% Complete Multivitamin for Women 50+ is the easy way to get 100% of your body\'s daily vitamin needs. It is formulated to Health Canada\'s recommendations so you can feel confident you are getting 100% or more of the vitamins your body needs each day!', 'Vitamin A, Vitamin B1, Vitamin B2, Vitamin B3, Vitamin B5, Vitamin B6, Vitamin B12, Vitamin C, Vitamin D, Vitamin E, Vitamin K1, Biotin, Calcium, Copper, Iron, Magnesium, Zinc, Iodine. ', '100% or more of your daily vitamin needs, as recommended by Health Canada. Naturally energizing & immune defense. Formulated for adult women 50+. Also contains cranberry, lutein, and lycopene', 5, 'KHealth_MultiVitamin_Women_50+.png', 'KHealth_MultiVitamin_Women_50+.png', 'KHealth_MultiVitamin_Women_50+_Hero.png', '2022-11-12 21:11:31', '2022-11-12 21:11:31', 'Take 1 tablet daily with a meal. Take a few hours before or after taking other medications or natural health products. Store between 15°C & 25°C, away from children.'),
(17, 'Men 50+ Multivitamin', '18.99', 7871, 'Multivitamin', 60, 'KHealth 100% Complete Multivitamin for Men 50+ is the easy way to get 100% of your body\'s daily vitamin needs. It is formulated to Health Canada\'s recommendations so you can feel confident you are getting 100% or more of the vitamins your body needs each day!', 'Vitamin A, Vitamin B1, Vitamin B2, Vitamin B3, Vitamin B5, Vitamin B6, Vitamin B12, Vitamin C, Vitamin D, Vitamin E, Vitamin K1, Biotin, Calcium, Copper, Iron, Magnesium, Zinc ', '100% or more of your daily vitamin needs, as recommended by Health Canada. Naturally energizing & immune defense. Formulated for adult men 50+. Also contains Siberian ginseng, lutein, and lycopene.', 4, 'KHealth_MultiVitamin_Men_50+.png', 'KHealth_MultiVitamin_Men_50+.png', 'KHealth_MultiVitamin_Men_50+_Hero.png', '2022-11-12 21:13:27', '2022-11-12 21:13:27', 'Take 1 tablet daily with a meal. Take a few hours before or after taking other medications. Store between 15 °C & 25 °C, away from children.'),
(18, 'Prenatal Multivitamin', '24.99', 2666, 'Multivitamin', 60, 'KHealth 100% Complete Prenatal Multivitamin is a complete prenatal and postnatal multivitamin that provides 100% or more of the vitamins recommended for pregnant women in just one pill per day! It is rich in folic acid to help prevent neural tube defects, and ensures expecting and nursing mothers are getting the essential vitamins they need for their baby\'s overall health.', 'Vitamin A, Vitamin B1, Vitamin B2, Vitamin B3, Vitamin B5, Vitamin B6, Vitamin B12, Vitamin C, Vitamin D, Vitamin E, Vitamin K1, Biotin, Calcium, Copper, Iron, Magnesium, Zinc ', 'Plus essential minerals iodine and iron. With folic acid to help prevent neural tube defects. Formulated for prenatal and postnatal care. 100% or more of your daily vitamin needs as recommended by Health Canada.', 5, 'KHealth_MultiVitamin_Prenatal.png', 'KHealth_MultiVitamin_Prenatal.png', 'KHealth_MultiVitamin_Prenatal_Hero.png', '2022-11-12 21:15:26', '2022-11-12 21:15:26', 'Take 1 tablet daily with a meal prior to conception, during pregnancy, and while breastfeeding. Take a few hours before or after taking other medications or natural health products. Store between 15°C and 25°C, away from children.'),
(19, 'Kids Multivitamin', '12.99', 7877, 'Multivitamin', 60, 'KHealth Multivitamin for Kids is deliciously formulated to nourish growing bodies with essential nutrients, including iron, to promote healthy growth and development. This yummy kid-approved multivitamin is made with no artificial colours or flavours, and the animal shapes make it fun for kids to take their daily supplement!', 'Vitamin A, Vitamin B1, Vitamin B2, Vitamin B3, Vitamin B5, Vitamin B6, Vitamin B12, Vitamin C, Vitamin D, Vitamin E, Vitamin K1, Biotin, Calcium, Copper, Iron, Magnesium, Zinc ', 'Delicious chewable tablets for kids. Provides essential vitamins for normal growth and development. Helps prevent iron deficiency. Formulated with extra calcium and vitamin C for strong, healthy teeth & bones. Easy to digest for growing kids.\r\n', 5, 'KHealth_MultiVitamin_Kids.png', 'KHealth_MultiVitamin_Kids.png', 'KHealth_MultiVitamin_Kids_Hero.png', '2022-11-12 21:17:26', '2022-11-12 21:17:26', 'Chew 2 tablets daily with a meal. Take a few hours before or after taking other medications. Store between 15ºC and 25ºC, away from children.'),
(20, 'Deep Sleep', '18.99', 9138, 'Solutions', 60, 'KHealth Deep Sleep is a unique formula that combines key beauty ingredients, including 5,000 mcg of Biotin, to help promote healthier hair, skin and nails from the inside out. Melatonin helps improve sleep quality, which is an essential component to every beauty regimen!', 'Biotin, Hydrolyzed Collagen, Melatonin.', 'Voted Best New Sleep Aid by Consumers. Helps improve sleep quality. Safe & non-habit forming sleep aid. Promotes thicker hair, healthier skin and stronger nails.\r\n', 4, 'KHealth_DeepSleep.png', 'KHealth_DeepSleep.png,KHealth_FishOil.png', 'KHealth_DeepSleep_Hero.png', '2022-11-12 21:19:40', '2022-11-12 21:19:40', 'Take 1 caplet daily at or before bedtime.'),
(21, 'Fish Oil', '19.99', 6705, 'Omega', 60, 'KHealth Fish Oil Omega-3 Complex is a blend of fish oils providing an excellent source of Omega-3 essential fatty acids EPA and DHA to support heart and brain health. This product is pharmaceutically tested and guaranteed to be free from heavy metals including mercury and lead.', '', 'Omega-3 complex. Helps promote heart and brain health. Provides 200 mg of EPA + DHA per 1,000 mg softgel. Formulated with Sustainably.', 4, 'KHealth_FishOil.png', 'KHealth_FishOil.png', 'KHealth_FishOil_Hero.png', '2022-11-12 21:21:27', '2022-11-12 21:21:27', 'Take 1 tablet daily with a meal. Store between 15°C and 25°C, away from children.');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
