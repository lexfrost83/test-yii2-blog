<?php

use yii\db\Schema;
use yii\db\Migration;

class m160214_130743_create_table_comment extends Migration
{
    public function safeUp()
    {
        $this->execute("

        CREATE TABLE IF NOT EXISTS `blg_comment` (
  `id` INT NOT NULL,
  `user_id` INT NOT NULL,
  `blog_id` INT NOT NULL,
  `comment` VARCHAR(255) NOT NULL,
  `create_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  INDEX `fk_blg_comment_1_idx` (`user_id` ASC),
  INDEX `fk_blg_comment_2_idx` (`blog_id` ASC),
  CONSTRAINT `fk_blg_comment_1`
    FOREIGN KEY (`user_id`)
    REFERENCES `blg_user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_blg_comment_2`
    FOREIGN KEY (`blog_id`)
    REFERENCES `blg_blog` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB CHARSET UTF8;

        ");
    }

    public function safeDown()
    {
    }
}
