-- MySQL Script generated by MySQL Workbench
-- Mon Jun 26 07:45:29 2023
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mycrud
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mycrud
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mycrud` DEFAULT CHARACTER SET utf8 ;
USE `mycrud` ;

-- -----------------------------------------------------
-- Table `mycrud`.`disciplina`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mycrud`.`disciplina` (
  `iddisciplina` INT NOT NULL,
  `nome` VARCHAR(45) NULL,
  `tipo` ENUM('MEDIO', 'TECNICO') NULL,
  PRIMARY KEY (`iddisciplina`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mycrud`.`avaliacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mycrud`.`avaliacao` (
  `idavaliacao` INT NOT NULL,
  `data` DATE NULL,
  `conteudo` VARCHAR(45) NULL,
  `valor` FLOAT NULL,
  `consulta` ENUM('SIM', 'NAO') NULL,
  `Disiciplina_idDisiciplina` INT NOT NULL,
  PRIMARY KEY (`idavaliacao`),
  INDEX `fk_avaliacao_Disiciplina_idx` (`Disiciplina_idDisiciplina` ASC),
  CONSTRAINT `fk_avaliacao_Disiciplina`
    FOREIGN KEY (`Disiciplina_idDisiciplina`)
    REFERENCES `mycrud`.`disciplina` (`iddisciplina`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;