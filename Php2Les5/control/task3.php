<?php
include __DIR__ . "/../model/PathConstants.php";
include MODEL . "getItems.php";
include MODEL . "authentication.php";
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
    include VIEW . "task3.php";
}else{
    echo "Беда с подключением к бд:(";
}