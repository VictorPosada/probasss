<?php
    function suma($operando1, $operando2) 
    {
        $total = $operando1 + $operando2;
        echo "<p>Suma de $operando1 y $operando2 = $total </p>";
    }

    function resta($operando1, $operando2) 
    {
        $total = $operando1 - $operando2;
        echo "<p>Resta de $operando1 y $operando2 = $total </p>";
    }

    function division($operando1, $operando2) 
    {
        $total = $operando1 / $operando2;
        echo "<p>Division de $operando1 y $operando2 = $total </p>";
    }

    function multi($operando1, $operando2) 
    {
        $total = $operando1 * $operando2;
        echo "<p>Multiplicación de $operando1 y $operando2 = $total </p>";
    }

    function operacionMates($operando1, $operando2, $operador = '+') 
    {
        switch($operador) {
            case '+':
                $total = $operando1 + $operando2;
                break;
            case '-':
                $total = $operando1 - $operando2;
                break;
            case '*':
                $total = $operando1 * $operando2;
                break;
            case '/':
                $total = $operando1 / $operando2;
                break;
        }
        return $total;

    }
?>