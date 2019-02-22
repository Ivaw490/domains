<?php
include "good.class.php";
class bake extends good{
    private $grain_type;
    function __construct($name,$type, $price, $description, $amount, $grain_type){
        parent::__construct($name, $type, $price, $description, $amount);
        $this->grain_type = $grain_type;
    }
    function setGrain_type($grain_type){
        $this->grain_type = $grain_type;
    }
    function getGrain_type(){
        return $this->grain_type;
    }
    function viewGoodInfo(){
        echo "Наименование: " . $this->getName() . "<br>" .
            "Тип зерна: " . $this->getGrain_type() . "<br>" .
            "Тип: ". $this->getType() . "<br>" .
            "Цена: " . $this->getPrice() . "<br>" .
            "Описание: " . $this->getDescription() . "<br>" .
            "Кол-во: " . $this->getAmount() . "шт." . "<br>";
    }
}

$bake = new bake("Пирожок", "Выпечка", 25, "Очень вкусный пирожочек с мясом", 2,
    "Пшено");
$bake->viewGoodInfo();