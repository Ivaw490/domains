<?php
include __DIR__. "/../config/main.php";
if(!isset($_COOKIE["user_id"])){
    include "/login.php";
}else{
    include TMP_DIR . "menu.php";
}