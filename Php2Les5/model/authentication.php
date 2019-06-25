<?php
function authentication(){
    if(!isset($_COOKIE["user_id"])) {
        return "login";
    }
}