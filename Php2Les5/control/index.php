<?php // входная точка
include_once __DIR__ . '/../model/PathConstants.php';
include_once MODEL . 'authentication.php';

spl_autoload_register(function($classname){
    if(file_exists("classes/$classname.class.php")){
        include_once "classes/$classname.class.php";
    }
});

$page = 'login';
$action = 'build';

// установка страницы и действия
if($_GET["a"] && $_GET["p"]) {
    $action = $_GET["a"];
    $page = $_GET["p"];
}

// проверка авторизации
if(authentication()){
    $page = authentication();
}

// создание страницы
$obj = new $page();
$obj->doit($action);