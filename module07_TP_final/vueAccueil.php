<?php

require_once './ModeleRestaurant.class.php';

$modeleRestaurants = new ModeleRestaurant();

foreach ($modeleRestaurants->getRestaurants() as $restaurant) {
    echo '<div>';
    echo '<h1><a href="./vueRestaurant.php?idResto=' . $restaurant['idRestaurant'] . '">' . $restaurant['nom'] . '</a></h1>';
    //echo '<h1><a href="./index.php?idResto=' . $restaurant['idRestaurant'] . '">' . $restaurant['nom'] . '</a></h1>';

    echo '</div>';
}


?>