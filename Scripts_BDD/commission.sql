-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 12 Mai 2015 à 11:17
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `jcef-bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `commission`
--

CREATE TABLE IF NOT EXISTS `commission` (
  `com_pk` int(11) NOT NULL AUTO_INCREMENT,
  `com_name` varchar(50) NOT NULL,
  `com_description` text NOT NULL,
  `com_picture` varchar(100) NOT NULL,
  PRIMARY KEY (`com_pk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `commission`
--

INSERT INTO `commission` (`com_pk`, `com_name`, `com_description`, `com_picture`) VALUES
(1, 'Bureau 2015', 'Commission regroupant les membres de la JCEF de Shanghai pour l''année 2015.', '../Ressources/Images/nopic_default.jpg'),
(2, 'Shanghai Parties', 'Cette commission est chargée d''organiser des fêtes en centre-ville, spécialement dédiées aux membres de la JCEF! Au programme jeux, rencontres, tapas...tout pour s''amuser hé hé!', '../Ressources/Images/nopic_default.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
