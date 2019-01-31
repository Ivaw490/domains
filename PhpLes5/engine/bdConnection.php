<?php
function conn($bd_host, $bd_user, $bd_password){
    $conn = mysqli_connect($bd_host, $bd_user, $bd_password);
    if(!$conn){
        echo "Ошибка: " . mysqli_error($conn);
        return false;
    }else{
        return $conn;
    }
}