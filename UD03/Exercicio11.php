<?php
echo "<table>";
for ($i = 0; $i < 6; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 4; $j++) {
        $array[$i][$j] = [3*$j];
        echo "<td>" . 3 * $j . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>