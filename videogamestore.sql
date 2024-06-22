-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : sam. 22 juin 2024 à 15:35
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
(7, 'Electronic Arts'),
(8, 'Namco Bandai'),
(9, 'Insomniac Games'),
(10, 'EA Sports BIG'),
(11, 'Visual Impact'),
(12, 'Exient Entertainment'),
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
(12, '12.', 'Marvels Spider-Man 2 is a 2023 action-adventure game developed by Insomniac Games and published by Sony Interactive Entertainment. It is based on the Marvel Comics character Spider-Man, and features a narrative inspired by its long-running comic book mythology which is also derived from various adaptations in other media.', '16', 2023, 'Spider-Man 2', 'Insomniac Games', 'https://www.youtube.com/embed/9pBsUw0RI3Y', '2024-06-18', 0),
(13, '13.', 'Halo: Combat Evolved is a 2001 first-person shooter video game developed by Bungie and published by Microsoft Game Studios. The first game of the Halo franchise, it was released for the Xbox on November 15, 2001, and later ported to Microsoft Windows and Mac OS X. The game was a critical and commercial success, selling over 5 million copies, and is considered one of the most influential video games of all time, helping to make the Xbox a success and popularizing the first-person shooter genre on consoles.', '3', 2001, 'Halo: Combat Evolved', 'Bungie', 'https://www.youtube.com/embed/nGQUQu-yyeM', '2024-06-19', 0),
(14, '14.', 'Grand Theft Auto III is a 1999 action-adventure game developed by DMA Design and published by Rockstar Games. It is the third main installment in the Grand Theft Auto series, and the first to feature a 3D open world environment. The game is set in the fictional Liberty City, which is loosely based on New York City, and follows a silent protagonist known as Claude, who becomes entangled in the city\'s criminal underworld after being betrayed.', '18', 1999, 'Grand Theft Auto III', 'Rockstar Games', 'https://www.youtube.com/embed/Fy0aCDmgnxg', '2024-06-19', 0),
(15, '15.', 'The Legend of Zelda: Breath of the Wild is a 2017 action-adventure game developed and published by Nintendo for the Nintendo Switch and Wii U. It is the nineteenth mainline installment in The Legend of Zelda series. In the game, the player controls Link, who awakens from a 100-year slumber to a mysterious open world and must defeat Calamity Ganon before it destroys the kingdom of Hyrule.', '12', 2017, 'The Legend of Zelda: Breath of the Wild', 'Nintendo', 'https://www.youtube.com/embed/zw47_q9wbBE', '2024-06-19', 0),
(16, '16.', 'Super Mario Odyssey is a 2017 action-adventure game developed and published by Nintendo for the Nintendo Switch. It is the eighteenth main installment in the Super Mario series. In the game, the player controls Mario as he travels across various worlds on the Mushroom Kingdom and beyond, using his new companion Cappy to take control of enemies and objects.', '3', 2017, 'Super Mario Odyssey', 'Nintendo', 'https://www.youtube.com/embed/8QpUGCXwOks', '2024-06-19', 0),
(17, '17.', 'The Witcher 3: Wild Hunt is a 2015 action role-playing game developed by CD Projekt Red and published by CD Projekt. It is the sequel to the 2011 game The Witcher 2: Assassins of Kings and the third game in The Witcher video game series, played from a third-person perspective. Set in a fantasy open world, the game follows the witcher Geralt of Rivia as he searches for his former lover and his young subject.', '16', 2015, 'The Witcher 3: Wild Hunt', 'CD Projekt', 'https://www.youtube.com/embed/c0i88t0Kacs', '2024-06-19', 0),
(18, '18.', 'Elden Ring is a 2022 action role-playing game developed by FromSoftware and published by Bandai Namco Entertainment. It was created by Hidetaka Miyazaki and George R. R. Martin. The game takes place in the Lands Between, a fictional realm created by Martin, and follows a customizable protagonist known as the Tarnished, who has returned to the Lands Between to claim the titular Elden Ring and become the new Elden Lord.', '16', 2022, 'Elden Ring', 'Bandai Namco', 'https://www.youtube.com/embed/E3Huy2cdih0', '2024-06-19', 0),
(19, '19.', 'Minecraft is a 2009 sandbox video game developed by Mojang Studios. The game allows players to build, explore, and survive in a blocky, procedurally-generated 3D world. Players can gather resources, craft tools and items, and construct buildings, earthworks, and machines. Gameplay is based on survival, exploration, and construction, with various game modes available.', '3', 2009, 'Minecraft', 'Mojang Studios', 'https://www.youtube.com/embed/MmB9b5njVbA', '2024-06-19', 0),
(20, '20.', 'Fortnite is a 2017 online video game developed by Epic Games and released in 2017. It is available in three distinct game mode versions that otherwise share the same general gameplay and game engine: Fortnite: Save the World, a cooperative shooter-survival game for up to four players to fight off zombie-like creatures and defend objects with fortifications they can build; Fortnite Battle Royale, a free-to-play battle royale game in which up to 100 players fight to be the last person standing; and Fortnite Creative, where players are given complete freedom to create worlds and battle arenas.', '12', 2017, 'Fortnite', 'Epic Games', 'https://www.youtube.com/embed/2gUtfBmWDfM', '2024-06-19', 0),
(21, '21.', 'Red Dead Redemption 2 is a 2018 action-adventure game developed and published by Rockstar Games. It is the third entry in the Red Dead series and a prequel to the 2010 game Red Dead Redemption. The game is set in a fictionalized representation of the American Old West and Great Plains in 1899, and follows the story of outlaw Arthur Morgan, a member of the Van der Linde gang.', '16', 2018, 'Red Dead Redemption 2', 'Rockstar Games', 'https://www.youtube.com/embed/eaW0tYpxyp0', '2024-06-19', 0),
(22, '22.', 'The Last of Us Part II is a 2020 action-adventure game developed by Naughty Dog and published by Sony Interactive Entertainment. It is the sequel to the 2013 game The Last of Us, and is set five years after the events of the first game. The game follows Ellie, who comes into conflict with a mysterious cult in a post-apocalyptic United States.', '18', 2020, 'The Last of Us Part II', 'Naughty Dog', 'https://www.youtube.com/embed/qXPOl6EjbWg', '2024-06-19', 0),
(23, '23.', 'God of War is a 2018 action-adventure game developed by Santa Monica Studio and published by Sony Interactive Entertainment. It is the eighth installment in the God of War series, and the sequel to 2010\'s God of War III. The game is loosely based on Norse mythology and set in ancient Scandinavia, where it follows Kratos, the former Greek god of war, and his young son Atreus as they journey through the nine realms of Yggdrasil.', '16', 2018, 'God of War', 'Santa Monica Studio', 'https://www.youtube.com/embed/FyIwEFXOcaE', '2024-06-19', 0),
(24, '24.', 'Horizon Zero Dawn is a 2017 action role-playing game developed by Guerrilla Games and published by Sony Interactive Entertainment. The game is set in a post-apocalyptic world where humans live in primitive tribes and coexist with robotic creatures known as \"Machines\". The player takes control of Aloy, a skilled hunter and archer, as she sets out to uncover her past.', '12', 2017, 'Horizon Zero Dawn', 'Guerrilla Games', 'https://www.youtube.com/embed/Fkg5UVTsKCE', '2024-06-19', 0),
(25, '25.', 'Uncharted 4: A Thief\'s End is a 2016 action-adventure game developed by Naughty Dog and published by Sony Interactive Entertainment. It is the fourth main entry in the Uncharted series, and the sequel to 2011\'s Uncharted 3: Drake\'s Deception. The game follows former treasure hunter Nathan Drake, who is forced back into the world of thieves when his brother Sam reappears, needing his help to find the long-lost treasure of pirate Henry Avery.', '16', 2016, 'Uncharted 4: A Thief\'s End', 'Naughty Dog', 'https://www.youtube.com/embed/ibTr3yvX6xw', '2024-06-19', 0),
(26, '26.', 'Assassin\'s Creed Odyssey is a 2018 action role-playing game developed by Ubisoft Quebec and published by Ubisoft. It is the eleventh major installment in the Assassin\'s Creed series and the successor to the 2017 game Assassin\'s Creed Origins. The game is set in 431 BCE, during the Peloponnesian War, and follows either Alexios or Kassandra, mercenaries who get caught up in the conflict between Athens and Sparta.', '16', 2018, 'Assassin\'s Creed Odyssey', 'Ubisoft', 'https://www.youtube.com/embed/ssrNcwxALS4', '2024-06-19', 0),
(27, '27.', 'Cyberpunk 2077 is a 2020 action role-playing game developed and published by CD Projekt. The game is set in the futuristic open-world city of Night City, and follows the story of a customizable mercenary known as V, who can acquire skills, equipment, and augmentations. The game features a branching narrative and multiple endings, with the player\'s choices affecting the story.', '18', 2020, 'Cyberpunk 2077', 'CD Projekt', 'https://www.youtube.com/embed/8X2kIfS6fb8', '2024-06-19', 0),
(28, '28.', 'Apex Legends is a 2019 free-to-play battle royale game developed by Respawn Entertainment and published by Electronic Arts. The game is set in the Titanfall universe and features a squad-based battle royale format with unique characters, called \"Legends\", each with their own abilities.', '12', 2019, 'Apex Legends', 'Respawn Entertainment', 'https://www.youtube.com/embed/oQtHENM_GZU', '2024-06-19', 0),
(29, '29.', 'Call of Duty: Modern Warfare II is a 2022 first-person shooter game developed by Infinity Ward and published by Activision. It is the sequel to the 2019 game Call of Duty: Modern Warfare, and the nineteenth main installment in the Call of Duty series. The game follows the continued adventures of the special forces unit Task Force 141, as they confront the threat of a newly emerged Russian terrorist group.', '16', 2022, 'Call of Duty: Modern Warfare II', 'Activision', 'https://www.youtube.com/embed/Rl-rcmNLv8Y', '2024-06-19', 0),
(30, '30.', 'Overwatch 2 is a 2022 team-based first-person shooter developed and published by Blizzard Entertainment. It is the sequel to the 2016 game Overwatch, and features a new 5v5 gameplay format, as well as new heroes, maps, and game modes. The game continues the story of the original Overwatch, with the player taking control of a diverse cast of characters with unique abilities and playstyles.', '12', 2022, 'Overwatch 2', 'Blizzard Entertainment', 'https://www.youtube.com/embed/OubHHtNM94M', '2024-06-19', 0),
(31, '31.', 'Stray is a 2022 adventure game developed by BlueTwelve Studio and published by Annapurna Interactive. The game follows a stray cat who becomes separated from its family and must navigate the detailed, neon-lit cybercity of Walled City 99 to find its way home. Along the way, the cat befriends a small drone named B-12 and helps the city\'s inhabitants, who are androids, with various tasks and puzzles.', '3', 2022, 'Stray', 'Annapurna Interactive', 'https://www.youtube.com/embed/OubHHtNM94M', '2024-06-19', 0),
(32, '32.', 'Elden Ring is a 2022 action role-playing game developed by FromSoftware and published by Bandai Namco Entertainment. It was created by Hidetaka Miyazaki and George R. R. Martin. The game takes place in the Lands Between, a fictional realm created by Martin, and follows a customizable protagonist known as the Tarnished, who has returned to the Lands Between to claim the titular Elden Ring and become the new Elden Lord.', '16', 2022, 'Elden Ring', 'Bandai Namco', 'https://www.youtube.com/embed/E3Huy2cdih0', '2024-06-19', 0),
(33, '33.', 'Hogwarts Legacy is a 2023 action role-playing game developed by Avalanche Software and published by Warner Bros. Interactive Entertainment under the Portkey Games label. The game is set in the late 1800s in the Wizarding World created by J. K. Rowling, and follows a student at Hogwarts School of Witchcraft and Wizardry who holds the key to an ancient secret that threatens to tear the wizarding world apart.', '12', 2023, 'Hogwarts Legacy', 'Warner Bros. Interactive Entertainment', 'https://www.youtube.com/embed/1O6Qstncpnc', '2024-06-19', 0),
(34, '34.', 'Nier: Automata is a 2017 action role-playing game developed by PlatinumGames and published by Square Enix. The game is set in a post-apocalyptic world where machines have taken over the Earth, and follows the story of 2B, an android tasked with reclaiming the planet from the machines.', '16', 2017, 'Nier: Automata', 'Square Enix', 'https://www.youtube.com/embed/8X2kIfS6fb8', '2024-06-19', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
