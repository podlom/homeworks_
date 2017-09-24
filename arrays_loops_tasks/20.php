<?php
/**
 * Created by PhpStorm.
 * User: Natalia
 * Date: 22.09.2017
 * Time: 22:43
 */
$x = array('x');
for ( $i = 1; $i < 21; $i++){
    $res = implode( $x);
    echo $res . "<br>";
    $x[] = 'x';
}