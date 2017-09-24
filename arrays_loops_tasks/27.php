<?php
/**
 * Created by PhpStorm.
 * User: Natalia
 * Date: 24.09.2017
 * Time: 18:07
 */

$colors = array('red','yellow','blue','gray','maroon','brown','green');
$cols = rand( 1, 10);
$rows = rand( 1, 10);

echo "<table>";
for ( $i = 1; $i <= $cols; $i++){
    echo "<tr>";
    for ( $j = 1; $j <= $rows; $j++){
        shuffle ($colors);
        echo "<td style='background-color: ".$colors[0]."'>" . rand ( 1, 1000) ."</td>";
    }
    echo "</tr>";
}
echo "</table>";