-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema smarty-blog
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema smarty-blog
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `smarty-blog` ;
USE `smarty-blog` ;

-- -----------------------------------------------------
-- Table `smarty-blog`.`articles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `smarty-blog`.`articles` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) COLLATE 'utf8mb3_unicode_ci' NOT NULL,
  `description` TEXT COLLATE 'utf8mb3_unicode_ci' NOT NULL,
  `text` TEXT COLLATE 'utf8mb3_unicode_ci' NOT NULL,
  `image` VARCHAR(255) COLLATE 'utf8mb3_unicode_ci' NOT NULL,
  `views` INT UNSIGNED NOT NULL,
  `published_at` TIMESTAMP NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `views` (`views` ASC) INVISIBLE,
  INDEX `published_at` (`published_at` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `smarty-blog`.`categories`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `smarty-blog`.`categories` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) COLLATE 'utf8mb3_unicode_ci' NOT NULL,
  `description` TEXT COLLATE 'utf8mb3_unicode_ci' NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `smarty-blog`.`categories_articles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `smarty-blog`.`categories_articles` (
  `categories_id` INT UNSIGNED NOT NULL,
  `articles_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`categories_id`, `articles_id`),
  INDEX `categories_articles1_articles1_idx` (`articles_id` ASC) VISIBLE,
  INDEX `categories_articles1_categories_idx` (`categories_id` ASC) VISIBLE,
  CONSTRAINT `categories_articles1_categories`
    FOREIGN KEY (`categories_id`)
    REFERENCES `smarty-blog`.`categories` (`id`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
  CONSTRAINT `categories_articles1_articles1`
    FOREIGN KEY (`articles_id`)
    REFERENCES `smarty-blog`.`articles` (`id`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;