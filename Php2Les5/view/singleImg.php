<div class="container singleImg">
    <div class="div_single_img_info">
        <div class="single_img_info">
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

    <?=$cart?>
</div>

<a href="/index.php?p=task4&a=build" class="back-to-menu_btn">Назад в меню</a>