-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2019 at 02:18 AM
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
-- Table structure for table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `pid` int(20) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `descr` text NOT NULL,
  `prix` int(10) NOT NULL,
  `fichier` text NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`pid`, `nom`, `descr`, `prix`, `fichier`) VALUES
(1, 'French Burger', 'Descr : Tasty burger ', 28, 'images/food5.jpg'),
(2, 'Crepe', 'Descr : Crepe milky ', 16, 'images/milky.jpg'),
(3, 'Jwejem', 'Descr : jwejem ', 18, 'images/jwejem.jpg'),
(4, 'Bouchees de saumon ', 'Descr:Bouchees cremeuses \r\nau curcuma', 30, 'images/Bouchees.png'),
(5, 'Riz Pilaf', 'Descr : Riz pilaf de la mer', 22, 'images/riz_pilaf_de_la_mer.webp'),
(6, 'Filets de sole', 'Descr : Filets de sole panes', 24, 'images/filets.png'),
(7, 'Chaudree ', ' Descr : Chaudree style Saint-Jacques', 25, 'images/Chaudree.png'),
(8, 'Chive Pasta', '', 30, 'images/chive-pasta.jpg'),
(9, 'Salade', 'Descr : Healthy diets', 15, 'images/healthy-diets.jpg'),
(10, 'Iscalope', 'Descr : Iscalope panee', 20, 'images/lunch-1.jpg'),
(11, 'Fruits de mer', '', 35, 'images/lunch-5.jpg'),
(12, 'Fish', '', 26, 'images/food7.jpg'),
(13, 'Pasta', '', 24, 'images/dinner-2.jpg'),
(14, 'Pain cake ', '', 27, 'images/dessert-1.jpg'),
(15, 'Cake au chocolat', '', 20, 'images/des2.jpg'),
(16, 'Pizza', 'Descr : Pizza ', 29, 'images/pizza_4_saisons.jpg'),
(17, 'Salade de fruits', 'desc : Salade de fruits au miel', 24, 'images/salade_de_fruits_au_miet.jpg'),
(18, 'Fried chicken', '', 25, 'images/fried-chicken.jpg'),
(19, 'Hod dog', '', 25, 'images/kotdog.jfif'),
(20, 'Steak', 'Descr: Steak et frite et souce', 27, 'images/image.jpeg'),
(21, 'Tiramisu', 'Desc : Tiramisu', 20, 'images/Entremets-tiramisu57.jpg'),
(22, 'Flan', 'Descr : Flan creme caramel', 17, 'images/Creme-CaramelWebsite-Thumbnail1.webp'),
(23, 'Steak', 'Desc: Steak avec souce', 25, 'images/food4.png'),
(24, 'Poulet basquaise', 'Desc : Poulet basquaise avec riz', 28, 'images/poulet_basquaise.jpg'),
(25, 'Soup and rice', 'Desc : Chiken soup and rice', 23, 'images/chicken-and-rice-soup-500x500.jpg'),
(26, 'Soup', 'Desc : Chicken noodle soup', 25, 'images/chicken_noodle_soup.webp'),
(27, 'Quiche lorraine', 'Desc : Une tarte garnie', 18, 'images/quiche-modifié.jpg'),
(28, 'Bœuf bourguignon', 'Desc: Un plat familial traditionnel', 24, 'images/boeuf-modif-1.jpg'),
(29, 'Blanquette de veau', 'Desc: Un plat familial traditionnel', 27, 'images/blanquette-modif-1.jpg'),
(30, 'Cuisses de grenouill', 'Descr:  Frites avec un peu d’oignon', 35, 'images/cuisses-de-grenouilles.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
