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

-- Inserting records

--Type 1:

INSERT INTO  users (
    first_name, 
    last_name, 
    email, 
    password, 
    registration_date)

    VALUES (
        'Larry',
        'Ullman',
        'phpmysql12@DMCInsights.com',
        SHA('password'),
        now() 
    );


-- Type 2:

    INSERT INTO users
    VALUES (
        NULL,
        'John', 
        'Lennon', 
        'john@beatles.com', 
        SHA('Happin3ss'), 
        now() 
        );


-- Type 3:

INSERT INTO users(
first_name, last_name, email, password, registration_date) 
VALUES('Paul', 'McCartney', 'paul@beatles.com', SHA('letITbe'), now()), 
('George', 'Harrison', 'george@beatles.com', SHA('something'), now()), 
('Ringo', 'Starr', 'ringo@beatles.com', SHA('thisboy'), now()), 
('Nick', 'Starr', 'nick@beatles.com', SHA('paperclip'), now()), 
('Russel', 'Starrs', 'russel@beatles.com', SHA('awesome'), now());


-- Selecting Data

-- Retrieve every row stored within that table:
SELECT * FROM users;

-- Retrieve just the first and last names from users
SELECT first_name, last_name FROM users;


-- Using Conditionals

-- Select records for every user based on specific user id
SELECT * FROM users WHERE
(user_id >= 1) AND (user_id <= 3);

-- Select all first name of users whose last name is Starr
SELECT first_name FROM users WHERE last_name='Starr';


-- Using LIKE and NOT LIKE

SELECT * FROM users WHERE last_name
LIKE 'Starr%';

SELECT first_name, last_name FROM users WHERE email
NOT LIKE '%@beatles.com';


-- Sorting Query Results

-- To use sort data
SELECT first_name, last_name FROM users ORDER BY last_name;

-- Show all users by date registered
SELECT * FROM users ORDER BY registration_date
DESC;
