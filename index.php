<?php
    include __DIR__ .'/arrayHotels.php';


    foreach ($hotels as $hotel){
    echo 'Nome: ', $hotel['name'],'<br>';
    echo 'Descrizione: ', $hotel['description'],'<br>';
    echo 'Parcheggio: ', $hotel['parking'],'<br>';
    echo 'Voto: ', $hotel['vote'],'<br>';
    echo 'Distanza dal centro: ', $hotel['distance_to_center'],'<br>', '<br>';

}
?>