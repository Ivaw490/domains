<?php   
include __DIR__ . "/../config/main.php";
include ENGINE_DIR . "/getGallery.php";
include ENGINE_DIR . "/files.php";
include EXTERNALS_DIR . "/resize.php";
include ENGINE_DIR . "/bd.class.php";
// Подгружаем и активируем автозагрузчик Twig-а
require_once EXTERNALS_DIR .  'Twig/Autoloader.php';
Twig_Autoloader::register();
bd::getConnection();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $filename = PUB_DIR . "img/" . $_FILES["img"]["name"];
    uploadFile($filename, 'img');
    resize($filename, PUB_DIR . "img/mini/" . $_FILES["img"]["name"], 200, 125);
    header("Location: /index.php");
}

$img_gallery = getGallery();

try {
// Указывает, где хранятся шаблоны
    $loader = new Twig_Loader_Filesystem(TEMPLATES_DIR);
// Инициализируем Twig
    $twig = new Twig_Environment($loader);
// Подгружаем шаблон
    $template = $twig->loadTemplate('gallery.tmpl');
// Передаем в шаблон переменные и значения
// Выводим сформированное содержание
    echo $template->render(array(
        'img_gallery' => $img_gallery
    ));
} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}