<?php
    $nume = ['Andrei', 'Petru', 'Ion', 'Oleg'];

    echo implode(" ", $nume) . "<br>";

    $str = "Eu invat PHP un limbaj server-side";

    $arr_str = explode(" ", $str);

    echo count($arr_str) . "<br>";
    $count = 0;
    foreach($arr_str as $cuvant){
        if( strlen($cuvant) >= 5 ){
            $count++;
        }
    }

    echo $count . "<br>";
?>