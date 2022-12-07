-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 07 déc. 2022 à 21:10
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `todos`
--

-- --------------------------------------------------------

--
-- Structure de la table `todo`
--

CREATE TABLE `todo` (
  `id` int(100) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `collection` text NOT NULL,
  `author` text NOT NULL,
  `created` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `todo`
--

INSERT INTO `todo` (`id`, `title`, `description`, `collection`, `author`, `created`) VALUES
(7, 'Learn MVC', 'I Have to learn MVC Archeticture in order to be more organized ..', 'Tech', '1', '07/12/22 08:33:46'),
(8, 'Conception et faisabilité', 'Processus de creation de nouveau produit', 'Tech', '1', '04:32:32pm'),
(10, 'Le Lead Dev', 'Accompagne les developpeurs au quotidient   ...', 'Tech', '1', '05:03:46pm'),
(15, 'The Father of Happinesse', 'Abderrahmane AbuSsorour', 'Personal', '1', '07/12/22 05:00:56');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
