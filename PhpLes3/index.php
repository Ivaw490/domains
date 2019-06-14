<?php
header("Content-type: text/html; charset=utf-8");

echo "<br>#-------------задание 1---------------------<br><br>";
$i = 0;
while($i <= 100){
    if ($i % 3 == 0){
        echo $i;
        echo " ";
    }
    $i++;
}

echo "<br>#-------------задание 2---------------------<br><br>";

$n = 0;
do {
    if ($n == 0){
        $z = "$n - это ноль";
    }
    else if ($n % 2 == 0){
        $z = "$n - это четное число";
    }else{
        $z = "$n - это нечетное число";
    }
    echo "$z <br>";
    $n++;
}
while($n <= 10);

echo "<br>#-------------задание 3---------------------<br><br>";

$arr = [
    "Московская область" => [
        "Москва", "Зеленоград", "Клин"
    ],
    "Ленинградская область" => [
        "Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"
    ],
    "Рязанская область" => [
        "Рязань", "Сасово", "Сараи", "Касимов"
    ]
];

foreach($arr as $key => $val){
    echo "$key: <br>";
    // foreach($val as $item){
    //     echo "$item  ";
    // }
    echo implode(', ', $val) . ".";
    echo "<br>";
}

echo "<br>#-------------задание 4---------------------<br><br>";

$mass_of_latters = [
    "а" => "a",
    "б" => "b",
    "в" => "v",
    "г" => "g",
    "д" => "d",
    "е" => "e",
    "ё" => "e",
    "ж" => "zh",
    "з" => "z",
    "и" => "i",
    "й" => "i",
    "к" => "k",
    "л" => "l",
    "м" => "m",
    "н" => "n",
    "о" => "o",
    "п" => "p",
    "р" => "r",
    "с" => "s",
    "т" => "t",
    "у" => "u",
    "ф" => "f",
    "ц" => "ts",
    "ч" => "ch",
    "ш" => "sh",
    "щ" => "shch",
    "ъ" => "",
    "ы" => "y",
    "ь" => "'",
    "э" => "e",
    "ю"	=> "iu",
    "я"	=> "ia",
    " " => "_"
];

function translit($str, $mass, $notTrans = null, $space = null){
    $str = mb_strtolower($str);
    for($i = 0; $i < mb_strlen($str); $i++){
        $char = mb_substr($str, $i, 1);
        if($mass[$char]){
            if($char == " "){
                if($space){
                    $pup .= $mass[$char];
                    continue;
                }else{
                    $pup .= $char;
                    continue;
                }
            }else if($notTrans){
                $pup .= $char;
                continue; 
            }  
            $pup .= $mass[$char];        
        }else{
            $pup .= $char;
        }
    }
    return $pup;
}
$str = "Привет земля! Как дела? Ну, вот как-то так получилось:)";
echo translit($str, $mass_of_latters);

echo "<br>#-------------задание 5---------------------<br><br>";

echo translit($str, $mass_of_latters, 1, 1);

echo "<br>#-------------задание 6---------------------<br><br>";

$menuMass = [
    "Пункт 1" => [
        "Подпункт 1", "Подпункт 2", "Подпункт 3"
    ],
    "Пункт 2" => [
        "Подпункт 1", "Подпункт 2", "Подпункт 3", "Подпункт 4"
    ],
    "Пункт 3" => [
        "Подпункт 1", "Подпункт 2"
    ]
];

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
<?="<ul>";
    foreach ($menuMass as $key => $val){?>
        <li>
            <?=$key;?>
            <ul>
                <?php foreach($val as $item){?>
                    <li>
                        <?=$item?>
                    </li>
                <?php } ?>
            </ul>
        </li>
    <?php } ?>
<?="</ul>"?>
</body>
</html>

<?php 
echo "<br>#-------------задание 7---------------------<br><br>";

for($i = 0; $i < 10; print $i++){}