-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 22 oct. 2022 à 14:39
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fararano`
--
CREATE DATABASE IF NOT EXISTS `fararano` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `fararano`;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `introduction` text NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `name`, `introduction`, `content`, `created_at`, `image`) VALUES
(157, 'Les divers types de riz produit à Madagascar.', 'Nantenaina', 'Les variétés Vary Malady et Rojofotsy du lac  Alaotra, Madagascar', 'Vary Malady : riz rouge foncé, largement adaptée à \r\nAlaotra Mangoro. \r\nGoût habituellement apprécié par les consommateurs:\r\n• pour sa consistance\r\n• saveur sucrée et gras, \r\n• richesse en oligo-éléments, dont Cu et Zn. \r\nDurant le siècle dernier, faible accessibilité au marché \r\nlocal et surtout international : Vary Malady dépréciée et \r\ndéclassée par son caryopse rouge, généralement opaque \r\net de format demi-rond à demi-long à l’avantage des riz \r\nblancs, longs et translucides (surtout Makalioka).\r\nRojofotsy : riz blanc, productivité plus grande en bonne \r\nmaîtrise d’eau à Alaotra Mangoro (Système de Riziculture \r\nAmélioré ou SRA). \r\nGoût:\r\n• Consistant (fibres)\r\n• sucré et gras\r\n• richesse en oligo-éléments, dont Fe, Zn. \r\nDurant le siècle dernier, meilleure accessibilité au \r\nmarché local : caryopse blanc, mi-translucide, de format \r\ndemi-long.', '2022-10-22 07:19:38', 'images_uploads/istockphoto-547496528-612x612.jpg'),
(154, 'legumes', 'legumes', 'legumes', '...legumes', '2022-10-21 11:12:01', 'images_uploads/istockphoto-1128687123-612x612.jpg'),
(155, 'Les fruits et légumes]', 'Christinah Andrianina', 'Pays du maraicher, Antsirabe est le paradis des fruits et des légumes (surtout les pommes de terre et les carottes)', 'Pays du maraicher, Antsirabe est le paradis des fruits et des légumes (surtout les pommes de terre et les carottes) Les gens en proposent aux stationnements de taxi-brousse et devant les restaurants que les voyageurs prennent souvent d’assaut. Mais je trouve que les plus beaux légumes et fruits de ce coin sont ceux qu’on achète au bord des routes. Je ne sais pas pourquoi, mais j’aime bien voir ces étals. Je les trouve…folkloriques. Certes, les gens usent de trucs en tout genre pour dissimuler des carottes pourries en-dessous des plus belles, mais ils sont là dès l’aube (avec le froid légendaire de cette partie-là du pays) alors je ne m’en fais pas plus que ça. Et puis, les gens sont tellement adorables quand on s’arrête à leur niveau. Ils se sont donné le mot pour que personne n’approche des voitures qui s’arrêtent. Du coup, c’est super agréable de ne pas avoir droit à des gens qui vous mettent leur marchandises carrément dans le nez pour que vous achetiez. Les marchandages se passent donc dans le calme est c’est toujours très agréable.', '2022-10-21 13:00:08', 'images_uploads/lc3a9gumes.jpg'),
(156, 'Vanille de Madagascar', 'Nantenaina Falimanana', 'Environ 80 % de la vanille produite dans le monde provient de la Grande Ile. Depuis deux ans, les cours s’envolent, et la qualité s’étiole.', 'Vous pouvez partager un article en cliquant sur les icônes de partage en haut à droite de celui-ci. \r\nLa reproduction totale ou partielle d’un article, sans l’autorisation écrite et préalable du Monde, est strictement interdite. \r\nPour plus d’informations, consultez nos conditions générales de vente. \r\nPour toute demande d’autorisation, contactez droitsdauteur@lemonde.fr. \r\nEn tant qu’abonné, vous pouvez offrir jusqu’à cinq articles par mois à l’un de vos proches grâce à la fonctionnalité « Offrir un article ». \r\n\r\nhttps://www.lemonde.fr/afrique/article/2017/01/05/vanille-de-madagascar-le-gout-amer-de-la-speculation_5058316_3212.html\r\n\r\nQuand on demande à Cécile Zafy si ses affaires tournent bien, elle joint les mains contre sa poitrine et rit aux éclats. « En deux ans, j’ai fait construire une nouvelle maison en bois et suis en train d’en bâtir une autre avec un sol en béton, s’émerveille-t-elle. J’ai aussi acheté une moto, une sono et on varie les repas quasiment tous les jours à la maison. J’ai jamais été aussi heureuse… » Agée de 56 ans, Cécile Zafy cultive de la vanille dans la Sava, une région qui produit 85 % de la vanille malgache, depuis 1984. Dans son village de Tsaratanana, situé à une trentaine de kilomètres au nord de la ville de Sambava, elle n’est pas la seule à se frotter les mains : la plupart des Mobylettes sont neuves, les immortelles 4L sont impeccables et dans la rue principale, la première maison à étages est en construction.', '2022-10-21 13:04:28', 'images_uploads/Article-vanille-accueil.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(200) NOT NULL,
  `name` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `phone` int(200) NOT NULL,
  `adress` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `firstname`, `phone`, `adress`, `email`, `password`, `created_at`, `role`) VALUES
(4, 'Andrianina', 'Christina', 344138566, 'lot vs 52 uter Avaratra Ankatso', 'andrianina0510@gmail.com', '$2y$10$MyWIGzxS/pUIWEC56HNRCOxDB/KrdzHM1hYLaTnPm40a0yNzKiiT2', '2022-10-21 12:25:10', ''),
(7, 'randriamihamintsoa', 'nantenaina', 347068264, 'lot ive 145 j ambodimita', 'falimananalim@gmail.com', '$2y$10$c/.dTyN26RGfTY9lRRf2MO9lwKMlPA1CpxTFRTNFg691f4.GUA59a', '2022-10-22 09:59:10', 'collecteur');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
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
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
