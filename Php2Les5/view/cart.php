<div class="cart">
    <p>Cart</p>
    <div class="cart-items">
        <?php if(!$_SESSION["cart"]){ ?>
            <p>...</p>
        <?php }else{ ?>
            <div class="cart-btns">
                <a href="/index.php?p=task4&a=build&act=approve" class="approve-order order-btn">Approve</a>
                <a href="/index.php?p=task4&a=build&act=clean" class="clean order-btn">Clean</a>
            </div>
            <?php foreach ($_SESSION["cart"] as $item_id => $cart_item): ?>
                <div class="cart-item">
                    <h5>Name: <?=$cart_item["name"]?></h5>
                    <div class="cart-item-img">
                        <a href="/index.php?p=singleImg&a=build&id=<?=$cart_item["id"]?>">
                            <img src=<?=$cart_item["path"] . "mini/" . $cart_item["name"]?>>
                        </a>
                        <a href="/index.php?p=task4&a=build&act=del-item&item-id=<?=$item_id?>"
                           title="delete item" class="x">x</a>
                    </div>
                </div>
            <?php endforeach;?>
        <?php }?>
    </div>
</div>