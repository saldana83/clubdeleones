-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2019 at 05:10 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clubdeleones`
--

-- --------------------------------------------------------

--
-- Table structure for table `historiadelclub`
--

CREATE TABLE `historiadelclub` (
  `idhistoria` int(11) NOT NULL,
  `año` date NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `juntadirectiva`
--

CREATE TABLE `juntadirectiva` (
  `iddirectiva` int(11) NOT NULL,
  `idhistoria` int(11) NOT NULL,
  `idleon` int(11) NOT NULL,
  `cargo` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `idlogin` int(11) NOT NULL,
  `idleon` int(11) NOT NULL,
  `cedula` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pago`
--

CREATE TABLE `pago` (
  `idpago` int(11) NOT NULL,
  `idleon` int(11) NOT NULL,
  `idtipodepago` int(11) NOT NULL,
  `nombredepago` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `numrecibo` int(10) NOT NULL,
  `monto` int(10) NOT NULL,
  `personaqpago` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tipodepago`
--

CREATE TABLE `tipodepago` (
  `idtipodepago` int(11) NOT NULL,
  `tarjetadecredito` tinyint(1) NOT NULL,
  `bancaenlinea` tinyint(1) NOT NULL,
  `pagooficinas` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuarioleon`
--

CREATE TABLE `usuarioleon` (
  `idleon` int(11) NOT NULL,
  `nombrecompleto` text COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `fechanac` date NOT NULL,
  `telefonocasa` int(12) NOT NULL,
  `telefonooficina` int(12) NOT NULL,
  `telefonocelular` int(12) NOT NULL,
  `foto` blob NOT NULL,
  `estadocivil` text COLLATE utf8_spanish_ci NOT NULL,
  `codigoleon` int(10) NOT NULL,
  `nomdomadora` text COLLATE utf8_spanish_ci NOT NULL,
  `profesion` text COLLATE utf8_spanish_ci NOT NULL,
  `facebook` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `twitter` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `linketin` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `estatus` text COLLATE utf8_spanish_ci NOT NULL,
  `tiposangre` varchar(5) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `historiadelclub`
--
ALTER TABLE `historiadelclub`
  ADD PRIMARY KEY (`idhistoria`);

--
-- Indexes for table `juntadirectiva`
--
ALTER TABLE `juntadirectiva`
  ADD PRIMARY KEY (`iddirectiva`),
  ADD KEY `idhistoria` (`idhistoria`,`idleon`),
  ADD KEY `idleon` (`idleon`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idlogin`),
  ADD KEY `idleon` (`idleon`);

--
-- Indexes for table `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`idpago`),
  ADD KEY `idleon` (`idleon`,`idtipodepago`),
  ADD KEY `idtipodepago` (`idtipodepago`);

--
-- Indexes for table `tipodepago`
--
ALTER TABLE `tipodepago`
  ADD PRIMARY KEY (`idtipodepago`);

--
-- Indexes for table `usuarioleon`
--
ALTER TABLE `usuarioleon`
  ADD PRIMARY KEY (`idleon`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `historiadelclub`
--
ALTER TABLE `historiadelclub`
  MODIFY `idhistoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `juntadirectiva`
--
ALTER TABLE `juntadirectiva`
  MODIFY `iddirectiva` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `idlogin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pago`
--
ALTER TABLE `pago`
  MODIFY `idpago` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipodepago`
--
ALTER TABLE `tipodepago`
  MODIFY `idtipodepago` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarioleon`
--
ALTER TABLE `usuarioleon`
  MODIFY `idleon` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `juntadirectiva`
--
ALTER TABLE `juntadirectiva`
  ADD CONSTRAINT `juntadirectiva_ibfk_1` FOREIGN KEY (`idleon`) REFERENCES `usuarioleon` (`idleon`),
  ADD CONSTRAINT `juntadirectiva_ibfk_2` FOREIGN KEY (`idhistoria`) REFERENCES `historiadelclub` (`idhistoria`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`idleon`) REFERENCES `usuarioleon` (`idleon`);

--
-- Constraints for table `pago`
--
ALTER TABLE `pago`
  ADD CONSTRAINT `pago_ibfk_1` FOREIGN KEY (`idtipodepago`) REFERENCES `tipodepago` (`idtipodepago`),
  ADD CONSTRAINT `pago_ibfk_2` FOREIGN KEY (`idleon`) REFERENCES `usuarioleon` (`idleon`);

--
-- Constraints for table `usuarioleon`
--
ALTER TABLE `usuarioleon`
  ADD CONSTRAINT `usuarioleon_ibfk_1` FOREIGN KEY (`idleon`) REFERENCES `login` (`idleon`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
