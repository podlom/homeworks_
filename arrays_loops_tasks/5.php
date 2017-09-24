<?php
/**
 * Created by PhpStorm.
 * User: Natalia
 * Date: 21.09.2017
 * Time: 21:39
 */

$arr = array ( 'Коля' => 200, 'Вася' => 300, 'Петя' => 400);
foreach ( $arr as $key => $value) {
    echo "{$key} - зарплата {$value} долларов <br>";
}