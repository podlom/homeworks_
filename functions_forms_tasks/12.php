<?php

$string = 'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.'; 

function neWString ($a) {
 echo $a . "<br><br>";
 $b = explode(". ", $a);
 $val = ".";
 for ($i = 0; $i < count($b)-1; $i++){
  $b[$i] = $b[$i].$val;
 }
 rsort($b);
 $new_str = implode(" ", $b);
 echo $new_str;
}

neWString($string)
?>