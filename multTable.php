<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
function generateMultTable($x, $y){
    echo "<table>";
    for ($r = 0; $r <= $x; $r++){
        echo "<tr>"; // start row with tr
        for ($c = 0; $c <= $y; $c++)
            if ($r == 0 && $c == 0) {
                echo "<td> </td>";
            } elseif ($r == 0) {
                echo "<td>{$c}</td>";
            } elseif ($c == 0) {
                echo "<td>{$r}</td>";
            } else {
                echo "<td>" . $c*$r ."</td>";
            }
        echo "</tr>"; // close tr tag here

    }

echo "</table>";
}
generateMultTable(100,100);
?>
