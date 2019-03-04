<?php
include __DIR__ . "/../config/main.php";
include ENGINE_DIR . "/class/bd.class.php";

$conn = bd::getConnection();
$sql = "SELECT id FROM gallery.images";
$str1 = $conn->query($sql);
$id = $str1->fetchAll();
end($id);
$flag = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sql = "SELECT * FROM gallery.images LIMIT 3 OFFSET {$_POST['COUNT']}";
    $str = $conn->prepare($sql);
    $str->execute();
    $arr = $str->FetchAll();

    if(end($arr)["id"] == end($id)["id"]){
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