<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/../styles/gallery.css">
    <title>Gallery</title>
</head>

<body>
    <h1>HW DIV</h1>
    <div class="add_img">
    <form id="add_img_form" enctype="multipart/form-data" method="POST">
        <label id="add_img_button" class="btn">
            Load img
            <input type="file" name="img">
        </label>
        <input type="submit" value="Add img" class="btn">
    </form>
    </div>
    <div class="gallery">
        <?php foreach ($img_gallery as $img_item): ?>
            <a href="#" class="gallery-item">
                <img src="/../img/mini/<?=$img_item["name"]?>" data-src="/../img/<?=$img_item["name"]?>" alt="">
            </a>
        <?php endforeach; ?>
    </div>
    <div id="div-addMore">
        <a id="addMore" class="btn">Show More</a>
    </div>

    <div class="form_bg">
        <div id="slider_form">
            <div id="X"></div>
        </div>
    </div>

    <script src="/../js/js.js"></script>
</body>
</html>