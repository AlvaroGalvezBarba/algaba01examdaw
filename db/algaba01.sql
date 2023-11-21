CREATE DATABASE IF NOT EXISTS `algaba01` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `algaba01`;

DROP TABLE IF EXISTS `examen`;
CREATE TABLE IF NOT EXISTS `examen` (
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(3) NOT NULL,
  `estilo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`nombre`)
);


INSERT INTO `examen` (`nombre`,`edad`,`estilo`) VALUES
('Alvaro', 18,'trap'),
('Carlos', 20,'musica clasica')