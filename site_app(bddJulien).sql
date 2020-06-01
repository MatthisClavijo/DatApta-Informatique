-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 01 juin 2020 à 15:22
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
  `mot_de_passe` mediumtext COLLATE utf8_bin NOT NULL,
  `salt` varbinary(255) NOT NULL,
  `iv` varbinary(255) NOT NULL,
  `Messages` mediumtext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`ID`, `photo`, `nom`, `prénom`, `Adresse mail`, `date_de_naissance`, `mot_de_passe`, `salt`, `iv`, `Messages`) VALUES
(7, 'vide', 'Ferry', 'Julien', 'julienferry@orange.fr', '1999-02-15', '/iLtYLiZBqaIWuVxgF43JQ==', 0xc4f91c1f98fff0732384c85d8461a3a5, 0x0fe27e159388ae447412ae0626352d97, 'vide'),
(9, 'vide', 'Picsou', 'Balthazar', 'mcDuck@gmail.com', '1952-12-21', 'CKYrdqaFrzdxOvn8zte9tQ==', 0x3699ee47f1b1888b54d07639c7f59db3, 0x7d6e366dcd593f94ea1a3395c853cecf, 'vide');

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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `capteur`
--

INSERT INTO `capteur` (`Id`, `Nom`, `unité de mesure`) VALUES
(3, 'Température', '°C'),
(5, 'Micro', 'Hz'),
(11, 'Fréquence cardiaque ', 'bpm');

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
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`ID`, `photo`, `nom`, `prénom`, `Adresse mail`, `date_de_naissance`, `mot_de_passe`, `salt`, `iv`, `message`) VALUES
(43, 'vide', 'Duck', 'Donald', 'dd@gmail.com', '1632-12-02', 'kQmkAjUpCJEc0asxqL6Dgw==', 0x7fd273d6f16a9642eb64a374c74325a6, 0xf3ad68b966fa533d2ea078aa3a9b4d19, 'vide'),
(44, 'vide', 'Bonheur', 'Gontran', 'gb@gmail.com', '1948-01-01', 'RwJxda3kaCVcIwuTl+Sqjw==', 0x8ebcc0bf745da9544e3bf4010542296a, 0x7f3b6de1cb17326633e80dfe369a8736, 'vide'),
(45, 'vide', 'Duck', 'Riri', 'riri@gmail.com', '0120-05-14', 'foxPdjMK9kE0HyeqvK+ucQ==', 0x6c5fdf8dfc1bb438208fe7f74102756e, 0x72a3404a78e75881acaf3907918c4e07, 'vide'),
(46, 'vide', 'De Riv', 'Geralt', 'ge@kaer.rv', '1100-05-02', 'ZXcnt6Yhkz7vxqbd3MyRrQ==', 0x5122403c9174ba325c87601043d7fc67, 0xcf50d2e22861f3d994a5a9e7302307a4, 'vide');

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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`ID`, `Question`, `Réponse`) VALUES
(4, 'Comment se connecter ?', 'Il y a un bouton en haut à droite !'),
(5, 'Comment sont stocké les mots de passe ?', 'Les mots de passe sont stockés en crypter dans notre base de donnée.');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Date_et_heure` timestamp NOT NULL,
  `Expéditeur` varchar(255) COLLATE utf8_bin NOT NULL,
  `Destinataire` varchar(255) COLLATE utf8_bin NOT NULL,
  `Contenu` mediumtext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`ID`, `Date_et_heure`, `Expéditeur`, `Destinataire`, `Contenu`) VALUES
(1, '2020-05-20 09:21:00', 'Picsou', 'Ferry', 'Salut !'),
(3, '2020-05-20 09:23:00', 'Ferry', 'Picsou', 'Oh ! Salut ! \r\n'),
(7, '2020-05-20 09:44:00', 'Duck', 'Picsou', 'Salut !'),
(9, '2020-05-21 14:51:00', 'Picsou', 'Ferry', 'Comment va ?'),
(11, '2023-05-20 02:34:24', 'Picsou', 'Ferry', 'Alors ?'),
(12, '2023-05-20 03:00:22', 'Picsou', 'Ferry', 'Tu me répond ?'),
(13, '2023-05-20 03:01:57', 'Picsou', 'Ferry', 'Allo ?'),
(14, '2023-05-20 03:02:54', 'Picsou', 'Ferry', 'Mais euuuh '),
(15, '2023-05-20 03:03:26', 'Picsou', 'Ferry', 'J\'ai plus d\'inspi'),
(16, '2023-05-20 03:03:51', 'Picsou', 'Ferry', 'Bug de ****'),
(17, '2023-05-20 03:07:41', 'Picsou', 'Ferry', 'Alors ?'),
(18, '2023-05-20 03:13:06', 'Picsou', 'Ferry', 'Tu vas marcher stp ?'),
(19, '2023-05-20 03:13:38', 'Picsou', 'Ferry', 'Tu vas marcher stp ?'),
(20, '2023-05-20 03:14:27', 'Picsou', 'Ferry', 'Tu vas marcher stp ?'),
(21, '2023-05-20 03:14:49', 'Picsou', 'Ferry', 'Tu vas marcher stp ?'),
(22, '2023-05-20 03:15:17', 'Picsou', 'Ferry', 'Tu vas marcher stp ?'),
(23, '2023-05-20 03:15:46', 'Picsou', 'Ferry', 'Tu vas marcher stp ?'),
(24, '2024-05-20 01:17:36', 'Ferry', 'Ferry', 'Salut mon pote !'),
(25, '2024-05-20 01:19:48', 'Ferry', 'Ferry', 'test'),
(26, '2024-05-20 01:20:16', 'Ferry', 'Picsou', 'test'),
(27, '2024-05-20 01:22:11', 'Ferry', 'Duck', 'Salut Donald ! Comme ça va ?'),
(28, '2024-05-20 02:01:43', 'Bonheur', 'Duck', 'Je t\'aime pas'),
(29, '2025-05-20 07:26:27', 'Picsou', 'Bonheur', 'Bonsoir'),
(30, '2025-05-20 07:27:03', 'Picsou', 'Duck', 'Bonjour.'),
(31, '2025-05-20 07:35:15', 'Picsou', 'Bonheur', 'Comment va ?'),
(32, '2025-05-20 07:35:39', 'Picsou', 'Duck', 'Comment ça va ?'),
(33, '2026-05-20 00:56:46', 'unkindle@firstflame.com', 'Administrateur', 'Je n\'arrive pas à me créer un compte.A chaque fois ma page plante.\r\nMerci d\'avance '),
(38, '2029-05-20 00:42:22', 'Picsou', 'Ferry', 'Alors ?'),
(35, '2026-05-20 01:08:27', 'Picsou', 'Administrateur', 'j\'ai perdu mon sou fétiche !'),
(37, '2026-05-20 01:32:46', 'Picsou', 'Administrateur', 'C\'est la faute de Miss Tick !');

-- --------------------------------------------------------

--
-- Structure de la table `resultat`
--

DROP TABLE IF EXISTS `resultat`;
CREATE TABLE IF NOT EXISTS `resultat` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Id client` int(11) NOT NULL,
  `Date_et_heure` timestamp NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `Capteurs` char(255) COLLATE utf8_bin NOT NULL,
  `résultat` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `resultat`
--

INSERT INTO `resultat` (`ID`, `Id client`, `Date_et_heure`, `nom`, `Capteurs`, `résultat`) VALUES
(1, 44, '2020-05-29 16:00:00', 'Test 1 ', 'Température', 38),
(3, 44, '2020-05-29 16:00:00', 'Test 1 ', 'Fréquence cardiaque', 60),
(5, 44, '2020-05-31 13:00:00', 'Test 2 ', 'Température', 40);

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
