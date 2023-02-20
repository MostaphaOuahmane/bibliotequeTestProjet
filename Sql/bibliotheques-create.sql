-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema bibliotheques
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema bibliotheques
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `bibliotheques` DEFAULT CHARACTER SET utf8 ;
USE `bibliotheques` ;

-- -----------------------------------------------------
-- Table `bibliotheques`.`auteur`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bibliotheques`.`auteur` (
  `id_auteur` INT NOT NULL,
  `prenom` VARCHAR(45) NOT NULL,
  `nom` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_auteur`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bibliotheques`.`ouvrage`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bibliotheques`.`ouvrage` (
  `id_ouvrage` INT NOT NULL,
  `titre` VARCHAR(45) NOT NULL,
  `id_auteur` INT NOT NULL,
  PRIMARY KEY (`id_ouvrage`),
  INDEX `fk_ouvrage_auteur1_idx` (`id_auteur` ASC),
  CONSTRAINT `fk_ouvrage_auteur1`
    FOREIGN KEY (`id_auteur`)
    REFERENCES `bibliotheques`.`auteur` (`id_auteur`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bibliotheques`.`personne`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bibliotheques`.`personne` (
  `id_personne` INT NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `mot_de_passe` VARCHAR(64) NOT NULL,
  PRIMARY KEY (`id_personne`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bibliotheques`.`bibliotheque`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bibliotheques`.`bibliotheque` (
  `id_bibliotheque` INT NOT NULL,
  `nom` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_bibliotheque`),
  UNIQUE INDEX `nom_UNIQUE` (`nom` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bibliotheques`.`exemplaire`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bibliotheques`.`exemplaire` (
  `id_exemplaire` INT NOT NULL,
  `id_ouvrage` INT NOT NULL,
  `id_emprunteur` INT NULL,
  `id_bibliotheque` INT NOT NULL,
  PRIMARY KEY (`id_exemplaire`),
  INDEX `fk_exemplaire_ouvrage_idx` (`id_ouvrage` ASC),
  INDEX `fk_exemplaire_personne1_idx` (`id_emprunteur` ASC),
  INDEX `fk_exemplaire_bibliotheque1_idx` (`id_bibliotheque` ASC),
  CONSTRAINT `fk_exemplaire_ouvrage`
    FOREIGN KEY (`id_ouvrage`)
    REFERENCES `bibliotheques`.`ouvrage` (`id_ouvrage`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_exemplaire_personne1`
    FOREIGN KEY (`id_emprunteur`)
    REFERENCES `bibliotheques`.`personne` (`id_personne`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_exemplaire_bibliotheque1`
    FOREIGN KEY (`id_bibliotheque`)
    REFERENCES `bibliotheques`.`bibliotheque` (`id_bibliotheque`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
