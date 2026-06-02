-- database.sql
-- Import this file in phpMyAdmin or MySQL to create the app database schema.

CREATE DATABASE IF NOT EXISTS `weboldal`
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE `weboldal`;

DROP TABLE IF EXISTS `contact_messages`;
DROP TABLE IF EXISTS `contacts`;
DROP TABLE IF EXISTS `hotel_images`;
DROP TABLE IF EXISTS `hotel_amenities`;
DROP TABLE IF EXISTS `amenities`;
DROP TABLE IF EXISTS `hotels`;

CREATE TABLE `hotels` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NOT NULL,
  `category` VARCHAR(100) NOT NULL,
  `stars` INT NULL,
  `location` VARCHAR(255) NOT NULL,
  `city` VARCHAR(100) NOT NULL,
  `price` DECIMAL(10,2) NOT NULL,
  `rooms` INT NULL,
  `checkin` VARCHAR(100) NULL,
  `checkout` VARCHAR(100) NULL,
  `room_types` VARCHAR(255) NOT NULL,
  `description` TEXT NOT NULL,
  `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `amenities` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_amenity_name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `hotel_amenities` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `hotel_id` INT UNSIGNED NOT NULL,
  `amenity_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_hotel_id` (`hotel_id`),
  KEY `idx_amenity_id` (`amenity_id`),
  CONSTRAINT `fk_hotel_amenities_hotel` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk_hotel_amenities_amenity` FOREIGN KEY (`amenity_id`) REFERENCES `amenities` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `hotel_images` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `hotel_id` INT UNSIGNED NOT NULL,
  `image_path` VARCHAR(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_hotel_images_hotel_id` (`hotel_id`),
  CONSTRAINT `fk_hotel_images_hotel` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `contacts` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `hotel_id` INT UNSIGNED NOT NULL,
  `contact_name` VARCHAR(255) NOT NULL,
  `contact_email` VARCHAR(255) NOT NULL,
  `contact_phone` VARCHAR(100) NULL,
  `website` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  KEY `idx_contacts_hotel_id` (`hotel_id`),
  CONSTRAINT `fk_contacts_hotel` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `contact_messages` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `surname` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `message` TEXT NOT NULL,
  `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `amenities` (`name`) VALUES
  ('breakfast'),
  ('wifi'),
  ('pool'),
  ('spa'),
  ('gym'),
  ('parking'),
  ('shuttle'),
  ('restaurant'),
  ('room_service'),
  ('pet_friendly');
