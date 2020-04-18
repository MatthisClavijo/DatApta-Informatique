-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 18 avr. 2020 à 14:20
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `site_app`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `photo` mediumtext COLLATE utf8_bin NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `prénom` varchar(255) COLLATE utf8_bin NOT NULL,
  `Adresse mail` mediumtext COLLATE utf8_bin NOT NULL,
  `date_de_naissance` date NOT NULL,
  `mot de passe` mediumtext COLLATE utf8_bin NOT NULL,
  `Messages` mediumtext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`ID`, `photo`, `nom`, `prénom`, `Adresse mail`, `date_de_naissance`, `mot de passe`, `Messages`) VALUES
(1, '', 'Ferry', 'Julien', 'julienferry@orange.fr', '1999-02-15', 'admin#1', '');

-- --------------------------------------------------------

--
-- Structure de la table `capteur`
--

DROP TABLE IF EXISTS `capteur`;
CREATE TABLE IF NOT EXISTS `capteur` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `unité de mesure` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `photo` mediumtext COLLATE utf8_bin NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `prénom` varchar(255) COLLATE utf8_bin NOT NULL,
  `Adresse mail` varchar(255) COLLATE utf8_bin NOT NULL,
  `date_de_naissance` date NOT NULL,
  `mot_de_passe` mediumtext COLLATE utf8_bin NOT NULL,
  `message` mediumtext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`ID`, `photo`, `nom`, `prénom`, `Adresse mail`, `date_de_naissance`, `mot_de_passe`, `message`) VALUES
(19, 'vide', 'Admin', 'Test', 'datapta.officiel@gmail.com', '0001-01-01', 'youdied', 'vide'),
(18, 'vide', 'Picsou', 'Balthazar', 'mcDuck@gmail.com', '1952-12-21', 'jaimelargent', 'vide'),
(16, 'vide', 'Ferry', 'Julien', 'julien.ferry@isep.fr', '1999-02-15', 'Salut', 'vide');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Heure` timestamp NOT NULL,
  `Expéditeur` varchar(255) COLLATE utf8_bin NOT NULL,
  `Destinataire` varchar(255) COLLATE utf8_bin NOT NULL,
  `Objet` text COLLATE utf8_bin NOT NULL,
  `Contenu` mediumtext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `resultat`
--

DROP TABLE IF EXISTS `resultat`;
CREATE TABLE IF NOT EXISTS `resultat` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Id client` int(11) NOT NULL,
  `Date` date NOT NULL,
  `heure` timestamp NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `Capteurs` char(255) COLLATE utf8_bin NOT NULL,
  `résultat` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(256) COLLATE utf8_bin NOT NULL,
  `id capteurs` char(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
