-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 30 déc. 2022 à 19:42
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Structure de la table `add_student`
--
-- Création : lun. 19 déc. 2022 à 10:38
--

CREATE TABLE `add_student` (
  `id` int(11) NOT NULL,
  `student` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `rest` int(11) NOT NULL,
  `resolve` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `old` int(11) NOT NULL,
  `classroom` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS POUR LA TABLE `add_student`:
--

--
-- Déchargement des données de la table `add_student`
--

INSERT INTO `add_student` (`id`, `student`, `price`, `rest`, `resolve`, `year`, `old`, `classroom`) VALUES
(1, 1, 20000, 0, 'Inscrit', 2022, 8, 'CP'),
(2, 2, 20000, 0, 'Inscrit', 2022, 8, 'CM2'),
(4, 4, 26000, 0, 'Inscrit', 2022, 8, 'CM2'),
(5, 5, 26000, 0, 'Inscrit', 2022, 8, 'CM1'),
(6, 6, 22000, 0, 'Inscrit', 2022, 8, 'CE2'),
(7, 7, 26000, 0, 'Inscrit', 2022, 8, 'CM1'),
(8, 8, 22000, 0, 'Inscrit', 2022, 8, 'CE1'),
(9, 9, 22000, 0, 'Inscrit', 2022, 8, 'CE1'),
(10, 10, 20000, 0, 'Inscrit', 2022, 8, 'CP'),
(11, 11, 22000, 0, 'Inscrit', 2022, 8, 'CE2'),
(12, 12, 20000, 0, 'Inscrit', 2022, 8, 'Sil'),
(13, 13, 20000, 0, 'Inscrit', 2022, 8, 'Sil'),
(14, 14, 26000, 0, 'Inscrit', 2022, 8, 'Cm1'),
(15, 16, 20000, 0, 'Inscrit', 2022, 8, 'sil'),
(16, 17, 20000, 0, 'Inscrit', 2022, 8, 'CP'),
(17, 18, 20000, 0, 'Inscrit', 2022, 8, 'CP'),
(18, 19, 22000, 0, 'Inscrit', 2022, 8, 'CE1');

-- --------------------------------------------------------

--
-- Structure de la table `course`
--
-- Création : dim. 18 déc. 2022 à 10:37
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `classroom` varchar(5) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS POUR LA TABLE `course`:
--

--
-- Déchargement des données de la table `course`
--

INSERT INTO `course` (`id`, `classroom`, `level`) VALUES
(1, 'SIL', 1),
(2, 'CP', 1),
(3, 'CE1', 2),
(4, 'CE2', 2),
(5, 'CM1', 3),
(6, 'CM2', 3);

-- --------------------------------------------------------

--
-- Structure de la table `level`
--
-- Création : dim. 18 déc. 2022 à 10:31
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `price_i` int(11) NOT NULL,
  `price_school` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS POUR LA TABLE `level`:
--

--
-- Déchargement des données de la table `level`
--

INSERT INTO `level` (`id`, `number`, `price_i`, `price_school`) VALUES
(1, 1, 20000, 70000),
(2, 2, 22000, 75000),
(3, 3, 26000, 85000);

-- --------------------------------------------------------

--
-- Structure de la table `matter`
--
-- Création : dim. 25 déc. 2022 à 20:18
--

CREATE TABLE `matter` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS POUR LA TABLE `matter`:
--

--
-- Déchargement des données de la table `matter`
--

INSERT INTO `matter` (`id`, `name`) VALUES
(1, 'Communiquer en Français '),
(2, 'Communiquer en Anglais'),
(3, 'Pratiquer au moins une Langue nationale '),
(4, 'Utiliser les notions de base en Mathématiques'),
(5, 'Utiliser les notions de base en Sciences et technologie'),
(6, 'Pratiquer les valeurs sociales'),
(7, 'Education à la citoyenneté  '),
(8, 'Démontrer son esprit d\'autonomie et d\'entreprenariat '),
(9, 'Communiquer en TIC'),
(10, 'Activités physiques et sportives'),
(11, 'Activités artistiques');

-- --------------------------------------------------------

--
-- Structure de la table `matter_course`
--
-- Création : dim. 25 déc. 2022 à 21:01
--

CREATE TABLE `matter_course` (
  `id` int(11) NOT NULL,
  `matter` int(11) NOT NULL,
  `course` int(11) NOT NULL,
  `oral` int(11) NOT NULL,
  `ecrit` int(11) NOT NULL,
  `pratique` int(11) DEFAULT NULL,
  `savoir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS POUR LA TABLE `matter_course`:
--

-- --------------------------------------------------------

--
-- Structure de la table `payment_of_school`
--
-- Création : sam. 17 déc. 2022 à 21:29
--

CREATE TABLE `payment_of_school` (
  `id` int(11) NOT NULL,
  `student` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `rest` int(11) NOT NULL,
  `resolve` varchar(255) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS POUR LA TABLE `payment_of_school`:
--

--
-- Déchargement des données de la table `payment_of_school`
--

INSERT INTO `payment_of_school` (`id`, `student`, `price`, `rest`, `resolve`, `year`) VALUES
(1, 1, 70000, 0, 'Scolarisé', 2022),
(2, 6, 75000, 0, 'Scolarisé', 2022),
(3, 2, 76000, 9000, 'Pas encore scolarisé', 2022),
(4, 7, 70000, 15000, 'Pas encore scolarisé', 2022),
(5, 3, 79000, 6000, 'Pas encore Scolarisé', 2022),
(6, 4, 85000, 0, 'Scolarisé', 2022),
(7, 5, 76000, 9000, 'Pas encore scolarisé', 2022),
(8, 8, 19000, 56000, 'Pas encore Scolarisé', 2022),
(9, 10, 25000, 45000, 'Pas encore Scolarisé', 2022),
(10, 9, 74500, 500, 'Pas encore scolarisé', 2022),
(11, 11, 43000, 32000, 'Pas encore Scolarisé', 2022),
(12, 13, 23000, 47000, 'Pas encore Scolarisé', 2022),
(13, 17, 70000, 0, 'Scolarisé', 2022),
(14, 19, 5000, 70000, 'Pas encore Scolarisé', 2022),
(15, 16, 8000, 62000, 'Pas encore Scolarisé', 2022),
(16, 18, 12000, 58000, 'Pas encore Scolarisé', 2022);

-- --------------------------------------------------------

--
-- Structure de la table `report_cart`
--
-- Création : dim. 18 déc. 2022 à 09:44
--

CREATE TABLE `report_cart` (
  `id` int(11) NOT NULL,
  `student` int(11) NOT NULL,
  `matter` int(11) NOT NULL,
  `oral` int(11) NOT NULL,
  `ecrit` int(11) NOT NULL,
  `prat` int(11) NOT NULL,
  `savoir` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS POUR LA TABLE `report_cart`:
--

-- --------------------------------------------------------

--
-- Structure de la table `student`
--
-- Création : dim. 18 déc. 2022 à 09:50
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `gender` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS POUR LA TABLE `student`:
--

--
-- Déchargement des données de la table `student`
--

INSERT INTO `student` (`id`, `name`, `surname`, `gender`) VALUES
(1, 'ROMEO T', 'YVES D', 'G'),
(2, 'GEREMY', 'THADE', 'G'),
(4, 'TALLA', 'BONE', 'G'),
(5, 'VANDAME', 'JEAN CLAUDE', 'G'),
(6, 'VANDAME2', 'CLAUDE', 'G'),
(7, 'JACQUES', 'CODE', 'G'),
(8, 'AMBETINDE', 'GRACE CHANEVY', 'F'),
(9, 'TDJON', 'ARIANE', 'F'),
(10, 'LETONO', 'LUCIEN', 'G'),
(11, 'ONDOUA', 'ABONDO', 'G'),
(12, 'Vincent', 'Aboubacar', 'G'),
(13, 'Tatiana', 'Benguigui', 'F'),
(14, 'Zongang', 'Fotso jurice', 'G'),
(16, 'geremy2', 'BILL', 'G'),
(17, 'MENGUE', 'LUCIE', 'G'),
(18, 'BOOM', 'PIERRE', 'G'),
(19, 'TCHIKAME', 'ISIS', 'F');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `add_student`
--
ALTER TABLE `add_student`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `classroom` (`classroom`);

--
-- Index pour la table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `matter`
--
ALTER TABLE `matter`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `matter_course`
--
ALTER TABLE `matter_course`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `payment_of_school`
--
ALTER TABLE `payment_of_school`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `add_student`
--
ALTER TABLE `add_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `matter`
--
ALTER TABLE `matter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT pour la table `matter_course`
--
ALTER TABLE `matter_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `payment_of_school`
--
ALTER TABLE `payment_of_school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;


--
-- Métadonnées
--
USE `phpmyadmin`;

--
-- Métadonnées pour la table add_student
--

--
-- Métadonnées pour la table course
--

--
-- Métadonnées pour la table level
--

--
-- Métadonnées pour la table matter
--

--
-- Métadonnées pour la table matter_course
--

--
-- Métadonnées pour la table payment_of_school
--

--
-- Métadonnées pour la table report_cart
--

--
-- Métadonnées pour la table student
--

--
-- Métadonnées pour la base de données test
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
