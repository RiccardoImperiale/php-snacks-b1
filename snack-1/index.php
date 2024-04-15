<?php

/* 

Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60

*/

// $partiteBasket = [
//     "squadraCasa" => [
//         "puntiCasa" => 80, 
//         "puntiOspite" => 75
//     ],
//     "squadraOspite" => [
//         "puntiCasa" => 80, 
//         "puntiOspite" => 75
//     ],
// ];

$partiteBasket = [
    ["squadraCasa" => "Squadra A", "squadraOspite" => "Squadra B", "puntiCasa" => 80, "puntiOspite" => 75],
    ["squadraCasa" => "Squadra B", "squadraOspite" => "Squadra D", "puntiCasa" => 90, "puntiOspite" => 85],
];

foreach ($partiteBasket as $partita) {
    $squadraCasa = $partita['squadraCasa'];
    $squadraOspite = $partita['squadraOspite'];
    $puntiCasa = $partita['puntiCasa'];
    $puntiOspite = $partita['puntiOspite'];

    echo "$squadraCasa - $squadraOspite | $puntiCasa-$puntiOspite<br>";
}
