<?php
include __DIR__ . "/../config/main.php";
include ENGINE_DIR . "/class/bd.class.php";
include_once ENGINE_DIR . "/getGallery.php";

$conn = bd::getConnection();
$sql = "SELECT id FROM gallery.images ORDER BY id DESC LIMIT 1";
$str1 = $conn->query($sql);
$id = $str1->fetchAll();
$lastId = end($id); //получаем последний ключ массива
$flag = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $arr = getGallery($_POST['COUNT']);// получаем 3 элемента начиная с $_POST['COUNT'] элемента

    if(end($arr)["id"] == $lastId["id"]){
        $flag = "end";
    }
    $html = '';
    foreach ($arr as $item) {
        $html .= "<a href='#' class='gallery-item'>";
        $html .= "<img src=/../img/mini/";
        $html .= $item["name"];
        $html .= " data-src=/../img/";
        $html .= $item["name"];
        $html .= " alt=>";
        $html .= "</a>";
    }
    echo json_encode(['html' => $html, 'End' => $flag]);
}