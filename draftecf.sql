-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 22 juil. 2024 à 22:59
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `draftecf`
--

-- --------------------------------------------------------

--
-- Structure de la table `animaux`
--

CREATE TABLE `animaux` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `espece` varchar(255) NOT NULL,
  `espece_latin` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `photos` varchar(255) NOT NULL,
  `photo_a` varchar(255) NOT NULL,
  `photo_b` varchar(255) NOT NULL,
  `photo_c` varchar(255) NOT NULL,
  `habitats_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `animaux`
--

INSERT INTO `animaux` (`id`, `nom`, `espece`, `espece_latin`, `description`, `photos`, `photo_a`, `photo_b`, `photo_c`, `habitats_id`) VALUES
(1, 'Zazou', 'Toucan à carène', 'Ramphastos sulfuratus', 'Le toucan à carène habite les forêts basses d\'Amérique centrale et la lisière des zones boisées. Il vit en groupes de 6 à 12 individus adultes qui s\'abritent dans des cavités creusées dans les arbres.', 'Zazou.jpg', 'Zazou_a.jpg', 'Zazou_b.jpg', 'Zazou_c.jpg', 2),
(2, 'Nigel', 'Koala', 'Phascolarctos cinereus', 'Le koala est étroitement lié à l\'eucalyptus ou gommier, dont il ne mange que les feuilles de certaines espèces. Après avoir été chassé massivement pour sa fourrure, il est aujourd\'hui principalement menacé par la fragilité et le recul de son biotope.', 'Nigel.jpg', 'Nigel_a.jpg', 'Nigel_b.jpg', 'Nigel_c.jpg', 2),
(3, 'Aladar', 'Iguane vert', 'Iguana iguana', 'L\'iguane est un grand lézard arboricole originaire d\'Amérique du sud et centrale. Il prend diverses couleurs selon sa région d\'origine, sa teinte pouvant prendre différents tons de vert, mais aussi être rosée, bleuâtre ou orangée. ', 'Aladar.jpg', 'Aladar_a.jpg', 'Aladar_b.jpg', 'Aladar_c.jpg', 2),
(4, 'Shere Khan', 'Tigre', 'Tigris tigris', 'Également appelé tigre royal du Bengale, il est plus léger et moins imposant que le tigre de Sibérie. Sa population, notamment grâce aux actions de protection du gouvernement indien, est en augmentation depuis plusieurs années.', 'Sherekhan.jpg', 'Sherekhan_a.jpg', 'Sherekhan_b.jpg', 'Sherekhan_c.jpg', 2),
(13, 'Kaa', 'Python vert', 'Morelia viridis', 'Originaire d\'Australie, ce python arboricole est également appelé serpent émeraude en raison de sa couleur de peau qui survient à l\'âge adulte. Ce changement de couleur reste encore inexpliqué.', 'Kaa.jpg', 'Kaa_a.jpg', 'Kaa_b.jpg', 'Kaa_c.jpg', 2),
(14, 'Jafar', 'Cobra indien', 'Naja naja', 'Le cobra indien est le cobra souvent montré par les charmeurs de serpent. Il doit son surnom de serpent à lunettes aux marques visibles sur sa coiffe lorsqu\'il la déploie. C\'est le serpent le plus meurtrier au monde.', 'Jafar.jpg', 'Jafar_a.jpg', 'Jafar_b.jpg', 'Jafar_c.jpg', 2),
(16, 'Brutus', 'Crocodile américain', 'Crocodylus acutus', 'Le crocodile américain est l\'une des plus grandes espèces de crocodiles. Les mâles adultes ont une taille moyenne de 3 à 4 m et peuvent atteindre 6 ou 7 m1,2. Ils pèsent habituellement quelque 400 à 500 kg, mais les individus de plus de 6 m de long peuvent dépasser les 1 000 kg.', 'Brutus.jpg', 'Brutus_a.jpg', 'Brutus_b.jpg', 'Brutus_c.jpg', 3),
(17, 'Anna', 'Jacana noir', 'Jacana jacana', 'Le Jacana noir est un petit oiseau de 17 à 25 centimètres de longueur avec de longues pattes gris doré aux doigts mesurant quatre centimètres. Les doigts lui permettent de répartir le poids de son corps de façon à pouvoir se promener sur la végétation aquatique.', 'Anna.jpg', 'Anna_a.jpg', 'Anna_b.jpg', 'Anna_c.jpg', 3),
(18, 'Bernadette', 'Hippopotame', 'Hippopotamus amphibius', 'L’Hippopotame commun est semi-aquatique, vivant dans les rivières, les lacs et les marais de mangroves, où des mâles territoriaux défendent une portion de rivière et un groupe allant de 5 à 30 femelles et leurs jeunes. En dépit de son aspect trapu et de ses courts membres, il est capable de courir à 30 km/h sur de courtes distances. ', 'Bernadette.jpg', 'Bernadette_a.jpg', 'Bernadette_b.jpg', 'Bernadette_c.jpg', 3),
(19, 'Todd', 'Capybara', 'Hydrochoerus hydrochaeris', 'Le grand cabiaï ou capybara est une espèce de rongeur dont la taxonomie et la classification sont encore discutées.\nC\'est le plus gros rongeur actuel, qui peut atteindre 1m35 de long pour 60 kg. Il vit en Amérique du Sud, où il mène la vie d\'un mammifère social et semi-aquatique.', 'Todd.jpg', 'Todd_a.jpg', 'Todd_b.jpg', 'Todd_c.jpg', 3),
(20, 'Domingo', 'Flamand rose', 'Phoenicopterus roseus', 'Le flamant rose doit son nom à la couleur de son plumage, bien qu\'il soit en grande partie blanc-rosâtre, contrairement à celui du Flamant des Caraïbes, beaucoup plus rouge. Cette couleur vient des pigments caroténoïdes présents dans les algues et les crustacés qu\'il consomme.', 'Domingo.jpg', 'Domingo_a.jpg', 'Domingo_b.jpg', 'Domingo_c.jpg', 3),
(21, 'Nyati', 'Buffle d\'Afrique', 'Syncerus caffer', 'Les buffles vivent en groupe dans la savane ou dans les zones boisées. Ils se caractérise par de redoutables cornes et de grandes oreilles. Il fait partie, avec le léopard d\'Afrique, l\'éléphant, le rhinocéros noir et le lion, des «big five»: les 5 mammifères craints et respectés par les chasseurs africains.', 'Nyati.jpg', 'Nyati_a.jpg', 'Nyati_b.jpg', 'Nyati_c.jpg', 3),
(22, 'Simba', 'Lion d\'Afrique', 'Panthera leo leo', 'Le lion est le deuxième plus grand félidé, après le tigre, et le plus grand carnivore d\'Afrique. On distingue notamment le lion d\'Afrique du lion d\'Asie à sa crinière plus abondante. Les populations de lions d\'Afrique se répartissent majoritairement dans l\'Afrique subsaharienne.', 'Simba.jpg', 'Simba_a.jpg', 'Simba_b.jpg', 'Simba_c.jpg', 1),
(23, 'Marty', 'Zèbre des plaines', 'Equus quagga', 'Le Zèbre des plaines vit de l’extrémité sud du Sahara jusqu\'en Afrique du Sud, généralement dans les savanes. Ce zèbre possède généralement des bandes noires relativement larges, qui sont verticales sur le corps, mais deviennent horizontales sur l\'arrière-train.', 'Marty.jpg', 'Marty_a.jpg', 'Marty_b.jpg', 'Marty_c.jpg', 1),
(24, 'Dino', 'Rhinocéros noir', 'Diceros bicornis', 'Queue non comprise, le corps du rhinocéros noir peut atteindre une longueur de 3,50 m, une hauteur au garrot de 1,60 m et une masse de 800 à 1 500 kg. Le record est détenu par un mâle pesant 2 896 kg. Il est cependant le plus petit des deux espèces de rhinocéros africains.', 'Dino.jpg', 'Dino_a.jpg', 'Dino_b.jpg', 'Dino_c.jpg', 1),
(25, 'Mbogo', 'Gnou du Serengeti', 'Connochaetes mearnsi', 'Les gnous sont plutôt sédentaires, sauf si la nourriture devient insuffisante. Ils effectuent alors des migrations saisonnières importantes. Durant ce voyage, des zèbres, des gazelles et des éléphants les accompagnent, formant des rassemblements de plus de deux millions de têtes. ', 'Mbogo.jpg', 'Mbogo_a.jpg', 'Mbogo_b.jpg', 'Mbogo_c.jpg', 1),
(26, 'Niwa', 'Éléphant d\'Afrique', 'Loxodonta', 'L\'éléphant des plaines d\'Afrique est le plus grand des animaux terrestres vivant actuellement. Il  mesure en moyenne 4 mètres au garrot et pèse environ 6 tonnes pour le mâle et 4 tonnes pour la femelle. Cette espèce se rencontre en prairie, marécage et bord de fleuve, jusqu\'en Afrique du Sud.', 'Niwa.jpg', 'Niwa_a.jpg', 'Niwa_b.jpg', 'Niwa_c.jpg', 1),
(27, 'Sophie', 'Girafe du Niger', 'Giraffa camelopardalis peralta', 'La vie de la population nigérienne de girafes repose sur une migration saisonnière entre les plaines relativement résistantes à la sécheresse de la vallée du fleuve Niger et les hautes terres sèches à proximité de Kouré. Les girafes survivent principalement en se nourrissant de feuilles.', 'Sophie.jpg', 'Sophie_a.jpg', 'Sophie_b.jpg', 'Sophie_c.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `avis_valides`
--

CREATE TABLE `avis_valides` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `avis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `avis_valides`
--

