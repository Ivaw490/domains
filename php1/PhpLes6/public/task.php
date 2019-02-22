<?php
include __DIR__. "/../config/main.php";
include ENGINE_DIR . "calc.php";

$result = calc();
$page = $_GET["task"];

if($page == 1){
    include TMP_DIR . "task1.php";
}elseif($page == 2) {
    include TMP_DIR . "task2.php";
}