-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 26 mai 2021 à 10:51
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pstock`
--

-- --------------------------------------------------------

--
-- Structure de la table `myproduct`
--

CREATE TABLE `myproduct` (
  `id` int(11) NOT NULL,
  `nom` varchar(33) NOT NULL,
  `prix` int(11) NOT NULL,
  `qmin` int(11) NOT NULL,
  `qmax` int(11) NOT NULL,
  `category` varchar(33) NOT NULL,
  `photo` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `myproduct`
--

INSERT INTO `myproduct` (`id`, `nom`, `prix`, `qmin`, `qmax`, `category`, `photo`) VALUES
(11, 'tomate', 4, 6, 5, 'lait', 'Pstock/central.jpg'),
(14, 'danon', 10, 17, 8, 'lait', 'Pstock/pringles.jpg'),
(43, 'tomate', 12, 12, 2235, 'legume', 'Pstock/tomate.png'),
(222, 'banane', 3, 44, 88, 'fruit', 'Pstock/banane.png');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `username` varchar(10) NOT NULL,
  `password` varchar(23) NOT NULL,
  `picture` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`username`, `password`, `picture`) VALUES
('tarik', '123', 'Pstock/mouna.jpg'),
('tawfik', '111', 'Pstock/nizar.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `myproduct`
--
ALTER TABLE `myproduct`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `myproduct`
--
ALTER TABLE `myproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
