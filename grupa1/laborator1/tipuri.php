<?php
    /*
        - Tipuri de date
        String
        Integer
        Float
        Boolean
        Null
        Array
        Object
        Resource
    */
    $nume = "John Doe";
    $age = 25;
    $isAdmin = true;
    $salary = null;
    
    echo $nume . "<br>"; 
    echo $age . "<br>"; 
    echo $isAdmin . "<br>"; 
    echo $salary . "<br>";
    
    //Tipul de date a variabilei
    echo gettype($nume) . "<br>"; ;
    echo gettype($age) . "<br>"; ;
    echo gettype($isAdmin) . "<br>"; ;
    echo gettype($salary) . "<br>"; ;
    $isAdmin = false;

    //Functii tipizate
    echo is_int($nume) . "<br>" ;
    echo is_int($age) . "<br>" ;
    
    //Constante
    define("PORT", 8989);

    echo PORT . "<br>";
    
    echo PHP_MAXPATHLEN . "<br>";
    class Car{
        const Roti = 4;
    }

?>