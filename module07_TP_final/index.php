<!doctype html>
<html lang="fr">
<head>
    <title>Mes restaurants</title>
</head>
<body>
<header>
    <a href="./index.php">Restaurants préférés</a> <a href="">Contact</a>
</header>
<?php

//var_dump($_GET['idResto']);

if (isset($_GET['idResto'])) {
    require_once './vueRestaurant.php?idResto=' . $_GET['idResto'];
} else {
    require_once './vueAccueil.php';
}
?>


</body>
</html>
