-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Mer 11 Septembre 2013 à 16:49
-- Version du serveur: 5.5.8
-- Version de PHP: 5.3.5

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `olympus`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(45) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `contenu` text,
  `categorie_article_id` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_23A0E66EC5D4C30` (`categorie_article_id`),
  KEY `IDX_23A0E66FB88E14F` (`utilisateur_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `date`, `contenu`, `categorie_article_id`, `utilisateur_id`) VALUES
(1, 'Lorem Ipsum 1', '2013-09-11 08:08:56', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam turpis dui, faucibus a mattis at, egestas in quam. Proin at turpis eget mi placerat mattis. Praesent vel lorem ut mi rhoncus consequat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur a tellus vel augue adipiscing tincidunt. Suspendisse eu leo turpis. Donec dictum, felis vel pretium interdum, ligula sem interdum libero, a pharetra odio justo sit amet nunc. Duis eu bibendum turpis. Vestibulum congue justo eros, vitae sollicitudin lectus adipiscing non. Mauris ac velit dignissim, mattis sapien at, tempus erat.\r\n\r\nInteger luctus luctus nisl, a blandit massa aliquam eget. In pretium condimentum nisl, quis tincidunt leo. Praesent cursus posuere faucibus. Vivamus quam magna, pharetra nec feugiat laoreet, consectetur quis nisl. Morbi volutpat sodales leo nec elementum. Duis risus ipsum, ullamcorper eget risus mattis, dignissim scelerisque dolor. Donec purus risus, lacinia egestas facilisis eget, ullamcorper quis urna. Sed vel velit eros. Suspendisse potenti. ', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `categoriearticle`
--

DROP TABLE IF EXISTS `categoriearticle`;
CREATE TABLE IF NOT EXISTS `categoriearticle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(45) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `categoriearticle`
--

INSERT INTO `categoriearticle` (`id`, `libelle`, `description`) VALUES
(1, 'Vie de la Team', 'Tous les articles concernant la vie de la Team'),
(2, 'ArmA 3', 'Tous les articles concernant ArmA 3');

-- --------------------------------------------------------

--
-- Structure de la table `categorieforum`
--

DROP TABLE IF EXISTS `categorieforum`;
CREATE TABLE IF NOT EXISTS `categorieforum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(45) DEFAULT NULL,
  `description` text,
  `ordre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `categorieforum`
--


-- --------------------------------------------------------

--
-- Structure de la table `disponibilite`
--

DROP TABLE IF EXISTS `disponibilite`;
CREATE TABLE IF NOT EXISTS `disponibilite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `disponibilite`
--


-- --------------------------------------------------------

--
-- Structure de la table `don`
--

DROP TABLE IF EXISTS `don`;
CREATE TABLE IF NOT EXISTS `don` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `montant` decimal(10,0) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `moyen_paiement_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F8F081D9FB88E14F` (`utilisateur_id`),
  KEY `IDX_F8F081D99C7E259C` (`moyen_paiement_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `don`
--

INSERT INTO `don` (`id`, `montant`, `date`, `utilisateur_id`, `moyen_paiement_id`) VALUES
(1, '10', '2013-09-03 00:00:00', 1, 1),
(2, '20', '2013-08-04 00:00:00', 1, 1),
(3, '30', '2013-09-05 00:00:00', 1, 2),
(4, '40', '2013-09-06 00:00:00', 1, 2),
(5, '50', '2013-09-07 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `etat`
--

DROP TABLE IF EXISTS `etat`;
CREATE TABLE IF NOT EXISTS `etat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `etat`
--


-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` int(11) DEFAULT NULL,
  `description` text,
  `date_debut` datetime DEFAULT NULL,
  `date_fin` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `evenement`
--


-- --------------------------------------------------------

--
-- Structure de la table `ext_log_entries`
--

DROP TABLE IF EXISTS `ext_log_entries`;
CREATE TABLE IF NOT EXISTS `ext_log_entries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `action` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `logged_at` datetime NOT NULL,
  `object_id` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `object_class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `version` int(11) NOT NULL,
  `data` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:array)',
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `log_class_lookup_idx` (`object_class`),
  KEY `log_date_lookup_idx` (`logged_at`),
  KEY `log_user_lookup_idx` (`username`),
  KEY `log_version_lookup_idx` (`object_id`,`object_class`,`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Contenu de la table `ext_log_entries`
--


-- --------------------------------------------------------

--
-- Structure de la table `ext_translations`
--

DROP TABLE IF EXISTS `ext_translations`;
CREATE TABLE IF NOT EXISTS `ext_translations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `locale` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `object_class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `field` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `foreign_key` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lookup_unique_idx` (`locale`,`object_class`,`field`,`foreign_key`),
  KEY `translations_lookup_idx` (`locale`,`object_class`,`foreign_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Contenu de la table `ext_translations`
--


-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(45) DEFAULT NULL,
  `description` text,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `formation`
--


-- --------------------------------------------------------

--
-- Structure de la table `forum`
--

DROP TABLE IF EXISTS `forum`;
CREATE TABLE IF NOT EXISTS `forum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(45) DEFAULT NULL,
  `description` text,
  `ordre` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `forum`
--


-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

DROP TABLE IF EXISTS `groupe`;
CREATE TABLE IF NOT EXISTS `groupe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(45) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `groupe`
--


-- --------------------------------------------------------

--
-- Structure de la table `kit`
--

DROP TABLE IF EXISTS `kit`;
CREATE TABLE IF NOT EXISTS `kit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(45) DEFAULT NULL,
  `description` text,
  `image` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `kit`
--


-- --------------------------------------------------------

--
-- Structure de la table `membresquad`
--

DROP TABLE IF EXISTS `membresquad`;
CREATE TABLE IF NOT EXISTS `membresquad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `membresquad`
--


-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` text,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `message`
--


-- --------------------------------------------------------

--
-- Structure de la table `moyenpaiement`
--

DROP TABLE IF EXISTS `moyenpaiement`;
CREATE TABLE IF NOT EXISTS `moyenpaiement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `moyenpaiement`
--

INSERT INTO `moyenpaiement` (`id`, `libelle`) VALUES
(1, 'Paypal'),
(2, 'Allopass');

-- --------------------------------------------------------

--
-- Structure de la table `squad`
--

DROP TABLE IF EXISTS `squad`;
CREATE TABLE IF NOT EXISTS `squad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(45) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL,
  `logo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `squad`
--


-- --------------------------------------------------------

--
-- Structure de la table `sujet`
--

DROP TABLE IF EXISTS `sujet`;
CREATE TABLE IF NOT EXISTS `sujet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(45) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sujet`
--


-- --------------------------------------------------------

--
-- Structure de la table `theme`
--

DROP TABLE IF EXISTS `theme`;
CREATE TABLE IF NOT EXISTS `theme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(45) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `theme`
--


-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` text,
  `steam` text,
  `leitmotiv` text,
  `username` varchar(255) NOT NULL,
  `username_canonical` varchar(255) NOT NULL,
  `email_canonical` varchar(255) NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1D1C63B392FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_1D1C63B3A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `email`, `password`, `avatar`, `steam`, `leitmotiv`, `username`, `username_canonical`, `email_canonical`, `enabled`, `salt`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(1, NULL, NULL, 'guitouzid@wanadoo.fr', 'EP4zy7ZEBsdfU+EjwjkwHlTc/CAG4V5yfl0aBAgPYW0Ne2+J3RebFfT/vRNbdqmHrzmymejw6I2RG4gklGZNEw==', NULL, NULL, NULL, 'guitouzid', 'guitouzid', 'guitouzid@wanadoo.fr', 1, '2vp978oj2cysgogoc4csc8oo8koogsc', '2013-09-11 16:36:36', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(2, NULL, NULL, 'test@example.com', 'Iy0WTVMukVkFxwgwehS8A39zJFgxCf50xLubnQV/GOQKT/k1nZyXXhr7oMRpdIbb3d6B1XThtaCtyrzTvhuNFg==', NULL, NULL, NULL, 'testuser', 'testuser', 'test@example.com', 1, 'e6r5d5ejtpckkok0wogw48gwswg0s44', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_23A0E66EC5D4C30` FOREIGN KEY (`categorie_article_id`) REFERENCES `categoriearticle` (`id`),
  ADD CONSTRAINT `FK_23A0E66FB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `don`
--
ALTER TABLE `don`
  ADD CONSTRAINT `FK_F8F081D99C7E259C` FOREIGN KEY (`moyen_paiement_id`) REFERENCES `moyenpaiement` (`id`),
  ADD CONSTRAINT `FK_F8F081D9FB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`);
SET FOREIGN_KEY_CHECKS=1;
