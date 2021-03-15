-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 15, 2021 at 02:20 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wow`
--

-- --------------------------------------------------------

--
-- Table structure for table `import`
--

CREATE TABLE `import` (
  `timestamp` int(244) NOT NULL,
  `playersNumber` int(11) NOT NULL,
  `teamComp` varchar(255) NOT NULL,
  `ennemyComp` varchar(255) NOT NULL,
  `victory` tinyint(1) NOT NULL,
  `ratingChange` int(10) NOT NULL,
  `ennemyMMR` int(50) NOT NULL,
  `isRated` tinyint(1) NOT NULL,
  `idMap` int(50) NOT NULL,
  `idUser` int(255) NOT NULL,
  `specialization` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `maps`
--

CREATE TABLE `maps` (
  `idMap` int(244) NOT NULL,
  `Nom` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `maps`
--

INSERT INTO `maps` (`idMap`, `Nom`) VALUES
(572, 'Ruins of Lordaeron'),
(617, 'Dalaran Arena'),
(980, 'Tol\'Viron Arena'),
(1134, 'Tiger\'s Peak'),
(1504, 'BlackrookHoldArena'),
(1505, 'Nagrand Arena'),
(1552, 'Valsharah Arena'),
(1672, 'Blade\'s Edge Arena'),
(1825, 'KulTiras Arena'),
(1911, 'Zandalari Arena'),
(2167, 'The Robodrome'),
(2373, 'Empyrean Domain');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `username`, `password`) VALUES
(1, 'ssss', 'qq'),
(2, 'test', 'ee'),
(3, 'zzz', 'dd'),
(7, 'haha', 'opop');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `import`
--
ALTER TABLE `import`
  ADD PRIMARY KEY (`timestamp`),
  ADD KEY `import_ibfk_1` (`idMap`),
  ADD KEY `import_ibfk_2` (`idUser`);

--
-- Indexes for table `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`idMap`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `import`
--
ALTER TABLE `import`
  ADD CONSTRAINT `import_ibfk_1` FOREIGN KEY (`idMap`) REFERENCES `maps` (`idMap`),
  ADD CONSTRAINT `import_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
