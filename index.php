<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa
del calendario.
Ogni array avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
$matches = [
    [
        'teamHome' => 'Olimpia Milano',
        'teamAway' => 'Cantù',
        'scoreHome' => '55',
        'scoreAway' => '60',

    ],
    [
        'teamHome' => 'Sassari',
        'teamAway' => 'Virtus Bologna',
        'scoreHome' => '80',
        'scoreAway' => '70',

    ],
    [
        'teamHome' => 'Umana Venezia',
        'teamAway' => 'Reggio Emilia',
        'scoreHome' => '93',
        'scoreAway' => '82',

    ],

];

for ($i = 0; $i < count($matches); $i++) {
    echo " <p> {$matches[$i]['teamHome']} - {$matches[$i]['teamAway']} | {$matches[$i]['scoreHome']}-{$matches[$i]['scoreAway']}</p>";
}

/* date_default_timezone_set('Europe/Rome');

echo date('h:i:s'); */

$timestamp = mktime(10, 14, 54, 9, 10, 1981);


echo date('d/m/Y', $timestamp);

?>