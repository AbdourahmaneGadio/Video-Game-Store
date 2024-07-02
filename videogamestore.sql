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

CREATE TABLE `EDITORS` (
  `ID` INT(11) NOT NULL,
  `NAME` VARCHAR(255) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE=UTF8MB4_GENERAL_CI;

--
-- Déchargement des données de la table `editors`
--

INSERT INTO `EDITORS` (
  `ID`,
  `NAME`
) VALUES (
  1,
  'Electronic Arts'
),
(
  2,
  'Namco Bandai'
),
(
  3,
  'Insomniac Games'
),
(
  4,
  'EA Sports BIG'
),
(
  5,
  'Visual Impact'
),
(
  6,
  'Exient Entertainment'
),
(
  13,
  'Nintendo'
),
(
  14,
  'Sony'
),
(
  15,
  'Microsoft'
),
(
  16,
  'Activision'
),
(
  17,
  'Ubisoft'
),
(
  18,
  'Rockstar Games'
),
(
  19,
  'Bethesda Softworks'
),
(
  20,
  'Square Enix'
),
(
  21,
  'Capcom'
),
(
  22,
  'Konami'
),
(
  23,
  'Sega'
),
(
  24,
  'Bandai Namco Entertainment'
),
(
  25,
  'Valve Corporation'
),
(
  26,
  'Epic Games'
),
(
  27,
  'Blizzard Entertainment'
),
(
  28,
  'Take-Two Interactive'
),
(
  29,
  'Embracer Group'
),
(
  30,
  'Tencent Games'
),
(
  31,
  'Riot Games'
),
(
  32,
  'Bungie'
),
(
  33,
  'Gearbox Software'
),
(
  34,
  'Naughty Dog'
),
(
  35,
  'Guerrilla Games'
),
(
  36,
  'Sucker Punch Productions'
);

-- --------------------------------------------------------

--
-- Structure de la table `games`
--

CREATE TABLE `GAMES` (
  `ID` INT(11) NOT NULL,
  `VISUAL` VARCHAR(255) NOT NULL,
  `RESUME` TEXT NOT NULL,
  `RATING` VARCHAR(10) NOT NULL DEFAULT '1',
  `YEAR` INT(11) NOT NULL,
  `TITLE` VARCHAR(255) NOT NULL,
  `EDITOR` VARCHAR(255) NOT NULL,
  `VIDEO` VARCHAR(255) DEFAULT NULL,
  `RESERVATIONSTATE` TINYINT(1) NOT NULL DEFAULT 0,
  `DATEOFCREATION` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `PRICE` INT(11) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE=UTF8MB4_GENERAL_CI;

--
-- Déchargement des données de la table `games`
--

INSERT INTO `GAMES` (
  `ID`,
  `VISUAL`,
  `RESUME`,
  `RATING`,
  `YEAR`,
  `TITLE`,
  `EDITOR`,
  `VIDEO`,
  `RESERVATIONSTATE`,
  `DATEOFCREATION`,
  `PRICE`
) VALUES (
  1,
  '.jpeg',
  'Good.',
  '5',
  '2018',
  'God Of War',
  '14',
  'https://www.youtube.com/embed/K0u_kAWLJOA',
  '0',
  '2024-07-01',
  '30'
);

-- --------------------------------------------------------
--
-- Structure de la table `ratings`
--

CREATE TABLE `RATINGS` (
  `ID` INT(11) NOT NULL,
  `RATING` VARCHAR(10) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE=UTF8MB4_GENERAL_CI;

--
-- Déchargement des données de la table `ratings`
--

INSERT INTO `RATINGS` (
  `ID`,
  `RATING`
) VALUES (
  1,
  '3'
),
(
  2,
  '7'
),
(
  3,
  '12'
),
(
  4,
  '16'
),
(
  5,
  '18'
);

-- --------------------------------------------------------

--
-- Structure de la table `shoppingCart`
--

CREATE TABLE `SHOPPINGCART` (
  `ID` INT(11) NOT NULL,
  `GAMEID` INT(11) NOT NULL,
  `DATEOFADD` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `PRICE` INT(11) NOT NULL,
  `USERID` INT(11) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE=UTF8MB4_GENERAL_CI;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `USERS` (
  `ID` INT(11) NOT NULL,
  `USERNAME` VARCHAR(12) NOT NULL,
  `PASSWORD` VARCHAR(255) NOT NULL,
  `DATEOFCREATION` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `USERSTATUT` VARCHAR(25) NOT NULL DEFAULT 'user'
) ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE=UTF8MB4_GENERAL_CI;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `USERS` (
  `ID`,
  `USERNAME`,
  `PASSWORD`,
  `DATEOFCREATION`,
  `USERSTATUT`
) VALUES (
  1,
  'admin',
  '$2y$10$q/K924Zw.EgCALg1N2Qqnu8Z6yjsqVodpDLWC/25e4KwZGrUaiK12',
  '2024-06-15',
  'superadmin'
);

-- --------------------------------------------------------

--
-- Structure of the `contacts` table
--

CREATE TABLE `CONTACTS` (
  `CONTACT_ID` INT(11) NOT NULL,
  `USER_NAME` VARCHAR(100) NOT NULL,
  `USER_EMAIL` VARCHAR(255) NOT NULL,
  `SUBJECT` VARCHAR(255) NOT NULL,
  `CONTENT` TEXT NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE=UTF8MB4_GENERAL_CI;

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `CONTACTS` ADD PRIMARY KEY (`CONTACT_ID`);

--
-- AUTO_INCREMENT of the `contacts` table
--
ALTER TABLE `CONTACTS` MODIFY `CONTACT_ID` INT(11) NOT NULL AUTO_INCREMENT;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `editors`
--
ALTER TABLE `EDITORS` ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `games`
--
ALTER TABLE `GAMES` ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `ratings`
--
ALTER TABLE `RATINGS` ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `shoppingCart`
--
ALTER TABLE `SHOPPINGCART` ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `users`
--
ALTER TABLE `USERS` ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `editors`
--
ALTER TABLE `EDITORS` MODIFY `ID` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `games`
--
ALTER TABLE `GAMES` MODIFY `ID` INT(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ratings`
--
ALTER TABLE `RATINGS` MODIFY `ID` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `shoppingCart`
--
ALTER TABLE `SHOPPINGCART` MODIFY `ID` INT(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `USERS` MODIFY `ID` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;