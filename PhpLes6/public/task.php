<?php
include __DIR__. "/../config/main.php";
include ENGINE_DIR . "calc.php";


$result = calc();
var_dump($_GET);
if(($_GET["task"])){
    static $task = 0;
    $task = $_GET["task"];
}
var_dump($task);
if($task == 1){
    include TMP_DIR . "task1.php";
}elseif($task == 2){
    include TMP_DIR . "task2.php";
}elseif($task == 3){
    include TMP_DIR . "task3.php";
}elseif($task == 4){
    include TMP_DIR . "task4.php";
}

