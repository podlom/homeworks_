<?php
/**
 * Created by PhpStorm.
 * User: Natalia
 * Date: 24.09.2017
 * Time: 16:27
 */
$x = array('xx');
$i = 1;
while ($i < 6) {
        $res = implode( $x);
        echo $res . "<br>";
        $x[] = 'xx';
        $i++;
}