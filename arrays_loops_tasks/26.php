<?php
/**
 * Created by PhpStorm.
 * User: Natalia
 * Date: 24.09.2017
 * Time: 17:36
 */
$array = array();
$a = 1;
for ( $i = 1; $i <12; $i++){
    array_push($array, rand(1, 100));
}
print_r($array);
echo "<br>";
foreach ( $array as $key => $value) {
    if ( $key == 0) {
        echo "С не парными индексами: <br>";
        continue;
    } else {
        if ( $value > 0) {
            if ( $key % 2 == 0) {
                $a *= $value;
            } else {
                echo "{$value} <br> ";
            }
        }
    }
}
echo "Произведение парных = " . $a;