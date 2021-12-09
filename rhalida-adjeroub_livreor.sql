-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 09 déc. 2021 à 09:50
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `rhalida-adjeroub_livreor`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire` text NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `commentaire`, `id_utilisateur`, `date`) VALUES
(23, 'salut', 8, '2021-12-08 10:56:35'),
(22, 'coucou moi comment tu vas\r\n', 6, '2021-12-08 09:15:28'),
(21, 'bonjour', 5, '2021-12-06 11:39:28'),
(20, 'hello', 3, '2021-12-06 10:26:26'),
(19, 'hello Aurelie', 3, '2021-12-06 10:24:36'),
(17, 'how are you', 5, '2021-12-06 09:24:43'),
(16, 'hello world', 3, '2021-12-06 09:23:48'),
(15, 'qsdfgthjklml;,nbvcdxsdfrtghyjk\r\n', 3, '2021-12-06 06:29:58'),
(24, 'hellooooooooooo', 5, '2021-12-09 06:14:13');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(1, 'rhali', 'rhali'),
(2, 'raph', '$2y$10$GQJKUmTyiRYI7sdEl/U03eVtKFDoOSPeTUxq/WYSNWOcBTuVukW4u'),
(3, 'lina', '$2y$10$saCQ.YMSAtjZmE4POUDySuMWWD7dfowKTjEOFRrPCXgsfZj4uGx6i'),
(4, 'hafid', '$2y$10$JI1TqB3lSrVHY4zY99Zj7ONRVjbD8SO2XW.0olK/IQxtlniyNcdWe'),
(5, 'loulou', '$2y$10$.4IYTOKpriJrnxLbNixuUe8DYjDHknw1SnQyIOOH4d2iZluZNrdAa'),
(6, 'Moi', '$2y$10$w.Vio6NNVi8EZZkL4c5rfu2wsMppGU5XtHzlQ42n5W864./1/nr4K'),
(7, 'lily2', '$2y$10$GmHHMLlk3FB1P0OX/3npGODueadSgPIcwx1IEtJ803GxG.JyG5yUS'),
(8, 'lili2', '$2y$10$N/jh0Or5gcgdiwFKS9hw1OJYp.MYgyYpN0Q0gIXmq.rIP9JYhjVAa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
