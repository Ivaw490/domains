<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/styles/task.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="gallery">
        <?php foreach ($images as $img):
            ?>
            <a href="/task4.php?id=<?=$img["id"]?>">
                <img src=<?=$img["path"] . "mini/" . $img["name"]?>>
            </a>
        <?php endforeach;?>
    </div>
</div>

<a href="/index.php" class="menu-btn">Назад в меню</a>
</body>
</html>