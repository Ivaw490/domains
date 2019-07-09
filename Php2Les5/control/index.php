<?php
include_once __DIR__ . '/../model/PathConstants.php';
include_once MODEL . 'authentication.php';

spl_autoload_register(function($classname){
    if(file_exists("$classname.class.php")){
        include_once "$classname.class.php";
    }
});

$page = 'login';
$action = 'build';
if(authentication()){
    $page = authentication();
}

if($_GET["a"] && $_GET["p"]) {
    $action = $_GET["a"];
    $page = $_GET["p"];
}
$obj = new $page();
$obj->doit($action);
