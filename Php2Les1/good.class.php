<?php

class good{
    private $name;
    private $price;
    private $description;
    private $amount = 0;

    function __construct($name, $price, $description, $amount)
    {
        $this->setName($name);
        $this->setPrice($price);
        $this->setDescription($description);
        $this->setAmount($amount);
    }

    function setName($name){
        $this->name = $name;
    }
    function setPrice($price){
        $this->price = $price;
    }
    function setDescription($description){
        $this->description = $description;
    }
    function setAmount($amount){
        $this->amount = $amount;
    }
    function getName(){
        return $this->name;
    }
    function getPrice(){
        return $this->price;
    }
    function getDescription(){
        return $this->description;
    }
    function getAmount(){
        return $this->amount;
    }
    function viewGoodInfo(){
        echo "Товар называется: " . $this->getName() . "<br>" .
             "Цена: " . $this->getPrice() . "<br>" .
             "Описание: " . $this->getDescription() . "<br>" .
             "Кол-во: " . $this->getAmount() . "шт." . "<br>";
    }
}

$good1 = new good("Пирожок", 25, "Очень вкусный пирожочек с мясом", 2);
$good1->viewGoodInfo();