-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 11, 2022 at 06:27 PM
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
-- Database: `ixd608_HsuanLingTu_store_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `size` varchar(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `image` varchar(256) NOT NULL,
  `quantity` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `size`, `price`, `category`, `description`, `date_created`, `date_modified`, `thumbnail`, `image`, `quantity`) VALUES
(1, 'Kalanchoe Millotii', '2.5\"', '13.00', 'Succulent', 'Kalanchoe millotii is a succulent plant that is native to the arid parts of Madagascar. It forms a shrub up to a foot high. The leaf is a hazy green and scalloped, with dense felt covering it.\r\n\r\nKalanchoe millotii is a small, succulent, perennial subshrub up to 12 inches (30 cm) tall. The leaves are ovate, hazy green and scalloped, with dense felt covering it. The clusters of small, erect, greenish-yellow flowers are produced in summer. Kalanchoe millotii is a member of the Crassulaceae family. It is an ornamental succulent plant that is native to Madagascar. Since it is not particularly cold hardy, it is grown as an indoor plant in most areas. Succulents like kalanchoe are drought smart plants that are super easy to grow and make fantastic houseplants.', '2022-12-04 18:03:39', '2022-12-04 18:03:39', 'pexels-eka-sutrisno-1863621.jpg', 'pexels-eka-sutrisno-1863621.jpg', '30'),
(2, 'Cotyledon Orbiculata', '2.5\"', '10.00', 'Succulent', 'Cotyledon orbiculata has five varieties, based on differences in leaf and flower shape. The variability of leaf size, shape and colour is also influenced by the immediate environment. Selected forms in cultivation have been given names such as Elk Horns or Silver Waves.\r\n\r\nFlowering time is mostly in winter from June-August, but in the winter rainfall areas such as the Western Cape, it is often in midsummer. The colourful, hanging, tubular/bell-shaped flowers are carried in clusters on the ends of an elongated flower stalk. They are mostly orange-red , but yellow flowering forms are also occasionally found (Ernst van Jaarsveld pers. comm.).', '2022-12-04 18:03:39', '2022-12-04 18:03:39', 'pexels-ekaterina-bolovtsova-9130800.jpg', 'pexels-ekaterina-bolovtsova-9130800.jpg', '14'),
(3, 'Mammillaria Polythele', '2.5\"', '10.00', 'Cactus', 'Mammillaria polythele is a perennial cactus belonging to the Cactaceae botanical family. The cactus has a solitary habit when young and forms cluster of offsets overtime and can reach up to 60 cm in height and 15 cm in diameter. The roots are fibrous ad swollen. The stem is cylindrical, made of tubercles grass green, arranged in 21 spiral axis. The tubercles are pyramidal-conical, prominent and bear the woolly areoles at the top. The areoles are small, white, in age becoming naked without axillary bristles, and bear the spines. The radial spines are absent1. The 3-4 central spines are spreading, dark brown to reddish brown, up to 2 cm long. Blooming occurs from during the summer and the blossoms are borne at the apex of the stem in a ring, forming a crown of flowers. The flowers are showy and beautiful, funnel-shaped, rose to pinkish purple with yellow stamens at the center of the tube. The fruits are club-shaped, dull red containing brownish seeds.', '2022-12-04 18:03:39', '2022-12-04 18:03:39', 'pexels-dominika-roseclay-1856430.jpg', 'pexels-dominika-roseclay-1856430.jpg', '6'),
(4, 'Canary Aeonium', '4\"', '18.00', 'Succulent', 'Aeonium canariense is an impressive evergreen succulent with large velvety rosettes, 6-12 in. across (15-30 cm), of fleshy leaves. Fresh green when grown in part shade, the soft, fuzzy leaves become tinged with reddish pink when exposed to the sun. Attractive when not blooming, this Aeonium is particularly striking when it produces bright golden racemes of small, star-shaped flowers in summer. Similarly to Sempervivum (Hen & Chicks), this Aeonium offsets freely.', '2022-12-04 18:03:39', '2022-12-04 18:03:39', 'pexels-amelia-cui-11986009.jpg', 'pexels-amelia-cui-11986009.jpg', '27'),
(5, 'Echeveria Elegans', '4\"', '20.00', 'Succulent', 'Echeveria elegans, commonly known as Mexican Snowball, is a popular evergreen succulent that mounds or spreads slowly in tight colonies. Edges of leaves are slightly pink, producing equally pretty, small, pink flowers with a yellow tinge.\r\n\r\nMexican Snowball is perfect as groundcover, part of a wedding bouquet, for rock gardens, green roofs or containers. Anciently, it was believed to drive away evil spirits. Echeveria spp. stem from thick-leaved rosettes. The leaves are fleshy and have a waxy cuticle on the exterior. Often the leaves are colored and a firm touch can mar the skin and leave marks. The Echeveria succulent plant is slow growing and usually doesn’t exceed 12 inches in height or spread. Native from Texas to Central America, the plants prefer desert conditions, but will tolerate periods of moisture as long as they are allowed to dry out before applying more water.', '2022-12-04 18:03:39', '2022-12-04 18:03:39', 'Echeveria Elegans.jpg', 'Echeveria Elegans.jpg', '54'),
(6, 'Polaskia Chichipe', '2.5\"', '13.00', 'Cactus', 'Polaskia chichipe is a columnar tree-like cactus more commonly known as Chichipe, its very popular and highly valued for its sculptured shapes and powdery grey-green wavy ribs.Spines are short and stout and fade as it the plant ages. Flowers are open cups of pinkish white or yellow-green.This variety difficult to distinguish from certain Stenocereus species but is highly sought after. A great low maintenance house plant or gift.', '2022-12-04 18:03:39', '2022-12-04 18:03:39', 'Polaskia chichipe.jpg', 'Polaskia chichipe.jpg', '42'),
(7, 'Haworthia Limifolia', '2.5\"', '13.00', 'Succulent', 'Haworthia is a delightful little succulent that makes a very attractive small houseplant. These small, low growing plants form rosettes of fleshy green leaves that are generously covered with white, pearly warts or bands, giving them a distinctive appearance. Generally easy to grow, the same best practices that yield healthy aloe and echeveria plants will also produce beautiful Haworthia. Like other succulents, these plants appreciate bright light, adequate moisture in the summer, and relatively drier conditions in the winter. Avoid overwatering, but don’t let them dry out too much.', '2022-12-04 18:03:39', '2022-12-04 18:03:39', 'Haworthia limifolia.jpg', 'Haworthia limifolia.jpg', '3'),
(8, 'Sedum Adolphii', '1.5\"', '8.00', 'Succulent', 'This trailing succulent forms miniature golden rosettes, with leaves shaped like footballs. Its tips turn red when exposed to lots of sun. You can expect white blossoms in the Spring.', '2022-12-04 18:03:39', '2022-12-04 18:03:39', 'Sedum adolphii.jpg', 'Sedum adolphii.jpg', '25'),
(9, 'Oddity Sempervivum', '2.5\"', '13.00', 'Succulent', 'Sempervivum \'Oddity\', also known as Sempervivum tectorum \'Oddity\', is an unusual succulent that creates a mat of small rosettes of blue-green leaves with a purple tip. The rosettes grow up to 4 inches (10 cm) in diameter. Leaves are recurved to form hollow pointed pipes. Flowers are star-shaped, reddish-purple, and appear in flat cymes on the terminal ends of hairy upright stems. Rosettes die after flowering but are replaced by new rosettes on lateral stolons. This succulent is a shy flowerer.', '2022-12-04 18:03:39', '2022-12-04 18:03:39', 'Oddity Sempervivum.jpg', 'Oddity Sempervivum.jpg', '22'),
(10, 'Haworthia Tortuosa', '5\"', '20.00', 'Succulent', 'Haworthiopsis tortuosa, formerly known as Haworthia tortuosa, is a small succulent with leaves arranged in a spiral along the stem that grows up to 15 cm tall. Leaves are dull green, rough, sometimes with small tubercles. They are triangular, up to 1.2 inches (3 cm) long, and up to 0.5 inches (1.3 cm) wide. Flowers are white and appear on up to 12 inches (30 cm) tall inflorescences from spring to fall.', '2022-12-04 18:03:39', '2022-12-04 18:03:39', 'Haworthia Tortuosa.jpg', 'Haworthia Tortuosa.jpg', '15'),
(11, 'Gymnocalycium Mihanovichii', '2.5\"', '10.00', 'Cactus', 'Gymnocalycium mihanovichii is a species of cactus from South America. The most popular cultivars are varied mutants which completely lack chlorophyll, exposing the red, orange, or yellow pigmentation. The plant is called a \"Moon Cactus\".\r\n\r\nThe ruby ball cactus, also known as the red cap cactus, is a grafted specimen. The colorful red top is a gymnocalycium, which refers to the flower buds bearing no hair or spines. While the lower green cactus could be any number of varieties (usually a Hylocereus cactus). The main job of the lower cactus is to display the gymnocalycium at an advantageous height. The ruby ball is an albino plant, which means it has no chlorophyll. Therefore, it relies on the rootstock cactus as a food source. It has a parasitic relationship. If there is a disconnect between the requirements of cactus on the bottom and the scion on top, one or both may die.', '2022-12-04 18:03:39', '2022-12-04 18:03:39', 'Gymnocalycium mihanovichii strawberry cactus.jpg', 'Gymnocalycium mihanovichii strawberry cactus.jpg', '33'),
(12, 'Pachyphytum Compactum', '2.5\"', '10.00', 'Succulent', 'Little Jewel (Pachyphytum compactum) (Rose): Resembles a cut gemstone with angular facets left by the pressure of neighboring leaves. This species is native to the rocky slopes of Hidalgo, Mexico. It is a matte blue-green but can show tinges of violet when gently stressed by full sun, drought, or cool 50F temperatures. It grows tall stems that eventually bend to the ground and lose their lower leaves. Fortunately, members of the Pachyphytum (meaning \"fat plant\") genus have a high success rate of propagation from stem cuttings to keep rosettes from looking overgrown.', '2022-12-04 18:03:39', '2022-12-04 18:03:39', 'Pachyphytum compactum.jpg', 'Pachyphytum compactum.jpg', '26');

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
