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
ALTER DATABASE `jcef-bdd` charset=utf8;
-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
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
  `user_address` varchar(100) NOT NULL,
  `user_comment` varchar(300) NOT NULL,
  PRIMARY KEY (`user_pk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`user_name`, `user_surname`, `user_is_admin`, `user_birth`, `user_sex`, `user_nation`, `user_user_type`, `user_member_type`, `user_jcef_function`, `user_status`, `user_company`, `user_company_title`, `user_cell_phone`, `user_land_phone`, `user_subscription_date`, `user_renew_date`, `user_last_amount`, `user_picture`, `user_uuid`, `user_pk`, `user_password`, `user_email_jcef`, `user_email_company`, `user_email_perso`, `user_weixin`, `user_skype`, `user_qr_code_url`, `user_address`, `user_comment`) VALUES
('Hoeffel', 'David', 1, '1992-08-19', 'm', 'france', 0, 1, 'tresorier', 'actif', 'utseus', 'ingenieur', '18221416074', '33388476941', '2015-03-12', '2016-03-12', 2, '../Ressources/Images/profile1.jpg', '0123456789', 2, 'azerty1234', 'a@a.a', 'b@b.b', 'c@c.c', 'w.w', 's.s', 'https://appli.jcef-shanghai/user_profil.php?user=0123456789', '12 adresse de rue', 'commentaire'),
('Wassermann', 'Ludovic', 1, '1989-06-18', 'm', 'French', 0, 1, 'Trésorier', 'actif', 'Siveco', '', '8 618 501 709 4', '-', '2015-01-16', '2016-01-16', 0, '../Ressources/Images/nopic.jpg', '1229535513', 39, 'nodefini', 'tresorier@jcef-shanghai.com', '', 'ludovic.wassermann@gmail.com', 'lwassermann', 'ludovic.wasserm', 'https://appli.jcef-shanghai/user_profil.php?user=1229535513', '', ''),
('Rigaud', 'Jeremy', 0, '0000-00-00', 'm', 'French', 0, 1, 'Président', 'actif', 'Wishu', '', '8 615 026 528 7', '-', '2015-01-16', '2016-01-16', 0, '../Ressources/Images/nopic.jpg', '1223941664', 40, 'nodefini', 'president@jcef-shanghai.com', '', 'jeremy@copulse.com', 'jaygo12', 'jeremy.rigaud', 'https://appli.jcef-shanghai/user_profil.php?user=1223941664', '', ''),
('Censier', 'Olivier', 0, '0000-00-00', 'm', 'French', 0, 1, 'Secrétaire Génér', 'actif', '-', '', '8 618 202 124 4', '-', '2014-10-21', '2015-10-21', 0, '../Ressources/Images/nopic.jpg', '1274161162', 41, 'nodefini', 'secretaire-general@jcef-shangh', '', 'olivier.censier@gmail.com', '-', '-', 'https://appli.jcef-shanghai/user_profil.php?user=1274161162', '', ''),
('Ambler', 'Sophie', 0, '0000-00-00', 'f', 'French', 0, 1, 'VP Communication', 'actif', 'Travel Stone', '', '8 618 221 020 1', '-', '2015-01-16', '2016-01-16', 0, '../Ressources/Images/nopic.jpg', '1180166982', 42, 'nodefini', 'communication@jcef-shanghai.co', '', 'soso.ambler@hotmail.fr', '-', '-', 'https://appli.jcef-shanghai/user_profil.php?user=1180166982', '', ''),
('Hannouche', 'Isabelle', 0, '0000-00-00', 'f', 'Senegale', 0, 1, 'VP Développement', 'actif', 'Wegoo2China', '', '8 615 026 402 8', '-', '2015-01-16', '2016-01-16', 0, '../Ressources/Images/nopic.jpg', '1180029326', 43, 'nodefini', 'developpement@jcef-shanghai.co', '', 'ih@wegoo2china.com', '-', '-', 'https://appli.jcef-shanghai/user_profil.php?user=1180029326', '', ''),
('Lam', 'Laurence', 0, '0000-00-00', 'f', 'French', 0, 1, 'VP Comunication', 'actif', 'Epermarket', '', '8 618 516 614 9', '-', '2015-01-16', '2016-01-16', 0, '../Ressources/Images/nopic.jpg', '1286762964', 44, 'nodefini', 'communication@jcef-shanghai.co', '', 'laurence@epermarket.com', '-', '-', 'https://appli.jcef-shanghai/user_profil.php?user=1286762964', '', ''),
('Marty', 'Paul', 0, '0000-00-00', 'm', 'French', 0, 1, 'VP Développement', 'actif', 'Fiducia', '', '8 615 901 837 6', '-', '2015-01-16', '2016-01-16', 0, '../Ressources/Images/nopic.jpg', '1176199980', 45, 'nodefini', 'developpement@jcef-shanghai.co', '', 'paul.b.marty@gmail.com', '-', '-', 'https://appli.jcef-shanghai/user_profil.php?user=1176199980', '', ''),
('GASPARD', 'David', 0, '1988-05-31', 'm', 'French', 0, 1, 'Past-président', 'actif', 'Suez Environneme', '', '+86 139 16 37 5', '-', '2010-10-01', '2015-05-31', 0, '../Ressources/Images/nopic.jpg', '1087211481', 46, 'nodefini', 'past-president@jcef-shanghai.c', '', 'david.gaspard@gadz.org', 'dawei', 'gao.da.wei1 ', 'https://appli.jcef-shanghai/user_profil.php?user=1087211481', '', '');


-- --------------------------------------------------------


--
-- Structure de la table `commission`
--

CREATE TABLE IF NOT EXISTS `commission` (
  `com_pk` int(11) NOT NULL AUTO_INCREMENT,
  `com_name` varchar(50) NOT NULL,
  `com_description` text NOT NULL,
  `com_picture` varchar(100) NOT NULL,
  `com_is_open` tinyint(1) NOT NULL,
  PRIMARY KEY (`com_pk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `commission`
--

INSERT INTO `commission` (`com_pk`, `com_name`, `com_description`, `com_picture`) VALUES
(1, 'Bureau 2015', 'Commission regroupant les membres de la JCEF de Shanghai pour l''année 2015.', '../Ressources/Images/nopic_default.jpg'),
(2, 'Shanghai Parties', 'Cette commission est chargée d''organiser des fêtes en centre-ville, spécialement dédiées aux membres de la JCEF! Au programme jeux, rencontres, tapas...tout pour s''amuser hé hé!', '../Ressources/Images/nopic_default.jpg');


-- --------------------------------------------------------

--
-- Structure de la table `commission_member`
--

DROP TABLE IF EXISTS `commission_member`;
CREATE TABLE IF NOT EXISTS `commission_member` (
  `comm_pk` int(11) NOT NULL AUTO_INCREMENT,
  `comm_user_pk` int(11) NOT NULL,
  `comm_com_pk` int(11) NOT NULL,
  `comm_debut`  Date,
  `comm_fin` Date,
  PRIMARY KEY (`comm_pk`),
  FOREIGN KEY (comm_user_pk) REFERENCES user (user_pk) ON DELETE CASCADE,
  FOREIGN KEY (comm_com_pk) REFERENCES commission (com_pk) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`ev_charged_member`) REFERENCES `user` (`user_pk`) ON DELETE CASCADE ,
  ADD CONSTRAINT `event_ibfk_2` FOREIGN KEY (`ev_com_linked`) REFERENCES `commission` (`com_pk`) ON DELETE CASCADE ;

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
  FOREIGN KEY (notif_reader) REFERENCES user (user_pk) ON DELETE CASCADE
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
  FOREIGN KEY (periode_user) REFERENCES user (user_pk) ON DELETE CASCADE
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
  FOREIGN KEY (part_user_pk) REFERENCES user (user_pk) ON DELETE CASCADE,
  FOREIGN KEY (part_ev_pk) REFERENCES event (ev_pk) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
