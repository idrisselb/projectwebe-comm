<?php

//include the connection file
include('connection.php');

//create an instance of Connection class
$connection = new Connection();

//call the createDatabase methods to create database "chap4Db"
$connection->createDatabase('poster');

// $query0 = "
// CREATE TABLE Cities (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(30) NOT NULL
//     )
// ";

$query = "
CREATE TABLE Clients (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50) UNIQUE,
password VARCHAR(80),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

)
";
// ,
// idCity INT(6) UNSIGNED NOT NULL,
// FOREIGN KEY (idCity) REFERENCES Cities(id)


$query1 = "
CREATE TABLE Commandes (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
cmd_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
idClt INT(6) UNSIGNED NOT NULL,
FOREIGN KEY (idClt) REFERENCES Clients(id)
)
";

$query2 = "
CREATE TABLE Produits (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
price VARCHAR(30) NOT NULL,
lien VARCHAR(500) NOT NULL
)
";

// $query3 = "
// CREATE TABLE Concerne (
//     idPrd INT(6) NOT NULL,
//     idCmd INT(6) NOT NULL,
//     quantiter VARCHAR(80),
//     PRIMARY KEY (idPrd, idCmd),
//     FOREIGN KEY (idPrd) REFERENCES Produit(id),
//     FOREIGN KEY (idCmd) REFERENCES Commande(id)
// )
// ";


//call the selectDatabase method to select the chap4Db
$connection->selectDatabase('poster');

//call the createTable method to create table with the $query
// $connection->createTable($query0);
$connection->createTable($query);
$connection->createTable($query2);
$connection->createTable($query1);


?>
