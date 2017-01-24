-- Valentina Studio --
-- MySQL dump --
-- ---------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- ---------------------------------------------------------


-- CREATE TABLE "contact_us" -------------------------------
CREATE TABLE `contact_us` ( 
	`phone` Int( 255 ) NULL,
	`mobile` Int( 255 ) NULL,
	`email` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`facebook` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`instagram` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`twitter` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`rights` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB;
-- ---------------------------------------------------------


-- CREATE TABLE "contents" ---------------------------------
CREATE TABLE `contents` ( 
	`id_content` Int( 255 ) AUTO_INCREMENT NOT NULL,
	`title` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`description` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`summary` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`content` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`image` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`count_views` Int( 11 ) NOT NULL,
	`user_id` Int( 255 ) NOT NULL,
	`created_at` DateTime NOT NULL,
	`publish_at` DateTime NOT NULL,
	`update_at` DateTime NOT NULL,
	`status` Int( 255 ) NOT NULL,
	PRIMARY KEY ( `id_content` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- ---------------------------------------------------------


-- CREATE TABLE "log_login" --------------------------------
CREATE TABLE `log_login` ( 
	`user_id` Int( 255 ) NOT NULL,
	`date` DateTime NOT NULL,
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 36;
-- ---------------------------------------------------------


-- CREATE TABLE "messages" ---------------------------------
CREATE TABLE `messages` ( 
	`id` Int( 255 ) AUTO_INCREMENT NOT NULL,
	`from` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`email` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`phone` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`subject` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`body` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`created_at` DateTime NOT NULL,
	`status` Int( 255 ) NOT NULL,
	`notif` Int( 255 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 4;
-- ---------------------------------------------------------


-- CREATE TABLE "parent_menu" ------------------------------
CREATE TABLE `parent_menu` ( 
	`id_parent` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`title` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`description` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`summary` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`image` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	PRIMARY KEY ( `id_parent` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- ---------------------------------------------------------


-- CREATE TABLE "user" -------------------------------------
CREATE TABLE `user` ( 
	`id` Int( 255 ) AUTO_INCREMENT NOT NULL,
	`email` VarChar( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`username` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`password` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`created_at` DateTime NOT NULL,
	`update_at` DateTime NULL,
	`is_admin` Int( 5 ) NOT NULL,
	`status` Int( 5 ) NOT NULL,
	PRIMARY KEY ( `id` ),
	CONSTRAINT `unique_email` UNIQUE( `email` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 7;
-- ---------------------------------------------------------


-- Dump data of "contact_us" -------------------------------
-- ---------------------------------------------------------


-- Dump data of "contents" ---------------------------------
-- ---------------------------------------------------------


-- Dump data of "log_login" --------------------------------
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-01-10 18:57:57', '1' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-01-10 18:58:16', '2' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-01-10 19:05:02', '3' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-01-10 19:13:02', '4' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-01-10 21:43:28', '5' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-01-10 22:27:34', '6' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-01-10 22:41:32', '7' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '2', '2017-01-10 22:46:14', '8' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-01-11 17:57:26', '9' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-01-11 17:58:45', '10' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-01-11 21:24:41', '11' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-01-11 22:08:20', '12' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '2', '2017-01-12 09:03:33', '13' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-01-12 17:22:24', '14' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-01-12 17:25:23', '15' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-01-12 21:49:02', '16' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-01-12 23:43:18', '17' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-01-14 15:22:44', '18' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-01-14 21:40:26', '19' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-01-14 21:40:36', '20' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-01-15 12:23:45', '21' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-01-16 09:15:32', '22' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-01-16 21:11:04', '23' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-01-17 22:02:11', '24' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-01-20 22:36:32', '25' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-01-21 12:49:57', '26' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-01-23 18:50:41', '27' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-01-23 18:54:00', '28' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-01-23 23:02:44', '29' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-01-24 08:21:21', '30' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-01-24 09:12:36', '31' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '2', '2017-01-24 09:14:39', '32' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-01-24 09:25:22', '33' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '2', '2017-01-24 09:26:01', '34' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '2', '2017-01-24 09:26:30', '35' );
-- ---------------------------------------------------------


-- Dump data of "messages" ---------------------------------
INSERT INTO `messages`(`id`,`from`,`email`,`phone`,`subject`,`body`,`created_at`,`status`,`notif`) VALUES ( '1', 'mansil', 'firman.766hi@gmail.com', '81221934964', 'ask price list', 'can you sent me your travel price list ?

Regards,
Firman', '2017-01-11 22:29:28', '0', '0' );
INSERT INTO `messages`(`id`,`from`,`email`,`phone`,`subject`,`body`,`created_at`,`status`,`notif`) VALUES ( '2', 'mansil', 'firman.766hi@gmail.com', '081221934964', 'ask price list', 'can you sent me your travel price list ?

Regards,
Firman', '2016-01-12 18:30:32', '1', '0' );
INSERT INTO `messages`(`id`,`from`,`email`,`phone`,`subject`,`body`,`created_at`,`status`,`notif`) VALUES ( '3', 'Slicing Frontend asdsaaaaaaaaaaaaaaaaaaaaaaaa', 'firman.766hi@gmail.com', '081221934964', 'tanya dong', 'sadassssssssssssssssssssssssssssssssssssssssssssssssssssssssssss
asadasdasaaaaaaaaaaaaaaaaaaaaaaaaaaaa
asdas
asdddddddddddddddddd', '2017-01-12 22:16:32', '1', '0' );
-- ---------------------------------------------------------


-- Dump data of "parent_menu" ------------------------------
-- ---------------------------------------------------------


-- Dump data of "user" -------------------------------------
INSERT INTO `user`(`id`,`email`,`username`,`password`,`created_at`,`update_at`,`is_admin`,`status`) VALUES ( '1', 'firman.766hi@gmail.com', 'mansil', 'c2341fd15d1a6434d878d46eae5c2c7902eee59c', '2017-01-09 22:47:39', NULL, '1', '1' );
INSERT INTO `user`(`id`,`email`,`username`,`password`,`created_at`,`update_at`,`is_admin`,`status`) VALUES ( '2', 'charlesilalahi@yahoo.co.id', 'charlesilalahi', '7def1fd877a75d3cda22cf681a46b8ad102476a2', '2017-01-10 22:45:41', NULL, '0', '1' );
INSERT INTO `user`(`id`,`email`,`username`,`password`,`created_at`,`update_at`,`is_admin`,`status`) VALUES ( '3', '', '', 'ab6b0ced4e46187eb8574b3714d51b3706dbc8c7', '2017-01-10 22:57:05', NULL, '1', '1' );
INSERT INTO `user`(`id`,`email`,`username`,`password`,`created_at`,`update_at`,`is_admin`,`status`) VALUES ( '4', 'charlesilalahi2@yahoo.co.id', 'charlesilalahi2', '7def1fd877a75d3cda22cf681a46b8ad102476a2', '2017-01-24 09:13:16', NULL, '0', '1' );
INSERT INTO `user`(`id`,`email`,`username`,`password`,`created_at`,`update_at`,`is_admin`,`status`) VALUES ( '6', 'asdasa@gmass.com', '', 'ab6b0ced4e46187eb8574b3714d51b3706dbc8c7', '2017-01-24 09:38:39', NULL, '1', '1' );
-- ---------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


