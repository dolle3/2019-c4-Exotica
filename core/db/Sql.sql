-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 04, 2020 at 10:08 AM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `exotica`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `afspraakid` int(11) UNSIGNED NOT NULL,
  `userid` int(11) UNSIGNED NOT NULL,
  `afspraakdatum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `afspraaksoort` enum('nazorg','bestelling') NOT NULL,
  `werknemerid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `factuur`
--

CREATE TABLE `factuur` (
  `factuurcode` int(11) UNSIGNED NOT NULL,
  `userid` int(11) UNSIGNED DEFAULT NULL,
  `factuurdatum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `factuur`
--

INSERT INTO `factuur` (`factuurcode`, `userid`, `factuurdatum`) VALUES
(11, NULL, '2020-01-28 14:06:47'),
(12, NULL, '2020-01-31 12:30:06'),
(13, NULL, '2020-01-31 12:54:36'),
(14, NULL, '2020-02-03 08:37:11'),
(15, NULL, '2020-02-03 10:40:22');

-- --------------------------------------------------------

--
-- Table structure for table `orderline`
--

CREATE TABLE `orderline` (
  `idorderline` int(11) UNSIGNED NOT NULL,
  `factuurcode` int(11) UNSIGNED NOT NULL,
  `productid` int(11) UNSIGNED NOT NULL,
  `aantal` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderline`
--

INSERT INTO `orderline` (`idorderline`, `factuurcode`, `productid`, `aantal`) VALUES
(3, 11, 2, 1),
(4, 11, 1, 4),
(5, 12, 2, 1),
(6, 13, 3, 4),
(7, 14, 6, 4),
(8, 15, 2, 1),
(9, 15, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(11) UNSIGNED NOT NULL,
  `productcode` varchar(100) NOT NULL,
  `productnaam` varchar(100) NOT NULL,
  `beschrijving` text NOT NULL,
  `prijs` decimal(5,2) NOT NULL,
  `productaantal` int(11) UNSIGNED NOT NULL,
  `image` varchar(100) NOT NULL,
  `productcategorieid` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `productcode`, `productnaam`, `beschrijving`, `prijs`, `productaantal`, `image`, `productcategorieid`) VALUES
(1, 'EXO123', 'Exo Terra Glas', 'Het Exo Terra Glasterrarium is de ideale behuizing voor reptielen en amfibieën ontworpen door Europese herpetologen. De vooraan openende deuren vergemakkelijken het voeren en onderhoud. Een speciaal ontworpen sluiting voorkomt ontsnappen en de deuren kunnen afzonderlijk geopend worden. De volledig uit staalgaas bestaande bovenzijde laat UVB en infrarood door, en kan in zijn geheel worden weggenomen en vergemakkelijkt het inrichten en onderhoud. Aan beide achterzijden van het draadrooster zijn vijf afsluitbare ingangen voor snoeren en buizen voor het gebruik in het terrarium van Heat Wave Rocks, Waterfalls, sensoren, enz.. Door de verheven terrariumbodem kan een substraatverwarmer onderaan worden aangebracht om een deel van het grondoppervlak te verwarmen. De extra hoge voorruit is ideaal voor een dikke bodembedekking (gravende reptielen), een watergedeelte (paludarium) of het aanbrengen van een Exo Terra Reptile Den. De natuurlijke achterwand is in dezelfde kleur als de andere Exo Terra decoratiematerialen (Water Dishes, Waterfalls, Heat Wave Rocks, enz.) en biedt extra klimmogelijkheden.', '179.00', 76, 'img/apparatuur/aquarium1.png', 4),
(2, 'EXO-5364', 'Paludarium Terrarium', 'Dit nieuwe type extra hoog Exo Terra glazen terrarium is ideaal voor boombewonende reptielen- en amfibieënsoorten. De unieke achtergrond met wortelmotief maakt er een geweldig habitat van voor een groot aantal boombewonende soorten zoals boomboa’s en pythons, daggekko’s, bladstaartgekko’s, tokehs, boomkikkers enz. Het heeft alle andere goede kenmerken van de Exo Terra glazen terrariums; Het Exo Terra glasterrarium is de ideale behuizing voor reptielen en amfibieën ontworpen door Europese herpetologen. De vooraan openende deuren vergemakkelijken het voeren en onderhoud. Een speciaal ontworpen sluiting voorkomt ontsnappen en de deuren kunnen afzonderlijk geopend worden. De volledig uit staalgaas bestaande bovenzijde laat UVB en infrarood door, en kan in zijn geheel worden weggenomen en vergemakkelijkt het inrichten en onderhoud. Aan beide achterzijden van het draadrooster zijn vijf afsluitbare ingangen voor snoeren en buizen voor het gebruik in het terrarium van Heat Wave Rocks, Waterfalls, sensoren en dergelijke. Door de verheven terrariumbodem kan een substraatverwarmer onderaan worden aangebracht om een deel van het grondoppervlak te verwarmen. De extra hoge voorruit is ideaal voor een dikke bodembedekking (gravende reptielen), een watergedeelte (paludarium) of het aanbrengen van een Exo Terra Reptile Den. De natuurlijke achterwand is in dezelfde kleur als de andere Exo Terra decoratiematerialen (Water Dishes, Waterfalls, Heat Wave Rocks en meer) en biedt extra klimmogelijkheden. Afmetingen: 30 x 30 x 60 cm Merk Exo Terra Samenvattend Waterdichte bodem.', '99.99', 82, 'img/apparatuur/aquarium2.png', 4),
(3, 'Ndiaye1', 'Aquriumglas ', 'Test', '89.00', 7, 'img/apparatuur/aquarium1.png', 4),
(4, 'Exo-00022222', 'Superfish', '', '122.00', 291, 'img/apparatuur/aquarium1.png', 4),
(5, 'exo-9991', 'Gouden gekko (Gecko Auratus)', 'test', '89.00', 21, 'img/dieren/rep1.png', 1),
(6, 'dier-01', 'Panterkameleon (Furcifer Pardalis)', 'Test', '49.00', 7, 'img/dieren/rep2.png', 1),
(7, 'exo-995966', 'Stekelnekagaam (Acanthosaura capra)', 'test-1', '89.00', 90, 'img/dieren/rep3.png', 1),
(8, 'exo-5959697', 'Steppevaraan (Varanus Exanthematicus)', 'test-2', '34.00', 44, 'img/dieren/rep4.png', 1),
(13, 'exo-379392', 'Panterkameleon (Furcifer Pardalis)', 'test-3383', '93.00', 33, 'img/dieren/amf1.png', 2),
(14, 'exo-ueiudh', 'Pottolamtam (Fillelis Pardalis)', 'test-339', '23.00', 20, 'img/dieren/amf2.png', 2),
(15, 'exo-jfkbcm', 'Panterkameleon (Furcifer Pardalis)', 'test-9rik', '24.00', 22, 'img/dieren/amf3.png', 2),
(16, 'exo-hfjbv', 'Panterkulaas (Fuurlus locass)', 'test388333', '32.00', 35, 'img/dieren/amf4.png', 2),
(17, 'exo-ghnmf hf', 'Repti - Calcium', 'test-fkjbj', '19.00', 33, 'img/voeding/voed1.png', 3),
(18, 'exo-3ejccdcd', 'European - Tortoise', 'test-3837474', '23.00', 33, 'img/voeding/voed2.png', 3),
(19, 'exo-fmndm ', 'Dragowit - Multivitamin', 'tets-hfjbd', '30.00', 22, 'img/voeding/voed3.png', 3),
(20, 'exo-hjfbmfkj ', 'Juveline - Iguana', 'Test-efj', '25.00', 100, 'img/voeding/voed4.png', 3);

-- --------------------------------------------------------

--
-- Table structure for table `productcategorie`
--

CREATE TABLE `productcategorie` (
  `categorieid` int(11) UNSIGNED NOT NULL,
  `categorie` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productcategorie`
--

INSERT INTO `productcategorie` (`categorieid`, `categorie`) VALUES
(1, 'reptiel'),
(2, 'amfibie'),
(3, 'voedsel'),
(4, 'aquarium');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) UNSIGNED NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `infix` varchar(100) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `city` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('klant','werknemer','admin') DEFAULT 'klant',
  `employeeId` int(11) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `firstname`, `infix`, `lastname`, `email`, `phone`, `address`, `zipcode`, `city`, `password`, `role`, `employeeId`, `username`) VALUES
(4, 'olaf', '', 'majoor', 'olaf@gmail.com', '0622314416', 'komhoeklaan', '3828 AL', 'hoogland', 'olaf', 'klant', 0, 'olaf majoor'),
(5, 'd', 'd', 'd', 'd@ded.nl', '1234567890', 'vissenhoofd 23', '890kl', 'tiel', 'test1234', 'klant', 0, 'tester');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`afspraakid`),
  ADD KEY `userid to user_idx` (`userid`);

--
-- Indexes for table `factuur`
--
ALTER TABLE `factuur`
  ADD PRIMARY KEY (`factuurcode`),
  ADD KEY `userid to user_idx` (`userid`);

--
-- Indexes for table `orderline`
--
ALTER TABLE `orderline`
  ADD PRIMARY KEY (`idorderline`),
  ADD KEY `factuurcode to factuur_idx` (`factuurcode`,`productid`),
  ADD KEY `product id to product_idx` (`productid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`),
  ADD KEY `productcategorieid to productcategorie_idx` (`productcategorieid`);

--
-- Indexes for table `productcategorie`
--
ALTER TABLE `productcategorie`
  ADD PRIMARY KEY (`categorieid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `afspraakid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `factuur`
--
ALTER TABLE `factuur`
  MODIFY `factuurcode` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orderline`
--
ALTER TABLE `orderline`
  MODIFY `idorderline` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `productcategorie`
--
ALTER TABLE `productcategorie`
  MODIFY `categorieid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `userid to usertable` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `factuur`
--
ALTER TABLE `factuur`
  ADD CONSTRAINT `userid to user` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `orderline`
--
ALTER TABLE `orderline`
  ADD CONSTRAINT `factuurcode to factuur` FOREIGN KEY (`factuurcode`) REFERENCES `factuur` (`factuurcode`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `product id to product` FOREIGN KEY (`productid`) REFERENCES `product` (`productid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `productcategorieid to productcategorie` FOREIGN KEY (`productcategorieid`) REFERENCES `productcategorie` (`categorieid`) ON DELETE NO ACTION ON UPDATE NO ACTION;
