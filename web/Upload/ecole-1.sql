-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 03 avr. 2020 à 11:58
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
-- Base de données :  `ecole-1`
--

-- --------------------------------------------------------

--
-- Structure de la table `absence`
--

DROP TABLE IF EXISTS `absence`;
CREATE TABLE IF NOT EXISTS `absence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classe` int(11) DEFAULT NULL,
  `apprenant` int(11) DEFAULT NULL,
  `nb_absence` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cour` (`classe`),
  KEY `apprenant` (`apprenant`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `absence`
--

INSERT INTO `absence` (`id`, `classe`, `apprenant`, `nb_absence`) VALUES
(2, 4, 5, 0);

-- --------------------------------------------------------

--
-- Structure de la table `activitie`
--

DROP TABLE IF EXISTS `activitie`;
CREATE TABLE IF NOT EXISTS `activitie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `prix` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `activitie`
--

INSERT INTO `activitie` (`id`, `type`, `prix`) VALUES
(2, 'hello', 20),
(3, 'yalla', 15);

-- --------------------------------------------------------

--
-- Structure de la table `affecter`
--

DROP TABLE IF EXISTS `affecter`;
CREATE TABLE IF NOT EXISTS `affecter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classe` int(11) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C290057A8F87BF96` (`classe`),
  KEY `IDX_C290057A8D93D649` (`user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `affecter`
--

INSERT INTO `affecter` (`id`, `classe`, `user`) VALUES
(2, 4, 5);

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

