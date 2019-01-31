<?php          
function getgallery($conn, $sql){
    return $row = mysqli_query($conn, $sql);
}