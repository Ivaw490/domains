<?php

class piece extends digital{
    static private $income = 0;
    private $amount = 0;
    function __construct($name,$type, $description, $amount){
        parent::__construct($name, $type, $description);
        $this->setAmount($amount);
        $this->setIncome();
    }
    function setAmount($amount)
    {
        $this->amount = $amount;
    }
    function getAmount()
    {
        return $this->amount;
    }
    function getPrice()
    {
        return parent::getPrice()*2;
    }
    function getFinal_cost()
    {
        return $this->final_cost = $this->getPrice()*$this->getAmount();
    }
    function setIncome(){
        self::$income += $this->getFinal_cost();
    }
    static function getIncome(){
        echo "Income(piece): " . self::$income ."<br>";
    }
    function viewGoodInfo(){
        echo "<br>Наименование: " . $this->getName() . "<br>" .
             "Тип: ". $this->getType() . "<br>" .
             "Цена: " . $this->getPrice() . "<br>" .
             "Описание: " . $this->getDescription() . "<br>" .
             "Кол-во: " . $this->getAmount() . "шт." . "<br>" .
             "Финальная стоимость: " . $this->getFinal_cost() . "<br><br>";
    }
}