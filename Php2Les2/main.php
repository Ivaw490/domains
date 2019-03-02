<?php

spl_autoload_register(function ($name){
    require_once "classes/$name.class.php";
});

$prog = new digital("chrome", "Приложение", "Делает ваше устройство медленнее");
$prog->viewGoodInfo();
digital::getIncome();
$prog2 = new digital("chrome", "Приложение", "Делает ваше устройство медленнее");
$prog2->viewGoodInfo();
digital::getIncome();

$cookie = new piece("Печеньки", "Выпечка", "Очень вкусные печеньки", 2);
$cookie->viewGoodInfo();
piece::getIncome();
$cookie2 = new piece("Печеньки", "Выпечка", "Очень вкусные печеньки", 1);
$cookie2->viewGoodInfo();
piece::getIncome();
$cookie3 = new piece("Печеньки", "Выпечка", "Очень вкусные печеньки", 4);
$cookie3->viewGoodInfo();
piece::getIncome();

$sand = new goods_by_weight("Песок","Пляжный", "Чистый, теплый",25, 1000);
$sand->viewGoodInfo();
goods_by_weight::getIncome();
$sand2 = new goods_by_weight("Песок","Пляжный", "Чистый, теплый",0.25, 2350);
$sand2->viewGoodInfo();
goods_by_weight::getIncome();