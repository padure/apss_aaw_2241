<?php
    # Problema 1
    $carti = [
        ["titlul" => "Enigma codurilor",      "autor" => "M. Ionescu",     "pret" => 49.90],
        ["titlul" => "Introducere în PHP",   "autor" => "A. Popescu",     "pret" => 39.50],
        ["titlul" => "Programare web",       "autor" => "L. Georgescu",   "pret" => 59.00],
        ["titlul" => "Algoritmi practici",   "autor" => "C. Marinescu",   "pret" => 45.75],
        ["titlul" => "Bazele bazei de date", "autor" => "D. Vlad",        "pret" => 34.20],
    ];

    #c
    foreach($carti as $carte){
        echo "Titlul: " . $carte["titlul"] . "<br>";
        echo "Autor: " . $carte["autor"] . "<br>";
        echo "Pret: " . $carte["pret"];
        echo "<hr>";
    }
    #d
    $pretTotal = 0;
    foreach($carti as $carte){
        $pretTotal += $carte["pret"];
    }

    echo "Pretul total al cartilor este: " . $pretTotal ."<br>";
    #e
    $carteScumpa = [...$carti[0]];
    foreach($carti as $carte){
        if($carte["pret"] > $carteScumpa["pret"]){
            $carteScumpa = [];
            $carteScumpa = [...$carte];
        }
    }
    echo "Cea mai scumpa carte este: " 
        . $carteScumpa['titlul'] . " "
        . $carteScumpa['autor'] . " "
        . $carteScumpa['pret'];
?>

