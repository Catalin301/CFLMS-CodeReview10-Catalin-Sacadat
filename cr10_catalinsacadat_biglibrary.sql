-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 23. Jul 2020 um 08:55
-- Server-Version: 10.4.13-MariaDB
-- PHP-Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr10_catalinsacadat_biglibrary`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `media`
--

CREATE TABLE `media` (
  `Media_ID` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `ISBN` varchar(20) DEFAULT NULL,
  `short_description` varchar(100) DEFAULT NULL,
  `author` varchar(25) DEFAULT NULL,
  `publisher` varchar(25) DEFAULT NULL,
  `publish_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `media`
--

INSERT INTO `media` (`Media_ID`, `title`, `image`, `ISBN`, `short_description`, `author`, `publisher`, `publish_date`, `type`) VALUES
(13, 'One More Light', 'https://images-na.ssl-images-amazon.com/images/I/915lQu0AiBL._SL1500_.jpg', 'ISBN:23657478', 'One More Light is the seventh studio album by American rock band Linkin Park. It was released on May', 'Linkin Park', '‎Warner Bros.‎ ‎Machine S', '2017-05-18 22:00:00.000000', 'Album/CD'),
(14, 'Becoming', 'https://spng.pngfind.com/pngs/s/475-4756146_becoming-by-michelle-obama-book-cover-hd-png.png', 'ISBN:36974125', 'Die kraftvolle und inspirierende Autobiografie der ehemaligen First Lady der USA Michelle Obama', 'Michelle Obama', 'Crown Publishing Group,', '2018-11-12 23:00:00.000000', 'book'),
(15, 'Harry Potter', 'https://kbimages1-a.akamaihd.net/fd5d3fe3-e871-4ce1-8fa0-ade2639a7e1a/1200/1200/False/harry-potter-und-die-kammer-des-schreckens-1.jpg', 'ISBN:258741', 'Harry Potter und die Kammer des Schreckens ist der zweite Band der Harry-Potter-Buchreihe von Joanne', 'J.K.Rowling', 'Bloomsbury', '1998-07-01 22:00:00.000000', 'book'),
(16, 'Peace Talks', 'https://assets.thalia.media/img/artikel/780eac3611557f53e65eeeabcf1513f3371e5b78-00-00.jpeg', 'ISBN:256987', 'When the Supernatural nations of the world meet up to negotiate an end to ongoing hostilities,', 'Jim Butcher', 'Arrow', '2020-07-13 22:00:00.000000', 'book'),
(17, 'The Secret', 'https://www.randomhouse.de/content/edition/covervoila_hires/Byrne_RThe_Secret_-_Das_Praxisbuch__140312.jpg', 'ISBN:3654789', 'Alle Leser sind im Grunde auf der Suche nach der einen Erkenntnis, die nicht nur ihre intellektuelle', 'Rhonda Byrne', 'Beyond Words Publishing', '2006-11-25 23:00:00.000000', 'book'),
(18, 'Unholy Ground', 'https://img.discogs.com/7efXif7uo4Ra7LgZQ29fmXBqZrQ=/fit-in/600x600/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-5012305-1383630569-4274.jpeg.jpg', 'ISBN:26485264', 'Unholy Ground ist das vierte Studioalbum der finnischen Rockband Sunrise Avenue.', 'Sunrise Avenue', 'Polydor', '2013-10-17 22:00:00.000000', 'Album/CD'),
(19, 'The Lions of Lucerne', 'https://images-na.ssl-images-amazon.com/images/I/51D653EGi0L._AC_SY400_.jpg', 'ISBN:26354897', 'In einem spektakulären Coup entführen Terroristen den Präsidenten der USA und töten dabei 30 Männer ', 'Brad Thor', 'Festa', '2001-12-31 23:00:00.000000', 'book'),
(20, 'Black Out', 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Blackout_%28Marc_Elsberg%2C_2012%29.jpg/170px-Blackout_%28Marc_Elsberg%2C_2012%29.jpg', 'ISBN:21659874', 'Der Roman erzählt über einen Zeitraum von zwei Wochen die katastrophalen Auswirkungen eines großfläc', 'Marc Elsenberg', 'Blanvalet', '2011-12-31 23:00:00.000000', 'book');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`Media_ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `media`
--
ALTER TABLE `media`
  MODIFY `Media_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
