<?php
$itemId = $_GET['id'];
$singleCon = mysqli_connect("localhost", "root", "");
$sql = "SELECT * FROM gallery.images WHERE mini_id='$itemId'";
$data = mysqli_query($singleCon, $sql);
$item = mysqli_fetch_assoc($data);
echo '<img src = "' . $item["path"].$item["name"] .'">';
mysqli_close($singleCon);
