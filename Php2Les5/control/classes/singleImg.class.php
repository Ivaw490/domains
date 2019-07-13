<?php


class singleImg extends task4{
    private $single_img;

    function getSingleImg(){
        return $this->single_img;
    }

    function setSingleImg(){
        $this->single_img = getImgById();
    }

    function addToCart(){
        addToCart($this->getSingleImg()); //добавление элемента в корзину
    }

    function build(){
        session_start();
        $this->setSingleImg();
        $single_img = $this->getSingleImg();
        if($_GET["add"]){
            $this->addToCart();
        }
        $this->act();
        $this->title = "singleImg";
        $this->content = $this->Template('singleImg', array(
            'path' => $single_img["path"] . $single_img["name"],
            'miniPath' => $single_img["path"] . "mini/" . $single_img["name"],
            'imgName' => $single_img["name"],
            'size' => ceil($single_img["size"]/1000) . " kilobyte",
            'imgId' => $single_img["id"]));
    }
}