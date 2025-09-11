<?php
    // Iterativ
    $numere = [23, 42, 13, 1];

    //Asociative
    $user = [
        "name" => "John Doe",
        "age"  => 54,
        "location" => "Cahul",
        "skils" => ['HTML', 'CSS'] 
    ];

    echo $user['name'] . "<br>";
    //Mix
    $orase = [
        ['name' => 'Cahul', 'populatie' => 25400, 'regiune' => 'Sud'],
        ['name' => 'Chisinau', 'populatie' => 780000, 'regiune' => 'Centru'],
        ['name' => 'Balti', 'populatie' => 150000, 'regiune' => 'Nord'],
        ['name' => 'Comrat', 'populatie' => 20122, 'regiune' => 'Sud'],
    ];

    foreach( $orase as $oras ){
        echo "<div style='border: 1px solid black; padding: 2px; margin-bottom: 2px;'>";
        foreach($oras as $key => $value){
            echo $key . " : " . $value . "<br>";
        }
        echo "</div>";
    }
?>