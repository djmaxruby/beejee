CREATE TABLE `schedules` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`user_name` VARCHAR(256) NULL DEFAULT NULL,
	`email` VARCHAR(256) NULL DEFAULT NULL,
	`schedule_text` TEXT NULL,
	`created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
	`picture_name` VARCHAR(50) NULL DEFAULT NULL,
	`is_complete` INT(11) NULL DEFAULT NULL,
	PRIMARY KEY (`id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB;


INSERT INTO schedules(user_name,email,schedule_text,picture_name,is_complete)
VALUES ('Максим Бекетов','mbeketov18@gmail.com','Сделать первую задачу','picture.jpg',false);
