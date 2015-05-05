-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 26 Mars 2015 à 07:59
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
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user` CASCADE ;
CREATE TABLE IF NOT EXISTS `user` (
  `user_name` varchar(20) NOT NULL,
  `user_surname` varchar(20) NOT NULL,
  `user_is_admin` tinyint(1) NOT NULL,
  `user_birth` date NOT NULL,
  `user_sex` char(1) NOT NULL,
  `user_nation` varchar(8) NOT NULL,
  `user_user_type` tinyint(1) NOT NULL,
  `user_member_type` tinyint(1) NOT NULL,
  `user_jcef_function` varchar(16) NOT NULL,
  `user_status` varchar(16) NOT NULL,
  `user_company` varchar(16) NOT NULL,
  `user_company_title` varchar(16) NOT NULL,
  `user_cell_phone` varchar(15) NOT NULL,
  `user_land_phone` varchar(15) NOT NULL,
  `user_subscription_date` date NOT NULL,
  `user_renew_date` date NOT NULL,
  `user_last_amount` int(6) NOT NULL DEFAULT '0',
  `user_picture` varchar(100) NOT NULL,
  `user_uuid` varchar(36) NOT NULL DEFAULT 'UUID()',
  `user_pk` int(11) NOT NULL AUTO_INCREMENT,
  `user_password` varchar(15) NOT NULL,
  `user_email_jcef` varchar(30) NOT NULL,
  `user_email_company` varchar(30) NOT NULL,
  `user_email_perso` varchar(30) NOT NULL,
  `user_weixin` varchar(15) NOT NULL,
  `user_skype` varchar(15) NOT NULL,
  `user_qr_code_url` varchar(200) NOT NULL,
  `user_address` varchar(100) NOT NULL, /* dav j'ai pas mis de champ composé vu qu'on est tous sur shanghai */
  `user_comment` varchar(300) NOT NULL, 
  PRIMARY KEY (`user_pk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------


--
-- Structure de la table `commission`
--

DROP TABLE IF EXISTS `commission` CASCADE ;
CREATE TABLE IF NOT EXISTS `commission` (
  `com_pk` int(11) NOT NULL AUTO_INCREMENT,
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
  `comm_pk` int(11) NOT NULL AUTO_INCREMENT,
  `comm_user_uuid` int(11) NOT NULL,
  `comm_debut`  Date,
  `comm_fin` Date,
  PRIMARY KEY (`comm_pk`),
  FOREIGN KEY (comm_user_uuid) REFERENCES user (user_pk)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `ev_pk` int(11) NOT NULL AUTO_INCREMENT,
  `ev_name` varchar(50) NOT NULL,
  `ev_address` varchar(100) NOT NULL,
  `ev_date` date NOT NULL,
  `ev_description` text NOT NULL,
  `ev_picture` varchar(100) NOT NULL,
  `ev_max_participants` SMALLINT(11) NOT NULL,
  `ev_participants` SMALLINT(11) NOT NULL,
  `ev_price` SMALLINT(11) NOT NULL,
  `ev_nb_subscribed` SMALLINT(11) NOT NULL,
  `ev_charged_member` int(11),
  `ev_com_linked` int(11),
  PRIMARY KEY (`ev_pk`),
  FOREIGN KEY (ev_charged_member) REFERENCES user (user_pk),
  FOREIGN KEY (ev_com_linked) REFERENCES commission (com_pk)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `notif_pk` int(11) NOT NULL AUTO_INCREMENT,
  `notif_message` text NOT NULL,
  `notif_date` date NOT NULL,
  `notif_read` tinyint(1) NOT NULL DEFAULT '0',
  `notif_reader` int(11),
  PRIMARY KEY (`notif_pk`),
  FOREIGN KEY (notif_reader) REFERENCES user (user_pk)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `periode`
--

DROP TABLE IF EXISTS `periode`;
CREATE TABLE IF NOT EXISTS `periode` (
  `periode_id` int(11) NOT NULL AUTO_INCREMENT,
  `periode_user`  int(11),
  `periode_debut`  Date,
  `periode_fin` Date,
  PRIMARY KEY (`periode_id`),
  FOREIGN KEY (periode_user) REFERENCES user (user_pk)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `participant`
--

DROP TABLE IF EXISTS `participant`;
CREATE TABLE IF NOT EXISTS `participant` (
  `part_pk` int(11) NOT NULL AUTO_INCREMENT,
  `part_user_pk` int(11) NOT NULL,
  `part_ev_pk` int(11) NOT NULL,
  `part_present` tinyint(1) NOT NULL,
  `part_subscribed` tinyint(1) NOT NULL,
  PRIMARY KEY (`part_pk`),
  FOREIGN KEY (part_user_pk) REFERENCES user (user_pk),
  FOREIGN KEY (part_ev_pk) REFERENCES event (ev_pk)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;