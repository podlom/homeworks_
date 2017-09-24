<?php
/**
 * Created by PhpStorm.
 * User: Natalia
 * Date: 21.09.2017
 * Time: 21:34
 */

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach ( $arr as $key => $value) {
    echo $key . "<br>";
}

echo "<br>";

foreach ( $arr as $key => $value) {
    echo $value . "<br>";
}