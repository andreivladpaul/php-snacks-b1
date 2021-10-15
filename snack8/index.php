<?php 
 include __DIR__ . '/database.php';

 /* Ad ogni refresh della pagina visualizzare una pubblicità a schermo, tenendo conto che possono essere sorteggiate solo quelle is_active true. */

 $active = [];

foreach($ads as $ad) {
    
    if($ad['is_active']) {
        array_push($active,$ad);
    }
    
}

$currentActive = $active[rand(0, 2)];


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
    <div>
        <img src="<?php echo $currentActive['image_path']?>" alt="">
    </div>
    
</body>
</html>