INSERT INTO `avis_valides` (`id`, `email`, `auteur`, `avis`) VALUES
(16, 'tonio@aol.fr', 'Tonio', 'Beaucoup d\'animaux et un cadre magnifique.'),
(17, 'f.michel@gmail.com', 'Francine', 'Merci beaucoup pour cette visite inoubliable'),
(20, 'lilou45000@hotmail.fr', 'Lilou', 'Super visite, à faire !'),
(21, 'marcel.durand@gmail.com', 'Marcel', 'Je recommande vivement cette visite.'),
(22, 'a.dupont@gmail.com', 'Anne', 'Une visite exceptionnelle dans un cadre incroyable.');

-- --------------------------------------------------------

--
-- Structure de la table `avis_veto`
--

CREATE TABLE `avis_veto` (
  `id` int(10) UNSIGNED NOT NULL,
  `animal_id` int(10) UNSIGNED DEFAULT NULL,
  `habitat_id` int(10) UNSIGNED DEFAULT NULL,
  `etat_animal` varchar(255) NOT NULL,
  `nourriture` varchar(255) NOT NULL,
  `ration` varchar(255) NOT NULL,
  `passage` datetime(6) NOT NULL,
  `details_etat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `avis_veto`
--

INSERT INTO `avis_veto` (`id`, `animal_id`, `habitat_id`, `etat_animal`, `nourriture`, `ration`, `passage`, `details_etat`) VALUES
(32, 22, NULL, 'Bon état de santé', 'Carcasses de viande', '7 kg par jour', '2024-07-15 00:00:00.000000', 'Plaie à la patte bien cicatrisée'),
(33, 23, NULL, 'Excellent', 'Végétaux', '7 kg par jour', '2024-07-15 00:00:00.000000', 'Visite ostéopathe animalier le mois prochain'),
(34, 24, NULL, 'Dents à surveiller', 'Végétaux', '30 kg par jour', '2024-07-15 00:00:00.000000', 'Soins dentaires à prévoir'),
(35, 25, NULL, 'Bon état de santé', 'Végétaux', '10 kg par jour', '2024-07-15 00:00:00.000000', 'Bonne forme physique'),
(36, 26, NULL, 'Bon état de santé', 'Végétaux', '60 kg par jour', '2024-07-15 00:00:00.000000', 'Soins des défense à réaliser '),
(37, 27, NULL, 'Bonne santé', 'Végétaux', '10 kg par jour', '2024-07-15 00:00:00.000000', 'Visite ostéopathe animalier le mois prochain'),
(47, 1, 2, 'Bon état de santé', 'Fruits, insectes, graines, oeufs', '200 g', '2024-07-16 11:04:14.000000', 'Ajouter des tannins dans l\'eau d\'abreuvage'),
(48, 2, 2, 'Bon état de santé', 'Feuilles, écorce et fruits d\'eucalyptus', '400 g', '2024-07-16 11:14:14.911000', 'Surveiller la pousse des griffes'),
(49, 3, 2, 'Début de la mue', 'Végétaux', '500 g', '2024-07-16 11:26:34.000000', 'Administrer des bains d\'eau tiède dans une eau à 30°/32°C pour favoriser la mue et surveiller la température et l\'hygrométrie du terrarium.'),
(50, 4, 2, 'Bon état de santé', 'Viande', '7 kg', '2024-07-16 11:50:36.000000', 'Varier les activités d\'enrichissement au sein de l\'enclos.'),
(51, 13, 2, 'Bon état de santé', 'Rongeurs, batraciens', '800 g par semaine', '2024-07-16 12:06:54.000000', 'Nourrir de proies décongelées'),
(52, 14, 2, 'Bon état de santé', 'Rats, souris, lézards, crapauds', '1 kg par semaine', '2024-07-16 12:23:54.000000', ''),
(53, 16, 3, 'Bon état de santé', 'Viande', '2 à 3 kg par semaine', '2024-07-16 12:41:36.000000', 'Contrôle dentaire à prévoir'),
(54, 17, 3, 'Bon état de santé', 'Insectes, petits invertébrés, grains de riz', '30 g par jour', '2024-07-16 12:48:36.000000', 'Compléments alimentaires en période de ponte'),
(55, 18, 3, 'Bon état de santé', 'Végétaux', '30 kg', '2024-07-16 13:05:09.000000', 'Limer régulièrement la corne des sabots'),
(56, 19, 3, 'Bon état de santé', 'Végétaux', '3 kg', '2024-07-16 13:31:03.000000', 'Surveiller la pousse des dents'),
(57, 20, 3, 'Bon état de santé', 'Crustacés, algues', '100 g', '2024-07-16 13:48:18.000000', 'Ajouter un complément vitaminé dans la ration alimentaire'),
(58, 21, 3, 'Bon état de santé', 'Végétaux', '10 kg', '2024-07-16 14:05:18.000000', 'Vérifier régulièrement l\'état des sabots'),
(59, 1, NULL, 'Bon', 'Végétaux', '300 g', '2024-07-21 00:00:00.000000', 'Excellente santé générale');

-- --------------------------------------------------------

--
-- Structure de la table `avis_visiteurs`
--

CREATE TABLE `avis_visiteurs` (
  `id` int(255) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `avis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `avis_visiteurs`
--

INSERT INTO `avis_visiteurs` (`id`, `email`, `auteur`, `avis`) VALUES
(30, 'a.dupont@gmail.com', 'Anne', 'Une visite exceptionnelle dans un cadre incroyable.'),
(31, 'marcel.durand@gmail.com', 'Marcel', 'Je recommande vivement cette visite.'),
(32, 'lilou45000@hotmail.fr', 'Lilou', 'Super visite, à faire !'),
(33, 'gerard.alain@gmail.com', 'Gege', 'Un excellent moment en famille.'),
(34, 'f.michel@gmail.com', 'Francine', 'Merci beaucoup pour cette visite inoubliable'),
(35, 'tonio@aol.fr', 'Tonio', 'Beaucoup d\'animaux et un cadre magnifique.');

-- --------------------------------------------------------

--
-- Structure de la table `habitats`
--

CREATE TABLE `habitats` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `photos` varchar(255) NOT NULL,
  `comments` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `admin_url` varchar(255) NOT NULL,
  `vet_url` varchar(255) NOT NULL,
  `empl_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `habitats`
--

INSERT INTO `habitats` (`id`, `name`, `description`, `photos`, `comments`, `url`, `admin_url`, `vet_url`, `empl_url`) VALUES
(1, 'Savane africaine', '      Formation végétale propre aux régions chaudes ayant une longue saison sèche, telles que les régions tropicales au sens strict du terme, et caractérisée par la dominance des hautes herbes.', 'savane.jpg', '', 'savane.php', 'admin_savane.php', 'vet_savane.php', 'empl_savane.php'),
(2, 'Jungle', 'Formation végétale arborée qui prospère sous un climat chaud et humide avec une courte saison sèche.', 'jungle.jpg', '', 'jungle.php', 'admin_jungle.php', 'vet_jungle.php', 'empl_jungle.php'),
(3, 'Marais', 'Etendue recouverte par des eaux peu profondes, en partie envahie par la végétation', 'marais.jpg', '', 'marais.php', 'admin_marais.php', 'vet_marais.php', 'empl_marais.php');

-- --------------------------------------------------------

--
-- Structure de la table `repas_animaux`
--

CREATE TABLE `repas_animaux` (
  `id` int(10) UNSIGNED NOT NULL,
  `nourriture` varchar(255) NOT NULL,
  `quantite` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `heure` time(6) NOT NULL,
  `animal_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `repas_animaux`
--

INSERT INTO `repas_animaux` (`id`, `nourriture`, `quantite`, `date`, `heure`, `animal_id`) VALUES
(4, 'Carcasses de mouton', '7 kg', '2024-07-21', '09:21:28.609000', 22),
(5, 'carcasses de mouton', '7 kg', '2024-07-22', '09:30:00.000000', 22),
(6, 'Herbe, graminées', '7 kg', '2024-07-22', '09:00:00.000000', 23),
(7, 'Herbe', '30 kg', '2024-07-22', '09:15:00.000000', 24),
(8, 'Herbe', '10 kg', '2024-07-22', '09:00:00.000000', 25),
(9, 'Feuilles, branches et écorces d\'acacias', '60 kg', '2024-07-22', '10:00:00.000000', 26),
(10, 'Feuilles d\'acacia, herbe', '10 kg', '2024-07-22', '09:50:00.000000', 27),
(11, 'Fruits, graines, insectes', '200 g', '2024-07-22', '08:00:00.000000', 1),
(12, 'Eucalyptus', '400 g', '2024-07-22', '08:10:00.000000', 2),
(13, 'Végétaux', '500 g', '2024-07-22', '08:20:00.000000', 3),
(14, 'Carcasses de mouton', '7 kg', '2024-07-22', '08:20:00.000000', 4),
(15, 'Souris décongelées', '800 g', '2024-07-22', '08:40:00.000000', 13),
(16, 'Souris décongelées', '1 kg', '2024-07-22', '07:45:00.000000', 14),
(17, 'Crevettes', '30 g', '2024-07-22', '07:00:00.000000', 17),
(18, 'Herbe', '30 kg', '2024-07-22', '07:10:00.000000', 18),
(19, 'Herbe', '3 kg', '2024-07-22', '07:20:00.000000', 19),
(20, 'Crevettes', '100 g', '2024-07-22', '07:20:00.000000', 20),
(21, 'Herbe', '10 kg', '2024-07-22', '07:50:00.000000', 21);

-- --------------------------------------------------------

--
-- Structure de la table `services_zoo`
--

CREATE TABLE `services_zoo` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `photos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `services_zoo`
--

INSERT INTO `services_zoo` (`id`, `name`, `description`, `photos`) VALUES
(1, 'Restauration', 'Trois restaurants sont accessibles au sein du zoo. Ils sont ouverts du lundi au dimanche de 9h00 à 22h00, sans interruption.', 'restau_du_zoo.jpg'),
(2, 'Visites guidées', 'Les visites guidées du zoo ont lieu gratuitement, deux fois par jour. Informations et horaires à l\'accueil du zoo.', 'pass.jpg'),
(3, 'Petit train', 'Visitez le zoo à bord de son petit train, en service depuis sa création en 1960!', 'petit_train.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `staff`
--

CREATE TABLE `staff` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `staff`
--

INSERT INTO `staff` (`id`, `category`, `status`) VALUES
(1, 'Employé', 'Interne'),
(2, 'Vétérinaire', 'Prestataire');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `staff_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `firstname`, `email`, `password`, `staff_id`) VALUES
(67, 'Dupond', 'Michel', 'michel.dupont@zooarcadia.com', '$2y$10$CDjC71nfcMnN/IvZf331a.qGdEZfZHI1KLF5OHh2bLGrAQnTfPEhW', 1),
(68, 'Durand', 'Anne', 'anne.durand@zooarcadia.com', '$2y$10$1/h9AlLsEbJyP1WPNcBFz.6OzGIHTIYJnM.Px0euzZnRYv6N983jG', 2);

