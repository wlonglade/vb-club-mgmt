-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS = @@UNIQUE_CHECKS, UNIQUE_CHECKS = 0;
SET @OLD_FOREIGN_KEY_CHECKS = @@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS = 0;
SET @OLD_SQL_MODE = @@SQL_MODE, SQL_MODE = 'TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema vb_club_mgmt
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema vb_club_mgmt
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `vb_club_mgmt` DEFAULT CHARACTER SET utf8;
USE `vb_club_mgmt`;

-- -----------------------------------------------------
-- Table `vb_club_mgmt`.`contact`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vb_club_mgmt`.`contact`
(
  `contact_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `data`       JSON             NULL     DEFAULT NULL,
  `created_at` TIMESTAMP        NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP        NULL     DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
)
  ENGINE = InnoDB
  DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `vb_club_mgmt`.`group`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vb_club_mgmt`.`group`
(
  `group_id`   INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `data`       JSON             NULL     DEFAULT NULL,
  `created_at` TIMESTAMP        NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP        NULL     DEFAULT NULL,
  PRIMARY KEY (`group_id`)
)
  ENGINE = InnoDB
  DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `vb_club_mgmt`.`contact_group`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vb_club_mgmt`.`contact_group`
(
  `contact_id` INT(10) UNSIGNED NOT NULL,
  `group_id`   INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`contact_id`, `group_id`),
  INDEX `fk_contact_has_group_group1_idx` (`group_id` ASC),
  INDEX `fk_contact_has_group_contact1_idx` (`contact_id` ASC),
  CONSTRAINT `fk_contact_has_group_contact1`
    FOREIGN KEY (`contact_id`)
      REFERENCES `vb_club_mgmt`.`contact` (`contact_id`)
      ON DELETE CASCADE
      ON UPDATE CASCADE,
  CONSTRAINT `fk_contact_has_group_group1`
    FOREIGN KEY (`group_id`)
      REFERENCES `vb_club_mgmt`.`group` (`group_id`)
      ON DELETE CASCADE
      ON UPDATE CASCADE
)
  ENGINE = InnoDB
  DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `vb_club_mgmt`.`event`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vb_club_mgmt`.`event`
(
  `event_id`     INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name`         VARCHAR(255)     NULL     DEFAULT NULL,
  `date`         DATETIME         NULL     DEFAULT NULL,
  `description`  TEXT             NULL     DEFAULT NULL,
  `participants` JSON             NULL     DEFAULT NULL,
  `data`         JSON             NULL     DEFAULT NULL,
  `created_at`   TIMESTAMP        NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at`   TIMESTAMP        NULL     DEFAULT NULL,
  PRIMARY KEY (`event_id`)
)
  ENGINE = InnoDB
  DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `vb_club_mgmt`.`opponent`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vb_club_mgmt`.`opponent`
(
  `opponent_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `data`        JSON             NULL     DEFAULT NULL,
  `created_at`  TIMESTAMP        NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at`  TIMESTAMP        NULL     DEFAULT NULL,
  PRIMARY KEY (`opponent_id`)
)
  ENGINE = InnoDB
  DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `vb_club_mgmt`.`season`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vb_club_mgmt`.`season`
(
  `season_id`  INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `data`       JSON             NULL     DEFAULT NULL,
  `created_at` TIMESTAMP        NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP        NULL     DEFAULT NULL,
  PRIMARY KEY (`season_id`)
)
  ENGINE = InnoDB
  DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `vb_club_mgmt`.`tournament`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vb_club_mgmt`.`tournament`
(
  `tournament_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `season_id`     INT(10) UNSIGNED NOT NULL,
  `data`          JSON             NULL     DEFAULT NULL,
  `created_at`    TIMESTAMP        NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at`    TIMESTAMP        NULL     DEFAULT NULL,
  PRIMARY KEY (`tournament_id`),
  INDEX `fk_tournament_season1_idx` (`season_id` ASC),
  CONSTRAINT `fk_tournament_season1`
    FOREIGN KEY (`season_id`)
      REFERENCES `vb_club_mgmt`.`season` (`season_id`)
      ON DELETE CASCADE
      ON UPDATE CASCADE
)
  ENGINE = InnoDB
  DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `vb_club_mgmt`.`match`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vb_club_mgmt`.`match`
(
  `match_id`          INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tournament_id`     INT(10) UNSIGNED NOT NULL,
  `opponent_id`       INT(10) UNSIGNED NOT NULL,
  `date`              DATETIME         NULL     DEFAULT NULL,
  `available_players` JSON             NULL     DEFAULT NULL,
  `confirmed_players` JSON             NULL     DEFAULT NULL,
  `data`              JSON             NULL     DEFAULT NULL,
  `created_at`        TIMESTAMP        NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at`        TIMESTAMP        NULL     DEFAULT NULL,
  PRIMARY KEY (`match_id`),
  INDEX `fk_match_tournament1_idx` (`tournament_id` ASC),
  INDEX `fk_match_oponent1_idx` (`opponent_id` ASC),
  CONSTRAINT `fk_match_oponent1`
    FOREIGN KEY (`opponent_id`)
      REFERENCES `vb_club_mgmt`.`opponent` (`opponent_id`)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  CONSTRAINT `fk_match_tournament1`
    FOREIGN KEY (`tournament_id`)
      REFERENCES `vb_club_mgmt`.`tournament` (`tournament_id`)
      ON DELETE CASCADE
      ON UPDATE CASCADE
)
  ENGINE = InnoDB
  DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `vb_club_mgmt`.`post`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vb_club_mgmt`.`post`
(
  `post_id`    INT(11)      NOT NULL,
  `title`      VARCHAR(255) NULL     DEFAULT NULL,
  `content`    TEXT         NULL     DEFAULT NULL,
  `data`       JSON         NULL     DEFAULT NULL,
  `created_at` TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP    NULL     DEFAULT NULL,
  PRIMARY KEY (`post_id`)
)
  ENGINE = InnoDB
  DEFAULT CHARACTER SET = utf8;


SET SQL_MODE = @OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS = @OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS = @OLD_UNIQUE_CHECKS;
