<?php
/**
 * Created by PhpStorm.
 * User: Natalia
 * Date: 21.09.2017
 * Time: 22:00
 */

$array = array ( 2, 5, 9, 15, 0, 4);
foreach ( $array as $value) {
    if ( $value > 3 && $value <10) {
        echo $value . "<br>";
    }
}