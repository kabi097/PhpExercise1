CREATE TABLE IF NOT EXISTS `menu` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `parent_id` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_menu_menu_idx` (`parent_id` ASC),
  CONSTRAINT `fk_menu_menu`
    FOREIGN KEY (`parent_id`)
    REFERENCES `menu` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

INSERT INTO `menu` (`id`, `name`) VALUES ('1', 'Kategoria główna');
INSERT INTO `menu` (`id`, `name`, `parent_id`) VALUES ('2', 'Podkategoria 1', '1');
INSERT INTO `menu` (`id`, `name`, `parent_id`) VALUES ('3', 'Podkategoria 1.1', '2');
INSERT INTO `menu` (`id`, `name`, `parent_id`) VALUES ('4', 'Podkategoria 1.2', '2');
INSERT INTO `menu` (`id`, `name`, `parent_id`) VALUES ('5', 'Podkategoria 2', '1');
INSERT INTO `menu` (`id`, `name`, `parent_id`) VALUES ('6', 'Podkategoria 2.1', '5');
INSERT INTO `menu` (`id`, `name`, `parent_id`) VALUES ('7', 'Podkategoria 2.2', '5');