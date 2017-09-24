<?php
/**
 * Created by PhpStorm.
 * User: Natalia
 * Date: 22.09.2017
 * Time: 22:28
 */

$week = array (  1 => 'Понедельник', 2 => 'Вторник', 3 => 'Среда', 4 => 'Четверг', 5 => 'Пятница', 6 => 'Суббота', 7 => 'Воскресенье');
foreach ( $week as $key => $value) {
    if ( $key == 6 or $key ==7 ) {
        echo "<b>{$value}</b><br>";
    } else echo "{$value}<br>";
}