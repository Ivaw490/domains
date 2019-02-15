<?php
function authentication(){
    if(!isset($_COOKIE["user_id"])) {
        header("location: login.php");
        exit();
    }
}