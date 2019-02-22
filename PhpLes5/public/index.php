<?php   
include __DIR__ . "/../config/main.php";
include ENGINE_DIR . "/files.php";
include ENGINE_DIR . "/bdConnection.php";
include EXTERNALS_DIR . "/resize.php";

$conn = conn("localhost", "root", "");
$sql = "SELECT * FROM gallery.images_mini";
if($conn && mysqli_query($conn, $sql)){
    $img_gallery = mysqli_query($conn, $sql);
}else{
    echo "Ошибка: " . mysqli_error($conn);
    exit();
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $filename = $_FILES["img"]["name"]; //оригинальное имя изображения
    $path = PUB_DIR ."img/" . $_FILES["img"]["name"];//абсолютный путь до папки хранения полноразмерного изображения
    $path_mini = PUB_DIR ."img/mini/" . $_FILES["img"]["name"];//абсолютный путь до папки хранения уменьшенного изображения
    $size = $_FILES["img"]["size"];//размер загружаемого изображения

    uploadFile($path, "img");//помещаем изображение в $path
    resize($path, $path_mini, 200, 131);//создаем уменьшеную версию изображения и кладем ее в $path_mini
    $sql = "INSERT INTO gallery.images_mini (name, path) VALUES ('$filename', '/img/mini/')";

    mysqli_query($conn, $sql);//загружаем уменьшенное изображение в БД
    if(mysqli_error($conn)){
        echo "Ошибка: " . mysqli_error($conn);
        exit();
    }

    $last_mini_id = mysqli_insert_id($conn);//id последнего добавленного уменьшенной изображения в БД
    $sql = "INSERT INTO gallery.images (name, path, size, mini_id) 
            VALUES ('$filename', '/img/', '$size', '$last_mini_id')";
    mysqli_query($conn, $sql);//загружаем полноразмерное изображение в БД
    if(mysqli_error($conn)){
        echo "Ошибка: " . mysqli_error($conn);
        exit();
    }

    header("Location: /index.php");//заголовок с перенаправлением, для нормальной работы обновления страницы
}
mysqli_close($conn);//закрываем соединение с БД
include TEMPLATES_DIR . "/gallery.php";