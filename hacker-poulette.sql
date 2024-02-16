-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 15 fév. 2024 à 22:56
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hacker-poulette`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `lastname` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `file_path` longblob,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `file_path`, `description`) VALUES
(1, 'Tess', 'maloteaux', 'maloteaux.stacy@gmail.com', '', 'Je suis un renard qui vis dans un monde imaginaire; parcourant les plaines; écrivant des histoire de 1000 charactères pour remplir ce textarea !'),
(2, 'stacy', 'la vanne', 'bienvenue@inkde.be', '', 'dans un monde imaginaire; parcourant les plaines; écrivant des histoire de 1000 charactères pour remplir ce textarea !'),
(3, 'tess', 'tess', 'maloteaux.stacy@gmail.com', NULL, 'le renard qui passe'),
(4, 'tess', 'tess', 'maloteaux.stacy@gmail.com', NULL, 'le renard qui passe'),
(5, 'test', 'test', 'maloteaux.stacy@gmail.com', NULL, 'le renard qui passe 2'),
(6, 'test', 'test', 'maloteaux.stacy@gmail.com', NULL, 'le renard qui passe 2'),
(7, 'stacy', 'maloteaux', 'maloteaux.stacy@gmail.com', NULL, 'tst'),
(8, 'tess', 'tessa', 'maloteaux.stacy@gmail.com', NULL, 'qui passe dans un monde imaginaire; parcourant les plaines; écrivant des histoire de 1000 charactères pour remplir ce textarea !'),
(9, 'tess', 'tessa', 'maloteaux.stacy@gmail.com', NULL, 'qui passe dans un monde imaginaire; parcourant les plaines; écrivant des histoire de 1000 charactères pour remplir ce textarea !'),
(10, 'tess', 'tessa', 'maloteaux.stacy@gmail.com', NULL, 'qui passe dans un monde imaginaire; parcourant les plaines; écrivant des histoire de 1000 charactères pour remplir ce textarea !'),
(11, 'stacy', 'tessa', 'maloteaux.stacy@gmail.com', NULL, 'dfghjkldfghjkl'),
(12, 'tessa', 'stacy', 'maloteaux.stacy@gmail.com', NULL, 'ertyuifn,ghjkllmgyfty'),
(13, 'tess', 'stacy', 'maloteaux.stacy@gmail.com', 0x6173736574732f617661746172735f75736572732f3432363630373335335f3336313839383934363635383236315f313337333038343132333931343433363730335f6e2e6a7067, 'Je suis un renard qui vis dans un monde imaginaire; parcourant les plaines; écrivant des histoire de 1000 charactères pour remplir ce textarea !'),
(14, 'tessa tess', 'stacy tess tess', 'maloteaux.stacy@gail.com', NULL, 'zertyuio gfds ertyui ertyui cvbnfdez');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
