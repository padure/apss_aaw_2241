<?php
    $str1 = "          Eu invat PHP            ";
    $str2 = "PHP este un limbaj DE programare de Server";
    $str3 = "php";
    echo "strlen - ". strlen($str1) . "<br>";
    echo "trim - ". trim($str1) . "<br>";
    echo "ltrim - ". ltrim($str1) . "<br>";
    echo "rtrim - ". rtrim($str1) . "<br>";
    echo "str word count - ". str_word_count($str2) . "<br>";
    echo "strrev - ". strrev($str2) . "<br>";
    echo "strtoupper - ". strtoupper($str2) . "<br>";
    echo "ucfirst - ". ucfirst($str3) . "<br>";
    echo "lcfirst - ". lcfirst("PHP") . "<br>";
    echo "ucwords - ". ucwords("php server side") . "<br>";
    echo "strpos - ". strpos($str2, "De") . "<br>";
    echo "stripos - ". stripos($str2, "De", 20) . "<br>";
    echo "substr - ". substr($str2, 0, 15) . "<br>";
    echo "str_replace - ". str_replace("php", "C#", $str2) . "<br>";
    echo "str_ireplace - ". str_ireplace("php", "C#", $str2) . "<br>";
    
    $longText = "
        Salut, eu studiez <b>PHP</b>.
        El este un limbaj de <i>server</i>
    ";

    echo $longText . "<br>";
    echo nl2br($longText) . "<br>";
    echo htmlspecialchars($longText) . "<br>";
?>