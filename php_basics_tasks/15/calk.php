<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор</title>
</head>
<body>
<?php
$a = $_POST['a'];
$b = $_POST['b'];
$operator = $_POST['operator'];
if (isset($operator)) {
    if (!(is_numeric($a)) or !(is_numeric($b))) {
        echo "Введите числовые значения";
    } else
    if ( $_POST['res']) {
        if ( $operator == '+') {
            $res = $a + $b;
        }
        if ( $operator == '-') {
            $res = $a - $b;
        }
        if ( $operator == '*') {
            $res = $a * $b;
        }
        if ( $operator == '/') {
            $res = $a / $b;
        }
        if ( $operator == '%') {
            $res = $a % $b;
        }
        echo "Результат: {$res}";
    }
} else {
    echo "Выберите действие";
}
?>
</body>
</html>