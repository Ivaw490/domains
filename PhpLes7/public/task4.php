<?php
include __DIR__. "/../config/main.php";
include ENGINE_DIR . "authentication.php";
authentication();
session_start();

$conn = mysqli_connect("localhost", "root", "");
$sql = "SELECT * FROM gallery.images";
$images = mysqli_fetch_all(mysqli_query($conn,$sql),MYSQLI_ASSOC);


if($id = $_GET["id"]){
    $sql = "SELECT * FROM gallery.images WHERE id = '$id'";
    $single_img = mysqli_fetch_assoc(mysqli_query($conn,$sql));
    if($_GET["add"]){
        $_SESSION["cart"][$id]=[
            "name"=>$single_img["name"],
            "path"=>$single_img["path"],
            "count"=>1
        ];
        $cart = $_SESSION["cart"];
    }
    if($_GET["clean"]){
        unset($_SESSION["cart"]);
    }
    if($_GET["del-item"]){
        unset($_SESSION["cart"][$_GET["item-id"]]);
    }
    include TMP_DIR . "single_img.php";
}else{
    include TMP_DIR . "task4.php";
}
mysqli_close($conn);