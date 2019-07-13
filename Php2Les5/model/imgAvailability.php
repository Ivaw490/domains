<?php // проверка на наличие картинок, при отсутствии - удаляет из массива
function imgAvailability($arr){
    foreach ($arr as $k=>$img){
        if(!file_exists("img/" . $img["name"]) || !file_exists("img/mini/" . $img["name"])){
            unset($arr[$k]);
        }
    }
    return $arr;
}