-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 02 juil. 2021 à 13:03
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_fin_etude`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `slug` varchar(225) NOT NULL,
  `details` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL,
  `description` text NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image` text NOT NULL,
  `images` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `name`, `slug`, `details`, `price`, `description`, `featured`, `date`, `image`, `images`) VALUES
(1, 'Samsung-Galaxy-S20-FE-1 ', 'samsung', 'Samsung-Galaxy-S20-FE-1, 12 pouce Original', '60000', 'Samsung-Galaxy-S20-FE-1', 1, '2021-07-02 11:43:07', 'images/Samsung-Galaxy-S20-FE-1.png', 'images/Samsung-Galaxy-S20-FE-1.png'),
(2, 'Clavier Azerty One Touch', 'clavier', 'Clavier Azerty One Touch Retro Lumineux', '100000', 'Clavier Azerty One Touch Retro Lumineux', 1, '2021-07-02 11:42:52', 'images/mini-clavier-bluetooth.png', 'images/mini-clavier-bluetooth.png'),
(3, 'Iphone X 64GO Casi Neuf', 'iphone-x-64', 'Iphone X 64GO Casi Neuf, noir original', '210000', 'Iphone X 64GO Casi Neuf, noir original', 1, '2021-07-02 11:39:22', 'images/iphone-x-final.png', 'images/iphone-x-details.png'),
(4, 'Congélateur professionnel inox avec couvercle pour plan de travail - 220 L', 'congelateur', 'Description Congélateur professionnel Carrosserie aspect inox Dessus couvercle en acier inox AISI 304 pour plan de travail Cuve intérieure', '310000', 'Description Congélateur professionnel Carrosserie aspect inox Dessus couvercle en acier inox AISI 304 pour plan de travail Cuve intérieure', 1, '2021-07-02 11:57:14', 'images/congelateur.jpg', 'images/congelateur-2.jpg'),
(5, 'ferre a repasser vapeur 1800w', 'ferre a repasser ', 'Général, Type de produit, Fer à vapeur, Couleur, Bleu, Fonctions du fer à repasser, Semelle non collante, Contenance d\'un réservoir d\'eau pou', '20000', 'Général, Type de produit, Fer à vapeur, Couleur, Bleu, Fonctions du fer à repasser, Semelle non collante, Contenance d\'un réservoir d\'eau pou', 1, '2021-07-02 12:16:53', 'images/ferre.jpg', 'images/ferre3.jpg'),
(6, 'une laverie automatique pour le lavage et le sechage', 'une laverie', 'La laverie est le plus souvent une laverie automatique, c\'est-à-dire en libre-service. Elle consiste à mettre à disposition du public des machines à laver le linge, des essoreuses centrifuges', '800000', 'La laverie est le plus souvent une laverie automatique, c\'est-à-dire en libre-service. Elle consiste à mettre à disposition du public des machines à laver le linge, des essoreuses centrifuges', 1, '2021-07-02 13:03:05', 'images/laverieauto.jpg', 'images/lav.jpg'),
(7, 'Samsung Four Micro-Onde - (Smart Oven) -230V-50Hz - 32L - Gris/Noir', 'micro onde', 'Cuisez vos aliments avec précision grâce à la technologie Smart Multi-Sensor qui lit la température de surface des aliments ', '178000', 'Cuisez vos aliments avec précision grâce à la technologie Smart Multi-Sensor qui lit la température de surface des aliments  ', 1, '2021-07-02 12:34:01', 'images/1.jpg', 'images/2.jpg'),
(8, 'CLIMATISEUR SPLIT SAMSUNG 3CV MAX COOL R410 AR24MRFQAW/AFHCFQAWK\r\n', 'climatiseur', 'Puissance : 3CV, Capacité (refroidissement, Btu / hr) 5, Capacité (refroidissement, kW) 4, EER (refroidissement, W / W) 880 x 793 x 310', '340000', 'Puissance : 3CV, Capacité (refroidissement, Btu / hr) 5, Capacité (refroidissement, kW) 4, EER (refroidissement, W / W) 880 x 793 x 310', 1, '2021-07-02 12:46:37', 'images/clim.jpg', 'images/split.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `slug` varchar(225) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `category_product`
--

DROP TABLE IF EXISTS `category_product`;
CREATE TABLE IF NOT EXISTS `category_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(225) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `city` varchar(225) NOT NULL,
  `province` varchar(225) NOT NULL,
  `postalecode` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `name_on_card` varchar(225) NOT NULL,
  `discount` varchar(225) NOT NULL,
  `discount_code` varchar(225) NOT NULL,
  `subtotal` varchar(225) NOT NULL,
  `tax` varchar(255) NOT NULL,
  `tolat` varchar(225) NOT NULL,
  `gateway` varchar(225) NOT NULL,
  `shipped` varchar(225) NOT NULL,
  `error` varchar(225) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `order_product`
--

DROP TABLE IF EXISTS `order_product`;
CREATE TABLE IF NOT EXISTS `order_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(225) NOT NULL,
  `e_mail` varchar(225) NOT NULL,
  `mot_de_passe` varchar(225) NOT NULL,
  `numero` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `e_mail`, `mot_de_passe`, `numero`) VALUES
(1, 'zokou', 'gbeli', 'zokougbeli55@gmail.com', '123456789', 999999999),
(2, 'kone', 'davilla', 'konedavilla66@gamil.com', '77833738373', 2147483647),
(3, 'kone', 'hhjjkkk', 'konedavilla66@gamil.com', '77833738373', 2147483647),
(4, 'kone', 'hhhhhjhh', 'konedavilla66@gamil.com', '77833738373', 2147483647),
(5, 'kone', 'hhhhhjhh', 'konedavilla66@gamil.com', '77833738373', 2147483647),
(6, 'hrfrytf', 'xdt', 'konedavilla66@gamil.com', '77833738373', 2147483647),
(7, 'hrfrytf', 'xdt', 'konedavilla66@gamil.com', '77833738373', 2147483647),
(8, 'hrfrytf', 'xdt', 'konedavilla66@gamil.com', '77833738373', 2147483647),
(9, 'hrfrytf', 'vutr', 'konedavilla66@gamil.com', '77833738373', 32456),
(10, 'hrfrytf', 'vutr', 'konedavilla66@gamil.com', '77833738373', 32456),
(11, 'hrtf', 'cgr', 'konedavilla66@gamil.com', '77833738373', 234567),
(12, 'hrtf', 'cgr', 'konedavilla66@gamil.com', '77833738373', 234567),
(13, 'Karim', 'Kouyate', 'kouyatekarim02@gmail.com', 'kkstar34', 5507478);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
