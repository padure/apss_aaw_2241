<?php
    echo "<pre>";
    var_dump($_SERVER);
    echo "</pre>";

    $nume = "John Doe";
    $age = 25;
    $isAdmin = true;
    $salary = null;

    // Constante
    define( "PORT", 8888 );

    echo PORT . "<br>";

    class User {
        const TYPE = "Guest";
    }

    
?>