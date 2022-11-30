<?php
    $notasPepito = [7, 8, 4, 2];
    echo "<p> Pepito ten un $notasPepito[2] en IAW</p>";
    $a = count($notasPepito);
    $suma = 0;
    for($i = 0; $i < $a; $i++) {
        $suma += $notasPepito[$i];
    }
    $media = $suma / $a;
    echo "<p> Pepito ten un $media de media</p>";
?>