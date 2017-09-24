<?php
/**
 * Created by PhpStorm.
 * User: Natalia
 * Date: 24.09.2017
 * Time: 18:13
 */
for ( $i = 1; $i < 10; $i++) {
    echo "Умножение на {$i} <br>";
    for ( $j = 1; $j < 10; $j++) {
        $result = $i * $j;
        echo "{$i} * {$j} = {$result} <br>";
    }
}