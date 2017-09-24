<?php
/**
 * Created by PhpStorm.
 * User: Natalia
 * Date: 21.09.2017
 * Time: 21:44
 */

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach ( $arr as $key => $value) {
    $en[] = $key;
    $ru[] = $value;
}
print_r($en);
echo "<br>";
print_r($ru);