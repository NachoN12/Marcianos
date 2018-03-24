-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 23, 2018 at 11:39 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marcianos`
--

-- --------------------------------------------------------

--
-- Table structure for table `aeronave`
--

CREATE TABLE `aeronave` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `capacidad` int(11) NOT NULL,
  `origen` int(11) DEFAULT '0',
  `destino` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aeronave`
--

INSERT INTO `aeronave` (`id`, `nombre`, `capacidad`, `origen`, `destino`) VALUES
(1, 'Meteoro', 20, 1, 1),
(2, 'Halcon Milenario', 5, 0, 0),
(3, 'King of Space', 100, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fiscalizador`
--

CREATE TABLE `fiscalizador` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fiscalizador`
--

INSERT INTO `fiscalizador` (`id`, `nombre`) VALUES
(1, 'Tio Emilio'),
(2, 'Inspector Vallejos');

-- --------------------------------------------------------

--
-- Table structure for table `nodriza`
--

CREATE TABLE `nodriza` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nodriza`
--

INSERT INTO `nodriza` (`id`, `nombre`) VALUES
(4, 'Ã‘uÃ±orkdriza'),
(5, 'Estrella de La Muerte');

-- --------------------------------------------------------

--
-- Table structure for table `pasajero`
--

CREATE TABLE `pasajero` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `nave` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasajero`
--

INSERT INTO `pasajero` (`id`, `nombre`, `nave`) VALUES
(1, 'Marvin', 0),
(2, 'Zim', 0);

-- --------------------------------------------------------

--
-- Table structure for table `revision`
--

CREATE TABLE `revision` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `revisor` text NOT NULL,
  `nave` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `revision`
--

INSERT INTO `revision` (`id`, `fecha`, `revisor`, `nave`) VALUES
(1, '2018-03-23', '1', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aeronave`
--
ALTER TABLE `aeronave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fiscalizador`
--
ALTER TABLE `fiscalizador`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nodriza`
--
ALTER TABLE `nodriza`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasajero`
--
ALTER TABLE `pasajero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `revision`
--
ALTER TABLE `revision`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fecha` (`fecha`,`nave`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aeronave`
--
ALTER TABLE `aeronave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `fiscalizador`
--
ALTER TABLE `fiscalizador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nodriza`
--
ALTER TABLE `nodriza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pasajero`
--
ALTER TABLE `pasajero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `revision`
--
ALTER TABLE `revision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
