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
-- Structure de la table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `ev_pk` int(11) NOT NULL AUTO_INCREMENT,
  `ev_name` varchar(50) NOT NULL,
  `ev_address` varchar(100) NOT NULL,
  `ev_date` date NOT NULL,
  `ev_description` text NOT NULL,
  `ev_picture` varchar(100) NOT NULL,
  `ev_max_participants` smallint(11) NOT NULL,
  `ev_participants` smallint(11) NOT NULL,
  `ev_price` smallint(11) NOT NULL,
  `ev_nb_subscribed` smallint(11) NOT NULL,
  `ev_charged_member` int(11) DEFAULT NULL,
  `ev_com_linked` int(11) DEFAULT NULL,
  PRIMARY KEY (`ev_pk`),
  KEY `ev_charged_member` (`ev_charged_member`),
  KEY `ev_com_linked` (`ev_com_linked`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `event`
--

INSERT INTO `event` (`ev_pk`, `ev_name`, `ev_address`, `ev_date`, `ev_description`, `ev_picture`, `ev_max_participants`, `ev_participants`, `ev_price`, `ev_nb_subscribed`, `ev_charged_member`, `ev_com_linked`) VALUES
(1, 'Balade en Forêt', '333, rue des piétons, District X, Shanghai', '2015-07-03', 'Petite balade en périphérie de Shanghai durant une demi-journée de 13h à 18h. Parcours balisé et circuit fermé avec goûter ha ha.', '../Ressources/Images/nopic_default.jpg', 50, 0, 76, 8, 39, 1),
(2, 'Jean', 'zefezef', '2015-05-06', 'guguguygyg', '../Ressources/Images/nopic_default.jpg', 33, 0, 33, 0, NULL, NULL);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`ev_charged_member`) REFERENCES `user` (`user_pk`),
  ADD CONSTRAINT `event_ibfk_2` FOREIGN KEY (`ev_com_linked`) REFERENCES `commission` (`com_pk`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
