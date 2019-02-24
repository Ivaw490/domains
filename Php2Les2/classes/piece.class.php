<?php

class piece extends good{
    private $material;
    private $season;
    private $amount = 0;
    static private $incom = 0;
    function __construct($name,$type, $season,$material, $price, $description, $amount){
        parent::__construct($name, $type, $price, $description);
        $this->material = $material;
        $this->season = $season;
        $this->amount = $amount;
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
    function final_cost()
    {

    }
    function viewGoodInfo(){
        echo "Наименование: " . $this->getName() . "<br>" .
             "Тип: ". $this->getType() . "<br>" .
             "Материал: " . $this->getMaterial() . "<br>" .
             "Сезон: " . $this->getSeason() . "<br>" .
             "Цена: " . $this->getPrice() . "<br>" .
             "Описание: " . $this->getDescription() . "<br>" .
             "Кол-во: " . $this->getAmount() . "шт." . "<br>" .
             "Финальная стоимость: " . $this->final_cost();
    }
}