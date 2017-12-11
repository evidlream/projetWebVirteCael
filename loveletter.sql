-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 10 déc. 2017 à 23:41
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `loveletter`
--

-- --------------------------------------------------------

--
-- Structure de la table `attente`
--

CREATE TABLE `attente` (
  `idJoueur` int(11) DEFAULT NULL,
  `typePartie` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déclencheurs `attente`
--
DELIMITER $$
CREATE TRIGGER `creerPartie` AFTER INSERT ON `attente` FOR EACH ROW BEGIN
	DECLARE temp INT;
	select count(DISTINCT IDJOUEUR) into temp from attente where typePartie = NEW.typePartie; 
    IF(temp = NEW.typePartie)
    THEN
    	insert into partie values(null,NEW.typePartie);
        select LAST_INSERT_ID() into temp;
        insert into joue select DISTINCT temp,0,idJoueur from attente where typePartie = NEW.typePartie;
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `carte`
--

CREATE TABLE `carte` (
  `IDCARTE` int(10) NOT NULL,
  `NOM` varchar(32) NOT NULL,
  `ILLUSTRATION` varchar(32) NOT NULL,
  `DESCRIPTION` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `contient`
--

CREATE TABLE `contient` (
  `IDMAIN` int(10) NOT NULL,
  `IDCARTE` int(10) NOT NULL,
  `DEFFAUSE` int(1) DEFAULT NULL,
  `ORDREJEU` int(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `defausse`
--

CREATE TABLE `defausse` (
  `IDCARTE` int(10) NOT NULL,
  `IDROUND` int(10) NOT NULL,
  `ORDREDEFAUSSE` int(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `joue`
--

CREATE TABLE `joue` (
  `IDPARTIE` int(10) NOT NULL,
  `Fini` tinyint(1) NOT NULL,
  `IDJOUEUR` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

CREATE TABLE `joueur` (
  `IDJOUEUR` int(10) NOT NULL,
  `PSEUDO` varchar(32) NOT NULL,
  `MOTDEPASSE` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `main`
--

CREATE TABLE `main` (
  `IDMAIN` int(10) NOT NULL,
  `IDROUND` int(10) NOT NULL,
  `ELIMINE` int(1) NOT NULL,
  `POSITIONTABLE` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `paquet`
--

CREATE TABLE `paquet` (
  `IDCARTE` int(10) NOT NULL,
  `IDROUND` int(10) NOT NULL,
  `PLACEMENT` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `partie`
--

CREATE TABLE `partie` (
  `IDPARTIE` int(10) NOT NULL,
  `NBJOUEUR` int(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `partie`
--

-- --------------------------------------------------------

--
-- Structure de la table `round`
--

CREATE TABLE `round` (
  `IDROUND` int(10) NOT NULL,
  `IDPARTIE` int(10) NOT NULL,
  `CARTEDEFAUSSE` varchar(32) NOT NULL,
  `IDGAGNANT` varchar(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `carte`
--
ALTER TABLE `carte`
  ADD PRIMARY KEY (`IDCARTE`);

--
-- Index pour la table `contient`
--
ALTER TABLE `contient`
  ADD PRIMARY KEY (`IDMAIN`,`IDCARTE`),
  ADD KEY `I_FK_CONTIENT_MAIN` (`IDMAIN`),
  ADD KEY `I_FK_CONTIENT_CARTE` (`IDCARTE`);

--
-- Index pour la table `defausse`
--
ALTER TABLE `defausse`
  ADD PRIMARY KEY (`IDCARTE`,`IDROUND`),
  ADD KEY `I_FK_DEFAUSSE_CARTE` (`IDCARTE`),
  ADD KEY `I_FK_DEFAUSSE_ROUND` (`IDROUND`);

--
-- Index pour la table `joue`
--
ALTER TABLE `joue`
  ADD PRIMARY KEY (`IDPARTIE`,`IDJOUEUR`),
  ADD KEY `I_FK_JOUE_PARTIE` (`IDPARTIE`),
  ADD KEY `I_FK_JOUE_JOUEUR` (`IDJOUEUR`);

--
-- Index pour la table `joueur`
--
ALTER TABLE `joueur`
  ADD PRIMARY KEY (`IDJOUEUR`);

--
-- Index pour la table `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`IDMAIN`),
  ADD KEY `I_FK_MAIN_ROUND` (`IDROUND`);

--
-- Index pour la table `paquet`
--
ALTER TABLE `paquet`
  ADD PRIMARY KEY (`IDCARTE`,`IDROUND`),
  ADD KEY `I_FK_PAQUET_CARTE` (`IDCARTE`),
  ADD KEY `I_FK_PAQUET_ROUND` (`IDROUND`);

--
-- Index pour la table `partie`
--
ALTER TABLE `partie`
  ADD PRIMARY KEY (`IDPARTIE`);

--
-- Index pour la table `round`
--
ALTER TABLE `round`
  ADD PRIMARY KEY (`IDROUND`),
  ADD KEY `I_FK_ROUND_PARTIE` (`IDPARTIE`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `joueur`
--
ALTER TABLE `joueur`
  MODIFY `IDJOUEUR` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `partie`
--
ALTER TABLE `partie`
  MODIFY `IDPARTIE` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
