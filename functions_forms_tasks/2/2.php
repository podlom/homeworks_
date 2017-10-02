<?php
/**
 * Created by PhpStorm.
 * User: Natalia
 * Date: 26.09.2017
 * Time: 21:41
 */


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
if (!empty($_POST['str1'])) {
  $str1 = explode(" ", $_POST['str1']);
  topTree($str1);
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Two</title>
</head>
<body>
<form method="post" action="">
    <textarea name="str1" required></textarea><br>
    <input type="submit" value="Найти самые длинные слова!">
</form>
</body>
</html>
