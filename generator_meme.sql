-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 16 mai 2018 à 09:59
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `generator_meme`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom_categorie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom_categorie`) VALUES
(1, 'humour'),
(2, 'animaux'),
(3, 'humain'),
(4, 'nourriture'),
(5, 'divers');

-- --------------------------------------------------------

--
-- Structure de la table `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `nom_img` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `img`
--

INSERT INTO `img` (`id`, `nom_img`, `adress`) VALUES
(1, 'banana', 'assets\\media\\bdd_img\\banana.jpg'),
(2, 'chorizo', 'assets\\media\\bdd_img\\banana-chorizo.jpg'),
(3, 'biche', 'assets\\media\\bdd_img\\biche.jpg'),
(4, 'brebis', 'assets\\media\\bdd_img\\brebis.jpg'),
(5, 'chien', 'assets\\media\\bdd_img\\chien'),
(6, 'chien-henry', 'assets\\media\\bdd_img\\chien-henry.jpg'),
(7, 'geek', 'assets\\media\\bdd_img\\geek.png'),
(8, 'halloween', 'assets\\media\\bdd_img\\halloween.jpg'),
(9, 'horse', 'assets\\media\\bdd_img\\horse.jpg'),
(10, 'humor', 'assets\\media\\bdd_img\\humor.jpg'),
(11, 'lion', 'assets\\media\\bdd_img\\lion.jpg'),
(12, 'mamy', 'assets\\media\\bdd_img\\mamy.jpg'),
(13, 'monkey', 'assets\\media\\bdd_img\\monkey.jpg'),
(14, 'santa', 'assets\\media\\bdd_img\\santa.jpg'),
(15, 'sculpture', 'assets\\media\\bdd_img\\sculpture.jpg'),
(16, 'spider', 'assets\\media\\bdd_img\\spider.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `liaison_img_categorie`
--

CREATE TABLE `liaison_img_categorie` (
  `id` int(11) NOT NULL,
  `id_img` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `liaison_img_categorie`
--

INSERT INTO `liaison_img_categorie` (`id`, `id_img`, `id_categorie`) VALUES
(1, 1, 4),
(2, 2, 4),
(3, 3, 2),
(4, 4, 2),
(5, 5, 2),
(6, 6, 2),
(7, 7, 5),
(8, 8, 4),
(9, 9, 2),
(10, 10, 5),
(11, 11, 2),
(12, 12, 3),
(13, 13, 2),
(14, 14, 3),
(15, 15, 4),
(16, 15, 5),
(17, 16, 2),
(18, 1, 1),
(19, 2, 1),
(20, 3, 1),
(21, 4, 1),
(22, 5, 1),
(23, 6, 1),
(24, 7, 1),
(25, 8, 1),
(26, 9, 1),
(27, 10, 1),
(28, 11, 1),
(29, 12, 1),
(30, 13, 1),
(31, 14, 1),
(32, 15, 1),
(33, 16, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `liaison_img_categorie`
--
ALTER TABLE `liaison_img_categorie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `liaison_img_categorie`
--
ALTER TABLE `liaison_img_categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
