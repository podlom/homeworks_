<?php
/**
 * Created by PhpStorm.
 * User: Natalia
 * Date: 21.09.2017
 * Time: 22:48
 */

$array = array('1', '2', '3', '4', '5', '6', '7', '8', '9');
echo "<table><tr>";
foreach($array as $i) {
    foreach($array as $j)
        echo "<td>".($i*$j)."</td>";
    if ($i != 9) echo "</tr><tr>";
};
echo "</tr></table>";