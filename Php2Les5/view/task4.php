<div class="container">
    <div class="div-gallery">
        <div class="gallery">
            <?php foreach ($images as $img):?>
                <div class="image">
                    <a href="/index.php?p=singleImg&a=build&id=<?=$img["id"]?>">
                        <img src=<?=$img["path"] . "mini/" . $img["name"]?>>
                    </a>
                </div>
            <?php endforeach;?>
        </div>
        <a href="/index.php?p=menu&a=build" class="menu-btn">Назад в меню</a>
    </div>
    <div class="cart">
        <p>Cart</p>
        <div class="cart-items">
            <?php if(!$_SESSION["cart"]){ ?>
                <p>...</p>
            <?php }else{ ?>
                <div class="cart-btns">
                    <a href="/index.php?p=task4&a=build&act=approve" id="approve-order">Approve</a>
                    <a href="/index.php?p=task4&a=build&act=clean" id="clean">Clean</a>
                </div>
                <?php foreach ($_SESSION["cart"] as $item_id => $cart_item): ?>
                    <div class="cart-item">
                        <h5>Name: <?=$cart_item["name"]?></h5>
                        <div class="cart-item-img">
                            <img alt="img" src=<?=$cart_item["path"] . "mini/" . $cart_item["name"]?>>
                            <a href="/index.php?p=task4&a=build&act=del-item&item-id=<?=$item_id?>"
                               title="delete item" id="x">x</a>
                        </div>
                    </div>
                <?php endforeach;?>
            <?php }?>
        </div>
    </div>
</div>