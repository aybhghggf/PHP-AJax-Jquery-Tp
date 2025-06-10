create database test_db;
use testedb;
create table personne (
    email varchar(255) primary key,
    password varchar(255),
    titre varchar(255),
    nom varchar(255),
    prenom varchar(255)
);