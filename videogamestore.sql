-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 18 juin 2024 à 15:42
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
-- Structure de la table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `visual` varchar(255) NOT NULL,
  `resume` text NOT NULL,
  `rating` varchar(10) NOT NULL,
  `year` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `editor` varchar(255) NOT NULL,
  `video` varchar(255) DEFAULT NULL,
  `dateOfCreation` date NOT NULL DEFAULT current_timestamp(),
  `reservationState` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `games`
--

INSERT INTO `games` (`id`, `visual`, `resume`, `rating`, `year`, `title`, `editor`, `video`, `dateOfCreation`, `reservationState`) VALUES
(7, '7.', 'NBA Street Vol. 2 is a basketball video game developed by NuFX and EA Canada and published by Electronic Arts under the EA Sports BIG label. It is the sequel to NBA Street and the second installment in the NBA Street series. NBA Street Vol. 2 was released on April 29, 2003, for the PlayStation 2, GameCube, and Xbox. Only the PlayStation 2 version was released in Japan; the GameCube version was planned for release in that region, but was cancelled. It was followed by NBA Street V3. ', '3', 2003, 'NBA Street VOL.2', 'EA Sports BIG', 'https://www.youtube.com/embed/86m4wyDhsUI', '2024-06-15', 0),
(8, '8.', 'Dragon Ball Z: Budokai Tenkaichi 3, originally published in Japan as Dragon Ball Z: Sparking! METEOR (ドラゴンボールＺ　Ｓｐａｒｋｉｎｇ！ＭＥＴＥＯＲ Doragon Bōru Zetto　Supākingu! Meteo) in Japan, is the third installment of the Budokai Tenkaichi series. Like its predecessor, despite being released under the Dragon Ball Z label, Budokai Tenkaichi 3 essentially touches upon all series installments of the Dragon Ball franchise, featuring numerous characters and stages set in Dragon Ball, Dragon Ball Z, Dragon Ball GT and numerous film adaptations of Z.', '12', 2007, 'Dragon Ball Z: Budokai Tenkaichi 3', 'Namco Bandai', 'https://www.youtube.com/embed/sfbMHbFiN08', '2024-06-15', 0),
(9, '9.', 'SSX 3 is a snowboarding video game developed by EA Canada and published by Electronic Arts under the EA Sports BIG label. The game was originally released on October 21, 2003, for the PlayStation 2, Xbox, and GameCube. It was later ported to the Game Boy Advance by Visual Impact on November 11, 2003, and to the Gizmondo by Exient Entertainment on August 31, 2005, as a launch title. It is the third installment in the SSX series.', '3', 2005, 'SSX 3', 'EA Sports BIG', 'https://www.youtube.com/embed/qx7MtNtPwjQ', '2024-06-15', 0),
(11, '11.', 'SSX on Tour is a snowboarding and skiing game, the fourth title in the SSX series of video games for the GameCube, PlayStation 2, Xbox and PlayStation Portable. It was released in North America on October 11, 2005 and in the PAL region on October 21, 2005. The PlayStation Portable version was released in Europe on October 28, 2005. In 2007, a prequel titled SSX Blur was released, which took place between SSX 3 and SSX on Tour.', '3', 2005, 'SSX On Tour', 'EA Sports BIG', 'https://www.youtube.com/embed/H6EqWNpS39o', '2024-06-17', 0),
(12, '.jpeg', 'Marvels Spider-Man 2 is a 2023 action-adventure game developed by Insomniac Games and published by Sony Interactive Entertainment. It is based on the Marvel Comics character Spider-Man, and features a narrative inspired by its long-running comic book mythology which is also derived from various adaptations in other media.', '2', 2023, 'Spider-Man 2', 'Insomniac Games', 'https://www.youtube.com/embed/9pBsUw0RI3Y', '2024-06-18', 0);

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
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dateOfCreation` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `dateOfCreation`) VALUES
(1, 'admin', '$2y$10$n/cSkxuACIP9i5dzeXJBF.RgOD384aGC9kKjIm/D5Ii61BABgF4ES', '2024-06-15');

--
-- Index pour les tables déchargées
--

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
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
