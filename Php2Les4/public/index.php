<?php   
include_once __DIR__ . "/../config/main.php";
include ENGINE_DIR . "/getGallery.php";
include ENGINE_DIR . "/files.php";
include EXTERNALS_DIR . "/resize.php";
include ENGINE_DIR . "/class/bd.class.php";
include ENGINE_DIR . "/class/img.class.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $conn = bd::getConnection();
    $filename = $_FILES["img"]["name"]; //оригинальное имя изображения
    $path = PUB_DIR ."img/" . $_FILES["img"]["name"];//абсолютный путь до папки хранения полноразмерного изображения
    $path_mini = PUB_DIR ."img/mini/" . $_FILES["img"]["name"];//абсолютный путь до папки хранения уменьшенного изображения
    $size = $_FILES["img"]["size"];//размер загружаемого изображения
    uploadFile($path, "img");//помещаем изображение в $path
    resize($path, $path_mini, 200, 131);//создаем уменьшеную версию изображения и кладем ее в $path_mini
    $sql = "INSERT INTO gallery.images_mini (name, path) VALUES ('$filename', '/img/mini/')";
    $conn->exec($sql);//загружаем уменьшенное изображение в БД
    $last_mini_id = $conn->lastInsertId();//id последнего добавленного уменьшенной изображения в БД
    $sql = "INSERT INTO gallery.images (name, path, size, mini_id) 
            VALUES ('$filename', '/img/', '$size', '$last_mini_id')";
    $conn->exec($sql);//загружаем полноразмерное изображение в БД
    header("Location: /index.php");//заголовок с перенаправлением, для нормальной работы обновления страницы
}

$img_gallery = getGallery();

include TEMPLATES_DIR . "/gallery.php";