-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 24 juin 2024 à 09:40
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bd_davimage_prod`
--

-- --------------------------------------------------------

--
-- Structure de la table `adventures`
--

CREATE TABLE `adventures` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` mediumtext NOT NULL,
  `place` varchar(255) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `image_1` varchar(255) NOT NULL,
  `image_2` varchar(255) NOT NULL,
  `image_3` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `event` int(11) NOT NULL,
  `booking_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `cultures`
--

CREATE TABLE `cultures` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` mediumtext NOT NULL,
  `place` varchar(255) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `image_1` varchar(255) NOT NULL,
  `image_2` varchar(255) NOT NULL,
  `image_3` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `discoveries`
--

CREATE TABLE `discoveries` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` mediumtext NOT NULL,
  `place` varchar(255) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `image_1` varchar(255) NOT NULL,
  `image_2` varchar(255) NOT NULL,
  `image_3` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `discoveries`
--

INSERT INTO `discoveries` (`id`, `title`, `details`, `place`, `start_date`, `end_date`, `image_1`, `image_2`, `image_3`, `status`) VALUES
(1, 'Mémorial génocides de Kigali', 'Visite éducative pour comprendre l\'histoire récente et rendre hommage aux victimes.', 'Rwanda', '2024-07-10', '2024-07-12', '../../img/bg-img/Kigali Genocide Memorial Amphitheatre designed by Selim Senin.webp', '../../img/bg-img/KIGALI GENOCIDE MEMORIAL.webp', '../../img/bg-img/Kigali Genocide Memorial (1).webp', 0),
(2, 'Musée vivant de Bujumbura', 'Découverte de la faune locale, des pratiques culturelles et des artefacts historiques.', 'Burundi', '2024-07-31', '2024-08-03', '../../img/bg-img/Bujumbura _ national capital, Burundi.webp', '../../img/bg-img/Monkey - Burundi, Central Africa  March 2014.webp', '../../img/bg-img/Central African Republic – Caravanserai 230.webp', 0);

-- --------------------------------------------------------

--
-- Structure de la table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `gallery`
--

INSERT INTO `gallery` (`id`, `category`, `image`, `link`) VALUES
(1, 'nature', '../../img/bg-img/In His Masterpieces.webp', 'https://www.instagram.com/davimage7/'),
(2, 'nature', '../../img/bg-img/da50e47f-7bfc-4c26-a59d-49c94becd10e.webp', 'https://www.instagram.com/davimage7/'),
(3, 'nature', '../../img/bg-img/5 Classic Retro Cinematic LUTS for Video, Presets for Video, Presets for Final Cut Pro, LUTS for Final Cut Pro,Premiere Pro, Davinci Resolve.webp', 'https://www.instagram.com/davimage7/'),
(4, 'nature', '../../img/bg-img/4e8e8bb3-c59e-4507-ad3e-20b9e102f50c.webp', 'https://www.instagram.com/davimage7/'),
(5, 'culture', '../../img/bg-img/All About Mama Lishes and the Urban African Street Food Scene.webp', 'https://www.instagram.com/davimage7/'),
(6, 'culture', '../../img/bg-img/AFROPUNK Fest Brooklyn 2017 Beauty Moments You Have To See  _ Essence.webp', 'https://www.instagram.com/davimage7/'),
(7, 'culture', '../../img/bg-img/AfroPick.webp', 'https://www.instagram.com/davimage7/'),
(8, 'culture', '../../img/bg-img/A Guide to Cartagena.webp', 'https://www.instagram.com/davimage7/'),
(9, 'culture', '../../img/bg-img/771c3c19-8334-4731-8dbe-821a035c7348.webp', 'https://www.instagram.com/davimage7/'),
(10, 'culture', '../../img/bg-img/4e8e8bb3-c59e-4507-ad3e-20b9e102f50c.webp', 'https://www.instagram.com/davimage7/'),
(11, 'videos', '../../img/bg-img/téléchargement (21).webp', 'https://www.google.com/search?q=youtube&sca_esv=69cfad268fdf2bdc&sca_upv=1&rlz=1C1SJWC_frBI1071BI1074&source=lnms&fbs=AEQNm0CbCVgAZ5mWEJDg6aoPVcBgWJkeaSBjnexh07HhnqtPCG1bNWBnNiA-IMELsK2AdTS3sjcFgTRuJeuZ1IitI_XA1cBox8SvSLZQBagjvyJgDegpUfQrAgXRalKkfboOigyJ1p74dGw8VO-QQKgFpI_dqYRasKIUVuEqkZyR9wo3Q37yW45b0gw0fKN5tbDtvrwMAQTS&sa=X&ved=2ahUKEwiwj-7FkfCGAxUp9QIHHes2DbcQ0pQJegQIAhAC&biw=1366&bih=645&dpr=1#');

-- --------------------------------------------------------

--
-- Structure de la table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `permission` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `userimage` varchar(255) NOT NULL DEFAULT 'but.jpg',
  `status` int(11) NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tblusers`
