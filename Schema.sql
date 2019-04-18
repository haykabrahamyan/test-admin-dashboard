/*
SQLyog Ultimate v10.42 
MySQL - 5.5.5-10.1.37-MariaDB : Database - films
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`films` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `films`;

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `categories` */

insert  into `categories`(`id`,`name`,`created_at`,`updated_at`) values (1,'Мультфильмы','2019-03-25 09:11:32','2019-03-25 09:11:32'),(2,'Аниме','2019-03-25 09:11:44','2019-03-25 09:11:44'),(3,'Драмы','2019-03-25 09:16:49','2019-03-25 09:16:49'),(4,'Детективы','2019-03-25 09:17:10','2019-03-25 09:17:10'),(5,'Биография','2019-03-25 09:17:18','2019-03-25 09:17:18'),(6,'Мелодрамы','2019-03-25 09:17:27','2019-03-25 09:17:27'),(7,'Военные','2019-03-25 09:17:35','2019-03-25 09:17:35'),(8,'Ужасы','2019-03-25 09:25:06','2019-03-25 09:25:06');

/*Table structure for table `category_film` */

DROP TABLE IF EXISTS `category_film`;

CREATE TABLE `category_film` (
  `category_id` bigint(20) unsigned NOT NULL,
  `film_id` bigint(20) unsigned NOT NULL,
  KEY `category_film_category_id_foreign` (`category_id`),
  KEY `category_film_film_id_foreign` (`film_id`),
  CONSTRAINT `category_film_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `category_film_film_id_foreign` FOREIGN KEY (`film_id`) REFERENCES `films` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `category_film` */

insert  into `category_film`(`category_id`,`film_id`) values (1,1),(2,1),(5,2),(7,2),(2,3),(3,3),(4,3),(5,3),(3,4),(4,4),(6,4),(2,5),(3,5),(5,5),(4,6),(7,6),(8,6),(3,7),(5,7),(7,7),(8,7);

/*Table structure for table `films` */

DROP TABLE IF EXISTS `films`;

CREATE TABLE `films` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order` bigint(20) NOT NULL DEFAULT '1',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `length` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `premiere` datetime NOT NULL,
  `is_top` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `films_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `films` */

insert  into `films`(`id`,`order`,`name`,`description`,`length`,`premiere`,`is_top`,`image`,`slug`,`created_at`,`updated_at`) values (1,1,'Xobbit','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum','120 min','2019-03-08 00:00:00',1,'images/film/h11_5c98a283c2179.jpg','fc5d80ab11d8d84be8680946b0c406992c97e33f','2019-03-25 09:19:47','2019-03-25 09:42:27'),(2,2,'Avatar','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum','180 min','2019-03-16 00:00:00',1,'images/film/h5_5c989d5908d0d.jpg','41edaf2613c7e923205769121f06d38d7126f587','2019-03-25 09:20:25','2019-03-25 09:20:25'),(3,3,'Vladimir Abrahamyan','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum','120 min','2019-03-09 00:00:00',0,'images/film/c5_5c989dcdc8f8d.jpg','950cab15261fd9954bbe67a8f06c8da7b221691a','2019-03-25 09:22:21','2019-03-25 09:22:21'),(4,4,'Святая Агата','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum','50 min','2019-03-06 00:00:00',1,'images/film/h9_5c989e0a13c2f.jpg','34411c019721cfe56ba385989ba28c2ed4c6e13d','2019-03-25 09:23:22','2019-03-25 09:23:22'),(5,5,'What is Lorem Ipsum?','События фильма разворачиваются в начале 20-го века. Мы знакомимся с Андреем Долматовым – поручиком, который в ходе верховой прогулки встречает очаровательную княжну Чернышеву. Между Верой и...','50 min','2019-03-15 00:00:00',1,'images/film/h1_5c989e3b5b3d2.jpg','c1094dab6186577fef711778104a26980b5121cc','2019-03-25 09:24:11','2019-03-25 09:24:11'),(6,6,'Сверхъестественное (14 сезон)','Раритетная машина, эффектная внешность, модная одежда – при первом взгляде на братьев Винчестер можно подумать, что перед нами странствующие модели, но в действительности у них намного...','120 min','2019-03-07 00:00:00',0,'images/film/h9_5c989eb8a29b0.jpg','f84b542a288d784111d35b476a92677da4f99c06','2019-03-25 09:26:16','2019-03-25 09:26:16'),(7,7,'Наследие (1 сезон)','Несмотря на то, что вампиры и гибриды бессмертны, рано или поздно они понимают, что надо дать дорогу новому поколению, а самим отправляться на покой. Аларик Зальцман, известный зрителям по...','180 min','2019-04-20 00:00:00',0,'images/film/h2_5c989eee9f7c5.jpg','9b99fa0bfe9503221380dfc39fce7e561f9fadd1','2019-03-25 09:27:10','2019-03-25 09:27:10');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2019_03_23_132852_create_roles_table',1),(2,'2019_03_23_132855_create_users_table',1),(3,'2019_03_23_132860_create_password_resets_table',1),(4,'2019_03_23_141434_create_categories_table',1),(5,'2019_03_23_141629_create_films_table',1),(6,'2019_03_23_142130_add_pivot_table_categories_films',1),(7,'2019_03_23_155238_add_user_role_relationship',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`display_name`,`created_at`,`updated_at`) values (1,'admin','Administrator','2019-03-25 09:01:11','2019-03-25 09:01:11'),(2,'user','User','2019-03-25 09:01:11','2019-03-25 09:01:11');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`role_id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values (1,1,'Admin','admin@admin.com',NULL,'$2y$10$oYROwU6zwCl7cLUO9skDSeOqPy9WjJeu5nlaTyKRxDyxwF3sEoUza','jEY9Er2Lnzfybr7go8wJVpcge2eBYznaukH051ssF7uwrtYSupqZLignn2D5','2019-03-25 09:01:11','2019-03-25 09:01:11');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
