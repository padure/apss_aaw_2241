<?php
    #Tpuri de date
    //Number
    $strNumber = "258.26";
    //Conversia
    $intNumber      = (int) $strNumber;
    $floatNumber    = (float) $strNumber;


    echo $intNumber . " - " . gettype($intNumber) . "<br>";
    echo $floatNumber . " - " . gettype($floatNumber) . "<br>";

    //Functii pentru numere
    echo "abs - " . abs(15) . "<br>";
    echo "pow - " . pow(2, 3) . "<br>";
    echo "sqrt - " . sqrt(4) . "<br>";
    echo "max - " . max(2, 3, 4, 6) . "<br>";
    echo "min - " . min(2, 3, 4, 6) . "<br>";
    echo "round - " . round(2.54) . "<br>";
    echo "floor - " . floor(2.54) . "<br>";
    echo "ceil - " . ceil(2.54) . "<br>";
    echo "rand - " . rand(0, 10) . "<br>";
    echo "INT_MAX - " . PHP_INT_MAX . "<br>";
    echo "INT_MIN - " . PHP_INT_MIN . "<br>";
?>