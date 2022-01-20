-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: localhost
-- Létrehozás ideje: 2022. Jan 20. 08:08
-- Kiszolgáló verziója: 10.3.29-MariaDB-0+deb10u1
-- PHP verzió: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `c31k202121`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `Egyeb termekek`
--

CREATE TABLE `Egyeb termekek` (
  `Termek azonosito` varchar(200) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `Termek nev` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `F_Id` varchar(10) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `Ar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `Felhasznalok`
--

CREATE TABLE `Felhasznalok` (
  `F_Id` varchar(15) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `username` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `password` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `Kartyak`
--

CREATE TABLE `Kartyak` (
  `Termek azonosito` varchar(200) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `Termek nev` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `F_Id` varchar(10) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `Ar` int(11) NOT NULL,
  `K_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `Kartya_Kat`
--

CREATE TABLE `Kartya_Kat` (
  `id` int(10) NOT NULL,
  `nev` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `Penznem`
--

CREATE TABLE `Penznem` (
  `Termek azonosito` varchar(200) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `Termek nev` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `F_Id` varchar(10) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `Ar` int(11) NOT NULL,
  `K_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `Penz_Kat`
--

CREATE TABLE `Penz_Kat` (
  `id` int(5) NOT NULL,
  `nev` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `Tazok`
--

CREATE TABLE `Tazok` (
  `Termek azonosito` varchar(200) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `Termek nev` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `F_Id` varchar(10) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `Ar` int(11) NOT NULL,
  `K_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `Tazo_Kat`
--

CREATE TABLE `Tazo_Kat` (
  `id` int(11) NOT NULL,
  `nev` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `Egyeb termekek`
--
ALTER TABLE `Egyeb termekek`
  ADD PRIMARY KEY (`Termek azonosito`),
  ADD KEY `F_Id` (`F_Id`);

--
-- A tábla indexei `Felhasznalok`
--
ALTER TABLE `Felhasznalok`
  ADD PRIMARY KEY (`F_Id`);

--
-- A tábla indexei `Kartyak`
--
ALTER TABLE `Kartyak`
  ADD PRIMARY KEY (`Termek azonosito`),
  ADD KEY `F_Id` (`F_Id`),
  ADD KEY `K_id` (`K_id`);

--
-- A tábla indexei `Kartya_Kat`
--
ALTER TABLE `Kartya_Kat`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `Penznem`
--
ALTER TABLE `Penznem`
  ADD PRIMARY KEY (`Termek azonosito`),
  ADD KEY `F_Id` (`F_Id`),
  ADD KEY `K_id` (`K_id`);

--
-- A tábla indexei `Penz_Kat`
--
ALTER TABLE `Penz_Kat`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `Tazok`
--
ALTER TABLE `Tazok`
  ADD PRIMARY KEY (`Termek azonosito`),
  ADD KEY `F_Id` (`F_Id`),
  ADD KEY `K_id` (`K_id`);

--
-- A tábla indexei `Tazo_Kat`
--
ALTER TABLE `Tazo_Kat`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `Kartya_Kat`
--
ALTER TABLE `Kartya_Kat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `Tazo_Kat`
--
ALTER TABLE `Tazo_Kat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `Felhasznalok`
--
ALTER TABLE `Felhasznalok`
  ADD CONSTRAINT `asz` FOREIGN KEY (`F_Id`) REFERENCES `Tazok` (`F_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fe` FOREIGN KEY (`F_Id`) REFERENCES `Kartyak` (`F_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `felhasznalo` FOREIGN KEY (`F_Id`) REFERENCES `Egyeb termekek` (`F_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lh` FOREIGN KEY (`F_Id`) REFERENCES `Penznem` (`F_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Megkötések a táblához `Kartyak`
--
ALTER TABLE `Kartyak`
  ADD CONSTRAINT `Kartyak_ibfk_1` FOREIGN KEY (`K_id`) REFERENCES `Kartya_Kat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Megkötések a táblához `Penz_Kat`
--
ALTER TABLE `Penz_Kat`
  ADD CONSTRAINT `Penz_Kat_ibfk_1` FOREIGN KEY (`id`) REFERENCES `Penznem` (`K_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Megkötések a táblához `Tazok`
--
ALTER TABLE `Tazok`
  ADD CONSTRAINT `Tazok_ibfk_1` FOREIGN KEY (`K_id`) REFERENCES `Tazo_Kat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
