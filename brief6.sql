-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 05:24 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brief6`
--

-- --------------------------------------------------------

--
-- Table structure for table `chambre`
--

CREATE TABLE `chambre` (
  `id_ch` int(11) NOT NULL,
  `numero_ch` int(11) NOT NULL,
  `type_ch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `croisiere`
--

CREATE TABLE `croisiere` (
  `id_cr` int(11) NOT NULL,
  `port_dar` int(11) NOT NULL,
  `port_dep` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `nb_nuit` int(11) NOT NULL,
  `prix_cr` float NOT NULL,
  `date-dep` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `navire`
--

CREATE TABLE `navire` (
  `id_n` int(11) NOT NULL,
  `name-n` varchar(255) NOT NULL,
  `nb_ch` int(11) NOT NULL,
  `nb_pl` int(11) NOT NULL,
  `port_depart` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `port`
--

CREATE TABLE `port` (
  `id_p` int(11) NOT NULL,
  `nameP` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id_re` int(11) NOT NULL,
  `date_re` date NOT NULL,
  `prix-re` float NOT NULL,
  `id_na` int(11) NOT NULL COMMENT 'id de narive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `typechambre`
--

CREATE TABLE `typechambre` (
  `id_t_ch` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Prix` int(11) NOT NULL,
  `Capacite` int(11) NOT NULL COMMENT 'nombre des gens dans chaque chambre'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_u` int(11) NOT NULL,
  `FName` varchar(255) NOT NULL,
  `LName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Role` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 for members / 1 for admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`id_ch`);

--
-- Indexes for table `croisiere`
--
ALTER TABLE `croisiere`
  ADD PRIMARY KEY (`id_cr`),
  ADD KEY `port_de_depart` (`port_dep`),
  ADD KEY `port_de_arriver` (`port_dar`);

--
-- Indexes for table `navire`
--
ALTER TABLE `navire`
  ADD PRIMARY KEY (`id_n`),
  ADD UNIQUE KEY `nb_ch` (`nb_ch`),
  ADD KEY `premier_port` (`port_depart`);

--
-- Indexes for table `port`
--
ALTER TABLE `port`
  ADD PRIMARY KEY (`id_p`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_re`),
  ADD KEY `id_narive` (`id_na`);

--
-- Indexes for table `typechambre`
--
ALTER TABLE `typechambre`
  ADD PRIMARY KEY (`id_t_ch`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_u`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `id_ch` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `croisiere`
--
ALTER TABLE `croisiere`
  MODIFY `id_cr` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `navire`
--
ALTER TABLE `navire`
  MODIFY `id_n` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `port`
--
ALTER TABLE `port`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_re` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `typechambre`
--
ALTER TABLE `typechambre`
  MODIFY `id_t_ch` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chambre`
--
ALTER TABLE `chambre`
  ADD CONSTRAINT `typeofchambre` FOREIGN KEY (`id_ch`) REFERENCES `typechambre` (`id_t_ch`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `croisiere`
--
ALTER TABLE `croisiere`
  ADD CONSTRAINT `port_de_arriver` FOREIGN KEY (`port_dar`) REFERENCES `port` (`id_p`),
  ADD CONSTRAINT `port_de_depart` FOREIGN KEY (`port_dep`) REFERENCES `port` (`id_p`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `navire`
--
ALTER TABLE `navire`
  ADD CONSTRAINT `navire_ibfk_1` FOREIGN KEY (`nb_ch`) REFERENCES `chambre` (`id_ch`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `premier_port` FOREIGN KEY (`port_depart`) REFERENCES `port` (`id_p`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `id_narive` FOREIGN KEY (`id_na`) REFERENCES `navire` (`id_n`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
