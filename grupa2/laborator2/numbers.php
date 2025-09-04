<?php
    #Tipuri de date
    #Number
    $strNumber = "874.258";
    
    echo "Tipul de date: " . gettype($strNumber) . "<br>";
    echo "Integer: " . (int) $strNumber. "<br>";
    echo "Float: " . (float) $strNumber. "<br>";
    echo "Boolean: " . (bool) $strNumber. "<br>";
    echo "Boolean: " . (bool) "" . "<br>";

    #Number functions
    echo "ABS: " . abs(-100) . "<br>";
    echo "POW: " . pow(4, 3) . "<br>";
    echo "POW: " . 4 ** 3 . "<br>";
    echo "SQRT: " . sqrt(16) . "<br>";
    echo "MAX: " . max(16, 81, 5, 1, 7) . "<br>";
    echo "MAX: " . max([2, 4, 1, 56, 1]) . "<br>";
    echo "MIN: " . min(16, 81, 5, 1, 7) . "<br>";
    echo "MIN: " . min([16, 81, 5, 1, 7]) . "<br>";
    echo "ROUND: "  . round(14.58, 1) . "<br>";
    echo "FLOOR: "  . floor(14.58) . "<br>";
    echo "CEIL: "   . ceil(14.58) . "<br>";
    echo "RAND: "   . rand() . "<br>";
    echo "RAND: "   . rand(1, 100) . "<br>";
