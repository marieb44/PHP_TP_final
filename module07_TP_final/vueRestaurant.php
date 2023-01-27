<?php
require_once './ModeleRestaurant.class.php';

if (isset($_GET['idResto'])) {

    $idResto = $_GET['idResto'];
    $modeleRestaurants = new ModeleRestaurant();

    $resto = $modeleRestaurants->getRestaurantById($idResto);
    echo '<h1>' . $resto['nom'] . '</h1>';
    echo '<p>' . $resto['adresse'] . '<br/>';
    echo $resto['cp'] . ' ' . $resto['ville'] . '<br/>';
    echo $resto['telephone'] . '</p>';
    echo '<p>' . $resto['description'] . '</p>';
    echo '<hr>';

    echo '<h2>Avis</h2>';

    foreach ($modeleRestaurants->getAvisRestaurant($idResto) as $avis) {
        echo '<div>';
        echo '<div>' . ($avis['auteur'] == NULL ? 'anonyme' : $avis['auteur']) . ' : ' . $avis['note'] . '/5 </div>';
        echo '<div>' . $avis['commentaire'] . '<div>';
        echo '</div>';
        echo '<hr>';
    }
}
?>
