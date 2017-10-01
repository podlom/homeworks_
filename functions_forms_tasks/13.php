<?php

$string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня'; 

function quantity ($a) {
 $array = explode(" ", $a);
 
 $b = array_unique($array);
 $b = array_values($b);
 $c = array();
 for ($i = 0; $i < count($b); $i++){
  $c[$b[$i]] = 0;
 }

 foreach ($c as $key => $value) {
  for ($i = 0; $i<count($array); $i++){
   if ( $key == $array[$i]) {
    $c[$key] +=1;
   }
  }
 }
 arsort($c);
 foreach ($c as $key => $value) {
  echo $key . " - " . $value . "<br>";
 }
}

quantity($string);

?>