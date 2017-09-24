<?php
/**
 * Created by PhpStorm.
 * User: Natalia
 * Date: 22.09.2017
 * Time: 22:05
 */

date_default_timezone_set ('Europe/Kiev');
$year = array ('January'=>'Январь', 'February'=>'Февраль', 'March'=>'Март', 'April'=>'Апрель', 'May'=>'Май', 'June'=>'Июнь', 'July'=>'Июль', 'August'=>'Август', 'September'=>'Сентярь', 'October'=>'Октябрь', 'November'=>'Ноябрь', 'December'=>'Декабрь');
$month = date ('F');
foreach ($year as $key => $value) {
    if ( $key == $month) {
        echo "<b>{$value}</b><br>";
    } else echo "{$value}<br>";
}