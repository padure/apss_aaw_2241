<?php
    // Iterative
    $numere = [78, 4, 9, 5, 14];
    echo $numere[2] . "<br>";
    // Asociative
    $utilizator = [
        "id" => "zsdfa448451521sdf",
        "nume" => "John Doe",
        "locatie" => "Cahul",
        "varsta" => 29
    ];
    echo $utilizator['nume'] . "<br>";
    // Mixte
    $valori = [2025, 2027, [12, 5000], ["valoare" => 874]];
    $admin = [
        "id" => 58,
        "username" => "test@gmail.com",
        "skils" => ["HTML", "CSS", "JS", "C#"]
    ];
    echo $admin["skils"][3] . "<br>";
    echo $valori[2][1] . "<br>";
    $lectii = [
        ["id" => 2, "nume" => "Matematica", "zi" => "Luni", "pozitie" => 1],
        ["id" => 3, "nume" => "Fizica", "zi" => "Luni", "pozitie" => 2],
        ["id" => 4, "nume" => "Chimia", "zi" => "Luni", "pozitie" => 3],
        ["id" => 6, "nume" => "Limba engleza", "zi" => "Marti", "pozitie" => 1],
        ["id" => 7, "nume" => "Geografia", "zi" => "Marti", "pozitie" => 2],
    ];

    $orase = array("Cahul", "Galati", "Bucuresti", "Roma");
?>