--

INSERT INTO `tblusers` (`id`, `name`, `lastname`, `username`, `email`, `sex`, `permission`, `password`, `mobile`, `userimage`, `status`, `id_number`, `Address`) VALUES
(15, 'Josh', 'Williamee  ', 'admin', 'john@gmail.com', 'Homme', 'Super Admin', '81dc9bdb52d04dc20036dbd8313ed055', 770546590, 'admin.jpg', 1, '65423', 'Bujumbura'),
(36, 'Kapamba', 'Muteule', 'Mute', 'kapambamuteule@gmail.com', 'Homme', 'Gérant salle', '827ccb0eea8a706c4c34a16891f84e7b', 987678045, 'mute.jpg', 1, '', ''),
(38, 'Barthelemy', 'Kisusuthi', 'Tom', 'tom@gmail.com', 'Homme', 'Gérant salle', '81dc9bdb52d04dc20036dbd8313ed055', 987678045, 'illustration-3d-amusante-arbitre-americain.jpg', 1, 'BaryvfB63238', 'Goma, Q.Majengo'),
(39, 'Mwenge', 'Vanessa', 'Van', 'van@gmail.com', 'Femme', 'Gérant salle', '81dc9bdb52d04dc20036dbd8313ed055', 987453679, 'happy-student-610351.jpg', 1, 'MweHDZF88319', 'Bujumbura');

-- --------------------------------------------------------

--
-- Structure de la table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `name` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `lastname` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `userEmail` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `logout` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `userlog`
--

