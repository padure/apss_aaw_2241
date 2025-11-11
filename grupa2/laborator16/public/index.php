<?php
    require_once __DIR__ . "/../vendor/autoload.php";

    use App\Calculator;

    $calculator = new Calculator(25, 14);

    echo $calculator->suma();