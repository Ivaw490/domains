<?php
include __DIR__. "/../config/main.php";

$conn = mysqli_connect("localhost","root","");
$sql = "SELECT * FROM gallery.user where id = '{$_COOKIE['user_id']}'";
$user = mysqli_fetch_assoc(mysqli_query($conn, $sql));
$name = $user["name"];
$login = $user["login"];

include TMP_DIR . "acc.php";