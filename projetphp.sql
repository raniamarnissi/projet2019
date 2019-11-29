-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2019 at 12:12 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projetphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `adresse` text NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `commende`
--

CREATE TABLE IF NOT EXISTS `commende` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `quantité_produit` int(25) NOT NULL,
  `odate` datetime NOT NULL,
  `quantite_client` int(11) NOT NULL,
  `statut_livraison` tinyint(1) NOT NULL,
  `vid` int(11) NOT NULL,
  PRIMARY KEY (`oid`),
  KEY `pid` (`pid`),
  KEY `cid` (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `employé`
--

CREATE TABLE IF NOT EXISTS `employé` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `phone` int(15) NOT NULL,
  `email` varchar(32) NOT NULL,
  `motpasse` varchar(32) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `panier`
--

CREATE TABLE IF NOT EXISTS `panier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `qté` int(25) NOT NULL,
  `statut` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`),
  KEY `pid` (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `desc` text NOT NULL,
  `prix` double(10,5) NOT NULL,
  `fichier` text NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`pid`, `nom`, `desc`, `prix`, `fichier`) VALUES
(1, 'French Burger', 'Tasty burger ', 28.00000, 'blog1.jpg'),
(2, 'Crepe', 'Crepe milky ', 16.00000, 'images/milky.jpg'),
(3, 'Jwejem', 'jwejem ', 18.00000, 'images/jwejem.jpg'),
(4, 'Couscous ', 'Couscous karnit', 20.00000, 'images/couscous.jpg'),
(5, 'Riz Pilaf', 'Riz  avec poisson', 22.00000, 'images/riz_pilaf.jpg'),
(6, 'Pizza', 'Pizza fromage', 24.00000, 'images/pizza.jpg'),
(7, 'Mosli au poulet', '', 20.00000, 'images/mosli_au_poulet.jpg'),
(8, 'Ojja Merguez', '', 16.00000, 'images/ojja_merguez.jpg'),
(9, 'Libanais', '', 10.00000, 'images/libanais.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vehicule`
--

CREATE TABLE IF NOT EXISTS `vehicule` (
  `vid` int(11) NOT NULL AUTO_INCREMENT,
  `statut` int(11) NOT NULL,
  `num_vehicule` varchar(30) NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
