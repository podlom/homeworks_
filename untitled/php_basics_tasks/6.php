<?php
/**
 * Created by PhpStorm.
 * User: Natalia
 * Date: 17.09.2017
 * Time: 1:13
 */

$age = 78;
if ( $age > 17 && $age < 60) {
    echo "Вам еще работать и работать";
} elseif ( $age > 59) {
    echo "Вам пора на пенсию";
}