-- Create the database
CREATE DATABASE test_db;

-- Select the database
USE test_db;

-- Create the 'personne' table
CREATE TABLE personne (
    email VARCHAR(255) PRIMARY KEY,
    password VARCHAR(255),
    titre VARCHAR(255),
    nom VARCHAR(255),
    prenom VARCHAR(255)
);
