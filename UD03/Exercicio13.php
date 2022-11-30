<?php
echo "<table>";
for ($i = 0; $i < 5; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 5; $j++) {
        if ($i == $j) {
            $unidad = 1;
        } else {
            $unidad = 0;
        }
        $array[$i][$j] = [$unidad];
        echo "<td>" . $unidad . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<table>";
for ($i = 0; $i < 5; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 5; $j++) {
        if ($i == $j) {
            $unidad = rand(1,9);
        } else {
            $unidad = 0;
        }
        $array[$i][$j] = [$unidad];
        echo "<td>" . $unidad . "</td>";
    }
    echo "</tr>";
}
echo "</table>";


$param = [
    [1,2,3,4],
    [7,6,9,8]
];

echo "<table>";
foreach ($param as $posFila => $fila) {
    echo "<tr>";
    foreach ($fila as $posCol => $valor) {
        $trasposta [$posCol][$posFila] = $valor;
        echo "<td>$valor</td>";
    }
    echo "</tr>";
}
echo "</table>";


foreach ($param as $posFila => $fila) {
    foreach ($fila as $posCol => $valor) {
        $tpr [$posCol][$posFila] = $valor; 
    }
    
}


echo "<table>";
foreach ($tpr as $posFila => $fila) {
    echo "<tr>";
    foreach ($fila as $posCol => $valor) {
        $trasposta [$posCol][$posFila] = $valor;
        echo "<td>$valor</td>";
    }
    echo "</tr>";
}
echo "</table>";



print_r($trasposta)









?>