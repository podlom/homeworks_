<?php
/**
 * Created by PhpStorm.
 * User: Natalia
 * Date: 21.09.2017
 * Time: 22:07
 */

$array = array( 1, 2, 3, 4, 5, 6, 7, 8, 9);
$result = "";
foreach ( $array as $value) {
    $result = $result . $value;
}

var_dump($result);