<?php
include __DIR__. "/../config/main.php";


$conn = mysqli_connect("localhost", "root", "");
$sql = "SELECT * FROM gallery.images";
$images = mysqli_fetch_all(mysqli_query($conn,$sql),MYSQLI_ASSOC);

if($id = $_GET["id"]){
    $sql = "SELECT * FROM gallery.images WHERE id = '$id'";
    $single_img = mysqli_fetch_assoc(mysqli_query($conn,$sql));
    include TMP_DIR . "single_img.php";
}else{
    include TMP_DIR . "task4.php";
}
mysqli_close($conn);