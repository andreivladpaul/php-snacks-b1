<?php 
include __DIR__ . '/database.php';
?>

<!-- Attraverso un parametro GET da inserire direttamente nell’url (uno alla volta), filtrare gli hotel che hanno un parcheggio, numero minimo di stelle o massima lontananza dal centro. -->

<?php 

if (isset($_GET["parking"])) {
    $filteredHotels = [];
    foreach ($hotels as $hotel) {
        ($hotel["parking"] ? array_push($filteredHotels, $hotel) : null);
    }
} else if (isset($_GET["stars"])) {
    $stars = $_GET['stars'];
    $filteredHotels = [];
    foreach ($hotels as $hotel) {
        ($hotel["vote"] > $stars ? array_push($filteredHotels, $hotel) : null);
    }
} else if (isset($_GET["distance"])) {
    $distance = $_GET[ "distance"];
    $filteredHotels = [];
    foreach ($hotels as $hotel) {
        ($hotel["distance_to_center"] < $distance ? array_push($filteredHotels, $hotel) : null);
    }
    
} else {

    $filteredHotels = [];
    foreach($hotels as $hotel){
        array_push($filteredHotels, $hotel);
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php foreach ($filteredHotels as $hotel) {  ?> 
        <li> <?php echo $hotel['name']?></li>
        <?php }?>
    </ul>
    
</body>
</html>
