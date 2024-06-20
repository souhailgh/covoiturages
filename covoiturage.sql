-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 21 mai 2024 à 20:57
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `covoiturage`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentaireclie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `ville`, `commentaireclie`, `created_at`, `updated_at`) VALUES
(12, 'rabat', 'QSDFGHJKL', '2024-05-20 18:41:34', '2024-05-20 18:41:34'),
(10, 'rabat', 'sdfghj', '2024-05-11 13:47:59', '2024-05-11 13:47:59'),
(11, 'kénitra', 'bonne service', '2024-05-11 13:48:34', '2024-05-11 13:48:34');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `nom`, `prenom`, `email`, `message`, `created_at`, `updated_at`) VALUES
(5, 'Maroune', 'el mimouni', 'marouane@gmail.com', 'Bonjour', '2024-05-09 10:00:44', '2024-05-09 10:00:44');

-- --------------------------------------------------------

--
-- Structure de la table `gestion_trajets`
--

DROP TABLE IF EXISTS `gestion_trajets`;
CREATE TABLE IF NOT EXISTS `gestion_trajets` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `départ` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arrivée` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heures` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chauffeur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `gestion_trajets`
--

INSERT INTO `gestion_trajets` (`id`, `départ`, `arrivée`, `prix`, `date`, `heures`, `chauffeur`, `created_at`, `updated_at`) VALUES
(10, 'Marrakech', 'Rabat', '250', '2024-05-22', '00:30', 'achraf', '2024-05-20 18:26:19', '2024-05-20 18:26:19'),
(11, 'Tanger', 'Ouarzazate', '1234', '2024-05-09', '23:40', 'ERTYU', '2024-05-20 18:37:00', '2024-05-20 18:37:00'),
(8, 'Fès', 'Tanger', '250', '2024-05-18', '14:11', 'achraf', '2024-05-09 10:11:55', '2024-05-09 10:11:55'),
(5, 'Casablanca', 'Marrakech', '250', '2024-04-30', '22:50', 'Imane', '2024-04-29 16:49:46', '2024-04-29 16:49:46');

-- --------------------------------------------------------

--
-- Structure de la table `logins`
--

DROP TABLE IF EXISTS `logins`;
CREATE TABLE IF NOT EXISTS `logins` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2024_04_01_200048_create_logins_table', 1),
(2, '2024_04_28_161146_create_gestion_trajets_table', 2),
(3, '2024_04_28_183154_create_gestion_trajets_table', 3),
(4, '2024_04_28_184052_create_gestion_trajets_table', 4),
(5, '2024_04_29_210408_create_réservers_table', 5),
(6, '2024_02_20_201422_create_contacts_table', 6),
(7, '2024_05_07_210439_create_commentaires_table', 7),
(8, '2024_05_07_225957_create_commentaires_table', 8);

-- --------------------------------------------------------

--
-- Structure de la table `registers`
--

DROP TABLE IF EXISTS `registers`;
CREATE TABLE IF NOT EXISTS `registers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `terms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `registers`
--

INSERT INTO `registers` (`id`, `username`, `email`, `password`, `terms`, `created_at`, `updated_at`) VALUES
(1, 'rajae', 'rajae@gmail.com', '$2y$10$QYs2RKUIizW0rN03y1OujOz9fJp0TWiYgxzL/2w0wZQ5VkEMKG3Wu', 'on', '2024-04-27 14:31:50', '2024-04-27 14:31:50');

-- --------------------------------------------------------

--
-- Structure de la table `réservers`
--

DROP TABLE IF EXISTS `réservers`;
CREATE TABLE IF NOT EXISTS `réservers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Téléphone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `départ` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arrivée` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heures` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chauffeur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `réservers`
--

INSERT INTO `réservers` (`id`, `nom`, `prenom`, `email`, `Téléphone`, `départ`, `arrivée`, `prix`, `date`, `heures`, `chauffeur`, `created_at`, `updated_at`) VALUES
(6, 'Rajae', 'el mimouni', 'zineb@gmail.com', '0616226243', 'Tanger', 'Ouarzazate', '1234', '2024-05-09', '23:40', 'ERTYU', '2024-05-20 18:40:59', '2024-05-20 18:40:59'),
(2, 'Maroune', 'el mimouni', 'elmimounirajae59@gmail.com', '0616226243', 'Casablanca', 'Marrakech', '250', '2024-04-30', '22:50', 'Imane', '2024-05-07 19:52:58', '2024-05-07 19:52:58'),
(5, 'zineb', 'zineb', 'rajae@gmail.com', '0616226243', 'Agadir', 'Rabat', '150', '2024-05-30', '14:13', 'hassan', '2024-05-11 13:46:59', '2024-05-11 13:46:59'),
(4, 'Rajae', 'el mimouni', 'zineb@gmail.com', '0616226243', 'Casablanca', 'Marrakech', '250', '2024-04-30', '22:50', 'Imane', '2024-05-09 09:58:26', '2024-05-09 09:58:26');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
