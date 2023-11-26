-- Author: Jefferson Daley
-- Date Created: November 21, 2023
-- Course: ITT 307 Internet Authoring II
-- Purpose: Store key information about beaches in Jamaica for retrieval by a web application

DROP DATABASE searchengine;

CREATE DATABASE searchengine;

USE searchengine;

CREATE TABLE parish(
parish_id INT NOT NULL AUTO_INCREMENT,
parish VARCHAR(25) NOT NULL UNIQUE,
PRIMARY KEY (parish_id)
);

CREATE TABLE beach(
 beach_id INT NOT NULL AUTO_INCREMENT,
 beach_name VARCHAR(25) NOT NULL UNIQUE,
 parish_id INT NOT NULL,
 owner_1 VARCHAR(30) NOT NULL,
 owner_2 VARCHAR(30),
 licensed BOOLEAN,
 entrance_fee SMALLINT,
 opening_hour TIME,
 closing_hour TIME,
 image VARCHAR(100),
 PRIMARY KEY (beach_id),
 FOREIGN KEY (parish_id) REFERENCES parish(parish_id)
);

