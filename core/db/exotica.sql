-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 04 feb 2020 om 09:38
-- Serverversie: 8.0.18
-- PHP-versie: 7.3.11

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

CREATE TABLE `agenda` (
  `afspraakid` int(11) UNSIGNED NOT NULL,
  `userid` int(11) UNSIGNED NOT NULL,
  `afspraakdatum` timestamp NOT NULL,
  `afspraaksoort` enum('nazorg','bestelling') NOT NULL,
  `werknemerid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `events`
--

INSERT INTO `events` (`id`, `title`, `start_event`, `end_event`) VALUES
(11, 'kopen dier', '2020-02-04 00:00:00', '2020-02-05 00:00:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `factuur`
--

CREATE TABLE `factuur` (
  `factuurcode` int(11) UNSIGNED NOT NULL,
  `userid` int(11) UNSIGNED DEFAULT NULL,
  `factuurdatum` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `factuur`
--

INSERT INTO `factuur` (`factuurcode`, `userid`, `factuurdatum`) VALUES
(11, NULL, '2020-01-28 14:06:47'),
(12, NULL, '2020-01-31 11:43:12'),
(13, NULL, '2020-01-31 11:44:38'),
(14, NULL, '2020-02-04 00:30:31'),
(15, NULL, '2020-02-04 00:32:50'),
(16, NULL, '2020-02-04 00:34:24'),
(17, 6, '2020-02-04 09:26:46');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `orderline`
--

CREATE TABLE `orderline` (
  `idorderline` int(11) UNSIGNED NOT NULL,
  `factuurcode` int(11) UNSIGNED NOT NULL,
  `productid` int(11) UNSIGNED NOT NULL,
  `aantal` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `orderline`
--

INSERT INTO `orderline` (`idorderline`, `factuurcode`, `productid`, `aantal`) VALUES
(3, 11, 2, 1),
(4, 11, 1, 4),
(5, 12, 2, 1),
(6, 13, 2, 1),
(7, 14, 2, 1),
(8, 15, 2, 1),
(9, 16, 2, 1),
(10, 17, 1, 5);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
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
-- Gegevens worden geëxporteerd voor tabel `product`
--

INSERT INTO `product` (`productid`, `productcode`, `productnaam`, `beschrijving`, `prijs`, `productaantal`, `image`, `productcategorieid`) VALUES
(1, 'EXO123', 'Exo Terra Glas Terrarium Zwart - Terraria - 60x45x60 cm', 'Het Exo Terra Glasterrarium is de ideale behuizing voor reptielen en amfibieën ontworpen door Europese herpetologen. De vooraan openende deuren vergemakkelijken het voeren en onderhoud. Een speciaal ontworpen sluiting voorkomt ontsnappen en de deuren kunnen afzonderlijk geopend worden. De volledig uit staalgaas bestaande bovenzijde laat UVB en infrarood door, en kan in zijn geheel worden weggenomen en vergemakkelijkt het inrichten en onderhoud. Aan beide achterzijden van het draadrooster zijn vijf afsluitbare ingangen voor snoeren en buizen voor het gebruik in het terrarium van Heat Wave Rocks, Waterfalls, sensoren, enz.. Door de verheven terrariumbodem kan een substraatverwarmer onderaan worden aangebracht om een deel van het grondoppervlak te verwarmen. De extra hoge voorruit is ideaal voor een dikke bodembedekking (gravende reptielen), een watergedeelte (paludarium) of het aanbrengen van een Exo Terra Reptile Den. De natuurlijke achterwand is in dezelfde kleur als de andere Exo Terra decoratiematerialen (Water Dishes, Waterfalls, Heat Wave Rocks, enz.) en biedt extra klimmogelijkheden.', '179.00', 71, 'img/apparatuur/aquarium1.png', 4),
(2, 'EXO-5364', 'Paludarium Terrarium - 30 x 30 x 60 cm', 'Dit nieuwe type extra hoog Exo Terra glazen terrarium is ideaal voor boombewonende reptielen- en amfibieënsoorten. De unieke achtergrond met wortelmotief maakt er een geweldig habitat van voor een groot aantal boombewonende soorten zoals boomboa’s en pythons, daggekko’s, bladstaartgekko’s, tokehs, boomkikkers enz. Het heeft alle andere goede kenmerken van de Exo Terra glazen terrariums; Het Exo Terra glasterrarium is de ideale behuizing voor reptielen en amfibieën ontworpen door Europese herpetologen. De vooraan openende deuren vergemakkelijken het voeren en onderhoud. Een speciaal ontworpen sluiting voorkomt ontsnappen en de deuren kunnen afzonderlijk geopend worden. De volledig uit staalgaas bestaande bovenzijde laat UVB en infrarood door, en kan in zijn geheel worden weggenomen en vergemakkelijkt het inrichten en onderhoud. Aan beide achterzijden van het draadrooster zijn vijf afsluitbare ingangen voor snoeren en buizen voor het gebruik in het terrarium van Heat Wave Rocks, Waterfalls, sensoren en dergelijke. Door de verheven terrariumbodem kan een substraatverwarmer onderaan worden aangebracht om een deel van het grondoppervlak te verwarmen. De extra hoge voorruit is ideaal voor een dikke bodembedekking (gravende reptielen), een watergedeelte (paludarium) of het aanbrengen van een Exo Terra Reptile Den. De natuurlijke achterwand is in dezelfde kleur als de andere Exo Terra decoratiematerialen (Water Dishes, Waterfalls, Heat Wave Rocks en meer) en biedt extra klimmogelijkheden. Afmetingen: 30 x 30 x 60 cm Merk Exo Terra Samenvattend Waterdichte bodem.', '99.99', 79, 'img/apparatuur/aquarium2.png', 4);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `productcategorie`
--

CREATE TABLE `productcategorie` (
  `categorieid` int(11) UNSIGNED NOT NULL,
  `categorie` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `productcategorie`
--

INSERT INTO `productcategorie` (`categorieid`, `categorie`) VALUES
(1, 'reptiel'),
(2, 'amfibie'),
(3, 'voedsel'),
(4, 'aquarium');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
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
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`userid`, `firstname`, `infix`, `lastname`, `email`, `phone`, `address`, `zipcode`, `city`, `password`, `role`, `employeeId`, `username`) VALUES
(4, 'olaf', '', 'majoor', 'olaf@gmail.com', '0622314416', 'komhoeklaan', '3828 AL', 'hoogland', 'olaf', 'klant', 0, 'olaf majoor'),
(5, 'd', 'd', 'd', 'd@ded.nl', '1234567890', 'vissenhoofd 23', '890kl', 'tiel', 'test1234', 'klant', 0, 'tester'),
(6, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'klant', 0, 'a'),
(7, 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'klant', 0, 'b');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`afspraakid`),
  ADD KEY `userid to user_idx` (`userid`);

--
-- Indexen voor tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `factuur`
--
ALTER TABLE `factuur`
  ADD PRIMARY KEY (`factuurcode`),
  ADD KEY `userid to user_idx` (`userid`);

--
-- Indexen voor tabel `orderline`
--
ALTER TABLE `orderline`
  ADD PRIMARY KEY (`idorderline`),
  ADD KEY `factuurcode to factuur_idx` (`factuurcode`,`productid`),
  ADD KEY `product id to product_idx` (`productid`);

--
-- Indexen voor tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`),
  ADD KEY `productcategorieid to productcategorie_idx` (`productcategorieid`);

