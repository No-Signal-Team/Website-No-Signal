-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 11 Juillet 2023 à 05:59
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
-- Structure de la table `lang`
--

CREATE TABLE `lang` (
  `id` int(11) NOT NULL,
  `promo` text NOT NULL,
  `description` text NOT NULL,
  `nav1` text NOT NULL,
  `nav2` text NOT NULL,
  `nav3` text NOT NULL,
  `teamsub` text NOT NULL,
  `teamsubtext` text NOT NULL,
  `socials` text NOT NULL,
  `newsletter` text NOT NULL,
  `submit` text NOT NULL,
  `download` text NOT NULL,
  `button` text NOT NULL,
  `actus` text NOT NULL,
  `actu1` text NOT NULL,
  `actu2` text NOT NULL,
  `actu3` text NOT NULL,
  `actu4` text NOT NULL,
  `piliers` text NOT NULL,
  `pilier1` text NOT NULL,
  `pdesc1` text NOT NULL,
  `pilier2` text NOT NULL,
  `pdesc2` text NOT NULL,
  `pilier3` text NOT NULL,
  `pdesc3` text NOT NULL,
  `pilier4` text NOT NULL,
  `pdesc4` text NOT NULL,
  `fnewsletter` text NOT NULL,
  `home` text NOT NULL,
  `contact` text NOT NULL,
  `us` text NOT NULL,
  `newslettertext` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `lang`
--

INSERT INTO `lang` (`id`, `promo`, `description`, `nav1`, `nav2`, `nav3`, `teamsub`, `teamsubtext`, `socials`, `newsletter`, `submit`, `download`, `button`, `actus`, `actu1`, `actu2`, `actu3`, `actu4`, `piliers`, `pilier1`, `pdesc1`, `pilier2`, `pdesc2`, `pilier3`, `pdesc3`, `pilier4`, `pdesc4`, `fnewsletter`, `home`, `contact`, `us`, `newslettertext`) VALUES
(1, 'Clip promotionnel du jeu', 'L\'heure de l\'horreur est arrivée. Préparez vous à un environnement sans merci au Château.', 'Notre jeu', 'Qui nous sommes', 'Notre équipe', 'Découvrez notre équipe et leurs profils', 'Rencontrez notre talentueuse équipe. Chaque membre de notre équipe apporte sa propre expertise et sa passion pour l\'industrie du jeu. Des développeurs aux artistes, en passant par les concepteurs de jeu et les testeurs, nous collaborons étroitement pour donner vie à nos idées les plus audacieuses. Découvrez les visages derrière nos jeux et apprenez à connaître les personnes qui travaillent dur pour créer des expériences de jeu exceptionnelles.', 'Nos Réseaux Sociaux', 'Inscris toi à notre newsletter', 'S\'inscrire', 'Télécharger', 'Regarder', 'Nos actualités', 'Actu 1', 'Actu 2', 'Actu 3', 'Actu 4', 'Nos Valeurs', 'Créativité', 'BLABLABLA', 'Originalité', 'BLABLABLA', 'Innovation', 'BLABLABLA', 'Travail d\'équipe', 'BLABLABLA', 'Newsletter', 'Acceuil', 'Informations de contact', 'Nous', 'Inscrivez-vous à notre newsletter pour rester à jour avec toutes les dernières nouvelles, les offres spéciales et les annonces exclusives de notre studio de jeux indépendants lyonnais. Ne manquez jamais une opportunité de découvrir nos nouveaux jeux en avant-première, de participer à des concours passionnants et d\'être le premier à connaître les dernières mises à jour. Rejoignez notre communauté de joueurs passionnés et soyez aux premières loges des dernières actualités de notre studio.'),
(2, 'Promotional video of the game', 'Time for horror has come. Prepare yourself for no mercy in the Castle.', 'Our game', 'Who we are', 'Our Team', 'Discover our team and their profiles', 'Meet our talented team. Each member of our team brings their own expertise and passion for the game industry. From developpers to artists including game designers and testers, we closely collaborate to give life to our most ambicious ideas. Discover the faces behind our games and learn to know the people working hard to create incredible gaming experiences.', 'Our Social Media', 'Subscribe to our newsletter', 'Subscribe', 'Download', 'Watch', 'Our news', 'News 1', 'News 2', 'News 3', 'News 4', 'Our Values', 'Creativity', 'BLABLABLA', 'Originality', 'BLABLABLA', 'Innovation', 'BLABLABLA', 'Teamwork', 'BLABLABLA', 'Newsletter', 'Home', 'Contact informations', 'Us', 'Subscribe to our newsletter in order to stay up to date with the latest news, special deals and exclusive announcement from our independent video game studio. Never miss opportunities to discover our new games in previews, join incredible contests and to be the first to know the last updates. Join our passionate players community and be the first one to know anything new about our studio.');

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
(8, 'thomasdelorme56@gmail.com'),
(9, 'anaelle.romanzin@gmail.com');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `lang`
--
ALTER TABLE `lang`
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
-- AUTO_INCREMENT pour la table `lang`
--
ALTER TABLE `lang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
