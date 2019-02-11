<?php
function getALL($conn){
    $sql = "SELECT * FROM gallery.feedback";
    $result = mysqli_query($conn, $sql);
    if($feedbackList = mysqli_fetch_all($result, MYSQLI_ASSOC)){
        return $feedbackList;
    }else{
        return $feedbackList[0] = [["text" => "There are no feedback yet:("]];
    }
}