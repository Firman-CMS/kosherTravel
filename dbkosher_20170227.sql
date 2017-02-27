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
	`phone` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`mobile` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`email` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`facebook` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`instagram` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`twitter` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL )
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
	`image` VarChar( 5000 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`count_views` Int( 11 ) NULL,
	`user_id` Int( 255 ) NOT NULL,
	`create_at` DateTime NOT NULL,
	`publish_at` DateTime NULL,
	`update_at` DateTime NULL,
	`status` Int( 255 ) NOT NULL,
	`id_parent` TinyInt( 255 ) NOT NULL,
	`submenu_id` TinyInt( 255 ) NOT NULL,
	`is_delete` TinyInt( 2 ) NOT NULL DEFAULT '0',
	PRIMARY KEY ( `id_content` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 6;
-- ---------------------------------------------------------


-- CREATE TABLE "foto" -------------------------------------
CREATE TABLE `foto` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`nama_foto` VarChar( 250 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`token` VarChar( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 8;
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
AUTO_INCREMENT = 74;
-- ---------------------------------------------------------


-- CREATE TABLE "menu" -------------------------------------
CREATE TABLE `menu` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`updated_at` DateTime NULL,
	`description` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`summary` Text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`image` VarChar( 500 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`id_parent` Int( 5 ) NOT NULL,
	`created_at` DateTime NOT NULL,
	PRIMARY KEY ( `id` ),
	CONSTRAINT `id` UNIQUE( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 5;
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
AUTO_INCREMENT = 14;
-- ---------------------------------------------------------


-- CREATE TABLE "myproducts" -------------------------------
CREATE TABLE `myproducts` ( 
	`pid` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`product_name` VarChar( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`filename` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`email` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`phone` BigInt( 255 ) NULL,
	`subject` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`body` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`null` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	PRIMARY KEY ( `pid` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 3;
-- ---------------------------------------------------------


-- CREATE TABLE "parent_menu" ------------------------------
CREATE TABLE `parent_menu` ( 
	`id` Int( 255 ) AUTO_INCREMENT NOT NULL,
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`created_at` DateTime NOT NULL,
	`updated_at` DateTime NULL,
	`background` VarChar( 500 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 16;
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
INSERT INTO `contact_us`(`phone`,`mobile`,`email`,`facebook`,`instagram`,`twitter`) VALUES ( '+1-347-994-9284', '+972 (0) 72-258-770-5', 'avicam@kosherculinarytravel.coma', '', '', '' );
-- ---------------------------------------------------------


-- Dump data of "contents" ---------------------------------
INSERT INTO `contents`(`id_content`,`title`,`description`,`summary`,`content`,`image`,`count_views`,`user_id`,`create_at`,`publish_at`,`update_at`,`status`,`id_parent`,`submenu_id`,`is_delete`) VALUES ( '1', 'xasxas', 'dfsdfas', 'asdftdg', '<h1>Hello world!</h1>

<p>Put your contents here!.</p>
', 'MonFeb2019515920174452Thumb_pic_product_4A.png,MonFeb2019515920177495Thumb_pic_product_2A.png,', NULL, '1', '2017-02-16 17:49:20', '2017-02-23 23:39:53', '2017-02-24 11:49:23', '1', '1', '2', '0' );
INSERT INTO `contents`(`id_content`,`title`,`description`,`summary`,`content`,`image`,`count_views`,`user_id`,`create_at`,`publish_at`,`update_at`,`status`,`id_parent`,`submenu_id`,`is_delete`) VALUES ( '2', 'werrasdf', 'fsddddddddddd', 'sdfsdddddd', '<h1>Hello world!</h1>

<p>Put your contents here!.</p>
', 'MonFeb2019301820176624Title_3_Services.png,MonFeb2019340720178126Title_2_Tuscany_Itenary.png,', NULL, '2', '2017-02-16 17:50:13', '2017-02-23 23:38:38', '2017-02-16 18:52:20', '1', '10', '4', '0' );
INSERT INTO `contents`(`id_content`,`title`,`description`,`summary`,`content`,`image`,`count_views`,`user_id`,`create_at`,`publish_at`,`update_at`,`status`,`id_parent`,`submenu_id`,`is_delete`) VALUES ( '3', 'dasd', 'assssssssssss', 'asdddddddd', '<h1>Hello world!</h1>

<p>Put your contents here!.</p>
', 'TueFeb210560420171649Thumb_pic_service_2A.png,TueFeb2110055520175244Thumb_pic_home_5A.jpg,', NULL, '2', '2017-02-16 18:42:51', '2017-02-23 23:39:32', NULL, '1', '1', '2', '0' );
INSERT INTO `contents`(`id_content`,`title`,`description`,`summary`,`content`,`image`,`count_views`,`user_id`,`create_at`,`publish_at`,`update_at`,`status`,`id_parent`,`submenu_id`,`is_delete`) VALUES ( '4', 'ZCXXXXXxx Edit', 'cZCZX', 'ZCXXX Edit', '<h1>Hello world!</h1>

<p>Put your contents here!.</p>
', 'FriFeb2411381620179882Thumb_pic_service_1A.png,', NULL, '2', '2017-02-16 18:48:26', '2017-02-23 23:38:49', '2017-02-24 11:49:47', '1', '1', '3', '0' );
INSERT INTO `contents`(`id_content`,`title`,`description`,`summary`,`content`,`image`,`count_views`,`user_id`,`create_at`,`publish_at`,`update_at`,`status`,`id_parent`,`submenu_id`,`is_delete`) VALUES ( '5', 'Coba Content Home Destination Edit', 'Coba Content Home Destination', 'Coba Content Home Destination', '<h1>Hello world!</h1>

<p>Put your contents here!.</p>

<p>Coba Content Home Destination</p>
', 'FriFeb2411261520175425Thumb_pic_about_1About.png,FriFeb2411261520173470Thumb_pic_Tuscany_1A.png,FriFeb2411261620176835Thumb_pic_service_3A.png,', NULL, '1', '2017-02-24 11:25:56', NULL, '2017-02-24 11:26:38', '0', '1', '3', '0' );
-- ---------------------------------------------------------


-- Dump data of "foto" -------------------------------------
INSERT INTO `foto`(`id`,`nama_foto`,`token`) VALUES ( '1', 'welcome2017.png', '0.3419506251800557' );
INSERT INTO `foto`(`id`,`nama_foto`,`token`) VALUES ( '2', 'reminder_pickup.png', '0.8216116048398648' );
INSERT INTO `foto`(`id`,`nama_foto`,`token`) VALUES ( '3', 'reminder_payment.png', '0.7267296403877713' );
INSERT INTO `foto`(`id`,`nama_foto`,`token`) VALUES ( '4', 'kirim_rumah_-_cc.png', '0.2756059410023365' );
INSERT INTO `foto`(`id`,`nama_foto`,`token`) VALUES ( '5', 'batal2.png', '0.5421903191930272' );
INSERT INTO `foto`(`id`,`nama_foto`,`token`) VALUES ( '6', 'welcome20171.png', '0.9715363247672343' );
INSERT INTO `foto`(`id`,`nama_foto`,`token`) VALUES ( '7', 'barang_dikirim2.png', '0.4344583433828564' );
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
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-01-24 22:19:59', '36' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-01-24 22:21:35', '37' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-01-25 18:16:12', '38' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-01-25 22:11:39', '39' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-01-28 16:34:35', '40' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-01-29 10:42:05', '41' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-02-04 19:20:13', '42' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-02-05 13:01:08', '43' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-02-06 22:09:08', '44' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-02-07 21:30:58', '45' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-02-08 08:40:36', '46' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-02-08 22:37:54', '47' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-02-09 11:11:28', '48' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '4', '2017-02-09 11:11:58', '49' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-02-09 14:36:32', '50' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-02-09 21:58:45', '51' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-02-10 09:19:22', '52' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-02-11 09:04:22', '53' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-02-11 14:09:25', '54' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-02-11 23:28:01', '55' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-02-12 20:56:45', '56' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-02-13 23:00:19', '57' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-02-14 16:49:06', '58' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-02-15 22:12:28', '59' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-02-16 17:40:02', '60' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '2', '2017-02-16 17:49:54', '61' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-02-17 19:15:53', '62' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-02-19 09:08:13', '63' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-02-19 19:15:25', '64' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-02-20 08:42:11', '65' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-02-20 14:26:12', '66' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-02-21 00:10:33', '67' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-02-21 08:30:35', '68' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-02-22 09:03:46', '69' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-02-22 18:54:32', '70' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-02-23 23:14:20', '71' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '1', '2017-02-24 08:58:37', '72' );
INSERT INTO `log_login`(`user_id`,`date`,`id`) VALUES ( '2', '2017-02-24 11:49:36', '73' );
-- ---------------------------------------------------------


-- Dump data of "menu" -------------------------------------
INSERT INTO `menu`(`id`,`name`,`updated_at`,`description`,`summary`,`image`,`id_parent`,`created_at`) VALUES ( '1', 'Luxury Private Travel', '2017-02-12 01:00:27', 'Over the past five years, Kosher Culinary Travel has been coordinating and arranging exclusive, high-end, bespoke kosher vacations for families and groups.', NULL, 'Title_3_About.png', '10', '2017-02-10 15:12:41' );
INSERT INTO `menu`(`id`,`name`,`updated_at`,`description`,`summary`,`image`,`id_parent`,`created_at`) VALUES ( '2', 'Luxury Private Travel', NULL, 'Over the past five years, Kosher Culinary Travel has been coordinating and arranging exclusive, high-end, bespoke kosher vacations for families and groups.', NULL, 'Title_1_home.png', '1', '2017-02-10 15:26:37' );
INSERT INTO `menu`(`id`,`name`,`updated_at`,`description`,`summary`,`image`,`id_parent`,`created_at`) VALUES ( '3', 'Destinations', NULL, 'Over the past five years, Kosher Culinary Travel has been coordinating and arranging exclusive, high-end, bespoke kosher vacations for families and groups.', NULL, 'Title_3_home.png', '1', '2017-02-10 15:46:14' );
INSERT INTO `menu`(`id`,`name`,`updated_at`,`description`,`summary`,`image`,`id_parent`,`created_at`) VALUES ( '4', 'Our Story', NULL, 'Over the past five years, Kosher Culinary Travel has been coordinating and arranging exclusive', NULL, 'Title_1_About.png', '10', '2017-02-10 15:47:28' );
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
INSERT INTO `messages`(`id`,`from`,`email`,`phone`,`subject`,`body`,`created_at`,`status`,`notif`) VALUES ( '4', '', '', '', '', '', '2017-01-25 19:09:43', '1', '1' );
INSERT INTO `messages`(`id`,`from`,`email`,`phone`,`subject`,`body`,`created_at`,`status`,`notif`) VALUES ( '5', '', '', '', '', '', '2017-01-25 19:14:32', '1', '1' );
INSERT INTO `messages`(`id`,`from`,`email`,`phone`,`subject`,`body`,`created_at`,`status`,`notif`) VALUES ( '6', '', '', '', '', '', '2017-01-25 22:20:46', '1', '1' );
INSERT INTO `messages`(`id`,`from`,`email`,`phone`,`subject`,`body`,`created_at`,`status`,`notif`) VALUES ( '7', '0', '0', '0', '0', '0', '2017-02-14 18:50:23', '1', '1' );
INSERT INTO `messages`(`id`,`from`,`email`,`phone`,`subject`,`body`,`created_at`,`status`,`notif`) VALUES ( '8', '0', '0', '0', '0', '0', '2017-02-14 18:50:58', '1', '0' );
INSERT INTO `messages`(`id`,`from`,`email`,`phone`,`subject`,`body`,`created_at`,`status`,`notif`) VALUES ( '9', 'asdfsd', 'asdfasdf', 'asdfsda', 'asdfasdf', 'sdfasdfasdfa', '2017-02-24 17:13:53', '1', '1' );
INSERT INTO `messages`(`id`,`from`,`email`,`phone`,`subject`,`body`,`created_at`,`status`,`notif`) VALUES ( '10', 'asdfsd', 'asdfasdf', '081221934964', 'tanya dong', 'tanya dong price listnya', '2017-02-24 17:15:28', '1', '1' );
INSERT INTO `messages`(`id`,`from`,`email`,`phone`,`subject`,`body`,`created_at`,`status`,`notif`) VALUES ( '11', 'asdfsd lagi', 'asdfasdf', '081221934964', 'tanya dong', 'tanya dong price listnya', '2017-02-24 17:19:38', '1', '1' );
INSERT INTO `messages`(`id`,`from`,`email`,`phone`,`subject`,`body`,`created_at`,`status`,`notif`) VALUES ( '12', 'asdfsd lagi lagi', 'asdfasdf', '081221934964', 'tanya dong', 'tanya dong price listnya', '2017-02-24 17:21:29', '1', '1' );
INSERT INTO `messages`(`id`,`from`,`email`,`phone`,`subject`,`body`,`created_at`,`status`,`notif`) VALUES ( '13', 'asdfsd', 'asdfasdf', 'asdfsda', 'ask price list', 'ask price list
asdfsda', '2017-02-24 17:25:32', '1', '1' );
-- ---------------------------------------------------------


-- Dump data of "myproducts" -------------------------------
INSERT INTO `myproducts`(`pid`,`product_name`,`filename`,`name`,`email`,`phone`,`subject`,`body`,`null`) VALUES ( '1', '1. Best Blue Shirt Product One', 'SunFeb1919494320173232Title_4_home.png,SunFeb1919494320174583Title_3_home.png,SunFeb1919494320172583Title_2_home.png,', '', '', '0', '', '', '' );
INSERT INTO `myproducts`(`pid`,`product_name`,`filename`,`name`,`email`,`phone`,`subject`,`body`,`null`) VALUES ( '2', '2. Best Yellow Shirt Product Two', 'MonFeb2012135420174254Title_2_Services.png,', '', '', '0', '', '', '' );
-- ---------------------------------------------------------


-- Dump data of "parent_menu" ------------------------------
INSERT INTO `parent_menu`(`id`,`name`,`created_at`,`updated_at`,`background`) VALUES ( '1', 'Home', '2017-02-09 13:34:39', '2017-02-11 15:24:03', 'BG_Main.png' );
INSERT INTO `parent_menu`(`id`,`name`,`created_at`,`updated_at`,`background`) VALUES ( '10', 'About Us', '2017-02-09 16:41:16', '2017-02-11 17:19:50', 'BG_Main(about).png' );
INSERT INTO `parent_menu`(`id`,`name`,`created_at`,`updated_at`,`background`) VALUES ( '11', 'Blog', '2017-02-09 16:41:28', '2017-02-11 18:59:12', 'Thumb_pic_product_1A1.png' );
INSERT INTO `parent_menu`(`id`,`name`,`created_at`,`updated_at`,`background`) VALUES ( '12', 'Product Offering', '2017-02-09 16:43:02', '2017-02-11 17:20:19', 'BG_Main(product).png' );
INSERT INTO `parent_menu`(`id`,`name`,`created_at`,`updated_at`,`background`) VALUES ( '13', 'Travel Services', '2017-02-09 16:43:36', '2017-02-11 17:22:32', 'BG_Main(services)3.png' );
INSERT INTO `parent_menu`(`id`,`name`,`created_at`,`updated_at`,`background`) VALUES ( '15', 'Destinations', '2017-02-09 16:45:02', '2017-02-12 00:29:28', 'BG_Main(Tuscany)2.png' );
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


