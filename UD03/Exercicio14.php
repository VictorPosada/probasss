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
?>

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
?>