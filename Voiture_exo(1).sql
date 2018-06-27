-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 27, 2018 at 04:57 PM
-- Server version: 5.7.22-0ubuntu18.04.1
-- PHP Version: 7.2.5-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Voiture_exo`
--

-- --------------------------------------------------------

--
-- Table structure for table `conso`
--

CREATE TABLE `conso` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `maximum` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `conso`
--

INSERT INTO `conso` (`id`, `nom`, `maximum`) VALUES
(1, 'A', 4.2),
(2, 'B', 5.5),
(3, 'C', 6.7),
(4, 'D', 8),
(5, 'E', 9.3),
(6, 'F', 10.5),
(7, 'G', 100);

-- --------------------------------------------------------

--
-- Table structure for table `marque`
--

CREATE TABLE `marque` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marque`
--

INSERT INTO `marque` (`id`, `nom`) VALUES
(1, 'Ferrari'),
(2, 'Lamborghini'),
(3, 'Citroën'),
(4, 'Ford'),
(5, 'Chevrolet'),
(6, 'Land Rover'),
(7, 'BMW'),
(8, 'Bentley');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `nom`) VALUES
(1, 'Citadine'),
(2, 'Berline'),
(3, 'Cabriolet'),
(4, 'Supercar'),
(5, 'Muscle car'),
(6, 'Luxe'),
(7, '4x4'),
(8, 'Hypercar'),
(9, 'Break');

-- --------------------------------------------------------

--
-- Table structure for table `voiture`
--

CREATE TABLE `voiture` (
  `id` int(11) NOT NULL,
  `modele` varchar(255) NOT NULL,
  `puissance` int(11) NOT NULL,
  `poids` int(11) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `vitesse_max` int(11) NOT NULL,
  `acceleration` float NOT NULL,
  `consommation` float NOT NULL,
  `marque` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `voiture`
--

INSERT INTO `voiture` (`id`, `modele`, `puissance`, `poids`, `image`, `vitesse_max`, `acceleration`, `consommation`, `marque`, `type`, `date`) VALUES
(1, 'C3', 100, 1090, 'https://media.citroen.fr/image/91/3/new-c3-citroen-white-red.png.231913.png', 181, 11.1, 3.7, 3, 1, '2018-06-26 10:59:58'),
(2, 'LaFerrari', 963, 1350, 'http://www.pngpix.com/wp-content/uploads/2016/06/PNGPIX-COM-Top-View-of-Ferrari-LaFerrari-Car-PNG-Image-500x394.png', 349, 2.6, 14.2, 1, 8, '2018-06-27 12:17:55'),
(3, 'Huracan', 640, 1382, 'https://www.lamborghini.com/sites/it-en/files/DAM/lamborghini/model/huracan/car-slider/huracan-performante/performante-carousel-family.png', 328, 2.8, 13.7, 2, 4, '2018-06-27 12:17:07'),
(4, 'Mustang', 421, 1740, 'https://www.autodiscount.fr/images/voitures/defaut/std/6864-std.png', 239, 5.6, 12.4, 4, 3, '2018-06-27 12:15:37'),
(5, 'Impala', 195, 1655, 'http://cdn7.bigcommerce.com/s-r64qabfj/images/stencil/1280x1280/products/5251/8422/TSM144323_1__15338.1407448018.jpg?c=2&imbypass=on&imbypass=on', 165, 13.1, 18, 5, 5, '2018-06-26 09:15:39'),
(6, 'Evoque', 150, 1520, 'https://images.elite-auto.fr/visuel/LANDROVER/landrover_16rangeroverevoquehseod1fb_angularfront.png', 180, 10.7, 5, 6, 7, '2018-06-25 09:15:39'),
(7, 'M3', 343, 1495, 'https://c4d709dd302a2586107d-f8305d22c3db1fdd6f8607b49e47a10c.ssl.cf1.rackcdn.com/thumbnails/stock-images/fa1c4579b6d13b890c971f2675e78613.png', 289, 5.2, 11.9, 7, 2, '2018-06-27 12:20:52'),
(8, 'Continental', 560, 2425, 'https://cdn.drivek.it/configurator-icon/cars/de/400/BENTLEY/CONTINENTAL-GT/31853_COUPE-2-DOORS/bentley-continental-gt-2018-side-view.png', 318, 5.2, 16.6, 8, 6, '2018-06-27 12:09:52'),
(9, 'C4 picasso', 156, 1296, 'https://media.citroen.fr/image/32/4/.227324.png', 209, 10.6, 6, 3, 9, '2018-06-26 11:00:27'),
(10, 'Centenario', 770, 1520, 'https://www.espacemanager.com/sites/default/files/field/image/lamborghini.png', 350, 2.8, 10.7, 2, 8, '2018-06-27 12:19:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conso`
--
ALTER TABLE `conso`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marque`
--
ALTER TABLE `marque`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voiture`
--
ALTER TABLE `voiture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`),
  ADD KEY `marque` (`marque`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conso`
--
ALTER TABLE `conso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `marque`
--
ALTER TABLE `marque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `voiture`
--
ALTER TABLE `voiture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `voiture`
--
ALTER TABLE `voiture`
  ADD CONSTRAINT `voiture_ibfk_1` FOREIGN KEY (`marque`) REFERENCES `marque` (`id`),
  ADD CONSTRAINT `voiture_ibfk_2` FOREIGN KEY (`type`) REFERENCES `type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
