<?php
$pikachu = array(
    "nom" => "Pikatchu",
    "type" => "Electrik",
    "position" => 25
);
$salameche = array(
    "nom" => "Salamèche",
    "type" => "Feu",
    "position" => 4
);
$carapuce = array(
    "nom" => "Carapuce",
    "type" => "Eau",
    "position" => 7
);
$pokemons = array( $pikachu, $salameche, $carapuce );
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tableau de présentation de données</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<h2>Liste des Contacts</h2>
<table class="table">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Type</th>
            <th>Position</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($pokemons as $pokemon) { ?>
        <tr>
            <td><?php echo $pokemon["nom"]; ?></td>
            <td><?php echo $pokemon["type"]; ?></td>
            <td><?php echo $pokemon["position"]; ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>