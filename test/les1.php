<?php

abstract class product{
    private $count;
    private $price;
    private static $totalPrice = 0;

    function __construct($price, $count)
    {
        $this->setPrice($price);
        $this->setCount($count);
    }

    function setPrice($price){
        $this->price = $price;
    }

    function setCount($count){
        $this->count = $count;
    }

    function setTotalPrice(){
        self::$totalPrice += $this->price * $this->count;
    }

    function getPrice(){
        return $this->price;
    }

    function getCount(){
        return $this->count;
    }

    static function getTotalPrice(){
        return self::$totalPrice;
    }

    function __set($name, $value){
        echo "Свойство $name не существует";
    }

    function __get($name){
        echo "Свойство $name не существует";
    }

    function __call($name, $argument){
        return "Метод $name не существует";
    }
}

class comp extends product {
    private $memoryType;
    private $memCount;

    function __construct($price, $count, $memoryType, $memCount)
    {
        parent::__construct($price, $count);
        $this->setMemoryType($memoryType);
        $this->setMemCount($memCount);
    }

    function setMemoryType($memoryType){
        $this->memoryType = $memoryType;
    }

    function setMemCount($memCount){
        $this->memCount = $memCount;
    }

    function getMemoryType(){
        return $this->memoryType;
    }

    function getMemoryCount(){
        return $this->memCount;
    }

}
class bike extends product {
    private $bikeType;
    private $speedCount;

    function __construct($price, $count, $bikeType, $speedCount)
    {
        parent::__construct($price, $count);
        $this->setBikeType($bikeType);
        $this->setSpeedCount($speedCount);
    }

    function setBikeType($bikeType){
        $this->bikeType = $bikeType;
    }

    function setSpeedCount($memCount){
        $this->speedCount = $memCount;
    }

    function getMemoryType(){
        return $this->bikeType;
    }

    function getSpeedCount(){
        return $this->speedCount;
    }
}

$bike = new bike(12500, 2, 'mountain', 21);
$comp = new comp(125000, 1, 'SSD', 16);
echo product::getTotalPrice() . "<br>";
$bike->setTotalPrice();
echo product::getTotalPrice() . "<br>";
$comp->setTotalPrice();
echo product::getTotalPrice() . "<br>";
$bike->a;
echo $comp->ride();

$dir = opendir(".");
while($file = readdir()){
    if(!is_dir($file)){
        echo "<br>" . $file . "<br>";
    }

}
closedir($dir);