-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 01 fév. 2022 à 15:12
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bibliotheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `Book`
--

CREATE TABLE `Book` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `resume` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `editor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ISBN` int(11) NOT NULL,
  `stock_number` int(11) NOT NULL,
  `borrow_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `Book`
--

INSERT INTO `Book` (`id`, `title`, `resume`, `author`, `editor`, `ISBN`, `stock_number`, `borrow_number`) VALUES
(3, 'SuperBookMan', 'Un super-h&eacute;ros des Livres', 'Toto', 'Toto Edition', 564564654, 56, 55),
(4, 'Batman et Robin', 'C&#039;est &agrave; Gotham City', 'Biil Finger et Bob Kane', 'DC Univers', 5752, 42, 4);

-- --------------------------------------------------------

--
-- Structure de la table `Critic`
--

CREATE TABLE `Critic` (
  `id` int(11) NOT NULL,
  `note` int(11) NOT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Book` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `Critic`
--

INSERT INTO `Critic` (`id`, `note`, `comment`, `Book`) VALUES
(1, 5, 'Mais quel incroyable h&eacute;ros !', 4),
(2, 5, 'Mais quel incroyable h&eacute;ros !', 4),
(3, 5, 'Mais quel incroyable h&eacute;ros !', 4),
(4, 3, 'Passable', 3);

-- --------------------------------------------------------

--
-- Structure de la table `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Book`
--
ALTER TABLE `Book`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Critic`
--
ALTER TABLE `Critic`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_CE4EF2C76BD70C0F` (`Book`);

--
-- Index pour la table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Book`
--
ALTER TABLE `Book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `Critic`
--
ALTER TABLE `Critic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Critic`
--
ALTER TABLE `Critic`
  ADD CONSTRAINT `FK_CE4EF2C76BD70C0F` FOREIGN KEY (`Book`) REFERENCES `Book` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
