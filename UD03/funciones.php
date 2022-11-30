<?php
    function imprimirCabeceira() {
        echo "<h1>Empresa </h1>";
        echo "<h2> Sirviendo a españa</h2>";
    }
    echo "<h1>Paxina principal</h1>";
    imprimirCabeceira();

    include 'opmates.php';
    $op1 = 17;
    $op2 = 29;
    $op3 = "*";

    suma($op1, $op2);
    resta($op1, $op2);
    division($op1, $op2);
    multi($op1, $op2);
    $total = operacionMates($op1, $op2, $op3);
    echo "<p> Total de $op1 $op3 $op2 = $total</p>";
    $total = operacionMates($op1, $op2);
    echo "<p> Total de $op1 $op4 $op2 = $total</p>";
?>