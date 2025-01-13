-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2025. Jan 13. 15:28
-- Kiszolgáló verziója: 10.4.28-MariaDB
-- PHP verzió: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `pcparts`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `components`
--

CREATE TABLE `components` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `brand` varchar(100) NOT NULL,
  `details` text DEFAULT NULL,
  `category` enum('Motherboard','CPU','Memory','GPU','Drive','Display','Mouse','Keyboard') DEFAULT NULL,
  `price` float(10,2) DEFAULT NULL,
  `rating` float(4,2) DEFAULT NULL,
  `file_upload` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `components`
--

INSERT INTO `components` (`id`, `name`, `brand`, `details`, `category`, `price`, `rating`, `file_upload`) VALUES
(7, 'H510M S2H V3', 'GIGABYTE', '{\"Max Frequency\":\"3200MHz\",\"Audio Card\":\"Integrated Realtek 7,1\",\"BIOS\":\"UEFI\",\"Seating\":\"Intel 1200\",\"Networking Card\":\"Integrated\"}', 'Motherboard', 30000.00, 4.80, 'kép_2025-01-13_150206567.png'),
(8, 'GeForce GTX 1050 Ti', 'NVIDIA', '{\"Memory\":\"4GB VRAM\",\"Overclockable\":\"Yes\",\"Memory Type\":\"GDDR5\"}', 'GPU', 70000.00, 4.90, 'gtx1050ti.jpg'),
(9, 'Core i9-9900kf', 'Intel', '{\"Base\":\"x64\",\"Frequency\":\"3.6GHz\",\"Cores\":\"8\",\"Overclockable\":\"Yes\"}', 'CPU', 78400.00, 4.50, 'i9.jpg'),
(10, 'FURY 16GB KIT DDR4 3200MHz CL16 Beast Black', 'KINGSTON', '{\"Memory Type\":\"DDR4\",\"Memory\":\"2x16GB\",\"Frequency\":\"3200MHz\",\"Color\":\"Black\"}', 'Memory', 14800.00, 4.90, 'DEb16b32b2 (1).jpg'),
(11, 'A400', 'KINGSTON', '{\"Size\":\"960 GB\",\"R\\/W speed\":\"500MBs \\/ 400MBs\",\"Warranty\":\"1 year\"}', 'Drive', 23690.00, 4.80, 'ssd.jpg'),
(12, 'TUK gaming VG246H1A', 'ASUS', '{\"Aspect Ration\":\"16:9\",\"Size\":\"12\\\"\",\"Refresh Rate\":\"100Hz\",\"Resolution\":\"Full HD\"}', 'Display', 42999.00, 3.90, 'monitor.jpg'),
(13, 'DeathAdder Essential 2021', 'RAZER', '{\"Response Time\":\"1ms\",\"Max DPI\":\"6400\",\"Weight\":\"96g\",\"Port\":\"USB\"}', 'Mouse', 11990.00, 4.50, 'mouse.jpg'),
(14, 'Apex 3 TKL - US', 'SteelSeries', '{\"Size\":\"60%\",\"Lights\":\"Customisable\"}', 'Keyboard', 24990.00, 4.70, 'kép_2025-01-13_152620573.png');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `components`
--
ALTER TABLE `components`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `components`
--
ALTER TABLE `components`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
