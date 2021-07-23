<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include "config.php" ?>
</head>
<body>
<form method="post">
    <input type="text" placeholder="Pokemon name" name="pokemon">
    <button type="submit">Submit</button>
</form>
<?php
$pokemon = file_get_contents("https://pokeapi.co/api/v2/pokemon/".$_POST["pokemon"] );
$pokemonDecoded = json_decode($pokemon, true); ?>
<img src="<?php echo $pokemonDecoded['sprites']['other']['official-artwork']['front_default']; ?>" width="500px" height="500px">
</body>
</html>
