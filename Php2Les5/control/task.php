<?php
include __DIR__ . "/../model/PathConstants.php";
include MODEL . "calc.php";
include MODEL . "authentication.php";
authentication();

$result = calc();
$page = $_GET["task"];

if($page == 1){
    include VIEW . "task1.php";
}elseif($page == 2) {
    include VIEW . "task2.php";
}