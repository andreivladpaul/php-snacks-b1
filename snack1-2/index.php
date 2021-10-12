<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa
del calendario.
Ogni array avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 
    $results = [
        [
            'aTeam' => 'Squadra 1',
            'bTeam' => 'Squadra 2',
            'aPoints' => 45,
            'bPoints' => 88,
        ],
        [
            'aTeam' => 'Squadra 3',
            'bTeam' => 'Squadra 4',
            'aPoints' => 78,
            'bPoints' => 78,
        ],
        [
            'aTeam' => 'Squadra 5',
            'bTeam' => 'Squadra 6',
            'aPoints' => 65,
            'bPoints' => 90,
        ],
        [
            'aTeam' => 'Squadra 7',
            'bTeam' => 'Squadra 8',
            'aPoints' => 34,
            'bPoints' => 88,
        ],
        [
            'aTeam' => 'Squadra 9',
            'bTeam' => 'Squadra 10',
            'aPoints' => 53,
            'bPoints' => 55,
        ],
    ];

    echo '<ul style="list-style:none">';
    for($i = 0; $i < count($results); $i++){
        echo "<li style='font-size:22px; line-height:1.4em'>{$results[$i]['aTeam']} vs {$results[$i]['bTeam']} | {$results[$i]['aPoints']} - {$results[$i]['bPoints']}</li>";
    };
    echo '</ul>';

    $getName = $_GET['name'];
    $getEmail = $_GET['email'];
    $getAge = $_GET['age'];


    echo "<h3 style='font-family: sans-serif'>Compila l'URL aggiungendo ?name=[tuonome]&email=[tuaetà]&age=[tuaetà]. <br> NB: la chiocchiola si scrive con %40 </h3>";
    echo "<h5 style='font-family: sans-serif'>Per fare prima puoi compilare il form qui di seguito</h5>";

    echo "
    <form>
    <input type='text' name='name' placeholder='Inserisci il tuo nome'>
    <input type='email' name='email' placeholder='Inserisci la tua email'>
    <input type='number' name='age' placeholder='Inserisci la tua età'>
    <button type='submit'>INVIA</button>
    </form>";

    if(strlen($getName)>3 && (strpos($getEmail, '.') && strpos($getEmail, '@')) && is_numeric($getAge)){
        echo "<h2 style='color:#00FF00; font-family: sans-serif'>Tuuuuutto perfetto</h2>";
    }elseif(empty($getName) || empty($getEmail) || empty($getAge)){
        echo "<h2 style='color:#FFD700; font-family: sans-serif'>Inserisci i tuoi dati</h2>";
    }else{
        echo "<h2 style='color:#FF0000; font-family: sans-serif'>C'è qualcosa di sbagliato</h2>";
    }
?>