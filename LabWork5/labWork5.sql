-- Creating Databases and Tables

CREATE DATABASE sitename;

USE sitename;

CREATE TABLE users (
     user_id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT, 
     first_name VARCHAR(15) NOT NULL,
     last_name VARCHAR(30) NOT NULL, 
     email VARCHAR(40) NOT NULL, password CHAR(40) NOT NULL, 
     registration_date DATETIME NOT NULL, 
     PRIMARY KEY (user_id) 
    ); 

SHOW COLUMNS FROM users;

