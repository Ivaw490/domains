<?php          
function getGallery(){
    $conn = bd::getConnection();
    $sql = "SELECT * FROM gallery.images LIMIT 3";
    $str = $conn->prepare($sql);
    $str->execute();
    $result = $str->fetchAll();
    return $result;
}