-- MySQL Script generated by MySQL Workbench
-- mié 05 sep 2018 21:00:54 -05
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';





-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `mydb` ;

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`Usuarios` ;

CREATE TABLE IF NOT EXISTS `mydb`.`Usuarios` (
  `ID` INT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Identificador universal del usuario en la aplicación',
  `Nombre` VARCHAR(45) NOT NULL,
  `Correo` VARCHAR(80) NOT NULL,
  `Clave` VARCHAR(80) NOT NULL,
  `Movil` VARCHAR(15) NOT NULL,
  `Perfil` INT UNSIGNED NOT NULL DEFAULT 1 COMMENT 'Fija el perfil mediante combinación binaria ',
  `Estado` ENUM('Activo', 'Pausado', 'Vencido') NOT NULL COMMENT 'Mantiene el estado del Usuario',
  `Creacion` DATETIME NOT NULL COMMENT 'fija el momento en que se creó la cuenta',
  `Vencimiento` DATETIME NOT NULL COMMENT 'Determina cuando vence la cuenta',
  PRIMARY KEY (`ID`))
ENGINE = InnoDB
COMMENT = 'Tabla para almacenar los distintos usuarios de la aplicación';


-- -----------------------------------------------------
-- Table `mydb`.`Clentes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`Clentes` ;

CREATE TABLE IF NOT EXISTS `mydb`.`Clentes` (
)
ENGINE = InnoDB
COMMENT = 'Tabla que almacena los datos del perfil de cliente';


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
