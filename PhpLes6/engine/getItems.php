<?php
function getALL($conn){
    $sql = "SELECT * FROM gallery.feedback";
    return $result = mysqli_query($conn, $sql);
    if(mysqli_fetch_all($result)){
        return $feedbackList;
    }else{
        return $feedbackList[0] = [["text" => "There are no feedback yet:("]];
    }
}