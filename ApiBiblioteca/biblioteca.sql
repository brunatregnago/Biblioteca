-- MySQL Script generated by MySQL Workbench
-- Thu Oct 24 21:54:25 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`categoria` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `categoria` VARCHAR(150) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`autor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`autor` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `autor` VARCHAR(150) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`livro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`livro` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(100) NOT NULL,
  `subtitulo` VARCHAR(100) NULL,
  `edicao` VARCHAR(45) NULL,
  `id_categoria` INT NOT NULL,
  `id_autor` INT NOT NULL,
  PRIMARY KEY (`id`, `id_categoria`, `id_autor`),
  INDEX `fk_livro_categoria1_idx` (`id_categoria` ASC) VISIBLE,
  INDEX `fk_livro_autor1_idx` (`id_autor` ASC) VISIBLE,
  CONSTRAINT `fk_livro_categoria1`
    FOREIGN KEY (`id_categoria`)
    REFERENCES `mydb`.`categoria` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_livro_autor1`
    FOREIGN KEY (`id_autor`)
    REFERENCES `mydb`.`autor` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`cidade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`cidade` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cidade` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(90) NOT NULL,
  `cpf` VARCHAR(10) NOT NULL,
  `email` VARCHAR(100) NULL,
  `telefone` VARCHAR(10) NOT NULL,
  `rua` VARCHAR(100) NULL,
  `numero` VARCHAR(11) NULL,
  `bairro` VARCHAR(100) NULL,
  `senha` VARCHAR(11) NOT NULL,
  `id_cidade` INT NOT NULL,
  PRIMARY KEY (`id`, `id_cidade`),
  INDEX `fk_usuario_cidade1_idx` (`id_cidade` ASC) VISIBLE,
  CONSTRAINT `fk_usuario_cidade1`
    FOREIGN KEY (`id_cidade`)
    REFERENCES `mydb`.`cidade` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`locacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`locacao` (
  `id_locacao` INT NOT NULL AUTO_INCREMENT,
  `id_usuario` INT NOT NULL,
  `id_livro` INT NOT NULL,
  `data_devolucao` DATE NOT NULL,
  PRIMARY KEY (`id_locacao`, `id_usuario`, `id_livro`),
  INDEX `fk_usuario_has_livro_livro1_idx` (`id_livro` ASC) VISIBLE,
  INDEX `fk_usuario_has_livro_usuario_idx` (`id_usuario` ASC) VISIBLE,
  CONSTRAINT `fk_usuario_has_livro_usuario`
    FOREIGN KEY (`id_usuario`)
    REFERENCES `mydb`.`usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_has_livro_livro1`
    FOREIGN KEY (`id_livro`)
    REFERENCES `mydb`.`livro` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`devolucao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`devolucao` (
  `id_locacao` INT NOT NULL,
  `id_usuario` INT NOT NULL,
  `id_livro` INT NOT NULL,
  `data_devolucao` DATE NOT NULL,
  PRIMARY KEY (`id_locacao`, `id_usuario`, `id_livro`),
  CONSTRAINT `fk_devolucao_locacao1`
    FOREIGN KEY (`id_locacao` , `id_usuario` , `id_livro`)
    REFERENCES `mydb`.`locacao` (`id_locacao` , `id_usuario` , `id_livro`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`biblioteca`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`biblioteca` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(120) NOT NULL,
  `senha` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
