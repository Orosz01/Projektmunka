-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Feb 08. 09:39
-- Kiszolgáló verziója: 10.4.21-MariaDB
-- PHP verzió: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `program`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `egyeb termekek`
--

CREATE TABLE `egyeb termekek` (
  `Termek azonosito` varchar(200) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `Termek nev` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `F_Id` varchar(10) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `Ar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `felhasznalok`
--

CREATE TABLE `felhasznalok` (
  `F_Id` varchar(15) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `username` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `pasword` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `kartyak`
--

CREATE TABLE `kartyak` (
  `Termek azonosito` varchar(200) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `Termek nev` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `F_Id` varchar(10) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `Ar` int(11) NOT NULL,
  `K_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `kartya_kat`
--

CREATE TABLE `kartya_kat` (
  `id` int(10) NOT NULL,
  `nev` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `penznem`
--

CREATE TABLE `penznem` (
  `Termek azonosito` varchar(200) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `Termek nev` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `F_Id` varchar(10) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `Ar` int(11) NOT NULL,
  `K_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `penz_kat`
--

CREATE TABLE `penz_kat` (
  `id` int(5) NOT NULL,
  `nev` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tazok`
--

CREATE TABLE `tazok` (
  `Termek azonosito` varchar(200) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `Termek nev` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `F_Id` varchar(10) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `Ar` int(11) NOT NULL,
  `K_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tazo_kat`
--

CREATE TABLE `tazo_kat` (
  `id` int(11) NOT NULL,
  `nev` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `egyeb termekek`
--
ALTER TABLE `egyeb termekek`
  ADD PRIMARY KEY (`Termek azonosito`),
  ADD KEY `F_Id` (`F_Id`);

--
-- A tábla indexei `felhasznalok`
--
ALTER TABLE `felhasznalok`
  ADD PRIMARY KEY (`F_Id`);

--
-- A tábla indexei `kartyak`
--
ALTER TABLE `kartyak`
  ADD PRIMARY KEY (`Termek azonosito`),
  ADD KEY `F_Id` (`F_Id`),
  ADD KEY `K_id` (`K_id`);

--
-- A tábla indexei `kartya_kat`
--
ALTER TABLE `kartya_kat`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `penznem`
--
ALTER TABLE `penznem`
  ADD PRIMARY KEY (`Termek azonosito`),
  ADD KEY `F_Id` (`F_Id`),
  ADD KEY `K_id` (`K_id`);

--
-- A tábla indexei `penz_kat`
--
ALTER TABLE `penz_kat`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `tazok`
--
ALTER TABLE `tazok`
  ADD PRIMARY KEY (`Termek azonosito`),
  ADD KEY `F_Id` (`F_Id`),
  ADD KEY `K_id` (`K_id`);

--
-- A tábla indexei `tazo_kat`
--
ALTER TABLE `tazo_kat`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

ALTER TABLE `felhasznalok`
  MODIFY `F_Id` int(10) NOT NULL AUTO_INCREMENT;


--
-- AUTO_INCREMENT a táblához `kartya_kat`
--
ALTER TABLE `kartya_kat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `tazo_kat`
--
ALTER TABLE `tazo_kat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `egyeb termekek`
--
ALTER TABLE `egyeb termekek`
  ADD CONSTRAINT `id` FOREIGN KEY (`F_Id`) REFERENCES `felhasznalok` (`F_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Megkötések a táblához `kartyak`
--
ALTER TABLE `kartyak`
  ADD CONSTRAINT `Kartyak_ibfk_1` FOREIGN KEY (`K_id`) REFERENCES `kartya_kat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ide` FOREIGN KEY (`F_Id`) REFERENCES `felhasznalok` (`F_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Megkötések a táblához `penznem`
--
ALTER TABLE `penznem`
  ADD CONSTRAINT `ided` FOREIGN KEY (`F_Id`) REFERENCES `felhasznalok` (`F_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Megkötések a táblához `penz_kat`
--
ALTER TABLE `penz_kat`
  ADD CONSTRAINT `Penz_Kat_ibfk_1` FOREIGN KEY (`id`) REFERENCES `penznem` (`K_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Megkötések a táblához `tazok`
--
ALTER TABLE `tazok`
  ADD CONSTRAINT `Tazok_ibfk_1` FOREIGN KEY (`K_id`) REFERENCES `tazo_kat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ideide` FOREIGN KEY (`F_Id`) REFERENCES `felhasznalok` (`F_Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
