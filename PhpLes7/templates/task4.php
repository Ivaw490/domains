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
    <div class="div-gallery">
        <div class="gallery">
            <?php foreach ($images as $img):?>
                <div class="image">
                    <a href="/task4.php?id=<?=$img["id"]?>">
                        <img src=<?=$img["path"] . "mini/" . $img["name"]?>>
                    </a>
                </div>
            <?php endforeach;?>
        </div>
        <a href="/index.php" class="menu-btn">Назад в меню</a>
    </div>
    <div class="cart">
        <p>Cart</p>
        <div class="cart-items">
            <?php if(!$_SESSION["cart"]){ ?>
                <p>...</p>
            <?php }else{ ?>
                <div class="cart-btns">
                    <a href="/task4.php?approve=true" id="approve-order">Approve</a>
                    <a href="/task4.php?clean=true" id="clean">Clean</a>
                </div>
                <?php foreach ($_SESSION["cart"] as $item_id => $cart_item): ?>
                    <div class="cart-item">
                        <h5>Name: <?=$cart_item["name"]?></h5>
                        <div class="cart-item-img">
                            <img alt="img" src=<?=$cart_item["path"] . "mini/" . $cart_item["name"]?>>
                            <a href="/task4.php?del-item=true&item-id=<?=$item_id?>"
                               title="delete item" id="x">x</a>
                        </div>
                    </div>
                <?php endforeach;?>
            <?php }?>
        </div>
    </div>
</div>



</body>
</html>