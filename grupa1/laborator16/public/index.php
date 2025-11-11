<?php
    require_once __DIR__ . "/../vendor/autoload.php";

    use App\Calculator;
    use App\Raport;
    
    $calculator = new Calculator(25, 12);
    $raport = new Raport(25, 8);
    
    echo "Suma este: " . $calculator->sum();
    echo "<br>";
    echo "Produsul este: " . $calculator->produs();
    echo "<br>";

    echo $raport->raport();