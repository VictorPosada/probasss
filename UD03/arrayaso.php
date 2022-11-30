<?php
    $notasPepito = ["eie" => 7,"sri" => 8,"asp" => 10,"iaw" => 9];
    echo "<p> Pepito ten un $notasPepito[iaw] en IAW</p>";
    $a = count($notasPepito);
    $suma = 0;
    foreach($notasPepito as $valor) {
        $suma += $valor;
    }
    $media = $suma / $a;

    foreach($notasPepito as $clave => $valor) {
        echo "<p>Clase= $clave nota= $valor</p>";
    }
    echo "<p> Pepito ten un $media de media</p>";
?>