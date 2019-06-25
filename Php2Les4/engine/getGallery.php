<?php          
function getGallery($offset = 0){
    $conn = bd::getConnection();
    $sql = "SELECT * FROM gallery.images LIMIT 3 OFFSET {$offset}";
    $str = $conn->prepare($sql);
    $str->execute();
    $result = $str->fetchAll();
    return $result;
}