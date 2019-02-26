<?php

class digital extends good{
    const PRICE = 1251;
    static private $income = 0;

    function __construct($name, $type, $description){
        parent::__construct($name, $type, $description);
        $this->setIncome();
    }
    function getPrice()
    {
        return self::PRICE;
    }
    function getFinal_cost()
    {
        return $this->getPrice();
    }
    function setIncome(){
        self::$income += $this->getFinal_cost();
    }
    static function getIncome(){
        echo "Income: " . self::$income."<br>";
    }
    function viewGoodInfo(){
        echo "<br>Наименование: " . $this->getName() . "<br>" .
             "Тип: ". $this->getType() . "<br>" .
             "Цена: " . $this->getPrice() . "<br>" .
             "Описание: " . $this->getDescription() . "<br>" .
             "Финальная стоимость: " . $this->getFinal_cost() . "<br><br>";
    }
}