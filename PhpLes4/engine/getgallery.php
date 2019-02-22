<?php          
function getgallery(){
    return array_filter(scandir(PUB_DIR . "/img/"), function($item){
            return !is_dir(PUB_DIR . "/img/" . $item);
    });
}