<!-- ## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->
<?php
    include __DIR__ . '/utilities/functions.php';
    include __DIR__ . '/utilities/students.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>
<body>
    <?php
        foreach($students as $student){
            $media = media($student['Voti']);
            echo "<p>{$student['Nome']} {$student['Cognome']}: $media</p>";
        }
    ?>
</body>
</html>