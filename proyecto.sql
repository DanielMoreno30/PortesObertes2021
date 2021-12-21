-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema portesObertes
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `portesObertes` ;

-- -----------------------------------------------------
-- Schema portesObertes
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `portesObertes` DEFAULT CHARACTER SET utf8 ;
USE `portesObertes` ;

-- -----------------------------------------------------
-- Table `portesObertes`.`juegos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `portesObertes`.`juegos`;

CREATE TABLE `portesObertes`.`juegos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `url_juego` VARCHAR(200) NOT NULL,
  `url_imagen` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `portesObertes`.`usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `portesObertes`.`usuarios`;

CREATE TABLE `portesObertes`.`usuarios` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `nombre_usuario` VARCHAR(45) NOT NULL,
  `password` VARCHAR(100) DEFAULT NULL,
  `nombre` VARCHAR(20) DEFAULT NULL,
  `apellidos` VARCHAR(45) DEFAULT NULL,
  `correo` VARCHAR(60) NOT NULL,
  `tipo` CHAR(1) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE INDEX `correo_UNIQUE` (`correo`),
  UNIQUE INDEX `id_usuario_UNIQUE` (`id_usuario` DESC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `portesObertes`.`usuario_has_played`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `portesObertes`.`usuario_has_played`;

CREATE TABLE `portesObertes`.`usuario_has_played` (
  `usuario_id` INT NOT NULL,
  `juego_id` INT NOT NULL,
  PRIMARY KEY (`usuario_id`, `juego_id`),
  INDEX `fk_usuario_has_played_id_usuario` (`usuario_id` ASC),
  INDEX `fk_usuario_has_played_id_juego` (`juego_id` ASC),
  CONSTRAINT `fk_usuario_has_played1` FOREIGN KEY (`juego_id`) REFERENCES `portesObertes`.`juegos` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_has_played2` FOREIGN KEY (`usuario_id`) REFERENCES `portesObertes`.`usuarios` (`id_usuario`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `portesObertes`.`ranking`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `portesObertes`.`ranking`;

CREATE TABLE `portesObertes`.`ranking` (
  `id_juego` INT NOT NULL,
  `id_usuario` INT(11) NOT NULL,
  `puntuacion` INT NOT NULL,
  `tiempo` DECIMAL(5,2) NOT NULL,
  PRIMARY KEY(`id_juego`, `id_usuario`),
  CONSTRAINT `fk_id_juego` FOREIGN KEY (`id_juego`) REFERENCES `portesObertes`.`juegos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `portesObertes`.`usuarios` (`id_usuario`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `portesObertes`.`juegos`
-- -----------------------------------------------------
START TRANSACTION;
USE `portesObertes`;
INSERT INTO `portesObertes`.`juegos` (`id`, `nombre`, `url_juego`, `url_imagen`) VALUES (1, 'JuegoSebas', '../games/Patronus/index.html', '../img/patronus.gif');
INSERT INTO `portesObertes`.`juegos` (`id`, `nombre`, `url_juego`, `url_imagen`) VALUES (2, 'JuegoDani', '../games/memory/memory.php', '../img/juego2.png');
INSERT INTO `portesObertes`.`juegos` (`id`, `nombre`, `url_juego`, `url_imagen`) VALUES (3, 'JuegoOscar', '../games/skyHop/index.php', '../img/juego3.gif');
INSERT INTO `portesObertes`.`juegos` (`id`, `nombre`, `url_juego`, `url_imagen`) VALUES (4, 'JuegoPablo', '../games/PacmanJuego/pacman.php', '../img/juego4.PNG');
INSERT INTO `portesObertes`.`juegos` (`id`, `nombre`, `url_juego`, `url_imagen`) VALUES (5, 'JuegoVictor', '../games/Turnflip/index.php', '../img/juego5.png');

COMMIT;

-- -----------------------------------------------------
-- Data for table `portesObertes`.`usuarios`
-- -----------------------------------------------------
START TRANSACTION;
USE `portesObertes`;
INSERT INTO `portesObertes`.`usuarios` (`nombre_usuario`, `password`, `nombre`, `apellidos`, `correo`, `tipo`) 
VALUES ('admin', 'politecnics1', 'S', 'G', 'afsd@gmail.com', 'A');
INSERT INTO `portesObertes`.`usuarios` (`nombre_usuario`, `password`, `nombre`, `apellidos`, `correo`, `tipo`) 
VALUES ('Oscar', 'politecnics1', 'S', 'G', 'affsd@gmail.com', 'N');
INSERT INTO `portesObertes`.`usuarios` (`nombre_usuario`, `password`, `nombre`, `apellidos`, `correo`, `tipo`) 
VALUES ('Sebas', 'politecnics1', 'S', 'G', 'afssd@gmail.com', 'N');
INSERT INTO `portesObertes`.`usuarios` (`nombre_usuario`, `password`, `nombre`, `apellidos`, `correo`, `tipo`) 
VALUES ('Victor', 'politecnics1', 'S', 'G', 'afwsd@gmail.com', 'N');
INSERT INTO `portesObertes`.`usuarios` (`nombre_usuario`, `password`, `nombre`, `apellidos`, `correo`, `tipo`) 
VALUES ('Dani', 'politecnics1', 'S', 'G', 'acwsd@gmail.com', 'N');
INSERT INTO `portesObertes`.`usuarios` (`nombre_usuario`, `password`, `nombre`, `apellidos`, `correo`, `tipo`) 
VALUES ('Pablo', 'politecnics1', 'S', 'G', 'bfwsd@gmail.com', 'N');

COMMIT;

-- -----------------------------------------------------
-- Data for table `portesObertes`.`ranking`
-- -----------------------------------------------------
START TRANSACTION;
USE `portesObertes`;
INSERT INTO `portesObertes`.`ranking` (`id_juego`, `id_usuario`, `puntuacion`, `tiempo`) 
VALUES ('1', '1', '50', '100');
INSERT INTO `portesObertes`.`ranking` (`id_juego`, `id_usuario`, `puntuacion`, `tiempo`) 
VALUES ('1', '2', '51', '100');
INSERT INTO `portesObertes`.`ranking` (`id_juego`, `id_usuario`, `puntuacion`, `tiempo`) 
VALUES ('1', '3', '52', '100');
INSERT INTO `portesObertes`.`ranking` (`id_juego`, `id_usuario`, `puntuacion`, `tiempo`) 
VALUES ('1', '4', '53', '100');

COMMIT;