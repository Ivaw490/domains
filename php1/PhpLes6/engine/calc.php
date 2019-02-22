<?php
function calc(){
    $result = 0;
    if(isset($_GET["first-num"])&&$_GET["second-num"]){
        if(is_numeric($_GET["first-num"])&& is_numeric($_GET["second-num"])) {
            switch ($_GET["operation"]) {
                case "+":
                    $result = $_GET["first-num"] + $_GET["second-num"];
                    break;
                case "-":
                    $result = $_GET["first-num"] - $_GET["second-num"];
                    break;
                case "*":
                    $result = $_GET["first-num"] * $_GET["second-num"];
                    break;
                case "/":
                    if ($_GET["second-num"] == 0) {
                        $result = "Ай-я-яй, на ноль делить нельзя!";
                        break;
                    }
                    $result = $_GET["first-num"] / $_GET["second-num"];
                    break;
            }
        }else{
            $result = "Вы ввели что-то не то";
        }
    }
    return $result;
}