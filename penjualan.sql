-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema penjualan
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `penjualan` ;

-- -----------------------------------------------------
-- Schema penjualan
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `penjualan` DEFAULT CHARACTER SET utf8 ;
USE `penjualan` ;

-- -----------------------------------------------------
-- Table `penjualan`.`barang`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `penjualan`.`barang` ;

CREATE TABLE IF NOT EXISTS `penjualan`.`barang` (
  `kode_barang` VARCHAR(10) NOT NULL,
  `nama_barang` VARCHAR(255) NULL,
  `harga` INT NULL,
  PRIMARY KEY (`kode_barang`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `penjualan`.`penjual`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `penjualan`.`penjual` ;

CREATE TABLE IF NOT EXISTS `penjualan`.`penjual` (
  `kode_penjual` VARCHAR(10) NOT NULL,
  `nama_penjual` VARCHAR(255) NULL,
  PRIMARY KEY (`kode_penjual`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `penjualan`.`pembeli`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `penjualan`.`pembeli` ;

CREATE TABLE IF NOT EXISTS `penjualan`.`pembeli` (
  `kode_pembeli` VARCHAR(10) NOT NULL,
  `nama_pembeli` VARCHAR(255) NULL,
  `no_tlpn` VARCHAR(20) NULL,
  PRIMARY KEY (`kode_pembeli`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `penjualan`.`keranjang`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `penjualan`.`keranjang` ;

CREATE TABLE IF NOT EXISTS `penjualan`.`keranjang` (
  `id_keranjang` INT NOT NULL AUTO_INCREMENT,
  `kode_pembeli` VARCHAR(10) NOT NULL,
  `kode_penjual` VARCHAR(10) NOT NULL,
  `tanggal_jual` DATETIME NULL,
  `total_belanja` INT NULL,
  `total_item` INT NULL,
  PRIMARY KEY (`id_keranjang`, `kode_pembeli`, `kode_penjual`),
  INDEX `fk_keranjang_pembeli_idx` (`kode_pembeli` ASC),
  INDEX `fk_keranjang_penjual1_idx` (`kode_penjual` ASC),
  CONSTRAINT `fk_keranjang_pembeli`
    FOREIGN KEY (`kode_pembeli`)
    REFERENCES `penjualan`.`pembeli` (`kode_pembeli`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_keranjang_penjual1`
    FOREIGN KEY (`kode_penjual`)
    REFERENCES `penjualan`.`penjual` (`kode_penjual`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `penjualan`.`isi_keranjang`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `penjualan`.`isi_keranjang` ;

CREATE TABLE IF NOT EXISTS `penjualan`.`isi_keranjang` (
  `id_isi` INT NOT NULL,
  `id_keranjang` INT NOT NULL,
  `kode_barang` VARCHAR(10) NOT NULL,
  `harga` INT NULL,
  `jumlah` INT NULL,
  `total` INT NULL,
  PRIMARY KEY (`id_isi`, `kode_barang`, `id_keranjang`),
  INDEX `fk_isi_keranjang_barang1_idx` (`kode_barang` ASC),
  INDEX `fk_isi_keranjang_keranjang1_idx` (`id_keranjang` ASC),
  CONSTRAINT `fk_isi_keranjang_barang1`
    FOREIGN KEY (`kode_barang`)
    REFERENCES `penjualan`.`barang` (`kode_barang`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_isi_keranjang_keranjang1`
    FOREIGN KEY (`id_keranjang`)
    REFERENCES `penjualan`.`keranjang` (`id_keranjang`)
    ON DELETE CASCADE
    ON UPDATE RESTRICT)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
