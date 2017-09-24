<?php
/**
 * Created by PhpStorm.
 * User: Natalia
 * Date: 22.09.2017
 * Time: 22:38
 */

date_default_timezone_set ('Europe/Kiev');
$week = array (  1 => 'Понедельник', 2 => 'Вторник', 3 => 'Среда', 4 => 'Четверг', 5 => 'Пятница', 6 => 'Суббота', 7 => 'Воскресенье');
$day = date( "N");
foreach ($week as $key => $value) {
    if ( $key == $day) {
        echo "<i>{$value}</i><br>";
    } else echo "{$value}<br>";
}