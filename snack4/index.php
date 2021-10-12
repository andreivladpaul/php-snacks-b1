<?php 
    //Creare un array con 15 numeri casuali ( da 1 a 100), tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
    $array = [];
    $items = 15;
    do{
        $number = rand(1,100);
        if(!in_array($number, $array)){
            array_push($array, $number);
            echo "<p>$number</p>";
        };
    }while(count($array)< $items);

    var_dump($array)
?>