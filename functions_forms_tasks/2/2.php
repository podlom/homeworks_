<?php
/**
 * Created by PhpStorm.
 * User: Natalia
 * Date: 26.09.2017
 * Time: 21:41
 */

$str1 = explode(" ", $_POST['str1']);

function topTree ($a) {
        $result = array();
        $max = ' ';
       for ( $j = 1; $j < 4; $j++) {
          foreach ( $a as $key => $value) {
               if (strlen($value) > strlen($max)) {
                   $max = $value;
               }
           }
           array_push( $result, $max);
           $key = array_search($max, $a);
           unset( $a[$key]);
           array_values( $a);
           $max = ' ';
        }

    print_r( $result);
     return $result;
}

topTree($str1);