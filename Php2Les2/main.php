<?php

spl_autoload_register(function ($name){
    require_once "classes/$name.class.php";
});

$bake = new digital("Пирожок", "Выпечка", 25, "Очень вкусный пирожочек с мясом",
    "Пшено");
$bake->viewGoodInfo();

$cloth = new piece("Футболка", "Одежда", "Лето", "Шелк", 2500,
    "Красивый и качественный Абибас", 1);
$cloth->viewGoodInfo();