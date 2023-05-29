CREATE DATABASE IF NOT EXISTS `tcc`;
USE `tcc`;

CREATE TABLE IF NOT EXISTS `acionamento` (
  `numAcio` int AUTO_INCREMENT,
  `datAci` date NOT NULL,
  `horAci` time NOT NULL,
  `tipAcio` char NOT NULL,
  PRIMARY KEY (`numAcio`)
) ENGINE=MyISAM DEFAULT CHARSET=LATIN1;

CREATE TABLE IF NOT EXISTS `equipamento` (
  `numEqt` int AUTO_INCREMENT,
  `idAcio` varchar(150) NOT NULL,
  `datAci` date NOT NULL,
  `horAci` time NOT NULL,
  `leiTem` int NOT NULL,
  `leiUmi` int NOT NULL,
  PRIMARY KEY (`numEqt`),
  FOREIGN KEY (idAcio) REFERENCES acionamento(numAcio)
) ENGINE=MyISAM DEFAULT CHARSET=LATIN1;

CREATE TABLE IF NOT EXISTS `cultura` (
  `idCult` int AUTO_INCREMENT,
  `deCult` varchar(150) NOT NULL,
  `teCult` int NOT NULL,
  `umCult` int NOT NULL,
  PRIMARY KEY (`idCult`)
) ENGINE=MyISAM DEFAULT CHARSET=LATIN1;

CREATE TABLE IF NOT EXISTS `eqtCul` (
  `id` int AUTO_INCREMENT,
  `numEqt` int NOT NULL,
  `numCul` int NOT NULL,
  `local` varchar(150) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (numEqt) REFERENCES equipamento(numEqt),
  FOREIGN KEY (numCul) REFERENCES cultura(idCult)
) ENGINE=MyISAM DEFAULT CHARSET=LATIN1;