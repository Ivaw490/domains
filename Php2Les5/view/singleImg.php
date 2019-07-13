<div class="container">
    <div id="div-single-img-info">
        <div class="single-img-info">
            <a href="<?=$path?>" target="_blank">
                <img src=<?=$miniPath?>>
            </a>
            <div class="description">
                <p>Name: <?=$imgName?></p>
                <p>Path: <?=$path?></p>
                <?//ceil - округление в большую сторону(floor - в меньшую)?>
                <p>Size: <?=$size?></p>
                <a href="/index.php?p=singleImg&a=build&id=<?=$imgId?>&act=single&add=true" class="add-to-cart-btn">Add to cart</a>
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
                    <a href="/index.php?p=singleImg&a=build&id=<?=$imgId?>&act=approve" id="approve-order">Approve</a>
                    <a href="/index.php?p=singleImg&a=build&id=<?=$imgId?>&act=clean" id="clean">Clean</a>
                </div>
                <?php foreach ($_SESSION["cart"] as $item_id => $cart_item): ?>
                    <div class="cart-item">
                        <h5>Name: <?=$cart_item["name"]?></h5>
                        <div class="cart-item-img">
                            <img alt="img" src=<?=$cart_item["path"] . "mini/" . $cart_item["name"]?>>
                            <a href="/index.php?p=singleImg&a=build&id=<?=$imgId?>&act=del-item&item-id=<?=$item_id?>"
                               title="delete item" id="x">x</a>
                        </div>
                    </div>
                <?php endforeach;?>
            <?php }?>
        </div>
    </div>
</div>

<a href="/index.php?p=task4&a=build" class="menu-btn">Назад в меню</a>