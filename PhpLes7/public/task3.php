<?php
include __DIR__. "/../config/main.php";
include ENGINE_DIR . "getItems.php";
include ENGINE_DIR . "authentication.php";
authentication();

if($conn = mysqli_connect("localhost","root","")){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(($user = $_POST["feedback-user"]) && ($text = $_POST["feedback-text"])){
            $sql = "INSERT INTO gallery.feedback (username, text) VALUES ('$user', '$text')";
            mysqli_query($conn, $sql);
        }
        header("Location: /task3.php");
    }

    $feedbackList = getALL($conn);
    mysqli_close($conn);
    include TMP_DIR . "task3.php";
}else{
    echo "Беда с подключением к бд:(";
}