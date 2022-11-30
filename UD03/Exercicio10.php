<?php
    $dni = [9,2,3,4,5,6,7,8,"C"];
    $suma = 0;

    for ($i = 0; $i < 8; $i++) {
        $suma += $dni[$i];
    }

    $media = $suma / 8;
    echo $media;
?>