--
-- Indexen voor tabel `productcategorie`
--
ALTER TABLE `productcategorie`
  ADD PRIMARY KEY (`categorieid`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `agenda`
--
ALTER TABLE `agenda`
  MODIFY `afspraakid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT voor een tabel `factuur`
--
ALTER TABLE `factuur`
  MODIFY `factuurcode` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT voor een tabel `orderline`
--
ALTER TABLE `orderline`
  MODIFY `idorderline` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT voor een tabel `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `productcategorie`
--
ALTER TABLE `productcategorie`
  MODIFY `categorieid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `userid to usertable` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);

--
-- Beperkingen voor tabel `factuur`
--
ALTER TABLE `factuur`
  ADD CONSTRAINT `userid to user` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);

--
-- Beperkingen voor tabel `orderline`
--
ALTER TABLE `orderline`
  ADD CONSTRAINT `factuurcode to factuur` FOREIGN KEY (`factuurcode`) REFERENCES `factuur` (`factuurcode`),
  ADD CONSTRAINT `product id to product` FOREIGN KEY (`productid`) REFERENCES `product` (`productid`);

--
-- Beperkingen voor tabel `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `productcategorieid to productcategorie` FOREIGN KEY (`productcategorieid`) REFERENCES `productcategorie` (`categorieid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