-- --------------------------------------------------------

--
-- Structure de la table `user_admin`
--

CREATE TABLE `user_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `staff_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user_admin`
--

INSERT INTO `user_admin` (`id`, `name`, `firstname`, `email`, `password`, `staff_id`) VALUES
(1, 'Arcadia', 'José', 'jose.arcadia@zooarcadia.com', '$2y$10$Yx7FVNmeG8c6PLvG5rF.z.BoI/u.QLJiqpymVBw6Z4XXJIt2a0WDG', 3),
(4, 'Cameleon', 'José', 'jose.cameleon@zooarcadia.com', '$2y$10$uR2sFma4g9JyRKx97G7stuk.wpYloezMUcxqduN9bNTKDzLk7rk0.', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `animaux`
--
ALTER TABLE `animaux`
  ADD PRIMARY KEY (`id`),
  ADD KEY `habitats_id` (`habitats_id`);

--
-- Index pour la table `avis_valides`
--
ALTER TABLE `avis_valides`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `avis_veto`
--
ALTER TABLE `avis_veto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `animal_id` (`animal_id`),
  ADD KEY `habitat_id` (`habitat_id`);

--
-- Index pour la table `avis_visiteurs`
--
ALTER TABLE `avis_visiteurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `habitats`
--
ALTER TABLE `habitats`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `repas_animaux`
--
ALTER TABLE `repas_animaux`
  ADD PRIMARY KEY (`id`),
  ADD KEY `animal_id` (`animal_id`);

--
-- Index pour la table `services_zoo`
--
ALTER TABLE `services_zoo`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Index pour la table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `animaux`
--
ALTER TABLE `animaux`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `avis_valides`
--
ALTER TABLE `avis_valides`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT pour la table `avis_veto`
--
ALTER TABLE `avis_veto`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT pour la table `avis_visiteurs`
--
ALTER TABLE `avis_visiteurs`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `habitats`
--
ALTER TABLE `habitats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `repas_animaux`
--
ALTER TABLE `repas_animaux`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `services_zoo`
--
ALTER TABLE `services_zoo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT pour la table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `repas_animaux`
--
ALTER TABLE `repas_animaux`
  ADD CONSTRAINT `repas_animaux_ibfk_1` FOREIGN KEY (`animal_id`) REFERENCES `animaux` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
