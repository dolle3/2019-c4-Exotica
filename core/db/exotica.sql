-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 17 jan 2020 om 09:46
-- Serverversie: 5.7.23
-- PHP-versie: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exotica`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `agenda`
--

DROP TABLE IF EXISTS `agenda`;
CREATE TABLE IF NOT EXISTS `agenda` (
  `afspraakid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `userid` int(11) UNSIGNED NOT NULL,
  `afspraakdatum` timestamp NOT NULL,
  `afspraaksoort` enum('nazorg','bestelling') NOT NULL,
  `werknemerid` int(11) NOT NULL,
  PRIMARY KEY (`afspraakid`),
  KEY `userid to user_idx` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `factuur`
--

DROP TABLE IF EXISTS `factuur`;
CREATE TABLE IF NOT EXISTS `factuur` (
  `factuurcode` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `userid` int(11) UNSIGNED NOT NULL,
  `productid` int(11) UNSIGNED NOT NULL,
  `factuurdatum` timestamp NOT NULL,
  `aantal` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`factuurcode`),
  KEY `productid to product_idx` (`productid`),
  KEY `userid to user_idx` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `productid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `productnaam` varchar(100) NOT NULL,
  `beschrijving` text NOT NULL,
  `prijs` decimal(5,2) NOT NULL,
  `productaantal` int(11) UNSIGNED NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`productid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `productcategorie`
--

DROP TABLE IF EXISTS `productcategorie`;
CREATE TABLE IF NOT EXISTS `productcategorie` (
  `categorieid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `productid` int(11) UNSIGNED NOT NULL,
  `categorie` varchar(100) NOT NULL,
  PRIMARY KEY (`categorieid`),
  KEY `productid to product_idx` (`productid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `username` varchar(100) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`userid`, `firstname`, `infix`, `lastname`, `email`, `phone`, `address`, `zipcode`, `city`, `password`, `role`, `employeeId`, `username`) VALUES
(4, 'olaf', '', 'majoor', 'olaf@gmail.com', '0622314416', 'komhoeklaan', '3828 AL', 'hoogland', 'olaf', 'klant', 0, 'olaf majoor'),
(5, 'd', 'd', 'd', 'd@ded.nl', '1234567890', 'vissenhoofd 23', '890kl', 'tiel', 'test1234', 'klant', 0, 'tester');

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `userid to usertable` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `factuur`
--
ALTER TABLE `factuur`
  ADD CONSTRAINT `productid to producttable` FOREIGN KEY (`productid`) REFERENCES `product` (`productid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `userid to user` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `productcategorie`
--
ALTER TABLE `productcategorie`
  ADD CONSTRAINT `productid to product` FOREIGN KEY (`productid`) REFERENCES `product` (`productid`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
