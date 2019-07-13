<?php
include __DIR__ . "/../../model/PathConstants.php";
include MODEL . "authentication.php";
include MODEL . "imgAvailability.php";
authentication();
session_start();

$conn = mysqli_connect("localhost", "root", "");
$sql = "SELECT * FROM gallery.images";
$images = mysqli_fetch_all(mysqli_query($conn,$sql),MYSQLI_ASSOC);
$images = imgAvailability($images);// проверка на наличие картинок

//очистка корзины (удаление всех элементов)
if($_GET["clean"]){
    unset($_SESSION["cart"]);
}
//удаление одного элемента корзины
if($_GET["del-item"]){
    unset($_SESSION["cart"][$_GET["item-id"]]);
}
//добавление элементов корзины в бд (одобрение/подтверждение заказа) с последующей очисткой корзины
if($_GET["approve"]){
    foreach ($_SESSION["cart"] as $item_id => $item){
        $sql = "INSERT INTO gallery.orders (good_id, user_id) VALUES ('$item_id', '{$_COOKIE["user_id"]}')";
        mysqli_query($conn,$sql);
    }
    unset($_SESSION["cart"]);
}
if($id = $_GET["id"]){
    $sql = "SELECT * FROM gallery.images WHERE id = '$id'";
    $single_img = mysqli_fetch_assoc(mysqli_query($conn, $sql));
    //добавление элемента в корзину
    if($_GET["add"]){
        $_SESSION["cart"][$id]=[
            "name"=>$single_img["name"],
            "path"=>$single_img["path"],
            "count"=>1
        ];
    }
    include VIEW . "single_img.php";
}else{
    include VIEW . "task4.php";
}
mysqli_close($conn);