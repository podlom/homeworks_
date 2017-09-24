<?php
/**
 * Created by PhpStorm.
 * User: Natalia
 * Date: 21.09.2017
 * Time: 21:27
 */

$array = array ( 1, 20, 15, 17, 24, 35);
$result = 0;
foreach ( $array as $value) {
    $result = $result + $value;
}
echo $result;