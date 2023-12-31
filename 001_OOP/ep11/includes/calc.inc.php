<?php
    declare(strict_types = 1);
    include 'class-autoloader.inc.php';

    $oper = $_POST["oper"];
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    $calc = new Calc($oper, (int)$num1, (int)$num2); // casting

    try {
        echo $calc->calculator();
    } catch(TypeError $e){
        echo "Error!: " . $e;
    }