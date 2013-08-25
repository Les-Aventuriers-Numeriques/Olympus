SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `olympus` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `olympus` ;

-- -----------------------------------------------------
-- Table `olympus`.`Utilisateur`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `olympus`.`Utilisateur` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nom` VARCHAR(45) NULL ,
  `prenom` VARCHAR(45) NULL ,
  `email` VARCHAR(45) NULL ,
  `login` VARCHAR(45) NULL ,
  `password` VARCHAR(45) NULL ,
  `avatar` TEXT NULL ,
  `steam` TEXT NULL ,
  `leitmotiv` TEXT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) ,
  UNIQUE INDEX `login_UNIQUE` (`login` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `olympus`.`Article`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `olympus`.`Article` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `titre` VARCHAR(45) NULL ,
  `date` DATETIME NULL ,
  `contenu` TEXT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `olympus`.`Don`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `olympus`.`Don` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `montant` DECIMAL(5,2) NULL ,
  `date` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `olympus`.`CategorieArticle`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `olympus`.`CategorieArticle` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `libelle` VARCHAR(45) NULL ,
  `description` TEXT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `olympus`.`Squad`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `olympus`.`Squad` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `libelle` VARCHAR(45) NULL ,
  `role` VARCHAR(45) NULL ,
  `logo` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `olympus`.`Kit`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `olympus`.`Kit` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `libelle` VARCHAR(45) NULL ,
  `description` TEXT NULL ,
  `image` TEXT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `olympus`.`Groupe`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `olympus`.`Groupe` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `libelle` VARCHAR(45) NULL ,
  `description` TEXT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `olympus`.`MembreSquad`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `olympus`.`MembreSquad` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `olympus`.`Etat`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `olympus`.`Etat` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `libelle` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `olympus`.`Disponibilite`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `olympus`.`Disponibilite` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `commentaire` TEXT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `olympus`.`Evenement`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `olympus`.`Evenement` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `titre` INT NULL ,
  `description` TEXT NULL ,
  `date_debut` DATETIME NULL ,
  `date_fin` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `olympus`.`CategorieForum`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `olympus`.`CategorieForum` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `libelle` VARCHAR(45) NULL ,
  `description` TEXT NULL ,
  `ordre` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `olympus`.`Forum`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `olympus`.`Forum` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `libelle` VARCHAR(45) NULL ,
  `description` TEXT NULL ,
  `ordre` INT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `olympus`.`Sujet`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `olympus`.`Sujet` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `titre` VARCHAR(45) NULL ,
  `date` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `olympus`.`Message`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `olympus`.`Message` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `contenu` TEXT NULL ,
  `date` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `olympus`.`Theme`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `olympus`.`Theme` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `libelle` VARCHAR(45) NULL ,
  `description` TEXT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `olympus`.`Formation`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `olympus`.`Formation` (
  `id` INT NOT NULL ,
  `titre` VARCHAR(45) NULL ,
  `description` TEXT NULL ,
  `date` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `olympus`.`MoyenPaiement`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `olympus`.`MoyenPaiement` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `libelle` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

USE `olympus` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
