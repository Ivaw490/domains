<?php
include __DIR__. "/../config/main.php";

setcookie("user_id",$user_id["id"], time() - 6000);

$msg = "";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $conn = mysqli_connect("localhost","root","");
    $login = $_POST["login"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM gallery.user where login = '$login' and password = '$password'";
    if($user_id = mysqli_fetch_assoc(mysqli_query($conn, $sql))){
        mysqli_close($conn);
        setcookie("user_id",$user_id["id"], time() + 6000);
        header("location: acc.php");
        exit();
    }else{
        $msg = "Некорректный ввод :(";
    }

}
include TMP_DIR . "login.php";