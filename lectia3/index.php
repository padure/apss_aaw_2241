<?php
    date_default_timezone_set("Europe/Chisinau");
    require_once "./functions.php";
    
    logMessage("Eu studiez PHP!");
    echo "<br>";
    echo formatName ("ion", "Vicerdea");
    echo "<br>";
    echo formatName ("", "Vicerdea");
    echo "<br>";
    echo formatName ("", "");
?>