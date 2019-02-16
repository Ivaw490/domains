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
    <div class="single-img-info">
        <a href="<?=$single_img["path"] . $single_img["name"]?>" target="_blank">
            <img src=<?=$single_img["path"] . "mini/" . $single_img["name"]?>>
        </a>
        <div class="description">
            <p>Name: <?=$single_img["name"]?></p>
            <p>Path: <?=$single_img["path"]?></p>
            <?//ceil - округление в большую сторону(floor - в меньшую)?>
            <p>Size: <?=ceil($single_img["size"]/1000) . " kilobyte"?></p>
        </div>
    </div>
</div>
<div class="cart">
    <p>Корзина</p>
    <div class="cart-item">
        <h5>Name: <?=$single_img["name"]?></h5>
        <img src=<?=$single_img["path"] . "mini/" . $single_img["name"]?>>
    </div>

</div>

<a href="/task4.php" class="menu-btn">Назад в меню</a>
</body>
</html>
