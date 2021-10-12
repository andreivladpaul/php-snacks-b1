<?php 
    function media($array){
        $sum = array_sum($array);
        $media = round(($sum / count($array)),2);
        return $media;
    }
?>