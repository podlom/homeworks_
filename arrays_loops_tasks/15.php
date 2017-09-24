<?php
/**
 * Created by PhpStorm.
 * User: Natalia
 * Date: 21.09.2017
 * Time: 23:00
 */

$arr = array ( 4, 2, 5, 19, 13, 0, 10);
$count = 0;
foreach ( $arr as $value) {
    $count += 1;
}
echo $count;