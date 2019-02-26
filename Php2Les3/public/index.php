<?php   
include __DIR__ . "/../config/main.php";
include ENGINE_DIR . "/getgallery.php";
include ENGINE_DIR . "/files.php";
include EXTERNALS_DIR . "/resize.php";
// Подгружаем и активируем автозагрузчик Twig-а
require_once EXTERNALS_DIR .  'Twig/Autoloader.php';
Twig_Autoloader::register();
try {
// Указывает, где хранятся шаблоны
    $loader = new Twig_Loader_Filesystem('templates');
// Инициализируем Twig
    $twig = new Twig_Environment($loader);
// Подгружаем шаблон
    $template = $twig->loadTemplate('thanks.tmpl');
// Передаем в шаблон переменные и значения
// Выводим сформированное содержание
    echo $template->render(array(
        'name' => 'Clark Kent',
        'username' => 'ckent',
        'password' => 'krypt0n1te',
    ));
} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $filename = PUB_DIR . "img/" . $_FILES["img"]["name"];
    uploadFile($filename, 'img');
    resize($filename, PUB_DIR . "img/mini/" . $_FILES["img"]["name"], 200, 125);
    header("Location: /index.php");
}

$img_gallery = getgallery();
include TEMPLATES_DIR . "/gallery.php";
?>