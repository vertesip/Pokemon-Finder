<?php

$servername = "vertesipatrik.com";
$username = "vertesi1";
$password = "tm(J85.XUw8Yg4";
$database = "vertesi1_sample";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$pokemon = file_get_contents("https://pokeapi.co/api/v2/pokemon/ditto");
$pokemonDecoded = json_decode($pokemon, true);
