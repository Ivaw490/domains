<?php

class goods_by_weight extends good{
    static private $income = 0;
    private $weight = 0;
    function __construct($name, $type, $description, $weight, $price){
        parent::__construct($name, $type, $description);
        $this->setWeight($weight);
        $this->setPrice($price);
        $this->setIncome();
    }
    function setWeight($weight){
        $this->weight = $weight;
    }
    function getWeight(){
        return $this->weight;
    }
    function getFinal_cost()
    {
        return $this->getPrice()*$this->getWeight();
    }
    function setIncome(){
        self::$income += $this->getFinal_cost();
    }
    static function  getIncome(){
        echo "Income(goods_by_weight): " . self::$income ."<br>";
}
    function viewGoodInfo(){
        echo "<br>Наименование: " . $this->getName() . "<br>" .
            "Тип: ". $this->getType() . "<br>" .
            "Цена: " . $this->getPrice() . "<br>" .
            "Описание: " . $this->getDescription() . "<br>" .
            "Вес: " . $this->getWeight() . "кг." . "<br>" .
            "Финальная стоимость: " . $this->getFinal_cost() . "<br><br>";
    }
}