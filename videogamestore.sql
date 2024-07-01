-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 01 juil. 2024 à 11:12
-- Version du serveur : 10.11.6-MariaDB-0+deb12u1
-- Version de PHP : 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `videogamestore`
--

-- --------------------------------------------------------

--
-- Structure de la table `editors`
--

CREATE TABLE `editors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `editors`
--

INSERT INTO `editors` (`id`, `name`) VALUES
(1, 'Electronic Arts'),
(2, 'Namco Bandai'),
(3, 'Insomniac Games'),
(4, 'EA Sports BIG'),
(5, 'Visual Impact'),
(6, 'Exient Entertainment'),
(13, 'Nintendo'),
(14, 'Sony'),
(15, 'Microsoft'),
(16, 'Activision'),
(17, 'Ubisoft'),
(18, 'Rockstar Games'),
(19, 'Bethesda Softworks'),
(20, 'Square Enix'),
(21, 'Capcom'),
(22, 'Konami'),
(23, 'Sega'),
(24, 'Bandai Namco Entertainment'),
(25, 'Valve Corporation'),
(26, 'Epic Games'),
(27, 'Blizzard Entertainment'),
(28, 'Take-Two Interactive'),
(29, 'Embracer Group'),
(30, 'Tencent Games'),
(31, 'Riot Games'),
(32, 'Bungie'),
(33, 'Gearbox Software'),
(34, 'Naughty Dog'),
(35, 'Guerrilla Games'),
(36, 'Sucker Punch Productions');

-- --------------------------------------------------------

--
-- Structure de la table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `visual` varchar(255) NOT NULL,
  `resume` text NOT NULL,
  `rating` varchar(10) NOT NULL DEFAULT '1',
  `year` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `editor` varchar(255) NOT NULL,
  `video` varchar(255) DEFAULT NULL,
  `reservationState` tinyint(1) NOT NULL DEFAULT 0,
  `dateOfCreation` date NOT NULL DEFAULT current_timestamp(),
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(11) NOT NULL,
  `rating` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `ratings`
--

INSERT INTO `ratings` (`id`, `rating`) VALUES
(1, '3'),
(2, '7'),
(3, '12'),
(4, '16'),
(5, '18');

-- --------------------------------------------------------

--
-- Structure de la table `shoppingCart`
--

CREATE TABLE `shoppingCart` (
  `id` int(11) NOT NULL,
  `gameId` int(11) NOT NULL,
  `dateOfAdd` date NOT NULL DEFAULT current_timestamp(),
  `price` int(11) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dateOfCreation` date NOT NULL DEFAULT current_timestamp(),
  `userStatut` varchar(25) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `dateOfCreation`, `userStatut`) VALUES
(1, 'admin', '$2y$10$q/K924Zw.EgCALg1N2Qqnu8Z6yjsqVodpDLWC/25e4KwZGrUaiK12', '2024-06-15', 'superadmin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `editors`
--
ALTER TABLE `editors`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `shoppingCart`
--
ALTER TABLE `shoppingCart`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `editors`
--
ALTER TABLE `editors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `shoppingCart`
--
ALTER TABLE `shoppingCart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
