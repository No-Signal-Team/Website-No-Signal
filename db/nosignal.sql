-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 30 Mai 2023 à 15:02
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `nosignal`
--
CREATE DATABASE IF NOT EXISTS `nosignal` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `nosignal`;

-- --------------------------------------------------------

--
-- Structure de la table `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `promo` text NOT NULL,
  `description` text NOT NULL,
  `nav1` text NOT NULL,
  `nav2` text NOT NULL,
  `nav3` text NOT NULL,
  `teamsub` text NOT NULL,
  `socials` text NOT NULL,
  `newsletter` text NOT NULL,
  `submit` text NOT NULL,
  `download` text NOT NULL,
  `beta` text NOT NULL,
  `button` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `language`
--

INSERT INTO `language` (`id`, `promo`, `description`, `nav1`, `nav2`, `nav3`, `teamsub`, `socials`, `newsletter`, `submit`, `download`, `beta`, `button`) VALUES
(1, 'Clip promotionnel du jeu', 'L\'heure de l\'horreur est arrivée. Préparez vous à un environnement sans merci au Château.', 'NOTRE JEU', 'QUI NOUS SOMMES', 'NOTRE ÉQUIPE', 'Découvrez notre équipe et leurs profils', 'Nos Réseaux Sociaux', 'Inscrit toi à notre newsletter', 'S\'inscrire', 'TÉLÉCHARGER', 'Deviens Beta testeur', 'Regarder'),
(2, 'Promotional video of the game', 'Time for horror has come. Prepare yourself for no mercy in the Castle.', 'OUR GAME', 'WHO WE ARE', 'OUR TEAM', 'Discover our team and their profiles', 'Our Social Media', 'Subscribe to our newsletter', 'Subscribe', 'DOWNLOAD', 'Become a Beta tester', 'Watch');

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(1, 'exemple@email.com'),
(2, 'autreexemple@email.com'),
(7, 'jesuisunexemple@gmail.com'),
(23, 'aromanzin@gaming.tech');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
