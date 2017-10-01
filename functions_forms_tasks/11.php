<?php

$str = 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался. а там хоть трава не расти.';

function newStr ($str) {
    $s = explode( ". ", $str);
    for ( $i = 0; $i < count($s); $i++) {   
    $firstLetter = explode( " ", $s[$i]);
    $firstLetter[0] = mb_strtoupper($firstLetter[0]);
    $res_1 = implode(" ", $firstLetter);
    $s[$i] = $res_1;
    }
  $res_2 = implode(". ", $s);
  echo $res_2; echo "<br/>";
}

newStr( $str);