INSERT INTO `userlog` (`id`, `username`, `name`, `lastname`, `userEmail`, `userip`, `loginTime`, `logout`, `status`) VALUES
(0, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '0000-00-00 00:00:00', NULL, 1),
(46, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '2023-07-06 13:32:39', NULL, 1),
(47, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3132372e302e302e3100000000000000, '2023-07-06 14:09:45', NULL, 1),
(48, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3132372e302e302e3100000000000000, '2023-07-07 09:34:04', '07-07-2023 11:56:32 AM', 1),
(49, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3132372e302e302e3100000000000000, '2023-07-07 09:56:48', '07-07-2023 01:23:57 PM', 1),
(50, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3132372e302e302e3100000000000000, '2023-07-07 20:38:31', NULL, 1),
(51, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '2023-07-07 20:48:30', '08-07-2023 12:06:48 AM', 1),
(52, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3132372e302e302e3100000000000000, '2023-07-07 22:07:02', '08-07-2023 12:08:11 AM', 1),
(53, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3132372e302e302e3100000000000000, '2023-07-07 22:10:15', '08-07-2023 12:11:00 AM', 1),
(54, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3132372e302e302e3100000000000000, '2023-07-07 22:11:02', NULL, 1),
(55, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3132372e302e302e3100000000000000, '2023-07-07 22:11:59', '08-07-2023 12:21:02 AM', 1),
(56, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3132372e302e302e3100000000000000, '2023-07-07 22:21:08', NULL, 1),
(57, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '2023-07-07 22:27:45', '08-07-2023 01:10:01 AM', 1),
(58, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3132372e302e302e3100000000000000, '2023-07-07 23:10:14', NULL, 1),
(59, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '2023-07-07 23:19:30', NULL, 1),
(60, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '2023-07-07 23:20:10', '08-07-2023 01:20:49 AM', 1),
(61, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '2023-07-08 07:17:20', NULL, 1),
(62, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '2023-07-08 07:19:23', '08-07-2023 12:39:27 PM', 1),
(63, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '2023-07-08 10:41:36', '08-07-2023 12:52:49 PM', 1),
(64, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '2023-07-08 11:05:09', '08-07-2023 01:05:16 PM', 1),
(65, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3132372e302e302e3100000000000000, '2023-07-13 06:23:02', NULL, 1),
(66, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '2023-07-13 06:28:14', '13-07-2023 08:34:37 AM', 1),
(67, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3132372e302e302e3100000000000000, '2023-07-13 06:36:28', NULL, 1),
(68, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3132372e302e302e3100000000000000, '2023-07-13 06:39:43', '13-07-2023 08:39:50 AM', 1),
(69, 'elka@biu.bi', 'Intruision', NULL, 'Utilisateur non enregistré', 0x3a3a3100000000000000000000000000, '2023-07-16 20:52:39', NULL, 0),
(70, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '2023-07-17 10:01:32', NULL, 1),
(71, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '2023-07-17 10:09:34', '17-07-2023 10:09:41 AM', 1),
(72, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '2023-07-17 10:09:47', '17-07-2023 10:09:55 AM', 1),
(73, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '2023-07-17 10:10:04', '17-07-2023 10:13:41 AM', 1),
(74, 'admin', 'Intruision', NULL, 'Utilisateur non enregistré', 0x3a3a3100000000000000000000000000, '2023-07-17 17:10:13', NULL, 0),
(75, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '2023-07-17 17:11:02', '17-07-2023 05:27:40 PM', 1),
(76, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '2023-07-19 07:19:02', '17-08-2023 11:28:51 PM', 1),
(77, 'Mute', 'Intruision', NULL, 'Utilisateur non enregistré', 0x3a3a3100000000000000000000000000, '2023-07-19 07:41:57', NULL, 0),
(78, 'Mute', 'Kapamba', 'Muteule', 'kapambamuteule@gmail.com', 0x3a3a3100000000000000000000000000, '2023-07-19 07:42:58', '19-07-2023 07:44:10 AM', 1),
(79, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '0000-00-00 00:00:00', '18-08-2023 01:25:54 PM', 1),
(80, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3137322e32302e31302e313100000000, '0000-00-00 00:00:00', NULL, 1),
(81, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '0000-00-00 00:00:00', '18-08-2023 04:07:38 PM', 1),
(82, 'tom', 'Barthelemy', 'Kisusuthi', 'tom@gmail.com', 0x3137322e32302e31302e390000000000, '0000-00-00 00:00:00', '18-08-2023 04:06:08 PM', 1),
(83, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '0000-00-00 00:00:00', '18-08-2023 05:21:18 PM', 1),
(84, 'tom', 'Barthelemy', 'Kisusuthi', 'tom@gmail.com', 0x3137322e32302e31302e390000000000, '0000-00-00 00:00:00', NULL, 1),
(85, 'tom', 'Barthelemy', 'Kisusuthi', 'tom@gmail.com', 0x3137322e32302e31302e390000000000, '0000-00-00 00:00:00', '18-08-2023 05:29:53 PM', 1),
(86, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '0000-00-00 00:00:00', '21-08-2023 02:58:34 PM', 1),
(87, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '0000-00-00 00:00:00', NULL, 1),
(88, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '0000-00-00 00:00:00', '21-08-2023 07:09:55 PM', 1),
(89, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '0000-00-00 00:00:00', NULL, 1),
(90, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '0000-00-00 00:00:00', NULL, 1),
(91, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '0000-00-00 00:00:00', '06-09-2023 09:44:04 PM', 1),
(92, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '0000-00-00 00:00:00', NULL, 1),
(93, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '0000-00-00 00:00:00', NULL, 1),
(94, 'admin', 'Josh', 'Williamee  ', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '0000-00-00 00:00:00', '22-06-2024 02:01:18 PM', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adventures`
--
ALTER TABLE `adventures`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cultures`
--
ALTER TABLE `cultures`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `discoveries`
--
ALTER TABLE `discoveries`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adventures`
--
ALTER TABLE `adventures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cultures`
--
ALTER TABLE `cultures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `discoveries`
--
ALTER TABLE `discoveries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
