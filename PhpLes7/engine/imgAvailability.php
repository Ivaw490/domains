<?php // проверка на наличие картинок
function imgAvailability($arr){
    foreach ($arr as $key => $img){
        if(!file_exists("img/" . $img["name"]) || !file_exists("img/mini/" . $img["name"])){
            unset($arr[$key]);
        }
    }
    return $arr;
}