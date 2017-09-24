<?php
/**
 * Created by PhpStorm.
 * User: Natalia
 * Date: 21.09.2017
 * Time: 22:50
 */

$arr = array ( 4, 2, 5, 19, 13, 0, 10);
$e = 10;
foreach ( $arr as $value) {
    if ( $value == $e) {
        $res = true;
    }
}
if ( isset ($res)) {
    echo "Есть";
} else {
    echo "Нет";
}