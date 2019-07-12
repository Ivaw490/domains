<?php
function calc(){
    $result = 0;
    if(isset($_POST["first-num"])&&$_POST["second-num"]){
        if(is_numeric($_POST["first-num"])&& is_numeric($_POST["second-num"])) {
            switch ($_POST["operation"]) {
                case "+":
                    $result = $_POST["first-num"] + $_POST["second-num"];
                    break;
                case "-":
                    $result = $_POST["first-num"] - $_POST["second-num"];
                    break;
                case "*":
                    $result = $_POST["first-num"] * $_POST["second-num"];
                    break;
                case "/":
                    if ($_POST["second-num"] == 0) {
                        $result = "Ай-я-яй, на ноль делить нельзя!";
                        break;
                    }
                    $result = $_POST["first-num"] / $_POST["second-num"];
                    break;
            }
        }else{
            $result = "Вы ввели что-то не то";
        }
    }
    return $result;
}