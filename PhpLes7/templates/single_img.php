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
    <div id="div-single-img-info">
        <div class="single-img-info">
            <a href="<?=$single_img["path"] . $single_img["name"]?>" target="_blank">
                <img src=<?=$single_img["path"] . "mini/" . $single_img["name"]?>>
            </a>
            <div class="description">
                <p>Name: <?=$single_img["name"]?></p>
                <p>Path: <?=$single_img["path"]?></p>
                <?//ceil - округление в большую сторону(floor - в меньшую)?>
                <p>Size: <?=ceil($single_img["size"]/1000) . " kilobyte"?></p>
                <a href="/task4.php?id=<?=$single_img["id"]?>&add=true" class="add-to-cart-btn">Add to cart</a>
            </div>
        </div>
    </div>

    <div class="cart">
        <p>Cart</p>
        <div class="cart-items">
            <?php if(!$_SESSION["cart"]){ ?>
                <p>...</p>
            <?php }else{ ?>
                <div class="cart-btns">
                    <a href="/task4.php?id=<?=$single_img["id"]?>" id="approve-order">Approve</a>
                    <a href="/task4.php?id=<?=$single_img["id"]?>&clean=true" id="clean">Clean</a>
                </div>
                <?php foreach ($_SESSION["cart"] as $item_id => $cart_item): ?>
                    <div class="cart-item">
                        <h5>Name: <?=$cart_item["name"]?></h5>
                        <div class="cart-item-img">
                            <img alt="img" src=<?=$cart_item["path"] . "mini/" . $cart_item["name"]?>>
                            <a href="/task4.php?id=<?=$single_img["id"]?>&del-item=true&item-id=<?=$item_id?>"
                               title="delete item" id="x">x</a>
                        </div>
                    </div>
                <?php endforeach;?>
            <?php }?>
        </div>
    </div>
</div>


<a href="/task4.php" class="menu-btn">Назад в меню</a>
</body>
</html>
