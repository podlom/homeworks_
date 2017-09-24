<?php
/**
 * Created by PhpStorm.
 * User: Natalia
 * Date: 17.09.2017
 * Time: 16:00
 */

$a = $_POST['value'];
if (is_numeric( $a)) echo "Integer";
elseif ( $a == "null") {
    $a = $_POST['value'];
    echo "NULL";
}
elseif ($a == "true" or $a == "false") {
    $a = $_POST['value'];
    echo "BOOLEAN";
}
else echo "String";
