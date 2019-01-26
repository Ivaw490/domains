<?php   
include __DIR__ . "/../config/main.php";
include ENGINE_DIR . "/getgallery.php";
include ENGINE_DIR . "/files.php";
include EXTERNALS_DIR . "/resize.php";


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $filename = PUB_DIR . "img/" . $_FILES["img"]["name"];
    uploadFile($filename, 'img');
    resize($filename, PUB_DIR . "img/mini/" . $_FILES["img"]["name"], 200, 125);
    header("Location: /index.php");
}

$img_gallery = getgallery();
include TEMPLATES_DIR . "/gallery.php";
?>