-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 12. Nov 2018 um 15:43
-- Server-Version: 10.1.30-MariaDB
-- PHP-Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `loginsystem`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `db_topic`
--

CREATE TABLE `db_topic` (
  `db_id` int(6) UNSIGNED NOT NULL,
  `db_header` varchar(30) NOT NULL,
  `db_text` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `db_topic`
--

INSERT INTO `db_topic` (`db_id`, `db_header`, `db_text`) VALUES
(1, 'test', 'test'),
(2, 'Huhu', 'Huhu');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(256) NOT NULL,
  `user_last` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_uid` varchar(256) NOT NULL,
  `user_pwd` varchar(256) NOT NULL,
  `permissions` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`, `permissions`) VALUES
(1, 'test', 'test', 'test@web.de', 'test', '$2y$10$dsLwLNNC5MsCIL.Ly6T/Qu4Q0uAj73Fls85VDCBLAScmJaJfkSlbq', b'0'),
(2, 'Lukas', 'Dreysse', 'anna.l@hotmail.com', 'Admin', '$2y$10$98mhmyhqx2dFfrdmHT1U9eGzQlAbRB27CrARW8NEMCY4xo540YthK', b'0'),
(3, 'Dominik', 'Rabbit', 'rabbitmail@example.com', 'SuperRabbit', '$2y$10$ujuxOybnDGVLnce.T64VdeAQb/L1hCQrO2fnCRkFPKFJkxMZgyTru', b'0'),
(4, 'miriam', 'unger', 'miri@gmx.net', 'miri', '$2y$10$EmnAlqCrDYITdw27s14tlub7KOqcIW4BMueDU4fuqM3V.UwRG5P0y', b'0');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `db_topic`
--
ALTER TABLE `db_topic`
  ADD PRIMARY KEY (`db_id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `db_topic`
--
ALTER TABLE `db_topic`
  MODIFY `db_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
