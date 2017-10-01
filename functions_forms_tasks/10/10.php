<?php
/**
 * Created by PhpStorm.
 * User: Natalia
 * Date: 28.09.2017
 * Time: 21:33
 */

$str1 = explode(" ", $_POST['str1']);

function uniqueWords($a) {
    $b = array_unique ($a);
    $result = count($b);
    echo $result;
}

uniqueWords($str1);