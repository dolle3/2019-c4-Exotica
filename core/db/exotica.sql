-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 23 sep 2019 om 10:36
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
  `idagenda` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `time` timestamp NOT NULL,
  `person` enum('wim','truus','kees') NOT NULL,
  `iduser` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`idagenda`),
  KEY `iduser to idusers_idx` (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `idorder` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `iduser` int(10) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `price_ex` decimal(5,2) NOT NULL,
  `price_inc` decimal(5,2) NOT NULL,
  `status` enum('verzonden','betaald','onderweg','aangekomen') NOT NULL,
  PRIMARY KEY (`idorder`),
  KEY `iduser to users_idx` (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `orderline`
--

DROP TABLE IF EXISTS `orderline`;
CREATE TABLE IF NOT EXISTS `orderline` (
  `idorderline` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idorder` int(10) UNSIGNED NOT NULL,
  `ìdproduct` int(10) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `price` decimal(4,2) NOT NULL,
  `total` decimal(5,2) NOT NULL,
  PRIMARY KEY (`idorderline`),
  KEY `idorder to order_idx` (`idorder`),
  KEY `idproduct to product_idx` (`ìdproduct`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `idproduct` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idcategory` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(4,2) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`idproduct`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product_category`
--

DROP TABLE IF EXISTS `product_category`;
CREATE TABLE IF NOT EXISTS `product_category` (
  `idcategory` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `title` int(11) NOT NULL,
  PRIMARY KEY (`idcategory`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `iduser` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstname` varchar(150) NOT NULL,
  `infix` varchar(50) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` int(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `city` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL,
  `role` enum('klant','admin','medewerker') NOT NULL,
  `specialty` enum('frog','salamander','turtle/tortoise','-') NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `iduser to idusers` FOREIGN KEY (`iduser`) REFERENCES `users` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `iduser to users` FOREIGN KEY (`iduser`) REFERENCES `users` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `orderline`
--
ALTER TABLE `orderline`
  ADD CONSTRAINT `idorder to order` FOREIGN KEY (`idorder`) REFERENCES `order` (`idorder`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idproduct to product` FOREIGN KEY (`ìdproduct`) REFERENCES `product` (`idproduct`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
