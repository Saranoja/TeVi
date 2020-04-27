-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: apr. 27, 2020 la 05:44 PM
-- Versiune server: 10.4.11-MariaDB
-- Versiune PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `tevi`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `data`
--

CREATE TABLE `data` (
  `event id` varchar(200) NOT NULL,
  `summary` varchar(200) NOT NULL,
  `success` varchar(200) NOT NULL,
  `suicide` varchar(200) NOT NULL,
  `attack type` varchar(200) NOT NULL,
  `tactics` varchar(200) NOT NULL,
  `year` varchar(200) NOT NULL,
  `month` varchar(200) NOT NULL,
  `day` varchar(200) NOT NULL,
  `approximate date` varchar(200) NOT NULL,
  `duration` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `country code` varchar(200) NOT NULL,
  `region` varchar(200) NOT NULL,
  `provence` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `latitude` varchar(200) NOT NULL,
  `longitude` varchar(200) NOT NULL,
  `corp` varchar(200) NOT NULL,
  `group name` varchar(200) NOT NULL,
  `group subname` varchar(200) NOT NULL,
  `motive` varchar(200) NOT NULL,
  `gun certain` varchar(200) NOT NULL,
  `terrorists number` varchar(200) NOT NULL,
  `claim` varchar(200) NOT NULL,
  `claim mode` varchar(200) NOT NULL,
  `target type` varchar(200) NOT NULL,
  `target subtype` varchar(200) NOT NULL,
  `target` varchar(200) NOT NULL,
  `target nationality` varchar(200) NOT NULL,
  `weapon type` varchar(200) NOT NULL,
  `weapon subtype` varchar(200) NOT NULL,
  `weapon details` varchar(200) NOT NULL,
  `total fatalities` int(11) NOT NULL,
  `u.s. citizens who died` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `data`
--

INSERT INTO `data` (`event id`, `summary`, `success`, `suicide`, `attack type`, `tactics`, `year`, `month`, `day`, `approximate date`, `duration`, `country`, `country code`, `region`, `provence`, `city`, `latitude`, `longitude`, `corp`, `group name`, `group subname`, `motive`, `gun certain`, `terrorists number`, `claim`, `claim mode`, `target type`, `target subtype`, `target`, `target nationality`, `weapon type`, `weapon subtype`, `weapon details`, `total fatalities`, `u.s. citizens who died`) VALUES
('', '', '', '', '', '', '1999', '', '', '', '', 'Iraq', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
