<?php
header("Content-type: text/html; charset=utf-8");
$a = 2;
$b = 5;

if($a >= 0 && $b >= 0){
    echo $a - $b;
}else if($a < 0 && $b < 0){
    echo $a * $b;
}else if($a < 0 && $b >= 0 || $a >= 0 && $b < 0){
    echo $a + $b;
}
#------------------------------------------------------------------
echo "<br><br>";

$a=5;
switch($a){
    case 0: 
        echo $a++;
        echo ", ";
    case 1: 
        echo $a++;
        echo ", ";
    case 2: 
        echo $a++;
        echo ", ";
    case 3: 
        echo $a++;
        echo ", ";
    case 4: 
        echo $a++;
        echo ", ";
    case 5: 
        echo $a++;
        echo ", ";
    case 6: 
        echo $a++;
        echo ", ";
    case 7: 
        echo $a++;
        echo ", ";
    case 8: 
        echo $a++;
        echo ", ";
    case 9: 
        echo $a++;
        echo ", ";
    case 10: 
        echo $a++;
        echo ", ";
    case 11: 
        echo $a++;
        echo ", ";
    case 12: 
        echo $a++;
        echo ", ";
    case 13: 
        echo $a++;
        echo ", ";
    case 14: 
        echo $a++;
        echo ", ";
    case 15: 
        echo $a++;
}
#------------------------------------------------------------------
echo "<br><br>";

$a = 3;
$b = 21;

function sum($a, $b){
    return $a + $b;
}
$z = sum($a, $b);
echo "Результат сложения: $z<br>";

function sub($a, $b){
    return $a - $b;
}
$z = sub($a, $b);
echo "Результат вычитания: $z<br>";

function multipl($a, $b){
    return $a * $b;
}
$z = multipl($a, $b);
echo "Результат умножения: $z<br>";

function division($a, $b){
    return $a / $b;
}
$z = division($a, $b);
echo "Результат деления: $z<br>";
#------------------------------------------------------------------
echo "<br><br>";

function mathOperation($arg1, $arg2, $operation){
    switch($operation){
        case "sum":
            return sum($arg1, $arg2);
        case "sub":
            return sub($arg1, $arg2);
        case "multipl":
            return multipl($arg1, $arg2);
        case "division":
            return division($arg1, $arg2);
        default:
            return "Некорректный ввод";
    }
}
echo mathOperation(3, 5, "sub");
#------------------------------------------------------------------
echo "<br><br>";

$date = date("Y");
#------------------------------------------------------------------
echo "<br><br>";

function power($val, $pow){
    if($pow > 1){
        $pow--;
        $val *= power($val, $pow);
    }else if($pow == 0){
        $val = 1;
    }
    return $val;
}

echo power(2, 5);
#------------------------------------------------------------------
echo "<br><br>";

//1,21 час (минута)
//2,3,4,22,23 часа (минуты)
//5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,0 часов (минут)

date_default_timezone_set('Asia/Krasnoyarsk');

//вариант 1
function time1($hours, $minutes){
    if($hours == 1 || $hours == 21){
        $h = "$hours час";
    }
    if($minutes == 1 || $minutes == 21){
        $m = "$minutes минута";
    }
    if($hours >= 2 && $hours <= 4 || $hours >= 22 && $hours <= 23){
        $h = "$hours часа";
    }
    if($minutes >= 2 && $minutes <= 4 || $minutes >= 22 && $minutes <= 23){
        $m = "$minutes минуты";
    }
    if($hours >= 5 || $hours <= 20 || $hours == 0){
        $h = "$hours часов";
    }
    if($minutes >= 5 || $minutes <= 20 || $minutes == 0){
        $m = "$minutes минут";
    }
    return $h ." ". $m;
}

//вариант 2
function time2($val, $end1, $end2, $end3){
    if($val == 1 || $val == 21){
        $v = "$val $end1";
    }
    if($val >= 2 && $val <= 4 || $val >= 22 && $val <= 23){
        $v = "$val $end2";
    }
    if($val >= 5 || $val <= 20 || $val == 0){
        $v = "$val $end3";
    }  
    return $v;
}

echo time1(date("G"), date("i"));
echo "<br>";
echo time2(date("G"),"час","часа","часов") . " " . time2(date("i"),"минута","минуты","минут");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <footer><?=$date?></footer>
</body>
</html>