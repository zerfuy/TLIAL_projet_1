-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 14 oct. 2019 à 11:50
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tli`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_User` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  PRIMARY KEY (`id_User`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_User`, `login`, `password`, `name`, `firstname`) VALUES
(1, 'nouhaila', 'fbnegn', 'genegne', 'nouha'),
(2, 'imane', 'rhgte', 'ENJRYN', 'fhBfbhe'),
(3, 'SIHAM', 'zegzH', 'FRHTEH', 'DGZRG'),
(4, 'nouhaila', 'aeVFZB', 'FBFZB ', 'GZBZB'),
(5, 'nouhaila', 'bgetnte', 'safzrb', 'usbw'),
(6, 'faical', 'qdbvf', 'fsbeg', 'usbw'),
(7, 'said', 'cj;yi', 'h:kjvl', 'usbw'),
(8, 'nouhaila', 'dliyimy', 'cc:iylyi', 'usbw'),
(9, 'CHARAF', 'FRZG', 'GZRG', 'usbw'),
(10, 'HOUCINE', 'BEFGB', 'EFBFETB', ' JYUKEPFN'),
(11, 'FATIMA', 'qsfdg', 'zgeftBH', 'EGVZRB'),
(17, 'login', 'pass', 'hegu', 'vector'),
(16, 'abcd', 'abcd', 'abcd', 'abc'),
(18, 'fai', 'faical', 'OUAHBANI', 'FAICAL');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
