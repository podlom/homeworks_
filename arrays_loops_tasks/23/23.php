<?php
/**
 * Created by PhpStorm.
 * User: Natalia
 * Date: 24.09.2017
 * Time: 16:30
 */
$str = $_POST['value'];
$array = array();
if ( is_numeric($str)) {
    for ($i=0;$i<=strlen($str)-1;$i++) {
        array_push($array, $str[$i]);
        }
    } else {
    echo "Введите числовые данные!";
    exit();
}
$sum = array_sum($array);
echo $sum;
