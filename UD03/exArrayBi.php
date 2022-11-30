<?php

$notas ["alum1"] = ["eie" => 7, "asxbd" => 9, "seg" => 2];
$notas ["alum2"] = ["aso" => 6, "sri" =>6, "seg" => 8];

$notas1 [0] = [5,9,3];
$notas1 [1] = [4,7,5];

foreach ($notas as $alumno => $notasA) {
    echo "O alumno " . $alumno . "ten as seguintes notas: ";
    echo "<ul>";
    foreach ($notasA as $modulo => $notasA) {
        echo "<li>" . $modulo . "=" . $notasA . "</li>";
    }
    echo "</ul>";
    echo "</br>";
}

for ($i = 0; $i < count($notas1); $i++) {
    echo $i . " = ";
    for ($j = 0; $j < count($notas1[$i]); $j++) {
        echo $notas1[$i][$j] . " ";
    }
    echo "</br>";
}

?>