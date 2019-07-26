<div class="container task4">
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
        <a href="/index.php?p=menu&a=build" class="back-to-menu_btn">Назад в меню</a>
    </div>
   <?=$cart?>
</div>