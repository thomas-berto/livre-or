-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 08 jan. 2020 à 17:35
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
-- Base de données :  `livreor`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire` text NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`ID`, `commentaire`, `id_utilisateur`, `date`) VALUES
(12, 'ffff', 28, '2019-12-19'),
(13, 'gcg', 28, '2019-12-21'),
(14, 'ttt', 28, '2019-12-21'),
(15, 'f', 28, '2019-12-21'),
(16, 'coco', 28, '2019-12-21'),
(17, 'quel but de Messi', 28, '2019-12-21'),
(18, 'une frappe exceptionnel', 28, '2019-12-21'),
(30, 'rdv au taasy\r\n', 28, '2020-01-02'),
(31, 'teaaam jul', 28, '2020-01-02'),
(33, 'de ligoness\r\n', 28, '2020-01-03'),
(34, 'gjj', 28, '2020-01-04'),
(35, 'ffffffffggggggggg', 1, '2020-01-04'),
(29, 'rdv a levek', 29, '2020-01-02'),
(28, 'valverde demission\r\n', 29, '2020-01-02'),
(37, '#valverdeout', 32, '2020-01-05'),
(36, 'nnnnnnnnn', 30, '2020-01-04'),
(38, 'bonne nuit a tout le monde sauf a se chien en laisse  de valverde #valverdeout', 33, '2020-01-06'),
(39, 'nul.', 34, '2020-01-06'),
(40, 'Dans l\'axe', 35, '2020-01-06');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(28, 'h', 'hhhh'),
(29, 'leo', 'messi'),
(30, 'tomtom', 'bobo'),
(31, 'XADV13', 'XADV'),
(32, 'ib', 'azerty'),
(33, 'byrus', 'sama'),
(34, 'ninou.ines', 'ninouninou'),
(35, 'test', 'test');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
