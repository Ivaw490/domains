<?php
include __DIR__ . '/../model/PathConstants.php';
include MODEL . 'authentication.php';

spl_autoload_register(function($classname){
    include_once "$classname";
});

$action = 'action_';
$action .= authentication();

switch($action){
    case 'action_login':


}

include VIEW . "menu.php";
