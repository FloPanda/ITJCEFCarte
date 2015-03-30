-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 29 Mars 2015 à 21:26
-- Version du serveur :  5.6.21
-- Version de PHP :  5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `jcef-bdd`
--

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`user_name`, `user_surname`, `user_is_admin`, `user_birth`, `user_sex`, `user_nation`, `user_user_type`, `user_member_type`, `user_jcef_function`, `user_status`, `user_company`, `user_company_title`, `user_cell_phone`, `user_land_phone`, `user_subscription_date`, `user_renew_date`, `user_last_amount`, `user_picture`, `user_uuid`, `user_pk`, `user_password`, `user_email_jcef`, `user_email_company`, `user_email_perso`, `user_weixin`, `user_skype`, `user_qr_code_url`, `user_address`, `user_comment`) VALUES
('hoeffel', 'david', 1, '1992-08-19', 'm', 'france', 0, 1, 'tresorier', 'actif', 'utseus', 'ingenieur', '18221416074', '33388476941', '2015-03-12', '2016-03-12', 2, 'urlimage', 'UUID()', 2, 'azerty1234', 'a@a.a', 'b@b.b', 'c@c.c', 'w.w', 's.s', 'userqrcode', '12 adresse de rue', 'commentaire');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
