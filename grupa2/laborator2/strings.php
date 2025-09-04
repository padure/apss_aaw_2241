<?php
    #Strings
    $str1 = "      Limbajul PHP                     ";
    $str2 = "Eu PHP invat PHP";
    $count = 0;
    echo $str1 . "<br>";
    echo $str2 . "<br>";

    #String Functions
    echo "STRLEN: " . strlen($str2) . "<br>";
    echo "TRIM: " . "<pre>" . trim($str1). "<pre>" . "<br>";
    echo "LTRIM: " . "<pre>" . ltrim($str1). "<pre>" . "<br>";
    echo "RTRIM: " . "<pre>" . rtrim($str1). "<pre>" . "<br>";
    echo "STR WORD COUNT: " . str_word_count($str1) . "<br>";
    echo "STR REVERS: " . strrev($str2) . "<br>";
    echo "UPPERCASE: " . strtoupper($str2) . "<br>";
    echo "LOWERCASE: " . strtolower($str2) . "<br>";
    echo "UCWORDS: " . ucwords($str2) . "<br>";
    echo "UCFIRST: " . ucfirst("php") . "<br>";
    echo "LCFIRST: " . lcfirst("PHP") . "<br>";
    echo "STRPOS: " . strpos($str2, "invat") . "<br>";
    echo "STRIPOS: " . stripos($str2, "INvat") . "<br>";
    echo "SUBSTR: " . substr($str2, 5) . "<br>";
    echo "SUBSTR: " . substr($str2, 5, 3) . "<br>";
    echo "SUBSTR: " . substr($str2, 0, 2) . "<br>";
    echo "SUBSTR: " . substr($str2, 9, 3) . "<br>";
    echo "SUBSTR: " . substr($str2, 3, 2) . "<br>";
    echo "STR REPLACE: " . str_replace("PHP", "C#", $str2) . "<br>";
    echo "STR IREPLACE: " . str_ireplace("pHP", "C#", $str2, $count) . "<br>";
    echo "COUNT: " . $count . "<br>";
    echo "SUB STR REPLACE: " . substr_replace($str2, "C#", strpos($str2, "PHP"), strlen("PHP")) . "<br>";