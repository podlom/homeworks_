<?php
/**
 * Created by PhpStorm.
 * User: Natalia
 * Date: 21.09.2017
 * Time: 22:24
 */
for ( $i = 0; $i < 101; $i++) {
    if ( $i == 0) {
        continue;
    }
    elseif ( $i % 2 == 0) {
        echo $i . "<br>";
    }
}