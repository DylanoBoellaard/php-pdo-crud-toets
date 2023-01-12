-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 12 jan 2023 om 13:28
-- Serverversie: 5.7.36
-- PHP-versie: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php-pdo-crud-toets`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Dureauto`
--

DROP TABLE IF EXISTS `Dureauto`;
CREATE TABLE IF NOT EXISTS `Dureauto` (
  `Id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Merk` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Model` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Topsnelheid` smallint(4) DEFAULT NULL,
  `Prijs` int(200) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Gegevens worden geëxporteerd voor tabel `Dureauto`
--

INSERT INTO `Dureauto` (`Id`, `Merk`, `Model`, `Topsnelheid`, `Prijs`) VALUES
(1, 'Bugatti', 'La vioture noire', 420, 16500000),
(2, 'Rolls-Royce', 'Swaptail', 250, 10960000),
(3, 'Bugatti', 'EB110', 390, 750000),
(4, 'Mercedes-Benz', 'Maybach Exelero', 350, 670000),
(5, 'Koenigsegg', 'CCXR Trevita', 401, 400000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
