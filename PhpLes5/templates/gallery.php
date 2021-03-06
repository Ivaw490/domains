<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/styles/gallery.css">
    <title>Gallery</title>
</head>

<body>
    <h1>HW DIV</h1>
    <div class="add_img">
    <form id="add_img_form" enctype="multipart/form-data" method="POST">
        <label id="add_img_button">
            Load img
            <input type="file" name="img">
        </label>
        <input type="submit" value="Add img">
    </form>
    </div>

    <div class="gallery">
        <?php while($row = mysqli_fetch_assoc($img_gallery) ) {?>
            <a href="single.php?id=<?=$row["id"]?>" target="_blank">
                <img src="<?=$row["path"]. $row["name"]?>" alt="<?=$row["name"]?>">
            </a>
        <?php } ?>
    </div>

    <div class="form_bg">
        <div id="slider_form">
            <div id="X"></div>
        </div>
    </div>

</body>
</html>