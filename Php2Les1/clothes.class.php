<?php
include "good.class.php";
class clothes extends good{
    private $material;
    private $season;
    function __construct($name,$type, $season,$material, $price, $description, $amount){
        parent::__construct($name, $type, $price, $description, $amount);
        $this->material = $material;
        $this->season = $season;
    }
    function setMaterial($material){
        $this->material = $material;
    }
    function setSeason($season){
        $this->season = $season;
    }
    function getMaterial(){
        return $this->material;
    }
    function getSeason(){
        return $this->season;
    }
    function viewGoodInfo(){
        echo "Наименование: " . $this->getName() . "<br>" .
             "Тип: ". $this->getType() . "<br>" .
             "Материал: " . $this->getMaterial() . "<br>" .
             "Сезон: " . $this->getSeason() . "<br>" .
             "Цена: " . $this->getPrice() . "<br>" .
             "Описание: " . $this->getDescription() . "<br>" .
             "Кол-во: " . $this->getAmount() . "шт." . "<br>";
    }
}

$cloth = new clothes("Футболка", "Одежда", "Лето", "Шелк", 2500,
    "Красивый и качественный Абибас", 1);
$cloth->viewGoodInfo();