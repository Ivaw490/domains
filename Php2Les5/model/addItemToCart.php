<?php

//добавление элемента в корзину
function addToCart($item){
    $_SESSION["cart"][$_GET["id"]]=[
        "name"=>$item["name"],
        "path"=>$item["path"],
        "id"=>$item["id"],
        "count"=>1
    ];
}