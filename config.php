<?php

$servername = "vertesipatrik.com";
$username = "vertesi1";
$password = "tm(J85.XUw8Yg4";
$database = "vertesi1_pokemon";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/*
$sql = "CREATE TABLE PokemonName (
Id INT NOT NULL AUTO_INCREMENT,
PokemonName VARCHAR(30) NOT NULL,
search_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (Id)
)";

if ($conn->query($sql) === TRUE){
    echo "yes";
} else {
    print_r($conn->query($sql));
}*/