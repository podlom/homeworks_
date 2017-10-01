<?php
/**
 * Created by PhpStorm.
 * User: Natalia
 * Date: 24.09.2017
 * Time: 21:18
 */

$str1 = explode(" ", $_POST['str1']);
$str2 = explode(" ", $_POST['str2']);

function getCommonWords($a, $b) {
    $result = array();
    for ( $i = 0; $i < count( $a); $i++){
        foreach ( $b as $value) {
            if ( $a[$i] == $value) {
                array_push( $result, $a[$i]);
            }
        }
    }
    if ( count( $result) == 0) {
        echo "Нет совпадений!";
    } else {
        print_r( $result);
    }
    return $result;
}

getCommonWords($str1,$str2);


