CREATE DATABASE fact17
  DEFAULT CHARACTER SET utf8mb4
  DEFAULT COLLATE utf8mb4_unicode_ci;

USE fact17;

CREATE TABLE users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
    date_add TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    login VARCHAR(128) NOT NULL,
    password CHAR(64) NOT NULL
);