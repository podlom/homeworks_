<?php
/**
 * Created by PhpStorm.
 * User: Natalia
 * Date: 17.09.2017
 * Time: 13:28
 */

$a = 6;
$b = 6;
echo "а = {$a} <br>";
echo "b = {$b} <br>";
if ( $a < $b) {
    echo "Максимальное = {$b}";
} elseif ( $b < $a) {
    echo "Максимальное = {$a}";
} else {
    echo "Числа равны";
}