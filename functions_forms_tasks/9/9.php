<?php
/**
 * Created by PhpStorm.
 * User: Natalia
 * Date: 28.09.2017
 * Time: 21:14
 */
$str1 = $_POST['str1'];

function reverse ($a) {
    $result = strrev( $a);
    echo $result;
}

reverse($str1);