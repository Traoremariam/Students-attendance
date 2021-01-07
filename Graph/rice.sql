-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 03 août 2020 à 14:47
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `batch2`
--

-- --------------------------------------------------------

--
-- Structure de la table `rice`
--

CREATE TABLE `rice` (
  `id` int(11) NOT NULL,
  `month` int(50) NOT NULL,
  `amont` int(11) NOT NULL,
  `datepost` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rice`
--

INSERT INTO `rice` (`id`, `month`, `amont`, `datepost`) VALUES
(12, 1, 40, '2019-08-13'),
(13, 2, 12, '2019-08-13'),
(14, 3, 45, '2019-08-13'),
(15, 4, 70, '2019-08-13'),
(16, 5, 12, '2019-08-13'),
(17, 6, 100, '2019-08-13'),
(18, 7, 80, '2019-08-13'),
(19, 8, 80, '2019-08-13'),
(20, 9, 35, '2019-08-13'),
(21, 10, 20, '2019-08-13'),
(22, 11, 100, '2019-08-13'),
(23, 12, 789, '2019-08-13');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `rice`
--
ALTER TABLE `rice`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `rice`
--
ALTER TABLE `rice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
