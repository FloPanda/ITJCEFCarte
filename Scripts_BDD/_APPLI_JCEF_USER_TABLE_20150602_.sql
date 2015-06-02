-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 02 Juin 2015 à 14:01
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
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_pk` int(11) NOT NULL AUTO_INCREMENT,
  `user_uuid` varchar(36) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_surname` varchar(20) NOT NULL,
  `user_is_admin` tinyint(1) NOT NULL,
  `user_password` varchar(15) NOT NULL,
  `user_picture` varchar(100) NOT NULL,
  `user_birth` date NOT NULL,
  `user_sex` char(1) NOT NULL,
  `user_nation` varchar(8) NOT NULL,
  `user_user_type` tinyint(1) NOT NULL,
  `user_member_type` tinyint(1) NOT NULL,
  `user_jcef_function` varchar(40) NOT NULL,
  `user_status` varchar(30) NOT NULL,
  `user_company` varchar(40) NOT NULL,
  `user_company_title` varchar(40) NOT NULL,
  `user_cell_phone` varchar(15) NOT NULL,
  `user_land_phone` varchar(15) NOT NULL,
  `user_subscription_date` date NOT NULL,
  `user_renew_date` date NOT NULL,
  `user_last_amount` int(6) NOT NULL DEFAULT '0',
  `user_email_jcef` varchar(50) NOT NULL,
  `user_email_company` varchar(50) NOT NULL,
  `user_email_perso` varchar(50) NOT NULL,
  `user_weixin` varchar(30) NOT NULL,
  `user_skype` varchar(30) NOT NULL,
  `user_qr_code_url` varchar(200) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `user_comment` varchar(300) NOT NULL,
  PRIMARY KEY (`user_pk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`user_pk`, `user_uuid`, `user_name`, `user_surname`, `user_is_admin`, `user_password`, `user_picture`, `user_birth`, `user_sex`, `user_nation`, `user_user_type`, `user_member_type`, `user_jcef_function`, `user_status`, `user_company`, `user_company_title`, `user_cell_phone`, `user_land_phone`, `user_subscription_date`, `user_renew_date`, `user_last_amount`, `user_email_jcef`, `user_email_company`, `user_email_perso`, `user_weixin`, `user_skype`, `user_qr_code_url`, `user_address`, `user_comment`) VALUES
(1, '1006307158', 'GONZALES', 'Gwen', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'f', 'French', 1, 0, 'Directrice de commission', 'actif', '', '', '', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1006307158', '', ''),
(2, '1006870297', 'ALCORANI', 'Thibault', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'm', 'French', 1, 0, '', 'actif', '', '', '', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1006870297', '', ''),
(3, '1009385652', 'DELOLME', 'Maxime', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'm', 'French', 1, 0, '', 'actif', '', '', '', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1009385652', '', ''),
(4, '1010023876', 'YE', 'David', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'm', 'Chinese', 1, 0, '', 'actif', '', '', '', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1010023876', '', ''),
(5, '1027518732', 'GUYOT-JEANNIN', 'Marie', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'f', 'French', 1, 0, 'Directrice de commission', 'actif', '', '', '', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1027518732', '', ''),
(6, '1028332155', 'BOISSIEUX', 'Cynthia', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'f', 'French', 1, 0, '', 'actif', '', '', '', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1028332155', '', ''),
(7, '1045626784', 'KANTE', 'Agnès', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'f', 'French', 1, 0, 'Directrice de commission', 'actif', '', '', '', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1045626784', '', ''),
(8, '1067952122', 'AUDOUIN', 'Emilie', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'f', 'French', 1, 0, '', 'actif', '', '', '', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1067952122', '', ''),
(9, '1068415148', 'KLEIN', 'Camille', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'f', 'French', 1, 0, '', 'actif', '', '', '', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1068415148', '', ''),
(10, '1073095460', 'PAPIN', 'Amelie', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'f', 'French', 1, 0, '', 'actif', '', '', '', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1073095460', '', ''),
(11, '1074321852', 'DUPREZ', 'François-Xavier', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'm', 'French', 1, 0, '', 'actif', '', '', '', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1074321852', '', ''),
(12, '1086297944', 'MUSSIER', 'Aurelie', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'f', 'French', 1, 0, 'Directrice de commission', 'actif', '', '', '', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1086297944', '', ''),
(13, '1087211481', 'GASPARD', 'David', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'm', 'French', 0, 1, 'Past-president', 'actif', 'Suez Environnement', '', '+86 139 16 37 5', '', '0000-00-00', '0000-00-00', 0, 'past-president@jcef-shanghai.com', '', 'david.gaspard@gadz.org', '', 'gao.da.wei1 ', 'https://appli.jcef-shanghai/user_profil.php?user=1087211481', '', ''),
(14, '1091028313', 'BROSSE', 'Audrey', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'f', 'French', 1, 0, '', 'actif', '', '', '', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1091028313', '', ''),
(15, '1098136380', 'CHAVANT', 'Mathieu ', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'm', 'French', 1, 0, '', 'actif', '', '', '', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1098136380', '', ''),
(16, '1117320654', 'YUAN', 'Tingting', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'f', 'Chinese', 1, 0, '', 'actif', '', '', '', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1117320654', '', ''),
(17, '1125217116', 'DE ROULHAC', 'Anne', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'f', 'French', 1, 0, '', 'actif', '', '', '', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1125217116', '', ''),
(18, '1135616419', 'JASS', 'Martina', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'f', 'French', 1, 0, '', 'actif', '', '', '', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1135616419', '', ''),
(19, '1145865551', 'BERTUCCO', 'Chiara', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'f', 'Italian', 1, 0, '', 'actif', '', '', '', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1145865551', '', ''),
(20, '1150483292', 'DEVAUTON', 'Adrien', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'm', 'French', 1, 0, 'Directeur de commission', 'actif', '', '', '', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1150483292', '', ''),
(21, '1176199980', 'Marty', 'Paul', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'm', 'French', 0, 1, 'VP Developpement', 'actif', 'Fiducia', '', '8 615 901 837 6', '', '0000-00-00', '0000-00-00', 0, 'developpement@jcef-shanghai.com', '', 'paul.b.marty@gmail.com', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1176199980', '', ''),
(22, '1180029326', 'Hannouche', 'Isabelle', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'f', 'Senegale', 0, 1, 'VP Developpement', 'actif', 'Wegoo2China', '', '8 615 026 402 8', '', '0000-00-00', '0000-00-00', 0, 'developpement@jcef-shanghai.com', '', 'ih@wegoo2china.com', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1180029326', '', ''),
(23, '1180166982', 'Ambler', 'Sophie', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'f', 'French', 0, 1, 'VP Communication', 'actif', 'Travel Stone', '', '8 618 221 020 1', '', '0000-00-00', '0000-00-00', 0, 'communication@jcef-shanghai.com', '', 'soso.ambler@hotmail.fr', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1180166982', '', ''),
(24, '1185560603', '', 'Joel', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'm', 'French', 1, 0, 'Directeur de commission', 'actif', '', '', '', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1185560603', '', ''),
(25, '1210501410', 'GUIGUI', 'Julia', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'f', 'French', 1, 0, 'Directrice de commission', 'actif', '', '', '', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1210501410', '', ''),
(26, '1210639067', 'DOMINGUEZ', 'Sara', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'f', 'Mexican', 1, 0, '', 'actif', '', '', '', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1210639067', '', ''),
(27, '1218460443', 'CHAVERONDIER', 'Sarah', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'f', 'French', 1, 0, '', 'actif', '', '', '', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1218460443', '', ''),
(28, '1223941664', 'Rigaud', 'Jeremy', 1, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'm', 'French', 0, 1, 'President', 'actif', 'Wishu', '', '8 615 026 528 7', '', '0000-00-00', '0000-00-00', 0, 'president@jcef-shanghai.com', '', 'jeremy@copulse.com', '', 'jeremy.rigaud', 'https://appli.jcef-shanghai/user_profil.php?user=1223941664', '', ''),
(29, '1229535513', 'Wassermann', 'Ludovic', 1, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'm', 'French', 0, 1, 'Tresorier', 'actif', 'Siveco', '', '8 618 501 709 4', '', '0000-00-00', '0000-00-00', 0, 'tresorier@jcef-shanghai.com', '', 'ludovic.wassermann@gmail.com', '', 'ludovic.wasserm', 'https://appli.jcef-shanghai/user_profil.php?user=1229535513', '', ''),
(30, '1231975783', 'LEHUGIER', 'Gregoire', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'm', 'French', 1, 0, 'Directeur de commission', 'actif', '', '', '', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1231975783', '', ''),
(31, '1248594645', 'KODRATOFF', 'Yves', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'm', 'French', 1, 0, '', 'actif', '', '', '', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1248594645', '', ''),
(32, '1257216931', 'MANGEREST', 'Amélie', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'f', 'French', 1, 0, '', 'actif', '', '', '', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1257216931', '', ''),
(33, '1274161162', 'Censier', 'Olivier', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'm', 'French', 0, 1, 'Secretaire General', 'actif', '', '', '8 618 202 124 4', '', '0000-00-00', '0000-00-00', 0, 'secretaire-general@jcef-shangh', '', 'olivier.censier@gmail.com', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1274161162', '', ''),
(34, '1282545678', 'ZHENG', 'Lucia', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'f', 'Chinese', 1, 0, '', 'actif', '', '', '', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1282545678', '', ''),
(35, '1283096303', 'RIGART', 'Aurelien', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'm', 'French', 1, 0, '', 'actif', '', '', '', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1283096303', '', ''),
(36, '1286762964', 'Lam', 'Laurence', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'f', 'French', 0, 1, 'VP Comunication', 'actif', 'Epermarket', '', '8 618 516 614 9', '', '0000-00-00', '0000-00-00', 0, 'communication@jcef-shanghai.co', '', 'laurence@epermarket.com', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1286762964', ',', ''),
(37, '1289979114', 'DANTONA', 'Emeline', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'f', 'French', 1, 0, '', 'actif', '', '', '', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1289979114', '', ''),
(38, '1310902862', 'VERCELLOTTI', 'Andrea', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'm', 'Italian', 1, 0, 'Directeur de commission', 'actif', '', '', '', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1310902862', '', ''),
(39, '1345129207', 'FARIGOULES', 'Noémie', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'f', 'French', 1, 0, '', 'actif', '', '', '', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1345129207', '', ''),
(40, '1366578552', 'DE BRUGUIERE', 'Guilhem', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'm', 'French', 1, 0, '', 'actif', '', '', '', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1366578552', '', ''),
(41, '1370207671', 'FRANCINE', 'Jade', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'f', 'French', 1, 0, '', 'actif', '', '', '', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1370207671', '', ''),
(42, '1372410170', 'RUE DE BERNADAC', 'Guillaume', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'm', 'French', 1, 0, '', 'actif', '', '', '', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1372410170', '', ''),
(43, '1378379445', 'PIRAT', 'Nejma', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'f', 'French', 1, 0, '', 'actif', '', '', '', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1378379445', '', ''),
(44, '1389279316', 'JI', 'Napoléon', 0, 'nodefini', '../Ressources/Images/nopic.jpg', '0000-00-00', 'm', 'French', 1, 0, '', 'actif', '', '', '', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', 'https://appli.jcef-shanghai/user_profil.php?user=1389279316', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
