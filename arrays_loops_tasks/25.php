<?php
/**
 * Created by PhpStorm.
 * User: Natalia
 * Date: 24.09.2017
 * Time: 17:06
 */
$array = array();
for ( $i = 1; $i <12; $i++){
    array_push($array, rand(-5, 15));
}
print_r($array);
echo "<br>";
$max = max( $array);
$min = min ( $array);
$max_key = array_search( $max, $array);
$min_key = array_search( $min, $array);
list($array[$max_key], $array[$min_key]) = array($array[$min_key], $array[$max_key]);
print_r($array);