-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 04 Janvier 2021 à 00:35
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `liv`
--

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE IF NOT EXISTS `compte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `pasword` varchar(255) NOT NULL,
  `numero` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `compte`
--

INSERT INTO `compte` (`id`, `username`, `nom`, `prenom`, `pasword`, `numero`, `email`, `type`, `img`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 53816556, 'chihebzouaoui@gamail.com', 'admin', ''),
(2, 'user', 'user', 'user', 'user', 55255203, 'mohsnifiras@gmail.com', 'simple', '');

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

CREATE TABLE IF NOT EXISTS `livraison` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idclient` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `numtel` int(11) NOT NULL,
  `numcommande` int(11) NOT NULL,
  `date_livraison` date NOT NULL,
  `total` float NOT NULL,
  `etat` varchar(255) NOT NULL,
  `notifications` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `livraison`
--

INSERT INTO `livraison` (`id`, `idclient`, `nom`, `adress`, `numtel`, `numcommande`, `date_livraison`, `total`, `etat`, `notifications`) VALUES
(1, 1, 'user', 'user', 34545845, 1, '2020-12-01', 222, 'livre', 'sa7a lik'),
(4, 1, 'Zchiheb', 'gzrngjzrngzj', 54785, 1, '0000-00-00', 200, 'traiter', 'true'),
(5, 1, 'gggg', 'gggg', 54236563, 1, '0000-00-00', 200, 'traiter', 'true'),
(8, 1, 'dafa', 'vnjn@hddd.com', 54785695, 1, '0000-00-00', 200, 'traiter', 'true'),
(9, 1, 'azizz', 'azizzdgsjs@gmail.ciÃ¹', 54876596, 1, '0000-00-00', 200, 'traiter', 'true');

-- --------------------------------------------------------

--
-- Structure de la table `livreur`
--

CREATE TABLE IF NOT EXISTS `livreur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cin` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `etat` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `livreur`
--

INSERT INTO `livreur` (`id`, `cin`, `nom`, `prenom`, `email`, `etat`) VALUES
(7, 145236, 'zou', 'chiheb', 'bhvhjbj', 'libre'),
(10, 45876, 'zouaoui', 'chihheb', 'chihebzouaouiÃ gmail.com', 'libre');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
