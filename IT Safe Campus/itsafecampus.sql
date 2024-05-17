SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données : `itsafecampus`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id_contact` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` longtext NOT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

DROP TABLE IF EXISTS `cours`;
CREATE TABLE IF NOT EXISTS `cours` (
  `id_cours` int NOT NULL AUTO_INCREMENT,
  `id_formation` int NOT NULL,
  `chap_1` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `chap_2` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description_1` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description_2` longtext NOT NULL,
  PRIMARY KEY (`id_cours`),
  KEY `id_formation` (`id_formation`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id_cours`, `id_formation`, `chap_1`, `chap_2`, `description_1`, `description_2`) VALUES
(1, 1, 'Chapitre 1', 'Chapitre2', '« Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue.»', '« Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue.»'),
(2, 2, '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

DROP TABLE IF EXISTS `formations`;
CREATE TABLE IF NOT EXISTS `formations` (
  `id_formation` int NOT NULL AUTO_INCREMENT,
  `id_thematique` int NOT NULL,
  `nom_formation` varchar(30) NOT NULL,
  `description` longtext NOT NULL,
  `URL` varchar(30) NOT NULL,
  PRIMARY KEY (`id_formation`),
  KEY `id_thematique` (`id_thematique`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `formations`
--

INSERT INTO `formations` (`id_formation`, `id_thematique`, `nom_formation`, `description`, `URL`) VALUES
(1, 2, 'IoT', 'blablabla', 'image_lambda.png'),
(2, 5, 'Hacking', 'blablabla', 'image_lambda.png');

-- --------------------------------------------------------

--
-- Structure de la table `mes_formations`
--

DROP TABLE IF EXISTS `mes_formations`;
CREATE TABLE IF NOT EXISTS `mes_formations` (
  `id_formation` int NOT NULL,
  `id_utilisateur` int NOT NULL,
  KEY `id_formation` (`id_formation`),
  KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `mes_formations`
--

INSERT INTO `mes_formations` (`id_formation`, `id_utilisateur`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `quizz`
--

DROP TABLE IF EXISTS `quizz`;
CREATE TABLE IF NOT EXISTS `quizz` (
  `id_quizz` int NOT NULL AUTO_INCREMENT,
  `id_formation` int NOT NULL,
  `question1` varchar(30) NOT NULL,
  `question2` varchar(30) NOT NULL,
  `question3` varchar(30) NOT NULL,
  `question4` varchar(30) NOT NULL,
  `question5` varchar(30) NOT NULL,
  `question6` varchar(30) NOT NULL,
  `question7` varchar(30) NOT NULL,
  `question8` varchar(30) NOT NULL,
  `question9` varchar(30) NOT NULL,
  `question10` varchar(30) NOT NULL,
  `reponse1` varchar(30) NOT NULL,
  `reponse2` varchar(30) NOT NULL,
  `reponse3` varchar(30) NOT NULL,
  `reponse4` varchar(30) NOT NULL,
  `reponse5` varchar(30) NOT NULL,
  `reponse6` varchar(30) NOT NULL,
  `reponse7` varchar(30) NOT NULL,
  `reponse8` varchar(30) NOT NULL,
  `reponse9` varchar(30) NOT NULL,
  `reponse10` varchar(30) NOT NULL,
  PRIMARY KEY (`id_quizz`),
  UNIQUE KEY `id_formation` (`id_formation`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `quizz`
--

INSERT INTO `quizz` (`id_quizz`, `id_formation`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `reponse1`, `reponse2`, `reponse3`, `reponse4`, `reponse5`, `reponse6`, `reponse7`, `reponse8`, `reponse9`, `reponse10`) VALUES
(1, 1, 'question1', 'question2', 'question3', 'question4', 'question5', 'question6', 'question7', 'question8', 'question9', 'question10', 'reponse1', 'reponse2', 'reponse3', 'reponse4', 'reponse5', 'reponse6', 'reponse7', 'reponse8', 'reponse9', 'reponse10');

-- --------------------------------------------------------

--
-- Structure de la table `thematique`
--

DROP TABLE IF EXISTS `thematique`;
CREATE TABLE IF NOT EXISTS `thematique` (
  `id_thematique` int NOT NULL AUTO_INCREMENT,
  `nom_thematique` varchar(30) NOT NULL,
  `description` longtext NOT NULL,
  `URL` varchar(30) NOT NULL,
  `disposition` int NOT NULL,
  PRIMARY KEY (`id_thematique`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `thematique`
--

INSERT INTO `thematique` (`id_thematique`, `nom_thematique`, `description`, `URL`, `disposition`) VALUES
(2, 'Marine', '« Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue.»', 'image_lambda.png', 0),
(5, 'marianne', '\r\n« Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue.»\r\n\r\n« Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue.»\r\n\r\n« Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue.»', 'image_lambda.png', 0),
(4, 'victor', '« Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue.»', 'image_lambda.png', 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilisateur` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(30) NOT NULL,
  `mdp_verif` varchar(30) NOT NULL,
  `date_naissance` date NOT NULL,
  `niveau_etude` varchar(30) NOT NULL,
  PRIMARY KEY (`id_utilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


--
-- Déclencheurs `utilisateur`
--
DROP TRIGGER IF EXISTS `verifMdp`;
DELIMITER $$
CREATE TRIGGER `verifMdp` BEFORE INSERT ON `utilisateur` FOR EACH ROW BEGIN

   if (new.mdp) <> (new.mdp_verif) 
        then signal sqlstate '45000'
        set message_text = 'Mot de passe non identiques';
    end if;

END
$$
DELIMITER ;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `prenom`, `email`, `mdp`, `mdp_verif`, `date_naissance`, `niveau_etude`) VALUES
(1, 'veyrat', 'marine', 'veyrat.marine@gmail.com', '123', '123', '2001-12-21', 'Master2');

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

DROP TABLE IF EXISTS `video`;
CREATE TABLE IF NOT EXISTS `video` (
  `id_video` int NOT NULL AUTO_INCREMENT,
  `id_formation` int NOT NULL,
  `url` longtext NOT NULL,
  PRIMARY KEY (`id_video`),
  KEY `id_formation` (`id_formation`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `video`
--

INSERT INTO `video` (`id_video`, `id_formation`, `url`) VALUES
(1, 1, 'https://www.youtube.com/embed/kDehTEEoFnE');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `vue_cours`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `vue_cours`;
CREATE TABLE IF NOT EXISTS `vue_cours` (
`nom_formation` varchar(30)
,`id_formation` int
,`id_cours` int
);

-- --------------------------------------------------------

--
-- Structure de la vue `vue_cours`
--
DROP TABLE IF EXISTS `vue_cours`;

DROP VIEW IF EXISTS `vue_cours`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vue_cours`  AS SELECT `f`.`nom_formation` AS `nom_formation`, `f`.`id_formation` AS `id_formation`, `c`.`id_cours` AS `id_cours` FROM (`formations` `f` join `cours` `c`) WHERE (`f`.`id_formation` = `c`.`id_formation`)  ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
