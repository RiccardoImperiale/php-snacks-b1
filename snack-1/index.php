<?php

/* 

Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60

*/


$matches = [
    ["homeTeam" => "Squadra A", "guestTeam" => "Squadra B", "homeTeamScore" => 80, "guestTeamScore" => 75],
    ["homeTeam" => "Squadra C", "guestTeam" => "Squadra D", "homeTeamScore" => 90, "guestTeamScore" => 85],
];

foreach ($matches as $match) {
    $homeTeam = $match['homeTeam'];
    $guestTeam = $match['guestTeam'];
    $homeTeamScore = $match['homeTeamScore'];
    $guestTeamScore = $match['guestTeamScore'];

    echo "$homeTeam - $guestTeam | $homeTeamScore-$guestTeamScore<br>";
}
