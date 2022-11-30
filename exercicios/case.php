<?php
    $numero = rand(1,5);

    switch($numero) {
        case 1:
            $texto="un";
            break;
        case 2:
            $texto="dos";
            break;
        case 3:
            $texto="tres";
            break;  
        case 4:
            $texto="cuatro";
            break;
        case 5:
            $texto="cinco";
            break;      
        default:
            $texto="indefinido";    
    }
    echo $texto
?>