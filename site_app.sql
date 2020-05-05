-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 05 mai 2020 à 13:19
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

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
  `mot_de_passe` mediumtext COLLATE utf8_bin NOT NULL,
  `salt` varbinary(255) NOT NULL,
  `iv` varbinary(255) NOT NULL,
  `message` mediumtext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`ID`, `photo`, `nom`, `prénom`, `Adresse mail`, `date_de_naissance`, `mot_de_passe`, `salt`, `iv`, `message`) VALUES
(7, 'vide', 'Clavijo', 'Matthis', 'matthis.clavijo@gmail.com', '1999-06-17', '0+PUewVLOsW19BSxweMVcA==', 0xe94b306ac4eeca24307501d6f6946835, 0x531b4997f3c12c553ad8134fbcf9b8fc, 'vide'),
(9, 'vide', 'De la Bande', 'Loulou', 'loulou@picsou.com', '2020-05-05', 'n4uFQ9OPlqhhjN0i84sulg==', 0x877c9b3184498085dda49f678787d59a, 0x6879ceb94b80c30c6ff098f03efb3699, 'vide');

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `capteur`
--

INSERT INTO `capteur` (`Id`, `Nom`, `unité de mesure`) VALUES
(3, 'Température', '°C'),
(5, 'Micro', 'Hz');

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
  `salt` varbinary(255) NOT NULL,
  `iv` varbinary(255) NOT NULL,
  `message` mediumtext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Question` text COLLATE utf8_bin NOT NULL,
  `Réponse` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`ID`, `Question`, `Réponse`) VALUES
(1, 'Qu\'es ce donc ?', 'Ceci est un test.');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Heure` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
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
  `heure` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `test`
--

INSERT INTO `test` (`id`, `Nom`, `id capteurs`) VALUES
(5, 'Test n°2', '1,2,3'),
(4, 'Test n°1', '3');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