DROP TABLE IF EXISTS `classe`;
CREATE TABLE IF NOT EXISTS `classe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `niveau` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `type` (`type`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `classe`
--

INSERT INTO `classe` (`id`, `niveau`, `type`) VALUES
(4, 4, 'A');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `idcomment` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) DEFAULT NULL,
  `idevenement` int(11) DEFAULT NULL,
  `commentaire` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idcomment`),
  KEY `idevenement` (`idevenement`),
  KEY `iduser` (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cour`
--

DROP TABLE IF EXISTS `cour`;
CREATE TABLE IF NOT EXISTS `cour` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classe` int(11) DEFAULT NULL,
  `matiere` int(11) DEFAULT NULL,
  `nom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `extension` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cour_pdf` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `matiere` (`matiere`),
  KEY `classe` (`classe`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `emploi`
--

DROP TABLE IF EXISTS `emploi`;
CREATE TABLE IF NOT EXISTS `emploi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) DEFAULT NULL,
  `classe` int(11) DEFAULT NULL,
  `n_emploi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `extention` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emploit` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `class` (`classe`),
  KEY `user` (`user`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `emploi`
--

INSERT INTO `emploi` (`id`, `user`, `classe`, `n_emploi`, `extention`, `emploit`) VALUES
(10, NULL, 4, 'emploi pour cette semaine', NULL, 'Capture.PNG');

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

DROP TABLE IF EXISTS `evenements`;
CREATE TABLE IF NOT EXISTS `evenements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lieu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `titre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nbreplaces` int(11) NOT NULL,
  `nbreparticipants` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DateDebut` date NOT NULL,
  `DateFin` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

DROP TABLE IF EXISTS `matiere`;
CREATE TABLE IF NOT EXISTS `matiere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_matiere` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `coefficient` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`id`, `nom_matiere`, `coefficient`) VALUES
(1, 'bnbnbnbn', 5);

-- --------------------------------------------------------

--
-- Structure de la table `matieremonlivre`
--

DROP TABLE IF EXISTS `matieremonlivre`;
CREATE TABLE IF NOT EXISTS `matieremonlivre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matiere` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coff` double NOT NULL,
  `nbHeure` int(11) NOT NULL,
  `etat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `monlivre`
--

DROP TABLE IF EXISTS `monlivre`;
CREATE TABLE IF NOT EXISTS `monlivre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matiere` int(11) DEFAULT NULL,
  `apprenant` int(11) DEFAULT NULL,
  `note_orale` double NOT NULL,
  `moyenne` double NOT NULL,
  `note_ecrit` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `apprenant` (`apprenant`,`matiere`),
  KEY `matiere` (`matiere`),
  KEY `IDX_CFBDFA14C4EB462E` (`apprenant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `participent`
--

DROP TABLE IF EXISTS `participent`;
CREATE TABLE IF NOT EXISTS `participent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) DEFAULT NULL,
  `idEvenement` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `apprenant` (`iduser`),
  KEY `event` (`idEvenement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nbenfants` int(11) DEFAULT NULL,
  `activity_type` int(11) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `dateRes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateGar` date NOT NULL,
  `prix` double DEFAULT NULL,
  `etat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_42C849553D8E604F` (`parent`),
  KEY `activity_type` (`activity_type`),
  KEY `nbenfants` (`nbenfants`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `nbenfants`, `activity_type`, `parent`, `dateRes`, `dateGar`, `prix`, `etat`) VALUES
(1, 5, 2, 4, '2020-03-27', '2023-01-01', 40, 'Refuser'),
(2, 5, 2, 4, '2020-03-27', '2023-01-01', 40, 'Refuser');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent` int(11) DEFAULT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `cin` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sexe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `tel` int(11) DEFAULT NULL,
  `matiere` int(11) DEFAULT NULL,
  `classe` int(11) DEFAULT NULL,
  `affecter` int(11) DEFAULT NULL,
  `niveau` int(11) DEFAULT NULL,
  `loisir` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2DA1797792FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_2DA17977A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_2DA17977C05FB297` (`confirmation_token`),
  KEY `IDX_2DA179773D8E604F` (`parent`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `parent`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `cin`, `sexe`, `date_naissance`, `tel`, `matiere`, `classe`, `affecter`, `niveau`, `loisir`, `prenom`) VALUES
(1, NULL, 'admin', 'aaaa', 'aaaa@gmail.com', 'aaaa@gmail.com', 1, NULL, '$2y$13$pIoV8xfzpZllX74Gke5DU.QHNLi7Xuq0FZvnHFWswIJ5qPM8CFf.q', '2020-03-27 00:16:00', NULL, NULL, 'a:1:{i:0;s:10:\"ROLE_ADMIN\";}', NULL, 'Homme', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, 'add', 'add', 'add@gmail.com', 'add@gmail.com', 1, NULL, '$2y$13$DLTgbGqHPLF/IDec/09ty.VqzPpVV93sRkaro4fcedZGCHwfAvylO', '2020-04-03 11:05:29', NULL, NULL, 'a:1:{i:0;s:10:\"ROLE_ADMIN\";}', NULL, 'Homme', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, 'ayoub', 'saddi', 'ayoubsaddi1995@gmail.com', 'ayoubsaddi1995@gmail.com', 1, NULL, '$2y$13$weJmIK9v5AAjrwkV.HeGg.m.YuaDnxg1kgSNBhtO5dXMTIRa5m0Q.', '2020-04-03 08:55:51', NULL, NULL, 'a:1:{i:0;s:11:\"ROLE_PARENT\";}', '11111', 'Homme', '2015-01-01', 121212, NULL, NULL, NULL, NULL, NULL, 'parent'),
(5, 4, 'nourane', 'safi', 'nourane.safi@gmail.com', 'nourane.safi@gmail.com', 0, NULL, '$2y$13$oF1s7sNS.9QNjoFxIYOxHe/.65xz.mbQdZpQWn9EYwCdDv.togcp6', NULL, NULL, NULL, 'a:1:{i:0;s:14:\"ROLE_APPRENANT\";}', NULL, 'Homme', '2015-01-01', 111, NULL, NULL, 1, 4, NULL, 'a'),
(16, NULL, 'ayoub', 'ayoub', 'enseignant@gmail.com', 'enseignant@gmail.com', 1, NULL, '$2y$13$lAR378/TzI3H8IRK0nbTIuR4.C/JUWrD51x5l4kGM5FH7fxd./b8m', '2020-04-03 11:14:47', NULL, NULL, 'a:1:{i:0;s:15:\"ROLE_ENSEIGNANT\";}', '12345678', 'Homme', NULL, 22713103, NULL, NULL, NULL, NULL, NULL, 'saddi'),
(17, NULL, 'hamza', 'hamza', 'employe@gmail.com', 'employe@gmail.com', 1, NULL, '$2y$13$/djAKGtOpYziA/Y54lbzHODI4DgbKNxb99Zk/aVHYFjIf8ozXYq8y', '2020-04-03 11:20:40', NULL, NULL, 'a:1:{i:0;s:13:\"ROLE_EMPLOYER\";}', '12345678', 'Femme', '2017-12-18', 2152102, NULL, NULL, NULL, NULL, NULL, 'balty'),
(18, NULL, 'nourane', 'nourane', 'nouranesafi@gmail.com', 'nouranesafi@gmail.com', 1, NULL, '$2y$13$jzErrf6ue00J7TnEZE1mYuU80Toj9NJ0bwIivepmZXcL/dNu5F0sO', '2020-04-03 11:30:32', NULL, NULL, 'a:1:{i:0;s:11:\"ROLE_PARENT\";}', '14785236', 'Homme', '2015-02-18', 1234567, NULL, NULL, NULL, NULL, NULL, 'safi');

-- --------------------------------------------------------

--
-- Structure de la table `vote`
--

DROP TABLE IF EXISTS `vote`;
CREATE TABLE IF NOT EXISTS `vote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_evenement` int(11) DEFAULT NULL,
  `id_client` int(11) DEFAULT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_client` (`id_client`),
  KEY `id_evenement` (`id_evenement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `absence`
--
ALTER TABLE `absence`
  ADD CONSTRAINT `FK_765AE0C98F87BF96` FOREIGN KEY (`classe`) REFERENCES `classe` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_765AE0C9C4EB462E` FOREIGN KEY (`apprenant`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `affecter`
--
ALTER TABLE `affecter`
  ADD CONSTRAINT `FK_C290057A8D93D649` FOREIGN KEY (`user`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_C290057A8F87BF96` FOREIGN KEY (`classe`) REFERENCES `classe` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_9474526C5E5C27E9` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_9474526C753DC1EB` FOREIGN KEY (`idevenement`) REFERENCES `evenements` (`id`);

--
-- Contraintes pour la table `cour`
--
ALTER TABLE `cour`
  ADD CONSTRAINT `FK_A71F964F8F87BF96` FOREIGN KEY (`classe`) REFERENCES `classe` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_A71F964F9014574A` FOREIGN KEY (`matiere`) REFERENCES `matiere` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `emploi`
--
ALTER TABLE `emploi`
  ADD CONSTRAINT `FK_74A0B0FA8D93D649` FOREIGN KEY (`user`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_74A0B0FA8F87BF96` FOREIGN KEY (`classe`) REFERENCES `classe` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `FK_CFBDFA149014574A` FOREIGN KEY (`matiere`) REFERENCES `matiere` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_CFBDFA14C4EB462E` FOREIGN KEY (`apprenant`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `participent`
--
ALTER TABLE `participent`
  ADD CONSTRAINT `FK_D096C3CD5E5C27E9` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_D096C3CDF7CC4348` FOREIGN KEY (`idEvenement`) REFERENCES `evenements` (`id`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `FK_42C849553D8E604F` FOREIGN KEY (`parent`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_42C849555EE88CE3` FOREIGN KEY (`nbenfants`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_42C849558F1A8CBB` FOREIGN KEY (`activity_type`) REFERENCES `activitie` (`id`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_2DA179773D8E604F` FOREIGN KEY (`parent`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `vote`
--
ALTER TABLE `vote`
  ADD CONSTRAINT `FK_5A1085648B13D439` FOREIGN KEY (`id_evenement`) REFERENCES `evenements` (`id`),
  ADD CONSTRAINT `FK_5A108564E173B1B8` FOREIGN KEY (`id_client`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
