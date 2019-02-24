<?php

class digital extends good{
    private $grain_type;
    static private $incom = 0;

    function __construct($name,$type, $price, $description, $grain_type){
        parent::__construct($name, $type, $price, $description);
        $this->grain_type = $grain_type;
    }
    function setGrain_type($grain_type){
        $this->grain_type = $grain_type;
    }
    function getGrain_type(){
        return $this->grain_type;
    }
    function final_cost()
    {

    }
    function viewGoodInfo(){
        echo "Наименование: " . $this->getName() . "<br>" .
            "Тип зерна: " . $this->getGrain_type() . "<br>" .
            "Тип: ". $this->getType() . "<br>" .
            "Цена: " . $this->getPrice() . "<br>" .
            "Описание: " . $this->getDescription() . "<br>" .
            "Кол-во: " . $this->getAmount() . "шт." . "<br>" .
            "Финальная стоимость: " . $this->final_cost();
    }
}