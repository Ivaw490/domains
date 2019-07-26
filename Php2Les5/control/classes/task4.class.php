<?php
include_once MODEL . "authentication.php";
include_once MODEL . "imgAvailability.php";
include_once MODEL . "addItemToCart.php";

class task4 extends Base {

    // удаление всех элементов корзины
    function delCartAll(){
        unset($_SESSION["cart"]);
    }

    //удаление одного элемента корзины
    function delCartItem(){
        unset($_SESSION["cart"][$_GET["item-id"]]);
    }

    //добавление элементов корзины в бд (одобрение/подтверждение заказа) с последующей очисткой корзины
    function insertGallery(){
        insertGalleryOrder();
        $this->delCartAll();
    }

    // получение массива картинок
    function getImages(){
        $images = getImages();// полученик массив картинок из бд
        $images = imgAvailability($images);// проверка на наличие картинок в директории
        return $images;
    }


    // выполнение выбранного действия
    function act(){
        switch ($_GET["act"]){
            case 'clean':
                $this->delCartAll();
                break;
            case 'del-item':
                $this->delCartItem();
                break;
            case 'approve':
                $this->insertGallery();
                break;
        }
    }

    // построение страницы
    function build(){
        session_start();
        $this->title = 'task 4';
        $this->act();
        $cart = $this->Template("Cart");
        $this->content = $this->Template('task4', array(
            'images' => $this->getImages(),
            'cart' => $cart));
    }
}