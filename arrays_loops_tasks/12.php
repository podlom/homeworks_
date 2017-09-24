<?php
/**
 * Created by PhpStorm.
 * User: Natalia
 * Date: 21.09.2017
 * Time: 22:39
 */

$n = 1000;
$num = 0;
while ( $n > 50) {
    $n = $n / 2;
    $num += 1;
}

echo "Результ: {$n}, количество итераций: {$num}";
