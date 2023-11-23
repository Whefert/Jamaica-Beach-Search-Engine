-- Author: Jefferson Daley
-- Date Created: November 21, 2023
-- Course: ITT307
-- Purpose: Store key information about beaches in Jamaica for retrieval by a web application

DROP DATABASE searchengine;

CREATE DATABASE searchengine;

USE searchengine;

CREATE TABLE parish(
parish_id INT NOT NULL AUTO_INCREMENT,
parish VARCHAR(25) NOT NULL,
PRIMARY KEY (parish_id)
);


CREATE TABLE address(
 address_id INT NOT NULL AUTO_INCREMENT,
 address_line1 VARCHAR(25) NOT NULL,
 address_line2 VARCHAR(25),
 parish_id INT NOT NULL,
 PRIMARY KEY (address_id),
 FOREIGN KEY (parish_id) REFERENCES Parish(parish_id)
);

CREATE TABLE beach(
 beach_id INT NOT NULL AUTO_INCREMENT,
 beach_name VARCHAR(25) NOT NULL,
 address_id INT NOT NULL,
 licensed BOOLEAN,
 entrance_fee SMALLINT,
 opening_hour TIME,
 closing_hour TIME,
 PRIMARY KEY (beach_id),
 FOREIGN KEY (address_id) REFERENCES address(address_id)
);

-- Test insert statements
INSERT INTO parish (parish) VALUES("Kingston");
INSERT INTO parish (parish) VALUES("St. Andrew");

INSERT INTO address (address_line1, address_line2, parish_id) VALUES("64 Tom Cringle Drive", "Plantation Heights", 1);
INSERT INTO address (address_line1, address_line2, parish_id) VALUES("10 Escarpment Road", "August Town", 2);

INSERT INTO beach (beach_name, address_id, licensed, entrance_fee, opening_hour, closing_hour) VALUES ("Jeff Beach", 1, TRUE, 100, "08:00:00","19:00:00");
INSERT INTO beach (beach_name, address_id, licensed, entrance_fee, opening_hour, closing_hour) VALUES ("Shan Beach", 2, FALSE, 0, "08:00:00","19:00:00");

SELECT beach.beach_name, beach.licensed, beach.entrance_fee, beach.opening_hour, beach.closing_hour, address.address_line1, address.address_line2, parish.parish FROM beach 
LEFT JOIN address ON beach.address_id = address.address_id
LEFT JOIN parish ON address.parish_id = parish.parish_id;