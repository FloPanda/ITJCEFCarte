-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 23 Mars 2015 à 13:25
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
CREATE DATABASE IF NOT EXISTS `jcef-bdd` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `jcef-bdd`;

-- --------------------------------------------------------

--
-- Structure de la table `commission`
--

DROP TABLE IF EXISTS `commission`;
CREATE TABLE IF NOT EXISTS `commission` (
  `com_pk` int(11) NOT NULL AUTO_INCREMENT,
  `com_uuid` varchar(36) NOT NULL DEFAULT 'GUUID()',
  `com_name` varchar(50) NOT NULL,
  `com_description` text NOT NULL,
  `com_picture` varchar(100) NOT NULL,
  PRIMARY KEY (`com_pk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `commission_member`
--

DROP TABLE IF EXISTS `commission_member`;
CREATE TABLE IF NOT EXISTS `commission_member` (
  `com_uuid` varchar(36) NOT NULL,
  `user_uuid` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `ev_uuid` varchar(36) NOT NULL DEFAULT 'UUID()',
  `com_uuid` varchar(36) NOT NULL,
  `ev_name` varchar(50) NOT NULL,
  `ev_date` date NOT NULL,
  `ev_description` text NOT NULL,
  `ev_picture` varchar(100) NOT NULL,
  `ev_max_participants` int(11) NOT NULL,
  `ev_nb_subscribed` int(11) NOT NULL,
  `ev_pk` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ev_pk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `notif_pk` int(11) NOT NULL AUTO_INCREMENT,
  `notif_guuid` varchar(36) NOT NULL DEFAULT 'UUID()',
  `notif_message` text NOT NULL,
  `notif_date` date NOT NULL,
  `notif_read` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`notif_pk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `participant`
--

DROP TABLE IF EXISTS `participant`;
CREATE TABLE IF NOT EXISTS `participant` (
  `part_pk` int(11) NOT NULL AUTO_INCREMENT,
  `part_guuid` varchar(36) NOT NULL DEFAULT 'UUID()',
  `user_guuid` varchar(36) NOT NULL,
  `ev_guuid` varchar(36) NOT NULL,
  `part_present` tinyint(1) NOT NULL,
  `part_subscribed` tinyint(1) NOT NULL,
  PRIMARY KEY (`part_pk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_name` varchar(20) NOT NULL,
  `user_surname` varchar(20) NOT NULL,
  `user_is_admin` tinyint(1) NOT NULL,
  `user_is_member` tinyint(1) NOT NULL,
  `user_subscription_date` date NOT NULL,
  `user_renew_date` date NOT NULL,
  `user_access_app` tinyint(1) NOT NULL,
  `user_picture` varchar(100) NOT NULL,
  `user_uuid` varchar(36) NOT NULL DEFAULT 'UUID()',
  `user_pk` int(11) NOT NULL AUTO_INCREMENT,
  `user_password` varchar(15) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_is_comm_pres` tinyint(1) NOT NULL,
  PRIMARY KEY (`user_pk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`user_name`, `user_surname`, `user_is_admin`, `user_is_member`, `user_subscription_date`, `user_renew_date`, `user_access_app`, `user_picture`, `user_uuid`, `user_pk`, `user_password`, `user_email`, `user_is_comm_pres`) VALUES
('Hoeffel', 'David', 1, 1, '2015-03-23', '2016-03-23', 1, '', 'UUID()', 1, '', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
